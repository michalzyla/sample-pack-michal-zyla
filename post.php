<?php
function showFormData() {
	$msg = '';
	foreach ($_POST as $key => $value) {
		if($key != 'submit') {
			$msg .= $key.': '.$value.'<br>';
		}
	}
	return $msg;
};

if(isset($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if(empty($name) || empty($email) || empty($phone) || empty($message)) {
		$msg = 'Brak danych do wyświetlenia.';
		echo json_encode(['code'=>404, 'msg'=>$msg]);
		exit;
	} else {
		$msg = 'Dziękujemy za wysłanie formularza z następującymi danymi: <br>';
		$msg .= showFormData();
		echo json_encode(['code'=>200, 'msg'=>$msg]);
	}
}
?>