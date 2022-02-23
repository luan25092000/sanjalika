<?php
    include 'connect.php';
    $date = $_POST['date'];
    $tickets = [];
    $sql = "SELECT * FROM `tickets` WHERE `date` = '" . $date . "'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $tickets[] = $row;
    }

    echo json_encode($tickets);
