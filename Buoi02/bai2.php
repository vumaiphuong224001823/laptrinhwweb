<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xếp loại điểm</title>
</head>
<body>

<h2>XẾP LOẠI ĐIỂM</h2>

<form method="post">
    <label>Nhập điểm:</label>
    <input type="number" name="diem" step="0.1" min="0" max="10" required>
    <button type="submit">Xếp loại</button>
</form>

<?php
if (isset($_POST['diem'])) {

    $diem = $_POST['diem'];

    if ($diem >= 8) {
        echo "<p>Điểm: $diem - Xếp loại: Giỏi</p>";
    } elseif ($diem >= 6.5) {
        echo "<p>Điểm: $diem - Xếp loại: Khá</p>";
    } elseif ($diem >= 5) {
        echo "<p>Điểm: $diem - Xếp loại: Trung bình</p>";
    } else {
        echo "<p>Điểm: $diem - Xếp loại: Chưa đạt</p>";
    }
}
?>

</body>
</html>