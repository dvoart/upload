<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=H1, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>

<body>


    <h1>Upload an Image</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"><br>
  
  <br><br><img src="uploads/stars.jpg" width="400" height="500" alt="stars">
 

</form>

</body>
</html>