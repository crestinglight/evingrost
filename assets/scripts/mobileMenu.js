window.addEventListener("load", function(){

	var burger = document.getElementsByClassName("js-burger")[0];
	var menu = document.getElementsByClassName("js-nav")[0];

	burger.addEventListener("click", function(event){ mobileMenu(event, menu); });

	var navLink = document.getElementsByClassName("js-navLink");

	for (i = 0; i < navLink.length; i++){
		navLink[i].addEventListener("click", function(event){ closeMenu(menu); });
	}

	function mobileMenu(e, menu){
		e.preventDefault();

		var maxHeight = window.getComputedStyle(menu).getPropertyValue('max-height');

		if (maxHeight === "0px"){
			openMenu(menu);
		}

		else {
			closeMenu(menu);
		}
	}

	function openMenu(menu){
		menu.style.maxHeight = "600px";
	}

	function closeMenu(menu){
		menu.style.maxHeight = "0px";
	}

});