@extends('layout')
@section('title')
<title>Laravel Test</title>
@endsection

@section('contenttitle')
<h1 class="display-4">Welcome to the MC Motorcycle</h1>
<p class="lead">Pick one of the options below to make your appointment with our workshop</p>
@endsection
@section('content')
<div class="card-deck mb-3 text-center">
    <div class="card mb-6 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Appointments</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">Appointments</h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add your appointment</button>
        </div>
    </div>
    <div class="card mb-6 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Bikes</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">Bikes</h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Add you Bike</button>
        </div>
    </div>
</div>
@endsection
