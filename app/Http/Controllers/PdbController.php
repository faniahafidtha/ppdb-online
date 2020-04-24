<?php
  
namespace App\Http\Controllers;
  
use App\Pdb;
use Illuminate\Http\Request;
  
class PdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdbs = Pdb::latest()->paginate(5);
  
        return view('pdbs.index')
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdbs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_pendaftaran' => 'required' ,
            'no_tes'  => 'required' ,
            'namalengkap'  => 'required' ,
            'namapanggilan'  => 'required' ,
            'jk'  => 'required' ,
            'ttl'  => 'required' ,
            'agama'  => 'required' ,
            'citacita'  => 'required' ,
            'hobi'  => 'required' ,
            'anakke'  => 'required' ,
            'jmlsaudara'  => 'required' ,
            'bb'  => 'required' ,
            'tb'  => 'required' ,
            'goldar'  => 'required' ,
            'alamat'  => 'required' ,
            'kel'  => 'required' ,
            'kec'  => 'required' ,
            'kota_kab'  => 'required' ,
            'provinsi'  => 'required' ,
            'no_telprumah'  => 'required' ,
            'email'  => 'required' ,
            'tgldgn'  => 'required' ,
            'tbc'  => 'required' ,
            'malaria'  => 'required' ,
            'chotipa'  => 'required' ,
            'cacar'  => 'required' , 
            'lainlain'  => 'required' , 
            'nm_ayah'  => 'required' ,
            'ttl_ayah'  => 'required' ,
            'pk_ayah'  => 'required' ,
            'pd_ayah'  => 'required' ,
            'kwgagama_ayah'  => 'required' ,
            'no_ayah'  => 'required' ,
            'nm_ibu'  => 'required' ,
            'ttl_ibu'  => 'required' ,
            'pk_ibu'  => 'required' ,
            'pd_ibu'  => 'required' ,
            'kwgagama_ibu'  => 'required' ,
            'no_ibu'  => 'required' ,
            'nm_wali'  => 'required' ,
            'ttl_wali'  => 'required' ,
            'pk_wali'  => 'required' ,
            'pd_wali'  => 'required' ,
            'hdm'  => 'required' ,
            'kwgagama_wali'  => 'required' ,
            'no_wali'  => 'required' ,
            'email_wali'  => 'required' ,
            'pai'  => 'required' ,
            'bindo'  => 'required' ,
            'bing'  => 'required' ,
            'mtk'  => 'required' ,
            'ipa'  => 'required' ,
            'ips'  => 'required' ,
            'prestasi'  => 'required' ,
            'informasi'  => 'required' ,
          //  'image'         =>  'required|image|max:2048' 
            ]);

        // $image = $request->file('image');
        // $nama_file = time()."_".$image->getClientOriginalName();
        // $tujuan_upload = 'image';
        // $image->move($tujuan_upload,$nama_file);

        $form_data = array(
            'no_tes' => $request->no_tes,
            'namalengkap'  => $request->namalengkap,
            'namapanggilan'  => $request->namapanggilan,
            'jk'  => $request->jk,
            'ttl'  => $request->ttl,
            'agama'  => $request->agama,
            'citacita'  => $request->citacita,
            'hobi'  => $request->hobi,
            'anakke'  => $request->anakke,
            'jmlsaudara'  => $request->jmlsaudara,
            'bb'  => $request->bb,
            'tb'  => $request->tb,
            'goldar'  => $request->goldar,
            'alamat'  => $request->alamat,
            'kel'  => $request->kel,
            'kec'  => $request->kec,
            'kota_kab'  => $request->kota_kab,
            'provinsi'  => $request->provinsi,
            'no_telprumah'  => $request->no_telprumah,
            'email'  => $request->email,
            'tgldgn'  => $request->tgldgn,
            'tbc'  => $request->tbc,
            'malaria'  => $request->malaria,
            'chotipa'  => $request->chotipa,
            'cacar'  => $request->cacar,
            'lainlain'  => $request->lainlain,
            'nm_ayah'  => $request->nm_ayah,
            'ttl_ayah'  => $request->ttl_ayah,
            'pk_ayah'  => $request->pk_ayah,
            'pd_ayah'  => $request->pd_ayah,
            'kwgagama_ayah'  => $request->kwgagama_ayah,
            'no_ayah'  => $request->no_ayah,
            'nm_ibu'  => $request->nm_ibu,
            'ttl_ibu'  => $request->ttl_ibu,
            'pk_ibu'  => $request->pk_ibu,
            'pd_ibu'  => $request->pd_ibu,
            'kwgagama_ibu'  => $request->kwgagama_ibu,
            'no_ibu'  => $request->no_ibu,
            'nm_wali'  => $request->nm_wali,
            'ttl_wali'  => $request->ttl_wali,
            'pk_wali'  => $request->pk_wali, 
            'pd_wali'  => $request->pd_wali,
            'hdm'  => $request->hdm,
            'kwgagama_wali'  => $request->kwgagama_wali,
            'no_wali'  => $request->no_wali,
            'email_wali'  => $request->email_wali,
            'pai'  => $request->pai,
            'bindo'  => $request->bindo,
            'bing'  => $request->bing,
            'mtk'  => $request->mtk,
            'ipa'  => $request->ipa,
            'ips'  => $request->ips,
            'prestasi'  => $request->prestasi,
            'informasi'  => $request->informasi,
           // 'image'            =>   $new_name
        );
  
        pdb::create($request->all());
   
        return redirect()->route('thanks.index')
                        ->with('success','pdb created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\pdb  $pdb
     * @return \Illuminate\Http\Response
     */
   
}