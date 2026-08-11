
<?php
// ====================
// THÔNG TIN CÁ NHÂN
// ====================
$hoTen = "Vũ Mai Phương";
$nganhHoc = "Công nghệ thông tin";
$truong = "Trường Đại học Thủ Đô Hà Nội";
$email = "vumaiphuong2006@gmail.com";

// Thông tin cá nhân thêm
$baiHatYeuThich = [
    "Anh chỉ muốn",
    "Nhắc nhở",
    "Thằng điên",
    "Đáng lẽ ra",
    "She neva knows"
];

$soThich = "Ngủ, chơi game, đi chơi, nghe nhạc, xem phim";

// Ước mơ
$uocMo = "Tốt nghiệp ngành CNTT loại giỏi, ra trường có thể tìm được cho mình một công việc ổn định, phát triển tốt trong lĩnh vực Công nghệ thông tin và có thể tự mình xây dựng những sản phẩm hữu ích. Được đi tham quan đi du lịch thật nhiều nơi cùng gia đình và bạn bè. Có được một cuộc sống hạnh phúc sau này";

// ====================
// THÔNG TIN GITHUB
// ====================
$githubCaNhan = "https://github.com/vumaiphuong224001823/laptrinhwweb";
$githubNhom = "https://github.com/HBinSD/QLyCLB";
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trang cá nhân - <?php echo $hoTen; ?></title>

    <style>
        /* ====================
           CÀI ĐẶT CHUNG
        ==================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fde2e4, #f9d5d5);
            color: #333;
            line-height: 1.6;
        }


        /* ====================
           MENU
        ==================== */

        .menu {
            background-color: #d63384;
            padding: 18px;
            text-align: center;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
        }

        .menu a:hover {
            text-decoration: underline;
        }


        /* ====================
           PHẦN GIỚI THIỆU
        ==================== */

        .welcome {
            width: 80%;
            margin: 30px auto;
            padding: 30px;

            background-color: white;

            border-radius: 15px;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);

            display: flex;
            align-items: center;

            gap: 25px;
        }


        /* Ảnh đại diện */

        .avatar {
            width: 140px;
            height: 140px;

            border-radius: 50%;

            object-fit: cover;

            border: 5px solid #d63384;

            flex-shrink: 0;
        }

        .welcome h1 {
            color: #d63384;
            margin-bottom: 5px;
        }

        .welcome h2 {
            color: #555;
            margin-bottom: 8px;
        }


        /* ====================
           NỘI DUNG
        ==================== */

        .container {
            width: 80%;

            margin: 20px auto;

            padding: 25px;

            background-color: white;

            border-radius: 15px;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .container h2 {
            color: #d63384;

            margin-bottom: 15px;
        }

        .container p {
            margin-bottom: 8px;
        }


        /* ====================
           THÔNG TIN CÁ NHÂN
        ==================== */

        .info-box {
            background-color: #fff5f7;

            padding: 20px;

            border-left: 5px solid #d63384;

            border-radius: 8px;
        }

        .info-box p {
            margin-bottom: 10px;
        }


        /* ====================
           SỞ THÍCH
        ==================== */

        .hobby-list {
            list-style: none;

            display: flex;

            flex-wrap: wrap;

            gap: 12px;

            margin-top: 15px;
        }

        .hobby-list li {
            background-color: #fff5f7;

            border: 2px solid #d63384;

            color: #d63384;

            padding: 8px 15px;

            border-radius: 20px;

            font-weight: bold;
        }


        /* ====================
           BÀI HÁT YÊU THÍCH
        ==================== */

        .music-box {
            padding: 20px;

            background-color: #fff5f7;

            border-left: 5px solid #d63384;

            border-radius: 8px;
        }

        .music-box h3 {
            color: #d63384;

            margin-bottom: 8px;
        }

        .music-list {
            margin-left: 25px;
        }

        .music-list li {
            margin-bottom: 8px;
        }


        /* ====================
           ƯỚC MƠ
        ==================== */

        .dream-box {
            padding: 20px;

            background-color: #fff5f7;

            border-left: 5px solid #d63384;

            border-radius: 8px;
        }

        .dream-box p {
            line-height: 1.8;
        }


        /* ====================
           PROJECT
        ==================== */

        .project {
            padding: 20px;

            border-left: 5px solid #d63384;

            background-color: #fff5f7;

            border-radius: 8px;
        }

        .project h3 {
            color: #d63384;

            margin-bottom: 10px;
        }

        .project ul {
            margin-left: 25px;
        }


        /* ====================
           GITHUB
        ==================== */

        .github-btn {
            display: inline-block;

            margin: 5px 0 15px;

            padding: 10px 18px;

            background-color: #d63384;

            color: white;

            text-decoration: none;

            border-radius: 6px;

            font-weight: bold;
        }

        .github-btn:hover {
            background-color: #b0266c;
        }


        /* ====================
           FOOTER
        ==================== */

        footer {
            margin-top: 30px;

            padding: 20px;

            background-color: #d63384;

            color: white;

            text-align: center;
        }


        /* ====================
           ĐIỆN THOẠI
        ==================== */

        @media (max-width: 600px) {

            .welcome,
            .container {
                width: 90%;
            }

            .welcome {
                flex-direction: column;
                text-align: center;
            }

            .menu a {
                display: inline-block;
                margin: 5px;
            }
        }
    </style>
</head>


<body>

    <!-- ====================
         THANH MENU
    ==================== -->

    <nav class="menu">

        <a href="about.php">Trang cá nhân</a>

        <a href="#gioithieu">Giới thiệu</a>

        <a href="#sothich">Sở thích</a>

        <a href="#baihat">Bài hát</a>

        <a href="#uocmo">Ước mơ</a>

        <a href="#baitap">Bài tập</a>

        <a href="#github">Github</a>

    </nav>


    <!-- ====================
         PHẦN CHÀO
    ==================== -->

    <section class="welcome">

        <!-- Ảnh đại diện -->

        <img src="../avatar.JPG"
             alt="Ảnh đại diện của <?php echo $hoTen; ?>"
             class="avatar">

        <div>

            <h1>Xin chào!</h1>

            <h2>
                Mình là <?php echo $hoTen; ?>
            </h2>

            <p>
                Chào mừng bạn đến với trang cá nhân của mình.
            </p>

            <p>
                Đây là nơi mình giới thiệu bản thân và những bài tập,
                dự án đã thực hiện trong quá trình học tập.
            </p>

        </div>

    </section>


    <!-- ====================
         GIỚI THIỆU BẢN THÂN
    ==================== -->

    <section class="container" id="gioithieu">

        <h2>👩‍💻 Giới thiệu bản thân</h2>

        <div class="info-box">

            <p>
                <strong>Họ và tên:</strong>
                <?php echo $hoTen; ?>
            </p>

            <p>
                <strong>Ngành học:</strong>
                <?php echo $nganhHoc; ?>
            </p>

            <p>
                <strong>Trường:</strong>
                <?php echo $truong; ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?php echo $email; ?>
            </p>

        </div>

    </section>


    <!-- ====================
         SỞ THÍCH
    ==================== -->

    <section class="container" id="sothich">

        <h2>🎮 Sở thích</h2>

        <p>
            Một số sở thích của mình là:
        </p>

        <ul class="hobby-list">

            <li>😴 Ngủ</li>

            <li>🎮 Chơi game</li>

            <li>🧋 Đi chơi</li>

            <li>🎧 Nghe nhạc</li>

            <li>🎬 Xem phim</li>

        </ul>

    </section>


    <!-- ====================
         BÀI HÁT YÊU THÍCH
    ==================== -->

    <section class="container" id="baihat">

        <h2>🎵 Bài hát yêu thích</h2>

        <div class="music-box">

            <ul class="music-list">

                <?php foreach ($baiHatYeuThich as $baiHat) { ?>

                    <li>
                    <?php echo $baiHat; ?>
                    </li>

                <?php } ?>

            </ul>

            <p>
                Đây là những bài hát mình yêu thích và thường nghe
                khi rảnh.
            </p>

        </div>

    </section>


    <!-- ====================
         ƯỚC MƠ
    ==================== -->

    <section class="container" id="uocmo">

        <h2>🌟 Ước mơ</h2>

        <div class="dream-box">

            <p>
                <?php echo $uocMo; ?>
            </p>

        </div>

    </section>


    <!-- ====================
         BÀI TẬP / DỰ ÁN
    ==================== -->

    <section class="container" id="baitap">

        <h2>💻 Bài tập và dự án</h2>

        <div class="project">

            <h3>Lập trình Web</h3>

            <p>
                Các bài tập và dự án mình đã thực hiện trong
                quá trình học môn Lập trình Web.
            </p>

            <ul>

                <li>Bài tập PHP</li>

                <li>Bài tập CSS</li>

                <li>Bài tập PHP</li>

                <li>Thiết kế trang web cá nhân</li>

                <li>Các bài thực hành trong 9 buổi học</li>

                <li>Dự án lập trình Web</li>

            </ul>

        </div>

    </section>


    <!-- ====================
         REPOSITORY GITHUB
    ==================== -->

    <section class="container" id="github">

        <h2>🔗 Repository Github</h2>

        <div class="github">

            <p>
                <strong>Github cá nhân:</strong>
            </p>

            <a href="https://github.com/vumaiphuong224001823/laptrinhwweb"
               target="_blank"
               class="github-btn">

                Xem Github cá nhân

            </a>

            <p>
                <strong>Github nhóm:</strong>
            </p>

            <a href="https://github.com/HBinSD/QLyCLB"
               target="_blank"
               class="github-btn">

                Xem Github nhóm

            </a>

        </div>

    </section>


    <!-- ====================
         FOOTER
    ==================== -->

    <footer>

        <p>
            © <?php echo date("Y"); ?> -
            <?php echo $hoTen; ?>
        </p>

        <p>
            Bài tập Lập trình Web
        </p>

    </footer>

</body>

</html>

