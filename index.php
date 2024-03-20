<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1 id="home-heading-text">CRUD APPLICATION</h1>
    <p class="developer">Developed by Sivuyile Parkies</p>
    <form action="upload.php" method="POST" enctype="multipart/form-data" id="uploadForm">
        <label for="file" class="file-upload-btn">Choose a file</label>
        <input type="file" id="file" name="file" class="file-upload-input" onchange="updateFileName(this)">
        <span id="file-name" class="file-name">No file chosen</span><br><br>
        
        <textarea id="description" name="description" class="form-control" placeholder="Describe yourself"></textarea><br>
        <label for="age_range">Select Age Range:</label><br>
        <select id="age_range" name="age_range" class="form-control">
            <option value="Below 18">Below 18</option>
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36-50">36-50</option>
            <option value="Above 50">Above 50</option>
        </select><br><br>
        <input type="submit" value="Submit" class="btn" id="submitButton">
    </form>

    <script src="js/script.js"></script>
</body>
</html>
