<?php

$fName = $_GET['fName'];
$mName = $_GET['mName'];
$lName = $_GET['lName'];
$dob = $_GET['dob'];
$gender = $_GET['gender'];
$nationality = $_GET['nationality'];
$birthPlace = $_GET['bPlace'];
$religion = $_GET['religion'];
$language = $_GET['language'];
$address1 = $_GET['address1'];
$address2 = $_GET['address2'];
$city = $_GET['city'];
$state = $_GET['state'];
$country = $_GET['country'];
$email = $_GET['email'];
$landLine = $_GET['landLine'];
$mobile = $_GET['mobile'];

$fullName = $fName . ' ' . $lName;


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
                           <caption>Online Application</caption>         
                           <tr>
                               <td class="highlited">Full Name</td>
                               <td>' . $fullName . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Date Of Birth</td>
                               <td>' . $dob . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Gender</td>
                               <td>' . $gender . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Nationality</td>
                               <td>' . $nationality . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Birth Place</td>
                               <td>' . $birthPlace . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Religion</td>
                               <td>' . $religion . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Language</td>
                               <td>' . $language . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Address 1</td>
                               <td>' . $address1 . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Address 2</td>
                               <td>' . $address2 . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">City</td>
                               <td>' . $city . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">State</td>
                               <td>' . $state . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Country</td>
                               <td>' . $country . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Email</td>
                               <td>' . $email . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Land Line</td>
                               <td>' . $landLine . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Mobile</td>
                               <td>' . $mobile . '</td>
                           </tr>
                           <tr>
                               <td class="highlited">Date Applied</td>
                               <td>' . date('Y/M/d') . '</td>
                           </tr>
               </body>
        </html>     ';


$mail = new PHPMailer;

$mail->setFrom($email, $fullName);
$mail->addAddress($to, 'Cambridge International School');

foreach ($forCC as $toEmail => $toName) {
    $mail->AddCC($toEmail, $toName);
}

$mail->Subject = 'Online Application Form From ' . $fullName;
$mail->isHTML(true);
$mail->Body = $body;


if ($mail->send()) {
    $result = true;
} else {
    $result = false;
}


echo $result;
