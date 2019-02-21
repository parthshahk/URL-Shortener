<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $urls = Url::orderBy('id', 'DESC')->get();

        $data = [
            'title' =>  "My URLs",
            'urls'  =>  $urls
        ];

        return view('pages/urls') -> with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required'
        ]);

        $url = new Url;
        $url -> destination = $request->input('url');
        $url -> source = substr(sha1(date('Y-m-d H:i:s:ms')), 0, 6);
        $url -> save();

        return redirect('/urls')->with('success', 'URL Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  COLLECT VISITOR INFO
        $url = Url::where('source', '=', $id)->first();
        return redirect()->to($url->destination);
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
