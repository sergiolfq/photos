<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <bio-component :profile="profile" />

                <div class="row album-section" style="margin-top:1rem">
                    <div class="col-md-4" v-for="item in profile.album" :key="item.id">
                       <card-component :item="item" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import BioComponent from './BioComponent.vue';
import CardComponent from './CardComponent.vue';


    function newProfile(){
        return {
            name: '',
            bio: '',
            profile_picture: '',
            phone: '',
            email : '',
            album: []
        }
    }

    export default {
  components: { BioComponent, CardComponent },
        props: ['id'],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return { profile : newProfile() }
        },

        created(){
            if(this.id){
                axios.get('/api/users/' + this.id +'/album')
                .then( res => this.profile = res.data );
            }
        }

    }
</script>
