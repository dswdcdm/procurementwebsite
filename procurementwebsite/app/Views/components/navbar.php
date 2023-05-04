    <header >

        <div class="menu shadow position-fixed  w-100 sticky-top">
            <ul >
                <li class="logo">
                    <a href="/pages">
                        <img src="<?php echo base_url('assets/images/logob.png'); ?>" width="100%" height="100%" alt="logo" />
                    </a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li  class="menu-item hidden"><a href="/pages">HOME</a></li>
                <li class="menu-item hidden"><a href="/Product">PRODUCTS</a>
                </li>
                <li class="menu-item hidden"><a href="https://gsets.dswd.gov.ph/users/login" target="_blank">GSETS</a>
                </li>
                <li class="menu-item hidden"><a href="/pages/profile">PROFILE</a></li>
                <li class="menu-item hidden"><a href="/pages/directory">DIRECTORY</a></li>
                <li class="menu-item hidden"><a href="<?= site_url('auth/logout') ?>">LOG OUT</a>
                </li>
            </ul>
        </div>
       
    </header>