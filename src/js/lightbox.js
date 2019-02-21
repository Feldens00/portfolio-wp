function oppen_lightbox(id,title) {
	console.log(id);
	console.log(title);
	var description = $( "#"+id+" img" ).attr('alt');
	var src = $( "#"+id+" img" ).attr('src');
	$( "#lightbox #lightbox-img" ).attr('src',src);
	$( "#lightbox #lightbox-title" ).text(title);
	$( "#lightbox #lightbox-content" ).text(description);
	$( "#lightbox" ).css("overflow","auto");
	$( "body" ).css("overflow","hidden");
	$( "#lightbox" ).css("display","block");

}

function close_lightbox(post) {
	$( "#lightbox #lightbox-img" ).attr('src',"");
	$( "#lightbox #lightbox-title" ).text("");
	$( "#lightbox #lightbox-content" ).text("");
	$( "body" ).css("overflow","auto");
	$( "#lightbox" ).css("display","none");

}