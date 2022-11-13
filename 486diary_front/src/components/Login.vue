<template>
    <div class="login">
        <div class="input">
            <div class="id">
                <label for="uid">
                    아이디 : <input type="text" id="uid" v-model="info.uid" />
                </label>
            </div>
            <div class="pwd">
                <label for="pwd">
                    비밀번호:<input type="password" id="pwd" v-model="info.pwd" />
                </label>
            </div>

            <button v-on:click="doSubmit">로그인</button>
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
                uid: '',
                pwd: '',
            }
        }
    },
    methods: {
        doSubmit() {
            console.log(this.info.uid, this.info.pwd);
        }
    },
}
</script>

