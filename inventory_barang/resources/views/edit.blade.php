@extends('global')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <b>Yeah!</b> {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{ session('error') }}
                                </div>
                            @endif
                            <h3 class="mb-5">Edit Data</h3>
                            <form action="{{route('edit', $barang->id)}}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" name="member" value="{{$barang->member_id}}">
                                <div class="form-outline mb-4">
                                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="nama_brg" placeholder="Masukkan Nama Barang" value="{{$barang->nama_barang}}" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="jumlah_brg" placeholder="Masukkan Jumlah Barang" value="{{$barang->jumlah_barang}}" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="deskripsi_brg" placeholder="Deskripsi Barang" value="{{$barang->deskripsi_barang}}" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <select name="kategori" id="kategori_id"
                                        class="form-select @error('kategori_id') is-invalid @enderror" aria-label="Kategori">
                                        <option value="" selected>Pilih</option>
                                        @foreach ($kategori as $kateg)
                                            <option value="{{ $kateg->id }}" {{$barang->category_id == $kateg->id ? 'selected':''}}>{{ $kateg->kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit"
                                    name="ubah">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
