<div class="searchPage">
    <div class="container">
        <form action="{{ route('spotlight.search') }}">
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
                        <li class="nav-item"><a class="nav-link" href="">Xu Hướng</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Truyện Mới</a></li>
                    </ul>
                </div>
            </nav>
            <div class="searchIconMobile">
                <a class="itemMenu" href="#" onclick="showMenuMobile();"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <a href="#" onclick="displaySearch();"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="loginUser">
        <a href="{{ route('login') }}">Đăng Nhập</a>
        <a href="">Đăng Ký</a>
    </div>
</div>
<div id="menuMobile">
    <i class="fa-solid fa-xmark" onclick="hideMenuMobile();"></i>
    <div class="logoImage mb-4">
        <a href="{{ route('index') }}">truyenfullbo.com</a>
    </div>
    <ul>
        <li><a href="">Xu Hướng</a></li>
        <li><a href="">Truyện Mới</a></li>
    </ul>
</div>