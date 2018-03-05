angular.module('DaskeyboardDirectives', [])

        .directive('metadotTranslation', ["$http","$cookieStore","$rootScope","$compile","$interpolate","ModalService", function( $http,$cookieStore,$rootScope, $compile,$interpolate, ModalService) {
            return {
                restrict: 'A',
                transclude: false,
                scope: {
                    id : '@'
                },
                link : function (scope, element, attrs) {
                    if ($cookieStore.get('editTranslation')){
                         scope.model = {};
                         scope.model.id = scope.id;
                         scope.location = location.pathname.substring(1,4);
                         scope.model.language = getLanguage(scope.location);
                         ModalService.getTranslation(scope.model, null,true).then(function(translation){
                            contentHtml = translation;
                            contentHtml += '<button style="margin-left:5px" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" ng-click="openModal(\''+attrs.id+'\')"><i class="icon-edit"></i></button>';
                        element.replaceWith($compile('<span>'+contentHtml+'</span>')(scope));
                        }, function(error){});

                     }


                    scope.openModal = function(id){
                         scope.model = {};
                         scope.model.id = id;
                         scope.location = location.pathname.substring(1,4);
                         scope.model.language = getLanguage(scope.location);

                         ModalService.setModalInformationObj(scope.model);
                         $rootScope.$broadcast('openModal');

                    };

                    scope.onSaveTranslation = function(){

                        var config = {};
                        var data = {};

                        var currentCaractere = null;
                        for (var i =0 ; i< scope.translation.content.length ; i++){
                            currentCaractere = scope.translation.content.slice(i, i+1);
                            console.log(currentCaractere);
                        }

                        data.variable = attrs.id;
                        data.language = scope.translation.language;
                        data.content = scope.translation.content;
                        config.method = "POST";
                        config.url = "/translationApp/updateTranslation.php";
                        config.data = data;

                        $http(config).success(function(data){
                            window.location.reload();
                        });
                    };
                }
            };
        }])

         /**
         *
         * <markdown source="data">{{data}}</markdown> converter tag.
         * data will be converted from Markdown to HTML.
         * Requires the Showdown js library.
         */
        .directive('markdown', ["$interpolate", function($interpolate) {
            var converter = Markdown.getSanitizingConverter();

            return {
                restrict: 'E',
                link: function(scope, element, attrs) {
                    var text = element.text();
                    /**
                     * Important: trim white spaces, otherwise leading white
                     * spaces could be taken as markdown markup (e.g. like code).
                     * Example of case where this is an issue. Note space before {{data}}:
                     * <markdown source="data">    {{data}}   </markdown> converter tag.
                     */
                    text = text.replace(/^\s+|\s+$/g, "");
                    scope.$watch(attrs.source, function(value) {
                        var e = $interpolate(text)(scope);
                        var htmlText = converter.makeHtml(e);
                        element.html(htmlText);
                    });
                }
            };
        }])

        .directive('markdownHelp',function(){
            return{
                restrict: "E",
                templateUrl: '/js/angular/template/markdown_help.html',
                link: function(scope,element, attrs){
                    scope.help = element.text();
                }
            };

        })

        .directive('focusMe', ["$timeout", function($timeout) {
          return function(scope, element, attrs) {
            scope.$watch(attrs.focusMe, function(value) {
              if(value) {
                $timeout(function() {
                  element.focus();
                }, 700);
              }
            });
          };
        }])

        .directive('modalTranslation', ["$http","$rootScope","ModalService", function($http,$rootScope, ModalService) {

            var converter = Markdown.getSanitizingConverter();

            return {
                restrict: 'AE',
                templateUrl: '/js/angular/template/modal.html',

                link: function(scope, element, attrs, controller) {
                   scope.focusInput=false;
                   $rootScope.$on('openModal', function () {
                        scope.AddPreviousTranslation = false;
                        scope.markdownHelpView = false;
                        scope.focusInput=true;
                        scope.location = location.pathname.substring(1,4);
                        scope.object.language = getLanguage(scope.location);

                    });

                   $rootScope.$on('SetObject', function (event, data) {
                        scope.object = data;
                        ModalService.getTranslation(data, null,false).then(function(translation){
                                scope.object.translation = translation;
                            }, function(error){});
                        if (data.language !== 'en'){
                            ModalService.getTranslation(data, true,false).then(function(translation){
                                    scope.translationEnglish = translation;
                                }, function(error){});
                         }

                    });

                     scope.$watch('object.language',function(language){
                            if (language !== undefined){
                                ModalService.getTranslation(scope.object,null,false).then(function(translation){
                                   scope.object.translation = translation;

                               }, function(error){});
                                ModalService.getTranslation(scope.object,true,false).then(function(translation){
                                    scope.translationEnglish = translation;
                                }, function(error){});
                            }

                            if (scope.AddPreviousTranslation){
                                scope.onPreviousTranslation();
                            }
                        });


                   scope.onSaveTranslation = function(){

                       var config = {};
                       var data = {};

                       var contentHtml = converter.makeHtml(scope.object.translation);

                        /*  delete the tag p */
                        contentHtmlIsList = contentHtml.match(/<ul>/);
                        if (contentHtmlIsList === null){
                            contentHtmlWithouP = contentHtml.match(/<p>([^]*)<\/p>/);
                            if (contentHtmlWithouP !== null){
                                contentHtml = contentHtmlWithouP[1];
                            }
                        }

                       data.variable = scope.object.id;
                       data.language = scope.object.language;

                       data.contentMarkdown = scope.object.translation;


                       console.log(contentHtml);
                       //contentHtml is fine
                      
                       data.contentHtml = contentHtml;
                       config.method = "POST";
                       config.url = "/translation-app/updateTranslation.php";
                       config.data = data;

                       $http(config).success(function(data){
                           window.location.reload();


                           switch (data){
                               case 'error_fopen' : alert("Error with 'fopen'.");
                                   break;
                           }

                       });
                   };

                   scope.onPreviousTranslation = function(){
                        var config = {};
                        var params = {};
                        params.variable = scope.object.id;
                        params.language = scope.object.language;
                        config.method = "GET";
                        config.url = "/translation-app/getPreviousTranslation.php";
                        config.params = params;
                        $http(config).success(function(data){
                           scope.previousTranslation = data;
                       });
                   };
                }
            };
        }])


        // This directive aims to not show a blog post if it has no image TO BE FINISHED
        // .directive('noImageBlogzsdklfasdjkf', function(){
        //     return {
        //         link: function(scope, element, attrs) {
        //             element.bind('error', function() {
        //                 element.hasClass('blog-image').bind('error', function (){
        //                     attrs.ngShow = "false";
        //                 })
        //             });
        //         }
        //     }
        // })

        ;
