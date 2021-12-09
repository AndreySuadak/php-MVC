<?php require 'public/blocks/headmeta1.php' ?> <!-- Первая часть с метатегами -->
<title>main page</title>
<meta name="description" content="тренажер восприятия на слух английского">
<?php require 'public/blocks/headmeta2.php' ?><!-- Вторая часть с метатегами -->


<?php require 'public/blocks/body_start.php' ?><!-- Первая часть для body и шапки концовка в footer -->
  <main class="px-3 text-warning">
    <h1 id="home_h1">English Perception Trainer</h1><br>
    <p class="lead" id="home_h1_p">There are many tests where you need to perceive English
      numbers, letters and words by ear. <br>This simulator was designed to make
       this task easier.You can choose any of the simulators.</p> <br><br>
    <!-- <p class="lead"> <a href="/" class="btn btn-outline-primary">Learn more</a>  </p> -->
      <div class="row text-warning">
        <div class="col-md-4 border border-warning rounded-3"> <!-- border border-warning rounded-3 -->
          <div class="card bg-transparent">
            <div class="card-body ">
              <h5 class="card-title" id="first_h5">Number Perception Trainer</h5>
              <p class="card-text" id="first_h5_p">
                Here, numbers from 0 to 9 will be played in random order.
              </p>
              <a href="training/number" class="btn btn-outline-info" id="first_btn">
                 Go to trainer
               </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 border border-warning rounded-3"><!-- border border-warning rounded-3 -->
          <div class="card bg-transparent">
            <div class="card-body">
              <h5 class="card-title" id="second_h5">Letter Perception Trainer</h5>
              <p class="card-text" id="second_h5_p">
                All letters of the English alphabet will be played here in random order.
              </p>
              <a href="training/letter" class="btn btn-outline-info" id="second_btn">
                 Go to trainer
               </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 border border-warning rounded-3"><!-- border border-warning rounded-3 -->
          <div class="card bg-transparent">
            <div class="card-body">
              <h5 class="card-title" id="third_h5">Word title treatment</h5>
              <p class="card-text" id="third_h5_p">
                Some frequently used words will be played here in random order.
              </p>
              <a href="training/word" class="btn btn-outline-info" id="third_btn">
                 Go to trainer
               </a>
            </div>
          </div>
        </div>
     </div><br><br>



      <div class="row justify-content-center ">
        <div class="col-md-4 d-grid gap-2"><!-- style="height: 120px;" -->
          <button class="btn btn-outline-warning pt-3 pb-3" type="button" id="but_click_see">Click to see how it works</button>
          <!-- <a href="#" class="btn btn-warning border border-warning rounded-3 pt-3 pb-3" id="but_click_see">Click to see how it works</a> -->
          <div class="border border-warning rounded-3 pt-3 pb-3 visually-hidden" id="click_see">
              <h3>Choose which training to take. Turn start. Write down what you hear. At the end, click check what you wrote.</h3>
          </div>
        </div>
      </div>


  </main>
<?php require 'public/blocks/footer1.php' ?><!-- первая часть футера и скрипт для заднего фона-->
<script src="/public/js/home.js" type="text/javascript"></script>

<?php require 'public/blocks/footer2.php' ?><!-- вторая часть футера -->
