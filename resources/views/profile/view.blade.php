@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-6 d-flex flex-row ">
                <label for=" " class="w-50 mt-1">Service price: </label>
                <input type="text" value="{{$profile->service_price}}" name="service_price " class="form-control " required>
            </div>
            <div class="col-6 d-flex flex-row ">
                <label for=" " class="w-50 mt-1">Default jurisdiction: </label>
                <input type="text" value="{{$profile->default}}" name="default" class="form-control " required>
            </div>
        </div>
        <div class="row mt-5 ">
        <div class="row mt-2 ">
            <div class="col-md py-1 d-flex flex-row">
                <label for=" " class="col-md-2   ">Requesting authority:</label>
                <input type="text " value="{{$profile->request_authority}}" name="authority" class="col-md-3 form-control w-50" required>
            </div>
        </div>
        <div class="row mt-2 ">
            <div class="col-md py-1 d-flex flex-row">
                <label for=" " class="col-md-2   ">Type of service:</label>
                <input type="text " value="{{$profile->type_of_service}}" name="service" class="col-md-3 form-control w-50" required>
            </div>
        </div>
        <div class="row mt-2 ">
            <div class="col-md py-1 d-flex flex-row">
                <label for=" " class="col-md-2   ">Download documents:</label>
                <form action="{{ route('download') }}" method="POST">
                    @csrf
                    <input type="hidden" name="downloadFile" value="{{$files}}">
                    <button type="submit" class="btn btn-primary">Download</button>
                </form>
            </div>
        </div>
        <div class="d-flex flex-row  mt-5">
            <label for="">List of document</label>
        </div>
        <table class="table-sm table mt-2" border="1">
            @foreach($result as  $value)
                <tr>
                    <td>

                        <div class="d-flex flex-row justify-content-between">
                            <label> {{$value->index}}</label>
                            <label for="">{{$value->document_name}}</label>
                            <a href="" class="btn btn-outline-primary">-</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="d-flex flex-row justify-content-center align-items-center" >
                    @if(isset($image))
                        <img src="{{asset($image->document_path)}}" alt="Ảnh đơn thuốc" style="width: 80%"></img>
                    @else
                        <div class="d-flex flex-row justify-content-center align-items-center " style="height: 150px" >Image Scanner</div>
                    @endif
                </td>
            </tr>
        </table>
            <div class=" d-flex flex-row justify-content-end my-3">
        <a href="" class="btn btn-outline-primary">Send</a>
        </div>
        </div>

@endsection
