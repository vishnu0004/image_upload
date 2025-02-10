<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .upload-container {
            width: 350px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .upload-box {
            border: 2px dashed #ccc;
            padding: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .upload-box:hover {
            border-color: #007bff;
        }
        input[type="file"] {
            display: block;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h2>Upload Image</h2>

        <?php
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label class="upload-box" for="fileInput">
                <p>Click to Upload</p>
            </label>
            <input type="file" id="fileInput" name="image" accept="image/*">
            <br><br>
            <button type="submit" name="upload">Upload</button>
        </form>
    </div>
</body>
</html>
