<?php

namespace ProgrammerZamanNow\BelajarPhpMvc\Middleware;

class AutMiddleware implements Middleware
{
    function before(): void
    {
        session_start();
        if(isset($$_SESSION['user'])){
            header('Location: /login');
            exit();
        }
    }
}