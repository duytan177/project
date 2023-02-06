@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col  d-flex flex-row justify-content-between mx-5">
                <label for=" " class="col-md-2 w-50 mt-1">Dashboard: </label>
                <div>
                    <label for="" >
                        Referral code JDOE-4724
                    </label>
                    <a href="" class="btn btn-primary" class="col-md-1">To copy</a>
                </div>
            </div>
           
        </div>
        <div class="d-flex flex-row justify-content-around mt-5">
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="" >148</label><br>
                <label for="">Resquestion</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="" >2.148$</label><br>
                <label for="">recovered</label>
            </div>
            <div class="border border-dark text-center " style="width: 15%;">
                <label for="">159$</label><br>
                <label for="">to sponsorship</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;"> 
                <label for="">4</label><br>
                <label for="">Sponsorships</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="">11%</label><br>
                <label for="">Retrocession</label>
            </div>
        </div>
         <label for="" class="mt-5">Sponsorship list:</label>
           <table class="table-sm table " id="data-source-1_info" style="width: 90%;">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Date last entered</th>
                    <th>Active status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>duy</td>
                    <td>tan</td>
                    <td>17/1/2023</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>duy</td>
                    <td>tan</td>
                    <td>17/1/2023</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>duy</td>
                    <td>tan</td>
                    <td>17/1/2023</td>
                    <td>Active</td>
                </tr>
            </tbody>
     
    </div>
@endsection