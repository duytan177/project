@extends('layouts.master')
@section('content')
  
<div class="container-fluid">
    <div class="d-flex flex-row justify-content-between p-4 ">
        <p>Administrator</p>
        <a href="# " style="background-color: gray; height: 40px; width: 40px; border-radius: 50%; opacity: 0.5;">
            <i class="fa-solid fa-user " style="color:black; margin-left: 32%; margin-top: 27%;"></i>
        </a>
    </div>
    <div class="p-4">
        <div class="input-group">
            <label for="">Setting:</label>
        </div>
        <div class="input-group d-flex flex-row justify-content-between mt-2">
            <div class=>
                <label for=" ">Open Status: </label>
                <input type="radio" name="serverStatus " id=" " value=" Open ">Open
                <input type="radio" name="serverStatus " id=" " value=" Maintain ">Maintain
            </div>
            <div>
                <button type="submit" class="btn btn-primary ">Save</button>
            </div>
        </div>
        <div class="input-group mt-2">
            <label for=" ">Registration : </label>
            <input type="radio" name="regis " class="" id=" " value=" Open "> <label for="">Open</label>
            <input type="radio" name="regis " id=" " value=" Maintain ">Iron
        </div>
        <div class="input-group mt-2 w-50">
            <label for=" " class="w-50">Percentage by default : </label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="input-group mt-2 w-50">
            <label for=" " class="w-50">Service price by default : </label>
            <input type="text" name="servicePrice" id="" class="form-control">
        </div>
    </div>
</div>
@endsection