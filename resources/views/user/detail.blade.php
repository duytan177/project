@extends('layouts.master')
@section('content')
<form action="{{route('update',['id' => $result->id])}}" method="POST" >
    @method('put')
    @csrf

    <div class="container-fluid mt-5 pt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row m-2 input-group ">
            <div class="col-md-6 d-flex flex-row ">
                <label for=" " class="py-2">Percentage: </label>
                <input type="text" value="{{$result->percentage.'%'}}" class="form-control w-25">
            </div>
            <div class="col-md-6 ">
                <label for=" " class="col-md-2 d-lfex align-self-end ">Active: </label>
                <input type=radio value="1" name="active" class=" " {{$result->active==1?"checked":'false'}}><label for=" ">Active</label>
                <input type=radio value="0" name="active" class=" " {{$result->active==0?"checked":'false'}}> <label for=" ">No Active</label>
            </div>
        </div>

        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class="col-md-2 ">Role: </label>
                <input type=radio name="role" value="2" class="col-md-1 " {{$result->role==2?'checked':'false'}} > <label for=" ">User</label>
                <input type=radio name="role" value="1" class="col-md-1 " {{$result->role==1?'checked':'false'}}> <label for=" "> Adminitratror
                </label>
            </div>
        </div>
        <div class="row m-2 ">
            <div class="col-md-6 ">
                <label for=" " class=" col-md-2 ">Status: </label>
                <input type=radio name="status" value="Mr" class="col-md-1 " {{$result->status=="Mr"?"checked":'false'}}><label for=" ">Mr</label>
                <input type=radio name="status"  value="Mrs" class="col-md-1 " {{$result->status=="Mrs"?"checked":'false'}}><label>Mrs</label>
                <input type=radio name="status" value="Dr" class="col-md-1 " {{$result->status=="Dr"?"checked":'false'}}><label>Dr</label>
                <input type=radio name="status"  value="Ms" class="col-md-1 " {{$result->status=="Ms"?"checked":'false'}}><label>Ms</label>
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label class="col-md-3 ">First Name:</label>
                <input type=text name="firstname"  value="@foreach ($firstname as $value){{$value }} @endforeach" class=" col-md-9 form-control w-50" required>
            </div>
            <div class="col-md-6 py-1 d-flex flex-row">
                <label class="col-md-3 ">Last Name:</label>
                <input type=text name="lastname"  value="{{old('lastname')}}" class="col-md-9 form-control w-50" required placeholder=" ">
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Email: </label>
                <input type=email name="email" required placeholder="Email... "  value="{{$result->email}}" class="col-md-6  form-control w-75">
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Date of Birth: </label>
                <input type=date name="dateofbirth" value="{{$result->dateofbirth}}" class="col-md-6 form-control w-75">
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Address 1:</label>
                <input type="text " name="address1" value="{{$result->address1}}" class="col-md-8  form-control w-75">
            </div>
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 ">Code Postal</label>
                <input type="text " name="codepostal" value="{{$result->codepostal}}" class="col-md-5 form-control w-50" required>
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6  d-flex flex-row">
                <label for=" " class="col-md-3 ">Address 2:</label>
                <input type="text " name="address2" value="{{$result->address2}}" class="col-md-8 form-control w-75" required>
            </div>
            <div class="col-md-6  d-flex flex-row">
                <label for=" " class="col-md-3 ">City :</label>
                <select name="city" id="" class="form-control w-50">
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}" {{$city->id==$result->city_id?'selected':'false'}} >{{$city->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3"> Siret: </label>
                <input type="text" name="siret" value="{{$result->siret}}" class="col-md-3 form-control " required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
                <label for=" " class="col-md-3 "> Num VAT: </label>
                <input type="text " name="VAT" value="{{$result->vat}}" class="col-md-3 form-control " required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 "> IBAN: </label>
            <input type="text " name="IBAN" value="{{$result->iban}}" class="col-md-8 form-control w-75" required>
            </div>
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">B.I.C SWIFT:</label>
            <input type="text " name="swift" value="{{$result->swift}}" class="col-md-3 form-control">
            </div>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 "> Sponsor Code: </label>
            <input type="text " name="sponsor" value="{{$result->sponsor}}" class="col-md-8 form-control  " required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Number SSRS: </label>
            <input type="text " name="numberSSRS" value="{{$result->numberSSRS}}" class="col-md-3 form-control " required>
            </div>
        </div>


        <div class="row py-1">
            <label for=" " class="col-md-2">Information : </label>
        </div>
        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Default : </label>
            <input type="text " name="default" value="{{$result->default}}" class="col-md-3 form-control " required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Category of provider:</label>
            <input type="text " name="provider" value="{{$result->provider}}" class="col-md-3 form-control" required>
            </div>
        </div>

        <div class="row m-2 input-group">
            <div class="col-md-6 py-1 d-flex flex-row">
            <label for=" " class="col-md-3 ">Dissertation Currency: </label>
            <input type="text " name="dissertation" value="{{$result->dissertation}}" class="col-md-3 form-control" required>
            </div>
        </div>
        <div class="row m-2 input-group">
            <button type="submit" class="btn btn-outline-primary col-md-2">Update </button>
        </div>
    </div>


</form>
@endsection
