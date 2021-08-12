@extends('layouts.template')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakturę</h2>
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

                <form action="{{ route('invoices.store') }}" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">

                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Wybierz klienta</label>
                        <select name="customer" class="form-select" id="inputGroupSelect01">
                            <option selected>Wybierz</option>
                            @foreach (\App\Models\Customer::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <!-- number input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="number" name= "number" type="text" placeholder="Numer faktury" data-sb-validations="required" />
                <label for="number">Numer faktury</label>
                <div class="invalid-feedback" data-sb-feedback="number:required" >Podaj numer faktury</div>
            </div>
            <!-- date input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="date" name="date" type="text" placeholder="Wpisz datę" data-sb-validations="required" />
                <label for="date">Data</label>
                <div class="invalid-feedback" data-sb-feedback="date:required">Podaj datę</div>

            </div>
            <!-- Total input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="total" name="total" type="text" placeholder="Kwota faktury" data-sb-validations="required" />
                <label for="total">Kwota</label>
                <div class="invalid-feedback" data-sb-feedback="total:required">Podaj kwotę faktury.</div>
            </div>

            <!-- Submit Button-->
            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Dodaj fakturę</button>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection

