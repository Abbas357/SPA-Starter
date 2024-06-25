<?php
// Define arrays of first names and last names
$firstNames = ["John", "Jane", "Alex", "Emily", "Chris", "Katie", "Michael", "Sarah", "David", "Laura"];
$lastNames = ["Smith", "Johnson", "Brown", "Williams", "Jones", "Miller", "Davis", "Garcia", "Rodriguez", "Martinez"];

// Function to generate a random name
function generateRandomName($firstNames, $lastNames) {
    $firstName = $firstNames[array_rand($firstNames)];
    $lastName = $lastNames[array_rand($lastNames)];
    return "$firstName $lastName";
}

// Generate a random name
$randomName = generateRandomName($firstNames, $lastNames);

// Output the random name

?>
<h1>This is Users <?php echo $randomName; ?></h1>