<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <title>DnD Character Sheet</title>
  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="text-center">DnD Character Sheet</h1>
    <form action="characterDetails.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <!-- Basic information -->
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="name">Player Name</label>
            <input type="text" class="form-control" name="playerName" placeholder="Enter player name">
          </div>
          <div class="form-group" ng-app="myApp" ng-controller="myCtrl">
            <script type="text/javascript" src="functions.js"></script>
            <label for="class">Class</label><br>
            <select id="class" class="form-select" aria-label="Default select example" ng-model="selectedOption" 
            ng-options="option for option in options" ng-change="updateOptions()"></select>
            <label for="subClass">SubClass</label><br>
            <select id="subClass" class="form-select" aria-label="Default select example"
            ng-model="selectedSubOption" ng-options="subOption for subOption in subOptions"></select>
            <!-- <script>
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
          </script> -->
          </div>
          <div class="form-group">
            <label for="level">Level</label>
            <input type="number" class="form-control" name="level" placeholder="Enter level">
          </div>
          <div class="form-group">
            <label for="race">Race</label>
            <input type="text" class="form-control" name="race" placeholder="Enter race">
          </div>
          <div class="form-group">
            <label for="race">Alignment</label>
            <input type="text" class="form-control" name="alignment" placeholder="Enter alignment">
          </div><br>
          </div>
        <!-- Ability scores -->
        <h3>Ability Scores</h3>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="str">Strength</label>
                <input type="number" class="form-control" id="str">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="dex">Dexterity</label>
                <input type="number" class="form-control" id="dex">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="con">Constitution</label>
                <input type="number" class="form-control" id="con">
              </div>
            </div>
          </div>
          <!-- End of row -->
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="int">Intelligence</label>
                <input type="number" class="form-control" id="int">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="wis">Wisdom</label>
                <input type="number" class="form-control" id="int">
                </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="wis">Charisma</label>
                <input type="number" class="form-control" id="int">
                </div>
            </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>