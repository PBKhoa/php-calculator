<?php
$result = "";

if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    switch ($op) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $b != 0 ? $a / $b : "Không thể chia cho 0";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Máy tính</h2>
        <form method="post">
            <input type="number" name="a" required>
            <select name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="b" required>
            <button type="submit" name="submit">=</button>
        </form>
        <h3>Kết quả: <?php echo $result; ?></h3>
    </div>
</body>
</html>