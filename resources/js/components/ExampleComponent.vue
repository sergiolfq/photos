<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row bg-white pt-1">
                        <div class="col col-md-3">
                            <div class=" mt-2 center">
                                <img class="img-fluid  ml-3 rounded-circle avatar" :src="`storage/${profile.profile_picture}`" >
                            </div>
                        </div>
                        <div class="col-md-6 " >
                            <div class="mt-3">
                                <h2 class="profile-name">{{ profile.name }}</h2>
                                <label class="bio bold">Bio</label>
                                <p class="bio limit-text">{{ profile.bio }}</p>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2 contact-col">
                            <div class="mt-5">
                                <label class="bio bold">Phone</label>
                                <p class="pink-text">{{profile.phone}}</p>
                                <label class="bio bold">Email</label>
                                <p class="pink-text">{{profile.email}}</p>
                            </div>
                        </div>
                </div>

                <div class="row album-section" style="margin-top:1rem">
                    <div class="col-md-4" v-for="item in profile.album" :key="item.id">

                        <div class="card mt-2" >
                            <label class="card-title"> {{ item.title }} </label>
                            <img class="card-img-top" :src="`storage/${item.img}`" >
                            <div class="card-body">
                               <p class="card-text limit-text"> {{ item.description }} </p>
                                <svg v-show="item.featured" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                               <span class="float-right bio"> {{ item.date }} </span>
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
