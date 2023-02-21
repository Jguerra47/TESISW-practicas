@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $author }}</p>
            </div>

            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $contactNumber }}</p>
            </div>

            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $email }}</p>
            </div>

            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $address }}</p>
            </div>
        </div>
    </div>
@endsection
