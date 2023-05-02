<h1>dashboard</h1>
<p>name : <?= ucfirst($userInfo['name']); ?></p>
<p>email : <?= $userInfo['email']; ?></p>
<a href="<?= site_url('auth/logout') ?>">log out</a>
