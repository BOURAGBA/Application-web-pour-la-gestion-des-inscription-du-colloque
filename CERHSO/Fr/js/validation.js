  $(function(){
	   $("#username_error_message").hide();
	   $("#name_error_message").hide();
	   $("#prenom_error_message").hide();
	   $("#institution_error_message").hide();
	   $("#ville_error_message").hide();
	   $("#pays_error_message").hide();
	   $("#phone_error_message").hide();
	   $("#email_error_message").hide();
	   $("#namec_error_message").hide();
	   $("#prenomc_error_message").hide();
	   $("#institutionc_error_message").hide();
	   $("#villec_error_message").hide();
	   $("#paysc_error_message").hide();
	   $("#phonec_error_message").hide();
	   $("#emailc_error_message").hide();
	 
	 
	 var error_username = false;
	 var name_username = false;
	 var prenom_username = false;
	 var institution_username = false;
	 var ville_username = false;
	 var pays_username = false;
	 var phone_username = false;
	 var error_email = false;
	 var namec_username = false;
	 var prenomc_username = false;
	 var institutionc_username = false;
	 var villec_username = false;
	 var paysc_username = false;
	 var phonec_username = false;
	 var error_emailc = false;
	 
	 
		
	 //Pour vérifier le fichier avant de télécharger
	  $("#doc_file").change(function () {
        var fileExtension = ['doc','docx', 'pdf'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("le fichier n'est pas autorisé => voir types autorisé : "+fileExtension.join(', '));
        }
		if (doc_file.size > 1024 ){
        alert('Taille max est 1024 MO');
		}
		});
	   ////////////////
	  $("#username").focusout(function(){		  
		
		 check_username(); 
	  });
	  $("#name").focusout(function(){		  
		
		 check_name(); 
	  });
	  $("#prenom").focusout(function(){		  
		
		 check_prenom(); 
	  });
	  $("#institution").focusout(function(){		  
		
		 check_institution(); 
	  });
	  $("#ville").focusout(function(){		  
		
		 check_ville(); 
	  });
	  $("#pays").focusout(function(){		  
		
		 check_pays(); 
	  });
	  $("#phone").focusout(function(){		  
		
		 check_phone(); 
	  });
	 $("#email").focusout(function(){		  
	 check_email(); 
	    });
	 $("#namec").focusout(function(){		  
		
		 check_namec(); 
	  });
	  $("#prenomc").focusout(function(){		  
		
		 check_prenomc(); 
	  });
	  $("#institutionc").focusout(function(){		  
		
		 check_institutionc(); 
	  });
	  $("#villec").focusout(function(){		  
		
		 check_villec(); 
	  });
	  $("#paysc").focusout(function(){		  
		
		 check_paysc(); 
	  });
	  $("#phonec").focusout(function(){		  
		
		 check_phonec(); 
	  });
	 $("#emailc").focusout(function(){		  
	 check_emailc(); 
	    });
	  function check_username(){
		  var username_lenght = $("#username").val().length;
		  if(username_lenght < 5 || username_lenght > 20){
			 $("#username_error_message").html("Titre de l'article doit contenir 5-20 caractères");
			 $("#username_error_message").show();
			 error_username=true;
		  }else{
			  $("#username_error_message").hide();
		  }
	  }
	  function check_name(){
		  var name_lenght = $("#name").val().length;
		  if(name_lenght < 5 || name_lenght > 20){
			 $("#name_error_message").html("Nom doit contenir 5-20 caractères");
			 $("#name_error_message").show();
			 error_name=true;
		  }else{
			  $("#name_error_message").hide();
		  }
	  }
	  function check_prenom(){
		  var prenom_lenght = $("#prenom").val().length;
		  if(prenom_lenght < 5 || prenom_lenght > 20){
			 $("#prenom_error_message").html("Prénom doit contenir 5-20 caractères");
			 $("#prenom_error_message").show();
			 error_prenom=true;
		  }else{
			  $("#prenom_error_message").hide();
		  }
	  }
	  function check_institution(){
		  var institution_lenght = $("#institution").val().length;
		  if(institution_lenght < 5 || institution_lenght > 20){
			 $("#institution_error_message").html("Institution doit contenir 5-20 caractères");
			 $("#institution_error_message").show();
			 error_institution=true;
		  }else{
			  $("#institution_error_message").hide();
		  }
	  }
	  function check_ville(){
		  var ville_lenght = $("#ville").val().length;
		  if(ville_lenght < 5 || ville_lenght > 20){
			 $("#ville_error_message").html("Ville doit contenir 5-20 caractères");
			 $("#ville_error_message").show();
			 error_ville=true;
		  }else{
			  $("#ville_error_message").hide();
		  }
	  }
	  function check_pays(){
		  var pays_lenght = $("#pays").val().length;
		  if(pays_lenght < 5 || pays_lenght > 20){
			 $("#pays_error_message").html("Pays doit contenir 5-20 caractères");
			 $("#pays_error_message").show();
			 error_pays=true;
		  }else{
			  $("#pays_error_message").hide();
		  }
	  }
	  function check_phone(){
		var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
		if (filter.test($("#phone").val())) {
			   $("#phone_error_message").hide();
        }
      else {
        $("#phone_error_message").html("Numéro du téléphone est invalide");
	   $("#phone_error_message").show();
		error_phone = true;
      }
					 
	  }
      function check_email(){
		  
		  var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		  if(pattern.test($("#email").val())){
			   $("#email_error_message").hide();
		}else{
    	$("#email_error_message").html("Adresse email est invalide");
	   $("#email_error_message").show();
		error_email = true;
			
		  }
	  }
	   function check_namec(){
		  var namec_lenght = $("#namec").val().length;
		  if(namec_lenght < 5 || namec_lenght > 20){
			 $("#namec_error_message").html("Nom doit contenir 5-20 caractères");
			 $("#namec_error_message").show();
			 error_namec=true;
		  }else{
			  $("#namec_error_message").hide();
		  }
	  }
	  function check_prenomc(){
		  var prenomc_lenght = $("#prenomc").val().length;
		  if(prenomc_lenght < 5 || prenomc_lenght > 20){
			 $("#prenomc_error_message").html("Prénom doit contenir 5-20 caractères");
			 $("#prenomc_error_message").show();
			 error_prenomc=true;
		  }else{
			  $("#prenomc_error_message").hide();
		  }
	  }
	  function check_institutionc(){
		  var institutionc_lenght = $("#institutionc").val().length;
		  if(institutionc_lenght < 5 || institutionc_lenght > 20){
			 $("#institutionc_error_message").html("Institution doit contenir 5-20 caractères");
			 $("#institutionc_error_message").show();
			 error_institutionc=true;
		  }else{
			  $("#institutionc_error_message").hide();
		  }
	  }
	  function check_villec(){
		  var villec_lenght = $("#villec").val().length;
		  if(villec_lenght < 5 || villec_lenght > 20){
			 $("#villec_error_message").html("Ville doit contenir 5-20 caractères");
			 $("#villec_error_message").show();
			 error_villec=true;
		  }else{
			  $("#villec_error_message").hide();
		  }
	  }
	  function check_paysc(){
		  var paysc_lenght = $("#paysc").val().length;
		  if(paysc_lenght < 5 || paysc_lenght > 20){
			 $("#paysc_error_message").html("Pays doit contenir 5-20 caractères");
			 $("#paysc_error_message").show();
			 error_paysc=true;
		  }else{
			  $("#paysc_error_message").hide();
		  }
	  }
  	function check_phonec(){
		var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
		if (filter.test($("#phonec").val())) {
			   $("#phonec_error_message").hide();
        }
      else {
        $("#phonec_error_message").html("Numéro du téléphone est invalide");
	   $("#phonec_error_message").show();
		error_phonec = true;
      }
					 
	  }
      function check_emailc(){
		  
		  var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		  if(pattern.test($("#emailc").val())){
			   $("#emailc_error_message").hide();
		}else{
    	$("#emailc_error_message").html("Adresse email est invalide");
	   $("#emailc_error_message").show();
		error_emailc = true;
			
		  }
	  }
  });
