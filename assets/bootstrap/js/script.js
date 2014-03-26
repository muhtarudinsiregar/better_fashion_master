function hideDropdown(e)
{
	$(this).slideUp('fast',function(){
		$(this).closest('.open').removeClass('open');
		$(this).off('mouseleave');
	});
}
$('li.dropdown').click(function(){
	$(this).find('ul#postingan').slideToggle('medium');
});

// $('ul.nav > li').click(function(){  $('ul.nav > li').removeClass('active'); $(this).parent().addClass('active'); });

        // $('ul.nav > li').click(function (e) {
        //     e.preventDefault();
        //     // $('ul.nav > li').removeClass('active');
        //     $(this).addClass('active');                
        // });            

 // alert(window.location.pathname);
    $("ul.nav >li ").click(function(e){
        if($(this).attr("href")==window.location.pathname)
        $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
            // e.preventDefault();
    })