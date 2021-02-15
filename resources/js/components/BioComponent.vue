<template>
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
</template>

<script>
export default {
    props: ['profile']
}
</script>
