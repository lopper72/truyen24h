@extends('client.layouts.master')

@section('title', 'Chi tiết Truyện')

@section('content')
    @livewire('client.product-detail', ['id' => $product->id])
@endsection