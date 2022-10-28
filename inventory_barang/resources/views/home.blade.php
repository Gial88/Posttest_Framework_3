@extends('global')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventory Barang</h2>
            </div>
            <div class="pull-right d-flex justify-content-between">
                <a class="btn btn-success" href="{{ route('tambah')}}">Tambah Data Barang</a>
                <a class="btn btn-danger"
                    href="{{ Auth::user() ? '/logout' : '/login' }}">{{ Auth::user() ? 'Logout' : 'Login' }}</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Deskripsi Barang</th>
            <th>Kategori Barang</th>
            <th>Pemilik Barang</th>
            <th width="280px">Aksi</th>
        </tr>
        @php $i=1 @endphp
        @foreach ($barang as $brg)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $brg->nama_barang }}</td>
                <td>{{ $brg->jumlah_barang }}</td>
                <td>{{ $brg->deskripsi_barang }}</td>
                <td>{{ $brg->category->kategori }}</td>
                <td>{{ $brg->member->nama_member }}</td>
                <td>
                    <form action="" method="POST">

                        <a class="btn btn-info" href="{{route('lihat', $brg->id)}}">Show</a>

                        <a class="btn btn-primary" href="#">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @php $i++ @endphp
        @endforeach
    </table>
@endsection
