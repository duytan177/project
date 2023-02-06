@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        <div class=" text-start m-0 p-4 text-start">
            <div class="row mb-4">
                <label for=" " class=" "> View/Edit: </label>
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
                <div class="col-4  d-flex flex-row">
                    <label for=" " class="w-50 mt-1">User: </label>
                    <input type="text" name="user" id="" class="form-control">
                </div>
                <div class="col-4  d-flex flex-row">
                    <label for=" " class="w-50 mt-1">Case: </label>
                    <input type="text" name="user" id="" class="form-control">
                </div>
            </div>
        </div>
        <table class="table-sm table " style="width: 90%;">
            <thead>
                <tr>
                    <th class="">Status</th>
                    <th class="">State Date</th>
                    <th class="">End date</th>
                    <th class="">Username</th>
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
                        <td>05/11/2022</td>
                        <td>Last name and first name</td>
                   
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
                        <td>07/11/2022</td>
                        <td>Name</td>
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
                        <td>07/11/2022</td>
                        <td>Name</td>
                        <td>17%</td>
                        <td>
                            <i class="fa-solid fa-caret-up fa-2x "></i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7 " class="p-4">
                            <div class="row mb-4">
                                <div class="col-6 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Start date: </label>
                                    <input type="date" name="startDate " class="form-control " required>
                                </div>
                                <div class="col-6 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">End date: </label>
                                    <input type="date" name="endDate " class="form-control " required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-6 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Num Affair: </label>
                                    <input type="text" name="affair " class="form-control " required>
                                </div>
                                <div class="col-6 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Service price: </label>
                                    <input type="text" name="price " class="form-control " required>
                                </div>
                            </div>
                            <div class="row mt-5 ">
                                <div class="col-md py-1 d-flex flex-row">
                                <label for=" " class="col-md-2   ">Default jurisdiction:</label>
                                <input type="text " name="numberSSRS " class="col-md-3 form-control w-50" required>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-md py-1 d-flex flex-row">
                                <label for=" " class="col-md-2   ">Requesting authority:</label>
                                <input type="text " name="numberSSRS " class="col-md-3 form-control w-50" required>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-md py-1 d-flex flex-row">
                                <label for=" " class="col-md-2   ">Type of service:</label>
                                <input type="text " name="numberSSRS " class="col-md-3 form-control w-50" required>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-md py-1 d-flex flex-row">
                                <label for=" " class="col-md-2   ">Download documents:</label>
                                <button class="btn btn-primary">Download</button>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between mt-5">
                                <label for="">List of document</label>
                                <a href="" class="btn btn-outline-primary">ads</a>
                            </div>
                            <table class="table-sm table mt-2" border="1">
                                <tr>
                                    <td>
                                        <div class="d-flex flex-row justify-content-between">
                                            <label for="">Document 1</label>
                                            <a href="" class="btn btn-outline-primary">-</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex flex-row justify-content-between">
                                            <label for="">Document 1</label>
                                            <a href="" class="btn btn-outline-primary">-</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex flex-row justify-content-between">
                                            <label for="">Document 1</label>
                                            <a href="" class="btn btn-outline-primary">-</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                
                            </table>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
@endsection
