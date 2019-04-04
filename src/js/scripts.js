function open_sidebar() {
	document.getElementById("container-bar").style.display = "none";
	document.getElementById("container-menu").style.display = "block";
}

function close_sidebar() {
	document.getElementById("container-menu").style.display = "none";
	document.getElementById("container-bar").style.display = "block";
}

function redirect_to_post (url) {
	location.href = url;
}

$(document).ready(function () {
    
    $('#btn-open-sidebar').on('click', function () {
    	$('#sidebar,body').toggleClass('active');
	});

	$('#btn-close-sidebar').on('click', function () {
    	$('#sidebar,body').toggleClass('active');
	});
});

