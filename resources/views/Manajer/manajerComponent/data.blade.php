@extends('Manajer.index')
@section('content')

<div class="main-menu">
    <div class="title-datauser">
        {{-- Title Page --}}
        <img src="/assets/img/title/DataMenu.png" alt="Data Menu">

        {{-- Button Tambah Data --}}
        <a href="{{  route('manajer.create')}}" class="tambah"><i class="fa-solid fa-circle-plus"></i> Tambahkan</a>
    </div>

    {{-- Table Content --}}
    <div class="content-table">
        <table>
            <tr>
                {{-- Table Header --}}
                <th width="50px">No</th>
                <th width="110px">Display</th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th width="180px">Harga</th>
                <th width="60">Qyt</th>
                <th width="100px">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td><img src="/assets/img/menu/kopi.jpg" alt="" id="myImg"></td>
                <td>Coffe Latte</td>
                <td class="desc">Diracik dengan biji kopi asli dengan tangan para ahli.</td>
                <td>Rp 20.000</td>
                <td>50</td>
                <td>
                    {{-- Button Action --}}
                    <a href="" class="edit"><i class="fas fa-edit"></i></a>
                    <a class="delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </table>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>
</div>

@endsection
