<template>
<div>
  <h4 class="font-weight-bold">{{catdata.name}}</h4>
 
    <div class="row" v-if="products">
        <pdetail v-for="product in products" :key="product.id" :item="product"></pdetail>
    </div>



</div>
</template>

<script>

import pdetail from '../Product/productdetails'
export default {
    
    props:['catdata'],
    components:{pdetail},
    data(){
        return {
            products:{}
        }
    },
    watch:{
        catdata(){
              this.products=this.catdata.products 
        }
    },
    mounted() {
       this.products=this.catdata.products 
    },

}
</script>

<style>

</style>
