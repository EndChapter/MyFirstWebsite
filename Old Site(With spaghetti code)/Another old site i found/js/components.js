document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {});
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(elems, {});
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems, {});
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.pushpin');
  var instances = M.Pushpin.init(elems, {});
});
var elem = document.querySelector('.tabs'); var instance = M.Tabs.init(elem, {swipeable: true});

var tabElems1 = document.querySelector("#tabs1");
var tabInstances1 = M.Tabs.init(tabElems1, {swipeable: true});

var tabElems2 = document.querySelector("#tabs2");
var tabInstances2 = M.Tabs.init(tabElems2, {swipeable: true});

var tabElems3 = document.querySelector("#tabs3");
var tabInstances3 = M.Tabs.init(tabElems3, {swipeable: true});

var tabElems4 = document.querySelector("#tabs4");
var tabInstances4 = M.Tabs.init(tabElems4, {swipeable: true});

var tabElems5 = document.querySelector("#tabs5");
var tabInstances5 = M.Tabs.init(tabElems5, {swipeable: true});

var tabElems5 = document.querySelector("#tabs5");
var tabInstances5 = M.Tabs.init(tabElems5, {swipeable: true});

var tabElems6 = document.querySelector("#tabs6");
var tabInstances6 = M.Tabs.init(tabElems6, {swipeable: true});

var tabElems7 = document.querySelector("#tabs7");
var tabInstances7 = M.Tabs.init(tabElems7, {swipeable: true});

var tabElems8= document.querySelector("#tabs8");
var tabInstances8 = M.Tabs.init(tabElems8, {swipeable: true});

var tabElems9 = document.querySelector("#tabs9");
var tabInstances9 = M.Tabs.init(tabElems9, {swipeable: true});
function ileri(){
  var path = window.location.href;
  var b = Number(path[27]) + 1;
  console.log("https://edipinc.com/?sayfa=" + b)
  window.location = "https://edipinc.com/?sayfa=" + b;
}
function geri(){
 history.back();
}
