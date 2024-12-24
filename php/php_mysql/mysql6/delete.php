<?php
	require 'functions.php';
	$massage_work = "<script type='text/javascript'>
						document.location.href = 'index.php';
						</script>";
	$massage_error = "<script type='text/javascript'>
						alert('Data gagal dihapus!');
						document.location.href = 'index.php';
						</script>";

	if( delete($_GET) > 0 ) {
		echo $massage_work;
	} else {
		echo $massage_error;
	}

?>