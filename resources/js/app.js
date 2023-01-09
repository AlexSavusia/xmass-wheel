import './bootstrap';


import {createApp} from 'vue/dist/vue.esm-bundler.js'
import Static from './components/index.vue'
import Spin from './components/spin.vue'
const app = createApp({})
app.component('Static', Static)
app.component('Spin', Spin)
app.mount("#app")