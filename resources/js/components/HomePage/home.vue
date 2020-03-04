<template>
  <div class="row mt-2">



<div class="col-lg-3 d-none d-md-block " >
     <sidebar></sidebar>
 </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
    <home-container v-if="homecontainer"></home-container>
    <category-container v-if="categorycontainer" :catdata="catdata"></category-container>
    <product-container v-if="productcontainer" :productselected="productselected"></product-container>
      </div>

    </div>
    <!-- /.row -->
</template>

<script>
import Sidebar from "../sidebar/homesidebar.vue"

import Container from "../container/container.vue"
import HomeContainer from "./homecontainer"
import CategoryContainer from '../category/categorycontainer'
import ProductContainer from '../Product/productcontainer'

export default {

components:{Sidebar,Container,HomeContainer,CategoryContainer,ProductContainer},
data(){
            return {
                homecontainer:true,
                productcontainer:false,
                categorycontainer:true,
                catdata:{},
                productselected:null

                    }
},
methods:{
            clearAllContainer(){
                this.homecontainer=false;
                this.productcontainer=false;
                this.categorycontainer=false;
            },
            openCategoryContainer(){
                this.clearAllContainer();
                this.categorycontainer=true;
            },
              openHomeContainer(){
                this.clearAllContainer();
                this.homecontainer=true;
            },
              openProductContainer(){
                this.clearAllContainer();
                this.productcontainer=true;
            }

},

created() {
  /* EventBus.$on('SelectCat',(item)=>{console.log(item+"here")
    axios.get('/api/category/'+item).then((res)=>{console.log(res.data)
    this.catdata=res.data
    }).catch((error)=>console.log(error))
    this.openCategoryContainer()})

    */

            EventBus.$on('openProduct',(item)=>{
                this.productselected=item
                //console.log(item)
                console.log(this.productselected)
                this.openProductContainer()

            })

            EventBus.$on('closeProduct',()=>{
              this.productselected=null
              this.openHomeContainer()

            })


},
mounted(){

}
}
</script>

<style>

</style>
