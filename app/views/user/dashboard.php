<?php require 'public/blocks/headmeta1.php' ?> <!-- Первая часть с метатегами -->
<title>Кабинет пользователя</title>
<meta name="description" content="Кабинет пользователя">
<?php require 'public/blocks/headmeta2.php' ?><!-- Вторая часть с метатегами -->


<?php require 'public/blocks/body_start.php' ?><!-- Первая часть для body и шапки концовка в footer -->
  <main class="px-3 text-warning">
    <h2 id="home_h1">Привет </h2><h2 class="text-info"> <?=$data['name']?></h2>


    <div class="row justify-content-center">
      <div class="col-sm-4">
        <p>Вы находитесь в кабинете пользователя <span class="text-info"><b><?=$data['name']?></b></span>.</p><br>
        <h3>Данная страница находится в разработке.</h3><br>

         <form action="/user/dashboard" method="post" class="bg-transparent text-warning">
<!--для выхода нам нужно что то отправить из скрsтого input в контролер "user" в метод "dashboard"   -->
           <input type="hidden" name="exit_btn">
           <button type="submit" class="btn btn-outline-info">Выйти</button>
         </form>

      </div>
    </div><br><br>

    <a href="/" type="button" class="btn text-warning mx-auto">
        <svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
        </svg>
        go home
    </a>

  </main>
<?php require 'public/blocks/footer1.php' ?><!-- первая часть футера и скрипт для заднего фона-->
<script src="/public/js/contact.js" type="text/javascript"></script>

<?php require 'public/blocks/footer2.php' ?><!-- вторая часть футера -->
