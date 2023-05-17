@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @include('error')
        <div class="row mb-4">
            <div class="col  d-flex flex-row justify-content-between mx-5">
                <label for=" " class="col-md-2 w-50 mt-1">Dashboard: </label>
                <div>
                    <label for="" >
                        Referral code <span>{{$code}}</span>
                    </label>
                    <button onclick="myFun()"  class="btn btn-primary" class="col-md-1">To copy</button>
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
                <label for="">{{empty($sponsor)?0:count($sponsor)}}</label><br>
                <label for="">Sponsorships</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="">11%</label><br>
                <label for="">Retrocession</label>
            </div>
        </div>
         <label for="" class="mt-5">Sponsorship list:</label>
           <table class="table" id="data-source-1_info" style="width: 90%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date last entered</th>
                    <th>Active status</th>
                </tr>
            </thead>
            <tbody>
                    @if(!empty($sponsor))
                    @foreach($sponsor as $value)
                    <tr>
                        <td>{{$value['name']}}</td>
                        <td>{{date_format(date_create($value['date']),'d/m/Y')}}</td>
                        @if($value['active'])
                            <td>Active</td>
                        @else
                            <td>No Active</td>
                        @endif
                    </tr>
                    @endforeach
                    @endif
            </tbody>
    </div>
    <script>
        function myFun()
        {
            navigator.clipboard.writeText("http://localhost:8080/projectdemo/register?code={{$code}}");
        }
    </script>
@endsection
