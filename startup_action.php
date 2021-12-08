<?php
function smtp_mail($to, $subject, $message, $headers = '')
{	
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
require 'mailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "noreply1@ecell-iitkgp.org";
//Password to use for SMTP authentication
$mail->Password = "webmail1";
//Set who the message is to be sent from
$mail->setFrom('noreply1@ecell-iitkgp.org', $subject);
//Set an alternative reply-to address
//$mail->addReplyTo('pratish@ecell-iitkgp.org', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($to, $to);
//Set the subject line
$mail->addCC('alok.kumar@ecell-iitkgp.org');
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'ReTry';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Unable to send e-mail. Please contact the forum administrator with the following error message reported by the SMTP server: " . $mail->ErrorInfo;
    return false;
}
  return true;
}

ob_start();
require "db.php";
session_start();

if (isset($_POST['submit'])){
  
    
        $startup                  = $_POST['startup'];
        $founder                  = $_POST['founder'];
        $numberofcofounders       = $_POST['numberofcofounders'];
        $phone                    = $_POST['phone'];
        $email                    = $_POST['email'];
        $linkedin                 =$_POST['linkedin'];
        $city                     =$_POST['city'];
        $summary                  = $_POST['summary'];
        $sector                   = $_POST['sector'];
        $year                     =$_POST['year'];
        $website                  = $_POST['website'];
        $currentstage             = $_POST['currentstage'];
          $achievements           = $_POST['achievements'];
          $info=$_POST['info'];
          
       	 $filename=$_FILES['file']['name'];
	 $directory = getcwd().'/file/';
	  $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
      $file_ext = substr($filename, strripos($filename, '.')); // get file name
      $filesize = $_FILES["file"]["size"];
        // Rename file
        $newfilename = $email.$file_ext;
	
	
        
			  
			  $recipients = ( $email ); # Can be one or more emails

             $headers = "MIME-Version: 1.0\r\n";
             $headers = "From: Entrepreneurship Cell <noreply1@ecell-iitkgp.org>\r\n";
             $headers .= "Cc: alok.kumar@ecell-iitkgp.org \r\n";
             $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
             $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
             
              $body .="Hello, ".$founder." <br>Greetings from <a href='www.ecell-iitkgp.org'> Entrepreneurship Cell, IIT Kharagpur!</a><br><br>We have received your entry as a startup for Million-at-Stake 2020. Your startup is under scrutiny by our team on the basis of information provided by you. You will be informed once your startup is selected for second round soon. For more details, please visit our website <a href='https://ecell-iitkgp.org/millionatstake'>https://ecell-iitkgp.org/millionatstake</a><br><br>";
              $body .=" To know more about GES, visit <a href='https://www.ges.ecell-iitkgp.org/comingsoon/'>link </a><br>All the best!";

           move_uploaded_file($_FILES["file"]["tmp_name"], "./images/pitch_decks/".$newfilename);

				 $sql = "INSERT INTO `mas_startup` (startup,founder,numberofcofounders,phone,email,linkedin,city,summary,sector,year,website,file,currentstage,achievements,info) VALUES ('$startup','$founder','$numberofcofounders','$phone','$email','$linkedin','$city','$summary','$sector','$year','$website','$newfilename','$currentstage','$achievements','$info')";
				 if(!mysqli_query($db,$sql))
				{
					echo "Error: ".mysqli_error($db);
				}

				else
				{
						if(smtp_mail($recipients," Registration Confirmation for Million-at-Stake 2020",  $body,$headers)){
  		            echo "<script>alert('Thank you for registrating. Confirmation of your registration has been be mailed to you.');document.location.href='https://ecell-iitkgp.org/millionatstake';</script>";    
              } else{
                  echo "<script>alert('Unable to send the mail. Please contact technical coordinator.');document.location.href='https://ecell-iitkgp.org/millionatstake/index.php';</script>";
                }
          // echo "done";
					}
	 
  
	$email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $name = $_SESSION['name'];
  
}
  

?>
