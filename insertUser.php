<?php include './inc/handle.php' ?>
<?php
    if (isset($_POST['nameLogin']) && isset($_POST['password'])) {
        $nameLogin = $_POST["nameLogin"];
        $password = $_POST["password"];
        $insert = $jsonUser->insertUser($nameLogin,$password);
        echo $insert;
    }  
?>