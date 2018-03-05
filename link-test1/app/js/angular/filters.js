'use strict';

/* Filters */

angular.module('DaskeyboardFilters', [])
    .filter('image', function () {
        return function (text) {
        	
            var m,
            urls = [], 
            str = text,
            rex = /<img.+src="([^"]*)"/g;

            while ( m = rex.exec( str ) ) {
                    urls.push( m[1] );
            }

             if (urls.length === 0 ){
                    return "";
            }


            return urls[0];
        };
    })
    
    .filter('truncate', function () {
        return function (text, length, end) {
            if (text === undefined){
                return;
            }
            if (isNaN(length))
                length = 10;

            if (end === undefined)
                end = "...";       
            if (text.length <= length || text.length - end.length <= length) {
                return text;
            }
            else {
                return String(text).substring(0, length-end.length) + end;
            }

        };
    });

