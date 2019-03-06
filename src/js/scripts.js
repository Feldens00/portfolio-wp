function open_sidebar() {
	document.getElementById("container-bar").style.display = "none";
	document.getElementById("container-menu").style.display = "block";
}

function close_sidebar() {
	document.getElementById("container-menu").style.display = "none";
	document.getElementById("container-bar").style.display = "block";
}