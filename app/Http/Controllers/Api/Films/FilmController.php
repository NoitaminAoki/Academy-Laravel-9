<?php

namespace App\Http\Controllers\Api\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\Film\FilmResource;
use App\Http\Resources\Film\FilmCollection;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();

        /** 
         * Terdapat 3 cara mengirimkan response json dari controller.
         * - Menggunakan helper response json
         * - Menggunakan Resource/Api Resource
         * - Menggunakan Custom Library dan Macro pada Custom ServiceProvider
         * 
         */

        /**
         * Menggunakan helper response json
         * 
         */
        return response()->json(['data' => $films], 200);
        
        /**
         * Menggunakan Resource/Api Resource
         * 
         */
        return FilmResource::collection($films);

        //Atau
        return new FilmCollection($films);

        /**
         * Menggunakan Custom Library dan Macro pada Custom ServiceProvider
         * Library yang dibuat => App\ResponseRestApi
         * ServiceProvider yang dibuat => App\Providers\ResponseMacroServiceProvider
         * 
         */
        return response()->restApi(['data' => $films])->ok();

        //Atau
        $data = (new FilmCollection($films))->response()->getData(true);
        return response()->restApi($data)->ok();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Kd_Film' => 'required|string|unique:films|max:5',
            'Jenis' => 'required|string|max:20',
            'Judul' => 'required|string|max:50',
            'Jml_Keping' => 'required|numeric|min:1',
        ]);
        if($validator->fails()) {
            return response()->restApi(['errors' => $validator->errors()])->bad();
        }

        $film = Film::create([
            'Kd_Film' => $request->input('Kd_Film'),
            'Jenis' => $request->input('Jenis'),
            'Judul' => $request->input('Judul'),
            'Jml_Keping' => $request->input('Jml_Keping'),
        ]);

        return response()->restApi($film)->ok();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);

        return response()->restApi($film)->ok();

        //Atau
        $film = Film::find($id);

        if(!$film) return response()->restApi()->notFound();
        
        return response()->restApi($film)->ok();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $film = Film::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'Jenis' => 'string|max:20',
            'Judul' => 'string|max:50',
            'Jml_Keping' => 'numeric|min:1',
        ]);
        if($validator->fails()) {
            return response()->restApi(['errors' => $validator->errors()])->bad();
        }

        $film = Film::where('Kd_Film', $id)->update($request->all());

        return response()->restApi("Film ($id) has successfully updated!")->ok();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film = Film::where('Kd_Film', $id)->delete();

        return response()->restApi("Film ($id) has successfully deleted!")->ok();
    }
}
