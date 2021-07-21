<?php namespace App\Controllers;

use Framework\MVC\Controller;
use Framework\Routing\Attributes\Route;

final class Home extends Controller
{
    #[Route('GET', '/', name: 'home')]
    public function index() : string
    {
        return view('home/index');
    }
}
