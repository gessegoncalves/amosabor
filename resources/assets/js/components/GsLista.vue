<script>


	export default {


      computed:{
          itens(){        
             return this.$store.state.itens.itens    
          }
      },

      watch:{

      		itens:function(data){           


                  
		

	            if(this.lista.indexOf(data.titulo)==-1){
	                  this.lista.push(data.titulo);            
	            }else{
	            	this.lista.splice(this.lista.indexOf(data.titulo),1);
	            }

                  			
      		}

      },
     
      
      data(){
            return{
                 
                   lista:[]                 
                     
                 
            }
      }         



    }
</script>
<template>
  <div class="col-md-12 col-sm-12">
   

	 <table  v-show="lista.length > 0" >
            <tr>
               <th class="text-center"><h4>Itens Selecionados</h4></th>
            </tr>
            <tr  v-for="(item,x) in lista">
                <td  :class="{ 'yelow':x % 2 == 0,'green':x % 2 != 0}">{{item}}</td>
            </tr>
     </table>

	

   </div>
</template>
<style scoped >
	
	.myContainer{
		width: 100%;
		padding: 5px;
	}

	table{
		width: 100%;
		padding: 5px;		 	
		color: #FFF;
	}

	tr{
       
	}
	
	th{
		background-color: #c4c4c4;
	}

	td{
		height:25px; 
		padding: 5px;
		text-transform: uppercase;
	}
    
    .myContainer .aviso{
		 text-align:justify;
		 padding:10px; 

    }

    .myContainer .aviso img{
		margin-top: 10px;
    	width: 100%;	
    }
		    

	.yelow{
			background-color:#c9c9c9;
	}

    .borda{
       	border: 1px solid #D9D9D9;
    }


	.green{
		background-color: #cfcfcf;

	}


</style>