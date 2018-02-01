<?php

if(!$_POST) exit;

function tommus_email_validate($email) { 
	return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
}

$name = $_POST['name']; $email = $_POST['email']; $phone = $_POST['phone']; $comments = $_POST['comments'];


if(trim($name) == '') {

	exit('<div class="error_message">Fyll i ditt namn.</div>');

} else if(trim($name) == 'Name') {

	exit('<div class="error_message">>Fyll i ditt namn.</div>');

} else if(trim($email) == '') {

	exit('<div class="error_message">Fyll i en korrekt mail-adress.</div>');

} else if(!tommus_email_validate($email)) {

	exit('<div class="error_message">Det blev lite fel med mail-adressen...?</div>');

} else if(trim($comments) == 'Your Message') {

	exit('<div class="error_message">Fyll i ditt meddelande.</div>');

} else if(trim($comments) == '') {

	exit('<div class="error_message">Fyll i ditt meddelande.</div>');
	
} else if( strpos($comments, 'href') !== false ) {

	exit('<div class="error_message">Låt länkar vara text.</div>');
	
} else if( strpos($comments, '[url') !== false ) {

	exit('<div class="error_message">Låt länkar vara text.</div>');

} if(get_magic_quotes_gpc()) { $comments = stripslashes($comments); }


$address = 'frida@remediagroup.se';


$e_subject = 'Du har blivit kontaktad av ' . $name . '.';

$e_body = "Du har blivit kontaktad av $name från ditt kontaktformulär, deras meddelande kommer nedanför." . "\r\n" . "\r\n";

$e_content = "\"$comments\"" . "\r\n" . "\r\n";

$e_reply = "Du kan kontakta $name via mail, $email (eller via telefon: $phone)";


$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );


$headers = "From: $email" . "\r\n";

$headers .= "Reply-To: $email" . "\r\n";

$headers .= "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";

$headers .= "Content-Transfer-Encoding: quoted-printable" . "\r\n";


if(mail($address, $e_subject, $msg, $headers)) { echo "<fieldset><div id='success_page'><p>Tack $name, ditt meddelande har skickats till oss.</p></div></fieldset>"; }