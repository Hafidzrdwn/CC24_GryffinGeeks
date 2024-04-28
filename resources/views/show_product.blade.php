@extends('layouts.app_dashboard')
@section('content')
    @php
        echo '<pre>' . print_r($product, true) . '</pre>';
    @endphp
@endsection
