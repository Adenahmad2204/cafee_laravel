@extends('Kasir.index')
@section('content')

<div class="main-menu">
    <div class="title-menu">
        {{-- Title Page --}}
        <img src="/assets/img/title/Menu.png" alt="menu">
        {{-- Search --}}
        <input type="text" class="form-control" id="mySearch" placeholder="Search.." title="Search">
    </div>

    <div class="row row-cols-2 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
        <div class="col">
            {{-- Card Menu --}}
            <div class="card">
                {{-- Image Product --}}
                <img src="/assets/img/menu/kopi.jpg" class="card-img-top" alt="...">
                {{-- Info Product --}}
                <div class="card-body">
                    <h4 class="card-title text-center">Coffe Latte</h4>
                    <p class="card-text">Diracik dengan biji kopi asli dengan tangan para ahli.</p>
                    <p class="harga"><i class="fa-solid fa-tags"></i> 50 K</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
