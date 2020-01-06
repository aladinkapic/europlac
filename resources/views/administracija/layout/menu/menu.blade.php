<div id="top-menu">
    <div class="left-menu-icon">
        <i class="fas fa-bars"></i>
    </div>


    <div class="right-user-part">
        <div class="user-icon" title="Globalne postavke">
            <!-- <img src="https://img.icons8.com/metro/26/000000/globe.png"> -->
            <i class="fas fa-cogs"></i>
        </div>
        <div class="user-icon" title="Notifikacije">
            <i class="fas fa-bell"></i>
        </div>
        <div class="user-icon" title="Puni zaslon">
            <i class="fas fa-compress-arrows-alt"></i>
        </div>
        <div class="user-icon" title="Odjavite se !!">
            <a href="{{route('logout')}}">
                <i class="fas fa-power-off"></i>
            </a>
        </div>

        <div class="user-icon user-name">
            <a href="#">
                <p>Root Admin</p>
            </a>
        </div>

        <div class="user-icon last-icon">
            <a href="">
                {{--                {!! Html::image(asset('/images/user-images/'.$loggedUser->image->photo ?? 'user.ppng')) !!}--}}
            </a>
        </div>
    </div>
</div>

@include('administracija.layout.menu.left-menu')
