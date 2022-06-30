@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" style="max-width: 300px" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6"> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input disabled id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$student->name) }}" autocomplete="name" autofocus>
     
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('age') }}</label>
    
                                <div class="col-md-6">
                                    <input disabled id="age" type="age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age',$student->age) }}" autocomplete="age">
     
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
    
                                <div class="col-md-6">
                                    <input disabled id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address',$student->address) }}" autocomplete="address">
     
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hobby" class="col-md-4 col-form-label text-md-end">{{ __('hobby') }}</label>
    
                                <div class="col-md-6">
                                    <input disabled id="hobby" type="hobby" class="form-control @error('hobby') is-invalid @enderror" name="hobby" value="{{ old('hobby',$student->hobby) }}" autocomplete="hobby">
 
                                </div>
                            </div> 
                            <div class="d-flex justify-content-center">
                                <a   href="{{route('home.index')}}"><- Kembali ke Home</a> 
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection