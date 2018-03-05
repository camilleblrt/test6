angular.module('DaskeyboardServices', [])
        .factory('ModalService', ["$q","$http","$rootScope", function($q, $http, $rootScope) {
    var translationPromise = null;
    var modalInformationObj = {};
    //var dataRef = new Firebase('https://flavien.firebaseio.com/');
    return {
        getTranslation: function(model, isEnglish, isHtml) {
            var config = {};
            var params = {};
            params.variable = model.id;
            if (isHtml)
                params.modeDisplay = "html";
            else
                params.modeDisplay = "markdown";
                    
            if (isEnglish)
                params.language = "en";
            else
                params.language = model.language;
            
            config.method = "GET";
            config.url = "/translation-app/getTranslation.php";
            config.params = params;
            
            translationPromise = $http(config)
                    .then(function(response) {
                return response.data;

            }, function(response) {
                // something went wrong
                return $q.reject(response.data);
            });

            return translationPromise;
        },
        setModalInformationObj: function(obj) {
            $rootScope.$broadcast('SetObject', obj);
            modalInformationObj = obj;
        },
        getModalInformationObj: function() {
            return modalInformationObj;
        }
    };
}]);
