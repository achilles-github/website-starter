<?php include ("../../configuration.php");
	// Only start sessions if they haven't been already to prevent errors
	if (empty($_SESSION)) {session_start();
}

// If 'data' var was received via POST from form-validation.js
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// There's not really a need for this line with modern browsers
	ob_start();

	// Open the div around the message
	$message = "<html><body><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><div style=\"color:#485363\">";
	$message .= "<img style='width:180px; margin-bottom:20px;' src='" . $domainName . "assets/elements/logo.png' alt='" . $websiteName . " Logo' />";
	$message .= "<table style='border:1px solid #96A1B2; color:#485363; border-collapse:collapse; text-align: left;' cellpadding='10'>";

	// Loop through every single post value
	foreach ($_POST as $key => $value) {
		// If it's not empty
		if (!empty($value)) {
			if ($key == "email" || $key == "Email") {
				$replyto = $value;
			}
			if ($key == "email_send_to") {
				if (strpos($value, ",") !== false) {
					$multipleEmails = true;
					$to = explode(",", $value);
				} else {
					$to = $value;
				}
			}
			if ($key == "email_subject") {
				$subject = $value;
				$message .= "<tr><th colspan='2'>" . $subject . "</th></tr>";
			}

			// See if it's a GA key, if it is, do nothing
			if ($key != "|ga" && $key != "PHPSESSID" && $key != "email_send_to" && $key != "email_subject") {
				// Change the name attributes to look a bit more human-readable
				$thisKey = str_replace("-", " ", str_replace("_", "|", $key));

				if (is_array($value)) {
					$message .= "<strong>" . $thisKey . ":</strong> ";

					// Setup a counter to determine the last iteration of the foreach loop
					$i = 0;

					// Find out how big the array that we're iterating through is...
					$len = count($value);

					// Iterate through the array
					foreach ($value as $key2 => $option) {
						if ($i < $len - 1) {
							// This is not the last value so add a comma.
							$message .= $option . ", ";
						} else {
							// This IS  the last value so add a full stop.
							$message .= $option . ".";
						}
					}
					$message = substr($message, 0, -1);
					$message .= "<br />";
					continue;
				}
				// Populate the message var
				$message .= "<tr><td style='color:#485363; border:1px solid #96A1B2;'><strong>" . $thisKey . "</strong></td><td style='color:#485363; border:1px solid #96A1B2;'>" . $value . "</td></tr>";
			}
		}
	}

	// TRIM THE URL:
	$input = trim($domainName, '/');

	// If scheme not included, prepend it
	if (!preg_match('#^http(s)?://#', $input)) {
		$input = 'http://' . $input;
	}

	$urlParts = parse_url($input);

	// remove www and update $domainName
	$domainName = preg_replace('/^www\./', '', $urlParts['host']);

	if ($to == "") {
		$to = "error@" . $domainName;
	}
	if ($subject == "") {
		$subject = "No Subject";
	}
	if ($replyto == "") {
		$replyto = "noreply@" . $domainName;
	}
	// Close the div around the message
	$message .= '</table></div></body></html>';

	// Mail variables
	$headers = "From: info@" . $domainName . "\r\n";
	$headers .= "Reply-To: " . $replyto . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// Attempt to send
	if ($multipleEmails == true) {
		foreach ($to as $recipient) {
			$sendMail = @mail($recipient, $subject, $message, $headers);
		}
	} else {
		$sendMail = @mail($to, $subject, $message, $headers);
	}

	// If it fails...
	if (!$sendMail) {
		// Terminate processing with error
		die("There was a problem sending the email");
	} else {
		// Terminate processing with success msg
		header("Location: http://loaidesign.co.uk/assets/includes/thank-you.php");
	}

	// As above, no real need for this line with modern browsers
	ob_flush();

	// Terminate
	die();
}
?>