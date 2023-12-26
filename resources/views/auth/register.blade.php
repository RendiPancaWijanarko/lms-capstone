@extends('layouts.app')

@section('addJavascript')
    <script>
        function otherOn() {
            if (document.getElementById('inlineRadio4').checked == true) {
                document.getElementById('other').style.display='flex';
                document.getElementById('other').required = true;
                document.getElementById('other_label').style.display='none';
            }
        }

        function otherOff() {
            document.getElementById('other').style.display='none';
            document.getElementById('other').required = false;
            document.getElementById('other_label').style.display='flex';
        }

        function checkRole() {
            let elRole = document.getElementById("role");
            let elDivPhone = document.getElementById('div_phone');
            let elDivCat = document.getElementById('div_cat');
            let elPhone = document.getElementById('phone');
            let elCat = document.getElementById('inlineRadio1');
            let role = elRole.options[elRole.selectedIndex].text;

            if (role == "Teacher") {
                elDivPhone.style.display='flex';
                elDivCat.style.display='flex';
                elPhone.required = true;
                elCat.required = true;
            } else {
                elDivPhone.style.display='none';
                elDivCat.style.display='none';
                elPhone.required = false;
                elCat.required = false;
                elPhone.value = '';
                elCat.checked = false;
            }
        }

        document.body.onload = function() {
            checkRole();
            otherOn();
        }
    </script>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="form-auth">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" onchange="checkRole();" required>
                                    <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>Student</option>
                                    <option value="Teacher" {{ old('role') == 'Teacher' ? 'selected' : '' }}>Teacher</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="div_phone" style="display:none">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="div_cat" style="display:none">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6 my-auto">
                                <div class="row align-items-center">
                                    <div class="col-md-3 col-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="english" onchange="otherOff();" {{ old('category') == 'english' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio1">English</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="computerscience" onchange="otherOff();" {{ old('category') == 'computerscience' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio2">Computer Science</label>
                                        </div>        
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" id="inlineRadio3" value="art" onchange="otherOff();" {{ old('category') == 'art' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio3">Art</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline mt-1">
                                            <input class="form-check-input" type="radio" name="category" id="inlineRadio4" value="other" onchange="otherOn();" {{ old('category') == 'other' ? 'checked' : '' }}>
                                            <label id="other_label" class="form-check-label" for="inlineRadio4">Other</label>
                                            <input id="other" name="other" type="text" placeholder="Lainnya" style="display:none; width:200px" value="{{ old('other') }}" autocomplete='other'>
                                        </div>
                                    </div>
                                </div>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        @if(config('captcha.enable', false))

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    @error('g-recaptcha-response')
                                    <span class="alert alert-error small alert-dismissible fade show">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="close small" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                    @enderror
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button btn-small">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if(config('captcha.enable', false))
    {!! NoCaptcha::renderJs() !!}
@endif
@endsection
