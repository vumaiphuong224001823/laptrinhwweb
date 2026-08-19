<?php
$name = "";
$email = "";
$subject = "";
$content = "";
$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu và giữ lại khi có lỗi
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = $_POST["subject"] ?? "";
    $content = trim($_POST["content"] ?? "");


    if ($name == "" || $content == "") {
        $message = "Họ tên và nội dung không được để trống!";
        $message_type = "error";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Email không đúng định dạng!";
        $message_type = "error";
    }

    elseif (!isset($_FILES["avatar"]) || $_FILES["avatar"]["error"] != 0) {
        $message = "Vui lòng chọn ảnh đại diện!";
        $message_type = "error";
    }

    else {
        $avatar = $_FILES["avatar"];

        $allowed_types = ["image/jpeg", "image/png", "image/jpg", "image/gif"];

        if (!in_array($avatar["type"], $allowed_types)) {
            $message = "Ảnh đại diện phải có định dạng JPG, PNG hoặc GIF!";
            $message_type = "error";
        }

        elseif ($avatar["size"] > 2 * 1024 * 1024) {
            $message = "Ảnh đại diện không được vượt quá 2MB!";
            $message_type = "error";
        }

        else {

            if (!is_dir("uploads")) {
                mkdir("uploads", 0777, true);
            }

            $extension = pathinfo($avatar["name"], PATHINFO_EXTENSION);
            $new_name = uniqid("avatar_") . "." . $extension;

            move_uploaded_file(
                $avatar["tmp_name"],
                "uploads/" . $new_name
            );

            $message = "Gửi liên hệ thành công!";
            $message_type = "success";

            $name = "";
            $email = "";
            $subject = "";
            $content = "";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form liên hệ</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f8;
        }

        .container {
            width: 650px;
            margin: 40px auto;
            background: white;
            padding: 35px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #234a73;
            margin-bottom: 10px;
            font-size: 36px;
        }

        .description {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 16px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #4c78b5;
        }

        textarea {
            height: 140px;
            resize: vertical;
        }

        .file-input {
            padding: 10px;
            background: #fafafa;
        }

        .note {
            font-size: 13px;
            color: #777;
            margin-top: 6px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 7px;
            background: #4b75b5;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #365f9c;
        }

        .error {
            background: #ffe5e5;
            color: #d60000;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .success {
            background: #e3f8e8;
            color: #16803c;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Liên hệ</h1>

    <p class="description">
        Vui lòng nhập đầy đủ thông tin bên dưới.
    </p>

    <?php if ($message != ""): ?>
        <div class="<?php echo $message_type; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">

        <!-- Họ tên -->
        <div class="form-group">
            <label>Họ tên</label>

            <input
                type="text"
                name="name"
                placeholder="Nhập họ và tên"
                value="<?php echo htmlspecialchars($name); ?>"
                required
            >
        </div>

        <!-- Email -->
        <div class="form-group">
            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="example@gmail.com"
                value="<?php echo htmlspecialchars($email); ?>"
                required
            >
        </div>

        <!-- Chủ đề -->
        <div class="form-group">
            <label>Chủ đề</label>

            <select name="subject">
                <option value="Hỗ trợ kỹ thuật"
                    <?php if ($subject == "Hỗ trợ kỹ thuật") echo "selected"; ?>>
                    Hỗ trợ kỹ thuật
                </option>

                <option value="Góp ý"
                    <?php if ($subject == "Góp ý") echo "selected"; ?>>
                    Góp ý
                </option>

                <option value="Tư vấn"
                    <?php if ($subject == "Tư vấn") echo "selected"; ?>>
                    Tư vấn
                </option>

                <option value="Khác"
                    <?php if ($subject == "Khác") echo "selected"; ?>>
                    Khác
                </option>
            </select>
        </div>

        <!-- Nội dung -->
        <div class="form-group">
            <label>Nội dung</label>

            <textarea
                name="content"
                placeholder="Nhập nội dung liên hệ..."
                minlength="10"
                maxlength="500"
                required
            ><?php echo htmlspecialchars($content); ?></textarea>

            <div class="note">
                Nội dung phải từ 10 đến 500 ký tự.
            </div>
        </div>

        <!-- Ảnh đại diện -->
        <div class="form-group">
            <label>Ảnh đại diện</label>

            <input
                type="file"
                name="avatar"
                class="file-input"
                accept=".jpg,.jpeg,.png,.gif"
                required
            >

            <div class="note">
                Chỉ chấp nhận JPG, PNG, GIF và dung lượng tối đa 2MB.
            </div>
        </div>

        <!-- Nút gửi -->
        <button type="submit">
            Gửi liên hệ
        </button>

    </form>

</div>

</body>
</html>