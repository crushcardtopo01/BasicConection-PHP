<?php

include 'database.php';

try {
    echo 'Hola';
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$sql = "SELECT * FROM User";			
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			
			print_r(json_encode(
				array(
						"state" => "200",
						"status_msg" => "OK",
						"data" => array()
					))) ;

} catch (PDOException $e) {
    return json_encode(
						array(
								"state" => "0",
								"status_msg" => "Connection Error",
								"data" => array()
							));
}