<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <img src="{{asset('admin-layout/img/user.png')}}" class="profile-thumb" alt="User Thumb">
            <h6 class="profile-name">Administrator</h6>
            <ul class="profile-actions">
                <li>
                    <a href="#">
                        <i class="icon-social-skype"></i>
                        <span class="count-label red"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        <i class="icon-export"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        @include('admin.nav')
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>