<?php


// session_start();
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set('Europe/Berlin');
// require_once("captcha/AntiSpam.php");
// $q = AntiSpam::getRandomQuestion();

error_log('test');



// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

@require('config.php');
include("PHPMailer/Secureimage.php");

error_log($ihrname);

// get posted data
$data = json_decode(file_get_contents("php://input"));
  


//   $script_root = substr(__FILE__, 0,
//                         strrpos(__FILE__,
//                                 DIRECTORY_SEPARATOR)
//                        ).DIRECTORY_SEPARATOR;

$remote = getenv("REMOTE_ADDR");


// form-data should be deleted


if (isset($_POST['delete']) && $_POST['delete']){
	unset($_POST);
}

// form has been sent
if (isset($_POST["email"]) && $_POST["email"]) {

	error_log($_POST["email"]);

	// clean data
	// $anrede		= stripslashes($_POST["anrede"]);
	// $titel		= stripslashes($_POST["titel"]);
	// $titel		= (''!=$titel ? $titel.' ' : '');
	$vorname   	= stripslashes($_POST["vorname"]);
	$name      	= stripslashes($_POST["name"]);
	$firma		= stripslashes($_POST["firma"]);
	$telefon		= stripslashes($_POST["telefon"]);
	$email      = stripslashes($_POST["email"]);
	$betreff   	= stripslashes($_POST["betreff"]);
	$nachricht  = stripslashes($_POST["nachricht"]);


	$date = date("d.m.Y | H:i");
	$ip = $_SERVER['REMOTE_ADDR'];
	$UserAgent = $_SERVER["HTTP_USER_AGENT"];
	$host = getHostByAddr($remote);


	if(''!=$cfg['Badwordfilter'] && 0!==$cfg['Badwordfilter'] && '0'!=$cfg['Badwordfilter']){
		$badwords = explode(',', $cfg['Badwordfilter']);			// the configured badwords
		$badwordFields = explode(',', $cfg['Badwordfields']);		// the configured fields to check for badwords
		$badwordMatches = array();									// the badwords that have been found in the fields
		
		if(0<count($badwordFields)){
			foreach($badwords as $badword){
				$badword = trim($badword);												// remove whitespaces from badword
				$badwordMatch = str_replace('%', '', $badword);							// take human readable badword for error-message
				$badword = addcslashes($badword, '.:/');								// make ., : and / preg_match-valid
				if('%'!=substr($badword, 0, 1)){ $badword = '\\b'.$badword; }			// if word mustn't have chars before > add word boundary at the beginning of the word
				if('%'!=substr($badword, -1, 1)){ $badword = $badword.'\\b'; }			// if word mustn't have chars after > add word boundary at the end of the word
				$badword = str_replace('%', '', $badword);								// if word is allowed in the middle > remove all % so it is also allowed in the middle in preg_match 
				foreach($badwordFields as $badwordField){
					if(preg_match('#'.$badword.'#is', $_POST[trim($badwordField)]) && !in_array($badwordMatch, $badwordMatches)){
						$badwordMatches[] = $badwordMatch;
					}
				}
			}		
			
			if(0<count($badwordMatches)){
				$fehler['Badwordfilter'] = "<span class='errormsg' style='display: block;'>Folgende Begriffe sind nicht erlaubt: ".implode(', ', $badwordMatches)."</span>";
			}
		}		
	}

	// there are NO errors > send mail
   if (!isset($fehler))
   {
		// ------------------------------------------------------------
		// -------------------- send mail to admin --------------------
		// ------------------------------------------------------------

		// ---- create mail-message for admin
	  $mailcontent  = "Folgendes wurde am ". $date ." Uhr per Kontakt-Formular auf www.rm-rieth-ev.de verschickt:\n" . "-------------------------------------------------------------------------\n\n";
		$mailcontent .= "Name: " . $vorname . " " . $name . "\n";
		$mailcontent .= "Firma: " . $firma . "\n\n";
		$mailcontent .= "E-Mail: " . $email . "\n";
		$mailcontent .= "Telefon: " . $telefon . "\n";
		$mailcontent .= "\nBetreff: " . $betreff . "\n";
		$mailcontent .= "Nachricht:\n" . $nachricht = preg_replace("/\r\r|\r\n|\n\r|\n\n/","\n",$nachricht) . "\n\n";


    	$mailcontent .= "\n\nIP Adresse: " . $ip . "\n";
		$mailcontent = strip_tags ($mailcontent);

		$success = false;

        // ---- send mail to admin
        if($smtp['enabled'] !== 0) {
            require_once __DIR__ . '/smtp.php';
            $success = SMTP::send(
                $smtp['host'],
                $smtp['user'],
                $smtp['password'],
                $smtp['encryption'],
                $smtp['port'],
                $email,
                $ihrname,
                $empfaenger,
                $betreff,
                $mailcontent,
                $smtp['debug']
            );
        } else {
            $success = sendMyMail($email, $vorname." ".$name, $empfaenger, $betreff, $mailcontent);
        }

    	// ------------------------------------------------------------
    	// ------------------- send mail to customer ------------------
    	// ------------------------------------------------------------
    	if(
			$success && 
			(
				2==$cfg['Kopie_senden'] || 																// send copy always
				(1==$cfg['Kopie_senden'] && isset($_POST['kopie']) && 1==$_POST['kopie'])		// send copy only if customer want to
			)
		){

    		// ---- create mail-message for customer
			$mailcontent  = "Vielen Dank für Ihre E-Mail. Wir werden schnellstmöglich darauf antworten.\n\n";
    		$mailcontent .= "Zusammenfassung: \n" .  "-------------------------------------------------------------------------\n\n";
    		$mailcontent .= "Name: " . $vorname . " " . $name . "\n";
    		$mailcontent .= "Firma: " . $firma . "\n\n";
    		$mailcontent .= "E-Mail: " . $email . "\n";
    		$mailcontent .= "Telefon: " . $telefon . "\n";
    		$mailcontent .= "\nBetreff: " . $betreff . "\n";
    		$mailcontent .= "Nachricht:\n" . str_replace("\r", "", $nachricht) . "\n\n";

    		$mailcontent = strip_tags ($mailcontent);

    		// ---- send mail to customer
            if($smtp['enabled'] !== 0) {
                SMTP::send(
                    $smtp['host'],
                    $smtp['user'],
                    $smtp['password'],
                    $smtp['encryption'],
                    $smtp['port'],
                    $empfaenger,
                    $ihrname,
                    $email,
                    "Ihre Anfrage",
                    $mailcontent,
                    array(),
                    $smtp['debug']
                );
            } else {
                $success = sendMyMail($empfaenger, $ihrname, $email, "Ihre Anfrage", $mailcontent);
            }
		}
		
		// redirect to success-page
		if($success){
			if($smtp['enabled'] === 0 || $smtp['debug'] === 0) {
    		    // echo "<META HTTP-EQUIV=\"refresh\" content=\"0;URL=".$danke."\">";
				// echo json_encode($data);

				// set response code - 201 sent
				http_response_code(201);

				// tell the user
				echo json_encode(array("message" => "Contact form was sent"));
	}

    		exit;
		}
		else{
			// set response code - 503 service unavailable
			http_response_code(503);

			// tell the user
			echo json_encode(array("message" => "Unable to send contact form."));
		}
	}
}
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to send contact form. Data is incomplete."));
}

?>

<?php

function sendMyMail($fromMail, $fromName, $toMail, $subject, $content){

	error_log('sendMyMail started');

	// $boundary = md5(uniqid(time()));
	$eol = PHP_EOL;

	// header
	$header = "From: =?UTF-8?B?".base64_encode(stripslashes($fromName))."?= <".$fromMail.">".$eol;
	$header .= "Reply-To: <".$fromMail.">".$eol;
	$header .= "MIME-Version: 1.0".$eol;
	$header .= "Content-type: text/plain; charset=utf-8";
	$message = $content;
	

	// subject
	$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

	// send mail
	return mail($toMail, $subject, $message, $header);
}

?>