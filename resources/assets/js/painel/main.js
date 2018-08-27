$(document).ready(function(){

     /*Pega os valores selecionado e  coloca no formulario 
      para atualizar categoria log apoz abre o pop UP , se for 
      um novo cadastgra limpa o formulario */


     
	  $(".mybutton").click(function(){


	        $('#myModal').modal({ show: 'true'  }); 

       });

       //////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/*   $(".btncidade").click(function(){


	     	var  cidade = parseInt($(this).attr("id"));

 		    if(cidade > 0){

		          var id = ('#cidade_'+ $(this).attr("id"));
		          var uf = ('#uf_'+ $(this).attr("id"))


		          $('#id').val(cidade);
		          $('#cidade').val($(id).val()); 
		          $('#uf').val(   $(uf).val()    ); 
		          $('#btnregistra').val('ATUALIZAR');
		          $('#myModalLabel').text('ATUALIZAR CIDADE');	
	        }

	        if(cidade == 0){
	        	  $('#id').val('0');
	              $('#cidade').val('');
	              $('#uf').val('GO');  
	              $('#btnregistra').val('CADASTRAR');
	              $('#myModalLabel').text('CADASTRAR CIDADE');	
	        }

	        $('#myModal').modal({ show: 'true'  }); 

       });



	    $(".btnbairro").click(function(){


	     	var  id = parseInt($(this).attr("id"));

 		    if(id > 0){

		          var cidade =  ('#cidade_'+ $(this).attr("id"));
		          var bairro  = ('#bairro_'+ $(this).attr("id"))

                  


		          $('#id').val(id);
		          $('#lstcidade').val(   $(cidade).val()      ); 
		          $('#bairro').val(   $(bairro).val()    ); 
		          $('#btnregistra').val('ATUALIZAR');
		          $('#myModalLabel').text('ATUALIZAR BAIRRO');	
	        }
//
	        if(id == 0){
	        	  $('#id').val('0');
	              $('#lstcidade').val('');
	              $('#bairro').val('');  
	              $('#btnregistra').val('CADASTRAR');
	              $('#myModalLabel').text('CADASTRAR BAIRRO');	
	        }

	        $('#myModal').modal({ show: 'true'  }); 

       });

       
	      $(".btnImovel").click(function(){

	        	var  id = parseInt($(this).attr("id"));
	     	  	
	     	 	



 		    if(id > 0){

 		    		var obj =  JSON.parse($('#obj_'+id).val());

                
					var	categoria = ($('#cate_'+id).val());
					var cidade    = ($('#cida_'+id).val());
					var bairro    =	($('#bair_'+id).val());
                
  
		      
		                $('#id_imv').val(obj.id);
		                $('#categoria_imv').val(categoria);
		       	    	$('#cidade_imv').val(cidade);

		       	    	$('#cidade_imv').trigger("click");

		       	    	setTimeout(function(){ 

		       	    			 $('#bairro_imv').val(bairro);
		       	    			
		       	    	 }, 1000);

		       	    		

		        	   
		       			$('#logradouro_imv').val(obj.logradouro);	
		       			$('#complemento_imv').val(obj.complemento);		
		       			$('#referencia_imv').val(obj.referencia);
		       			$('#cep_imv').val(obj.cep);	
		       			$('#valor_imv').val(obj.valor);
		       			$('#area_construida_imv').val(obj.area_construida);	
		       			$('#area_total_imv').val(obj.area_total);
		       			$('#quartos_imv').val(obj.quartos);
		       			$('#garagens_imv').val(obj.vagas_garagem);	
		       			$('#banheiros_imv').val(obj.banheiros);
             			$('#suites_imv').val(obj.suites); 
             			$('#btnregistra').val('ATUALIZAR');
	                    $('#myModalLabel').text('ATUALIZAR IMÓVEL');
	      	         
	
                        
	
	   }

	        if(id == 0){


	        	        $('#id_imv').val('');
		                $('#categoria_imv').val('');
		       	    	$('#cidade_imv').val('');
		       	    	$('#bairro_imv').val('');
		       	    	$('#logradouro_imv').val('');	
		       			$('#complemento_imv').val('');		
		       			$('#referencia_imv').val('');
		       			$('#cep_imv').val('');	
		       			$('#valor_imv').val('');
		       			$('#area_construida_imv').val('');	
		       			$('#area_total_imv').val('');
		       			$('#quartos_imv').val('');
		       			$('#garagens_imv').val('');	
		       			$('#banheiros_imv').val('');
             			$('#suites_imv').val(''); 

             			$('#btnregistra').val('');
	                    $('#myModalLabel').text('');	
	              		
	              		$('#btnregistra').val('CADASTRAR');
	              		$('#myModalLabel').text('CADASTRAR IMÓVEL');	
	        }



	        	      
		       	    	

	        	  $('#myModal').modal({ show: 'true'  });  
                  
	                
	         

	        

       });



      $('.btncliente').click(function(){


      

      		var  id = parseInt($(this).attr("id"));

      		if(id > 0){
                    var obj =  JSON.parse($('#obj_'+id).val());


                    $('#id').val(obj.id);
					$('#nome').val(obj.nome);       
					$('#nascimento').val(obj.nascimento); 
					$('#sexo').val(obj.sexo);       
					$('#estadocivil').val(obj.estadocivil);
					$('#cidade').val(obj.cidade);     
					$('#bairro').val(obj.bairro);     
					$('#logradouro').val(obj.logradouro); 
					$('#complemento').val(obj.complemento);
					$('#referencia').val(obj.referencia); 
					$('#cep').val(obj.cep);        
					$('#indicacao').val(obj.indicacao);  

					$('#btnregistra').val('ATUALIZAR');
	                $('#myModalLabel').text('ATUALIZAR CLIENTE');
        	}
      	
            
            if(id == 0){

                 

                    $('#id').val('0');
					$('#nome').val('');       
					$('#nascimento').val(''); 
					$('#sexo').val('');       
					$('#estadocivil').val('');
					$('#cidade').val('');     
					$('#bairro').val('');     
					$('#logradouro').val(''); 
					$('#complemento').val('');
					$('#referencia').val(''); 
					$('#cep').val('');        
					$('#indicacao').val('');  

					$('#btnregistra').val('CADASTRAR');
	              	$('#myModalLabel').text('CADASTRAR CLIENTE');	
        	}



      	   $('#myModal').modal({ show: 'true'  });  
      });


   

	  $(".btnTexto").click(function(){   	
    

              var  id = parseInt($(this).attr("id")); 

              if(id > 0){

              
    
                     $('#id').val(id);
                     $('#titulo').val($('#titulo_'+id).val());
                     $('#texto').val($('#texto_'+id).val());
                     
                     $('#btnregistra').val('ATUALIZAR');
	                 $('#myModalLabel').text('ATUALIZAR TEXTO');

              }

              if(id == 0){

              		 $('#id').val(0);
                     $('#titulo').val('');
                     $('#texto').val('');

                    $('#btnregistra').val('CADASTRAR');
	                $('#myModalLabel').text('CADASTRAR TEXTO');	
              }
                
      		  $('#myModal').modal({ show: 'true'  });  

      });



    


      $('.btnTopico').click(function(){
    
         var id =  ($(this).attr("id")).substring(1,10);

      	 $('#texto_id').val(id);
      	 $('#topico').val('');
      	 $('#myModalTopico').modal({ show: 'true'});  

      });





       ////////////////////////////////////////////////////
       ///preeche a lista de cidades cadastradas no formulario cadastro de bairros


       	$('#lstcidade').ready( function(){ 

             $('#lstcidade').append($('<option>', { value:'',text:''}));
     
			$.get("/painel/cidade/listar", function( data ) {
           			for (var x in data) {
           				$('#lstcidade').append($('<option>', { value: data[x].	id,text:(data[x].cidade).toUpperCase()},'</option>'));
           			}
			})
        });



         $('#categoria_imv').ready( function(){ 
			$.get("/painel/categoria/listar", function( data ) {
           			for (var x in data) {
           				$('#categoria_imv').append($('<option>', { value: data[x].id,text:(data[x].categoria).toUpperCase()},'</option>'));
           			}
			})
        });




        $('#cidade_imv').ready( function(){           
			$.get("/painel/cidade/listar", function( data ) {
           			for (var x in data) {
           				$('#cidade_imv').append($('<option>', { value: data[x].id,text:(data[x].cidade).toUpperCase()},'</option>'));
           			}
			})
        });



       $('#cidade_imv').click( function(){ 
  


          
			$.get("/painel/bairro/listar", function( data ) {


					  $( "#bairro_imv" ).empty();

           			for (var x in data) {

           			    if(data[x].cidade_id ==  $('#cidade_imv').val()){
           				     $('#bairro_imv').append($('<option>', { value: data[x].id,text:(data[x].bairro).toUpperCase()},'</option>'));
           			    }

           			}
			})
        });
       


       //pre load de imagens para upload

            




      var inputLocalFont = document.getElementById("myFile");

     
		      inputLocalFont.addEventListener("change",previewImages,false);

		       function previewImages(){

					    var fileList = this.files;
					    
					    var anyWindow = window.URL || window.webkitURL;


		                    
		                    


					        for(var i = 0; i < fileList.length; i++){
					          var objectUrl = anyWindow.createObjectURL(fileList[i]);
					            var text =  "<div class='col-lg-3'>";
					                text += "<div class='thumbnail'>";
					                text += "<img src='" + objectUrl + "' style='max-height: 130px' />";
					                text += "<div class='caption'>";
					                text += "<p><input type='text'  name='titulo["+i+"]' class='form-control' placeholder='titulo' ><p>";
					                text += "<p><textarea  name='text["+i+"]'  rows='4' cols='5' class='form-control' placeholder='texto'/><p>"
					                text += "</div></div></div>" ;

					          $('#linha').after(text);
					          window.URL.revokeObjectURL(fileList[i]);
					        }
		           
		         }
*/
       
    
  
 
});


