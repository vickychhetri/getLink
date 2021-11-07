@extends('Guest.layout')
@section('title','Officially GetLink.Page Website')
@section('metaheadercontainer')
@endsection

@section('container')
<!-- MENU -->
<x-User.Header.Menu />

<!-- ABOUT -->
<x-User.Content.About />

<!-- Template -->
<x-User.Content.Template />

@endsection