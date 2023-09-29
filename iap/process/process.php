<?php
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Add ID Number
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Create a new instance of the Database class
    $db = new Database();

    try {
        // Get the database connection
        $conn = $db->getConnection();

        // Prepare and execute the SQL query to insert data
        $stmt = $conn->prepare("INSERT INTO user (id, name, email, age) VALUES (:id, :name, :email, :age)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->execute();

        // JavaScript for the popup message
        echo "<script>
            alert('User added to the database.');
            var response = confirm('Do you want to go back to the form?');
            if (response) {
                window.location.href = '../index.php'; // Go back to the form
            } else {
                window.location.href = 'display.php'; // Go to the display page
            }
        </script>";
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
}
?>
