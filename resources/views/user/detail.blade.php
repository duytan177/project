@extends('layouts.master')
@section('content')
    <div class="container-fluid mt-5 pt-5">
        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class=" col-md-4 ">Percentage: </label>
                <input type="text " value="18% " class="col-md-2 ">
            </div>
            <div class="col-md-6 ">
                <label for=" " class="col-md-2 d-lfex align-self-end ">Status: </label>
                <input type=radio value=Life name="status " class=" "><label for=" ">Life</label>
                <input type=radio value=die name="status " class=" "> <label for=" ">Idie</label>
            </div>
        </div>

        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class="col-md-2 ">Profile: </label>
                <input type=radio name="profile " value=Use class="col-md-1 "> <label for=" ">User</label>
                <input type=radio name="profile " value=Adminitrator class="col-md-1 "> <label for=" "> Adminitratror
                </label>
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class=" col-md-2 ">Status: </label>
                <input type=radio name=" status1 " value="Mr " class="col-md-1 "><label for=" ">Mr</label>
                <input type=radio name=" status1 " value="Mrs " class="col-md-1 "><label>Mrs</label>
                <input type=radio name=" status1 " value="Dr " class="col-md-1 "><label>Dr</label>
                <input type=radio name=" status1 " value="Me " class="col-md-1 "><label>Me</label>
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">First Name:</label>
                <input type=text name="firstName " class=" col-md-6 " required>
            </div>
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">Last Name:</label>
                <input type=text name="lastName " class="col-md-6 " required placeholder=" ">
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">Email: </label>
                <input type=email name="email " required placeholder="Email... " class="col-md-6 ">
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">Date of Birth: </label>
                <input type=date name="birth " class="col-md-6 ">
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-7 py-1 ">
                <label for=" " class="col-md-3 ">Address 1:</label>
                <input type="text " name="address1 " class="col-md-8 ">
            </div>
            <div class="col-md-5 py-1 ">
                <label for=" " class="col-md-6 ">Code Postal</label>
                <input type="text " name="codePostal " class="col-md-5 " required>
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-7 py-1 ">
                <label for=" " class="col-md-3 ">Address 2:</label>
                <input type="text " name="address2 " class="col-md-8 " required>
            </div>
            <div class="col-md-5 py-1 ">
                <label for=" " class="col-md-6 ">City :</label>
                <input type="text " name="villa " class="col-md-5 " required>
            </div>
        </div>



\
@endsection
