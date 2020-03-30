<?php

echo " if 대체 문법 <br/>";
$score = 100;
if($score == 100):
    ?>
    점수는 100점입니다.</br>
<?php
elseif($score==98):
?>
    점수는 98점입니다.</br>
<?php
else:
?>
    점수는 98점 미만입니다.</br>
<?php
endif;
?>