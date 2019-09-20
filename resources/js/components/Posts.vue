<template>
    <div>
        <h1 class="font-normal text-3xl text-gray-900 leading-none">
            Posts
        </h1>
        <ul id="example-1">
            <li v-for="post in posts" :key="post.id">
                {{ post.name }}
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    
    data() {
        return {
            posts : []
        }
    },

    created() {
        axios.get('api/posts').then( response => {
            let { data } = response;
            this.posts = data;
        });
    }

}
</script>