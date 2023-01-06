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
                <tr>
                    <td>
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                    </td>
                    <td>02/11/2022</td>
                    <td>202211-0001</td>
                    <td>Last name and first name</td>
                    <td>188.70$</td>
                    <td>17%</td>
                    <td>
                        <i class="fa-solid fa-caret-up fa-2x "></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                    </td>
                    <td>02/11/2022</td>
                    <td>202211-0001</td>
                    <td>Name</td>
                    <td>188.70$</td>
                    <td>17%</td>
                    <td>
                        <i class="fa-solid fa-caret-down fa-2x "></i>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                    </td>
                    <td>02/11/2022</td>
                    <td>202211-0001</td>
                    <td>Name</td>
                    <td>188.70$</td>
                    <td>17%</td>
                    <td>
                        <i class="fa-solid fa-caret-up fa-2x "></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="7 ">
                        <div class="d-flex flex-row justify-content-between ">
                            <div style="width: 30%; ">
                                <div class="d-flex flex-row justify-content-between ">
                                    <label for=" "> Total amount recovered: </label> 2.127.50
                                </div>
                                <div class="input-group d-flex flex-row justify-content-between ">
                                    <label for=" ">Number requisition:</label> 37
                                </div>
                                <div class="input-group d-flex flex-row justify-content-between ">
                                    <label for=" ">Retrocession rate: </label> 11%
                                </div>
                                <div class="input-group d-flex flex-row justify-content-between ">
                                    <label for=" ">Total H.T: </label> $234.02
                                </div>
                                <div class="input-group d-flex flex-row justify-content-between ">
                                    <label for=" ">VAT (20%) </label> $64.80
                                </div>
                                <div class="input-group d-flex flex-row justify-content-between ">
                                    <label for=" "><b>TOTAL: </b></label> 234.02$
                                </div>

                            </div>
                            <a href=" " class="btn btn-outline-primary px-sm-2 " style="width:100px; height: 5%; text-align: center; ">Download</a>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @endsection