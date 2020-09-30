<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Admin::all()->first();
        return view('main/news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('main.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veri = new Admin;
        $veri->news_title = $request->news_title;
        $veri->news_slug = $request->news_slug;
        $veri->news_img1_url = $request->news_img1_url;
        $veri->news_img1 = $request->news_img1;
        $veri->news_img2_url = $request->news_img2_url;
        $veri->news_img2 = $request->news_img2;
        $veri->news_content = $request->news_content;

        $file_name=uniqid().'.'.$request->news_img1->getClientOriginalExtension();
        $request->news_img1->move(public_path('/images/news'),$file_name);
        $veri->news_img1 = $file_name;

        $file_name1=uniqid().'.'.$request->news_img2->getClientOriginalExtension();
        $request->news_img2->move(public_path('/images/news'),$file_name1);
        $veri->news_img2 = $file_name1;
        $veri->save();
        return view('main.admin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news= DB::table('news')->where('news_slug', $id)->first();
        return view('main.blog')->with('news' ,$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
