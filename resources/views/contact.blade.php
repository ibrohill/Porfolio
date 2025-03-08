@extends('layouts.app') {{-- Si vous utilisez un layout --}}

@section('content')
    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>N'hésitez pas à me contacter pour discuter de vos projets ou pour toute question.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <!-- Informations de contact -->
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <!-- Adresse -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Adresse</h3>
                                <p>Dakar, Guédiawaye, Sénégal</p>
                            </div>
                        </div><!-- End Info Item -->

                        <!-- Téléphone -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Appelez-moi</h3>
                                <p>+221 77 872 79 42</p>
                            </div>
                        </div><!-- End Info Item -->

                        <!-- Email -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Envoyez-moi un email</h3>
                                <p>ibrohillb&#64;gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <!-- Carte Google Maps -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.231839682367!2d-17.397788684684!3d14.762881189678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1725b5f5b5b5b5%3A0x5b5b5b5b5b5b5b5b!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1676961268712!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div class="col-lg-7">
                    <form class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <!-- Champ Nom -->
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Votre nom</label>
                                <input type="text" name="name" id="name-field" class="form-control" required>
                            </div>

                            <!-- Champ Email -->
                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Votre email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required>
                            </div>

                            <!-- Champ Sujet -->
                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Sujet</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required>
                            </div>

                            <!-- Champ Message -->
                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
                            </div>

                            <!-- Bouton d'envoi et messages de statut -->
                            <div class="col-md-12 text-center">
                                <div class="loading">Chargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a été envoyé. Merci !</div>

                                <button type="submit">Envoyer le message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
