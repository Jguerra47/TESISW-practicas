@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title text-center">
                Product created
            </h5>
            <div class="card-text">
                Name: {{ $viewData['product']['name'] }}
            </div>
            <div class="card-text">
                Price: {{ $viewData['product']['price'] }}
            </div>
        </div>
    </div>
@endsection