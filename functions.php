<?php
    //funkcija sčisti podatke, ki jih uporabnik vpiše
    function clean_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }
    //funkcija zamenja ločila, ter formatira števila
    function scoville_format($number) {
        //mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
        $punctuations = array(",", ".", "!", "?", ";", ":", " ");
        $formatted = str_replace($punctuations, "", $number);
        //string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )
        $formatted = number_format($formatted);
        return $formatted;
    }
    //validacija če je vpisan pravilen email naslov
    function is_email($email) {
        //mixed filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] )
        //FILTER_VALIDATE_EMAIL
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            return false;
        }
    }

?>
