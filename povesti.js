
function loadDoc() {
  if(document.getElementById("pov1").style.display == "block") {
      document.getElementById("pov1").style.display= "none";
  }
      
  else {
    document.getElementById("pov1").style.display= "block";
  }
 
}
var a = document.getElementById("response1");
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         a.innerText = xhttp.responseText;
      }
    };
xhttp.open("GET", "stuff.php?pov=1", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send();

//////////////////////////////////////////////////////////////////////////
function loadDoc2() {
  if(document.getElementById("pov2").style.display == "block")
      document.getElementById("pov2").style.display= "none";
  else
  document.getElementById("pov2").style.display= "block";
}

var b = document.getElementById("response2");
var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         b.innerText = xhttp2.responseText;
      }
    };
    xhttp2.open("GET", "stuff.php?pov=1", true);
xhttp2.send();

/////////////////////////////////////////////////////////////////////////
function loadDoc3() {
  if(document.getElementById("pov3").style.display == "block")
      document.getElementById("pov3").style.display= "none";
  else
  document.getElementById("pov3").style.display= "block";
}
var c = document.getElementById("response3");
var xhttp3 = new XMLHttpRequest();
    xhttp3.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         c.innerText = xhttp3.responseText;
      }
    };
    xhttp3.open("PUT", "stuff.php?pov=3", true);
xhttp3.send();
///////////////////////////////////////////////////////////////////


function loadDoc4() {
  if(document.getElementById("pov4").style.display == "block") {
      document.getElementById("pov4").style.display= "none";
  }
  else {
    document.getElementById("pov4").style.display= "block";
  }
}


var d = document.getElementById("response4");
var xhttp4 = new XMLHttpRequest();
    xhttp4.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          d.innerText = xhttp4.responseText;
      }
    };
    xhttp4.open("GET", "stuff.php?pov=4", true);
xhttp4.send();


function sterge(cont) {
  var xhttp5 = new XMLHttpRequest();
    xhttp5.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        cont.remove();
        alert(xhttp5.responseText);
      }
    };
    xhttp5.open("DELETE", "stuff.php?pov=5", true);
    xhttp5.send();
    
}

function editeaza (btn) {
  var x = document.getElementById("response1");
  if (x.getAttribute("contenteditable") == "false") {
     x.setAttribute("contenteditable", "true");
     btn.innerText = "Actualizeaza";
  }
  else
  {
    x.setAttribute("contenteditable", "false");
     btn.innerText = "Editeaza";
     var xhttp6 = new XMLHttpRequest();
    xhttp6.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         alert(xhttp6.responseText);
      }
    };
    xhttp6.open("PUT", "stuff.php?pov=4&val="+x.innerText, true);
    xhttp6.send();
  }

  
   
}

function adauga() {
  var xhttp6 = new XMLHttpRequest();
 xhttp6.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
      alert(xhttp6.responseText);
   }
 };
 xhttp6.open("POST", "stuff.php", true);
 xhttp6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp6.send("pov=100&val="+document.getElementById("povestenoua").value);
}