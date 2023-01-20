@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-row justify-content-between px-4 ">
        <p>Administrator</p>
        <a href="# " style="background-color: gray; height: 40px; width: 40px; border-radius: 50%; opacity: 0.5;">
            <i class="fa-solid fa-user " style="color:black; margin-left: 32%; margin-top: 27%;"></i>
        </a>
    </div>
    <div class=" text-start m-0 p-4 text-start">
        <div class="row mb-4">
            <label for=" " class=" "> Promotion: </label>
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
                <td colspan="7 " class="p-4 ">
                            <div class="row py-2 input-group">
                                <label for=" " class="col-md-2 ">Start date :</label>
                                <input type=date name="startDate " class="form-control col-md-3 ">
                                <label for=" " class="col-md-1 ">End date :</label>
                                <input type=date name="endDate " class="form-control col-md-3 ">                
                            </div>
                            <div class="row py-2 input-group">
                               <label for=" " class=col-md-2>User</label>
                                <input type=text name="user " class="col-md-4 form-control" required>
                             </div>
                             <div class="row py-2 input-group">
                                <label for=" " class=col-md-2>Promo Percentage :</label>
                                <input type=text name="percentage " class="col-md-3 form-control"required>
                            </div>
</td>
</tr>
</tbody>
</table>
</div>
@endsection

