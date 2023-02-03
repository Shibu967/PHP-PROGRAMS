<?php
if(isset($_POST['upload'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];

if (move_uploaded_file($_FILES['image']['tmp_name'],$file_name)){

    echo "The file named:".$_FILES['image']['name']." has been uploaded";
}
else
{
    echo "The file named:".$_FILES['image']['name']." could not be uploaded";

}
}


?>


<html>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="" /><br><br>
        <input type="submit" name="upload" />




    </form>

</body>

</html>