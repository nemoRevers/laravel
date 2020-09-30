@extends('Layouts.app')

@section('link')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('title','home')

@section('body')
    <header>
        @include('inc.navbar')
        <div class="container">
            <h1>Order</h1>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('inc.aside')
            </div>
            <div class="col-8">
                <div class="orders">
                    <div class="order">
                        @include('inc.order')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
