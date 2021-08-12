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
                <form action="{{ route('invoices.update', ['id'=>$invoice->id]) }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">



                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input value="{{ $invoice->number }}" class="form-control" id="number" name= "number" type="text" placeholder="Numer faktury" data-sb-validations="required" />
                        <label for="number">Numer faktury</label>
                        <div class="invalid-feedback" data-sb-feedback= "number:required" >Podaj numer faktury</div>
                    </div>
                    <!-- date input-->
                    <div class="form-floating mb-3">
                        <input value="{{ $invoice->date }}" class="form-control" id="date" name="date" type="text" placeholder="Wpisz datę" data-sb-validations="required" />
                        <label for="date">Data</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Podaj datę</div>

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input value="{{ $invoice->total }}" class="form-control" id="total" name="total" type="text" placeholder="Kwota faktury" data-sb-validations="required" />
                        <label for="total">Kwota</label>
                        <div class="invalid-feedback" data-sb-feedback="total:required">Podaj kwotę faktury.</div>
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Zapisz fakturę</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

