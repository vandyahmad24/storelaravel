@extends('layouts.auth')

@section('content')
@section('title')
    Store Register Page
@endsection
<div class="container" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- new resiter --}}
<!-- page content -->
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">

          <div class="col-lg-4 ">
            <h2>Memulai Jual Beli, <br> Dengan cara terbaru</h2>
            <form action="" class="mt-3">
              <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" class="form-control is-valid" v-model="name" autofocus>
              </div>
              <div class="form-group">
                <label for="">Email Name</label>
                <input type="email" class="form-control is-invalid" v-model="email" autofocus>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control ">
              </div>
              <div class="form-group">
                <label for="">Store</label>
                <p class="text-muted">Apakah anda ingin membuka toko?</p>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="is_store_input" class="custom-control-input" id="openStoreTrue"
                    v-model="is_store_open" :value="true">
                  <label for="openStoreTrue" class="custom-control-label">Iya, Buka toko</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="is_store_input" class="custom-control-input" id="openStorefalse"
                    v-model="is_store_open" :value="false">
                  <label for="openStorefalse" class="custom-control-label">Tidak, Buka toko</label>
                </div>
              </div>

              <div class="form-group" v-if="is_store_open">
                <label for="">Nama Toko</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group" v-if="is_store_open">
                <label for="">Kategori Toko</label>
                <select name="category" class="form-control">
                  <option value="">Pilih Kategori</option>
                </select>
              </div>

              <button class="btn btn-success btn-block w-100 mt-4">Sign Up Now </button>
              <a href="" class="btn btn-signup btn-block w-100 mt-2">Back to Sign in</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- endpage content -->
{{-- end register --}}
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script>
    Vue.use(Toasted);
    var register = new Vue({
      el: "#register",
      mounted() {
        AOS.init();
        this.$toasted.error(
          "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
            position: "top-center",
            className: "rounded",
            duration: 1000,
          }
        );
      },
      data: {
        name: "vandy ahmad",
        email: "vandyahmad@gmail.com",
        password: "",
        is_store_open: false,
        store_name: ""
      }
    })
  </script>
@endpush
