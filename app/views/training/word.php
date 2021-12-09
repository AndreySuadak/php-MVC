<?php require 'public/blocks/headmeta1.php' ?> <!-- Первая часть с метатегами -->
<title>words</title>
<meta name="description" content="тренажер английских слов">
<?php require 'public/blocks/headmeta2.php' ?><!-- Вторая часть с метатегами -->
<?php require 'public/blocks/body_start.php' ?><!-- Первая часть для body и шапки концовка в footer -->


<main class="px-3 text-whilt">
    <h1 id="home_h1">Trainer of words</h1>
    <p id="home_h1_p" class="lead">There are many tests where you need to perceive English
      letters by ear. <br>This simulator was designed to make
       this task easier.You can choose any of the simulators.</p><br>
    <!-- <p class="lead"> <a href="/" class="btn btn-outline-primary">Learn more</a>  </p> -->

      <div class="row text-warning">
        <div class="col-sm-4">

          <div id="div_word_list" class="visually-hidden mt-2 text-start"></div>
        </div>
        <div class="col-sm-4 ">
          <div class="card bg-transparent">
            <div class="card-body border border-warning rounded-3">
              <h5 class="card-title" id="first_h5">Word title treatment</h5>
              <p class="card-text" id="first_h5_p">Some frequently used words will be played here in random order.</p><br>
              <button class="btn btn-outline-light" id="but_word_list" type="button" name="button">SHOW whole word list</button><br><br>
              <button class="btn btn-outline-light" id="but1" type="button" name="button"> START </button><br><br>
              <button class="btn btn-outline-light" id="but2" type="button" name="button"> Show result </button><br><br>

              <div id="show"></div>

              <!-- <button hidden class="btn btn-outline-light" id="clear" type="button" name="button"> Clear line </button> -->

            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>

     </div>

  </main> <br><br>
  <a href="/" type="button" class="btn text-warning mx-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
      </svg>
      go home
  </a>








<?php require 'public/blocks/footer1.php' ?><!-- Весь footer и скрипты -->
<script src="../../../public/js/word.js" type="text/javascript"></script>
<?php require 'public/blocks/footer2.php' ?><!-- Весь footer и скрипты -->
