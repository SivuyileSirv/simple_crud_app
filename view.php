<?php
include('db.php');

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>View Page</h1>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="user-info-container">
            <img src="<?php echo $row['picture']; ?>" alt="Uploaded Image">
            <div class="text-container">
                <p class="description">Description: <?php echo $row['description']; ?></p>
                <p class="age-range">Age Range: <?php echo $row['age_range']; ?></p>
            </div>
        </div>
    <?php } ?>
</body>
</html>
