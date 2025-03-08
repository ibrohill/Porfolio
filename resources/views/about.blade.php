@extends('layouts.app')

@section('title', 'À propos - Ibrahima')

@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>À propos</h2>
            <p>Développeur Web passionné par l'innovation et les projets ambitieux.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center"> <!-- Utilisation de align-items-center pour aligner verticalement -->
                <!-- Colonne pour l'image -->
                <div class="col-lg-5">
                    <img src="{{ asset('assets/img/ib_image_-removebg-preview.png') }}" class="img-fluid about-img" alt="Ibrahima Bocoum">
                </div>

                <!-- Colonne pour le texte -->
                <div class="col-lg-7 content">
                    <h2 class="about-title">Développeur Web Full Stack</h2>
                    <p class="fst-italic py-3 about-subtitle">
                        Diplômé en Génie Logiciel, je mets mes compétences techniques et mon esprit d'équipe au service de projets innovants.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>20 Août 1997</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Téléphone:</strong> <span>+221 77 872 79 42</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Dakar, Sénégal</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Âge:</strong> <span>27</span> ans</li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Diplôme:</strong> <span>Licence en Génie Logiciel</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>ibrohillb&#64;gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3 about-description">
                        Passionné par le développement web, j'ai acquis une expertise technique solide à travers une formation rigoureuse et des expériences professionnelles enrichissantes. Motivé par l'innovation, je suis prêt à relever de nouveaux défis.
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
@endsection
