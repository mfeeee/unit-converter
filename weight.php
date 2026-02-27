<?php

require_once __DIR__ . '/data/weights.php';
require_once __DIR__ . '/includes/functions.php';

$value = "";
$unitFrom = "";
$unitTo = "";
$result = null;
$units = $weights;
$pageTitle = "Weight Converter";
$currentPage = 'weight';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from $POST
    $value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_NUMBER_FLOAT);
    $unitFrom = $_POST['unitFrom'] ?? '';
    $unitTo =  $_POST['unitTo'] ?? '';

    // Check if they are numbers
    if ($value < 0) {
        $errorMessage = "The value cannot be negative for this category.";
    } elseif ($value !== false && isset($units[$unitFrom]) && isset($units[$unitTo])) {
        // Calculates the result 
        $result = convertUnits((float)$value, $unitFrom, $unitTo, $units);
    }
}

include __DIR__ . '/templates/header.php';
?>

<main>
    <h2><?php echo $pageTitle; ?></h2>
    <?php include __DIR__ . '/templates/form.php'; ?>
</main>