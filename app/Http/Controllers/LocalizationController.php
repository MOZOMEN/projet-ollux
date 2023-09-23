<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class LocalizationController extends Controller
{
    /**
     * return view
     *
     * @return view
     */
    public function index()
    {
        return view('index');
    }


    /**
     * Change language
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }

}
