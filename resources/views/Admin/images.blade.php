@extends('Admin.Layout')
@section('title','Dashboard')
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/0nj8pmqfaosicobgrfr3hxgklq00xrjmm5awxk07vguu1qf5/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

@endsection
@section("container")
<div class="container">
    <div class="row">
        @foreach($IMAGES as $photo)

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="/storage/{{$photo->images}}" style="max-width:100%;max-height:100%; height:250px;width:250px;" />
            <a href="#" class="btn btn-danger"> Delete </a>
        </div>

        @endforeach
    </div>
</div>
@endsection

@section('footercontainer')

@endsection