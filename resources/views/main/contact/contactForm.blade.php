@extends('main.components.import')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h1>Hubungi kami</h1>
                <hr>
                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama anda" id="" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email anda" id="" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group d-none">
                        <label for="">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Masukkan subject anda" id="" value="Dari marino technology">
                        @error('subject')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Pesan</label>
                        <textarea name="message" class="form-control" placeholder="Masukkan pesan anda" id="" cols="4" rows="4">
                            {{ old('message') }}
                        </textarea>
                        @error('message')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>