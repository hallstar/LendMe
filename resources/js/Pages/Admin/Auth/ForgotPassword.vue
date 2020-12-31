<!-- =========================================================================================
    File Name: Login.vue
    Description: Login Page
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
      Author: Pixinvent
    Author URL: http://www.themeforest.net/user/pixinvent
========================================================================================== -->


<template>
  <div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
    <!-- Login v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a :href="route('admin.login')" class="brand-logo">
          <img alt="brand" style="height:28px" src="/images/logo/logo.svg" class="img-fluid">
          <h2 class="brand-text text-primary ml-1">{{ $page.props.appName }}</h2>
        </a>

        <div class="alert alert-success" role="alert" v-if="flash.success">
            <div class="alert-body">
                {{flash.success}}
            </div>
        </div>

        <div class="alert alert-danger" role="alert" v-if="flash.error">
            <div class="alert-body">
                {{flash.error}}
            </div>
        </div>

        <form class="auth-login-form mt-2" @submit.prevent="submit">
          <div class="form-group">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="login-email"
              :error="errors.email"
              placeholder="john@example.com"
              aria-describedby="login-email"
              tabindex="1"
              v-model="form.email"
              v-bind:class="[errors.email ? 'error' : '']"
              autofocus
            />
            <span id="basic-default-name-error" class="error" v-if="errors.email">{{errors.email}}</span>
          </div>

          <button :loading="sending" class="btn btn-primary btn-block" type="submit" tabindex="4">Send The Instructions</button>
        </form>
      </div>
    </div>
    <!-- /Login v1 -->
  </div>
</div>
</template>

<script>

export default {
  props: {
    errors: Object,
    flash: Object,
  },
  data() {
    return {
      sending: false,
      form: {
        email: '',
      },
    }
  },
  methods: {
    submit() {
      this.errors = {}
      this.flash = {}

      const data = {
        email: this.form.email,
      }
      this.$inertia.post(route('admin.password.email'), data, {
        onStart: () => this.sending = true,
        onFinish: () => { 
          this.sending = false
        },  
      })
    },
  },
}

</script>