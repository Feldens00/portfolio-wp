function oppen_lightbox(post,img) {
	console.log(img);
	var title = $( "#"+post+" .obj-title" ).text();
	var content = $( "#"+post+" .obj-content" ).text();
	$( "#lightbox #lightbox-img" ).attr('src',img);
	$( "#lightbox #lightbox-title" ).text(title);
	$( "#lightbox #lightbox-content" ).text(content);
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
