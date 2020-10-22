var url = "https://link.link";

var xhr = new XMLHttpRequest();
xhr.open("POST", url);

xhr.setRequestHeader("Content-Type", "text/plain");

xhr.onreadystatechange = function () {
   if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
   }};

var data = '{"user":"uzivatel","pass":"*******","detail":1,"data":"01-1614 7133 5345 3238 5823-4","base64":1}';

xhr.send(data);
