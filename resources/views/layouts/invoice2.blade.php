@extends('layouts.master')
@section('content')
    <script>
        $(document).ready(function(){
            $("#myUser").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#myInvoice").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    if($(this).find('td').eq(2).text()){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    }
                });
            });
        });
    </script>
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
                                    <input type="text" name="user" id="myUser" class="form-control " required>
                                </div>
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Invoice number: </label>
                                    <input type="number" name="invoice " id="myInvoice" class="form-control " required>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                        <table class="table-bordered table " id="" style="width: 90%;">
                            <thead>
                                <tr>
                                    <th class="sorting_asc">Status</th>
                                    <th class="sorting">Date</th>
                                    <th class="sorting">Num.Invoice</th>
                                    <th class="sorting">Username</th>
                                    <th class="sorting">Rising</th>
                                    <th class="sorting">Retrocession</th>
                                    <th class=""> </th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                    <tr>
                                        <td>
                                            <div
                                                style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); ">
                                            </div>
                                        </td>
                                        <td>12</td>
                                        <td>202211-0001</td>
                                        <td class="sorting_1">Duy Tan</td>
                                        <td>2</td>
                                        <td>17%</td>
                                        <td>
                                            <i class="fa-solid fa-caret-up fa-2x "></i>
                                        </td>
                                    </tr>

                                <tr>
{{--                                    <td colspan="7 ">--}}

{{--                                    </td>--}}
                                </tr>
                            </tbody>
                        </table>
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
                    </div>
                </div>

            </div>

@endsection
