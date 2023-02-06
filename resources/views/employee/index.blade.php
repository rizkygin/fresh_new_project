@extends('layouts.app') @section('header')

<div class="col-md-4" stayle="width=50%">
    <div class="card card-widget widget-user" >
        <div class="widget-user-header bg-info" >
            <h3 class="widget-user-username">Alexander Pierce</h3>
            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
        </div>
        <div class="widget-user-image">
            <img
                class="img-circle elevation-2"
                src="../dist/img/user1-128x128.jpg"
                alt="User Avatar"
            />
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
                        <h5 class="description-header">0857535443533</h5>
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

    @endsection @section('content') @endsection
</div>
