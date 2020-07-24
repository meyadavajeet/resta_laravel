@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-success">
                    <div class="card-header">Add Restaurant</div>
                    <div class="card-body">
                        <form method="post" action="/add" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                               <textarea id="address" class="form-control" name="address"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>
@stop
