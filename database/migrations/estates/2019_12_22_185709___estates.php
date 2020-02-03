<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('naziv')->nullable();
            $table->string('adresa')->nullable();
            $table->string('photo')->nullable();
            $table->string('cijena')->nullable();
            $table->string('cijena_po_kvadratu')->nullable();
            $table->integer('valuta')->nullable();
            $table->text('opis')->nullable();

            $table->integer('grad')->nullable();
            $table->integer('drzava')->nullable();
            $table->integer('svrha')->nullable();
            $table->integer('vrsta')->nullable();
            $table->integer('broj_soba')->nullable();
            $table->integer('broj_kupatila')->nullable();
            $table->integer('stanje')->nullable();
            $table->string('povrsina')->nullable();
            $table->string('povrsina_zemljista')->nullable();

            // yes or no
            $table->integer('voda')->nullable();
            $table->integer('struja')->nullable();
            $table->integer('internet')->nullable();
            $table->integer('plin')->nullable();

            $table->integer('kanalizacija')->nullable();
            $table->integer('garaza')->nullable();
            $table->integer('klima')->nullable();
            $table->integer('parking')->nullable();

            $table->integer('ostava')->nullable();
            $table->integer('namjestaj')->nullable();
            $table->integer('kablovska')->nullable();
            $table->integer('videonadzor')->nullable();

            $table->integer('jedan_sprat')->nullable();
            $table->integer('dva_sprata')->nullable();
            $table->integer('tri_sprata')->nullable();
            $table->integer('vise_spratova')->nullable();

            $table->integer('jezgro_grada')->nullable();
            $table->integer('pogled_na_grad')->nullable();
            $table->integer('pogled_na_more')->nullable();
            $table->integer('u_blizini_rijeke')->nullable();

            $table->integer('bazen')->nullable();
            $table->integer('sauna')->nullable();
            $table->integer('jacuzzi')->nullable();
            $table->integer('kuhinja_sa_sankom')->nullable();

            // GPS
            $table->string('y_koordinata')->nullable();
            $table->string('x_koordinata')->nullable();

            // Video URL
            $table->text('video')->nullable();

            // User ID
            $table->integer('user_id')->nullable();

            // Izdvojeno i akcija
            $table->string('akcija')->nullable();
            $table->integer('izdvojeno')->nullable();

            // Prikaži nekretninu na naslovnoj strani
            $table->integer('prikaz_na_naslovnoj')->nullable();

            // Broj pregleda nekretnine
            $table->bigInteger('broj_pregleda')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
