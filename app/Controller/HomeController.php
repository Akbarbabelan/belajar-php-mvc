<?php

namespace ProgrammerZamanNow\BelajarPhpMvc\Controller;

use ProgrammerZamanNow\BelajarPhpMvc\App\View;

class HomeController 
{

    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat belajar php mvc dari programmer zaman now"
        ];
        
        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeControler.hello()";
    }

    function world(): void
    {
        echo "HomeControler.world()";
    }

    function about(): void 
    {
        echo "Hello, Kholifah Akbar Babelan Musthofa";
    }

    function login(): void {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];
        
        $user = [

        ];

        $response = [

            "message" => "Login sukses"
        ];
    }
}
