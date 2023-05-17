@extends('layouts.master')
<link type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });


</script>
@section('content')
    <div class="container-fluid">
    @include('error')
        <div class=" text-start m-0 p-4 text-start">

            <div class="row  d-flex flex-row justify-content-between">
                <div class="col-md-4 d-flex flex-row">
                <label for=" " class="w-25 mt-1 text-xl-start">User: </label>
                <input type="text" name="user" id="myInput" class="form-control w-75">
                </div>
                <div class="col-md-2">
                     <a href="{{route('create')}}" class="btn btn-outline-primary">Add User</a>
                </div>
            </div>

        </div>
        <table class="table-sm table display" id="data-source-1"  style="width: 90%;margin: auto 5%;">
            <thead>
                <tr>
                    <th class="col-1">Status</th>
                    <th class="col-3">Username</th>
                    <th class="col-2">Resgis date</th>
                    <th class="col-2">Percentage</th>
                    <th class="col-3">Action</th>
                        </tr>
                </thead>
                <tbody id="myTable">
                   @foreach ($result as $item)
                   <tr>
                    <td>
                        @if($item->active)
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(0, 255, 0); border: 2px solid rgb(192,192,192); color: rgb(0, 255, 0)">{{$item->active}}</div>
                        @else
                            <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                        @endif
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->percentage.'%'}}</td>
                    <td class="d-flex flex-row ">
                        <a href="{{route('detail',['id'=>$item->id])}}" class="btn btn-outline-primary mx-2 h-25">Edit</a>
                        <form action="{{route('destroy',['id'=>$item->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btndelete mx-2 " style="color: orangered" >Delete</button>
                        </form>
                    </td>
                </tr>
                   @endforeach
                </tbody>
            </table>
                </div>
                    <script>
                        $(document).ready(function(){
                        $('.btndelete').click(function(){
                            if(confirm('Bạn có thật sự muốn xóa không ?'))
                            {
                                $(this).parent().submit();
                                return false;
                }else
                    return false;
            });
        });
    </script>
@endsection
