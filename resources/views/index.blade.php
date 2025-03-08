@extends('layouts.app')

@section('content')
    <main class="main">
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Colonne pour le texte (à gauche) -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="hero-content">
                            <div class="text-content">
                                <h2>IBRAHIMA BOCOUM</h2>
                                <h6>Développeur web passionné par la création de solutions numériques innovantes et performantes</h6>
                                <h6>Transformer des idées en réalité grâce à du code propre et des designs intuitifs</h6>
                                <a href="{{ route('about') }}" class="btn-get-started">En savoir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne pour l'image (à droite) -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('assets/img/5378494.jpg') }}" alt="Image de profil" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
