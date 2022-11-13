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
    mounted() {
        this.doCheck();
    },
    methods: {
        doCheck() {
            if(this.$store.state.member_idx != 0) {
                this.$router.replace('/main');
            }
        },
        doSubmit() {
            let me = this;
            this.axios.get('/main/login', { params: this.info }).then(res => {
                const row = res.data;
                if (row.err === 0) {
                    let info = {
                        member_id: row.info.member_id,
                        member_idx: row.info.member_idx,
                        member_level: row.info.member_level,
                        member_nickname: row.info.member_nickname
                    }
                    me.$store.commit("setUserInfo", info);
                    me.doCheck();
                } else {
                    alert(row.err_msg);
                }
            }).catch(error => {
                console.log(error);
                alert("에러발생!!! 연락바람");
            });
        }
    },
}
</script>

