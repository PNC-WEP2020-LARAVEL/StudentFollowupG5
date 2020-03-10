@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Student') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('editstudent',$students->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" value="{{$students->firstname}}" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" value="{{$students->lastname}}" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <select name="class" id="class" class="form-control @error('class') is-invalid @enderror" >
                                    <option >Select class...</option>
                                    <option value="{{ old('WEB2020A')  }}">WEB2020A</option>
                                    <option value="{{ old('WEB2020B')  }}">WEB2020B</option>
                                    <option value="{{ old('SNA2020')  }}">SNA2020</option>
                                    <option value="{{ old('Class2020A')  }}">Class2020A</option>
                                    <option value="{{ old('Class2020B')  }}">Class2020B</option>
                                    <option value="{{ old('Class2020C')  }}">Class2020C</option>
                                </select>

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <select name="year" id="year" class="form-control @error('year') is-invalid @enderror" >
                                    <option >Select year...</option>
                                    <option value="{{ old('first-year')  }}">First Year</option>
                                    <option value="{{ old('second-year')  }}">Second Years</option>
                                </select>

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="radio" name="gender" value="{{$students->gender}}" required autocomplete="gender" autofocus> Male
                                <br><input id="gender" type="radio" name="gender" value="{{$students->gender}}" required autocomplete="gender" autofocus> Female

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('picture') }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" value="{{$students->firstname}}" name="picture" value="{{ old('picture') }}" required autocomplete="picture" autofocus>

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" value="{{$students->province}}" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select name="year" id="year" class="form-control @error('year') is-invalid @enderror" >
                                    <option >Select status...</option>
                                    <option value="{{ old('in-follow-up')  }}">In-follow-up</option>
                                    <option value="{{ old('out-follow-up')  }}">Out-follow-up</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('back')}}" class="btn btn-success">
                                    {{ __('Back') }}
                                </a>
                                <button type="submit" class="btn btn-primary float-right">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
