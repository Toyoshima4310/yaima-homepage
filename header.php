<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>錬成教室 やいま塾</title>
  </head>
  <body>
    <div class="container-fluid"> <!--ヘッダー-->
      <div class="header d-flex justify-content-between justify-content-md-around mt-2">
        <div class="headerlogo mt-1 mt-md-2"><img src="./images/yaima-rogo.png"></div>
        <ul class="list-unstyled">
          <li>電話受付時間 9時〜17時</li>
          <li>TEL 0980-82-7660</li>
        </ul>
      </div> <!--d-flex ect-->
    </div> <!--ヘッダー-->

    
    <?php
    // URLの整理
          $pwd = str_replace('/yaima-homepage/','',$_SERVER['REQUEST_URI']);
          if ($pwd == 'index.php') {
            $spindex = 'v-on:click="closer"';
            $pcindex = 'href="#" style="color:white; background-color:#59DD82;"';
          } else {
            $spindex = 'href="index.php"';
            $pcindex = 'href="index.php"';
          };
          if ($pwd == 'success.php') {
            $spsuccess = 'v-on:click="closer"';
            $pcsuccess = 'href="#" style="color:white; background-color:#59DD82;"';
          } else {
            $spsuccess = 'href="success.php"';
            $pcsuccess = 'href="success.php"';
          };
          if ($pwd == 'course.php') {
            $spcourse = 'v-on:click="closer"';
            $pccourse = 'href="#" style="color:white; background-color:#59DD82;"';
          } else {
            $spcourse = 'href="course.php"';
            $pccourse = 'href="course.php"';
          };
          if ($pwd == 'session.php') {
            $spsession = 'v-on:click="closer"';
            $pcsession = 'href="#" style="color:white; background-color:#59DD82;"';
          } else {
            $spsession = 'href="session.php"';
            $pcsession = 'href="session.php"';
          };
          if ($pwd == 'access.php') {
            $spaccess = 'v-on:click="closer"';
            $pcaccess = 'href="#" style="color:white; background-color:#59DD82;"';
          } else {
            $spaccess = 'href="access.php"';
            $pcaccess = 'href="access.php"';
          };
    ?>
        
      <!--スマホメニュースタート-->
      <div id="menu" class="d-md-none">

        <div v-on:click="drawer" class="menubtn d-flex flex-column justify-content-center align-items-center">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="menutext">MENU</div>
        </div>

        
        <div class="humberger">
          <ul class="flex-column text-center list-unstyled" v-bind:style="{transform:draw}">
            <li><a v-on:click="closer" ontouchstart="">×</a></li>
            <li><a <?php echo $spindex; ?> ontouchstart="">ホーム</a></li>
            <li><a <?php echo $spsuccess; ?> ontouchstart="">合格体験記・合格実績</a></li>
            <li><a <?php echo $spcourse; ?> ontouchstart=""> コース紹介</a></li>
            <li><a <?php echo $spsession; ?> ontouchstart="">進学への道</a></li>
            <li><a <?php echo $spaccess; ?> ontouchstart="">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
  
      <script>
        const vue = new Vue({
          el:"#menu",
          data:{
            draw:'translateX(0)'
          },
          methods:{
            drawer: function() {
              vue.$data.draw = 'translateX(-80vw)';
            },
            closer: function() {
              vue.$data.draw = 'translateX(0)'
            }
          }
        })
      </script>
      <!--スマホメニューここまで-->

      <!--ヘッダーメニュースタート-->
      <div class="headmenu d-none d-md-block font-weight-bold">
        <ul class="list-inline d-flex justify-content-center text-center">
          <li class="list-inline-item"><a <?php echo $pcindex;?>>ホーム</a></li>
          <li class="list-inline-item"><a <?php echo $pcsuccess;?>>合格体験記・合格実績</a></li>
          <li class="list-inline-item"><a <?php echo $pccourse;?>>コース紹介</a></li>
          <li class="list-inline-item"><a <?php echo $pcsession;?>>進学への道</a></li>
          <li class="list-inline-item"><a <?php echo $pcaccess;?>>お問い合わせ</a></li>
        </ul>
      </div>
      <!--ヘッダーメニューここまで-->
       