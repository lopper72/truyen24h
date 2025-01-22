@extends('client.layouts.master')

@section('title', 'Tên bài viết - chương mấy')

@section('content')
    <div class="container">
        <h3 class="chapTitle">Tên bài viết - chương mấy</h3>
        <div class="breadcrumbChap">
            <a href="">Trang chủ</a> / <a href="">Tất cả truyện</a> / <a href="">Tên truyện</a> / <span>chương</span>
        </div>
        <div class="btnChapContent">
            <select class="form-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="itemButtonDetail">
                <a class="btnChap" href="">Chương sau</a>
                <a class="btnChap" href="">Chương cuối</a>
            </div>
        </div>
        <div class="chapContent"></div>
    </div>
@endsection