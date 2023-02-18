@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @include('error')
        <form method="post" action="{{route('storeProfile')}}" enctype="multipart/form-data">
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
        <div class="col-6  d-flex flex-row my-2">
            <label for=" " class="w-50 mt-1">Requesting authority: </label>
            <input type="text" name="authority" class="form-control" required>
        </div>
        <div class="col-6  d-flex flex-row my-2">
            <label for=" " class="w-50 mt-1">Type of service: </label>
            <input type="text" name="service" class="form-control" required>
        </div>
        <div class="d-flex flex-row mt-5 justify-content-between">
            <label class="col-md-9">List of document: </label>
            <div class="d-flex flex-row col-3">
                <input type="file" name="imageUpload">
                <button type="submit" class="form-control w-25">Upload</button>
            </div>
        </div>
        </form>
        <table class="table table-hover"   style="width: 90%;margin: 2% 5%;">

            <tbody >
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
                            @if($value->id== $image->id)
                                <button type="submit" id="myButton" class="btn btn-primary">-</button>
                            @else
                                <button type="submit" id="myButton" class="btn btn-outline-primary">-</button>
                            @endif

                        </form>
                    </td>
                </tr>
            @endforeach
                <tr>
                    <td class="d-flex flex-row justify-content-center align-items-center" >
                        @if($image)
                            <img src="{{asset($image->document_path)}}" alt="Ảnh đơn thuốc" style="width: 80%"></img>
                        @else
                            sadsa
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
