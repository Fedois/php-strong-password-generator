<?php
    if(isset($_GET['length'])) {
        $length = $_GET['length'];
        $useWords = isset($_GET['words']);
        $useNum = isset($_GET['numbers']);
        $useSpecial = isset($_GET['special']);

        $password = generatePassword($length, $useWords, $useNum, $useSpecial);

        $_SESSION['psw'] = $password;
        header("location: password.php");
    }

    function generatePassword($length, $useWords, $useNum, $useSpecial) {
        if($useWords){
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        else if($useNum){
            $chars = '1234567890';
        }
        else if($useSpecial){
            $chars = '!@#$%^&*()_+';
        }
        else if(($useWords) && ($useNum)){
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        }
        else{
            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
        }
        
        $password = '';
            
            for($i=0; $i<$length; $i++) {
                $password .= $chars[rand(0, strlen($chars)-1)];
            }
        
            return $password;
    }
?>