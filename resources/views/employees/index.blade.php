@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Employees
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>companie</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $emp)
                            <tr>
                                <td>{{ $emp->id }}</td>
                                <td>{{ $emp->firstname }}</td>
                                <td>{{ $emp->lastname }}</td>
                                <td></td>
                                <td>{{ $emp->email }}</td>
                                <td>{{ $emp->phone }}</td>
                                <td width="10px">
                                    <a href="{{ route('employees.show', $emp->id) }}" class="btn btn-sm btn-default">
                                        <button class="btn btn-sm btn-success">
                                        Ver
                                        </button>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('employees.edit', $emp->id) }}" class="btn btn-sm btn-default">
                                        <button class="btn btn-sm btn-warning">
                                            Editar
                                        </button>
                                    </a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['employees.destroy', $emp->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" style="margin-top:4px">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>  
                    <div class="text-center col">
                        {{ $employees->render() }} 
                    </div>  	
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection