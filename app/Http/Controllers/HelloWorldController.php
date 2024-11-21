<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index() 
    {
$html = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title> 
    <style> 
    body { display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f0f0; } 
    .centered-div { background-color: white; padding: 20px; border: 2px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center; font-family: Arial, sans-serif; }
    h1 { color: green; }
    h2 { color: red; }
     </style>
</head>
<body>
    <div class="centered-div"> <h1>Hello World<br><h2>Este es un texto<br>en múltiples líneas.</h2></h1></div>
</body>
</html>
EOT;


         return $html; 
    }
}
