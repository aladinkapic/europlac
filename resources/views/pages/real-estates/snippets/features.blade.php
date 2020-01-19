<div class="features">
    <div class="all-features">
        @if($estate->voda == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Priključak vode</p>
            </div>
        @endif

        @if($estate->struja == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Priključak struje</p>
            </div>
        @endif

        @if($estate->internet == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Priključak interneta</p>
            </div>
        @endif

        @if($estate->plin == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Priključak plina</p>
            </div>
        @endif

        @if($estate->kanalizacija == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Kanalizacija</p>
            </div>
        @endif

        @if($estate->garaza == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Garaža</p>
            </div>
        @endif

        @if($estate->klima == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Instalisan klima uređaj</p>
            </div>
        @endif

        @if($estate->parking == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Parking mjesto</p>
            </div>
        @endif

        @if($estate->jedan_sprat == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Jedna etaža</p>
            </div>
        @endif

        @if($estate->dva_sprata == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Dvije etaže</p>
            </div>
        @endif

        @if($estate->tri_sprata == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Tri etaže</p>
            </div>
        @endif

        @if($estate->vise_spratova == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Više etaža</p>
            </div>
        @endif

        @if($estate->jezgro_grada == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Jezgro grada</p>
            </div>
        @endif

        @if($estate->pogled_na_grad == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Pogled na grad</p>
            </div>
        @endif

        @if($estate->pogled_na_more == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Pogled na more</p>
            </div>
        @endif

        @if($estate->u_blizini_rijeke == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>U blizini rijeke</p>
            </div>
        @endif

        @if($estate->bazen == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Bazen</p>
            </div>
        @endif

        @if($estate->sauna == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Sauna</p>
            </div>
        @endif

        @if($estate->jacuzzi == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Jacuzzi</p>
            </div>
        @endif

        @if($estate->kuhinja_sa_sankom == 2)
            <div class="single-feature">
                <i class="fas fa-check"></i>
                <p>Kuhinja sa šankom</p>
            </div>
        @endif
    </div>
</div>
