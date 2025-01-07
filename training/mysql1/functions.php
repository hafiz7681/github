<?php
	$conn = mysqli_connect('localhost', 'root', 'hafiz7681', 'myDataBase');

	function query($data) {
		global $conn;
		$result = mysqli_query($conn, $data);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

?>