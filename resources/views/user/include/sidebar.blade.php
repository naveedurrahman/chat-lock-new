<nav class="sidebar-2">
    <div class="menu_content">
        <ul class="menu_items">



            <li class="item">
                <a href="{{ route('user.dashboard') }}" class="nav_link">
                    <span class="navlink_icon">
                        <i class='bx bxs-dashboard'></i> </span>
                    <span class="navlink">Dashboard</span>
                </a>
            </li>
            <li class="item">
                <a href="{{ route('user.index') }}" class="nav_link">
                    <span class="navlink_icon">
                        <i class='bx bx-message-dots'></i>
                    </span>
                    <span class="navlink">Chat</span>
                </a>
            </li>
            <li class="item">
                <a href="#" class="nav_link">
                    <span class="navlink_icon">
                        <i class='bx bx-phone'></i>
                    </span>
                    <span class="navlink">Contact</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="menu_items">

            <li class="item">
                <div href="#" class="nav_link submenu_item">
                    <span class="navlink_icon">
                    </span>
                    <span class="navlink">Number</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>

                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul>
            </li>

            <!-- end -->
        </ul>
        <hr>

        <ul class="menu_items" style="flex: 1;">

            <li class="item">
                <div href="#" class="nav_link submenu_item">
                    <span class="navlink_icon">
                    </span>
                    <span class="navlink">Number</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>

                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                    <a href="#" class="nav_link sublink">Nav Sub Link</a>
                </ul>
            </li>

            <!-- end -->
        </ul>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
            <div class="bottom expand_sidebar">
                <span> Expand</span>
                <i class='bx bx-log-in'></i>
            </div>
            <div class="bottom collapse_sidebar">
                <span> Collapse</span>
                <i class='bx bx-log-out'></i>
            </div>
        </div>
    </div>
</nav>
