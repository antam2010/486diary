import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from "axios";
import store from './store/storage'

axios.defaults.baseURL = 'http://api.486diary.com'
const app = createApp(App)
app.use(router).use(store).mount('#app')
app.config.globalProperties.axios = axios

//로컬스토리지 체크
if(store.state.member_idx === 0) {
    router.replace('/');
}