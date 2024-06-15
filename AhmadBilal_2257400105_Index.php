<style>
    #menu {
        margin: 0;
        padding: 0;
    }
    #menu a{
        text-decoration: none;
    }
    #menu li{
        display: inline-block;
        border: 1px solid gray;
        padding: 8px;
    }
    #menu li:hover {
        bacground-color: gray;
    }
</style>
    <ul id="menu">
        <li><a href="?page=home">Beranda</a></li>
        <li><a href="?page=login">Login</a></li>
        <li><a href="?page=loop">Loop</a></li>
        <li><a href="?page=profil">Profil</a></li>
    </ul>

    <?php
    if (!isset($_GET['page']) || $_GET['page'] === 'home') {
        echo "<h3>Selamat datang di halaman Beranda!</h3>";
    } elseif ($_GET['page'] === 'login') {
        include 'AhmadBilal_2257401005_Login.php';
    } elseif ($_GET['page'] === 'loop') { 
        include 'AhmadBilal_2257401005_Loop.php';
    } elseif ($_GET['page'] === 'profil') {
        include 'AhmadBilal_2257400105_Profil.php';
    }
    ?>