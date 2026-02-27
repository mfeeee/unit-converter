<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unit Converter</title>
  <link rel="stylesheet" href="static/styles.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h1>Unit Converter</h1>

      <nav class="tabs">
        <a href="index.php" class="<?= $currentPage === 'length' ? 'active' : '' ?>">Length</a>
        <a href="weight.php" class="<?= $currentPage === 'weight' ? 'active' : '' ?>">Weight</a>
        <a href="temperature.php" class="<?= $currentPage === 'temperature' ? 'active' : '' ?>">Temperature</a>
      </nav>

    </div>
  


