<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use App\Http\Requests\EmployeesRequest;
use Illuminate\Http\Request;


class EmployeesController extends Controller
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
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $emp = Employees::orderBy('id', 'DESC')->paginate(10);
        return view('employees.index', ['employees'=> $emp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp = Companies::all();
        return view('employees.create', ['companies'=> $comp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
        $emp = Employees::create($request->all());

        return redirect()->route('employees.create')->with('info', 'Entrada creada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employees::find($id);

        return view('employees.show', compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employees::find($id);
        $companies = Companies::all();
        return view('employees.edit', compact('companies', 'emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp= Employees::find($id);
        $emp->fill($request->all())->save();

        return redirect()->route('employees.edit', $emp->id)->with('info', 'Entrada actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employees::find($id);
        $emp->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
