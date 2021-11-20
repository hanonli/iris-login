<!DOCTYPE html>
<html>
<head>
    <title> iris </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <form action="login.php" method="post">
            <div class="imgcontainer">
                <img src="images/logo.png" class="login-logo">
            </div>
            <h2>เข้าใช้งานระบบสืบค้นเอกสาร</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="container">
                <label> อีเมลบัญชีผู้ใช้เครือข่ายนนทรี</label>
                <input type="text" name="uname" placeholder="บัญชีผู้ใช้"><br>
                <label> รหัสผ่าน</label>
                <input type="password" name="password" placeholder="รหัสผ่าน"><br>
            </div>
            <div class="login-button">
                <button type="submit">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>
</body>
</html>