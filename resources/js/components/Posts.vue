<template>
    <div>
        <h1 class="font-normal text-3xl text-gray-900 leading-none">
            Posts
        </h1>
        <p>
            {{ name }}
        </p>
    </div>

</template>

<script>
export default {
    
    data() {
        return {
            name : ''
        }
    },

    created() {
        axios.get('api/posts').then( response => {
            let { data } = response;
            this.name = data.name;
        });
    }

}
</script>