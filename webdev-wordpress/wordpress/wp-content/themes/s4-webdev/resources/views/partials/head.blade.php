<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
    <title>
      <?php bloginfo('name'); ?>
    </title>
      <?php
      wp_head();
      show_admin_bar(true);
      $header = get_field("header", "option");
      $riot = $header["logos"]["riot"];
      $valorant = $header["logos"]["valorant"];
      $nav = $header["list_page"];
      $profil = $header["profil"];
      ?>
</head>
<body>
    <header class="header" >
        <div class="header_logo">
            <img src="<?= $riot["url"] ?>" alt=" image of <?= $riot["title"] ?>">
            <p>|</p>
            <img src="<?= $valorant["url"] ?>" alt=" image of <?= $valorant["title"] ?>">
        </div>
        <nav class="nav">

          

            <?php foreach ($nav as $key => $value) { ?>

            <a class="nav-link" href="<?= $value["link"] ?>" target="_blank"><?= $value["name"] ?></a>

            <?php } ?>

        </nav>
        <div class="profil">
            <img class="picture" src="<?= $profil["profil_picture"]["url"]?>" alt="">
            <p><?= $profil["pseudo"]?></p>
        </div>
    </header>
</head>
