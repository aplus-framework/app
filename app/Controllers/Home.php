<?php namespace App\Controllers;

use Framework\MVC\Controller;
use Framework\Routing\Attributes\Route;

/**
 * Class Home.
 *
 * @package app
 */
final class Home extends Controller
{
    /**
     * Renders the application homepage.
     */
    #[Route('GET', '/', name: 'home')]
    public function index() : string
    {
        return view('home/index');
    }
}
