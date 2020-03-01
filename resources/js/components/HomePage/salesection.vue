<template>
<div>
  <h4 class="font-weight-bold">SALE</h4>
 
   <div class="row" v-if="salesectiondata">
        <pdetail v-for="product in salesectiondata" :key="product.id" :item="product"></pdetail>
    </div>
</div>
</template>

<script>
import Carousel from "../carousel/carousel"
import pdetail from '../Product/productdetails'
export default {
    props:['salesectiondata'],
    components:{Carousel,pdetail},
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
    }


}
</script>

<style>

</style>
