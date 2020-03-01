<template>
  
      

          <!--- use before calling container <div class="row"> -->

    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top mh-100" :src="item.images[0].image_url" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  {{item.name}}
                </h4>
                <h5>$24.99</h5>
                <p class="card-text"></p>
              </div>
              
            </div>
          </div>
  

    
</template>

<script>
export default {
    props:['item']

}
</script>

<style>

</style>
