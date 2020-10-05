$(document).ready(function () {
			function toggleSidebar(side) {
				if (side !== "left" && side !== "right") {
					return false;
				}
				var left = $("#sidebar-left"),
					right = $("#sidebar-right"),
					content = $("#content"),
					openSidebarsCount = 0,
					contentClass = "";
				
				// toggle sidebar
				if (side === "left") {
					left.toggleClass("collapsed");
				} else if (side === "right") {
					right.toggleClass("collapsed");
				}
				
				// determine number of open sidebars
				if (!left.hasClass("collapsed")) {
					openSidebarsCount += 1;
				}
				
				if (!right.hasClass("collapsed")) {
					openSidebarsCount += 1;
				}
				
				// determine appropriate content class
				if (openSidebarsCount === 0) {
					contentClass = "col-md-12";
				} else if (openSidebarsCount === 1) {
					contentClass = "col-md-9";
				} else {
					contentClass = "col-md-6";
				}
				
				// apply class to content
				content.removeClass("col-md-12 col-md-9 col-md-6")
					   .addClass(contentClass);
			}
			$(".toggle-sidebar-left").click(function () {
				toggleSidebar("left");
				
				return false;
			});
			$(".toggle-sidebar-right").click(function () {
				toggleSidebar("right");
				
				return false;
			});
		});

/*-----------------------------------*/
$(document).ready(function(){
   $("#curso").on('click', function(){
       $("#acaoform")[0].reset();
       
       $("#acaoform").unbind('submit').bind('submit', function(){
          var form = $(this);
           
           var nome = $("#nome").val();
           
           
           if(nome == ""){
               $("#nome").closest('.form-group').addClass('has-error');
               $("#nome").after('<p class="text-danger">Campos vazios</p>');
           }else{
               $("#nome").closest('.form-group').removeClass('has-error');
               $("#nome").closest('.form-group').addClass('has-success');
               $(".text-danger").remove();
           }
           
           
           if(nome){
               alert('gravado com successo');
           }
           
           return false;
       });
   }); 
});