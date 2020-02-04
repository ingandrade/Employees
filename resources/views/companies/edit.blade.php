@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Edit Companies
        </div>
    </div>  


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($comp, ['route' => ['companies.update', $comp->id], 'method' => 'PUT', 'files' => true]) !!}
                        @csrf
                        
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                                @if($comp->logo)
                                <img src="{{ asset('storage/').'/'.$comp->logo }}" alt="" class="img-fluid">
                                @else
                                <img src="{{ asset('img/edificio.jpg') }}" alt="" class="img-fluid">
                                @endif
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="form-group row">
                                    <div class="col">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $comp->name }}" placeholder="Name" required autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-12 input-bottom">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $comp->email }}" placeholder="Email" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input id="webside" type="text" class="form-control @error('text') is-invalid @enderror" name="webside" value="{{ $comp->webside }}" placeholder="Webside" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        {{ Form::file('logo') }}            
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-md-center top-btn">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        {{ Form::submit('Create Companies', ['class'=>'btn btn-success col']) }}
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a class="btn btn-danger color-leading col" href="{{route('companies.index')}}">Cancel</a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection