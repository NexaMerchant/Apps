<?php
namespace NexaMerchant\Apps\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    // Apps index page
    public function index(Request $request)
    {

        // show all apps

        $items = App::all();



        return view('apps::admin.apps.index');
    }

    public function demo(Request $request)
    {
        return view('apps::admin.example.demo');
    }
}