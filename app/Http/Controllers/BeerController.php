<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $beers = Beer::orderBy('created_at', 'desc')->get();

        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug']= Str::slug($data['title'], '-');
        
        
        $request->validate($this->ruleValidation());
        

        
    

        if(!empty($data['path_img'])){
            $data['path_img'] = Storage::disk('public')->put('images' , $data['path_img']);
        }

        $newBeer = new Beer();
        $newBeer->fill($data);

        $saved = $newBeer->save();
        

        if($saved){
            return redirect()->route('beers.index');
        } else{
            // Choose new route
            return redirect()->route('homepage');
        } 
       /*  $data = $request->all();
        $request->validate($this->ruleValidation());


       $beer = new Beer();

       $beer->fill($data);

       $saved = $beer->save();

       if($saved){
           return redirect()->route('beers.show', $beer->id);
       } */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $beer = Beer::where('slug', $slug)->first();
        
        return view('beers.show', compact('beer'));

        // return view('beers.show', compact('beer'));
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
    private function ruleValidation(){
        return [
            'title' => 'required',
            'type' => '',
            'origin' => 'required',
            'description' => 'required',
            'price' => 'required',
            'path_img' => 'mimes:jpg,jpeg,png,bmp',
        ];
    }
}
