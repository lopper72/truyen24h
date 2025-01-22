@extends('client.layouts.master')

@section('title', 'Xu Hướng')

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
    <div class="container mt-4">
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-12 col-md-6 col-lg-4">
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
    </div>
@endsection