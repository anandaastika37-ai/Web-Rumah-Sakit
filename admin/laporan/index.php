<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Laporan</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Navbar area -->
     <div class="mainContainer">
     <nav class="navbarContainer">
        <div class="top-side">
            <div class="logo">
                <h3>Admin Dashboard</h3>
            </div>
            <div class="navbar">
                <ul>
                    <li class="Btn-Master-Data btn-list">
                        <span>Master Data</span>
                        <ul class="master-data navList">
                            <li><a href="../pasien/index.php">Pasien<i class="fa-solid fa-bed"></i></a></li>
                            <li><a href="../poliKlinik/index.php">Poli Klinik<i class="fa-solid fa-house-medical"></i></a></li>
                            <li><a href="../dokter/index.php">Dokter<i class="fa-solid fa-user-doctor"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-transaksi btn-list">
                        <span>Pendaftaran</span>
                        <ul class="transaksi navList">
                            <li><a href="../transaksi/index.php">Pendaftaran<i class="fa-solid fa-clipboard-list"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-laporan btn-list">
                        <span>Laporan</span>
                        <ul class="laporan navList">
                            <li><a href="#pasien">Laporan Pasien<i class="fa-solid fa-file-lines"></i></a></li>
                            <li><a href="#pengunjung">Laporan Kunjungan<i class="fa-solid fa-id-card-clip"></i></a></li>
                        </ul>
                    </li>
                    <li class="Btn-pengaturan btn-list">
                        <span>Beranda</span>
                        <ul class="pengaturan navList">
                            <li><a href="../home/home.php">Profil Rumah Sakit<i class="fa-solid fa-hospital"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-side">
            <div class="btn-sistem">
                <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
            <div class="profile-admin">
                <img src="" alt="">
                <span>Admin 3</span>
            </div>
        </div>
     </nav>
    <!-- navbar end -->
    <!-- content area -->
     <div class="contentContainer">
        <div class="laporan-pasien" id="pasien">
            <div class="laporan-pasien-deskripsi">
                <div class="box-analisa jmlh-laporan-pasien">
                    <h3>Jumlah Laporan Pasien :</h3>
                    <span>30 laporan</span>
                </div>
                <div class="box-analisa">
                    <h3>Jumlah Like Dan Dislike</h3>
                    <div class="jumlh-like-dislike">
                        <Span><i class="fa-regular fa-thumbs-up"></i>12</Span>
                        <Span><i class="fa-regular fa-thumbs-down"></i>10</Span>
                    </div>
                </div>
            </div>
            <div class="laporan-pasien-container">
                <h2>Laporan Pasien...</h2>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pasien</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pasien</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut vitae aut odit quam similique fugit eos nisi porro, eius assumenda nulla voluptates modi possimus ducimus repellendus maxime nam cupiditate!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pasien</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut vitae aut odit quam similique fugit eos nisi porro, eius assumenda nulla voluptates modi possimus ducimus repellendus maxime nam cupiditate!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="laporan-pengunjung" id="pengunjung">
            <div class="box-laporan-pengunjung laporan-pengunjung-deskripsi">
                <div class="box-analisa-pengunjung jmlh-laporan-pasien">
                    <h3>Jumlah Laporan pengunjung :</h3>
                    <span>30 laporan</span>
                </div>
                <div class="box-analisa-pengunjung">
                    <h3>Jumlah Like Dan Dislike</h3>
                    <div class="jumlh-like-dislike">
                        <Span><i class="fa-regular fa-thumbs-up"></i>12</Span>
                        <Span><i class="fa-regular fa-thumbs-down"></i>10</Span>
                    </div>
                </div>
            </div>
            <div class="laporan-pengunjung-container">
            <h2>Laporan pengunjung...</h2>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pengunjung</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pengunjung</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut vitae aut odit quam similique fugit eos nisi porro, eius assumenda nulla voluptates modi possimus ducimus repellendus maxime nam cupiditate!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
                <div class="isi-laporan-pasien">
                    <h3>@Nama pengunjung</h3>
                    <span>3 hari lalu</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, voluptatum minima laboriosam assumenda exercitationem nobis alias! Dolores obcaecati qui quod, ratione sapiente rem explicabo perferendis iste dolorem ipsa ducimus quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut vitae aut odit quam similique fugit eos nisi porro, eius assumenda nulla voluptates modi possimus ducimus repellendus maxime nam cupiditate!</p>
                    <div class="btn-interaktif">
                        <button><i class="fa-regular fa-thumbs-up"></i></button>
                        <button><i class="fa-regular fa-thumbs-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- content end -->
    </div>
    <script src="script.js"></script>
</body>
</html>