export default{
	state: {
     	itens:{}     	
    },
    mutations:{
    	setItem(state,data){
           
            

    		state.itens = data
    	}
    },
    actions:{
    	setItens(context,data){    			
             

             context.commit('setItem',data)		


    	}
    }
}