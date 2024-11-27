<h3>{{$judul}}</h3>
<form action="{{route('anggota.store')}}" method="post">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama" value="{{old('nama')}}" id="" placeholder="Massukkan Nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
    @error('nama')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror>
    <p></p>
    <label>NIM</label><br>
    <input type="text" name="nim" value="{{old('nim')}}" id="" placeholder="Massukkan NIM" class="form-control @error('nim') is-invalid @enderror">
    @error('nim')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror>
    <p></p>
    <label>Kelas</label><br>
    <input type="text" name="kelas" value="{{old('kelas')}}" id="" placeholder="Massukkan kode kelas" class="form-control @error('kelas') is-invalid @enderror">
    @error('kelas')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror>
    <p></p>
    <label>HP</label><br>
    <input type="text" name="hp" value="{{old('hp')}}" id="" placeholder="Massukkan No HP" class="form-control @error('hp') is-invalid @enderror">
    @error('hp')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror>
    <p></p>
    <button type="submit">Simpan</button>
    <a href="{{route('anggota.index')}}">
        <button type="button">Batal</button>
    </a>
</form>
