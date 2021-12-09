<?php
    class Home extends Controller {

        public function index() {
          $this->view('home/index');
        }




        public function contact() {
          $data = [];
        if(isset($_POST['name'])) {
            $mail = $this->model('ContactModel');
            $mail->setData($_POST['name'], $_POST['email'], $_POST['age'], $_POST['message']);

            $isValid = $mail->validForm();
            if($isValid == "Верно"){
                $data['message1'] = $mail->mailer();
                $data['message2'] = "Message was sent.";

            } else
                $data['message1'] = $isValid;
        }

        // $data['message'] = "Проверка";
        $this->view('home/contact', $data);

          // $this->view('home/contact');
        }
    }
