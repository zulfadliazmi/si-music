<head>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css" alt="[IMG]">         
</head>

<body>

    <main>
    	<header>
            <img src="<?php echo ASSET;?>images/music2.jpg" class="gambar">
        </header>

        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=artis_tampil">Artist</a>
                </li>
                <li>
                    <a href="index.php?page=album_tampil">Album</a>
                </li>
                <li>
                    <a href="index.php?page=playlist_tampil">Playlist</a>
                </li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    
        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else {
                    include "main_dashboard.php";
                }
            ?>
        </section>

    	<footer>
            Copyright &copy; 2021 Aldy Alfiansyah
        </footer>
    </main>

</body>