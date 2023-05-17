<!doctype html>
<html lang="en">
<head>
    <title>Đơn hàng</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            font-family: 'DejaVu Sans';
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <h3 class="text-center">Don thuoc</h3>
            <p class="text-center">Đơn thuốc hàng ngày {{date('d/m/Y',strtotime($invoices[0]->created_at))}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="test-primary" style="font-size: 20px; font-weight: 400;">Thông tin đơn thuốc</p>{{$user[0]->name}} <br>
        </div>

    </div>
    <table class="table-sm table " style="width: 100%;">
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
                    <div style="width: 100%; ">
                        <div class="input-group d-flex flex-row justify-content-between ">
                            <label for=" ">Number requisition: {{$invoices[0]->id}}</label>
                        </div>
                        <div class="input-group d-flex flex-row justify-content-between ">
                            <label for=" ">Retrocession rate: {{$invoices[0]->retrocession}}%</label>
                        </div>
                        <div class="input-group d-flex flex-row justify-content-between ">
                            <label for=" ">Total H.T: {{$invoices[0]->rising}}</label>
                        </div>
                        <div class="input-group d-flex flex-row justify-content-between ">
                            @php
                                $phannguyen = (20*$invoices[0]->rising)/100;
                                $phandu = (20*$invoices[0]->rising)%100;
                            @endphp
                            <label for=" ">VAT (20%) {{$phannguyen.",".$phandu}}</label>
                        </div>
                        <div class="input-group d-flex flex-row justify-content-between ">
                            <label for=" "><b>TOTAL: {{$invoices[0]->rising + $phannguyen . ",".$phandu}}</b></label>
                        </div>

                    </div>

                </div>

            </td>
        </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
