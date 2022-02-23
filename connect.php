<?php
    // $host = "localhost";

    // $username = "root";

    // $password = "";

    // $dbname = "webbanhang";

    $host = "remotemysql.com";

    $username = "DbIwHvDYIP";

    $password = "18UmnLV3JV";

    $dbname = "DbIwHvDYIP";

    $con = mysqli_connect($host, $username, $password);
    mysqli_select_db($con, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");