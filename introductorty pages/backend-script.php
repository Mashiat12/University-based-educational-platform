<?php
// Simulate fetching data from a database
$courses = array(
    "Database",
    "Algorithm",
    "Computer Network",
    "Data Structure"
);

$searchTerm = $_GET['term'];

$results = array();

foreach ($courses as $course) {
    if (stripos($course, $searchTerm) !== false) {
        $results[] = $course;
    }
}

echo json_encode($results);
?>
