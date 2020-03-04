<template>
<div>
  <h4 class="font-weight-bold">NEW PRODUCTS</h4>



   <div class="row" v-if="newsectiondata">
        <pdetail v-for="product in newsectiondata.data" :key="product.id" :item="product" @click="openproduct"></pdetail>
    </div>

</div>
</template>

<script>
import Carousel from "../carousel/carousel"
import pdetail from '../Product/productdetails'
export default {
    props:['newsectiondata'],
    components:{Carousel,pdetail},
    data(){
        return {
//products:{}
        }
    },
    methods:{
        openproduct(){
            console.log('hellp')
        }
    },
    watch:{
        catdata(){
            //  this.products=this.catdata.products
        }
    },
    mounted() {
      // this.products=this.catdata.products
    }


}
</script>

<style>

</style>
