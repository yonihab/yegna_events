<?php

class Mail 
{

	public static function verify($to,$name, $hash){
		// prepare email to sent
		$subject = "Account varification for Yegnaevents.com";
		$message_body = `
		Hello ` . $name . `,

		Thank you for signing up!

		Please use this link to activate your account:

		http://localhost/yegna_events-mvc/verify/h/` . $hash. ` 
		`;

		mail($to, $subject, $message_body);

	}

	public static function rest($to, $hash){

	}

}
