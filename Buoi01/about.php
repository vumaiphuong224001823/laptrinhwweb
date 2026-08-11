<?php
// Thông tin cá nhân
$hoTen = "Mai Phương";
$nganhHoc = "Công nghệ thông tin";
$truong = "Sinh viên";
$email = "maiphuong@example.com";

// Thông tin repository
$githubCaNhan = "https://github.com/vumaiphuong224001823";
$githubNhom = "https://github.com/";
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trang cá nhân - <?php echo $hoTen; ?></title>
</head>
<style>
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


/* Menu */

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


/* Phần chào */

.welcome {
    width: 80%;
    margin: 30px auto;
    padding: 30px;

    background-color: white;

    border-radius: 15px;

    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 25px;
}

.avatar {
    width: 130px;
    height: 130px;

    border-radius: 50%;

    object-fit: cover;
}

.welcome h1 {
    color: #d63384;
}

.welcome h2 {
    color: #555;
}


/* Nội dung */

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


/* Project */

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


/* Github */

.github a {
    display: inline-block;

    margin: 5px 0 15px;

    padding: 10px 15px;

    background-color: #d63384;

    color: white;

    text-decoration: none;

    border-radius: 6px;
}

.github a:hover {
    background-color: #b0266c;
}


/* Footer */

footer {
    margin-top: 30px;

    padding: 20px;

    background-color: #d63384;

    color: white;

    text-align: center;
}
</style>

<body>

    <!-- Thanh menu -->
    <nav class="menu">
        <a href="about.php">Trang cá nhân</a>
        <a href="#gioithieu">Giới thiệu</a>
        <a href="#baitap">Bài tập Buổi 1</a>
        <a href="#github">Github</a>
    </nav>


    <!-- Phần giới thiệu -->
    <section class="welcome">

        <img src="anhcanhan.jpg"
             alt="Ảnh đại diện"
             class="avatar">

        <div>
            <h1>Xin chào!</h1>

            <h2>
                Mình là <?php echo $hoTen; ?>
            </h2>

            <p>
                Chào mừng bạn đến với trang cá nhân của mình.
            </p>
        </div>

    </section>


    <!-- Thông tin cá nhân -->
    <section class="container" id="gioithieu">

        <h2>👩‍💻 Giới thiệu bản thân</h2>

        <p>
            <strong>Họ và tên:</strong>
            <?php echo $hoTen; ?>
        </p>

        <p>
            <strong>Ngành học:</strong>
            <?php echo $nganhHoc; ?>
        </p>

        <p>
            <strong>Đối tượng:</strong>
            <?php echo $truong; ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo $email; ?>
        </p>

    </section>


    <!-- Bài tập Buổi 1 -->
    <section class="container" id="baitap">

        <h2>📚 Bài tập Buổi 1</h2>

        <div class="project">

            <h3>Lập trình Web - Buổi 1</h3>

            <p>
                Tìm hiểu kiến trúc Web, môi trường phát triển
                và quy trình phát triển ứng dụng Web.
            </p>

            <p>
                Nội dung thực hiện:
            </p>

            <ul>
                <li>Kiểm tra phiên bản PHP</li>
                <li>Kiểm tra phiên bản MySQL</li>
                <li>Tạo repository Github cá nhân</li>
                <li>Tạo cấu trúc thư mục cho các buổi học</li>
                <li>Tạo trang about.php giới thiệu bản thân</li>
            </ul>

        </div>

    </section>


    <!-- Repository -->
    <section class="container" id="github">

        <h2>🔗 Repository Github</h2>

        <div class="github">

            <p>
                <strong>Github cá nhân:</strong>
            </p>

            <a href="<?php echo $githubCaNhan; ?>"
               target="_blank">
                Xem Github cá nhân
            </a>


            <p>
                <strong>Github nhóm:</strong>
            </p>

            <a href="<?php echo $githubNhom; ?>"
               target="_blank">
                Xem Github nhóm
            </a>

        </div>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            © <?php echo date("Y"); ?> - <?php echo $hoTen; ?>
        </p>

        <p>
            Bài tập Lập trình Web - Buổi 1
        </p>

    </footer>

</body>

</html>