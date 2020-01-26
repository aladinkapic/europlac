<div id="delete-item-wrapper" url="@yield('delete-url')" extraId="@yield('delete-extra-id')">
    <div class="delete-item animated rubberBand">
        <div class="delete-header">
            <h4>
                OBAVIJEST
            </h4>
            <i class="fas fa-times close-fa-times" title="Zatvorite"></i>
        </div>

        <div class="delete-body">
            <p>Da li ste sigurni da želite obrisati odabranu stavku?</p>

            <span>NAPOMENA : Brisanjem stavke se brišu svi podaci vezani za njega i onemogućavaju vraćanje podataka nazad!!</span>
        </div>

        <div class="delete-buttons">
            <div class="single-button single-button-blue close-fa-times" title="Odustanite od brisanja">
                ODUSTANITE
            </div>
            <div class="single-button delete-item-trigger" title="Obrišite artikal!">
                OBRIŠITE
            </div>
        </div>
    </div>
</div>
