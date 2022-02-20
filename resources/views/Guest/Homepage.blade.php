@extends('Guest.layout')
@section('title','Platform to create customizable links to manage your portfolios and social connection | urProfile')
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