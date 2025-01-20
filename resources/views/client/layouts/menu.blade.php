<div class="headerNav">
    <div class="container">
            <!-- Navigation -->
            <div class="navbarMenu">
                    <div class="logoImage">
                        @if ($system_info->logo)
                            <img src="{{ asset('storage/images/systems/' . $system_info->logo) }}"class="h-16 w-auto">
                        @else
                            <img src="{{ asset('library/images/image-not-found.jpg') }}" class="h-16 w-auto">
                        @endif
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light py-2">
                            <div class="collapse navbar-collapse" id="navbarContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="https://www.globe3.com/erp-software-about-us">Xu Hướng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://www.globe3.com/contact-us">Truyện Ngắn</a></li>
                                </ul>
                            </div>
                    </nav>
                    <div class="searchIconMobile">
                            <a class="itemMenu px-3" href="#" onclick="showMenuMobile(); return false;"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            <a href="javascript void(0);" data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
            </div>
    </div>
</div>