<!-- =========================================================================================
    File Name: ResetPassword.vue
    Description: Reset Password Page
    ----------------------------------------------------------------------------------------
    Author: Orba
========================================================================================== -->

<template>
  <div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
      <div class="card mb-0">
        <div class="card-body">
          <a :href="route('admin.login')" class="brand-logo">
            <img
              alt="brand"
              style="height: 28px"
              src="/images/logo/logo.svg"
              class="img-fluid"
            />
            <h2 class="brand-text text-primary ml-1">{{ $page.props.appName }}</h2>
          </a>

          <div class="alert alert-success" role="alert" v-if="flash.success">
            <div class="alert-body">
              {{ flash.success }}
            </div>
          </div>

          <div class="alert alert-danger" role="alert" v-if="flash.error">
            <div class="alert-body">
              {{ flash.error }}
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
              <span
                id="basic-default-name-error"
                class="error"
                v-if="errors.email"
                >{{ errors.email }}</span
              >
            </div>

            <div class="form-group">
              <label for="login-password">Password</label>
              <div
                class="input-group input-group-merge form-password-toggle"
                v-bind:class="[errors.password ? 'is-invalid' : '']"
              >
                <input
                  type="password"
                  class="form-control form-control-merge"
                  id="login-password"
                  name="login-password"
                  tabindex="2"
                  aria-describedby="login-password"
                  v-model="form.password"
                  v-bind:class="[errors.password ? 'is-invalid' : '']"
                />
                <div class="input-group-append">
                  <span class="input-group-text cursor-pointer">
                    <i data-feather="eye-off"></i>
                  </span>
                </div>
              </div>
              <span
                id="basic-default-name-error"
                class="error"
                v-if="errors.password"
                >{{ errors.password }}</span
              >
            </div>

            <div class="form-group">
              <label for="login-password">Password Confirmation</label>
              <div
                class="input-group input-group-merge form-password-toggle"
                v-bind:class="[
                  errors.password_confirmation ? 'is-invalid' : ''
                ]"
              >
                <input
                  type="password"
                  class="form-control form-control-merge"
                  id="login-password"
                  name="login-password"
                  tabindex="2"
                  aria-describedby="login-password"
                  v-model="form.password_confirmation"
                  v-bind:class="[
                    errors.password_confirmation ? 'is-invalid' : ''
                  ]"
                />
                <div class="input-group-append">
                  <span class="input-group-text cursor-pointer"
                    ><i data-feather="eye"></i
                  ></span>
                </div>
              </div>
              <span
                id="basic-default-name-error"
                class="error"
                v-if="errors.password_confirmation"
                >{{ errors.password_confirmation }}</span
              >
            </div>

            <button
              :loading="sending"
              class="btn btn-primary btn-block"
              type="submit"
              tabindex="4"
            >
              Reset
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    errors: Object,
    flash: Object,
    account: Object
  },
  data () {
    return {
      sending: false,
      form: {
        email: this.account.email,
        token: this.account.token,
        password: '',
        password_confirmation: ''
      }
    }
  },
  methods: {
    submit () {
      this.errors = {}
      const data = {
        email: this.form.email,
        token: this.form.token,
        password: this.form.password,
        password_confirmation: this.form.password_confirmation
      }
      this.$inertia.post(route('admin.password.update'), data, {
        onStart: () => (this.sending = true),
        onFinish: () => {
          this.sending = false
        }
      })
    }
  }
}
</script>
