
@extends('layouts.master')
@section('content')
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

            </tr>
        @endforeach
    <tr>
        <td colspan="7 ">
            <div class="d-flex flex-row justify-content-between ">
                <div style="width: 30%; ">
                    <div class="input-group d-flex flex-row justify-content-between ">
                        <label for=" ">Number requisition:</label> {{$invoices[0]->id}}
                    </div>
                    <div class="input-group d-flex flex-row justify-content-between ">
                        <label for=" ">Retrocession rate: </label> {{$invoices[0]->retrocession}}%
                    </div>
                    <div class="input-group d-flex flex-row justify-content-between ">
                        <label for=" ">Total H.T: </label> {{$invoices[0]->rising}}
                    </div>
                    <div class="input-group d-flex flex-row justify-content-between ">
                        @php
                            $phannguyen = (20*$invoices[0]->rising)/100;
                            $phandu = (20*$invoices[0]->rising)%100;
                        @endphp
                        <label for=" ">VAT (20%) </label> {{$phannguyen.",".$phandu}}
                    </div>
                    <div class="input-group d-flex flex-row justify-content-between ">
                        <label for=" "><b>TOTAL: </b></label> {{$invoices[0]->rising + $phannguyen . ",".$phandu}}
                    </div>

                </div>
                <a href="{{route('invoice.print', $invoices[0]->id)}}" class="btn btn-outline-primary px-sm-2 " style="width:100px; height: 5%; text-align: center; ">Download</a>
            </div>

        </td>
    </tr>
    </tbody>
    </table>



@endsection
