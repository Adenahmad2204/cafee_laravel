@extends('Manajer.index')
@section('content')

<div class="main-menu">
    {{-- Title Page --}}
    <div class="title-buat">
        <img src="/assets/img/title/TambahMenu.png" alt="Tambah Menu">
    </div>

    {{-- Form Edit --}}
    <div class="content-create">
        <form action="" method="">
            {{-- Pisture Product --}}
            <label>Display</label>
            <input type="file" name="" placeholder="" required>

            <br>

            {{-- Name Product --}}
            <label>Nama Menu</label>
            <div class="icon-input">
                <i class="fas fa-coffee"></i>
            </div>
            <input class="input-text" type="text" name="" placeholder="" required>

            {{-- Price --}}
            <label>Harga</label>
            <div class="icon-input">
                <i class="fas fa-tags"></i>
            </div>
            <input class="input-text" type="number" name="" placeholder="" required>

            {{-- Qyt --}}
            <label>Kuantitas</label>
            <div class="icon-input">
                <i class="fas fa-list-ol"></i>
            </div>
            <input class="input-text" type="number" name="" placeholder="" required>

            {{-- Employee --}}
            <label>Deskripsi</label>
            <div class="textarea-input">
                <textarea name="" id="" ></textarea>
            </div>
        </form>
    </div>

    {{-- Button Action --}}
    <div class="button-input">
        <a href="{{ URL::previous() }}" class="btn-back"><i class="fas fa-angle-left"></i> Kembali</a>
        <button class="btn-submit">Tambahkan</button>
    </div>
</div>

@endsection
