<div class="contact-agent" id="estate-agent">
    <div class="agent-preview">
        <div class="just-header">
            <h4>{{$estate->userRel->name ?? '/'}}</h4>
        </div>
        <div class="agent-image">
            <img src="{{asset('/images/users/'.$estate->userRel->photo ?? '/')}}" class="" alt="">
        </div>

        <div class="agent-details">
            <div class="single-agent-detail">
                <i class="fas fa-phone"></i>
                <p>{{$estate->userRel->phone_one ?? '/'}}</p>
            </div>
            @if($estate->userRel->phone_two)
                <div class="single-agent-detail">
                    <i class="fas fa-phone"></i>
                    <p>{{$estate->userRel->phone_two ?? '/'}}</p>
                </div>
            @endif
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
            @if($estate->userRel->fb)
                <a target="_blank" href="{{$estate->userRel->fb ?? '/'}}" title="Posjetite našu Facebook stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->linked)
                <a target="_blank" href="{{$estate->userRel->linked ?? '/'}}" title="Posjetite našu LinkedIN stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->in)
                <a target="_blank" href="{{$estate->userRel->in ?? '/'}}" title="Posjetite našu Instagram stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->yt)
                <a target="_blank" href="{{$estate->userRel->yt ?? '/'}}" title="Posjetite naš YouTube kanal">
                    <div class="single-social-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                </a>
            @endif
            @if($estate->userRel->tw)
                <a target="_blank" href="{{$estate->userRel->tw ?? '/' }}" title="Posjetite našu Twitter stranicu">
                    <div class="single-social-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                </a>
            @endif
        </div>
    </div>
    <div class="contact-form">
        <div class="just-header">
            <h4>Zatražite više informacija</h4>
        </div>

        <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_of_estate" value="0">
            <div class="my-select-value">
                <p>Zakažite posjetu nekretnine</p>
                <div class="select-arrow">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>

            <div class="select-values">
                <div class="my-option my-prefered-option" value="0">Zakažite posjetu nekretnine</div>
                <div class="my-option" value="1">Želim dodatne informacije</div>
            </div>
        </div>
        <div class="other-first">
            <input type="text" name="name" id="your_name" placeholder="Vaše ime" autocomplete="off">
        </div>
        <div class="other-first">
            <input type="text" name="email" id="your_email" placeholder="Vaš email" autocomplete="off">
        </div>
        <div class="other-first">
            <input type="text" name="phone" id="your_phone" placeholder="Vaš broj telefona" autocomplete="off">
        </div>
        <div class="other-first other-text">
            <textarea name="mesasge" id="wanted-message" placeholder="Vaša poruka"></textarea>
        </div>

        <div class="send-button send-estate-message">
            <p>Pošaljite poruku</p>
        </div>
    </div>
</div>
