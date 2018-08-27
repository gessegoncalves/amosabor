
<script>
    export default {


      computed:{
          itens(){        
             return this.$store.state.itens.itens    
          }
      },
      props: ['obj'],
      methods:{

            enviar:function(data){

         

               this.$store.dispatch('setItens',data)
               this.marcado = !this.marcado;

              
            }

      },

           
      data(){
            return{
               marcado:false     
                 
            }
      }      
    }
</script>

<template>
<div>
            
      <p @click.prevent="enviar(JSON.parse(obj))">
            <i class="fa fa-check-square-o" aria-hidden="true"  v-show="marcado==true" ></i>
            <i class="fa fa-square-o" aria-hidden="true" v-show="marcado==false"></i> Adicionar ao pedido ?
      </p>
</div>
 
</template>
<style scoped>
  
</style>




