<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdb extends Model
{
     protected $fillable = [
     'no_pendaftaran' , 'no_tes' , 'namalengkap' , 'namapanggilan' , 'jk' , 'ttl' , 'agama' , 'citacita' ,
     'hobi' , 'anakke' , 'jmlsaudara' , 'bb' , 'tb' , 'goldar' ,  'alamat' , 'kel' , 'kec' , 'kota_kab' , 'provinsi' , 
     'no_telprumah' , 'email' , 'tgldgn' ,  'tbc' , 'malaria' , 'chotipa',  'cacar',  'lainlain',  'nm_ayah',  'ttl_ayah', 
     'pk_ayah', 'pd_ayah', 'kwgagama_ayah',  'no_ayah',  'nm_ibu','ttl_ibu' , 'pk_ibu' ,  'pd_ibu' ,    'kwgagama_ibu' , 
     'no_ibu' ,  'nm_wali' ,  'ttl_wali' ,    'pk_wali' , 'pd_wali',  'hdm', 'kwgagama_wali', 'no_wali',  'email_wali', 
     'pai', 'bindo', 'bing', 'mtk',  'ipa',  'ips',   'prestasi', 'informasi', //'image'
             
    ]; 
}
