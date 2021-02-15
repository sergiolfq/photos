<template>
    <div class="card mt-2" >
        <label class="card-title"> {{ item.title }} </label>
        <img data-toggle="modal" data-target="#exampleModalCenter"  v-on:click="openModal(`storage/${item.img}`)" class="card-img-top" :src="`storage/${item.img}`" >
        <div class="card-body">
            <p class="card-text limit-text"> {{ item.description }} </p>
            <svg v-show="item.featured" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            <span class="float-right bio"> {{ item.date }} </span>
        </div>
    </div>
</template>

<script>
export default {
    props: ['item'],
    methods: {
        openModal: function(src){
                document.querySelector("#modal-content").setAttribute('src',src);
        }
    }
}
</script>
