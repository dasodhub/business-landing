<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Building responsive and modern websites.'
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Improving your website ranking on search engines.'
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Creating effective online marketing strategies.'
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Designing user-friendly mobile applications.'
            ]
        ];
        return view('pages.services', ['services' => $services]);
    }

    public function contact() {
        return view('pages.contact');
    }


}
