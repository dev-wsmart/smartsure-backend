<b class="screen-overlay"></b>
<div class="col-2" id="sidenav">
    <nav class="nav flex-column" id="accordion">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="100%">
        </div>
        <a class="nav-link" href="#">ข้อความจากลูกค้า</a>
        <a class="nav-link {{ (request()->segment(1) == 'banner') ? 'active' : '' }}" href="{{ route('banner.index') }}">Banner</a>
        <a class="nav-link" id="head-home" data-toggle="collapse" data-target="#menu-home" aria-expanded="true" aria-controls="menu-home">หน้าหลัก</a>
            <div id="menu-home" class="collapse" aria-labelledby="head-home" data-parent="#accordion">
                <a class="nav-link sub-link {{ (request()->segment(2) == 'content1') ? 'active' : '' }}" href="{{ route('content1.index') }}">ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE</a>
                <a class="nav-link sub-link {{ (request()->segment(2) == 'content2') ? 'active' : '' }}" href="{{ route('content2.index') }}">ชีวิตดี๊ดีเมื่อมี SMART SURE</a>
            </div>
        <a class="nav-link {{ (request()->segment(1) == 'about-us') ? 'active' : '' }}" href="{{ route('about-us.index') }}">เกี่ยวกับเรา</a>
        <a class="nav-link" href="#">ผลิตภัณฑ์</a>
        <a class="nav-link" href="#">โปรโมชั่น</a>
        <a class="nav-link" href="#">ข่าวสารและกิจกรรม</a>
        <a class="nav-link {{ (request()->segment(1) == 'contact-us') ? 'active' : '' }}" href="{{ route('contact-us.index') }}">ติดต่อเรา</a>
        <a class="btn btn-logout" href="#">ออกจากระบบ</a>
    </nav>
</div>

<!-- {{ (request()->segment(1) == 'home') ? 'active' : '' }} -->