<?php
header('Content-type: image/png');
echo readfile('/img/42.png');
//curl --head http://e3r11p1.42.fr:8100/ex05/read_img.php
?>