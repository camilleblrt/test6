 'use strict';

 /* Controllers */
 controllersModule.controller('ApplicationController', ['$scope', '$cookieStore', '$location', '$window', '$timeout', '$interval',
     function($scope, $cookieStore, $location, $window, $timeout, $interval) {


         /* switch selector module */
         $scope.sw_brand = ['Cherry', 'Das Keyboard - Alpha-Zulu', 'Das Keyboard - Gamma-Zulu'];
         $scope.sw_brand_cat = {
             'Cherry': ['Blue - Clicky', 'Brown - Soft Tactile'],
             'Das Keyboard - Alpha-Zulu': ['Mustard - Soft Tactile', 'Olive - Linear'],
             'Das Keyboard - Gamma-Zulu': ['Soft Tactile']
         };
         $scope.selector_sw = 'Cherry';
         $scope.selector_sw_type = $scope.sw_brand_cat[$scope.selector_sw][0];
         $scope.changeSwBrand = function changeSwBrand() {
             $scope.selector_sw_type = $scope.sw_brand_cat[$scope.selector_sw][0];
         }
         $scope.selector_sw2 = 'Cherry';
         $scope.selector_sw_type2 = $scope.sw_brand_cat[$scope.selector_sw][1];
         $scope.changeSwBrand2 = function changeSwBrand2() {
                 $scope.selector_sw_type2 = $scope.sw_brand_cat[$scope.selector_sw2][0];
             }
             /* position of the text in the carousel */
         $scope.right = "col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-5 carousel-box";
         $scope.left = "col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box";
         $scope.center = "col-sm-offset-0 col-md-offset-3 col-lg-offset-4  col-sm-12 col-md-10 col-lg-4 carousel-box";

         $scope.changeImage = false;
         //after 3seconds change home image.
         $timeout(function() {
             $scope.changeImage = true;
         }, 3000);
         $scope.date = new Date();

         $scope.isSoundBrownPlay = false;
         $scope.isSoundRedPlay = false;
         $scope.isSoundBluePlay = false;
         $scope.isSoundMustardPlay = false;
         $scope.isSoundOlivePlay = false;

         $scope.elementSoundBrown = document.getElementById('soundBrown');
         $scope.elementSoundMustard = document.getElementById('soundMustard');
         $scope.elementSoundOlive = document.getElementById('soundOlive');
         $scope.elementSoundBlue = document.getElementById('soundBlue');
         $scope.elementSoundRed = document.getElementById('soundRed');
         $scope.myHTML = 'I am an <code>HTML</code>string with <a href="#">links!</a> and other <em>stuff</em>';

         if ($location.search().edit === "on") $cookieStore.put("editTranslation", true);
         if ($location.search().edit === "off") $cookieStore.remove("editTranslation");

         $scope.editOn = function() {
             $window.location.href = '/#?edit=on';
         };

         $scope.editOff = function() {
             $window.location.href = '/#?edit=off';
         };

         $scope.soundBrown = function() {
             if ($scope.isSoundBluePlay === true) {
                 $scope.elementSoundBlue.pause();
                 $scope.isSoundBluePlay = false;
             }
             if ($scope.isSoundRedPlay === true) {
                 $scope.elementSoundRed.pause();
                 $scope.isSoundRedPlay = false;
             }
             $scope.elementSoundBrown.addEventListener("ended", function() {
                 $scope.elementSoundBrown.currentTime = 0;
                 $scope.isSoundBrownPlay = false;
                 $('#tactileExperience #audioTests figure .playButton.brown').removeClass("isPlaying");
             });
             $scope.isSoundBrownPlay = !$scope.isSoundBrownPlay;
             if ($scope.isSoundBrownPlay) {
                 $('#tactileExperience #audioTests figure .playButton.brown').addClass("isPlaying");
                 $scope.elementSoundBrown.play();
                 $scope.elementSoundBrown.currentTime = 0;
             } else {
                 $scope.elementSoundBrown.pause();
             }
         };

         $scope.soundMustard = function() {
             if ($scope.isSoundBluePlay === true) {
                 console.log("okii");
                 $scope.elementSoundBlue.pause();
                 $scope.isSoundBluePlay = false;
             }
             if ($scope.isSoundBrownPlay === true) {
                 console.log("okii");
                 $scope.elementSoundBrown.pause();
                 $scope.isSoundBrownPlay = false;
             }
             if ($scope.isSoundOlivePlay === true) {
                 console.log("okii");
                 $scope.elementSoundOlive.pause();
                 $scope.isSoundOlivePlay = false;
             }
             if ($scope.isSoundRedPlay === true) {
                 $scope.elementSoundRed.pause();
                 $scope.isSoundRedPlay = false;
             }
             $scope.elementSoundMustard.addEventListener("ended", function() {
                 $scope.elementSoundMustard.currentTime = 0;
                 $scope.isSoundMustardPlay = false;
                 $('#tactileExperience #audioTests figure .playButton.mustard').removeClass("isPlaying");
             });
             $scope.isSoundMustardPlay = !$scope.isSoundMustardPlay;
             if ($scope.isSoundMustardPlay) {
                 $('#tactileExperience #audioTests figure .playButton.mustard').addClass("isPlaying");
                 $scope.elementSoundMustard.play();
                 $scope.elementSoundMustard.currentTime = 0;
             } else {
                 $scope.elementSoundMustard.pause();
             }
         };
         $scope.soundOlive = function() {
             if ($scope.isSoundBluePlay === true) {
                 console.log("okii");
                 $scope.elementSoundBlue.pause();
                 $scope.isSoundBluePlay = false;
             }
             if ($scope.isSoundMustardPlay === true) {
                 console.log("okii");
                 $scope.elementSoundMustard.pause();
                 $scope.isSoundMustardPlay = false;
             }
             if ($scope.isSoundBrownPlay === true) {
                 console.log("okii");
                 $scope.elementSoundBrown.pause();
                 $scope.isSoundBrownPlay = false;
             }
             if ($scope.isSoundRedPlay === true) {
                 $scope.elementSoundRed.pause();
                 $scope.isSoundRedPlay = false;
             }
             $scope.elementSoundOlive.addEventListener("ended", function() {
                 $scope.elementSoundOlive.currentTime = 0;
                 $scope.isSoundOlivePlay = false;
                 $('#tactileExperience #audioTests figure .playButton.olive').removeClass("isPlaying");
             });
             $scope.isSoundOlivePlay = !$scope.isSoundOlivePlay;
             if ($scope.isSoundOlivePlay) {
                 $('#tactileExperience #audioTests figure .playButton.olive').addClass("isPlaying");
                 $scope.elementSoundOlive.play();
                 $scope.elementSoundOlive.currentTime = 0;
             } else {
                 $scope.elementSoundOlive.pause();
             }
         };

         $scope.soundBlue = function() {
             if ($scope.isSoundOlivePlay === true) {
                 console.log("okii");
                 $scope.elementSoundOlive.pause();
                 $scope.isSoundOlivePlay = false;
             }
             if ($scope.isSoundMustardPlay === true) {
                 console.log("okii");
                 $scope.elementSoundMustard.pause();
                 $scope.isSoundMustardPlay = false;
             }
             if ($scope.isSoundBrownPlay === true) {
                 $scope.elementSoundBrown.pause();
                 $scope.isSoundBrownPlay = false;
             }
             if ($scope.isSoundRedPlay === true) {
                 $scope.elementSoundRed.pause();
                 $scope.isSoundRedPlay = false;
             }
             $scope.elementSoundBlue.addEventListener("ended", function() {
                 $scope.elementSoundBlue.currentTime = 0;
                 $scope.isSoundBluePlay = false;
                 $('#tactileExperience #audioTests figure .playButton.blue').removeClass("isPlaying");

             });
             $scope.isSoundBluePlay = !$scope.isSoundBluePlay;
             if ($scope.isSoundBluePlay) {
                 $('#tactileExperience #audioTests figure .playButton.blue').addClass("isPlaying");
                 $scope.elementSoundBlue.play();
                 $scope.elementSoundBlue.currentTime = 0;
             } else {
                 $scope.elementSoundBlue.pause();
             }
         };



         $scope.soundRed = function() {
             if ($scope.isSoundMustardPlay === true) {
                 console.log("okii");
                 $scope.elementSoundMustard.pause();
                 $scope.isSoundMustardPlay = false;
             }
             if ($scope.isSoundOlivePlay === true) {
                 console.log("okii");
                 $scope.elementSoundOlive.pause();
                 $scope.isSoundOlivePlay = false;
             }
             if ($scope.isSoundBrownPlay === true) {
                 $scope.elementSoundBrown.pause();
                 $scope.isSoundBrownPlay = false;
             }
             if ($scope.isSoundBluePlay === true) {
                 $scope.elementSoundBlue.pause();
                 $scope.isSoundBluePlay = false;
             }
             $scope.elementSoundRed.addEventListener("ended", function() {
                 $scope.elementSoundRed.currentTime = 0;
                 $scope.isSoundRedPlay = false;
                 $('#tactileExperience #audioTests figure .playButton.red').removeClass("isPlaying");
             });
             $scope.isSoundRedPlay = !$scope.isSoundRedPlay;
             if ($scope.isSoundRedPlay) {
                 $('#tactileExperience #audioTests figure .playButton.red').addClass("isPlaying");
                 $scope.elementSoundRed.play();
                 $scope.elementSoundRed.currentTime = 0;
             } else {
                 $scope.elementSoundRed.pause();
             }
         };

         $scope.$watch('isSoundBluePlay', function() {
             if ($scope.isSoundBluePlay) {
                 $('#tactileExperience #audioTests figure .playButton.blue').addClass("isPlaying");
             } else {
                 $('#tactileExperience #audioTests figure .playButton.blue').removeClass("isPlaying");
             }
         });
         $scope.$watch('isSoundMustardPlay', function() {
             if ($scope.isSoundMustardPlay) {
                 $('#tactileExperience #audioTests figure .playButton.mustard').addClass("isPlaying");
             } else {
                 $('#tactileExperience #audioTests figure .playButton.mustard').removeClass("isPlaying");
             }
         });
         $scope.$watch('isSoundOlivePlay', function() {
             if ($scope.isSoundOlivePlay) {
                 $('#tactileExperience #audioTests figure .playButton.olive').addClass("isPlaying");
                 $('#tactileExperience #audioTests figure .playButton.olive').removeClass("isPlaying");
             }
         });


         $scope.$watch('isSoundBrownPlay', function() {
             if ($scope.isSoundBrownPlay) {
                 $('#tactileExperience #audioTests figure .playButton.brown').addClass("isPlaying");
             } else {
                 $('#tactileExperience #audioTests figure .playButton.brown').removeClass("isPlaying");
             }
         });

         $scope.$watch('isSoundRedPlay', function() {
             if ($scope.isSoundRedPlay) {
                 $('#tactileExperience #audioTests figure .playButton.red').addClass("isPlaying");
             } else {
                 $('#tactileExperience #audioTests figure .playButton.red').removeClass("isPlaying");
             }
         });

         $timeout(
             function() {
                 $scope.isSecondImageShownHomePage = true;
             }, 3000);

         // Gaming sounds
         $scope.isSoundTactilePlay = false;
         $scope.isSoundLinearPlay = false;

         $scope.elementSoundTactile = document.getElementById('SoundTactile');
         $scope.elementSoundLinear = document.getElementById('SoundLinear');

         $scope.SoundTactile = function() {
             if ($scope.isSoundLinearPlay === true) {
                 $scope.elementSoundLinear.pause();
                 $scope.isSoundLinearPlay = false;
             }

             $scope.elementSoundTactile.addEventListener("ended", function() {
                 $scope.elementSoundTactile.currentTime = 0;
                 $scope.isSoundTactilePlay = false;
                 $('#tactileExperience #audioTests figure .playButton').removeClass("isPlaying");
             });
             $scope.isSoundTactilePlay = !$scope.isSoundTactilePlay;
             if ($scope.isSoundTactilePlay) {
                 $('#tactileExperience #audioTests figure .playButton').addClass("isPlaying");
                 $scope.elementSoundTactile.play();
                 $scope.elementSoundTactile.currentTime = 0;
             } else {
                 $scope.elementSoundTactile.pause();
             }
         };


         $scope.SoundLinear = function() {
             if ($scope.isSoundTactilePlay === true) {
                 $scope.elementSoundTactile.pause();
                 $scope.isSoundTactilePlay = false;
             }

             $scope.elementSoundLinear.addEventListener("ended", function() {
                 $scope.elementSoundLinear.currentTime = 0;
                 $scope.isSoundLinearPlay = false;
                 $('#tactileExperience #audioTests2 figure .playButton').removeClass("isPlaying");

             });
             $scope.isSoundLinearPlay = !$scope.isSoundLinearPlay;
             if ($scope.isSoundLinearPlay) {
                 $('#tactileExperience #audioTests2 figure .playButton').addClass("isPlaying");
                 $scope.elementSoundLinear.play();
                 $scope.elementSoundLinear.currentTime = 0;
             } else {
                 $scope.elementSoundLinear.pause();
             }
         };
}]);