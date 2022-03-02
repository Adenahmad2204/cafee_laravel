@extends('Kasir.index')
@section('content')

<div class="main-menu">
    {{-- Title Page --}}
    <div class="title-buat">
        <img src="/assets/img/title/Buat.png" alt="Buat">
    </div>

    {{-- Form Edit --}}
    <div class="content-create">
        <form action="" method="">
            {{-- Name --}}
            <label>Nama Pelanggan</label>
            <div class="icon-input">
                <i class="fas fa-users"></i>
            </div>
            <input class="input-text" type="text" name="" placeholder="" required>

            {{-- Product --}}
            <label>Menu Pesanan</label>
            <div class="icon-input">
                <i class="fas fa-coffee"></i>
            </div>
            <input class="input-text" type="text" name="" placeholder="" required>

            {{-- Qyt --}}
            <label>Kuantitas</label>
            <div class="icon-input">
                <i class="fas fa-list-ol"></i>
            </div>
            <input class="input-text" type="number" name="" placeholder="" required>

            {{-- Price --}}
            <label>Harga</label>
            <div class="icon-input">
                <i class="fas fa-tags"></i>
            </div>
            <input class="input-text" type="number" name="" placeholder="" required>

            {{-- Employee --}}
            <label>Pegawai</label>
            <div class="icon-input">
                <i class="fas fa-user-check"></i>
            </div>
            <input class="input-text" type="text" name="" placeholder="" required>
        </form>
    </div>

    {{-- Button Action --}}
    <div class="button-input">
        <a href="{{ URL::previous() }}" class="btn-back"><i class="fas fa-angle-left"></i> Kembali</a>
        <button class="btn-submit">Tambahkan</button>
    </div>
</div>

@endsection
