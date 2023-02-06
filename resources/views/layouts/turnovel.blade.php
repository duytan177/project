@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-4  d-flex flex-row">
                <label for=" " class="w-50 mt-1">Period: </label>
                <input type="number" min="1" max="12" name="month"
                    class="form-control" required>
            </div>
            <div class="col-4 d-flex flex-row ">
                <label for=" " class="w-50 mt-1">Start date: </label>
                <input type="date" name="startDate " class="form-control " required>
            </div>
            <div class="col-4 d-flex flex-row ">
                <label for=" " class="w-50 mt-1">End date: </label>
                <input type="date" name="endDate " class="form-control " required>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around mt-5">
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="" >148</label><br>
                <label for="">Resquestion</label>
            </div>
            <div class="border border-dark text-center " style="width: 15%;">
                <label for="">16.50%</label><br>
                <label for="">Retrocession</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;"> 
                <label for="">148$</label><br>
                <label for="">Side</label>
            </div>
            <div class="border border-dark text-center" style="width: 15%;">
                <label for="">2</label><br>
                <label for="">Users</label>
            </div>
        </div>
        <div class="mt-5">
            <label for="" class="m-2">MONTHLY TURNOVER: </label>
            <div class="border border-bottom-dark ">
                <div class="text-center">
                    <label for="">Graph that display (depent on the selected)</label>
                </div>
            </div>
        </div>
    </div>
@endsection