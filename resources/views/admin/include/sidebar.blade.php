<div class="sidebar close">
    <ul class="nav-links">
        <li>
            <div class="iocn-link">
                <a href="{{ route('admin.dashboard') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="{{ route('adminstrator.index') }}">
                    <i class='bx bx-windows'></i>
                    <span class="link_name">Set Up</span>
                </a>

                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                @hasrole('superadmin')
                    <li><a href="{{ route('adminstrator.index') }}">Adminstrator</a></li>
                    <hr>
                @endhasrole
                <li><a href="{{ route('agent.index') }}">Agent</a></li>
                <hr>
                <li><a href="{{ route('client.index') }}">Client</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ route('number.index') }}">
                <i class='bx bx-phone'></i>
                <span class="link_name">Number</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{ route('number.index') }}">Number</a></li>
            </ul>
        </li>

        <hr style="margin: 50px 0;">
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bx-share'></i>
                    <span class="link_name">Clients</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Star Tech</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Star Tech</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Star Tech</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Star Tech</a></li>


            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="client.html">
                    <i class='bx bx-share-alt'></i>
                    <span class="link_name">Clients</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Alika Mayer</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Alika Mayer</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Alika Mayer</a></li>
                <hr>
                <li style="display: flex;"><a href="#" style="padding: 4px 22px;"><img
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                            class="shadow-1-strong rounded-circle" alt="avatar 1"
                            style="width: 30px; margin-right: 20px; height: auto;">Alika Mayer</a></li>


            </ul>
        </li>



    </ul>
</div>
