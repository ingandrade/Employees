<div class="row align-items-center">
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
        <img src="{{asset('img/zou-perfil.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-12 col-md-9 col-lg-9">
        <div class="form-group row">
            <div class="col">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-sm-12 col-md-12 input-bottom">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>  
        </div>
        <div class="form-group row">
            <div class="col">
                <input id="webside" type="text" class="form-control @error('text') is-invalid @enderror" name="webside" value="{{ old('webside') }}" placeholder="Webside" required>
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