<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sayfası</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="header">
                <h2>Kayıt Bölümü</h2>
            </div>
                <form class="forms" action="register-db-add.php" method="post">
                    <input type="text" class="text-box-class" name="user_id" placeholder="Kullanıcı Adı">
                    <input type="password" class="text-box-class" name="user_password" placeholder="Şifre" pattern=".{8,12}" required title="Şifre 8 ile 12 karakter arasında olmalıdır.">
                    
                    <input type="radio" id="kullanici" name="user_perm" value="kullanici" checked>
                    <label for="kullanici">Kullanıcı</label>
                    <input type="radio" id="tekniker" name="user_perm" value="tekniker">
                    <label for="tekniker">Tekniker</label>
                    
                    <input type="text" class="text-box-class" name="user_name" placeholder="Adı">
                    <input type="text" class="text-box-class" name="user_location" placeholder="Yeri">
                    <a href="#"><input type="submit" class="submit-btn" name="add-btn" value="Kayıt Ol"></a>
                </form>
                <div class="header">
                    <h2>Silme Bölümü</h2>
                </div>
                <form class="forms" action="register-db-del.php" method="post">
                    <input type="text" class="text-box-class" name="user_id" placeholder="Kullanıcı Adı">
                    <a href="#"><input type="submit" class="submit-btn" name="del-btn" value="Sil"></a>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    $pdo = null;
?>