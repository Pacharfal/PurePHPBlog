<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8"/>
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<link href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen" />-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="../../../spolecne/css/blog.css" rel="stylesheet" media="screen">
</head>

<body>
<selection class="container">
    <br/>
    <?php require_once('spolecne/sablony/oznamovaci-oblast.php'); ?>
    <p>
        <a href="<?php echo $this->zaklad->url . 'admin/'; ?>"
           class="btn btn-info">Přihlásit do administrace</a>
    </p>

