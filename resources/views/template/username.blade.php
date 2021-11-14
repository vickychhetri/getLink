@extends('template.customePage')
@section('title','username')
@section('metaheadercontainer')
@endsection

@section('container')
<div class="container-fluid" style="margin-top:-2%">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            {!! html_entity_decode($pageData[0]->content) !!}
        </div>
    </div>
</div>

@endsection