import 'material-design-icons-iconfont/dist/material-design-icons.css'

import Vue from 'vue'
import Vuetify, { VSnackbar, VBtn, VIcon } from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

// import VuetifyToast from 'vuetify-toast-snackbar'

Vue.use(Vuetify)

const opts = {
    icons: {
        iconfont:'mdi'// 'mdiSvg', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
      },
}


// Vue.use(Vuetify, {
//   components: {
//     VSnackbar,
//     VBtn,
//     VIcon
//   }
// })
//Vue.use(VuetifyToast)

export default new Vuetify(opts)
