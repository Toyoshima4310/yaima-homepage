<!-- 共通ヘッダー -->
<?php require('header.php'); ?>
 
    <div class="sea jumbotron-fluid">
        <div class="container-fluid"> <!--海の写真スタート-->
          <div class="row">
            <div class="seatext pt-4 mb-2 pl-4 col-md-4 ml-md-auto">石垣島<span>から、
            </span></br>進学<span>で、</span>未来<span>へ。</span>
            </div>
            <div class="col-md-3 offset-md-1 mr-md-auto">
              <a href="access.php" class="btn btn-block font-weight-bold mx-auto mx-md-0" ontouchstart="">無料体験受付中</a>
            </div>
          </div>
        </div> <!--海の写真ここまで-->  
      </div>
      
    </div> <!--jumbotron-fluid-->


    <div class="container-fluid">
      <div class="row pl-md-4">
        <div class="col-md-10">
          <div class="pcwidthind">
            <div class="text-center text-md-left"> <!--合格実績スタート-->
              <div class="themep font-weight-bold">合格実績・私の合格体験記</div>
              <div class="topsuc mt-3">
              千葉大学/横浜国立大学/琉球大学(医学部医学科含む)/青山学院大学/立教大学/
              中央大学/関西大学/同志社女子大学/名桜大学/八重山高校(発展クラス含む)など、合格実績多数！！<br>
              </div>
              
            </div>  <!--合格実績ここまで-->

              <div class="container-fluid">
                <div class="row">
                  <div class="sucexplogo mt-4 col-10 mx-auto col-md-5 ml-md-4">
                    <img src="./images/sucexplogo.png" class="img-fluid">
                    <a href="success.php" class="btn btn-block font-weight-bold mx-auto mt-md-4 mb-4 d-none d-md-block" ontouchstart="">合格体験記を見る︎</a>
                  </div>  
                  <div class="idxsuc mt-md-4 col-md-6">
                    <div class="mt-4 mt-md-3">
                      やいま塾を卒業した先輩方の合格体験記です。<br>
                      先輩方は、どうやって合格を勝ち取ったのか？<br>
                      学習法、考え方は人それぞれ！<br>
                      あなたに合った学習法が見つかるかもしれません♪<br>
                      やいま塾の合格実績も多数掲載しています。ぜひご覧ください！<br>
                    </div>
                    <a href="success.php" class="btn btn-block font-weight-bold mx-auto mt-4 mt-md-3 mb-4 d-md-none" ontouchstart="">合格体験記を見る︎</a>
                  </div> <!--合格体験記ここまで-->
                </div>
              </div>
            
            <div class="text-center text-md-left"> <!--塾長より挨拶スタート-->
              <div class="themeg font-weight-bold">代表より挨拶</div>
              <!-- <div class="d-md-flex justify-content-center">
                <div class="teacher mt-4 mt-md-5"><img src="./images/teacher1.jpeg" class="rounded"></div> -->
                <div class="teacherText text-left m-md-4 mt-4 mx-2">
                  やいま塾ホームページをご覧いただき、<br>
                  誠にありがとうございます。
                  代表の齋藤と申します。<br><br>
                  やいま塾では、一人ひとりの目標に合わせた授業カリキュラムを設定し、<br>
                  推薦や一般試験など、あらゆる形式の大学、高校入試に対応しています。<br>
                  その他、各種検定や資格試験など、学生から社会人まで、多様な試験にも力を入れております。<br><br>

                  学習のことで悩んでいることがあれば、
                  ぜひ一度、やいま塾にご相談ください。<br><br>
                  錬成教室 やいま塾 代表　齋藤 周子
                </div>
              <!-- </div> -->
            </div> <!--塾長より挨拶ここまで-->
            
            <!-- お知らせのデータ取得 -->
            <?php
              try {
                $db = new PDO ('mysql:dbname=orchidbison5_testdata;host=mysql57.orchidbison5.sakura.ne.jp;charset=utf8', 'orchidbison5', 'orchidbison5data');
              } catch (PDOException $e) {
                echo 'データベース接続エラー：' . $e->getMessage();
              }
            ?>
            <?php
              $recordsinfo = $db->query('SELECT * FROM infodata ORDER BY id desc');
            ?>

            <div class="news text-center text-md-left"> <!--やいま塾からのお知らせスタート-->
            <div class="themeg font-weight-bold">やいま塾からのお知らせ</div>
            <div class="w-md-100"></div>
            <div class="frame mt-4 text-left">
              <?php while ($recordinfo = $recordsinfo->fetch()) :?>
              <div class="newstext">
                <div class="newsdate"><?php echo $recordinfo[1]; ?></div>
                <?php echo $recordinfo[2]; ?>
              </div></br></br> <!--newtext-->
              <?php endwhile; ?>
            </div>
          </div> <!--お知らせここまで -->
            <div class="mx-auto">
              <?php include('snslink.php') ?>
            </div>
          </div> <!--pcwidthind-->
        </div>

        
        

        <!-- pcバナー表示 -->
        <div class="col-md-2 d-none d-md-block">
          スポンサー様<br>広告バナー掲載例
          <?php $i=1; ?>
          <?php while ($i<21):?>
            <img src="./images/sucexplogo.png" alt="" class="img-fluid img-thumbnail mt-2">
          <?php $i++; ?>
          <?php endwhile; ?>
        </div>

        <!-- spバナー表示 -->
        <div class="d-md-none mt-5">
          <div class="container-fluid">
          スポンサー様広告バナー掲載例
            <div class="row">
              <?php $i=1; ?>
              <?php while ($i<21):?>
                <div class="col-6">
                  <img src="./images/sucexplogo.png" alt="" class="img-fluid img-thumbnail mt-2">
                </div>
              <?php $i++; ?>
              <?php endwhile; ?>
            </div>
            
          </div>
          
        </div>
      </div>
    
    </div>
    

<!-- 共通フッター -->
<?php require('footer.php'); ?>

