<template>
  <div>

      <navbar></navbar >

  <div  style="height: 80px">
    </div>

  <!-- Page Content -->

  <div class="container mt-1">



<router-view></router-view>

  </div>
  <!-- /.container -->

  <!-- Footer -->
<foot></foot>


  </div>
</template>

<script>

import Navbar from "./components/navbar/navbar.vue"

import Foot from "./components/footer/footer.vue"


export default {
    components:{Navbar,Foot},
    created(){
        console.log("test");
    }

}
</script>

<style>
router-link :{
background-color: blue;
}
</style>
