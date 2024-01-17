<?php
// Get the search query from the URL parameter
$query = $_GET['query'];

// Convert the query to lowercase for case-insensitive matching
$query = strtolower($query);

// Check the search query and redirect accordingly
if ($query === "algorithm" || $query === "algorithms") {
    // Redirect to algo.php if the search query is "algorithm" or "algorithms"
    header("Location: algo.php");
    exit();
} elseif ($query === "database") {
    // Redirect to data.php if the search query is "database"
    header("Location: data.php");
    exit();
} else {
    // Redirect to a default page if the search query does not match any specific conditions
    header("Location: default.php");
    exit();
}
?>
