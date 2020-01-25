<div class="nearby">
    <!-- Edukacija -->
    @if(count($estate->nearby_education))
        <div class="single-class education">
            <div class="class-header">
                <div class="class-icon">
                    <i class="{{$estate->nearby_education[0]->icon ?? '/'}}"></i>
                </div>
                <p>{{strtoupper($estate->nearby_education[0]->categoryRel->name ?? '/')}}</p>
            </div>

            @foreach($estate->nearby_education as $nearby)
                <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                    <div class="what-is">
                        <p>{{$nearby->name ?? '/'}}</p>
                        <p>
                            <span>({{$nearby->distance ?? '/'}} km)</span>
                        </p>
                    </div>
                    <div class="stars-part">
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endif

    <!-- Javni saobraćaj -->
    @if(count($estate->nearby_transport))
        <div class="single-class transport">
            <div class="class-header">
                <div class="class-icon">
                    <i class="{{$estate->nearby_transport[0]->icon ?? '/'}}"></i>
                </div>
                <p>{{strtoupper($estate->nearby_transport[0]->categoryRel->name ?? '/')}}</p>
            </div>

            @foreach($estate->nearby_transport as $nearby)
                <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                    <div class="what-is">
                        <p>{{$nearby->name ?? '/'}}</p>
                        <p>
                            <span>({{$nearby->distance ?? '/'}} km)</span>
                        </p>
                    </div>
                    <div class="stars-part">
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Noćni klubovi -->
    @if(count($estate->nearby_clubs))
        <div class="single-class clubs">
            <div class="class-header">
                <div class="class-icon">
                    <i class="{{$nearby->icon ?? '/'}}"></i>
                </div>
                <p>{{strtoupper($nearby->categoryRel->name ?? '/')}}</p>
            </div>

            @foreach($estate->nearby_clubs as $nearby)
                <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                    <div class="what-is">
                        <p>{{$estate->nearby_clubs[0]->name ?? '/'}}</p>
                        <p>
                            <span>({{$estate->nearby_clubs[0]->distance ?? '/'}} km)</span>
                        </p>
                    </div>
                    <div class="stars-part">
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Parkovi i atrakcije -->
    @if(count($estate->nearby_parks))
        <div class="single-class parks">
            <div class="class-header">
                <div class="class-icon">
                    <i class="{{$estate->nearby_parks[0]->icon ?? '/'}}"></i>
                </div>
                <p>{{strtoupper($estate->nearby_parks[0]->categoryRel->name ?? '/')}}</p>
            </div>

            @foreach($estate->nearby_parks as $nearby)
                <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                    <div class="what-is">
                        <p>{{$nearby->name ?? '/'}}</p>
                        <p>
                            <span>({{$nearby->distance ?? '/'}} km)</span>
                        </p>
                    </div>
                    <div class="stars-part">
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Shopping -->
    @if(count($estate->nearby_shops))
        <div class="single-class shops">
            <div class="class-header">
                <div class="class-icon">
                    <i class="{{$estate->nearby_shops[0]->icon ?? '/'}}"></i>
                </div>
                <p>{{strtoupper($estate->nearby_shops[0]->categoryRel->name ?? '/')}}</p>
            </div>

            @foreach($estate->nearby_shops as $nearby)
                <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                    <div class="what-is">
                        <p>{{$nearby->name ?? '/'}}</p>
                        <p>
                            <span>({{$nearby->distance ?? '/'}} km)</span>
                        </p>
                    </div>
                    <div class="stars-part">
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="single-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
