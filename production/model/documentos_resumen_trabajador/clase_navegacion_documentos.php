<?php
class navegacion {
    public static function volver_atras($id_trabajador, $uploadOk){
        $data = array(
            'id' => $_POST["id_trabajador"],
            'error' => $uploadOk
        );
    // error 7, quiere decir que no es pdf o doc
    header("location:../../perfil_trabajador.php?".http_build_query($data));
    }
}










/*


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["documento_tipo_file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"
&& $filetype != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["documento_tipo_file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["documento_tipo_file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

*/




?>