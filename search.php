<?php

    //These will be our search parameters
    $econ = $_POST['econ'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $working = $_POST['working'];
    $major = $_POST['major'];

    $conn = mysqli_connect("localhost", "root", "root", "MentoringData");

    //First try to find a perfect match where all of the criteria match up
    
    $sql = "SELECT * FROM `Students` WHERE `econ_background`='$econ' AND (`race`='$race' OR `working`='$working' OR `gender`='$gender' OR `major`='$major')";
    $return = mysqli_query($conn, $sql);



    echo $return;
    

?>