<template>
    <div class="login">
        <div class="input">
            <input type="text" v-model="info.uid" />
            <input type="password" v-model="info.pwd" />
        </div>
    </div>
</template>

<script>
export default {
    name: 'Login',
    props: {},
    data() {
        return {
            info: {
                uid : '',
                pwd : '',
            }
        }
    },
    methods: {

    },
}
</script>

