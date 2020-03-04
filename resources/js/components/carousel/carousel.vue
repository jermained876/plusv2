<template>
  <div>




  </div>
</template>

<script>
export default {
    props:['images'],
    methods:{
        isactive(index){
            if(index==0)
            {
                console.log('active')
                return true
            }
            else{
                console.log('no active')
            return false
            }
        }
    }

}
</script>

<style>

</style>
