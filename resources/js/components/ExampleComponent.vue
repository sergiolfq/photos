<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <img :src="`/storage/folder/profile.png`"  >
                    </div>
                    <div class="col-md-7">
                        <h2>{{ profile.name }}</h2>
                        <h4>Bio</h4>
                        <p>{{ profile.bio }}</p>
                    </div>
                    <div class="col-md-3">
                        <label>Phone</label>
                        <p>{{profile.phone}}</p>
                        <label>Email</label>
                        <p>{{profile.email}}</p>
                    </div>
                </div>

                <div class="row" style="margin-top">
                    <div class="col-md-4" v-for="item in profile.album" :key="item.id">

                        <div class="card" style="margin:1rem">
                            <label class="card-title"> {{ item.title }} </label>
                            <img class="card-img-top" :src="`storage/${item.img}`" >
                            <div class="card-body">
                               <p class="card-text"> {{ item.description }} </p>
                                <svg v-show="item.featured" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                               <span class="float-right"> {{ item.date }} </span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
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
