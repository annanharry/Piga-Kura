<?php
        require('../db/connection.php');
        $myFirstName = isset($_POST['firstname']);
        $myLastName = isset($_POST['last']);
        $myEmail = isset($_POST['email']);
        $myPassword = isset($_POST['admin']);

        $newpass = md5($myPassword);

        $sql = "INSERT INTO scadministrators(first_name, last_name, email, password) VALUES ('Harry','Annan','admin@test.com','$newpass')";
        //        or die(mysql_error());

        $result = mysqli_query($conn,$sql);

        die("A new administrator has been created.");

        //$sql = "INSERT INTO scadministrators (first_name, last_name, email, password) VALUES ('$myFirstName','$myLastName','$myEmail','$newpass')";
        //preparing the statement.
        //$stmt = mysqli_prepare($sql);
        //binding the input variables.        
        //$stmt -> bind_param("sss", $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST[$newpass]);
        //$stmt->execute();
?>