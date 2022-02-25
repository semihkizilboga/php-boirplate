<?php

class Text
{

    public function redirect($path)
    {
        header("location:" . $path);
    }

    public function limiter($string, $str)
    {
        if (strlen($string) > $str) {
            if (function_exists("mb_substr")) $string = mb_substr($string, 0, $str, "UTF-8");
            else $string = substr($string, 0, $str);
        }
        return $string;
    } 
    
    public function word_wrap($string,$str = null)
    {
        wordwrap($string,$str);
    }

    
    
}
