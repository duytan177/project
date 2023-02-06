@extends('layouts.master')
@section('content')
    <div class="container-fluid">
    @include('error')
        <div class=" text-start m-0 p-4 text-start">
            <div class="row mb-4">
                <label for=" " class=" "> Users: </label>
            </div>
            <div class="row  d-flex flex-row justify-content-between">
                <div class="col-md-4 d-flex flex-row">
                <label for=" " class="w-25 mt-1 text-xl-start">User: </label>
                <input type="text" name="user" class="form-control w-75" required>
                </div>
                <div class="col-md-2">
                     <a href="{{route('create')}}" class="btn btn-outline-primary">Add User</a>
                </div>
            </div>

        </div>
        <table class="table-sm table " style="width: 90%;margin: auto 5%;">
            <thead>
                <tr>
                    <th class="col-1">Status</th>
                    <th class="col-3">Username</th>
                    <th class="col-2">Resgis date</th>
                    <th class="col-2">Percentage</th>
                    <th class="col-3">Action</th>

                        </tr>
                </thead>
                <tbody>
                   @foreach ($result as $item)
                   <tr>
                    <td>
                        <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{ date("d/m/Y",strtotime($item->created_at))}}</td>
                    <td class="d-flex flex-row justify-content-between">
                        <a href="{{route('detail',['id'=>$item->id])}}" class="btn btn-outline-primary">Edit</a>
                        <form action="{{route('destroy',['id'=>$item->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btndelete" >Delete</button>
                        </form/>
                    </td>
                    {{-- <td>
                        <i class="fa-solid fa-caret-up fa-2x text-right " style="float: right; "></i>
                    </td> --}}
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
