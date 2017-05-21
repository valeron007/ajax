<?php

//var_dump($_POST['name']);
if ($_GET['country'] == 1) {
	echo json_encode(array("1" => "Москва",
			"2"                      => "Питер"));
} else if ($_GET['country'] == 1) {
	echo json_encode(array("1" => "Сиэтл",
			"2"                      => "Вашингтон"));
} else if ($_GET['country'] == 2) {
	echo json_encode(array("1" => "Париж",
			"2"                      => "Дендрен"));
}
