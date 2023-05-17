    @extends('layouts.master')
@section('content')

<div class="container-fluid">

    <div class="p-4">
        <div class="input-group">
            <label for="">Setting:</label>
        </div>
        <div class="input-group d-flex flex-row justify-content-between mt-2">
            <div class=>
                <label for=" ">Open Status: </label>
                <input type="radio" name="serverStatus" id=" " value="Active">Active
                <input type="radio" name="serverStatus" id=" " value="No Active">No Active
            </div>
            <div>
                <button type="submit" class="btn btn-primary ">Save</button>
            </div>
        </div>
        <div class="input-group mt-2">
            <label for=" ">Registration : </label>
            <input type="radio" name="regis" value=" Open "> Main
            <input type="radio" name="regis" id=" " value=" Maintain ">Iron
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
