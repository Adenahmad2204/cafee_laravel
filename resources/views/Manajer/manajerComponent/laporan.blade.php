@extends('Manajer.index')
@section('content')

<div class="main-menu">
    {{-- Title Page --}}
    <div class="title-keranjang">
        <img src="/assets/img/title/Laporan.png" alt="Laporan">
    </div>

    <div class="filter">
        <form action="" method="">
            {{-- Filter --}}
            <label>Filter :&emsp;</label>
            <input class="input-date" type="date" name="" placeholder="" required>

            <label>&ensp;sampai&ensp;</label>
            <input class="input-date" type="date" name="" placeholder="" required>
        </form>
    </div>

    <div class="print">
        <button><i class="fas fa-print"></i> PDF</button>
    </div>

    {{-- Table Content --}}
    <div class="content-table table-laporan">
        <table>
            <tr>
                {{-- Table Header --}}
                <th width="50px">No</th>
                <th width="300px">Nama Pelanggan</th>
                <th>Menu</th>
                <th width="70px">Qyt</th>
                <th>Total</th>
                <th width="200px">Pegawai</th>
            </tr>
            <tr>
                <td>1</td>
                <td>aaaaaaaaaaa</td>
                <td>Coffe Latte</td>
                <td>1</td>
                <td>Rp 20.000</td>
                <td>bbbbbbbbbbb</td>
            </tr>
        </table>
    </div>
</div>

@endsection
