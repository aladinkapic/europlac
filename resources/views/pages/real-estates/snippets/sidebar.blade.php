<div class="sidebar">
    <!-- Agent preview -->
    <div class="agent-preview">
        <div class="agent-image">
            <img src="{{asset('/images/users/'.$estate->userRel->photo ?? '/')}}" class="" alt="">
        </div>

        <div class="just-header">
            <h4>{{$estate->userRel->name ?? '/'}}</h4>
            <p>Direktor</p>
        </div>

        <div class="agent-details">
            <div class="single-agent-detail">
                <i class="fas fa-phone"></i>
                <p>{{$estate->userRel->phone_one ?? '/'}}</p>
            </div>
            <div class="single-agent-detail">
                <i class="fas fa-phone"></i>
                <p>{{$estate->userRel->phone_two ?? '/'}}</p>
            </div>
            <div class="single-agent-detail">
                <i class="fas fa-envelope-open-text"></i>
                <p>{{$estate->userRel->email ?? '/'}}</p>
            </div>
            <div class="single-agent-detail">
                <i class="fas fa-map-marker-alt"></i>
                <p>{{$estate->userRel->address ?? '/'}}</p>
            </div>
        </div>
        <div class="agent-social">
            @if($estate->userRel->fb ?? '')
                <a target="_blank" href="{{$estate->userRel->fb ?? ''}}" title="Posjetite našu Facebook stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->linked ?? '')
                <a target="_blank" href="{{$estate->userRel->linked ?? ''}}" title="Posjetite našu LinkedIN stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->in ?? '')
                <a target="_blank" href="{{$estate->userRel->in ?? ''}}" title="Posjetite našu Instagram stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->yt ?? '')
                <a target="_blank" href="{{$estate->userRel->yt ?? ''}}" title="Posjetite naš YouTube kanal">
                    <div class="single-social-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->tw ?? '')
                <a target="_blank" href="{{$estate->userRel->tw ?? ''}}" title="Posjetite našu Twitter stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                </a>
            @endif
        </div>
    </div>

    <!-- Request showing -->
    <div class="get-date">
        <div class="get-date-header">
            <h4>Zakažite posjetu</h4>
        </div>
        <div class="swiper-container request-showing swiper-init" data-initial-slide="2">
            <div class="swiper-wrapper">
                @php $counter = 1; @endphp
                @foreach($ranges as $date)
                    <div class="swiper-slide">
                        <input type="hidden" class="calendar-date" value="{{$date->format('d.m.Y')}}">
                        <input type="hidden" class="calendar-day" value="{{ \App\Http\Controllers\Controller::getFullWeekDay($date->dayOfWeek)}}">
                        <div class="date-header">
                            <p>{{ \App\Http\Controllers\Controller::getWeekDay($date->dayOfWeek)}}</p>
                        </div>
                        <h4>
                            {{$date->format('d')}}
                        </h4>
                        <h5>
                            {{ \App\Http\Controllers\Controller::getShortMonth($date->format('m'))}}
                        </h5>
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div class="get-date-header">
            <h5>Izaberite vrijeme</h5>
        </div>

        <div class="select-dates">
            <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_from" value="0">
                <div class="my-select-value">
                    <p id="calendar-time-from">08:00</p>
                    <div class="select-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <div class="select-values">
                    @foreach($times as $time)
                        <div class="my-option" value="{{$time}}">{{$time}}</div>
                    @endforeach
                </div>
            </div>
            <p class="to">DO</p>
            <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_to" value="0">
                <div class="my-select-value">
                    <p id="calendar-time-to">08:30</p>
                    <div class="select-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <div class="select-values">
                    @foreach($times as $time)
                        <div class="my-option" value="{{$time}}">{{$time}}</div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="schedule">
            <a href="#estate-agent">
                <p>ZAKAŽITE POSJETU</p>
            </a>
        </div>

        <script>
            var swiper = new Swiper('.request-showing', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 3,
                initialSlide: 1,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                }
            });
        </script>
    </div>
</div>
