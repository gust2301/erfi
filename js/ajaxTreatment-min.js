function submitForm(){const form=document.getElementById("contactForm");if(!form.reportValidity()){return}const formData=new FormData(form);$.ajax({type:"POST",url:"database/contact.php",data:formData,contentType:false,processData:false,cache:false,success:function(response){console.log("Réponse du serveur :",response);$("#messageContainer").html("<p>"+response+"</p>");if(response.trim()!==""){$("#messageContainer").show()}else{$("#messageContainer").hide()}}})}