@extends('dashboard.master')
@section('title', 'dashboard')
@section('wrapper')
    @include('dashboard.wrapper')
@endsection
@section('nav')
    @include('dashboard.nav')
@endsection
@section('mainatas')
    @include('dashboard.mainatas')
@endsection
@section('content')
    @include('dashboard.dashboard')
@endsection