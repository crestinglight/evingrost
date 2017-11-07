window.addEventListener("load", function(){

	var featuredPost = document.getElementsByClassName("js-featured")[0];

	var postTop = document.getElementsByClassName("js-postTop")[0];
	var postBottom = document.getElementsByClassName("js-postBottom")[0];

	var paragraphTop = document.getElementsByClassName("js-overflow")[0];
	var paragraphBottom = document.getElementsByClassName("js-overflow")[1];

	function featureController(){

		featuredHeight();
	}

	function featuredHeight(){

		var featureHeight = featuredPost.clientHeight;
		
		neededHeight(featureHeight);
	}

	function neededHeight(featureHeight){

		var desiredHeight = Math.floor(featureHeight / 2) - 4;
		
		currentHeight(desiredHeight);
	}

	function currentHeight(desiredHeight){

		var currentTopHeight = postTop.clientHeight;
		var currentBottomHeight = postBottom.clientHeight;

		findOverflow(desiredHeight, currentTopHeight, currentBottomHeight);
	}

	function findOverflow(desiredHeight, currentTopHeight, currentBottomHeight){

		var overflowTopAmount = currentTopHeight - desiredHeight;
		var overflowBottomAmount = currentBottomHeight - desiredHeight;
		
		setNewHeightTop(overflowTopAmount, overflowBottomAmount);
	}

	function setNewHeightTop(overflowTopAmount, overflowBottomAmount){

		var topHeight = paragraphTop.clientHeight;
		var bottomHeight = paragraphBottom.clientHeight;

		var newTopHeight = topHeight - overflowTopAmount;
		var newBottomHeight = bottomHeight - overflowBottomAmount;

		paragraphTop.style.maxHeight = newTopHeight + "px";
		paragraphBottom.style.maxHeight = newBottomHeight + "px";
	}

	featureController();

});