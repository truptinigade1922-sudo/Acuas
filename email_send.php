<?php 
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];


// $message = "
// <table border='1' cellspacing='0' cellpadding='10'>
//     <h3>New Enquiry Received</h3>
//              <p><b>Name:</b> $name</p>
//             <p><b>Email:</b> $email</p>
//              <p><b>Phone:</b> $phone</p>
//              <p><b>Subject:</b> $subject</p>
//             <p><b>Message:</b><br>$message</p>
// </table>
// ";

// $mail = new PHPMailer(true);

// try {
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     // $mail->Username   = 'surajkrkushavaha@gmail.com'; 
//     // // $mail->Password   = 'zhdm jtun zvko yxeg';   
//     // $mail->Password   = 'zhdmjtunzvkoyxeg';   

//     $mail->Username = 'truptinigade1922@gmail.com';
//     // $mail->Password   = 'zhdm jtun zvko yxeg';   
//     $mail->Password = 'qjzj wscc fmpu zjwd';

//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;

//     // $mail->addAddress("surajmca2022_93@ncrdsims.edu.in");  
//     $mail->addAddress("truptimca2022_106@ncrdsims.edu.in");

//     $mail->isHTML(true);
//     $mail->Subject = "Registration Successful!";
//     $mail->Body = $message;

//     $mail->send();

//     //echo "<h3 style='color:green; text-align:center'>Mail Sent Successfully!</h3>";
//     echo "
//             <!DOCTYPE html>
//             <html>
//             <head>
                // <meta http-equiv='refresh' content='1;url=http://localhost/acuas/index.html' />
//             </head>
//             <body>
//                 <h3 style='color:green; text-align:center'>
//                     Mail Sent Successfully!<br>
//                     You will be redirected to Home Page in 1 seconds...
//                 </h3>
//             </body>
//             </html>
//             ";


// } catch (Exception $e) {
//     echo "<h3 style='color:red; text-align:center'>Mail Error: {$mail->ErrorInfo}</h3>";
// }
// ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email body (ONLY FORMAT IMPROVED)
$message = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color:#f4f6f8;
            padding:20px;
        }
        .mail-box{
            max-width:600px;
            margin:auto;
            background:#ffffff;
            border-radius:8px;
            overflow:hidden;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        .mail-header{
            background:#0d6efd;
            color:#ffffff;
            padding:15px;
            text-align:center;
        }
        .mail-body{
            padding:20px;
        }
        table{
            width:100%;
            border-collapse:collapse;
        }
        td{
            padding:10px;
            border-bottom:1px solid #eeeeee;
        }
        .label{
            font-weight:bold;
            width:30%;
        }
        .mail-footer{
            background:#f1f1f1;
            text-align:center;
            padding:10px;
            font-size:13px;
            color:#555;
        }
    </style>
</head>

<body>
<div class='mail-box'>
    <div class='mail-header'>
        <h2>New Enquiry Received</h2>
    </div>

    <div class='mail-body'>
        <table>
            <tr>
                <td class='label'>Name</td>
                <td>$name</td>
            </tr>
            <tr>
                <td class='label'>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td class='label'>Phone</td>
                <td>$phone</td>
            </tr>
            <tr>
                <td class='label'>Subject</td>
                <td>$subject</td>
            </tr>
            <tr>
                <td class='label'>Message</td>
                <td>$message</td>
            </tr>
        </table>
    </div>

    <div class='mail-footer'>
        This enquiry was submitted from your website contact form.<br>
        © ".date('Y')." Your Company Name
    </div>
</div>
</body>
</html>
";

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'truptinigade1922@gmail.com';
    $mail->Password   = 'qjzj wscc fmpu zjwd';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Mail settings
    $mail->setFrom('truptinigade1922@gmail.com', 'Website Enquiry');
    $mail->addAddress('truptimca2022_106@ncrdsims.edu.in');

    $mail->isHTML(true);
    $mail->Subject = 'New Website Enquiry';
    $mail->Body    = $message;

    $mail->send();

    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv='refresh' content='1;url=http://localhost/acuas/index.html'>
    </head>
    <body>
        <h3 style='color:green; text-align:center'>
            Mail Sent Successfully!<br>
            You will be redirected to Home Page in 1 second...
        </h3>
    </body>
    </html>
    ";

} catch (Exception $e) {
    echo "<h3 style='color:red; text-align:center'>
            Mail Error: {$mail->ErrorInfo}
          </h3>";
}
?>
