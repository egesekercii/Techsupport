<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new-ticket.css">
    <title>Teknik Destek Sistemi</title>
</head>
<body>
    <div class="all">
        <div class="navbar">
            <ul>
                <li>
                <li>
                    <a href="#">
                        Yeni İstek
                    </a>
                </li>
            </ul>
        </div>
        <div class="new-ticket">
            <h1>Yeni İstek Oluşturma</h1>
            <div class="checkboxes-div">
                <form action="new-ticket-add.php" method="post">
                    <label class="checkboxes">Yazıcı Arızası
                        <input type="checkbox" name="yazici-arizasi-cb">
                        <span class="checkmark">
                        </span>
                    </label>
                    <label class="checkboxes">Sistem Arızası
                        <input type="checkbox" name="sistem-arizasi-cb">
                        <span class="checkmark">
                        </span>
                    </label>
                    <label class="checkboxes">Monitör Arızası
                        <input type="checkbox" name="monitor-arizasi-cb">
                        <span class="checkmark">
                        </span>
                    </label>
                    <label class="checkboxes">Kartuş Dolumu
                        <input type="checkbox" name="kartus-cb">
                        <span class="checkmark">
                        </span>
                    </label>
                </div>
                <div class="textarea-section">
                    <p>Eğer yaşadığınız sorunu yukarıda bulamadıysanız sorununuzu kısaca açıklanıyınız:</p>
                    <textarea name="txt-area" id="txtarea" cols="80" rows="10"></textarea>
                </div>
                <a href="#" id="submit-btn-a"><input type="submit" id="submit-btn" name="submit-btn" value="Gönder"></a>
            </form>
        </div>
    </div>
</body>
</html>