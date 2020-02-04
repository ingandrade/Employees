@extends('layouts.master')

@section('content')

<div  class="container-fluid">
    <div class="row page-titles align-items-center">
        <div class="col-12  margin-content font-title-content">
            Create Employees
        </div>
    </div>  

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'employees.store']) !!}
                        @csrf
                        
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" 
                                        value="{{ old('firstname') }}" placeholder="Firstname" required autofocus>
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" 
                                        value="{{ old('lastname') }}" placeholder="Lastname" required>
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 input-bottom">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" placeholder="Email" autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>  
                                    
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input id="phone" type="number" class="form-control @error('text') is-invalid @enderror" name="phone" 
                                        value="{{ old('phone') }}" placeholder="Phone">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        {{ Form::label('companies_id', 'Company') }}
                                        <select name="companies_id" class="form-control">
                                            <option selected disabled>Select Company</option>
                                            @foreach($companies as $comp)
                                                <option value="{{$comp->id}}">{{ $comp->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('companies_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-md-center top-btn">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        {{ Form::submit('Create employees', ['class'=>'btn btn-success col']) }}
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a class="btn btn-danger color-leading col" href="{{route('employees.index')}}">Cancel</a>
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