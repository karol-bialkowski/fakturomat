@extends('layouts.template')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <form action="{{ route('customers.store') }}" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">

                    {{ csrf_field() }}
                    <div class="form-floating mb-3">
                        <label for="name"></label><input class="form-control" id="name" value="{{ old('name')  }}" name= "name" type="text" placeholder="Nazwa klienta" data-sb-validations="required" />
                        <label for="name">Nazwa klienta</label>
                        <div class="invalid-feedback" data-sb-feedback="number:required" >Podaj nazwę klienta</div>
                    </div>
                    <!-- date input-->
                    <div class="form-floating mb-3">
                        <label for="address"></label><input class="form-control" id="address" name="address" value="{{ old('address')  }}" type="text" placeholder="Adres klienta" data-sb-validations="required" />
                        <label for="address">Adres</label>
                        <div class="invalid-feedback" data-sb-feedback="date:required">Podaj adres</div>

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <label for="nip"></label><input class="form-control" id="nip" name="nip" value="{{ old('nip')  }}" type="text" placeholder="Numer nip" data-sb-validations="required" />
                        <label for="nip">NIP</label>
                        <div class="invalid-feedback" data-sb-feedback="total:required">Podaj NIP.</div>
                    </div>

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Dodaj klienta</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

