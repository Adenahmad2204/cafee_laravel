@extends('Kasir.index')
@section('content')

<div class="main-menu">
    <div class="title-keranjang">
        {{-- Title Page --}}
        <img src="/assets/img/title/Keranjang.png" alt="Keranjang">

        {{-- Button Tambah --}}
        <a href="{{ url("/kasir/buat") }}"><i class="fa-solid fa-circle-plus"></i> Tambahkan</a>
    </div>

    {{-- Table Content --}}
    <div class="content-table">
        <table>
            <tr>
                {{-- Table Header --}}
                <th width="50px">No</th>
                <th width="300px">Nama Pelanggan</th>
                <th>Menu</th>
                <th width="70px">Qyt</th>
                <th>Total</th>
                <th width="200px">Pegawai</th>
                <th width="150px">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Richal Zacky Aflacha</td>
                <td>Coffe Latte</td>
                <td>1</td>
                <td>Rp 20.000</td>
                <td>Udin</td>
                <td>
                    {{-- Button Action --}}
                    <a href="{{ url("/kasir/edit") }}" class="edit"><i class="fas fa-edit"></i></a>
                    <a class="delete"><i class="fas fa-trash-alt"></i></a>
                    <a href="{{ url("/kasir/bayar") }}" class="buy"><i class="fas fa-cash-register"></i></a>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
