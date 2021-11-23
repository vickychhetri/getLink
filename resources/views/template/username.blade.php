@extends('template.customePage')
@section('title',$pageData[0]->title)
@section('metaContainer')
<!-- Primary Meta Tags -->
<meta name="title" content="{{$pageData[0]->title}}">
<meta name="description" content="{{$pageData[0]->description}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://getlink.page/{{$pageData[0]->userName}}">
<meta property="og:title" content="{{$pageData[0]->title}}">
<meta property="og:description" content="{{$pageData[0]->description}}">
<meta property="og:image" content="https://getlink.page/UserThumbImages/{{$pageData[0]->thumbnail}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://getlink.page/vickychhetri">
<meta property="twitter:title" content="{{$pageData[0]->title}}">
<meta property="twitter:description" content="{{$pageData[0]->description}}">
<meta property="twitter:image" content="https://getlink.page/UserThumbImages/{{$pageData[0]->thumbnail}}">

<meta name="keywords" content="{{$pageData[0]->keywords}}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="{{$pageData[0]->firstName}} {{$pageData[0]->lastName}}">
<meta name="og:phone_number" content="{{$pageData[0]->mobile}}"/>
@if(isset($headers))
{{$headers}} 
{!! html_entity_decode($headers->headerScript) !!}
@endif
@endsection

@section('container')
<div class="container-fluid" style="margin-top:-5%;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            {!! html_entity_decode($pageData[0]->content) !!}
        </div>
    </div>
</div>
@endsection
@section('footerScript')
@if(isset($headers)) 
{!! html_entity_decode($headers->footerScript) !!}
@endif
@endsection