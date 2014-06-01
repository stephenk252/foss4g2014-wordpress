<?php

function get_schedule() {
  $sids = array(
    'first'   => 67,
    '11.1.1'  =>  546,
    '11.1.2'  =>  798,
    '11.1.3'  =>  803,
    '11.2.1'  =>  816,
    '11.2.2'  =>  872,
    '11.2.3'  =>  965,
    '11.3.1'  =>  888,
    '11.3.2'  =>  334,
    '11.3.3'  =>  900,
    '11.4.1'  =>  891,
    '11.4.2'  =>  744,
    '11.4.3'  =>  844,
    '11.5.1'  =>  848,
    '11.5.2'  =>  808,
    '11.5.3'  =>  842,
    '11.7.1'  =>  875,
    '11.7.2'  =>  1001,
    '11.7.3'  =>  884,
    '11.8.1'  =>  895,
    '11.8.2'  =>  922,
    '11.8.3'  =>  920,
    '11.9.2'  =>  912,
    '11.9.3'  =>  856,
    '12.1.1'  =>  785,
    '12.1.2'  =>  378,
    '12.1.3'  =>  1022,
    '12.2.1'  =>  890,
    '12.2.2'  =>  781,
    '12.2.3'  =>  343,
    '12.3.1'  =>  988,
    '12.3.2'  =>  753,
    '12.3.3'  =>  719,
    '12.4.1'  =>  786,
    '12.4.2'  =>  337,
    '12.4.3'  =>  833,
    '12.5.1'  =>  997,
    '12.5.2'  =>  931,
    '12.5.3'  =>  1017,
    '12.7.1'  =>  974,
    '12.7.2'  =>  962,
    '12.7.3'  =>  978,
    '12.8.1'  =>  990,
    '12.8.2'  =>  879,
    '12.8.3'  =>  986,
    '12.9.1'  =>  742,
    '12.9.2'  =>  954,
    '13.1.1'  =>  933,
    '13.1.2'  =>  968,
    '13.1.3'  =>  810,
    '13.2.1'  =>  827,
    '13.2.2'  =>  737,
    '13.2.3'  =>  659,
    '13.3.1'  =>  850,
    '13.3.2'  =>  887,
    '13.3.3'  =>  739,
    '13.4.1'  =>  778,
    '13.4.2'  =>  830,
    '13.4.3'  =>  1013,
    '13.5.1'  =>  735,
    '13.5.2'  =>  928,
    '13.5.3'  =>  975,
    '13.7.1'  =>  1023,
    '13.7.2'  =>  964,
    '13.7.3'  =>  845,
    '13.8.1'  =>  889,
    '13.8.2'  =>  906,
    '13.8.3'  =>  672,
    '13.9.1'  =>  977,
    '13.9.2'  =>  751,
    '13.9.3'  =>  605,
    '21.1.1'  =>  876,
    '21.1.2'  =>  911,
    '21.1.3'  =>  979,
    '21.2.1'  =>  907,
    '21.2.2'  =>  832,
    '21.2.3'  =>  477,
    '21.3.1'  =>  825,
    '21.3.2'  =>  923,
    '21.3.3'  =>  812,
    '21.4.1'  =>  834,
    '21.4.2'  =>  745,
    '21.4.3'  =>  863,
    '21.5.1'  =>  704,
    '21.5.2'  =>  734,
    '21.5.3'  =>  981,
    '21.7.1'  =>  956,
    '21.7.2'  =>  790,
    '21.7.3'  =>  793,
    '21.8.1'  =>  953,
    '21.8.2'  =>  1016,
    '21.8.3'  =>  862,
    '22.1.1'  =>  971,
    '22.1.2'  =>  909,
    '22.1.3'  =>  818,
    '22.2.1'  =>  838,
    '22.2.2'  =>  873,
    '22.2.3'  =>  1024,
    '22.3.1'  =>  796,
    '22.3.2'  =>  985,
    '22.3.3'  =>  851,
    '22.4.1'  =>  746,
    '22.4.2'  =>  961,
    '22.4.3'  =>  840,
    '22.5.1'  =>  934,
    '22.5.2'  =>  1005,
    '22.5.3'  =>  885,
    '22.7.1'  =>  940,
    '22.7.2'  =>  841,
    '22.7.3'  =>  959,
    '22.8.1'  =>  807,
    '22.8.2'  =>  1008,
    '22.8.3'  =>  936,
    '22.9.1'  =>  992,
    '23.1.1'  =>  947,
    '23.1.2'  =>  831,
    '23.1.3'  =>  861,
    '23.2.1'  =>  980,
    '23.2.2'  =>  846,
    '23.2.3'  =>  819,
    '23.3.1'  =>  849,
    '23.3.2'  =>  382,
    '23.3.3'  =>  930,
    '23.4.1'  =>  549,
    '23.4.1'  =>  960,
    '23.4.1'  =>  944,
    '23.5.1'  =>  996,
    '23.5.2'  =>  899,
    '23.5.3'  =>  596,
    '23.6.3'  =>  788,
    '23.7.1'  =>  935,
    '23.7.2'  =>  989,
    '23.7.3'  =>  823,
    '23.8.1'  =>  987,
    '23.8.2'  =>  507,
    '23.8.3'  =>  1015,
    '23.9.1'  =>  908,
    '31.1.1'  =>  853,
    '31.1.2'  =>  783,
    '31.1.3'  =>  782,
    '31.2.1'  =>  903,
    '31.2.2'  =>  902,
    '31.2.3'  =>  952,
    '31.3.1'  =>  966,
    '31.3.2'  =>  896,
    '31.3.3'  =>  794,
    '31.4.1'  =>  991,
    '31.4.2'  =>  784,
    '31.4.3'  =>  883,
    '31.5.1'  =>  787,
    '31.5.2'  =>  1014,
    '31.5.3'  =>  1000,
    '31.7.1'  =>  1010,
    '31.7.2'  =>  969,
    '31.7.3'  =>  871,
    '31.8.1'  =>  594,
    '31.8.2'  =>  1007,
    '31.8.3'  =>  547,
    '31.9.1'  =>  937,
    '32.2.1'  =>  932,
    '32.2.2'  =>  670,
    '32.2.3'  =>  523,
    '32.3.1'  =>  471,
    '32.3.2'  =>  1004,
    '32.3.3'  =>  837,
    '32.4.1'  =>  462,
    '32.4.2'  =>  925,
    '32.4.3'  =>  726,
    '32.5.1'  =>  754,
    '32.5.2'  =>  738,
    '32.5.3'  =>  938,
    '32.7.1'  =>  878,
    '32.7.2'  =>  973,
    '32.7.3'  =>  929,
    '32.8.1'  =>  346,
    '32.8.2'  =>  921,
    '32.9.1' =>  1021
  );

  for($a = 1; $a<=3; $a++) {
    for($c = 1; $c<=9; $c++) {
      echo '<div id="d'.$a.'t'.$c.'" class="sched-block row">';
      for($b = 1; $b<=3; $b++) {
        echo '<div class="col-sm-4 session"><h2>Session'.$b.'</h2>';
        for($d = 1; $d<=4; $d++) {
          $session = (string)$a.(string)$b.'.'.(string)$c.'.'.(string)$d;
          if(array_key_exists($session, $sids)) {
            echo '<div class="single-session">';

            $post = get_post($sids[$session]);
            $user = get_userdata($post->post_author);
            // $time = slot_time($b, $d);
            echo '<span class="session-time">';
            if($b==1){
              if($d==1) : echo '10:00 - 10:25';
              elseif($d==2) : echo '10:30 - 10:55';
              else : echo '11:00 - 11:55';
              endif;
            } elseif($b==2) {
              if($d==1) : echo '1:00 - 1:25';
              elseif($d==2) : echo '1:30 - 1:55';
              else : echo '2:00 - 2:25';
              endif;
            } else {
              if($d==1) : echo '3:00 - 3:25';
              elseif($d==2) : echo '3:30 - 3:55';
              else : echo '4:00 - 4:25';
              endif;
            }
            echo '</span><br>';
            echo '<span class="session-title">'.$post->post_title.'</span><br><span class="session-presenter">';
            echo $user->first_name.' '.$user->last_name;
            echo '</span></div>';

          }
        }
        echo '</div>';
      }
      echo '</div>';
    }
  }
}