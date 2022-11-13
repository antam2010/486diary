<template>
    <ul>
        <li><router-link to="/board">게시판</router-link></li>
        <li>사진첩</li>
        <li>채팅</li>
    </ul>
</template>

<script>
export default {
    name: 'Main',
    props: {},
    data() {
        return {

        }
    },
    mounted() {
        console.log(this.$store.state);

    },
    methods: {

    },
}
</script>

