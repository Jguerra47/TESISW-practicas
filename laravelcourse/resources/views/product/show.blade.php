@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['product']['name'] }}
                    </h5>

                    <p  @if ($viewData['product']['price'] > 100)
                            class="card-text text-danger"
                        @else
                            class="card-text"
                        @endif
                    >
                        ${{ $viewData['product']['price'] }}
                    </p>
            </div>
        </div>
    </div>
@endsection