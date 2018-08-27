

require('bootstrap');

import Vue from 'vue/dist/vue.js'
import Vuex from 'vuex/dist/vuex.js'


import GsItem   from './components/GsItem.vue'
import GsSelect from './components/GsSelect.vue'
import GsLista  from './components/GsLista.vue'

Vue.use(Vuex)

import VuexStore from './vuex/store.js'

const store  = new Vuex.Store(VuexStore)


new Vue({


		
	    el:'#myContainer',
	    store,
        components:{
	     	GsItem,
	     	GsSelect,
	     	GsLista
	    }

	    
	    
})