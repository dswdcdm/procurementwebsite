<header>

<div class="menu shadow position-fixed  w-100 sticky-top">
    <ul>
        <li class="logo">
            <a href="/pages">
                <img src="<?php echo base_url('assets/images/logob.png'); ?>" width="100%" height="100%" alt="logo" />
            </a>
        </li>
        <li class="menu-toggle">
            <button onclick="toggleMenu();">&#9776;</button>
        </li>
        <li class="menu-item hidden"><a href="<?= site_url('/pages') ?>">HOME</a></li>
        <li class="menu-item hidden"><a href="<?= site_url('/Product') ?>">PRODUCTS</a>
        </li>
        <li class="menu-item hidden"><a href="https://gsets.dswd.gov.ph/users/login" target="_blank">GSETS</a>
        </li>
        <!-- <li class="menu-item hidden"><a href="/pages/profile">PROFILE</a></li> -->
        <li class="menu-item hidden"><a href="/pages/directory">DIRECTORY</a></li>
        <li class="menu-item hidden">
        
        </li>
        <li class="menu-item hidden">
       
<a class="img-fluid" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<img src="<?= $userInfo['image']; ?>" class="rounded-circle img-thumbnail" width="30px" height="40px" alt="profile">
</a>

<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/pages/profile">Profile</a></li>
<li><a class="dropdown-item" href="#">Cart</a></li>
<li><a class="dropdown-item" href="#">History</a></li>
<li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Log out</a></li>
</ul>

        </li>
    </ul>
</div>

</header>