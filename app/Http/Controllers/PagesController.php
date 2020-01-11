<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Submenu;
use App\Page;
class PagesController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $submenus = Submenu::all();
        $pages = Page::all();
        return view('pages.index',compact('menus','submenus','pages'));
    }
    public function addmenu()
    {
        $menus = Menu::all();
        $submenus = Submenu::all();
        $pages = Page::all();
        return view('pages.addmenu',compact('menus','submenus','pages'));
    }
    public function addsubmenu()
    {
        $items = Menu::pluck('name', 'id');
        $menus = Menu::all();
        $submenus = Submenu::all();
        $pages = Page::all();
        return view('pages.addsubmenu',compact('menus','submenus','items','pages'));
    }

    public function addpage()
    {
        $items = Submenu::pluck('name', 'id');
        $menus = Menu::all();
        $submenus = Submenu::all();
        $pages = Page::all();
        return view('pages.addpage',compact('menus','submenus','items','pages'));
    }
   
}
