<head>
    <link rel="Stylesheet" href="Stylesheets\styleIndex.css">
</head>

<?php include 'Header\Header.php';?>
<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

        if($fileError === 0){
            if($fileSize < 50000000){
                $fileDestination = 'C:\xampp\htdocs\IntendedForMe/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                Echo("successfully uploaded");
                header("location:..\index.php");
            } else{ echo " your file is to big! "; }
        }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="Welcome">



<h1> Welcome to my Personal Website. </h1>
    <p>Lawrence Whalley. <br>
    Creative front-end <br>
    Developer and designer </p>
    

    <div class="container">
        <br><br>
        <span>Did i say i would give you a file/image/folder/etc ?<br>
        click here:</span><br>
        <br><br>
            <a href="forTheMasses/hellodavid.txt" download>
                <img src="Images\fileButton.png">
            </a> 
    <br><br><br>



have i asked for an file/image/folder/etc ?<br>
click here:</span><br><br><br>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file"> <br> <br>
    <div class="button">
    <button type ="submit" name="submit">upload</button>
</div>
</form>
<br><br><br><br><br><br>
</div>
    to do list for myself: <br>
    twilio bot: an api for text messages and phone calls that will tell you a joke <br>
    todo app: as says on tin to do app:
<br><br><br><br><br><br><br>



<?php include 'Footer\Footer.php';?>