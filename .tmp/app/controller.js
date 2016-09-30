(function () {
  'use strict';
  angular
    .module('portfolioApp')
    .controller('PortfolioController', ['$scope', '$document', 'DribbbleShots', function ($scope, $document, DribbbleShots) {

      DribbbleShots.query().$promise.then(function(shots) {
        $scope.shots = shots;
      });

      $scope.showMenu = false;

      $scope.toggleMenu  = function(){
        $scope.showMenu = !$scope.showMenu;
      };

      $scope.closeMenu = function(){
        $scope.showMenu = false;
      };

      $scope.scrollToElement = function(element){
        var someElement = angular.element(document.getElementById(element));
        $document.scrollToElementAnimated(someElement);
      };

      $scope.sendForm = function(){
        alert('teste');
      };
    }]);

})();
