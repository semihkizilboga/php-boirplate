<?php

class Security
{

    public function cleaner($text)
    {
        $array = array('insert','update','union','select','*','INSERT','UPDATE','UNION','SELECT');
        $text = str_replace($array,'',$text);
        $text = strip_tags($text);
        $text = trim($text);
        $text = htmlspecialchars($text);
        return $text;
    }


}