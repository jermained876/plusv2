<template>
<div>
  
<button class="btn btn-primary mb-2" @click="closeproduct()" >Home</button>
<!--<div class="col-lg-4 col-md-6 mb-4"> -->

    <div class="row">

        <div class="col-lg-6 col-md-6 productImageContainer" >
                <div class="productMainImage mb-4">

                    <img :src="mainImageUrl" class="img-fluid" alt="Responsive image">

                </div>
                 <div  class="productAllImage">

                     <div class="row">

                           <div class="col-3 mb-4" v-for="(image,index) in productselected.images" :key="image.id">
                              
                               <img :src="reSize(image.image_url,100,100)" class="img-fluid" alt="Responsive image" @click="imageSelected(index)">
                             
                             </div>

                         </div>
                    
                </div>

        </div>

        <div class="col-lg-6 col-md-6 productDetailsContainer">
            <h3>{{productselected.name}}</h3>
         
            <div class="text-success font-weight-bold">JA $1,000</div>
            <br>
            <div class="text-info font-weight-bold border-bottom-2 border-blue">This item may take 1-3 days to deliver</div>
             <div class="text-secondary border-bottom-2 border-blue"> Category: {{productselected.category.name}}  </div>
            
             <div class="mt-4 mb-5">  {{productselected.description}}</div>
              <div class="text-danger font-weight-bold border-blue"> Condition: {{productselected.condition.name}}  </div>
        </div>


    </div>


 
  <carproduct :images="productselected.images"></carproduct>
  </div>
</template>

<script>
import Carproduct from '../carousel/carousel'
import ImageManage from "../../Helper/ImageManage"
export default {
    components:{Carproduct},


    props:['productselected'],
    data(){
    return{
        mainImageUrl:null

        }
    },
    methods:{

        imageSelected(index){
                console.log(index)
                
        this.mainImageUrl=this.productselected.images[index].image_url
        },
        reSize(image,x,y){
            return ImageManage.imageResize(image,x,y)
        },
        closeproduct()
        {
            console.log('hereclose')
            EventBus.$emit('closeProduct')
        }
    },
    created()
    {
        this.mainImageUrl=this.productselected.images[0].image_url
    }


}
</script>

<style lang="scss" scoped>

 .productMainImage
 {
 
  width: 100%;
  background-color: powderblue;
 }
 .productAllImage
 {
     
  width: 100%;

 }

.productImageContainer{
  
  width: 100%;
  

}


.productDetailsContainer{
     height: 80vh;
  width: 100%;
 }

</style>>

