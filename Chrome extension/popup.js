var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(e,r) {console.log(e,r)};
xhr.open("GET", URL, true);
xhr.send();