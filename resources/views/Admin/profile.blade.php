@extends('Admin.Layout')
@section('title','Dashboard')
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

@endsection
@section("container")

    @if(isset($data)) 
   
<form method="post" action="/EProfile" enctype="multipart/form-data">
{{csrf_field()}}
<div class="row" style="padding-top:50px;">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

        <h2> PROFILE</h2>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
 
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> First Name</p>
            <input type="hidden" name="id" value="{{$data->id}}"/>
            <input type="text" value="{{$data->firstName}}" name="fname" class="form-control"/>
 
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Last Name</p>
            <input type="text"  value="{{$data->firstName}}" name="lname" class="form-control"/>
            <span style="color:red;">
                @error('lname')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Mobile</p>
            <input type="text"  value="{{$data->firstName}}" name="mobile" class="form-control"/>
            <span style="color:red;">
                @error('mobile')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <input type="submit" class="btn btn-success btn-block" value="Submit" />
        </div>
    </div>
</div>
</form>

    @else 

    <form method="post" action="/Profile" enctype="multipart/form-data">
    {{csrf_field()}} 
    <div class="row" style="padding-top:50px;">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

        <h2> PROFILE</h2>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
 
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> First Name</p>
            <input type="text" name="fname" class="form-control"/>
 
            <span style="color:red;">
                @error('mytextarea')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Last Name</p>
            <input type="text"  name="lname" class="form-control"/>
            <span style="color:red;">
                @error('lname')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <p> Mobile</p>
            <input type="text"  name="mobile" class="form-control"/>
            <span style="color:red;">
                @error('mobile')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <input type="submit" class="btn btn-success btn-block" value="Submit" />
        </div>
    </div>
</div>
</form>

    @endif
    

@endsection

@section('footercontainer')
 
@endsection