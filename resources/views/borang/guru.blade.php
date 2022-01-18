<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
</head>
<body>
<div class="container-fluid bg-light">
  <div class="container py-5 bg-light">
    <div class="row">
      <div class="col">

        <h3 class="mb-3">Borang Pendaftaran</h3>


              <!-- s -->


        <form action="/borang" method="post">
          @csrf 

        <div class="card shadow rounded mb-4">
          <div class="card-header bg-dark text-white rounded-top">
            <h5 class="">Bahagian A : Maklumat Sekolah</h5>
          </div>
          <div class="card-body">
            <div class="mb-3 row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 col-form-label">Nama Sekolah</label>
              <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ old('nama_sekolah') }}" >
                <span class="invalid-feedback">Sila isi nama sekolah</span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 col-form-label">Nama Pengetua</label>
              <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <input type="text" class="form-control @error('nama_pengetua') is-invalid @enderror" name="nama_pengetua" value="{{ old('nama_pengetua') }}" >
                <span class="invalid-feedback">Sila isi nama pengetua</span>
              </div>
            </div>

            <div class="row">

              <label class="col-sm-5 col-md-4 col-lg-3 mb-3 col-xl-2 col-form-label">Email</label>
              <div class="col-sm-7 col-md-8 col-lg-3 ">
                <input type="email" class="form-control @error('email_sekolah') is-invalid @enderror" name="email_sekolah" value="{{ old('email_sekolah') }}">
                <span class="invalid-feedback">Sila isi email mengikut format</span>
              </div>

              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 mb-3 col-form-label">No. Telefon</label>
              <div class="col-sm-7 col-md-8 col-lg-3 col-xl-4">
                <input type="text" class="form-control @error('nombor_telefon') is-invalid @enderror" name="nombor_telefon" value="{{ old('nombor_telefon') }}">
                <span class="invalid-feedback">Sila isi nombor telefon</span>
              </div>

              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 mb-3 col-form-label">No. Faks</label>
              <div class="col-sm-7 col-md-8 col-lg-3 ">
                <input type="text" class="form-control @error('nombor_faks') is-invalid @enderror" name="nombor_faks" value="{{ old('nombor_faks') }}">
                <span class="invalid-feedback">Sila isi nombor faks</span>
              </div>

            </div>

          </div>
        </div>

        <div class="card shadow rounded mb-4">
          <div class="card-header bg-dark text-white rounded-top">
            <h5>Bahagian B : Maklumat Guru</h5>
          </div>
          <div class="card-body">
            <div class="mb-3 row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 col-form-label">Nama Guru</label>
              <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" name="nama_guru" value="{{ old('nama_guru') }}">
                <span class="invalid-feedback">Sila isi nama guru</span>
              </div>
            </div>

            <div class="row">

              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 mb-3 col-form-label">No. Telefon</label>
              <div class="col-sm-7 col-md-8 col-lg-3 ">
                <input type="text" class="form-control @error('nombor_tel_guru') is-invalid @enderror" name="nombor_tel_guru" value="{{ old('nombor_tel_guru') }}">
                <span class="invalid-feedback">Sila isi nombor telefon guru</span>
              </div>

              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 mb-3 col-form-label">Jantina</label>
              <div class="col-sm-7 col-md-8 col-lg-3 col-xl-4">
                
              <div class="@error('jantina') is-invalid @enderror">
                  <div class="form-check form-check-inline pt-2">
                      <input class="form-check-input" type="radio" value="lelaki" name="jantina" @if(old('jantina')=='lelaki') checked @endif>
                      <label class="form-check-label" for="inlineRadio1">Lelaki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="perempuan" name="jantina"  @if(old('jantina')=='perempuan') checked @endif>
                      <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                  </div>
              </div>
              <span class="invalid-feedback">Sila ketik jantina anda</span>


            </div>

            <div class="row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 mb-3 col-form-label">Subjek Diajar</label>
              <div class="col-sm-7 col-md-8 col-lg-4 col-xl-10">
                <select class="form-select @error('subjek_diajar') is-invalid @enderror" aria-label="Default select example" nama="subjek_diajar">
                  <option @if(old('subjek_diajar')=='') checked @endif>Pilih Subjek</option>
                  <option @if(old('subjek_diajar')=='matematik') checked @endif value="matematik">Matematik</option>
                  <option @if(old('subjek_diajar')=='sains') checked @endif value="sains">Sains</option>
                  <option @if(old('subjek_diajar')=='data') checked @endif value="data">Data</option>
                </select>
                <span class="invalid-feedback">Sila pilih subjek</span>
              </div>

              <label class="col-sm-5 col-md-4 col-lg-2 col-xl-2 mb-3 col-form-label">Gred</label>
              <div class="col-sm-7 col-md-8 col-lg-3 col-xl-10">
                <select class="form-select @error('gred_guru') is-invalid @enderror" aria-label="Default select example" name="gred_guru">
                  <option @if(old('gred_guru')=='') checked @endif >Pilih Gred</option>
                  <option value="A" @if(old('gred_guru')=='A') checked @endif>A</option>
                  <option value="B" @if(old('gred_guru')=='B') checked @endif>B</option>
                  <option value="C"  @if(old('gred_guru')=='C') checked @endif>C</option>
                </select>
                <span class="invalid-feedback">Sila pilih gred</span>
              </div>
            </div>

          </div>
        </div>

        <div class="card shadow rounded mb-4">
          <div class="card-header rounded-top bg-dark text-white">
            <h5>Bahagian C : Akaun Profil</h5>
          </div>
          <div class="card-body">

            <div class="mb-3 row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 col-form-label">Nama Pengguna</label>
              <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <input type="text" class="form-control @error('username') is-invalid @enderror" nama="username" value="{{ old('username') }}">
                <span class="invalid-feedback">Sila isi nama pengguna</span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="col-sm-5 col-md-4 col-lg-3 col-xl-2 col-form-label">Kata Laluan</label>
              <div class="col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <input type="text" class="form-control @error('password') is-invalid @enderror" nama="password" value="{{ old('password') }}> 
                <span class="invalid-feedback">Sila isi password</span>
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input @error('setuju') is-invalid @enderror" type="checkbox" value="setuju" name="setuju" id="flexCheckChecked"  >
              <label class="form-check-label" for="flexCheckChecked">
                Saya Bersetuju dengan syarat yang dikenakan
              </label>
              <span class="invalid-feedback">Sila ketik setuju</span>
            </div>

          </div>

          <div class="text-center"> <button type="submit" class="btn btn-outline-secondary"> Submit </button> </div>
      </form>
        </div>
      </div>
     
    </div>
  </div>

</div> <!--- /container fluid --->
</body>
</html>