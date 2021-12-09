<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
// require 'SxGeo.php';
// require 'SxGeoCity.dat';

class ContactModel {
    private $name;
    private $email;
    private $age;
    private $message;
    private $getip;
    // private $city;
    private $body;

    public function setData($name, $email, $age, $message, $getip) {
        $this->name = trim(filter_var($name, FILTER_SANITIZE_STRING));
        $this->email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
        $this->age = trim(filter_var($age, FILTER_SANITIZE_NUMBER_INT));
        $this->message = trim(filter_var($message, FILTER_SANITIZE_STRING));
        $this->getip = $getip;
        $this->body = "Имя: ".$this->name.
        " почта: ".$this->email.
        " возрост: ".$this->age.
        " текст сообщения: ".$this->message."<br>!!!".$this->getip . "!!!";
    }

    public function validForm() {
        if(strlen($this->name) < 3)
            return "Имя слишком короткое";
        else if(strlen($this->email) < 3)
            return "Email слишком короткий";
        else if(!is_numeric($this->age) || $this->age <= 12 || $this->age > 150)
            return "Вы ввели не верный возраст";
        else if(strlen($this->message) < 10)
            return "Сообщение слишком короткое";
        else
            return "Верно";
    }



    // public function mail() {
    //     $to = "andriisudak@mail.ru";
    //     $message = "Имя: " . $this->name . ". Возраст: " . $this->age . ". Сообщение: " . $this->message;
    //
    //     $subject = "=?utf-8?B?".base64_encode("Сообщение с нашего сайта")."?=";
    //     $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
    //     $success = mail($to, $subject, $message, $headers);
    //
    //     if(!$success)
    //         return "Сообщение было не отправлено";
    //     else
    //         return "Сообщение было отправлено успешно";;
    // }

    public function mailer() {
        $mail = new PHPMailer(TRUE);

        try {
            //Server settings
            // $mail->SMTPDebug = 1;                      //Enable verbose debug output
            $mail->CharSet = "UTF-8";
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl://mail.adm.tools';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '************';                     //SMTP username
            $mail->Password   = '************';                               //SMTP password
            $mail->SMTPSecure = 'SSL';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above465

            //Recipients
            $mail->setFrom('*****');
            $mail->addAddress('*****');     //Add a recipient
            $mail->addAddress('*****');


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Leter from'.$this->name;
            $mail->Body    = $this->body;
            $mail->AltBody = strip_tags($this->body);

            $mail->send();
            return 'Сообщение было отправлено<br>'. $this->body;
        } catch (Exception $e) {
            echo "Сообщение не может быть отправлено. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}










//
//
//
//
//
//
// <?php
//
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
//
// class ContactModel {
//     private $name;
//     private $email;
//     private $age;
//     private $message;
//     private $body;
//
//     public function setData($name, $email, $age, $message) {
//         $this->name = trim(filter_var($name, FILTER_SANITIZE_STRING));
//         $this->email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
//         $this->age = trim(filter_var($age, FILTER_SANITIZE_NUMBER_INT));
//         $this->message = trim(filter_var($message, FILTER_SANITIZE_STRING));
//         $this->body = "Имя: ".$this->name." почта: ".$this->email." возрост: ".$this->age." текст сообщения: ".$this->message;
//     }
//
//     public function validForm() {
//         if(strlen($this->name) < 3)
//             return "Имя слишком короткое";
//         else if(strlen($this->email) < 3)
//             return "Email слишком короткий";
//         else if(!is_numeric($this->age) || $this->age <= 12 || $this->age > 150)
//             return "Вы ввели не верный возраст";
//         else if(strlen($this->message) < 10)
//             return "Сообщение слишком короткое";
//         else
//             return "Верно";
//     }
//
//     public function mail() {
//         $to = "andriisudak@mail.ru";
//         $message = "Имя: " . $this->name . ". Возраст: " . $this->age . ". Сообщение: " . $this->message;
//
//         $subject = "=?utf-8?B?".base64_encode("Сообщение с нашего сайта")."?=";
//         $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
//         $success = mail($to, $subject, $message, $headers);
//
//         if(!$success)
//             return "Сообщение было не отправлено";
//         else
//             return "Сообщение было отправлено успешно";;
//     }
//
//     public function mailer() {
//         $mail = new PHPMailer(TRUE);
//
//         try {
//             //Server settings
//             // $mail->SMTPDebug = 1;                      //Enable verbose debug output
//             $mail->CharSet = "UTF-8";
//             $mail->isSMTP();                                            //Send using SMTP
//             $mail->Host       = 'ssl://mail.adm.tools';                     //Set the SMTP server to send through
//             $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//             $mail->Username   = 'admin@andriisudak.fun';                     //SMTP username
//             $mail->Password   = '7jePp!Q7zMmTB5HL';                               //SMTP password
//             $mail->SMTPSecure = 'SSL';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//             $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above465
//
//             //Recipients
//             $mail->setFrom('admin@andriisudak.fun');
//             $mail->addAddress('admin@andriisudak.fun');     //Add a recipient
//             $mail->addAddress('andriisudak@mail.ru');
//
//
//             //Content
//             $mail->isHTML(true);                                  //Set email format to HTML
//             $mail->Subject = 'Leter from'.$this->name;
//             $mail->Body    = $this->body;
//             $mail->AltBody = strip_tags($this->body);
//
//             $mail->send();
//             echo 'Сообщение было отправлено';
//         } catch (Exception $e) {
//             echo "Сообщение не может быть отправлено. Mailer Error: {$mail->ErrorInfo}";
//         }
//     }
//
//
//     public function whatsApp() {
//       $data = [
//             'phone' => '79296829953', // Телефон получателя
//             'body' => 'Привет, Андрей!', // Сообщение $this->body;
//         ];
//         $json = json_encode($data); // Закодируем данные в JSON
//         // URL для запроса POST /message
//         $token = '3d1jkmiuocrycmb4';
//         $instanceId = '314537';
//         $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
//         // Сформируем контекст обычного POST-запроса
//         $options = stream_context_create(['http' => [
//                 'method'  => 'POST',
//                 'header'  => 'Content-type: application/json',
//                 'content' => $json
//             ]
//         ]);
//         // Отправим запрос
//         $result = file_get_contents($url, false, $options);
// }}
