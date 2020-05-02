import Vue from 'vue'
import vueResource from 'vue-resource'
import jquery  from 'jquery'

Vue.use(vueResource)

new Vue({
    el: '#products',
    data: {
        error: null,
        product:{
            id:null,
            name:'',
            description:'',
            price: '',
            id_category:'',
        },
        file:'',
        filterName:'',
        products:{},
        categories:{},
        message:null,


    },
    filters:{
        formatReal: function (arg) {
            return 'R$' + ((Number(arg)).toFixed(2).replace('.', ','));
        },
    },
    mounted: function () {
        this.getProducts();
        this.getCategory();
    },
    methods: {

        getCategory: function () {
            const url = '/products/getCategory'
            this.$http.get(url).then((res) => this.categories = res.data )
        },
        setFile: function(e){
            this.file = this.$refs.file.files[0];
            // console.log("set file", this.file);

        },
        create: function() {
            let formData = new FormData()
            formData.append('name', this.product.name)
            formData.append('description', this.product.description)
            formData.append('price', this.product.price)
            formData.append('id_category', this.product.id_category)
            formData.append('thumb_url', this.file)

            this.$http.post('/products/createProduct', formData, {headers:{ 'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.getProducts();
                this.message = res.data
                $('#modalUsuario').modal('hide');
            },(res) => {
                this.error = res.data
            })
        },

        getProducts: function (){
            const url = '/products/getProducts'
            this.$http.post(url, {filterName:this.filterName}).then((res) => this.products = res.data)
        },
        editProducts: function (){
        },

        edtProducts: function (){
            const url = '/products/edit'
            let formData = new FormData()
            formData.append('id', this.product.id)
            formData.append('name', this.product.name)
            formData.append('description', this.product.description)
            formData.append('price', this.product.price)
            formData.append('id_category', this.product.id_category)
            formData.append('thumb_url', this.file)

            this.$http.post(url, formData, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                // console.log("res: ", res)
                this.getProducts();
                this.message = res.data
                $('#modalUsuario').modal('hide');
            }, (res) => {
                this.error = res.data
            })
        },
        setProductsEdt: function (product) {
            if (product) {
                this.$set(this, 'product', {
                    id: product.id_product,
                    name: product.name,
                    description: product.description,
                    price: product.price,
                    id_category: product.id_category,
                });
            } else {
                this.$set(this, 'product', {
                    id: null,
                    name: '',
                    description: '',
                    price: '',
                    id_category: '',
                });
            }
        },
        destroy: function(id){
            const url = '/products/destroy'
            // console.log('deletar');
            if (confirm("Confirma operação de exclusao ?")) {
                this.$http.post(url, { id: id }).then((res) => {
                    this.getProducts();
                    this.message = res.data
                }, (res) => {
                    this.error = res.data
                })
            } else {
                event.preventDefault();
            }
        },
        show: function(id){
            const url = '/products/show'
            window.location.href = `/products/show/${id}`
            // this.$http.post(url,{id:id})
            // .then((res) => {})
        }
    }
})
