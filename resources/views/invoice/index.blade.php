@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class=" text-start m-0 p-4 text-start">
            <div class="row mb-4">
                <label for=" " class=" "> Invoices: </label>
            </div>
            <div class="row mb-4">
                <div class="col-4  d-flex flex-row">
                    <label for=" " class="w-50 mt-1">Period: </label>
                    <input type="number" min="1" max="12" name="month" class="form-control" required>
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

            <div class="row mb-4">
                <div class="col-4 d-flex flex-row ">
                    <label for=" " class="w-50 mt-1">User: </label>
                    <input type="text" name="user " class="form-control " required>
                </div>


            </div>
        </div>
        <table class="table-sm table " style="width: 90%;">
            <thead>
            <tr>
                <th class="">Status</th>
                <th class="">Date</th>
                <th class="">Num.Invoice</th>
                <th class="">Username</th>
                <th class="">Rising</th>
                <th class="">Retrocession</th>
                <th class="" "> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $key => $invoice)

                <tr>
                    <td>
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                    </td>
                    <td>{{$invoice->date}}</td>
                    <td>{{$invoice->num_invoice}}</td>
                    <td>{{$invoice->username}}</td>
                    <td>50$</td>
                    <td>{{$invoice->retrocession}}%</td>
                    <td>
                        <div class="input-group d-flex flex-row">
                            <a href="{{route("invoice.detail",$invoice->id)}}" class="btn btn-outline-primary mx-2 h-25">View</a>
                            <form action="{{route("invoice.destroy",$invoice->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btndelete mx-2 " style="color: orangered" >Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
