<template>



<div class="card text-white mb-3" >
  <div class="card-header bg-danger ">Shop Name</div>

    <div class="list-group">
          <a href="#" class="list-group-item">Categorrry 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

</div>







</template>

<script>
export default {

    created(){
        console.log('test')
        axios.get('/api/category').then((res)=>console.log(res)).catch((error)=>console.log(error))
    }

}
</script>

<style>

</style>
