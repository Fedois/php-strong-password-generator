<?php
    if(isset($_GET['length'])) {
        $length = $_GET['length'];

        $password = generatePassword($length);

        $_SESSION['psw'] = $password;
        header("location: password.php");
    }

    function generatePassword($length) {
        if(isset($_GET['words'])){
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $password = '';
            
            for($i=0; $i<$length; $i++) {
                $password .= $chars[rand(0, strlen($chars)-1)];
            }
            return $password;
        }
        else if(isset($_GET['numbers'])){
            $chars = '1234567890';
            $password = '';
            
            for($i=0; $i<$length; $i++) {
                $password .= $chars[rand(0, strlen($chars)-1)];
            }
            return $password;
        }
        else if(isset($_GET['special'])){
            $chars = '!@#$%^&*()_+';
            $password = '';
            
            for($i=0; $i<$length; $i++) {
                $password .= $chars[rand(0, strlen($chars)-1)];
            }
            return $password;
        }
        else{
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
            $password = '';
            
            for($i=0; $i<$length; $i++) {
                $password .= $chars[rand(0, strlen($chars)-1)];
            }
            return $password;
        }
    }
?>