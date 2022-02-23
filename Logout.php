<?php
    session_start();
    unset($_SESSION['is_login']);
    unset($_SESSION['name']);
    unset($_SESSION['shopping_cart']);
    echo "<script>
       alert('Logout successfully !');
       window.location.href = 'Login';
   </script>";