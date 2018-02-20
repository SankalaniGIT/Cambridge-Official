<?php

for ($i = 0; $i < $counter_news; $i++) {

    if (!isset($newsBlock[$i]['i_path'])) {

        echo "<div style='height: 350px !important;' class='panel'>
                 <div class='panel-body'></div>
                     <div>
                         <div class='text-danger'><strong><h3>No news @ the momenT ....... :(</h3></strong></div>
                    </div>
               </div>";

        break;

    }
    if (($i + 1) % 2 === 1) {
        $motion = 'fadeInLeft';
    } else {
        $motion = 'fadeInRight';
    }
    if (($counter_news) % 2 == 0) {
        echo "<div class='col-md-6 wow animated " . $motion . "' style='height: 225px' data-wow-offset='5' data-wow-duration='2s'
                data-wow-delay='0s'>";
    } else {
        if ($i == ($counter_news - 1)) {
            echo "<div class='col-md-12' style='height: 225px'> ";
        } else {
            echo "<div class='col-md-6' style='height: 225px'>";
        }

    }

    echo '<div class="newsBox row">';
    echo "<div class='col-md-6'><a href='" . $newsBlock[$i]['i_path'] . "' data-fancybox='news" . $i . "' class='more' title='" . $newsBlock[$i]['title'] . "' ><img src='" . $newsBlock[$i]['i_path'] . "' style='height: 225px'  alt='' class='img-thumbnail'/></a></div>
                              <div class='newsText col-md-6'>
                              <h3 class='text-info-title'>" . $newsBlock[$i]['title'] . "</h3>
                              <h4 class='text-info-subtitle'>" . $newsBlock[$i]['subtitle'] . "</h4>
                              <div class='itemNews'>
                              " . $newsBlock[$i]['content'] . "
                              </div>
                              <div>
                              <p class='text-primary author' style='float: left;padding-left: 10px'>" . $newsBlock[$i]['names'] . "</p>
                              <a href='javascript: void()' id='" . $newsBlock[$i]['id'] . "' onclick='javacript: viewThisNew(this.id)' class='read_more_link'>Read More</a>
                              </div>
                              <div class='newsFooter'>                                                      
                                    <p class='text-primary'>" . showTimeVal($newsBlock[$i]['date_posted'])[0] . "</p>
                                    <p class='text-info'>" . showTimeVal($newsBlock[$i]['date_posted'])[1] . "</p>
                              </div>
                              
                             
               </div></div></div>";
}