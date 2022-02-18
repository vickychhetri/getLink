@extends('template.customePage')
@section('title','Page not Found')
@section('metaContainer')
<!-- Primary Meta Tags -->
<meta name="title" content="Page Not Found">
<meta name="description" content="Page not found">
 
@endsection

@section('container')
<div class="container-fluid" style="margin-top:-5%;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
             <center> <h2>  Page not found !</h2> </center>
        </div>
    </div>
</div>
@endsection

@section('footerScript')

@if(isset($headers[0])) 
{!!$headers[0]->footerScript!!}
@endif

@endsection