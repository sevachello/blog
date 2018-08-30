@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Categories 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Posts 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Visited 0</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>
                        <span class="label label-primary">Visited today 0</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">
                    Add category
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="list-group-item">
                    <h4>First category</h4>
                    <p>Amount posts of category</p>
                </a>
            </div>
        </div>
    </div>
@endsection