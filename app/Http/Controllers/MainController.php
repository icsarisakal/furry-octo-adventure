<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Login;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true')->json();
        $response = $response['regionData'];
//        dd($response);
        return view('main/main',compact('response'));
    }

    public function map()
    {
        $response = Http::get('https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true')->json();
        $response = $response['regionData'];
        $response = collect($response)->sortBy('country')->except(174,7,0,1,2,8,3,223,224,225,226,227,228,229,230);
//        dd($response);
        return view('main.country',compact('response'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials))
        {
            return 'giriş başarılı';
            dd("asdasd");
        } else{
            return 'giriş olmadı';
        }

//        dd($request->all());
    }
    public function news()
    {
        $news = DB::table('news')->get();
        return view('main/news',compact('news'));
    }
}
