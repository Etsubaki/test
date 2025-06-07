<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1; host=localhost;","root","");
    $stmt=$pdo->query("select * from diworks_keijiban");
    ?>

    <div class="LOGO">
        <img src="diblog_logo.jpg">
    </div>

    <header>
       <div class="MENU">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
       </div>
    </header>

    <main>
        <div class="left">

            <h2>プログラミングに役立つ掲示板</h2>
           
            <form method = "post" action = "insert.php">
                <h1>入力フォーム</h1>

                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type = "text" class = "text"
                    size = "35" name = "handlename">
                    
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type = "text" class = "text"
                    size = "35" name = "title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols = "40" rows = "8" name = "comments"></textarea>
                </div>

                <div>
                    <input type = "submit" class = "submit" value = "投稿する">
                </div>
            </form>

            <?php
                while ($row = $stmt->fetch()) {
                    echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                            echo nl2br($row['comments']);
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>

        <div class="right">
            <h3>人気の記事</h3>
            <ul>
                <li>PHPおすすめ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>いま人気のエディタTops</li>
                <li>HTMLの基礎</li>
            </ul>
            <h3>おすすめリンク</h3>
            <ul>
                <li>ディーアイワークス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipceのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavsScript</li>
            </ul>
        </div>
    </main>

    <footer>
        <div class="FOOTER">
            D.I.Works D.I.Blog is the one which provides A to Z about programing
        </div>
    </footer>
</body>

