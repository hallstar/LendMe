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
              v-bind:class="[errors.email ? 'is-invalid' : '']"
              autofocus
            />
            <span id="basic-default-name-error" class="error" v-if="errors.email">{{errors.email}}</span>
          </div>

          <div class="form-group">
            <div class="d-flex justify-content-between">
              <label for="login-password">Password</label>
              <inertia-link :href="route('admin.password.request')"><small>Forgot Password?</small></inertia-link>
            </div>
            <div class="input-group input-group-merge form-password-toggle" v-bind:class="[errors.password ? 'is-invalid' : '']">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="login-password"
                tabindex="2"
                aria-describedby="login-password"
                v-model="form.password"
                v-bind:class="[errors.password ? 'error' : '']"
              />
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            <span id="basic-default-name-error" class="error" v-if="errors.password">{{errors.password}}</span>
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" v-model="form.remember" />
              <label class="custom-control-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button :loading="sending" class="btn btn-primary btn-block" type="submit" tabindex="4">Sign in</button>
        </form>
      </div>
    </div>
    <!-- /Login v1 -->
  </div>
</div>
</template>

<script>
import FullPage from '../../../layouts/full-page/FullPage'

export default {
  layout: [FullPage],
  props: {
    errors: Object,
    flash: Object,
  },
  data() {
    return {
      sending: false,
      form: {
        email: '',
        password: '',
        remember: null,
      },
    }
  },
  methods: {
    submit() {
      this.errors = {}
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember,
      }
      this.$inertia.post(route('admin.login.attempt'), data, {
        onStart: () => this.sending = true,
        onFinish: () => { 
          this.sending = false
          this.form.password = ''
        },  
      })
    },
  },
}

</script>
