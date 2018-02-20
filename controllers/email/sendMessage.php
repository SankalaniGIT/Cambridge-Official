<?php
//Database includes
require('../../helpers/database.class.php');

$contact_msg = new DBConnection();
$conn_msg = $contact_msg->connect();

$name = '';
$email = '';
$message = '';
$status = '';


$uniqueId = $_POST['uniqueId'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $IP_address = $_SERVER['REMOTE_ADDR'];
    $browser_type = $_SERVER['HTTP_USER_AGENT'];

    //Assigning Session variable

    $_SESSION['unique'] = $subject;

    $table = 'message';

    $query_msg = "INSERT INTO $table VALUES('','$name','$email','$subject','$message','$IP_address','$browser_type','0','')";

    $inserted = mysqli_query($conn_msg, $query_msg);

    if ($inserted) {

        require('./PHPMailer/PHPMailerAutoload.php');

        $to = "info@cambridge.lk";
        $forCC = array(
             'stefan.it@cambridge.lk ' => 'Stefan',
        );


        $body = '<html>
                 <head>
                 <style>
                 caption{
                 background-color: black;color: white;text-weight: bolder;text-align: center;height: 40px;padding-top: 15px;font-size: 23px;
                 }
                 table{
                  width: 100%;
                 border: 1px solid black;
                 box-shadow: 0 0 4px 6px #ccc;
                 }
                 table td{padding-left : 5px;font-size: 20px;border: 1px solid black}
                 table td.highlighted{
                 background-color: #8c8c8c;
                 color: white;
                 }
                 </style>
              </head>
               <body>
                     <table class="table table-responsive table-striped">
                           <caption>Message Query</caption>         
                           <tr>
                               <td class="highlited">Full Name</td>
                               <td>' . $name . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Email Address</td>
                               <td>' . $email . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Message</td>
                               <td>' . $message . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">IP Address</td>
                               <td>' . $IP_address . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">User Browser</td>
                               <td>' . $browser_type . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Date Sent</td>
                               <td>' . date('Y/M/d') . '</td>
                           </tr>                       
               </body>
        </html>     ';


        $mail = new PHPMailer;

        $mail->setFrom($email, $name);
        $mail->addAddress($to, 'Cambridge International School');

        foreach ($forCC as $toEmail => $toName) {
            $mail->AddCC($toEmail, $toName);
        }

        $mail->Subject = 'Online Inquiry  From ' . $fullName;
        $mail->isHTML(true);
        $mail->Body = $body;


        if ($mail->send()) {
            header('Location: ../../?msgStatus=' . $uniqueId . 'sS&bgIdentifier=00ff00#contact');
        } else {
            header('Location: ../../?msgStatus=' . $uniqueId . 'uS&bgIdentifier=ff0000#contact');
        }


    } else {
        header('Location: ../../?msgStatus=' . $uniqueId . 'uS&bgIdentifier=ff0000#contact');
    }
}
