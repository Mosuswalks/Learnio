<?php

<<<<<<< HEAD
<<<<<<< HEAD
namespace Learnio\Http\Controllers;
=======
namespace App\Http\Controllers;
>>>>>>> MyBranch
=======
namespace App\Http\Controllers;
>>>>>>> 191d8a38bc8541dfb3a704e6e5f6aaa5d0ef7030

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
