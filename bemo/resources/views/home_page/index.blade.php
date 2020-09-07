@extends('layouts.app')

@section('content')

<head>
  
</head>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home Page Configuration') }}</div>

                <div class="card-body">
                    <!-- {{$data}} -->
                    <form method="POST" action="/update">
                        @csrf
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo url') }}</label>

                            <div class="col-md-6">
                                <input id="logo" type="text" class="form-control @error('email') is-invalid @enderror" name="logo" value="{{ $data->logo }}" required autocomplete="email" autofocus>

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image url') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('password') is-invalid @enderror" name="image" value = "{{ $data->image }}"required autocomplete="current-password">

                                <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_text" class="col-md-4 col-form-label text-md-right">{{ __('Image Text') }}</label>

                            <div class="col-md-6">
                                <input id="image_text" type="text" class="form-control @error('email') is-invalid @enderror" name="image_text" value="{{ $data->image_text }}" required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('email') is-invalid @enderror" name="title" value="{{ $data->title }}" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="header_1" class="col-md-4 col-form-label text-md-right">{{ __('Header 1') }}</label>

                            <div class="col-md-6">
                                <input id="header_1" type="text" class="form-control @error('email') is-invalid @enderror" name="header_1" value="{{ $data->header_1 }}" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="para_1" class="col-md-4 col-form-label text-md-right">{{ __('Paragraph 1') }}</label>

                            <div class="col-md-6">
                                <textarea id="para_1" type="textarea" class="form-control @error('email') is-invalid @enderror" name="para_1" value="" required autocomplete="email" autofocus>{{ $data->para_1 }}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="header_2" class="col-md-4 col-form-label text-md-right">{{ __('Header 2') }}</label>

                            <div class="col-md-6">
                                <input id="header_2" type="text" class="form-control @error('email') is-invalid @enderror" name="header_2" value="{{ $data->header_2 }}" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="para_2" class="col-md-4 col-form-label text-md-right">{{ __('Paragraph 2') }}</label>

                            <div class="col-md-6">
                                <textarea id="para_2" type="textarea" class="form-control @error('email') is-invalid @enderror" name="para_2" value="" required autocomplete="email" autofocus>{{ $data->para_2 }}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_title" class="col-md-4 col-form-label text-md-right">{{ __('Meta Title') }}</label>

                            <div class="col-md-6">
                                <input id="meta_title" type="text" class="form-control @error('email') is-invalid @enderror" name="meta_title" value="{{$data->meta_title}} " required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_desc" class="col-md-4 col-form-label text-md-right">{{ __('Meta Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="meta_desc" type="textarea" class="form-control @error('email') is-invalid @enderror" name="meta_desc" value="" required autocomplete="email" autofocus>{{ $data->meta_desc }}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="google_analytics" class="col-md-4 col-form-label text-md-right">{{ __('Google Analytics') }}</label>

                            <div class="col-md-6">
                                <textarea id="google_analytics" type="textarea" class="form-control @error('email') is-invalid @enderror" name="google_analytics" value="" required autocomplete="email" autofocus>{{ $data->google_analytics }}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook_pixel" class="col-md-4 col-form-label text-md-right">{{ __('Facebook Pixel') }}</label>

                            <div class="col-md-6">
                                <textarea id="facebook_pixel" type="textarea" class="form-control @error('email') is-invalid @enderror" name="facebook_pixel" value="" required autocomplete="email" autofocus>{{ $data->facebook_pixel }}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="indexing" class="col-md-4 col-form-label text-md-right">{{ __('Indexing') }}</label>

                            <div class="col-md-6">
                              @if ($data->is_visible == 'true')
                                <input type="radio" id="true" name="indexing" value="true" checked="checked">
                                <label for="true">Yes</label><br>
                                <input type="radio" id="false" name="indexing" value="false">
                                <label for="false">No</label><br>
                               @else
                               <input type="radio" id="true" name="indexing" value="true" >
                                <label for="true">Yes</label><br>
                                <input type="radio" id="female" name="indexing" value="false" checked="checked">
                                <label for="false">No</label><br>
                               @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Apply') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
