<?php
  class User extends Controller {
    public function reg() {

      $data = [];
      if(isset($_POST['name'])) {
        $user = $this->model('UserModel');//Определяем Модель

        // данные получаемые из формы
        $user->setData($_POST['name'], $_POST['email'], $_POST['pass'], $_POST['re_pass']);

        // проверяем ошибка
        $isValid = $user->validForm();
        // Если данные вверны то загружаем в БД
        if($isValid == "Верно"){
          $user->addUser();
        } else {
          $data['message1'] = $isValid;
        }
      }

      $this->view('user/reg', $data);
    }


//==================== Кадинет пользователя===========
    public function dashboard() {

      $user = $this->model('UserModel'); //Определяем Модель

      // Если с кнопки "Выход" что то приходит мы запускаем метод выхода
      if(isset($_POST['exit_btn'])) {
        $user->logOut();
        exit(); //благодоря этому код не будет дальше продолжаться
      }

      $user = $this->model('UserModel');

     // $user->getUser() Получаем все данные из БД об пользователе
      $this->view('user/dashboard', $user->getUser());
    }

    public function auth() {

      $data = [];

      if(isset($_POST['email'])) {
        $user = $this->model('UserModel'); //Определяем Модель

        //запускаем метод auth передавая в него значения из формы
        // и еслми возвращаються сообщения то помещаем их в массив data
        $data['message1'] = $user->auth($_POST['email'], $_POST['pass']);
      }

      $this->view('user/auth', $data);
    }
  }
