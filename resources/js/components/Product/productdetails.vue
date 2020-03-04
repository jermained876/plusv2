<template>



          <!--- use before calling container <div class="row"> -->


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" @click="productOpen">
                <div width="100px" height="100px">
                    <img class="card-img-top" :src="newImageurl" alt="" >
                </div>

              <div class="card-body">
                <h5 class="card-title">
                  {{item.name}}
                </h5>
                {{item.description}}

                <p class="font-weight-bold text-danger">Condition : {{item.condition.name}}<p>

                <p class="card-text"></p>
              </div>

              <div class="card-footer text-muted text-small">

                 {{item.posted}} by {{item.user.name}}

                 <h5>$1500.00</h5>
              </div>

            </div>
          </div>



</template>

<script>
import ImageManage from "../../Helper/ImageManage"
export default {
    props:['item'],
    methods:{
        productOpen(){
           // console.log(this.item)
            EventBus.$emit('openProduct',this.item)
        }
    },
    data(){
        return{
            newImageurl:null
        }
    },
    watch:{
        item(){
        }
    },
    created(){
          //  ImageManage.imageResize700x400(this.item.images[0].image_url)
          //  console.log(this.item.images[0].image_url)
        //console.log('true me')

        this.newImageurl=ImageManage.imageResize(this.item.images[0].image_url,250,250)

    },
    mounted(){

    }

}
</script>

<style>

</style>
