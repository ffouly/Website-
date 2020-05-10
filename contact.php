	<?php
				

				$errors = '';
				$myemail = 'farah.fouly@hotmail.com';//<-----Put Your email address here.
				if(empty($_POST['firstname'])  || 
				   empty($_POST['lastname'])  || 
				   empty($_POST['email']) || 
				   empty($_POST['message']))
				{
				    $errors .= "\n Error: all fields are required";
				}

				$fname = $_POST['firstname'];
				$lname = $_POST['lastname'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				if (!preg_match(
				"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
				$email))
				{
				    $errors .= "\n Error: Invalid email address";
				}

				if( empty($errors)){
				
				$formcontent='From: $fname $lname \n Message: $message';
				$recipient = 'farah.fouly@hotmail.com';
				$subject = $_POST['subject'];
				$mailheader = 'From: $fname $lname \r\n';

				$mail_Sent = mail($recipient, $subject, $formcontent, $mailheader);

				if ($mail_sent == true){ ?>
			        <script language="javascript" type="text/javascript">
			        alert('Thank you for the message. We will contact you shortly.');
			        window.location = 'Contact.html';
			        </script>
			    <?php } else { ?>
			    <script language="javascript" type="text/javascript">
			        alert('Message not sent. Please, notify the site administrator farah.fouly@hotmail.com');
			        window.location = 'Contact.html';
			    </script>
			    <?php
			    }
			
			}
		?>