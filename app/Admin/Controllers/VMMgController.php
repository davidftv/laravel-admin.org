<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;

class VMMgController extends Controller
{

    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Dashboard');
        });
    }          
}
