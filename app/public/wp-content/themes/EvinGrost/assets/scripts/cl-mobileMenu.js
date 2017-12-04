window.addEventListener("load", function(){

	var burger = document.getElementsByClassName("js-burger--cl")[0];
	var menu = document.getElementsByClassName("js-nav--cl")[0];

	burger.addEventListener("click", function(event){ mobileMenu(event, menu); });

	var navLink = document.getElementsByClassName("js-navlink--cl")[0];

	navLink.addEventListener("click", function(event){ closeMenu(menu); });

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
		menu.style.maxHeight = "700px";
	}

	function closeMenu(menu){
		menu.style.maxHeight = "0px";
	}

});