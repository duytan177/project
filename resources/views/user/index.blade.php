@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-flex flex-row justify-content-between px-4 ">
        <p>Administrator</p>
        <a href="# " style="background-color: gray; height: 40px; width: 40px; border-radius: 50%; opacity: 0.5;">
            <i class="fa-solid fa-user " style="color:black; margin-left: 32%; margin-top: 27%;"></i>
        </a>
    </div>
    <div class=" text-start m-0 p-4 text-start">
        <div class="row mb-4">
            <label for=" " class=" "> Users: </label>
        </div>
        <div class="col-4  d-flex flex-row justify-content-between">
            <label for=" " class="w-25 mt-1 text-xl-start">User: </label>
            <input type="text" name="user" class="form-control w-75" required>
        </div>

    </div>
    <table class="table-sm table " style="width: 90%;margin: auto 5%;">
        <thead>
            <tr>
                <th class="col-1">Status</th>
                <th class="col-3">Username</th>
                <th class="col-2">Resgistration date</th>
                <th class="col-2">Retrocession</th>
                <th class="" "> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                </td>
              
                <td>Last name and first name</td>
                <td>188.70$</td>
                <td>17%</td>
                <td>
                    <i class="fa-solid fa-caret-up fa-2x text-right " style="float: right; "></i>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                </td>
                <td>Name</td>
                <td>188.70$</td>
                <td>17%</td>
                <td>
                    <i class="fa-solid fa-caret-down fa-2x " style="float: right; "></i>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                </td>
                <td>Name</td>
                <td>188.70$</td>
                <td>17%</td>
                <td>
                    <i class="fa-solid fa-caret-up fa-2x "style="float: right; "></i>
                </td>
            </tr>
            <tr>
                <td colspan="7 ">
                    <div class="row m-2 ">
                        
                            <div class="col-md-6 ">
                            <label for=" " class=" col-md-4 ">Percentage: </label>
                            <input type="text " value="18% " class="col-md-2 " >
                        </div>
                          <div class="col-md-6 ">
                            <label for=" " class="col-md-2 d-lfex align-self-end ">Status: </label>
                            <input type=radio value=Life name="status " class=" "><label for=" ">Life</label> 
                            <input type=radio value=die name="status " class=" "> <label for=" ">Idie</label>
                          </div>
                       
                        </div>
                    </div>
                    <div class="row m-2 ">
                        <div class="col-md-6 ">
                            <label for=" " class="col-md-2 ">Profile: </label>
                            <input type=radio name="profile " value=Use class="col-md-1 "> <label for=" ">User</label>
                            <input type=radio name="profile " value=Adminitrator class="col-md-1 "> <label for=" "> Adminitratror </label>
                        </div>
                    </div>
<div class="row m-2 ">
    <div class="col-md-6 ">
        <label for=" " class=" col-md-2 ">Status: </label>
        <input type=radio name=" status1 " value="Mr " class="col-md-1 "><label for=" ">Mr</label>
        <input type=radio name=" status1 " value="Mrs " class="col-md-1 "><label>Mrs</label>
        <input type=radio name=" status1 " value="Dr " class="col-md-1 "><label>Dr</label>
        <input type=radio name=" status1 " value="Me " class="col-md-1 "><label>Me</label>
    </div>
</div>
<div class="row m-2 ">
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">First Name:</label>
                <input type=text name="firstName " class=" col-md-6 " required >
            </div>
            <div class="col-md-6 py-1 ">
                <label for=" " class="col-md-4 ">Last Name:</label>
                <input type=text name="lastName " class="col-md-6 " required placeholder=" ">
            </div>
</div>
<div class="row m-2 ">
    <div class="col-md-6 py-1 ">
        <label for=" " class="col-md-4 ">Email:     </label>
        <input type=email name="email " required placeholder="Email... " class="col-md-6 ">
    </div>
</div>
<div class="row m-2 ">
    <div class="col-md-6 py-1 ">
        <label for=" " class="col-md-4 ">Date of Birth: </label>
        <input type=date name="birth " class="col-md-6 ">
   </div>
</div>
<div class="row m-2 ">
    <div class="col-md-7 py-1 ">
        <label for=" " class="col-md-3 ">Address 1:</label>
        <input type="text " name="address1 " class="col-md-8 ">
    </div>
    <div class="col-md-5 py-1 ">
        <label for=" " class="col-md-6 ">Code Postal</label>
        <input type="text " name="codePostal " class="col-md-5 " required>
    </div>
</div>
<div class="row m-2 ">
    <div class="col-md-7 py-1 ">
        <label for=" " class="col-md-3 ">Address 2:</label>
        <input type="text " name="address2 " class="col-md-8 " required>
    </div>
    <div class="col-md-5 py-1 ">
        <label for=" " class="col-md-6 ">City :</label>
    <input type="text " name="villa " class="col-md-5 "  required>
    </div>
</div>

</td>
</tr>
</tbody>
</table>
</div>

@endsection