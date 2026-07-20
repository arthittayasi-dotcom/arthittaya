<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blogs()
    {
        $blogs = [
            [
                'title' => 'บทความที่1',
                'content' => 'เนื้อหาบทความที่1',
                'status' => true,
            ],
            [
                'title' => 'บทความที่2',
                'content' => 'เนื้อหาบทความที่2',
                'status' => true,
            ],
            [
                'title' => 'บทความที่3',
                'content' => 'เนื้อหาบทความที่3',
                'status' => false,
            ],
            [
                'title' => 'บทความที่4',
                'content' => 'เนื้อหาบทความที่4',
                'status' => true,
            ],
            [
                'title' => 'บทความที่5',
                'content' => 'เนื้อหาบทความที่5',
                'status' => false,
            ],
        ];

        return view('blogs', compact('blogs'));
    }
    function abouts()
    {
        $name = "Phakhanan";
        $date = "6 กรกฎาคม 2026";
        return view("abouts",compact('name','date'));
    }   
    function create(){
        return view("create");
    }   
        
}
