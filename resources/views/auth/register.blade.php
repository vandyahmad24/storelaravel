@extends('layouts.auth')

@section('content')
@section('title')
    Store Register Page
@endsection

{{-- new resiter --}}
<!-- page content -->
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">

          <div class="col-lg-4 ">
            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <h2>Memulai Jual Beli, <br> Dengan cara terbaru</h2>
              <form method="POST" class="mt-3" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <label for="">Full Name</label>
                 <input id="name" type="text" v-model="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="">Email Name</label>
                 <input id="email" type="email" v-model="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" @change="checkForEmail()"
                 :class="{ 'is-invalid' : this.email_unvailable }"
                 >
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="">Password</label>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="">Password Confirm</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                <input type="text"
                       v-model="store_name"
                       id="store_name"
                       class="form-control" @error('store_name') is-invalid @enderror
                       name="store_name"
                       required
                       autocomplete
                       autofocus 
                       >
                @error('store_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group" v-if="is_store_open">
                <label for="">Kategori Toko</label>
                <select name="categories_id" class="form-control">
                  <option value="">Pilih Kategori</option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

              <button type="submit" class="btn btn-success btn-block w-100 mt-4"
              :disable="this.email_unvailable"
              >Sign Up Now </button>
              <a href="{{route('login')}}" class="btn btn-signup btn-block w-100 mt-2">Back to Sign in</a>
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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    Vue.use(Toasted);
    var register = new Vue({
      el: "#register",
      mounted() {
        AOS.init();
        // this.$toasted.error(
        //   "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
        //     position: "top-center",
        //     className: "rounded",
        //     duration: 1000,
        //   }
        // );
      },
      methods:{
        checkForEmail: function () {
            var self = this;
            axios.get('{{route('api-register-check')}}',{
              params:{
                email:this.email
              }
            })
            .then(function (response) {
              if(response.data == 'Available'){
                self.$toasted.show(
                  "Email dapat digunakan.", {
                    position: "top-center",
                    className: "rounded",
                    duration: 1000,
                  }
                  );
                  self.email_unvailable=false;
              }else{
                self.$toasted.error(
                "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                  position: "top-center",
                  className: "rounded",
                  duration: 1000,
                }
                );
                self.email_unvailable=true;
              }
              // handle success
              console.log(response);
            });
        }

      },
      data(){
         return {
          name: "",
          email: "",
          is_store_open: false,
          store_name: "",
          email_unvailable:false,
        }
      },
    })
  </script>
@endpush
