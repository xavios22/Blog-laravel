<?php
namespace App\Http\Controllers;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
            $categorie = Category::all();
            // dd($categorie);
        return view('Frontpage.welcome', compact('categorie'));
    }
}
