<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Teknik Destek Sistemi</title>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="header">
                <h2>Teknin Servis Sistemine Hoş Geldiniz</h2>
            </div>
            <div class="forms">
                <form method="post" action="loginCheck.php">
                    <input type="text" class="txt-box" name="user_id" placeholder="Kullanıcı Adı" required>
                    <input type="password" class="txt-box" name="user_password" placeholder="Şifre" minlength="8" required>
                    <a href="#"><input type="submit" id="submit-btn" name="login-btn" value="Giriş Yap"></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>