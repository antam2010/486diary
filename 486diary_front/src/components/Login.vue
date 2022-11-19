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
            <button :class="cssLogin()" @click="doSubmit">로그인</button>
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
            },
            is_tryLogin : 0
        }
    },
    mounted() {
    },
    methods: {
        //로그인 틀렸을 시 버튼 이동
        cssLogin() {
            let result = "";
            if(this.is_tryLogin === 0) return;

            switch (this.is_tryLogin % 2) {
                case 0:
                    result = "afteroginBtn";
                    break;
                case 1:
                    result = "beforeLoginBtn";
                    break;
            }
            return result;
        },
        doSubmit() {
            this.axios.get('/main/login', { params: this.info }).then(res => {
                const row = res.data;
                if (row.err === 0) {
                    let info = {
                        member_id: row.info.member_id,
                        member_idx: row.info.member_idx,
                        member_level: row.info.member_level,
                        member_nickname: row.info.member_nickname
                    }
                    this.$store.commit("setUserInfo", info);
                    this.$router.replace('/main');
                } else {
                    this.is_tryLogin++;
                    // alert(row.err_msg);
                }
            }).catch(error => {
                console.log(error);
                alert("에러발생!!! 연락바람");
            });
        }
    },
}
</script>

<style>

@keyframes before-ani {
	from {
		transform: translate(0%);
	}
	to {
		transform: translate(100%);
	}
}

@keyframes after-ani {
	from {
		transform: translate(100%);
	}
	to {
		transform: translate(0%);
	}
}
.beforeLoginBtn {
	align-items: center;
	justify-content: center;
	border: 1px solid black;
	background-color: #ffffff;
	animation: before-ani 0.5s linear forwards; /* 애니메이션 적용 */
}

.afteroginBtn {
	align-items: center;
	justify-content: center;
	border: 1px solid black;
	background-color: #ffffff;
	animation: after-ani 0.5s linear forwards; /* 애니메이션 적용 */
}
</style>

