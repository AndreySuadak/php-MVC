<?php
require 'app/views/contact/SxGeo.php';

 function getIp() {
     $keys = [
         'HTTP_CLIENT_IP',
         'HTTP_X_FORWARDED_FOR',
         'REMOTE_ADDR'
     ];
     foreach ($keys as $key) {
         if(!empty($_SERVER[$key])) {
             $ip = trim(end(explode(',', $_SERVER[$key])));
             if(filter_var($ip, FILTER_VALIDATE_IP)) {
                 return $ip;
             }
         }
     }
 }

 function getCity($ip) {
     $SxGeo = new SxGeo('app/views/contact/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
     $city = $SxGeo->getCityFull($ip);
     // var_dump($city);
     $text_city = '<br>city: ' . $city['city']['name_ru'].
     '<br>city: ' . $city['city']['name_en'].
     '<br>city code: ' . $city['city']['id'].
     '<br>city lat: ' . $city['city']['lat'].
     '<br>city lon: ' . $city['city']['lon'].
     '<br>country: ' . $city['country']['name_ru'].
     '<br>country: ' . $city['country']['name_en'].
     '<br>country: ' . $city['country']['iso'].
     '<br>country: ' . $city['country']['id'].
     '<br><img src="https://flagcdn.com/16x12/'.strtolower($city['country']['iso']).'.png"
         srcset="https://flagcdn.com/32x24/'.strtolower($city['country']['iso']).'.png 2x,
         https://flagcdn.com/48x36/'.strtolower($city['country']['iso']).'.png 3x" width="16" height="12" alt="South Africa"><br><br>';
     return $text_city;
 }

$ip1 = getIp();
$ip = getCity($ip1);


require 'public/blocks/headmeta1.php' ?> <!-- Первая часть с метатегами -->
<title>Контакты</title>
<?php require 'public/blocks/headmeta2.php';?><!-- Вторая часть с метатегами -->


<?php require 'public/blocks/body_start.php' ?><!-- Первая часть для body и шапки концовка в footer -->
  <main class="px-3 text-warning">
    <h1 id="home_h1">Contact</h1>

    <div class="row justify-content-center">
      <div class="col-sm-4">

        <form action="/contact/index" method="post" class="bg-transparent text-warning">
          <label for="name" id="username" >Имя</label>
          <input type="text" name="name" class="form-control border-warning bg-transparent text-warning" autocomplete="off" >
          <div id="div_username" class="form-text">Введите ваше имя не мение 3-х символов.</div>

          <label for="email" id="email" >Email</label>
          <input type="text" name="email" class="form-control border-warning bg-transparent text-warning" autocomplete="off">
          <div id="div_email" class="form-text">Введите ваш email, он должен выглялить примерно так test@test.te </div>

          <label for="age" id="age" >Введите ваш возраст</label>
          <input type="number" name="age" class="form-control border-warning bg-transparent text-warning" autocomplete="off">
          <div id="div_age" class="form-text">Возраст от 12 до ??? (что бы никого не обидить - 150) </div><br>

          <label for="message" id="age" >Сообщение</label>
          <textarea id="textarea" name="message" class="form-control border-warning bg-transparent text-warning" autocomplete="off"></textarea>
          <div id="div_textarea" class="form-text">Не используйте специальные символы</div><br>

          <svg style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>

          <?php if($data['message1']): ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
              <div>
                <?=$data['message1']?>
              </div>
            </div>

        <?php elseif($data['message2']):?>



          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              <?=$data['message2']?>
            </div>
            <div>
              <?=$data['message1']?>
            </div>
          </div>

          <input type="hidden" name="getip"  value="11.<?=$ip?>.11">

        <?php endif; ?>

          <button type="submit" class="btn btn-warning fw-bold" id="button">Отпарвить</button>
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
