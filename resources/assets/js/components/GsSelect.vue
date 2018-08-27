<script>

 export default {

   computed:{
          itens(){        
             return this.$store.state.itens.itens    
          }
      },

      watch:{

          itens:function(data){



              var _data = {"brinquedos_id":"brinquedo_id[" + this.x + "]",
                          "brinquedos_titulo":"brinquedo_titulo[" + this.x + "]",
                          "id":data.id,
                          "titulo":data.titulo}




                       


              for(var i=0;i < this.lista.length;++i) {
                if(this.lista[i].id == data.id){
                   this.lista.splice(i, 1)
                   return;
                }
              }         

    

              this.lista.push(_data);
              this.x++;

                        
          }

      },
     
      
      data(){
            return{
                 
                   lista:[],                  
                   x:0      
                 
            }
      }         

    }

</script>
<template>
	<div >
           


            	<div  v-for="item in lista">     

							                    <input type='hidden' class="form-control" placeholder="item" :name="item.brinquedos_id"     :id="item.brinquedos_id"     :value="item.id" />
                                  <input type='hidden' class="form-control" placeholder="item" :name="item.brinquedos_titulo" :id="item.brinquedos_titulo" :value="item.titulo" />
			        </div>


            
                


	</div>
</template>




							             