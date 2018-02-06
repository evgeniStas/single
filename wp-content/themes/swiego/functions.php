<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 02.02.18
 * Time: 16:31
 */
add_action('wp_ajax_contact', 'contact_callback');
function contact_callback() {
    global $wpdb;
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];
    $copy = $_REQUEST["copy"];

    $to = get_option('admin_email');

    $txt = '';
    $txt .= '<div>';
    $txt .= "Name: " . $name. "<br>";
    $txt .= "Email: " . $email. "<br>";
    $txt .= "Message:  " . $message. "<br>";
    $txt .= "</div>";
    $subject = "Swiego";
    $headers = "From: office@swiego.com" . "\r\n" .
        "CC: office@swiego.com";
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $wpdb->insert('contacts', array(
        'email' => $email,
        'name' => $name,
        'message' => $message
    ));

    try {
        $mail->SMTPDebug = 2;                              // Enable verbose debug output

        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'office@swiego.com';                 // SMTP username
        $mail->Password = 'swiego55555';                           // SMTP password
        $mail->Charset = 'UTF-8';
        $mail->AddAddress($to, 'Swiego One');
        if($copy == true){
            $mail->AddAddress($email, $name);
        }
        //$mail->AddAddress('office@swiego.com', 'Swiego One');
        //$mail->AddAddress('ofir@swiego.com', 'Ofir shurdeker');
        //$mail->AddAddress('evgeni@swiego.com', 'evgeni fomenko');
        //$mail->AddAddress('gal@swiego.com', 'evgeni fomenko');
        $mail->setFrom('office@swiego.com', 'Swiego');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = '=?utf-8?B?' . base64_encode($subject) . '?=';
        $mail->Body = $txt;
        $mail->AltBody = $txt;
        //$last_id = $link->insert_id;
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        $errors[] = "Send mail sucsessfully";
    } catch (phpmailerException $e) {
        $errors[] = $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        $errors[] = $e->getMessage(); //Boring error messages from anything else!
    }
    wp_die();
}