@extends('client.layouts.master')

@section('title', 'Truyện')

@section('content')
    <div class="container">
        <div class="orderPage">
            <div class="titleIndex2">
                <i class="fa-solid fa-star"></i><span>Tất cả truyện</span>
            </div>
            <ul>
                <li>
                    <a href="">A-Z</a>
                </li>
                <li>
                    <a href="">Z-A</a>
                </li>
                <li>
                    <a href="">Xu Hướng</a>
                </li>
                <li>
                    <a href="">Xem Nhiều</a>
                </li>
            </ul>
        </div>
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