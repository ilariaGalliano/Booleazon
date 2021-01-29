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
        // QUERY AL DB
        // ordinare dal piu recente al meno
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
        // Dati dalla form (CREATED)
        $data = $request->all();

        // Aggiunta nuova chiave associativa slug
        $data['slug']= Str::slug($data['title'], '-');
        

        // Validazione
        $request->validate($this->ruleValidation());
        

        
    
        // Se img presente viene salvata nello storage
        if(!empty($data['path_img'])){
            $data['path_img'] = Storage::disk('public')->put('images' , $data['path_img']);
        }

        // Salvataggio DB fillable(model)
        $newBeer = new Beer();
        $newBeer->fill($data);

        // Variabile di controllo salvataggio
        $saved = $newBeer->save();
        
        // Redirect se il salvataggio va a buon fine
        if($saved){
            return redirect()->route('beers.index');
        } else{
            // Choose new route
            return redirect()->route('homepage');
        } 
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        // Navigazione con slug(url friendly)
        $beer = Beer::where('slug', $slug)->first();
        
        return view('beers.show', compact('beer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $beer = Beer::where('slug', $slug)->first();

        // controllo errore da parte utente
        if(empty($beer)){
            abort(404);
        }
        return view('beers.edit', compact('beer'));
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
        // dati inviati dalla form
        $data = $request->all();
        // validazione
        $request->validate($this->ruleValidation());
        $beer = Beer::find($id);
        // slug
        $data['slug']= Str::slug($data['title'], '-');

        // VERIFICA SULLE IMG
        if (!empty($data['path_img'])) {

            //Cancella l'immagine precedente
            if(!empty($beer->path_img)) {
                Storage::disk('public')->delete($beer->path_img);
            }
            $data['path_img'] = Storage::disk('public')->put('images', $data['path_img']);
        }


        $updated = $beer->update($data);

        if($updated){
            return redirect()->route('beers.show', $beer->slug);
        } else {
            return redirect()->route('homepage');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer )
    {
        // Referenza file eliminato
        $title = $beer->title;

        // Controllo cancellazione
        $deleted = $beer->delete();

        if($deleted) {
            if(!empty($beer->path_img)){
                Storage::disk('public')->delete($beer->path_img);
            }
            return redirect()->route('beers.index')->with('beer-deleted' , $title);
        } else{
            return redirect()->route('homepage');
        }

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
