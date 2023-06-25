<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Setting;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        $setting = Setting::where('slug', 'base')->firstOrFail();
        event('homeHasViewed', $setting);

        return view('home', [
            'brands' => Brand::all(),
        ]);
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function about(): View
    {
        return view('about');
    }

    public function terms(): View
    {
        return view('terms');
    }
}
