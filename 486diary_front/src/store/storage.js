import { createStore } from "vuex"
import createPersistedState from 'vuex-persistedstate';

export default createStore({
    state: {
        member_idx: 0,
        member_id: '',
        member_nickname: '',
        member_level: 0
    },
    getters: {

    },
    computed: {
        /**
         * 유저정보
         * @returns
         */
        getUserInfo() {
            return this.state;
        }

    },
    mutations: {
        /**
         * 유저정보 등록
         * @param {*} state
         * @param {member_idx = PK, member_id , member_nickname , member_level = 권한} info
         */
        setUserInfo(state, info) {
            state.member_idx = info.member_idx;
            state.member_id = info.member_id;
            state.member_nickname = info.member_nickname;
            state.member_level = info.member_level;
        }

    },
    plugins: [
        //주목! : 여기에 쓴 모듈만 저장됩니다.
        createPersistedState({})
    ]

});