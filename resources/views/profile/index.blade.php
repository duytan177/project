@extends('layouts.master')
<link type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@section('content')
    <div class="container-fluid">
        <div class=" text-start m-0 p-4 text-start">

            <div class="row mb-4">
                <div class="col-4  d-flex flex-row">
                    <label for=" " class="w-50 mt-1">Period: </label>
                    <input type="number" min="1" max="12" name="month" class="form-control" required>
                </div>
                <div class="col-4 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">Start date: </label>
                    <input type="date" name="startDate" class="form-control " required>
                </div>
                <div class="col-4 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">End date: </label>
                    <input type="date" name="endDate" class="form-control " required>
                </div>
            </div>
            <div>
                <div class="col-md-11 d-flex flex-row justify-content-end">
                    <div class="col-md-11"></div>
                    <a href="{{route('createProfile')}}" class=" form-control btn btn-primary">Add</a>
                </div>
            </div>
        </div>
        <table class="table-sm table " style="width: 90%;">
            <thead>
            <tr>
                <th class="">Status</th>
                <th class="">Date</th>
                <th class="">Num Affaric</th>
                <th class=""></th>
                <th class=""></th>
            </tr>
            </thead>
            <tbody>
            @if($profile)
            @foreach($profile as $id => $value)
            <tr>
                <td>
                    <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); ">{{intval($id)+1}}</div>
                </td>

                <td>{{$value->updated_at}}</td>
                <td>{{$value->num_affair}}</td>
                <td>
                    <div class="input-group d-flex flex-row">
                        <a href="{{route('detailProfile',['id'=> $value->id])}}" class="btn btn-outline-primary mx-2 h-25">Edit</a>
                        <form action={{route('destroyProfile',['id' => $value->id])}})" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btndelete mx-2 " style="color: orangered" >Delete</button>
                        </form>
                    </div>
                </td>
                <td>
                    <i class="fa-solid fa-caret-up fa-2x "></i>
                </td>
            </tr>
            @endforeach

            @endif
            </tbody>
        </table>
    </div>
@endsection
