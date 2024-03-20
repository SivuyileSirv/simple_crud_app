<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description'];
    $age_range = $_POST['age_range'];

    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $picture = $target_file;
        // Insert data into database
        $sql = "INSERT INTO users (picture, description, age_range) VALUES ('$picture', '$description', '$age_range')";
        if (mysqli_query($conn, $sql)) {
            header("Location: view.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
