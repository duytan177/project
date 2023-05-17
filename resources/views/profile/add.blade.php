@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <form method="post" action="{{route('storeProfile')}}" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-6 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">Date Requisition: </label>
                    <input type="date" name="date" value="" class="form-control " required>
                </div>
                <div class="col-6 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">Service Date: </label>
                    <input type="date" value="" name="serviceDate" class="form-control " required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">Num Affair: </label>
                    <input type="text" value="" name="numAffair" class="form-control " required>
                </div>
                <div class="col-6 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">Service price: </label>
                    <input type="text" value="" name="servicePrice" class="form-control " required>
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col-md py-1 d-flex flex-row">
                    <label for=" " class="col-md-2   ">Default jurisdiction:</label>
                    <input type="text " value="" name="default" class="col-md-3 form-control w-50" required>
                </div>
            </div>
            @include('error')
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md py-1   d-flex flex-row ">
                <label for=" " class="col-md-2">Requesting authority: </label>
                <input type="text" value="" name="authority" class="col-md-3 form-control w-50" required>
            </div>
            <div class="col-md py-1  d-flex flex-row ">
                <label for=" " class="col-md-2">Type of service: </label>
                <input type="text" value="" name="service" class="col-md-3 form-control w-50" required>
            </div>
            <div class="d-flex flex-row mt-5 justify-content-between">
                <label class="col-md-7">List of document: </label>
                <div class="d-flex flex-row col-md-4">
                    <input type="file" multiple name="imageUpload[]">
                    <button type="submit" class="form-control col-md-3 w-25 btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
        <table class="table table-hover"   style="width: 90%;margin: 2% 5%;">
            <tbody >
            @if(isset($result))
            @foreach($result as $id => $value)
                <tr class="d-flex flex-row justify-content-between">
                    <td class="col-2">
                        {{$id+1}}
                    </td>
                    <td class="col-8">
                        {{$value->document_name}}
                    </td>
                    <td class="col-2">
                        <form action="{{route('showImage',['id'=>$value->id])}}" method="get">
                            @if(isset($image) && $value->id== $image->id)
                                <button type="submit" id="myButton" class="btn btn-primary">-</button>
                            @else
                                <button type="submit" id="myButton" class="btn btn-outline-primary">-</button>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif
            <tr>
                <td class="d-flex flex-row justify-content-center align-items-center" >
                    @if(isset($image))
                        <img src="{{asset($image->document_path)}}" alt="Ảnh đơn thuốc" style="width: 80%"></img>
                    @else
                        <div class="d-flex flex-row justify-content-center align-items-center " style="height: 150px" >Image Scanner</div>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection
