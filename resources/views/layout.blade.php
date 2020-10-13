<!DOCTYPE HTML>
<html>
<head>
    @include('includes.default.head')
</head>

<body>
<div class="cbc">
    <div class="main">
        @include('includes.default.header')
        <div class="center_box cb">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <div class="uo_tabs cf">
                <a href="#"><span>profile</a>
                <a href="#"><span>Reviews</span></a>
                <a href="#"><span>orders</span></a>
                <a href="#" class="active"><span>My Address</span></a>
                <a href="#"><span>Settings</span></a>
            </div>
                <div class="page_content bg_gray">
                    @include('includes.profile')
                    <div class="uo_body">
                        <div class="wrapper">
                            <div class="uofb cf">
                                @include('includes.add_address')
                                @include('includes.show_address')
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        @include('includes.default.footer')
    </div>
</body>

</html>
