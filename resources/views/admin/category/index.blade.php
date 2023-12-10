@extends('layouts.master')

@section('title', 'Category Index')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Category Index</h1>
    @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
    @endif

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        
    </div>
</div>
@endsection