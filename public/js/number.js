// В переменные помещаем наши ноки и пустой блок куда будем помещать наш результат
var but_start = document.getElementById("but1");
var but_show = document.getElementById("but2");
var show = document.getElementById("show");


// =============1111111111111  Переменные для отсчета===============
let body = document.querySelector("body");
let div = document.getElementById("div_countdown");
let but = but_start;
let inf = document.getElementById("inf");
// Картинки цифр
let num1 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet" ><rect id="svgEditorBackground" x="0" y="0" width="50" height="50" style="fill: none;"/><text style="fill:#ffc107;font-family:Impact;font-size:60px;kit-user-select: none;-ms-user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;" x="12.407248497009277" y="48.7315559387207" id="one">1</text></svg>';
let num2 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet" ><text style="fill:#ffc107;font-family:Impact;font-size:60px;kit-user-select: none;-ms-user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;" x="10.82889461517334" y="48.957035064697266" id="two">2</text></svg>';
let num3 = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"viewBox = "0 0 50 50" preserveAspectRatio = "xMinYMin meet" ><text style="fill:#ffc107;font-family:Impact;font-size:60px;kit-user-select: none;-ms-user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;user-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;ser-select: none;-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;" x="10.82889461517334" y="48.957035064697266" id="three">3</text></svg > ';
let num_start = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet" ><text style="fill:#ffc107;font-family:Impact;font-size:50px;kit-user-select: none;-ms-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;s-user-select: none;ser-select: none;-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;" x="-24.232759475708008" y="42.41826248168945" id="start" transform="matrix(0.512063 0 0 0.512063 12.1213 12.4845)">start</text></svg>';
// переменные для времени прокрутки
let time_big = 910;
let time_short = 90;
let step = 1;
// размер всего окна
let x_body = window.outerWidth;
let y_body = window.outerHeight;
// размер блока (целая часть без дробной части)
let x_div = Math.floor(x_body / 2);
let y_div = Math.floor(y_body / 2);
// отступы (целая часть)
let x_div_left = Math.floor(x_body / 4);
let y_div_top = Math.floor(y_body / 6);

 window.onresize = function () {
   let x_body = window.outerWidth;
   let y_body = window.outerHeight;
   // размер блока (целая часть без дробной части)
   let x_div = Math.floor(x_body / 2);
   let y_div = Math.floor(y_body / 2);
   // отступы (целая часть)
   let x_div_left = Math.floor(x_body / 4);
   let y_div_top = Math.floor(y_body / 6);
 }
// =============2222222222222===============



//переменные
// количество цифр при нажатии на старт
var col_number = 20;
// диапозон чисел если 10 то => от 0 до 20
var range = 20;
// длительность паузы между символами (будет умножена на 1000)
var mytime = 2;
// массив для хранения цифр (сбда помещаем цифры из рандома)
var arr_for_save_number = [];
var str_for_save_number = ""; //для вывода на экран списка
// для цикла прокрутки аудио
var for_play_audio = 0;
//переменная для ОСТАНОВКИ
var stop = 0;
//переменная для рандома так как мне его надо сохронять для цифры и буквы одинаковое число на каждой итерации
var rundoms;

//массив для хранения audio. МАССИВ ОТ 0 ДО 29 - ТАК КАК такое количество файлов
var arr_audio = [];
for(var i = 0; i <= range; i++){
  arr_audio[i] = new Audio("../../../public/js/wav/number/" + i + ".wav");
};




// ===========================================================
// =====SHOW =========Отслеживаем нажатие на кнопку Show
// ============================================================

      // наведение на кнопку замена надписей
but_show.onmouseover = function(){
  if(but_show.innerHTML == " Show result "){
    but_show.innerHTML = "Показать результат";
  } else {
    but_show.innerHTML = "Очистить поле";
  }
}
      //Отведение от кнопки замена надписи
but_show.onmouseout = function() {
  if(but_show.innerHTML == "Показать результат") {
    but_show.innerHTML = " Show result ";
  }else {
    but_show.innerHTML = " Clear line ";
  }
}
     //Нажатие на кнопку запуск функционала
but_show.onclick = function() {
  if(but_show.innerHTML == "Показать результат") {
    show.innerHTML = str_for_save_number;
    but_show.innerHTML = "Очистить поле"
  } else {
    show.innerHTML = "";
    arr_for_save_number.length = 0;
    but_show.innerHTML = "Показать результат"
  };
  // show.innerHTML = arr_for_save_number;
};
// ==========end SHOW =======================================

//функция случайных чисел (передаем до кокого числа генерируем)
function my_rundom (numbers_line = 10) {
  var a;
  return a = (Math.floor(Math.random() * Math.floor(numbers_line)) );
};
//===================== end rundom ============================


// ===========================================================
// ============ функция для озвучки массива ==================
// ===========================================================
function myreplay() {

   // проверка нужна для коректной работы let timeout = setTimeout
   //иначе не будет рекурсии и не будет задержки в прокрутки файлов
   //файлы могут проигрываться одновременно
  if (for_play_audio < col_number) {

    // проверяем флажок => для прерывания процесса прокрутки при нажатии кнопки stop
    if(stop == 1) clearTimeout(timeout);

    //процесс озвучки аудио_файла[массив_где_сохранены_цифры[номер_элемента в массиве]]
    arr_audio[arr_for_save_number[for_play_audio]].play();

    // переходим к следующему элементу массива где хоняться цифры
    for_play_audio++;

    // тут в переменную помещаем нашу задержку по времени
    let timeout = setTimeout("myreplay()", mytime * 1000);

  };
};

// ================================
// ======= Работа с надписями =====
// ================================
//=========== центральная надпись ======================
var logo = document.getElementById("logo");
var home_h1 = document.getElementById("home_h1");
var home_h1_p = document.getElementById("home_h1_p");

// logo.onmouseover = function() {
//   logo.innerHTML = '<span class="text-primary">KUZYA</span>';
// };
// logo.onmouseleave = function() {
//   logo.innerHTML = '<span class="text-warning">KUZYA</span>';
// };

home_h1.onmouseover = function() {
  home_h1.innerHTML = "Тренажер восприятия чисел";
};
home_h1.onmouseout = function() {
  home_h1.innerHTML = "Trainer of numbers";
};

home_h1_p.onmouseover = function() {
  home_h1_p.innerHTML = "Существует множество тестов, в которых нужно воспринимать на слух английские числа. <br>Этот тренажер был разработан, чтобы облегчить эту задачу. Вы можете начать.";
};
home_h1_p.onmouseout = function() {
  home_h1_p.innerHTML = "There are many tests where you need to perceive English numbers by ear. <br>This simulator was designed to make this task easier.You can start.";
};

// ====================  надпись над ЦИФРАМИ ===================
var first_h5 = document.getElementById("first_h5");
var first_h5_p = document.getElementById("first_h5_p");
var first_btn = document.getElementById("first_btn");


first_h5.onmouseover = function() {
  first_h5.innerHTML = "Тренажер восприятия чисел";
};
first_h5.onmouseout = function() {
  first_h5.innerHTML = "Number Perception Trainer";
};

first_h5_p.onmouseover = function() {
  first_h5_p.innerHTML = "Здесь в случайном порядке будут воспроизводиться числа от 0 до 9.";
};
first_h5_p.onmouseout = function() {
  first_h5_p.innerHTML = "Here, numbers from 0 to 9 will be played in random order.";
};







// ==================================================
// ============START================================
// ====== Отслеживаем нажатие на кнопку Start triner
// ==================================================

// наведение на кнопку замена надписей
but_start.onmouseover = function(){
if(but_start.innerHTML == " START "){
but_start.innerHTML = " НАЧАТЬ ";
} else {
but_start.innerHTML = " СТОП ";
}
}
//Отведение от кнопки замена надписи
but_start.onmouseout = function() {
if(but_start.innerHTML == " НАЧАТЬ ") {
but_start.innerHTML = " START ";
}else {
but_start.innerHTML = " STOP ";
}
}

 //================НАЖАТИЕ==================
but_start.onclick = function() {

  // проверка запущен ли наш тренажер(для остановки в середине прокрутки)
  // проверяем по надписи на кнопке (при запуске надпись меняем на STOP)
  if(but_start.innerHTML == " НАЧАТЬ "){
    but_start.innerHTML = " СТОП ";
    stop = 0; //переменная ФЛАЖОК - если 0 => запущен процесс

    but_show.innerHTML = " Show result "; //на второй копке должно быть Show result

    //при нажатии на кнопку (Start triner) обнуляем строку и обнуляем наш массив
    show.innerHTML = "";
    arr_for_save_number.length = 0;
    str_for_save_number ="";
    // надо обнулить пременную для прокрутки массива
    for_play_audio = 0;

    // ======= вставка сюда 1=================
    let n = +4;
    let t = +10;
    function onesNumberCount() {
        if (n == 4) {
            n = 3;
            function numberOne() {
                if (t > 1) {
                    div.setAttribute("style", "width: " + x_div + "px; height: " + y_div + "px; margin-top: " + y_div_top + "px; margin-left: " + x_div_left + "px; margin-left: " + x_div_left + "px; opacity: " + (t / 10) + ";");
                    div.innerHTML = num3;
                    t = t - step;
                } else {
                    div.innerHTML = "";
                    t = 10;
                    clearInterval(gameThree);
                }
            };
            let gameThree = setInterval(numberOne, time_short);
        } else if (n == 3) {
            n = 2;
            function numberTwo() {
                if (t > 1) {
                    div.setAttribute("style", "width: " + x_div + "px; height: " + y_div + "px; margin-top: " + y_div_top + "px; margin-left: " + x_div_left + "px; margin-left: " + x_div_left + "px; opacity: " + (t / 10) + ";");
                    div.innerHTML = num2;
                    t = t - step;
                } else {
                    div.innerHTML = "";
                    t = 10;
                    clearInterval(gameTwo);
                }
            };
            let gameTwo = setInterval(numberTwo, time_short);
        } else if (n == 2) {
            n = 1;
            function numberOne() {
                if (t > 1) {
                    div.setAttribute("style", "width: " + x_div + "px; height: " + y_div + "px; margin-top: " + y_div_top + "px; margin-left: " + x_div_left + "px; margin-left: " + x_div_left + "px; opacity: " + (t / 10) + ";");
                    div.innerHTML = num1;
                    t = t - step;
                } else {
                    div.innerHTML = "";
                    t = 10;
                    clearInterval(gameOne);
                }
            };
            let gameOne = setInterval(numberOne, time_short);
        } else if (n == 1) {
            n = 0;
            function numberStart() {
                if (t > 1) {
                    div.setAttribute("style", "width: " + x_div + "px; height: " + y_div + "px; margin-top: " + y_div_top + "px; margin-left: " + x_div_left + "px; margin-left: " + x_div_left + "px; opacity: " + (t / 10) + ";");
                    div.innerHTML = num_start;
                    t = t - step;
                } else {
                    div.innerHTML = "";
                    t = 10;
                    clearInterval(gameStart);
                }
            };
            let gameStart = setInterval(numberStart, time_short);
        } else {
            div.setAttribute("style", "width: " + 0 + "px; height: " + 0 + "px; margin-top: " + 0 + "px; margin-left: " + 0 + "px; margin-left: " + 0 + "px;");
            // div.innerHTML = "stop";
            clearInterval(game);
        }
    };
    let game = setInterval(onesNumberCount, time_big);
    // ======= вставка сюда 2=================

  } else {
    // иначе если на кнопке STOP то при нажатии меняем надпись на Start triner
    but_start.innerHTML = " НАЧАТЬ ";
    stop = 1; //переменная ФЛАЖОК - если 1 =>  процесс надо остановить в функции myreplay();
  };

  //перебираем массив и помещаем в него случайные числа
  //Работа с генератором случайных чисел
  for(let i = 0; i < col_number; i++){
    rundoms = my_rundom(range); //на каждой итерации нам нужно и число для обоих массивов
    arr_for_save_number.push(rundoms);
    str_for_save_number = str_for_save_number + " - " + arr_for_save_number[i];
    // console.log(arr_lin[i]);
  }

  //Запускаем функцию прокрутки аудио файлов
  let timeout = setTimeout("myreplay()", 5000);
  // myreplay();
  // show.innerHTML = stop;
};
// ===========================================================
// ======КОНЕЦ=>Отслеживаем нажатие на кнопку Start triner
// ===========================================================
