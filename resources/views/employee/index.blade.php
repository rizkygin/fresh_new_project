@extends('layouts.app') @section('header')
<style>
    img {
        width: 250px;
        height: 150px;
    }
    .pr{
        width: 100px;
        height: 300px;
        border-radius: 100%;
    }
    .col-md-4{
        width: 100px;
    }
   
</style>
<div class="col-md-4" >
    <div class="card card-widget widget-user" >
        <div class="widget-user-header bg-info" >
            <h3 class="widget-user-username">Alexander Pierce.Sos.</h3>
            <h5 class="widget-user-desc">Direktur</h5>
        </div>
        <div class="widget-user-image">
        <img class="pr" src="{{asset('profile/pexels-ian-turnell-709552.jpg')}}">
        </div>
        <div class="card-footer" >
            <div class="row">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">gjff@dfu</h5>
                        <span class="description-text">email</span>
                        <div>
                            <a class="btn btn-app bg-danger"style="color:FF4A4A">
                                <span class="badge bg-teal"></span>
                                <i class="fas fa-trash"></i> Delet
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">bekerja</h5>
                        <span class="description-text">status</span>
                        <div>
                        <a href={{route("document")}} class="btn btn-app bg-warning">
                            <span class="badge bg-info "></span>
                                <i class="fas fa-file"></i>Document
                        </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">085753078681</h5>
                        <span class="description-text">Number</span>
                        <div>
                            <a class="btn btn-app bg-success">
                                <i class="fas fa-edit "></i> Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection @section('content') @endsection
