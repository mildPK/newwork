<!DOCTYPE html>
<html>
<head>
    <title>Month Days</title>
</head>
<body>
    <form method="post">
        <label for="month">เดือน:</label>
        <input type="text" id="month" name="month">
        <input type="submit" value="ตกลง">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST['month'];
        switch ($month) {
            case "มกราคม":
            case "มีนาคม":
            case "พฤษภาคม":
            case "กรกฎาคม":
            case "สิงหาคม":
            case "ตุลาคม":
            case "ธันวาคม":
                echo "เดือน $month มี 31 วัน";
                break;
            case "เมษายน":
            case "มิถุนายน":
            case "กันยายน":
            case "พฤศจิกายน":
                echo "เดือน $month มี 30 วัน";
                break;
            case "กุมภาพันธ์":
                echo "เดือน $month มี 28 หรือ 29 วัน";
                break;
            default:
                echo "เดือนที่คุณป้อนไม่ถูกต้อง";
        }
    }
    ?>
</body>
</html>