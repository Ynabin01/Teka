<?php

namespace App\Http\Controllers;

use App\Helpers\FrontendHelper;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use App\Admin;
use App\Models\Navigationitems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(FrontendHelper $frontendHelper)
    {

        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->orderBy('position', 'ASC')->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partners%")->where('page_type','Group')->latest()->first()!=null){
            $partners_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partners%")->where('page_type','Group')->latest()->first()->id;
            $partners = Navigation::query()->where('parent_page_id',$partners_id)->latest()->get();
        }
        else{
            $partners = null;
        }
        return view('website.home', [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'menus' => $menus,
            'sliders' => $sliders,
            'partners'=> $partners
        ]);
    }
    public function Category($menu, FrontendHelper $frontendHelper)
    {

        $alias = $menu;
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();
        $page = Navigation::where('alias', $alias)->first();
        $view = 'website.pages.detail';

        //this is automatic statements which get detail of particular menu detail and return it's view

        $page_detail = Navigation::where('alias',$menu)->get();
        if($page_detail->count()>0){
            // $page_type = $page_detail->first()->page_type;
            if($page_detail->first()->childs->count()>0)
            {
                $page_type = $page_detail->first()->childs->first()->page_type;
                if($page_type=='Photo Gallery'){ //"this is category/notGroup";
                    $page_type = "Folder Gallery";
                }
                if($page_type=='Team'){ //"this is category/notGroup";
                    $page_type = "Team";
                }
                if($page_type=='project'){ //"this is category/notGroup";
                    $page_type = "project";
                }

            }

            else{
                $page_type = $page_detail->first()->page_type;
            }
        }
        else{
            $page_type = null;
        }
// / for page return-------
        //   return $page_type;
        if($page_type=="Folder Gallery")
        {
            $view = 'website.pages.folder';
            $folders = Navigation::where('alias',$alias)->first()->childs;
            // $teams_id = $teams->id;
            // $teams = Navigationitems::where('navigation_id',$teams_id)->get();

            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'folders' => $folders,
            ]);
        }
        else if($page_type=="Normal" || $page_type=="Projects" )
        {
            $view = 'website.pages.normal';
            $normal = Navigation::where('alias',$alias)->first();
            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'normal' => $normal,

            ]);
        }
        else if($page_type=="Team")
        {
            $view = 'website.pages.teams';
            $teams = Navigation::where('alias',$alias)->first();
            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'teams' => $teams,
            ]);
        }

               else if($page_type=="Photo Gallery")
        {
            $view = 'website.pages.gallery';
            $teams = Navigation::where('alias',$alias)->first();
            $teams_id = $teams->id;
            $photos = Navigationitems::where('navigation_id',$teams_id)->get();

            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'photos' => $photos,
            ]);
        }
        else if($page_type=="Projects")
        {
            $view = 'website.pages.project';
            $project = Navigation::where('alias',$alias)->first();
            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'project' => $project,
            ]);
        }

        else{
            return redirect('/');
        }

    }
    public function SubCategory($menu,$submenu, FrontendHelper $frontendHelper)
    {
        $alias = $submenu;
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();
        $page = Navigation::where('alias', $alias)->first();
        $view = 'website.pages.detail';


        $page_detail = Navigation::where('alias',$submenu)->get();
        if($page_detail->count()>0){
            $page_type = $page_detail->first()->page_type;
        }
        else{
            $page_type = null;
        }

        if($page_type=="Normal")
        {
            $view = 'website.pages.normal';
            $normal = Navigation::where('alias',$alias)->first();
            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'normal' => $normal,
            ]);
        }

        if($page_type=="Photo Gallery")
        {
            $view = 'website.pages.teams';
            $teams = Navigation::where('alias',$alias)->first();
            $teams_id = 42;//$teams->id;
            $teams = Navigationitems::where('navigation_id',$teams_id)->get();
            return $teams;
            return view($view, [
                'frontend_helper' => $frontendHelper,
                'settings' => $settings,
                'sliders' => $sliders,
                'menus' => $menus,
                'page' => $page,
                'teams' => $teams,
            ]);
        }

        return view($view, [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'sliders' => $sliders,
            'menus' => $menus,
            'page' => $page
        ]);
    }

    public function getPageDetail($menu, FrontendHelper $frontendHelper)
    {
        return $menu;
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
        if ($page->id == 55) {
            $view = 'website.pages.teams';
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
    public function ContactUs(FrontendHelper $frontendHelper){

        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->orderBy('position', 'ASC')->get();
        $view = 'website.pages.contact';
        return view($view, [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'menus' => $menus,
            'sliders' => $sliders,

        ]);
    }
}
