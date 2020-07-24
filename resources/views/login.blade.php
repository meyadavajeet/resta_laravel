@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::get('success_msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success !!!</strong> {{Session::get('success_msg')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card card-success">
                    <div class="card-header">
                        User Login
                        <a class="btn btn-warning float-right btn-sm" href="/register">  Register Here....</a>
                    </div>

                    <div class="card-body">
                        <form method="post" action="/login" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" />
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
