<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="/pages">
                    <img src="<?php echo base_url('assets/images/dswdlogo.png'); ?>" width="100%" height="100%" alt="logo" />
                </a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/admin">HOME</a></li>
            <li class="menu-item hidden"><a href="<?= site_url('/admin/adminproduct')  ?>">PRODUCTS</a>
            </li>
           
            <li class="menu-item hidden"><a href="<?= site_url('auth/logout') ?>">LOG OUT</a>
            </li>
        </ul>
    </div>
</header>