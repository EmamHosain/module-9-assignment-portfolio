@extends('app')

@section('headerSection')
@include('layouts.home')
@endsection

@section('contentSection')
    @include('layouts.about')
    @include('layouts.project')
    @include('layouts.contact')
@endsection

@section('footerSection')
    @include('components.footer')
@endsection