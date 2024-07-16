<?php

    $conn= mysqli_connect('localhost','root','','approval');




    $name=          $_POST['name'];
    $subject=       $_POST['subject'];
    $application=   $_POST['application'];
    $request_type=  $_POST['request_type'];
    

    $sql= "INSERT INTO `approval_list` ( `employee_id`, `employee_name`, `designation`, `request_type`, `accept_decline`, `application`, `subject`)
    VALUES 
    (7004, '$name', 'MTO', '$request_type', '0', '$application', '$subject')";
    $result= mysqli_query($conn, $sql);


    header("Location: ../");

