var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
			$scope.options = ['Option 1', 'Option 2', 'Option 3'];
			$scope.subOptions = [];

			$scope.updateOptions = function() {
				if ($scope.selectedOption == 'Option 1') {
					$scope.subOptions = ['Suboption 1A', 'Suboption 1B', 'Suboption 1C'];
				} else if ($scope.selectedOption == 'Option 2') {
					$scope.subOptions = ['Suboption 2A', 'Suboption 2B', 'Suboption 2C'];
				} else if ($scope.selectedOption == 'Option 3') {
					$scope.subOptions = ['Suboption 3A', 'Suboption 3B', 'Suboption 3C'];
				}
			};
		});