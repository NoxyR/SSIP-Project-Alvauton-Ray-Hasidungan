@extends('layouts.app')

@section('content')
        
        <div class="row">
            <div class="col-6">
             <h1>ITEM DATA</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD ITEM
                </button>

            </div>
            @if(session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{session('success')}}
        </div>
        @endif
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>BRAND</th>
                    <th>NAME</th>
                    <th>EXP</th>
                    <th>SUPPLIER</th>
                    <th>DESC</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($data_item as $item) 
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->expired_date}}</td>
                    <td>{{$item->supplier}}</td>
                    <td>{{$item->description}}</td>
                    <td> 
                        <a href="/item/{{$item->id}}/edit" class="btn btn-success btn-sm" >Edit</a> 
                        <a href="/item/{{$item->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?') " >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/item/create" method="post">
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Brand</label>
                                    <input name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">EXP Date</label>
                                    <input name="expired_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Supplier</label>
                                    <input name="supplier" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Desc</label>
                                    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

@endsection
  
  

