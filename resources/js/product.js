import Vue from 'vue'
import vueResource from 'vue-resource'

Vue.use(vueResource)

new Vue({
    el: '#products',
    data: {
        txt:"teste1",
        erro: null,
        product:{
            id:null,
            name:'',
            description:'',
            price: '',
        },
        categories:{}

    },
    mounted: function () {
        this.getCategory();
    },
    methods: {

        getCategory: function () {
           const url = '/products/getCategory'
            this.$http.get(url).then((res) => this.categories = res.data )
    },

    }
})
