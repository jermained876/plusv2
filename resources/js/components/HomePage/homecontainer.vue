<template>
<div>

  <buysection v-if="buysectiondata" :buysectiondata="buysectiondata"></buysection>
  <newsection v-if="newsectiondata" :newsectiondata="newsectiondata"></newsection>
  
  <salesection v-if="salesectiondata" :salesectiondata="salesectiondata"></salesection>

</div>
</template>

<script>
import Buysection from './buyonesection'
import Newsection from './newsection'
import Salesection from './salesection'

export default {
components:{Buysection,Newsection,Salesection},
data(){
    return{
        buysectiondata:null,
        newsectiondata:null,
        salesectiondata:null,
    }
},

created(){

axios.get("/api/mainpagebuyone").then((res)=>this.buysectiondata=res.data).catch((error)=>console.log(error))
axios.get("/api/mainpagesale").then((res)=>this.salesectiondata=res.data).catch((error)=>console.log(error))
axios.get("/api/mainpagenewp").then((res)=>this.newsectiondata=res.data).catch((error)=>console.log(error))

}
}
</script>

<style>

</style>
