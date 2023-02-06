@extends('layouts.master')
@section('content')
    <div class="container  m-5 p-5">
        <form action="{{ route('store') }}" method="POST">
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
                    <input type=radio name=" status" value="Mr" class="col-md-1 "><label for=" ">Mr</label>
                    <input type=radio name=" status" value="Mrs" class="col-md-1 "><label>Mrs</label>
                    <input type=radio name=" status" value="Dr" class="col-md-1 "><label>Dr</label>
                    <input type=radio name=" status" value="Ms" class="col-md-1 "><label>Ms</label>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label class="col-md-3 ">First Name:</label>
                    <input type=text name="firstname" class=" col-md-9 form-control w-50" required>
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label class="col-md-3 ">Last Name:</label>
                    <input type=text name="lastname" class="col-md-9 form-control w-50" required placeholder=" ">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Email-address: </label>
                    <input type=email name="email" required placeholder="Email... " value=""
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Password: </label>
                    <input type="password" name="password" required placeholder="******" value=""
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Confirm password: </label>
                    <input type="password" name="password_confirmation" required placeholder="******" value=""
                        class="col-md-6  form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Date of Birth: </label>
                    <input type=date name="dateofbirth" class="col-md-6 form-control w-75">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Address 1:</label>
                    <input type="text" name="address1" class="col-md-8  form-control w-75">
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Code Postal</label>
                    <input type="text" name="codepostal" class="col-md-5 form-control w-50" required>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6  d-flex flex-row">
                    <label for=" " class="col-md-3 ">Address 2:</label>
                    <input type="text" name="address2" class="col-md-8 form-control w-75" required>
                </div>
                <div class="col-md-6  d-flex flex-row">
                    <label for=" " class="col-md-3 ">City :</label>
                    <select name="city" id="">
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" >{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3"> Siret: </label>
                    <input type="text" name="siret" value="" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> Num VAT: </label>
                    <input type="text " name="VAT" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> IBAN: </label>
                    <input type="text " name="IBAN" class="col-md-8 form-control w-75" required>
                </div>
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">B.I.C SWIFT:</label>
                    <input type="text " name="swift" class="col-md-5 form-control w-50">
                </div>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 "> Sponsor Code: </label>
                    <input type="text " name="sponsor" class="col-md-8 form-control  " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Number SSRS: </label>
                    <input type="text " name="numberSSRS" class="col-md-3 form-control " required>
                </div>
            </div>


            <div class="row py-1">
                <label for=" " class="col-md-2">Information : </label>
            </div>
            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Default : </label>
                    <input type="text " name="default" class="col-md-3 form-control " required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Provider category:</label>
                    <input type="text " name="provider" class="col-md-3 form-control" required>
                </div>
            </div>

            <div class="row m-2 input-group">
                <div class="col-md-6 py-1 d-flex flex-row">
                    <label for=" " class="col-md-3 ">Dissertation Currency: </label>
                    <input type="text " name="dissertation" class="col-md-3 form-control" required>
                </div>
            </div>
            <button class="btn btn-primary btn-block " type="submit">Create Account</button>

        </form>
    </div>
@endsection
