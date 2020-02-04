@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Companies
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
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Webside</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($compa as $comp)
                            <tr>
                                <td>{{ $comp->id }}</td>
                                <td>{{ $comp->name }}</td>
                                <td>{{ $comp->email }}</td>
                                <td>{{ $comp->webside }}</td>
                                <td width="10px">
                                    <a href="{{ route('companies.show', $comp->id) }}" class="btn btn-sm btn-default">
                                        <button class="btn btn-sm btn-success">
                                        Ver
                                        </button>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('companies.edit', $comp->id) }}" class="btn btn-sm btn-default">
                                        <button class="btn btn-sm btn-warning">
                                            Editar
                                        </button>
                                    </a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['companies.destroy', $comp->id], 'method' => 'DELETE']) !!}
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
                        {{ $compa->render() }} 
                    </div>  	
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection