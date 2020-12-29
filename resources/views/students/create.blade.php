@extends('layout.main')

@section('title', 'Data Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Student</h1>

              <form action="{{route('student-store')}}" method="post">
              @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama"></input>
                </div>
                
                 @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
                   
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM"></input>
                </div>
                <div class="form-group">                  
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email"></input>
                </div>  
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan"></input>
                </div>
                <button class="btn btn-primary my-3" type="submit">Tambah Data!</button>
              </form>   

            
            </div>
        </div>
    </div>
@endsection
