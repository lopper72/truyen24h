@extends('client.layouts.master')

@section('title', 'Chi tiết Truyện')

@section('content')
    <div class="itemDetail" style="background-image: url({{ asset('library/images/slide-banner.jpg') }});">
        <div class="container">
            <h3>Hoa Tàn Máu Lệ</h3>
            <div class="contentDetail">
                <div class="itemImageDetail">
                    <img src="{{ asset('library/images/product/truyen1.jpg') }}" alt="aa" class="object-fit-cover w-100 h-100">
                </div>
                <div class="itemContentDetail">
                    <p class="itemRateDetail">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </p>
                    <ul>
                        <li>
                            <span>Đánh giá</span>
                            <span>5/5</span>
                        </li>
                        <li>
                            <span>Phát hành</span>
                            <span>2024</span>
                        </li>
                        <li>
                            <span>Tình trạng</span>
                            <span>Đang ra</span>
                        </li>
                        <li>
                            <span>Tác giả</span>
                            <span>Min</span>
                        </li>
                        <li>
                            <span>Thể loại</span>
                            <span>abc</span>
                        </li>
                    </ul>
                    <div class="itemButtonDetail">
                        <a class="btnChap" href="">Chương đầu</a>
                        <a class="btnChap" href="">Chương cuối</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="titleIndex2">
                    <i class="fa-solid fa-star"></i><span>Giới thiệu truyện</span>
                </div>
                <div class="itemDesc mb-4">
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p>
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p>
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p>
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p>
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p>
                    <p>Khi  tìm thấy tiểu thư ở bãi tha ma cơ thể của nàng đã  nữ xuyên  chiếm đoạt</p> 
                </div>
                <div class="titleIndex2">
                    <i class="fa-solid fa-star"></i><span>Chương truyện</span>
                </div>
                <ul class="listChap mb-4">
                    <li>
                        <a href="">Chương 5</a>
                        <span class="iconNew">New</span>
                    </li>
                    <li>
                        <a href="">Chương 4</a>
                        <span>2/2/2025</span>
                    </li>
                    <li>
                        <a href="">Chương 3</a>
                        <span>21/1/2025</span>
                    </li>
                    <li>
                        <a href="">Chương 2</a>
                        <span>11/1/2025</span>
                    </li>
                </ul>
                <div class="titleIndex2">
                    <i class="fa-solid fa-star"></i><span>Bình luận</span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="hotItem">
                    <div class="titleIndex">Xu Hướng</div>
                    @for ($i = 0; $i < 4; $i++)
                            <div class="item py-3" @if ($i < 3) style="border-bottom: 1px solid #ebebeb;" @endif>
                                <div class="itemImage">
                                    <span>Full</span>
                                    <a href=""></a>
                                    <img src="{{ asset('library/images/product/truyen1.jpg') }}" alt="aa" class="object-fit-cover w-100 h-100">
                                </div>
                                <div class="itemContent">
                                    <h4 class="itemTitle"><a href="">Ánh Sáng Đời Em</a></h4>
                                    <p class="itemRate">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </p>
                                    <div class="itemChap mb-2">
                                        <a href="">Chương 2</a>
                                        <span class="iconNew">New</span>
                                    </div>
                                    <div class="itemChap">
                                        <a href="">Chương 2</a>
                                        <span>2/2/2025</span>
                                    </div>
                                </div>
                            </div>
                    @endfor
                    <a class="btnViewMore" href="{{route('xu_huong')}}">Xem tất cả</a>
                </div>
            </div>
        </div>
        
    </div>
@endsection