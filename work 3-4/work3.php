<!DOCTYPE html>
<html>
<head>
    <title>ผลการแข่งขันฟุตบอลยูโร 2024</title>
</head>
<body>
    <form method="post">
        <label for="team1">ทีมที่ 1:</label>
        <input type="text" id="team1" name="team1">
        <br>
        <label for="team2">ทีมที่ 2:</label>
        <input type="text" id="team2" name="team2">
        <br>
        <input type="submit" value="ตรวจสอบผลการแข่งขัน">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];

        // ผลการแข่งขันที่อ้างอิงจากยูโรคัพ 2024 (ข้อมูลตัวอย่าง)
        $results = [
            "ทีมA" => ["ทีมB" => "ชนะ", "ทีมC" => "เสมอ"],
            "ทีมB" => ["ทีมA" => "แพ้", "ทีมC" => "ชนะ"],
            "ทีมC" => ["ทีมA" => "เสมอ", "ทีมB" => "แพ้"]
        ];

        if (!empty($team1) && !empty($team2)) {
            if (isset($results[$team1][$team2])) {
                $result1 = $results[$team1][$team2];
                $result2 = ($result1 == "ชนะ") ? "แพ้" : (($result1 == "แพ้") ? "ชนะ" : "เสมอ");
                echo "<p>ผลการแข่งขันระหว่างทีม $team1 และ ทีม $team2:</p>";
                echo "<p>ทีม $team1: $result1</p>";
                echo "<p>ทีม $team2: $result2</p>";
            } else {
                echo "<p>ไม่พบผลการแข่งขันระหว่างทีม $team1 และ ทีม $team2 ในฐานข้อมูล</p>";
            }
        } else {
            echo "<p>กรุณาใส่ชื่อทีมทั้งสองทีม</p>";
        }
    }
    ?>
</body>
</html>