<!DOCTIPE html>
<hlml>
    <head>
    <meta charset="utf8">
       <title>Мой первый блог</title> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    </head> 
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="admin">Панель Администатора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3>
                        <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                    </h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=$a['content']?></p>               
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>Мой первый Блог <br>Copyright &copy; 2017</p>
            </footer>
        </div>

    </body>
</hlml>