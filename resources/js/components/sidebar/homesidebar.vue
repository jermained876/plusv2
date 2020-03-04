<template>



<div class="card text-dark  mb-3" >
  <div class="card-header font-weight-bold text-white bg-danger ">Product Category</div>

   <ul class="list-group">
  <li class="list-group-item" v-for="list in lists" :key="list.id" @click="selected(list.id)">{{list.name}}</li>
</ul>

</div>








</template>

<script>
export default {
    data(){
        return{
            lists:{}
        }
    },
    methods:{
                        selected(item)
                            {
                                //console.log(item)
                                EventBus.$emit('SelectCat',item)
                            }
    },

  created(){
        console.log('test')
   axios.get('/api/category').then((res)=>{console.log(res)
        this.lists=res.data;
        }).catch((error)=>console.log(error))

        
    }

}
</script>

<style lang="scss" scoped>
li{
 cursor: pointer;
}

</style>>



