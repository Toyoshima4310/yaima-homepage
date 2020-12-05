<?php require('header.php') ?>
      
      <div class="headerp d-inline-flex justify-content-center d-md-none"> <!--ヘッダー帯-->
        <div class="align-self-center font-weight-bold">合格体験記・合格実績</div>
      </div>

      <?php
        try {
          $db = new PDO ('mysql:dbname=orchidbison5_testdata;host=mysql57.orchidbison5.sakura.ne.jp;charset=utf8', 'orchidbison5', 'orchidbison5data');
        } catch (PDOException $e) {
          echo 'データベース接続エラー：' . $e->getMessage();
        }
      ?>

      <!-- データ取得 -->
      <?php
      $recordssucexp = $db->query('SELECT * FROM sucexpdata ORDER BY id desc');
      ?>


      <div class="pcwidth">
        <div class="container-fluid text-center text-md-left"> <!--私の合格体験記スタート-->
          <div class="themep mt-5 font-weight-bold">私の合格体験記</div>
          <div class="d-lg-none mt-4 mx-md-4">顔写真をタップすると、</br>
                            合格体験記を見ることができます。</div>
          <div class="d-none d-lg-block mt-4 mx-md-4">顔写真をクリックすると、</br>
                            合格体験記を見ることができます。</div>

          <div class="row mt-4">

            <?php while ($recordsucexp = $recordssucexp->fetch()) :?>
              <div class="col-6 col-md-3">
            <div class="sucimg mx-auto text-center my-4 mx-md-3" ontouchstart="" data-toggle="modal" data-target="#sucexp<?php echo $recordsucexp[0]; ?>" style="background-color:<?php echo $recordsucexp[4]?>;">
                  <img src="./images/sucexp/sucexpface<?php echo $recordsucexp[0]; ?>.jpg" class="img-fluid"></br>
                  <?php echo $recordsucexp[1]; ?>さん</br>
                  <?php echo $recordsucexp[2]; ?></br>
                  <?php echo $recordsucexp[3]; ?>
                </div>
              </div>

              <div class="success-modal modal" id="sucexp<?php echo $recordsucexp[0];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4>私の合格体験記 <?php echo $recordsucexp[0]; ?></h4>
                      <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <img src="./images/sucexp/sucexp<?php echo $recordsucexp[0]; ?>.jpg" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        
        
        
        <!--私の合格体験記ここまで-->
        
        <div class="container-fluid d-flex flex-column"> <!--合格実績スタート-->
          <div class="text-center text-md-left">
            <div class="themep mt-5 font-weight-bold">合格実績</div>
          </div>
          
          <div class="themecp mt-4 mt-md-5 font-weight-bold pl-2 mx-md-4 text-left">年度別</div>
          <div class="suclist mx-auto mx-md-5 mt-4">
            <ul class="text-left list-unstyled row">
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdata2019">2019年度<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdata2018">2018年度<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdata2017">2017年度<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdata2016">2016年度<span>▶︎</span></li>
            </ul>
          </div>
              
          <div class="themecp mt-5 font-weight-bold pl-2 mx-md-4 text-left">地域別</div>
          <div class="suclist mx-auto mx-md-5 mt-4">
            <ul class="text-left list-unstyled row">
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdataOki">沖縄県内<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdataKan">関東地方<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdataKin">近畿地方<span>▶︎</span></li>
              <li class="pl-4 col-12 col-md-3 mx-md-4 mb-4" ontouchstart="" data-toggle="modal" data-target="#sucdataLoc">その他の地方<span>▶︎</span></li>
            </ul>
          </div>
        </div>

        <!-- データ取得 -->
        <?php
          $records2019 = $db->query('SELECT * FROM sucdata where year=2019 order by prefecture');
          $records2018 = $db->query('SELECT * FROM sucdata where year=2018 order by prefecture');
          $records2017 = $db->query('SELECT * FROM sucdata where year=2017 order by prefecture');
          $records2016 = $db->query('SELECT * FROM sucdata where year=2016 order by prefecture');
          $recordsOki = $db->query('SELECT * FROM sucdata where prefecture in ("沖縄県") order by year desc,prefecture');
          $recordsKan = $db->query('SELECT * FROM sucdata where prefecture in ("茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県") order by year desc,prefecture');
          $recordsKin = $db->query('SELECT * FROM sucdata where prefecture in ("京都府","大阪府","三重県","滋賀県","兵庫県","奈良県","和歌山県") order by year desc,prefecture');
          $recordsLoc = $db->query('SELECT * FROM sucdata where prefecture not in ("茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","沖縄県","京都府","大阪府","三重県","滋賀県","兵庫県","奈良県","和歌山県") order by year desc,prefecture');
        ?>
        
        <div class="success-modal modal" id="sucdata2019" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>2019年度合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($record2019 = $records2019->fetch()) :?>
                      <tr><td><?php echo $record2019[1]; ?></td><td><?php echo $record2019[2]; ?></td><td><?php echo $record2019[3]; ?></td><td><?php echo $record2019[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdata2018" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>2018年度合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($record2018 = $records2018->fetch()) :?>
                      <tr><td><?php echo $record2018[1]; ?></td><td><?php echo $record2018[2]; ?></td><td><?php echo $record2018[3]; ?></td><td><?php echo $record2018[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdata2017" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>2017年度合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($record2017 = $records2017->fetch()) :?>
                      <tr><td><?php echo $record2017[1]; ?></td><td><?php echo $record2017[2]; ?></td><td><?php echo $record2017[3]; ?></td><td><?php echo $record2017[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdata2016" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>2016年度合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($record2016 = $records2016->fetch()) :?>
                      <tr><td><?php echo $record2016[1]; ?></td><td><?php echo $record2016[2]; ?></td><td><?php echo $record2016[3]; ?></td><td><?php echo $record2016[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>
        
        <div class="success-modal modal" id="sucdataOki" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>沖縄県・石垣島内合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($recordOki = $recordsOki->fetch()) :?>
                      <tr><td><?php echo $recordOki[1]; ?></td><td><?php echo $recordOki[2]; ?></td><td><?php echo $recordOki[3]; ?></td><td><?php echo $recordOki[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdataKan" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>関東地方合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($recordKan = $recordsKan->fetch()) :?>
                      <tr><td><?php echo $recordKan[1]; ?></td><td><?php echo $recordKan[2]; ?></td><td><?php echo $recordKan[3]; ?></td><td><?php echo $recordKan[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdataKin" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>近畿地方合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($recordKin = $recordsKin->fetch()) :?>
                      <tr><td><?php echo $recordKin[1]; ?></td><td><?php echo $recordKin[2]; ?></td><td><?php echo $recordKin[3]; ?></td><td><?php echo $recordKin[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="success-modal modal" id="sucdataLoc" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="sucdata-content modal-content">
                <div class="modal-header">
                  <div class="modal-title"><h4>その他の地方合格実績</h4></div>
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="sucdata-modal-body modal-body">
                  <div class="table-responsive">
                    <table class="successtable table text-nowrap">
                      <tr><th>年度</th><th>都道府県</th><th>学校名</th><th>運営</th></tr>
                      <?php while ($recordLoc = $recordsLoc->fetch()) :?>
                      <tr><td><?php echo $recordLoc[1]; ?></td><td><?php echo $recordLoc[2]; ?></td><td><?php echo $recordLoc[3]; ?></td><td><?php echo $recordLoc[4]; ?></td></tr>
                      <?php endwhile; ?>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>

        </div> <!--container-fluid-->
        <!--合格実績ここまで-->
      </div> <!--pcwidth-->

<?php require('footer.php'); ?>      