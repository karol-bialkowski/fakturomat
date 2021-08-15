@extends('layouts.template')

@section('content')

    <section class="masthead mvh-100" style="background-image: url('{{ asset('assets/img/registerbg.jpg') }}'); background-repeat:no-repeat; background-size: cover ">


        <div class=" container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <h3 class="mb-5">Zarejestruj się</h3>
                                <form method="POST" action="{{ route('register') }}">

                                    <div class="form-outline mb-4">
                                        <label for="name" class="form-label">{{ __('Nazwa') }}</label>


                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typeEmailX">{{ __('E-mail') }}</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror




                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="typePasswordX">{{ __('Haslo') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password-confirm" class="form-label">{{ __('Powtórz hasło') }}</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>



                                    <button class="btn btn-primary btn-lg btn-block" type="submit"> Zarejestruj</button>

                                    <hr class="my-4">
                                </form>


                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
