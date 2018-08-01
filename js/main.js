$(document).ready(function(){
	$(".menu ul li:has(ul)").click(function(e){  // funcion para seleccionar  de la siguiente forma  nav ul li > ul 
		e.preventDefault();
		                    // No aparezca las almohadillas esto se da por que se le pasa el evento click                                         //como parametro de la funcion si te fijas e esta como parametro quiere decir                            //e = click.
		 if($(this).hasClass("activado")) {
             $(this).removeClass("activado");
              $(this).children("ul").slideUp();                             //si el elemento que hacemos click tiene la clase activado
		} else{
			$(".menu ul li ul").slideUp();            //oculta todos los ul 
			$(".menu ul li").removeClass("activado"); // le quita la clase activado a los li
			$(this).addClass("activado");             // se le coloca la clase activado solo al que fue clickeado
			$(this).children("ul").slideDown();       //  todos los elementos ul que sean hijos del elemento clickeado lo vamos
			// a mostrar

		}

     }) 
	 	                



	var altura = $('header').offset().top; // se define la altura 


	$(window).scroll(function()
		{
			if ($(this).scrollTop() > altura ){
			  // alert($(this).scrollTop() + " > " + altura);	
			 $('header').addClass("fixed");
			}else{
		     $('header').removeClass("fixed");
		     //alert($(this).scrollTop() + " > "  + altura);

	     	}

		});
});