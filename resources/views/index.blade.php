@extends('layouts.template')

@section('content')
<!-- Masthead-->

<header class="masthead bg-primary text-white text-center " style="background-image: url('{{ asset('assets/img/bgrnd.jpg') }}'); background-repeat:no-repeat; background-size: cover ">
    <div class="container d-flex align-items-center flex-column" >
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ asset('assets/img/invoices.svg')}}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">FAKTUROMAT</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Wszystkie faktury w jednym miejscu.</p>
    </div>
</header>


@endsection

