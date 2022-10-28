@extends('global')

@section('content')
    <div class="container">
        <h3><strong>LIHAT DATA</strong></h3>
        <hr>
        <a href="{{route('home')}}" class="btn btn-warning"><b>Kembali</b></a>
        <br>
        <br>
        <table class="table table-borderless">
            <tr>
                <td>
                    <h4>Nama Barang</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $barang->nama_barang }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Jumlah Barang</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $barang->jumlah_barang }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Kategori Barang</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $barang->category->kategori }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Pemilik Barang</h4>
                </td>
                <td>
                    <h4>:</h4>
                </td>
                <td>
                    <h4>{{ $barang->member->nama_member }}</h4>
                </td>
            </tr>
        </table>
    </div>
@endsection
