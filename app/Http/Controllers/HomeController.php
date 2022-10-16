<?php

namespace App\Http\Controllers;

use App\Helpers\FrontendHelper;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index(FrontendHelper $frontendHelper)
    {  
    
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->orderBy('position', 'ASC')->get();
        return view('website.home', [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'menus' => $menus,
            'sliders' => $sliders
        ]);
    }

    public function getPageDetail($alias, FrontendHelper $frontendHelper)
    {
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();
        $page = Navigation::where('alias', $alias)->first();
        $view = 'website.pages.detail';

        if ($page->id == 1) {
            return redirect()->route('website.home');
        }
        if ($page->id == 2) {
            $view = 'website.pages.about';
        }
        if ($page->id == 7) {
            $view = 'website.pages.contact';
        }
        if ($page->id == 8 || $page->id == 9) {
            $view = 'website.pages.project';
        }
        return view($view, [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'sliders' => $sliders,
            'menus' => $menus,
            'page' => $page
        ]);
    }
}
