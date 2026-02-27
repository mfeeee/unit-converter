<?php

require_once __DIR__ . '/data/temperature.php';
require_once __DIR__ . '/includes/functions.php';

$value = "";
$unitFrom = "";
$unitTo = "";
$result = null;
$units = $temperatures;
$category = 'temperature';
$pageTitle = "Temperature Converter";
$currentPage = 'temperature';
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from $POST
    $value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_NUMBER_FLOAT);
    $unitFrom = $_POST['unitFrom'] ?? '';
    $unitTo =  $_POST['unitTo'] ?? '';

    // Check if they are numbers
    if ($unitFrom === "kelvin" && $value < 0) {
        $errorMessage = "Temperature in Kelvin cannot be below zero (Absolute Zero).";
    } elseif ($value !== false && isset($units[$unitFrom]) && isset($units[$unitTo])) {
        // Calculates the result 
        $result = convertUnits((float)$value, $unitFrom, $unitTo, $units, $category);
    }
}

include __DIR__ . '/templates/header.php';
?>

<main>
    <h2><?php echo $pageTitle; ?></h2>
    <?php include __DIR__ . '/templates/form.php'; ?>
</main>