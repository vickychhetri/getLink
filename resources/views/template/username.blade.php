@extends('template.customePage')
@section('title','username')
@section('metaheadercontainer')
@endsection

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            {{$pageData->content}}
        </div>
    </div>
</div>

@endsection