<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Application;
// use Illuminate\Http\Request;
// use Illuminate\Contracts\View\View;
// use Illuminate\View\Factory;

class PageController extends Controller
{
    // public function index(Request $request): Factory|View|Application
    // {
    //     return view('pages.index');
    // }

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $title = 'Welcome to the About page!';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Welcome to the Services page!',
            'services' => ['Web Design', 'Programming', 'SEO Optimization']
        );

        return view('pages.services')->with($data);
    }
}
