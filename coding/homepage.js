		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		    acc[i].addEventListener("click", function() {
		        this.classList.toggle("active");
		        var panel = this.nextElementSibling;
		        if (panel.style.display === "block") {
		            panel.style.display = "none";
		        } 
		        else {
		            panel.style.display = "block";
		        }
		    });
		}
		window.onscroll = function() {myFunction()};
		var container = document.getElementById("header");
		var sticky = container.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
				container.classList.add("sticky");
			} 
			else {
				container.classList.remove("sticky");
			}
		}
	