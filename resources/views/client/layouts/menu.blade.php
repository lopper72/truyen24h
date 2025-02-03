<div class="searchPage">
    <div class="container">
        <form action="{{ route('search') }}">
            @livewire('client.search')
        </form>
    </div>
</div>
<div class="headerNav">
    <div class="container">
        <div class="navbarMenu">
            <div class="logoImage">
                <a href="{{ route('index') }}">truyenfullbo.com</a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('xu_huong')}}">Xu Hướng</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('truyen')}}">Truyện Mới</a></li>
                    </ul>
                </div>
            </nav>
            <div class="searchIconMobile">
                <a class="iconMenu" href="javascript:void(0)" onclick="showMenuMobile();"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <a href="javascript:void(0)" onclick="displaySearch();"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="loginUser">
        @if(Auth::check())
            Xin chào <a class="urlUser" href="">{{Auth::user()->name}}</a>
        @else
            <a class="iconLogin" href="">Đăng Nhập</a>
            <a class="iconLogin" href="">Đăng Ký</a>
        @endif
    </div>
</div>
<div id="menuMobile">
    <i class="fa-solid fa-xmark" onclick="hideMenuMobile();"></i>
    <div class="logoImage mb-4">
        <a href="{{ route('index') }}">truyenfullbo.com</a>
    </div>
    <ul>
        <li><a href="{{route('xu_huong')}}">Xu Hướng</a></li>
        <li><a href="{{route('truyen')}}">Truyện Mới</a></li>
    </ul>
</div>
<span id="scrollToTopBtn"><i class="fa-solid fa-arrow-up"></i></span>