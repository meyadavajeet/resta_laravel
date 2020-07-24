@extends('layout')
@section('content')
    {{--{{print_r($data)}}--}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
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
                <div class=" card card-primary">
                    <div class="card-header">List of all restaurants</div>
                    <div class=" table table-responsive">
                        <table class="table" id="example">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">
                                    name
                                </th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">
                                    name
                                </th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->Email}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>Edit | Delete</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
