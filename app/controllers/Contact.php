<?php
class Contact extends Controller {
  public function index() {

    $data = [];
  if(isset($_POST['name'])) {
      $mail = $this->model('ContactModel');
      $mail->setData(
          $_POST['name'],
          $_POST['email'],
          $_POST['age'],
          $_POST['message'],
          $_POST['getip']
      );

      $isValid = $mail->validForm();
      if($isValid == "Верно"){
          $data['message2'] = $mail->mailer();
          // $data['message2'] = "Message was sent.";

      } else
          $data['message1'] = $isValid;
  }

  // $data['message'] = "Проверка";
  $this->view('contact/index', $data);

    // $this->view('home/contact');
  }
}





//
//
// <?php
// class Contact extends Controller {
//   public function index() {
//     $data = [];
//   if(isset($_POST['name'])) {
//       $mail = $this->model('ContactModel');
//       $mail->setData($_POST['name'], $_POST['email'], $_POST['age'], $_POST['message']);
//
//       $isValid = $mail->validForm();
//       if($isValid == "Верно"){
//             // $data['message1'] = $mail->mailer();
//           $data['message1'] = $mail->whatsApp();
//           $data['message2'] = "Message was sent.";
//
//       } else
//           $data['message1'] = $isValid;
//   }
//
//   // $data['message'] = "Проверка";
//   $this->view('contact/index', $data);
//
//     // $this->view('home/contact');
//   }
// }
