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
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                            @if($comp->logo)
                                <img src="{{ asset('storage/').'/'.$comp->logo }}" alt="" class="img-fluid">
                            @else
                                <img src="{{ asset('img/edificio.jpg') }}" alt="" class="img-fluid">
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                            <h2>{{ $comp->name }}</h2>
                            <div>{{ $comp->email }}</div>
                            <div>{{ $comp->webside }}</div>
                            <div class="text-right">
                                <a href="{{ route('companies.index') }}" class="btn btn-success">
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