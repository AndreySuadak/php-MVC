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
  home_h1.innerHTML = "Тренажер восприятия английского";
};
home_h1.onmouseout = function() {
  home_h1.innerHTML = "English Perception Trainer";
};

home_h1_p.onmouseover = function() {
  home_h1_p.innerHTML = "Существует множество тестов, в которых нужно воспринимать на слух английские числа, буквы и слова. <br>Этот тренажер разработан, для восприятия английского языка. Вы можете выбрать любой из вариантов.";
};
home_h1_p.onmouseout = function() {
  home_h1_p.innerHTML = "There are many tests where you need to perceive English numbers, letters and words by ear. <br>This simulator was designed to make this task easier.You can choose any of the simulators.";
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
  first_h5_p.innerHTML = "В случайном порядке воспроизводятся числа от 0 до 20.";
};
first_h5_p.onmouseout = function() {
  first_h5_p.innerHTML = "Here, numbers from 0 to 20 will be played in random order.";
};

first_btn.onmouseover = function() {
  first_btn.innerHTML = "Идти к тренажеру";
};
first_btn.onmouseout = function() {
  first_btn.innerHTML = "Go to trainer";
};

// ====================  надпись над Буквами ===================
var second_h5 = document.getElementById("second_h5");
var second_h5_p = document.getElementById("second_h5_p");
var second_btn = document.getElementById("second_btn");

second_h5.onmouseover = function() {
  second_h5.innerHTML = "Тренажер восприятия букв";
};
second_h5.onmouseout = function() {
  second_h5.innerHTML = "Letter Perception Trainer";
};

second_h5_p.onmouseover = function() {
  second_h5_p.innerHTML = "Озвучиваются английские буквы в случайном порядке.";
};
second_h5_p.onmouseout = function() {
  second_h5_p.innerHTML = "All letters of the English alphabet will be played here in random order.";
};

second_btn.onmouseover = function() {
  second_btn.innerHTML = "Идти к тренажеру";
};
second_btn.onmouseout = function() {
  second_btn.innerHTML = "Go to trainer";
};

// ====================  надпись над Словами ===================
var third_h5 = document.getElementById("third_h5");
var third_h5_p = document.getElementById("third_h5_p");
var third_btn = document.getElementById("third_btn");

third_h5.onmouseover = function() {
  third_h5.innerHTML = "Тренажер восприятия слов";
};
third_h5.onmouseout = function() {
  third_h5.innerHTML = "Word title treatment";
};

third_h5_p.onmouseover = function() {
  third_h5_p.innerHTML = "Воспроизведение слов.";
};
third_h5_p.onmouseout = function() {
  third_h5_p.innerHTML = "Some frequently used words will be played here in random order.";
};

third_btn.onmouseover = function() {
  third_btn.innerHTML = "Идти к тренажеру";
};
third_btn.onmouseout = function() {
  third_btn.innerHTML = "Go to trainer";
};


// ===========всплывающая подсказка ===========
var but_click_see = document.getElementById("but_click_see");
var click_see = document.getElementById("click_see");
var flag = 1;
// var collapseOne = document.getElementById("collapseOne");
// var choose = document.getElementById("choose");

// but_click_see.onmouseover = function() {
//   click_see.innerHTML = "<strong> Нажмите, чтобы узнать, как это работает. </strong>";
// };
// but_click_see.onmouseout = function() {
//   click_see.innerHTML = "<strong>Click to see how it works.</strong>";
// };

but_click_see.onmouseover = function() {
  but_click_see.innerHTML = "Нажмите, чтобы узнать, как это работает.";
};
but_click_see.onmouseout = function() {
  but_click_see.innerHTML = "Click to see how it works.";
};

click_see.onmouseover = function() {
  click_see.innerHTML = "<h3>Выберите, какое обучение пройти. Нажмите старт. Запишите, что Вы услышали. Нажмите проверить, что Вы написали.</h3>";
};
click_see.onmouseout = function() {
  click_see.innerHTML = "<h3>Choose which training to take. Turn start. Write down what you hear. At the end, click check what you wrote.</h3>";
};
// нажатие на подсказку  при этом меняем атрибут класса на спрятанный блок visually-hidden
but_click_see.onclick = function() {
  if(flag == 1) {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3");
    flag = 0;
  } else {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3 visually-hidden");
    flag = 1;
  }
}
but_click_see2.onclick = function() {
  if(flag == 1) {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3");
    flag = 0;
  } else {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3 visually-hidden");
    flag = 1;
  }
}
but_click_see3.onclick = function() {
  if(flag == 1) {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3");
    flag = 0;
  } else {
    click_see.setAttribute("class", "row border border-warning rounded-3 pt-3 pb-3 visually-hidden");
    flag = 1;
  }
}



// ==========contact=====
var contact = document.getElementById("contact");

// contact.onmouseover = function() {contact.innerHTML = "toch";}

contact.onclick = function() {
  // second.innerHTML = "Тренажер восприятия английского";
    location.href = 'home/contact';
}
