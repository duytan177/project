@extends('layouts.master')
@section('content')
    <div class="container-fluid ">
        <div class="row m-2">
            <label for="">Profile</label>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class=" col-md-2 ">Status: </label>
                <input type=radio name="status1" value="Mr " class="col-md-1 "><label for=" ">Mr</label>
                <input type=radio name="status1" value="Mrs " class="col-md-1 " checked><label>Mrs</label>
                <input type=radio name="status1" value="Dr " class="col-md-1 "><label>Dr</label>
                <input type=radio name="status1" value="Me " class="col-md-1 "><label>Me</label>
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label class="col-md-3 ">First Name:</label>
                <input type=text name="firstName" class=" col-md-9 form-control w-50" required>
            </div>
            <div class="col-md-6 py-1 d-flex flex-row">
                <label class="col-md-3 ">Last Name:</label>
                <input type=text name="lastName  class="col-md-9 form-control w-50" required placeholder=" ">
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Email: </label>
                <input type=email name="email" required placeholder="Email... " value="" class="col-md-6  form-control w-75">
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Date of Birth: </label>
                <input type=date name="birth" value="" class="col-md-6 form-control w-75">
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Address 1:</label>
                <input type="text " name="address1" value="" class="col-md-8  form-control w-75">
            </div>
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Code Postal</label>
                <input type="text " name="codePostal" value="" class="col-md-5 form-control w-50" required>
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6  d-flex flex-row">
                <label for=" " class="col-md-3 ">Address 2:</label>
                <input type="text " name="address2" value="" class="col-md-8 form-control w-75" required>
            </div>
            <div class="col-md-6  d-flex flex-row">
                <label for=" " class="col-md-3 ">City :</label>
                <input type="text " name="villa" value="" class="col-md-5 form-control w-50" required>
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
            <input type="text " name="numberSSRS" class="col-md-3 form-control " required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Category of provider:</label>
            <input type="text " name="provider" class="col-md-3 form-control" required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Dissertation Currency: </label>
            <input type="text " name="Dissertation" class="col-md-3 form-control" required>
            </div>
        </div>
    </div>


@endsection
