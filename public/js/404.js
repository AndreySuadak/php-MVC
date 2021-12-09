var home_h1 = document.getElementById("home_h1");
var home_h1_p1 = document.getElementById("home_h1_p1");
var home_h1_p2 = document.getElementById("home_h1_p2");
var first_btn = document.getElementById("first_btn");

home_h1.onmouseover = function() {
  home_h1.innerHTML = "Ошибка 404";
};
home_h1.onmouseout = function() {
  home_h1.innerHTML = "Error 404";
};

home_h1_p1.onmouseover = function() {
  home_h1_p1.innerHTML = "Я не нашел эту страницу.";
};
home_h1_p1.onmouseout = function() {
  home_h1_p1.innerHTML = "I have not found this page.";
};

home_h1_p2.onmouseover = function() {
  home_h1_p2.innerHTML = "Вероятно она затерялась в параллельной вселенной.";
};
home_h1_p2.onmouseout = function() {
  home_h1_p2.innerHTML = "I think, it probably got lost in a parallel universe.";
};

first_btn.onmouseover = function() {
  first_btn.innerHTML = "идти на главную";
};
first_btn.onmouseout = function() {
  first_btn.innerHTML = "go home";
};
