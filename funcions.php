<?php
    if(isset($_GET['length'])) {
        $length = $_GET['length'];

        $password = generatePassword($length);

        $_SESSION['psw'] = $password;
        header("location: password.php");
    }

    function generatePassword($length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = '';
        
        for($i=0; $i<$length; $i++) {
            $password .= $chars[rand(0, strlen($chars)-1)];
        }
        return $password;
    }
?>