@extends('frontend.layout.masterlayout')

@section('title', 'Medical Shop - Hospital Management')

@section('styles')
<style>
    .shop-container {
        padding: 60px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    .shop-title {
        text-align: center;
        margin-bottom: 40px;
    }
</style>
@endsection

@section('content')
    @include('frontend.partials.header')
    
    <div class="shop-container">
        <h1 class="shop-title">Medical Products Shop</h1>
        <p>Coming soon - Our online medical shop will be available shortly.</p>
    </div>

    @include('frontend.partials.footer')
@endsection
