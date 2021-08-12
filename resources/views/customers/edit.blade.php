@extends('layouts.template')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz fakturę {{ $invoice->id }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="{{ route('customers.update', ['klienci'=>$customer->id]) }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">



                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input value="{{ $customer->name }}" class="form-control" id="name" name= "name" type="text" placeholder="Numer faktury" data-sb-validations="required" />
                        <label for="name">Nazwa klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required" required="required">Podaj nazwę klienta</div>
                    </div>
                    <!-- date input-->
                    <div class="form-floating mb-3">
                        <input value="{{ $customer->address }}" class="form-control" id="address" name="address" type="text" placeholder="Wpisz adres" data-sb-validations="required" />
                        <label for="address">Adres</label>
                        <div class="invalid-feedback" data-sb-feedback="address:required">Podaj adres</div>

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input value="{{ $customer->nip }}" class="form-control" id="nip" name="nip" type="text" placeholder="Numer NIP" data-sb-validations="required" />
                        <label for="nip">NIP</label>
                        <div class="invalid-feedback" data-sb-feedback="nip:required">Podaj NIP.</div>
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Zapisz dane klienta</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

