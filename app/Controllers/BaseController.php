<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
    protected $helpers = ['url','form'];

    protected function render($view, $data = [])
    {
        echo view('layouts/header',$data);
        echo view($view,$data);
        echo view('layouts/footer',$data);
    }
}