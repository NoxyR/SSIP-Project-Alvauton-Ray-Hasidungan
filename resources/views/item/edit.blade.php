@extends('layouts.app')

@section('content')
        @if(session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            <h1>Edit Item Data </h1>
        <div class="col-lg-12">
        <form action="/item/{{$item->id}}/update" method="post">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Brand</label>
                                        <input name="brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->brand}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">EXP Date</label>
                                        <input name="expired_date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YYYY-MM-DD" value="{{$item->expired_date}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Supplier</label>
                                        <input name="supplier" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->supplier}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Desc</label>
                                        <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->description}}">
                                    </div>
            
                                        <button type="submit" class="btn btn-success">Edit</button>
                
         </form>
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
                            
                        </div>
                        </div>
                    </div>
                </div>


@endsection