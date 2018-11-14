<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Slot;
use App\Param;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            'article' => Article::first(),
            'slot' => Slot::first(),
            'param' => Param::first(),
        ]);
    }
}
