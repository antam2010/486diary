import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from "axios";

axios.defaults.baseURL = 'http://api.486diary.com'
const app = createApp(App)
app.use(router).mount('#app')
app.config.globalProperties.axios = axios
