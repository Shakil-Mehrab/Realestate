<template>
    <div>   
        <form @submit.prevent="postReview"> 
             <div class="form-group">
                <label for="">Rate It</label>
                <star-rating v-model="formData.star" :increment="0.5" :star-size="30"></star-rating>
              </div>

              <div class="form-group">
                <label for="">Description</label>
                <textarea type="text" class="form-control" v-model="formData.body" id="" placeholder="Comment" required></textarea>
              </div>

              <button type="submit" class="button">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        props:['property','url'],
         data(){
            return {
              formData:{}
            }
        },
        methods:{
            postReview(){
                this.formData.property_id=this.property.id;

                axios.post(this.url,this.formData)
                .then(data=>{
                    location.reload();
                })
                .catch(error=>{
                    console.log(error);
                })
            }
        },
    }
</script>