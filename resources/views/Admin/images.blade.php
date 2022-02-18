@extends('Admin.Layout')
@section('title','Dashboard')
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

@endsection
@section("container")
@foreach($IMAGES as $photo)
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="/{{$photo->images}}" style="max-width:100%;max-height:100%;"/>

        </div>
    </div>
</div>
@endforeach
  
@endsection

@section('footercontainer')
 
@endsection