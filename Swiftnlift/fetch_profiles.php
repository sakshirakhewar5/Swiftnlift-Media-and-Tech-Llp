<?php
// Assuming you have a database connection established already

// Fetch all user profiles from the database
$sql = "SELECT fullname, email FROM users";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='profile'>";
        echo "<p>Name: " . $row["fullname"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No profiles found";
}

// Close the database connection
$conn->close();
?>
