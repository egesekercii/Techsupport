<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tech-page.css">
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
            <div class="table-div">
                <table>
                    <thead>
                        <tr>
                            <th>Kullanici</th>
                            <th>Yeri</th>
                            <th>Yazici</th>
                            <th>Sistem</th>
                            <th>Monitor</th>
                            <th>Kartus</th>
                            <th>Diger</th>
                        </tr>
                    </thead>
                    <tbody id="my-data">
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="refresh-data.js"></script>
    </body>
</html>