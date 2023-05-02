<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8"/>
    <title> Blog | Administrace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<link href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen" />-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="../../../spolecne/css/blog.css" rel="stylesheet" media="screen">
</head>
<body>
<section class="container"><br/>
    <?php if (!empty($navigace)): ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li<?php if ($navigace == 'prispevky'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo $this->zaklad->url . 'prispecky.php'; ?>">
                            <span class="glyphicon glyphicon-list"></span>
                            Příspěvky
                        </a>
                    </li>
                    <li<?php if ($navigace == 'komentare'): ?> class="active" <?php endif; ?>>
                        <a href="<?php echo $this->zaklad->url . 'komentare.php'; ?>">
                            <span class="glyphicon glyphicon-comment"></span>
                            Komentáře
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->zaklad->url . 'prihlaseni.php?stav=odhlasit'; ?>">
                            <span class="glyphicon glyphicon-logout"></span>
                            Odhlásit
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    <?php endif; ?>

    <?php require_once '../../../spolecne/sablony/oznamovaci-oblast.php' ?>
