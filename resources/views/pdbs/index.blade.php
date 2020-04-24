<!DOCTYPE html>
<html>
<head>
<title>PPDB Online</title>
<link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <img src="/img/logo.png" alt="">
        </div>
    
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Selamat Datang</strong> di Website PPDB SMK Wikrama 1 Garut
            </h2>
            <p>
              Calon Peserta Didik diharap isi data sesuai dengan fakta saat melakukan pendaftaran.
            </p>
            <div class="_footer">
        <a class="btn"  href="{{ route('pdbs.create') }}">Daftar Sekarang</a>
    </div>
        </div>
    </div>
    
</div>
  </body>
</html>