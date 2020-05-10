	<?php
		if(!empty($_POST['submit'])) {
				$fname = $_POST['firstname'];
				$lname = $_POST['lastname'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$formcontent="From: $fname $lname \n Message: $message";
				$recipient = "farah.fouly@hotmail.com";
				$subject = $_POST['subject'];
				$mailheader = "From: $fname $lname \r\n";

				mail($recipient, $subject, $formcontent, $mailheader);

				if(mail($recipient, $subject, $formcontent, $mailheader)) {
				    $message = "Your contact information is received successfully.";
				    $type = "success";
				}
				else echo '<p> There is an error. Please try again.</p>';
			} 
			require_once "contact.php";
				
			echo "Thank You!" . " -" . "<a href='Contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
		?>