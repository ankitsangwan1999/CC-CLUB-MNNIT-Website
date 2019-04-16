<?php
$target_dir = "/xampp/htdocs/2Website2/admin/include/uploads/";
$target_file = $target_dir . basename($_FILES["post_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  // echo $_FILES["post_image"]["tmp_name"];
    $check = getimagesize($_FILES["post_image"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }else {   
        $uploadOk = 0;
           header("Location: ../add_post.php?Not_an_Image_File");
              exit();
    }
}
// if (file_exists($target_file)) {
//    // echo "Sorry, file already exists.";
//     $uploadOk = 0;
//     header("Location: ../add_post.php?Image_already_exist");
//               exit();
// }
// Check file size
if ($_FILES["post_image"]["size"] > 500000) {
     $uploadOk = 0;
    header("Location: ../add_post.php?File_Too_Large");
              exit();
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
       header("Location: ../add_post.php?Only_JPG_JPEG_PNG_GIF_files_allowed");
              exit();
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: ../add_post.php?Upload_Error");
              exit();

    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file);
    $image_name=$_FILES["post_image"][ "name" ];

    // if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {
    //     echo "The file ". basename( $_FILES["post_image"]["name"]). " has been uploaded.";
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }
}
?>