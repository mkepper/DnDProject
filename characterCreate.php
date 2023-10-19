<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
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
          <div class="form-group">
            <label for="class">Class</label><br>
            <select name="class" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Fighter">Fighter</option>
                <option value="Barbarian">Barbarian</option>
                <option value="Wizard">Wizard</option>
            </select>
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
          <div class="row align-items-start">
            <div class="col-md-3">
                <input type="submit">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>