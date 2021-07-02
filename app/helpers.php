<?php

    use App\App;
    function home()
    {
        return trim(App::get('config')['app']['home_url'],'/');
    } 


    function redirect()
    {
        header("location: {$to}");
    }

    function redirect_home()
    {
        redirect(home());
    }

    function view($name ,$data)
    {
        extract($data);
        require "resources/{$name}.view.php";
    }

    function back()
    {
        header ("Location: {$_SERVER['HTTP_REFERER']}");
    }