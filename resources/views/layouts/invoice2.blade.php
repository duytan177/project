@extends('layouts.master')
@section('content')
            <!-- Page Sidebar Ends-->
        <div class="container-fluid">

                <!-- Container-fluid starts-->
                <div class="col-12 xl-100 chart_data_left box-col-12">
                    <div class="container-fluid">
                        <div class=" text-start m-0 p-4 text-start">
                            <div class="row mb-4">
                                <label for=" " class=" "> Invoices: </label>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4  d-flex flex-row">
                                    <label for=" " class="w-50 mt-1">Period: </label>
                                    <input type="number" min="1" max="12" name="month"
                                        class="form-control" required>
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
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Invoice number: </label>
                                    <input type="text" name="invoice " class="form-control " required>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                        <table class="table-sm table " id="data-source-1_info" style="width: 90%;">
                            <thead>
                                <tr>
                                    <th class="sorting_asc"><a href="?sort=name&sortType={{$sortType}}" style="color:black">Status</a></th>
                                    <th class="sorting">Date</th>
                                    <th class="sorting">Num.Invoice</th>
                                    <th class="sorting"><a href="?sort=name&sortType={{$sortType}}" style="color:black">Username</a></th>
                                    <th class="sorting">Rising</th>
                                    <th class="sorting">Retrocession</th>
                                    <th class=""> </th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>
                                            <div
                                                style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); ">
                                            </div>
                                        </td>
                                        <td>12</td>
                                        <td>202211-0001</td>
                                        <td class="sorting_1">2</td>
                                        <td>2</td>
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
                                                <br><br><br><br>
                                                <div class="input-group d-flex flex-row justify-content-between ">
                                                    <label for=" "><b>TOTAL: </b></label> 234.02$
                                                </div>

                                            </div>
                                            <a href=" " class="btn btn-outline-primary px-sm-2 "
                                                style="width:100px; height: 5%; text-align: center; ">Download</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            
@endsection
