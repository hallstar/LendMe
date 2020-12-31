import Vue from 'vue'
import VueMeta from 'vue-meta'
import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress/src'

Vue.mixin({ methods: { route: window.route } })

// Vuesax Component Framework
import Vuesax from 'vuesax'
import Layout from './Pages/Layout'

Vue.use(plugin)
Vue.use(Vuesax)


// Filters
import './filters/filters.js'


// Theme Configurations
import './themeConfig.js'


// Globally Registered Components
import './globalComponents.js'


// Vuejs - Vue wrapper for hammerjs
import { VueHammer } from 'vue2-hammer'
Vue.use(VueHammer)


// PrismJS
import 'prismjs'
import 'prismjs/themes/prism-tomorrow.css'

// Vuex Store
import store from './store/store'

Vue.config.productionTip = false

Vue.use(VueMeta)

InertiaProgress.init()

let app = document.getElementById('app')

new Vue({
  store,
  metaInfo: {
    titleTemplate: (title) => title ? `${title} - ${$page.props.appName}` : `${$page.props.appName}`
  },
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
      // resolveComponent: name => import(`./Pages/${name}`)
      //   .then(({ default: page }) => {
      //     page.layout = page.layout === undefined ? Layout : page.layout
      //     return page
      //   }),
    },
  }),
}).$mount(app)
