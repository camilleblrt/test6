/*global rssReader */
'use strict';

controllersModule.controller('rssController', ["$scope","$http", "$timeout", function($scope, $http, $timeout) {

  $scope.rssEntries = $scope.rssEntries || [];


  $scope.rssUrl = 'http://www.daskeyboard.com/blog/?feed=rss2';
  // create
  // var requestUrl = 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&callback=JSON_CALLBACK&num=3&q=' + encodeURIComponent($scope.rssUrl);
  var requestUrl = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%20%3D%20\'' + encodeURIComponent($scope.rssUrl) + '\'&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=JSON_CALLBACK';
$timeout(function() {
  $.ajax({
    url: requestUrl,
    dataType: "jsonp",
    jsonpCallback: 'JSON_CALLBACK'}).
    success(function(data) {
    if(data.responseData !== null) {
          // save new rss entries
          // var rssEntries = data.responseData.feed.entries;
          var rssEntries = data.query.results.rss.channel.item;
          console.log(rssEntries);
          for(var n = 0; n < rssEntries.length; n++) {
            // check for published date to order by - default to now.
            var date = Date.parse(rssEntries[n].publishedDate);
            if(isNaN(date)) date = Date.parse(Date());
            rssEntries[n].publishedDate = date;
            // add entries with unique link.
            $scope.rssEntries.pushUnique(rssEntries[n], function(a, b) { return a.link === b.link; });
          }

          // sort
          $scope.rssEntries = $scope.rssEntries.sort(function(a, b) { return -(a.publishedDate - b.publishedDate); });
        } else {

        };
        $scope.$digest();
      });

}, 1000);

}]);
