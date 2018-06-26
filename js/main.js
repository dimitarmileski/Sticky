function openSlideNav () {
			document.getElementById("slideNav").style.width = "250px";
			document.getElementById("container").style.marginLeft = "250px";
		}

		function closeSlideNav () {
			document.getElementById("slideNav").style.width = "0";
			document.getElementById("container").style.marginLeft = "0";
		
		}
		
			function dropdown1() {
			document.getElementById("moreDropdownId").classList.toggle("show");
		}

	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));


	