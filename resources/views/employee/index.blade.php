@extends('layouts.app')

@section('header')

<div class="col-md-4" s>


<div class="card card-widget widget-user" >

<div class="widget-user-header bg-info">
    
<h3 class="widget-user-username">Alexander Pierce</h3>
<h5 class="widget-user-desc">Founder &amp; CEO</h5>
</div>
<div class="widget-user-image">
<img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
</div>
<div class="card-footer">
<div class="row">
<div class="col-sm-4 border-right">
<div class="description-block">
<h5 class="description-header">gjff@dfu</h5>
<span class="description-text">email</span>
<div>
<td>
<button type="button" class="btn btn-block btn-danger btn-sm">Delet</button>
</td>
</div>
</div>

</div>

<div class="col-sm-4 border-right">
<div class="description-block">
<h5 class="description-header">bekerja</h5>
<span class="description-text">status</span>
<div>
<a class="btn btn-app">
<span class="badge bg-info"></span>
<i class="fas fa-file"></i> document
</a>
</div>
</div>

</div>

<div class="col-sm-4">
<div class="description-block">
<h5 class="description-header">085753544353543</h5>
<span class="description-text">Number</span>
<div><a class="btn btn-app">
<i class="fas fa-edit"></i> Edit
</a>
</div>

</div>

</div>

</div>
</div>

</div>


@endsection

@section('content')

@endsection

