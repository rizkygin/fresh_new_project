@extends('layouts.app')

@section('header')
<h5>
    Add Role
</h5>
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form action="/developer/store" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" placeholder="Role Name">
            </div>
            <div class="form-group">
                <label for="features">Feature</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                        <span class="input-group-checkbox">
                            @foreach ($features as $feature)
                            <input type="checkbox" name="{{$feature->id}}"> <label> {{$feature->name}}</label><br>
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success" style="float: right">Submit</button>
        </div>
    </form>
</div>
@endsection