<?php require_once('../../layout/index.php') ?>

<?php 

require_once('../../layout/index.php');
?>
<?php include('../../../helpers/news/news.php') ?>

<?php

    init_header('news', ['http://localhost/cmb/assets/css/school.css', 'http://localhost/cmb/assets/css/news.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('News');

?>

<style type="text/css">
  ul#newsPager{
    float: right;
    z-index: 100;
    background: white;
  }
  ul#newsPager li{
    padding: 5px 10px;
    border: 2px solid black;
    margin-right: 2px;
    color: black;
  }
  ul#newsPager li.active{
    background: red;
    color: white !important;
  }
</style>
<div class="container-fluid" style='background: white;padding-top: 50px'>
<div class="row">
<div class="col-md-8">
        <?php

                    $back = '../../../';



        ?>
                        <div class="newsArea">

                          <?php

                          $countNews = count($newsBlock);

                          if($countNews > 1){


                            $newsCategorySelected = (isset($_GET['newsCategory']))? $_GET['newsCategory'] : 'all';

                            echo "<ul id='newsPager' class='list-inline list-unstyled'>";

                              for($i=0;$i< $countNews; $i++){

                                  if(isset($_GET['newsPage'])){
                                    if($_GET['newsPage'] == $i){
                                    echo "<li class='active'><a href='?newsCategory=". $newsCategorySelected ."&&newsPage=". $i ."'>". $i ."</a></li>";
                                  }else{
                                    echo "<li><a href='?newsCategory=". $newsCategorySelected ."&&newsPage=". $i ."'>". $i ."</a></li>";
                                  }
                                }else{
                                  if($i == 0){
                                  echo "<li class='active'><a href='?newsCategory=". $newsCategorySelected ."&&newsPage=". $i ."'>". $i ."</a></li>";
                                }else{
                                  echo "<li><a href='?newsCategory=". $newsCategorySelected ."&&newsPage=". $i ."'>". $i ."</a></li>";
                                }
                                }

                                  

                              }

                            echo "</ul>";
                          }

                          if(!isset($_GET['newsPage'])){
                            showNews(0);
                          }else{
                            showNews($_GET['newsPage']);
                          }

                            function showNews($value = 0){

                              global $newsBlock;

                          ?>

                            <div class="image-container" style="background: url('http://localhost/cmb/<?php echo $newsBlock[$value]['i_path'] ?>');width: 100%; height: 400px"></div>
                            <div class="panel">
                                <div class="panel-heading" style="text-align: left">
                                    <table>
                                      <tr>
                                        <td>
                                          <div class="dateNtime">
                                              <?php

                                               $archives = explode('/', $newsBlock[$value]['archive']);

                                               echo $archives[0]. '<br/>' .$archives[1];


                                               ?>
                                          </div>
                                        </td>
                                        <td>
                                          <h3 style="text-align: left;">
                                              <?php echo $newsBlock[$value]['title'] ?>
                                          </h3>
                                        </td>
                                      </tr>
                                    </table>

                                  </div>
                                <hr/>
                                <div class="panal-body" style="text-align: left;padding: 10px 15px;background: #c0c0c0;color: white">
                                  <?php echo $newsBlock[$value]['content'] ?>
                                </div>
                                <div class="panel-footer">
                                  <table style="width: 100%">
                                    <tr>
                                      <td><i class="fa fa-user" aria-hidden="true"></i> <?php echo $newsBlock[$value]['names']?></td>
                                      <td onclick="commentToggle()" style="cursor: pointer;">

                                        <table>
                                          <tr>
                                            <td><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</td>


                                            <td class="syncable">(<span><?php echo $newsBlock[$value]['comments_count'] ?></span>)</td>

                                           </tr>
                                         </table>
                                      </td>
                                      <td><i class="fa fa-tags" aria-hidden="true"></i> <?php echo strtolower($newsBlock[$value]['category'])?></td>
                                      <td><i class="fa fa-share" aria-hidden="true"></i> Share</td>
                                    </tr>
                                  </table>
                                </div>
                                <hr/>
                                <!----------------------------------------------------------------------------------------------------------
                                Comments View
                                 --------------------------------------------------------------------------------------------------------- -->

                                <div class="comment-view opayed" style="width: 100%">
                                    <table style="width: 100%">
                                      <?php

                                          if($newsBlock[$value]['comments_count'] > 0)
                                          {

                                          $comments = $newsBlock[$value]['comments'];

                                          for($c = 0; $c < count($comments); $c++)
                                          {
                                      ?>
                                        <tr>
                                          <td>
                                              <span style="padding-left: 10px !important"><?php echo $comments[$c]['comment']; ?></span>
                                              <div>
                                                
                                                  <ul class="list-unstyled list-inline" style="background: grey;color: white;padding-left: 10px !important">
                                                    <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo $comments[$c]['fullname']; ?></li>
                                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $comments[$c]['email']; ?></li>
                                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $comments[$c]['timestamp']; ?></li>
                                                  </ul>
                                              </div>
                                              <hr/>
                                          </td>
                                        </tr>

                                          <?php
                                        }
                                      }
                                        ?>
                                    </table>
                                </div>



                                <div class="comment-section">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h3><span>Leave</span> A Comment</h3>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                      <center>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <input class="form-control hidden" value="<?php echo $newsBlock[$value]['id'] ?>" type="text" id="newsID" name="newsID" required="" placeholder="Enter your name">
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                
                                    <div class="form-group">
                                      <center>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <input class="form-control" type="text" id="name" name="name" required="" placeholder="Enter your name">
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter email">
                                        </div>
                                      </div>
                                      </center>
                                    </div>
                                    <div class="form-group">
                                      <center>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <input class="form-control" type="text" id="subject" name="subject" required="" placeholder="Enter Subject">
                                        </div>
                                        <div class="col-md-6">
                                          <input class="form-control" type="text" id="number" name="number" required="" placeholder="Enter Number">
                                        </div>
                                      </div>
                                    </center>
                                    </div>
                                    <div class="form-group">
                                      <center>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <textarea class="form-control" id="message" name="message" required="" placeholder="Enter your comments"></textarea>
                                        </div>
                                      </div>
                                    </center>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-12">
                                         <button onclick="comment()">Send Message</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                          }

                            ?>

                        </div>
                  </div>

<div class="col-md-4">
<div class="panel">
                    <div class="panel-heading" style="text-align: left;">
                        <label for="newsCategory">
                        <h3 style="font-size: 30px !important">Categorize</h3>
                      </label>
                        <input style="border-radius: 50px" id="newsCategory" type="text" class="form-control" placeholder="SEARCH NEWS"
                               onkeyup="searchResult(this.value)">
                        <div class="searchResultPad">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table table-hover table-bordered">
                          <tr>
                            <td style='text-align: left'><a href='?newsCategory=all'>All</a></td>
                          </tr>

                            <?php
                            for ($c = 0; $c < count($categories); $c++) {
                                echo "<tr>";
                                echo "<td style='text-align: left'><a href='?newsCategory=". $categories[$c]['id'] ."'>" . $categories[$c]['category'] . "</a></td>";
                                echo "</tr>";
                            }

                            ?>

                        </table>
                    </div>
                </div>


                <div class="panel">
                    <div class="panel-heading" style="text-align: left;">
                        <label for="newsCategory">
                        <h3 style="font-size: 30px !important">Popular News</h3>
                      </label>
                    </div>
                    <div class="panel-body">

                        <table class="table table-hover">

                            <?php

                            for ($c = 0; $c < count($newsBlock_latest); $c++) {
                                
                                echo "<tr>";
                                echo "<td>";
                                echo "<a href='?newsID=". $newsBlock_latest[$c]['id'] ."'>";

                                ?>

<div class="image-container" style="background: url('http://localhost/cmb/<?php echo $newsBlock_latest[$c]['i_path'] ?>');width: 100%; height: 250px"></div>
                            <div class="panel">
                                <div class="panel-heading" style="text-align: left">
                                    <table>
                                      <tr>
                                        <td>
                                          <div class="dateNtime">
                                              <?php

                                               $archives = explode('/', $newsBlock_latest[$c]['archive']);

                                               echo $archives[0]. '<br/>' .$archives[1];


                                               ?>
                                          </div>
                                        </td>
                                        <td>
                                          <h3 style="text-align: left;">
                                              <?php echo $newsBlock_latest[$c]['title'] ?>
                                          </h3>
                                        </td>
                                      </tr>
                                      </table>
                                      <p>
                                        <?php echo substr($newsBlock_latest[$c]['content'], 0, 100) ?>
                                      </p>
                                  </div>
                            <?php
                                echo "</a></td>";
                                echo "</tr>";
                            }

                            ?>

                        </table>
                    </div>
                </div>
</div>
</div>
</div>

<?php init_footer(['http://localhost/cmb/assets/js/news.js']) ?>

