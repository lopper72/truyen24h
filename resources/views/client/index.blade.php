@extends('client.layouts.master')

@section('title', 'Trang chủ')

@section('content')
    <div class="slidePage" style="background-image: url({{ asset('library/images/slide-banner.jpg') }});">
        <div class="container">
            <div class="slideContent">
                <div class="titleIndex">Truyện đề cử</div>
                <div class="mySlide">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="itemSlide">
                            <div class="item">
                                <div class="itemImage">
                                    <span>Full</span>
                                    <a href=""></a>
                                    <img src="{{ asset('library/images/product/truyen1.jpg') }}" alt="aa" class="object-fit-cover w-100 h-100">
                                </div>
                                <div class="itemContent">
                                    <h4 class="itemTitle"><a href="">Ánh Sáng Đời Em</a></h4>
                                    <p class="itemDate">12/1/2025</p>
                                    <div class="itemChap mb-2">
                                        <a href="">Chương 2</a>
                                    </div>
                                    <div class="itemChap mb-2">
                                        <a href="">Chương 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="indexPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mb-4 mb-lg-0">
                    <div class="titleIndex2"><i class="fa-solid fa-star"></i><span>Mới cập nhật</span></div>
                    <div class="row">
                        @for ($i = 0; $i < 12; $i++)
                            <div class="col-12 col-md-6">
                                <div class="item py-3 borderItem" style="border-bottom: 1px solid #ebebeb;">
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
                            </div>
                        @endfor
                    </div>
                    <div class="text-center mt-3">
                        <a class="btnViewMore2" href="{{route('truyen_moi')}}">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="hotItem mb-4">
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
                    <div class="hotItem">
                        <div class="titleIndex">Thể loại</div>
                        <div class="categoryItem">
                            @for ($i = 0; $i < 12; $i++)
                                <a href="">Kiếm hiệp</a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection