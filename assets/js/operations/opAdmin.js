$("#btn-dropdown-nav").on("click",'.dropdown-toggle',function(){
    $(".dropdown-menu").dropdown("toggle");
});

$('.alert').alert();
$(".alert-flashdata")
	.fadeTo(3000, 500)
	.slideUp(500, function () {
		$(".alert-flashdata").slideUp(500);
	});1