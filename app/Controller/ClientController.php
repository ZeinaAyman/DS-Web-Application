<?php
include_once('Controller.php') ;
include_once('../../app/View/ViewClient.php');
  class ClientController extends Controller
  {
      public $msg;
      public $success;
      public function C_ContactForm()
      {
        $error = false;

          if(isset($_POST['submit']))
          {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $this->msg="-Please enter a valid email <br>";
              //echo "-Please enter a valid email<br>";
              $error = true;
            }
            if(strlen($phone) > 12 || strlen($phone) < 11){
              $this->msg="-Please enter a valid Phone Number<br>";
              //echo "-Please enter a valid name <br>";

              $error = true;
            }

            if(!$error){
              $this->success=true;

              $EMP = new Client();
              $EMP->Feed($name,$email,$phone,$message);
              $this->Model->connect();
              $this->Model->AddContactMsg($EMP);
            }
          }
      }

      public function C_NewsletterForm()
      {
        $error = false;

          if(isset($_POST['submit']))
          {
            $name = $_POST["name"];
            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $this->msg="-Please enter a valid email <br>";
              //echo "-Please enter a valid email<br>";
              $error = true;
            }

            if(!$error){
              $this->success=true;
              $EMP = new Client();
              $EMP->Feed($name,$email,0,0);
              $this->Model->connect();
              $this->Model->AddNewsletter($EMP);
            }
          }
      }

      public static function sendMail($email,$subject,$message,&$email_msg,$msg_id,&$err){
        $email_msg = "";
        $email_send_to = "";
        $smtp_emails = MDB::query('SELECT * FROM smtp_emails');
        $minSize = $smtp_emails[0];
        foreach ($smtp_emails as $e) {
          $emails_size = MDB::query('SELECT count(id) as cnt FROM smtp_emails_sent WHERE from_email_id=:id',array(':id'=>$e['id']))[0]['cnt'];
          $emails_capacity = 100;
          $minSize_size = MDB::query('SELECT count(id) as cnt FROM smtp_emails_sent WHERE from_email_id=:id',array(':id'=>$minSize['id']))[0]['cnt'];
          if($minSize_size > $emails_size){
            $minSize = $e;
          }
        }
        echo "<script> console.log('2');</script>";
        $email_send_to = $minSize['email'];
        $email_password =  $minSize['password'];

        $mail = new PHPMailer(true);
        echo "<script> console.log('3');</script>";
        try {
            //Server settings

            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $email_send_to;                     // SMTP username
            $mail->Password   = $email_password;                               // SMTP password
            $mail->Port       = 587;                                    // TCP port to connect to
            //$mail->SMTPDebug = 2; //Alternative to above constant
            echo "<script> console.log('4');</script>";
            //Recipients
            $mail->SetFrom('zeina.ayman@hotmail.com', 'Design Solution');
            $mail->AddReplyTo('zeina.ayman@hotmail.com', 'Design Solution');
            $mail->addAddress($email, $email_send_to);
            $mail->SMTPOptions = array('ssl'=>array('verify_peer'=>false, 'verify_peer_name'=>false, 'allow_self_signed'=>true));
            //$mail->SMTPDebug = 2;
            echo "<script> console.log('5');</script>";
           // Add a recipient
          //$message = '<html></html>';
          //$message_without_html= "";
            // Content
            $mail->isHTML(true);
            echo "<script> console.log('6');</script>";                                  // Set email format to HTML
            $mail->Subject = $subject;

            $mail->Body    = $message;
          //$mail->AltBody = $message_without_html;

            if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              echo '<br>Message has been sent';
            }

            $email_msg .= "Email Sent to ".$email;
            $time_added = date('Y-m-d H:i:s');

            $testing= MDB::query('INSERT INTO smtp_emails_sent VALUES(\'\',:sent_to,:from_email_id,:msg_id,:date_time)',array(':sent_to'=>$email,':from_email_id'=>$minSize['id'],':date_time'=>$time_added,":msg_id"=>$msg_id));
            echo $testing;
        }catch (phpmailerException $e) {
          echo "<script> console.log('9');</script>";
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
      }
         catch (Exception $e) {
            $err = true;
            $email_msg .= "Message could not be sent. Mailer Error: {$mail->ErrorInfo} - ({$email}) - Using({$mail->Username})\\n";
        }
      }

  }
 ?>
