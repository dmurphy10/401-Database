<?php

if ( $_POST['payload'] ){
	shell_exec( 'cd /home/dillon/html/ && git reset --hard HEAD && git pull' );
}

?>
