<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdbs', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->string('no_tes');
            $table->string('namalengkap');
            $table->string('namapanggilan');
            $table->enum('jk', ['P', 'L']);
            $table->string('ttl');
            $table->string('agama');
            $table->string('cita-cita');
            $table->string('hobi');
            $table->string('anakke');
            $table->string('jmlsaudara');
            $table->string('bb');
            $table->string('tb');
            $table->string('goldar');
            $table->string('alamat');
            $table->string('kel');
            $table->string('kec');
            $table->string('kota/kab');
            $table->string('provinsi');
            $table->string('no_telprumah');
            $table->string('email');
            $table->enum('tgldgn', ['Ortu', 'Asrama' , 'Saudara']);
            $table->string('tbc');
            $table->string('malaria');
            $table->string('chotipa');
            $table->string('cacar');
            $table->string('lainlain');
            $table->string('nm_ayah');
            $table->string('ttl_ayah');
            $table->string('pk_ayah');
            $table->string('pd_ayah');
            $table->string('kwgagama_ayah');
            $table->string('no_ayah');
            $table->string('nm_ibu');
            $table->string('ttl_ibu');
            $table->string('pk_ibu');
            $table->string('pd_ibu');
            $table->string('kwgagama_ibu');
            $table->string('no_ibu');
            $table->string('nm_wali');
            $table->string('ttl_wali');
            $table->string('pk_wali');
            $table->string('pd_wali');
            $table->string('hdm');
            $table->string('kwgagama_wali');
            $table->string('no_wali');
            $table->string('email_wali');
            $table->string('pai');
            $table->string('bindo');
            $table->string('bing');
            $table->string('mtk');
            $table->string('ipa');
            $table->string('ips');
            $table->string('prestasi');
            $table->enum('informasi', ['Keluarga', 'Website', 'Teman' , 'Brosur' , 'SekolahSMP' , 'Facebook' , 'Karyawan' , 'Lainnya']);
            $table->string('image');
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
        Schema::dropIfExists('pdbs');
    }
}
