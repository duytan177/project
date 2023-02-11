@extends('layouts.app')

@section('content')
    <div class="container  m-5 p-5">
        @include('error')
        <form action="{{ route('Register') }}" method="POST">
            @csrf
            <label for="">Registration: </label>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row m-2 ">
                <div class="col-md-6 ">
                    <label for=" " class=" col-md-2 ">Status: </label>
                    <input type=radio name="status" value="Mr" value="{{old('status')}}" class="col-md-1 "><label for=" ">Mr</label>
                    <input type=radio name=" status" value="Mrs" value="{{old('status')}}" class="col-md-1 "><label>Mrs</label>
                    <input type=radio name=" status" value="Dr" value="{{old('status')}}" class="col-md-1 "><label>Dr</label>
                    <input type=radio name=" status" value="Me" value="{{old('status')}}" class="col-md-1 "><label>Me</label>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label class="col-md-3 ">First Name:</label>
                    <input type=text name="firstname" value="{{old('firstname')}}" class=" col-md-9 form-control w-50" required>
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label class="col-md-3 ">Last Name:</label>
                    <input type=text name="lastname" value="{{old('lastname')}}" class="col-md-9 form-control w-50" required placeholder=" ">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Email-address: </label>
                    <input type=email name="email" required placeholder="Email... " value="{{old('email')}}"
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Password: </label>
                    <input type="password" name="password" value="{{old('password')}}" required placeholder="******" value=""
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Confirm password: </label>
                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" required placeholder="******" value=""
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Date of Birth: </label>
                    <input type=date name="dateofbirth" value="{{old('dateofbirth')}}" class="col-md-6 form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Address 1:</label>
                    <input type="text" name="address1" value="{{old('address1')}}" class="col-md-8  form-control w-75">
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Code Postal</label>
                    <input type="text" name="codepostal" value="{{old('codepostal')}}" class="col-md-5 form-control w-50" required>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6  d-flex flex-row">
                    <label for=" " class="col-md-3 ">Address 2:</label>
                    <input type="text" name="address2" value="{{old('address2')}}" class="col-md-8 form-control w-75" required>
                </div>
                <div class="col-md-6  d-flex flex-row">
                    <label for=" " class="col-md-3 ">City :</label>
                    <select name="city" id="">
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3"> Siret: </label>
                    <input type="text" name="siret" value="{{old('siret')}}" value="" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> Num VAT: </label>
                    <input type="text " name="VAT" value="{{old('VAT')}}" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> IBAN: </label>
                    <input type="text " name="IBAN" value="{{old('IBAN')}}" class="col-md-8 form-control w-75" required>
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">B.I.C SWIFT:</label>
                    <input type="text " name="swift" value="{{old('swift')}}" class="col-md-5 form-control w-50">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> Sponsor Code: </label>
                    <input type="text " name="sponsor" value = "{{$code?$code:""}}" value="{{old('sponsor')}}" class="col-md-8 form-control " >
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Number SSRS: </label>
                    <input type="text" name="numberSSRS" value="{{old('numberSSRS')}}" class="col-md-3 form-control " required>
                </div>
            </div>


            <div class="row py-1">
                <label for=" " class="col-md-2">Information : </label>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Default : </label>
                    <input type="text " name="default" value="{{old('default')}}" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Provider category:</label>
                    <input type="text " name="provider" value="{{old('provider')}}" class="col-md-3 form-control" required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Dissertation Currency: </label>
                    <input type="text " name="dissertation" value="{{old('dissertation')}}" class="col-md-3 form-control" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block " type="submit">Create Account</button>

        </form>
    </div>



    {{-- <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div class="login-main">
                            <form action="{{ route('register') }} " method="POST" class="theme-form">
                                @csrf
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create account</p>
                                <div class="input-group  d-flex flex-row justify-content-between">
                                    <label for="col-md-1">Status: </label>
                                    <input type="radio" name="status" id="" value="Mr" class="col-md-1">Mr
                                    <input type="radio" name="status" id="" value="Mrs" class="col-md-1">Mrs
                                    <input type="radio" name="status" id="" value="Dr" class="col-md-1">Dr
                                    <input type="radio" name="status" id="" value="Ms" class="col-md-1">Ms
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Your Name</label>
                                    <input class="form-control" name="name" type="text" required=""
                                        placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                        <div class="form-group">
                            <label class="col-form-label">Email Address</label>
                            <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <div class="form-input position-relative">
                                <input class="form-control" type="password" name="password" required=""
                                    placeholder="*********">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm"
                                class=" col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="form-input position-relative">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            @error('password-confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm"
                                class=" col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="form-input position-relative">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                            @error('password-confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <div class="checkbox p-0">
                                <input id="checkbox1" type="checkbox">
                                <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy
                                        Policy</a></label>
                            </div>
                            <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                        </div>
                        <h6 class="text-muted mt-4 or">Or signup with</h6>
                        <div class="social mt-4">
                            <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                    target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                                </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i
                                        class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light"
                                    href="https://www.facebook.com/" target="_blank"><i class="txt-fb"
                                        data-feather="facebook"></i>facebook</a></div>
                        </div>
                        <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign
                                in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
