<!DOCTYPE html>
<html>
<head>
    <title>TR Travel | Groceries Organic Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('assets/fonts/sb-bistro/sb-bistro.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/o2system-ui/o2system-ui.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/owl-carousel/owl-carousel.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/cloudzoom/cloudzoom.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/thumbelina/thumbelina.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/packages/bootstrap-touchspin/bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/theme.css')}}">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" possition="center">
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <label> Menu</label><br>
            <button type="button" class="btn btn-success btn-sm">Makan</button>
            <button type="button" class="btn btn-danger btn-sm">Minum</button>
             </div>
        <div class="col-md-4"></div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-md-0"></div>
            <div class="col-md-12">
                

                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/img/nasigoreng.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Nasi Goreng(database)</h5>
                    <p class="card-text">Harga : Rp.(database)</p>
                    <input class="form-control" type="text" placeholder="Jumlah Porsi(masuk ke DB)">
                    <br>
                    <input class="form-control" type="text" placeholder="Catatan (masuk ke DB)">
                  </div>
                </div>

                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('assets/img/nasigoreng.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Nasi Goreng(database)</h5>
                    <p class="card-text">Harga : Rp.(database)</p>
                    <input class="form-control" type="text" placeholder="Jumlah Porsi(masuk ke DB)">
                    <br>
                    <input class="form-control" type="text" placeholder="Catatan (masuk ke DB)">
                  </div>
                </div>

            </div>
            <div class="col-md-0"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-4">
                 <button type="button" class="btn btn-secondary">Order</button>
             </div>
              <div class="col-md-4"></div>
            
        </div>
    </div>