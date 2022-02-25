<?php



class Controller  extends Config
{  

    public function view($file,$data = [])
    {
        if(file_exists('application/views/'.$file.".php")) // file_exists() = dosya kontrolü var mı yok mu?
        {
          
            require_once 'application/views/'.$file.".php";
        }else{
            exit('application/views/'.$file." view file not found!");
        }
    }

    public function model($file)
    {
        if(file_exists('application/models/'.$file.".php")) // file_exists() = dosya kontrolü var mı yok mu?
        {
            require_once 'application/models/'.$file.".php";
            return new $file;
        }else{
            exit('application/models/'.$file." model file not found!");
        }
    }

    public function helper($file)
    {
        if(file_exists('core/helper/'.$file.".php")) // file_exists() = dosya kontrolü var mı yok mu?
        {
            require_once 'core/helper/'.$file.".php";
            return new $file;
        }else{
            exit('core/helper/'.$file." helper file not found!");
        }
    }

    public function template($file,$header,$footer,$data = [])
    {
        if(file_exists('application/views/'.$file.".php")) // file_exists() = dosya kontrolü var mı yok mu?
        {
            require_once 'application/views/'.$header.".php";
            require_once 'application/views/'.$file.".php";
            require_once 'application/views/'.$footer.".php";
        }else{
            exit('application/views/'.$file." view file not found!");
        }
    }

}