@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Employee
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            
                            <img src="{{ asset('img/perfil.png')}}" alt="" class="img-fluid">
                          
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                            <h2>{{ $emp->firstname }}</h2>
                            <h2>{{ $emp->lastname }}</h2>
                            <div>{{ $emp->email }}</div>
                            <div>{{ $emp->phone }}</div>
                            <h2>{{ $emp->companies }}</h2>
                            <div class="text-right">
                                <a href="{{ route('employees.index') }}" class="btn btn-success">
                                    Preview
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection