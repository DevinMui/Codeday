var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(e,r) {cnsole.log(e,r)};
xhr.open("GET", chrome.extension.getURL('/config_resources/config.json'), true);
xhr.send();