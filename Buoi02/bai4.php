<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>

<h2>DANH SÁCH SINH VIÊN</h2>

<?php

$students = [
    [
        "name" => "Nguyễn Văn An",
        "midterm" => 7,
        "final" => 8
    ],
    [
        "name" => "Trần Thị B",
        "midterm" => 5,
        "final" => 4
    ],
    [
        "name" => "Lê Văn C",
        "midterm" => 6,
        "final" => 5
    ]
];

function calculateAverage($midterm, $final) {
    return ($midterm + $final) / 2;
}

?>

<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>STT</th>
        <th>Tên sinh viên</th>
        <th>Midterm</th>
        <th>Final</th>
        <th>Trung bình</th>
        <th>Kết quả</th>
    </tr>

<?php

$stt = 1;

foreach ($students as $student) {

    $diemTB = calculateAverage($student["midterm"], $student["final"]);

    if ($diemTB >= 5) {
        $ketQua = "Đạt";
    } else {
        $ketQua = "Chưa đạt";
    }

    echo "<tr>";

    echo "<td>$stt</td>";

    // Mã hóa tên trước khi in
    echo "<td>" . htmlspecialchars($student["name"]) . "</td>";

    echo "<td>" . $student["midterm"] . "</td>";
    echo "<td>" . $student["final"] . "</td>";
    echo "<td>" . $diemTB . "</td>";
    echo "<td>" . $ketQua . "</td>";

    echo "</tr>";

    $stt++;
}

?>

</table>

</body>
</html>