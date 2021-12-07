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
  var x = Number(path[38]);
  var y = Number(path[39]);
  if(isNaN(x)){
      var b = 2;
      window.location = b;
  }else{
    if(isNaN(y)){
      var b = x + 1;
      window.location = b;
    }else{
      var b = (x*10) + y +1;
      window.location = b;
    }
  }
  //console.log("https://edipinc.com/codeigniter/index/index/" + b);

}
function geri(){
  var path = window.location.href;
  var x = Number(path[38]);
  var y = Number(path[39]);
  if(isNaN(x)){
      var b = '';
      window.location = b;
  }else{
    if(isNaN(y)){
      var b = x - 1;
      window.location = b;
    }else{
      var b = (x*10) + y - 1;
      window.location = b;
    }
  }
}
function ileriblog(){

  var path = window.location.href;
  var x = Number(path[44]);
  var y = Number(path[45]);
  if(isNaN(x)){
      var b = 1;
      window.location = "/codeigniter/blogcontent/" + b;
  }else{
    if(isNaN(y)){
      var b = x + 1;
      window.location = "/codeigniter/blogcontent/" + b;
    }else{
      var b = (x*10) + y + 1;
      window.location = "/codeigniter/blogcontent/" + b;
    }
  }
}
function geriblog(){
    var path = window.location.href;
    var x = Number(path[44]);
    var y = Number(path[45]);
    if(isNaN(x)){
        var b = 1;
        window.location = "/codeigniter/blogcontent/" + b;
    }else{
      if(isNaN(y)){
        var b = x - 1;
        window.location = "/codeigniter/blogcontent/" + b;
      }else{
        var b = (x*10) + y -1;
        window.location = "/codeigniter/blogcontent/" + b;
      }
    }
  }
