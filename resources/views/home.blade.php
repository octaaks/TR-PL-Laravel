@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    You are logged in!

                    <br> 
                    <br> 
                        @hasrole('Pelanggan')
                        <a href="/daftarmenu" role="button" class="btn btn-outline-dark" style="margin-left: 0rem" >   
                            <b> BUAT PESANAN </b>
                        </a>
                        @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
