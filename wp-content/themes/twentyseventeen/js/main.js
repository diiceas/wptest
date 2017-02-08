var loadWeeksBtn = document.getElementById("weeks-load-button");
var weeksContainer = document.getElementById("weeks-container");
if (loadWeeksBtn){
	loadWeeksBtn.addEventListener("click", function(){		
		var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET', 'http://localhost/wptest/wp-json/wp/v2/weeks');
		ourRequest.onload = function() {
			if (ourRequest.status >= 200 && ourRequest.status < 400) {
				var data = JSON.parse(ourRequest.responseText);
				createHTML(data);
			} else {
				console.log("We connected to the server, but it returned an error.");
			}
		};

		ourRequest.onerror = function() {
			console.log("Connection error");
		};
		ourRequest.send();
		}
	);
};

function createHTML(postData){
	var ourHTMLString = "";
	for(i = 0; i < postData.length; i++){
		ourHTMLString += '</br>' + postData[i].title.rendered;
		//ourHTMLString += postData[i].title.rendered;		
	}
	
	weeksContainer.innerHTML = ourHTMLString;
}

var addWeekBtn = document.getElementById('addWeekBtn');

if (addWeekBtn){
		addWeekBtn.addEventListener('click', function(){
			var ourPostData = {
				'title': 'my crazy title',
				'content': 'my crazy content',
				'status': 'publish'	
			};
			var createPost = new XMLHttpRequest();
			//createPost.open("POST", magicalData.siteURL + "/wp-json/wp/v2/posts");
			createPost.open("POST", "http://localhost/wptest/wp-json/wp/v2/weeks");
			createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce);
			createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
			createPost.send(JSON.stringify(ourPostData));
			createPost.onreadystatechange = function() {
			  if (createPost.readyState == 4) {
				if (createPost.status == 201) {
				  alert("done")
				} else {
				  alert("Error - try again.");
				}
			  }
			}
	});
}

