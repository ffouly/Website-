	<?php
				$fname = $_POST['firstname'];
				$lname = $_POST['lastname'];
				$email = $_POST['email'];
				$Message = $_POST['message'];
				$formcontent="From: $fname $lname \n Message: $message";
				$recipient = "farah.fouly@hotmail.com";
				$subject = $_POST['subject'];
				$mailheader = "From: $fname $lname \r\n";
				
				mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
				echo "Thank You!" . " -" . "<a href='Contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
				?>