<?php
// результаты будем отправлять в формате XML
header('ContentType:text/xml');
// сгенерировать заголовок XML
echo '<?xml version="1.0" encoding="UTF8" standalone="yes"?>';
// создать элемент <response>
echo '<response>';
// получить имя пользователя
$name = $_GET['name'];
var_dump('nm==', $name);
// сгенерировать текст сообщения в зависимости
// от имени пользователя принятого от клиента
$userNames = array('CRISTIAN', 'BOGDAN', 'FILIP', 'MIHAI', 'YODA');
if (in_array(strtoupper($name), $userNames)) {
	echo 'Здравствуйте, мастер '.htmlentities($name).'!';
} else if (trim($name) == '') {
	echo 'Скажи мне, как зовут тебя, незнакомец!';
} else {
	echo htmlentities($name).', вы мне не знакомы!';
}

// закрыть элемент <response>
echo '</response>';
?>