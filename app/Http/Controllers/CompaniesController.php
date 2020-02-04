<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compa = Companies::orderBy('id', 'DESC')->paginate(10);
        return view('companies.index', ['compa'=> $compa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompaniesRequest $request)
    {
        $comp = Companies::create($request->all());

        if($request->file('logo')){
            $path = Storage::disk('public')->put('image', $request->file('logo'));
            $comp->fill(['logo' => $path])->save();
        }
        return redirect()->route('companies.create')->with('info', 'Entrada creada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comp = Companies::find($id);

        return view('companies.show', compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comp = Companies::find($id);

        return view('companies.edit', compact('comp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesRequest $request, $id)
    {
        
        $comp= Companies::find($id);
        $comp->fill($request->all())->save();

        if($request->file('logo')){
            Storage::delete($comp->logo);
            $path = Storage::disk('public')->put('image', $request->file('logo'));
            $comp->fill(['logo' => $path])->save();
        }

        return redirect()->route('companies.edit', $comp->id)->with('info', 'Entrada actualizada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comp = Companies::find($id);
        Storage::delete($comp->logo);
        $comp->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
