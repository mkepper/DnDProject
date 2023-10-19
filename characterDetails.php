<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DnD Character Details</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">DnD Character Sheet</h1>
    </div>
    <?php 
    include "Subclass.php";
    $class = new SubClass;
    $class->setSubclass();
    ?>
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
</body>
</html>