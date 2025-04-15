<?php
require './utils/header.php';
?>
<br><br><br><br><br><br>
<section id="hero" class="hero section">
    <div class="hero-container">
        <div class="form-container">
            <!-- Section Inscription -->
            <div class="form-card">
                <h3 class="text-center text-primary">Inscription</h3>
                <form action="register.php" method="POST" autocomplete="off">
                    <!-- Nom Input -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nom complet</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Entrez votre nom complet" required>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                    </div>

                    <!-- Mot de Passe Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                    </div>

                    <!-- Confirmation Mot de Passe Input -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                    </div>

                    <!-- Button to Validate -->
                    <center>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">S'inscrire</button>
                        </div>
                    </center>
                </form>

                <!-- Link to Login Page -->
                <div class="mt-3 text-center">
                    <p>Vous avez déjà un compte ? <a href="./login.php" class="text-primary">Se connecter</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require './utils/footer.php';
?>

<script>
    // Aucune action JavaScript nécessaire pour cette page d'inscription
</script>

<style>
    /* Centrer le contenu de la page */
    #hero {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f7fa;
        /* Ajout d'une couleur de fond douce */
    }

    /* Conteneur général */
    .hero-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 600px;
    }

    /* Style de la carte */
    .form-card {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    h3 {
        font-size: 24px;
        font-weight: 600;
        color: #007bff;
        margin-bottom: 20px;
    }

    /* Amélioration des champs de formulaire */
    .form-control {
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 15px;
        font-size: 16px;
    }

    /* Style des boutons */
    .btn {
        border-radius: 8px;
        font-size: 16px;
        padding: 12px;
        font-weight: 600;
        width: 100%;
        margin-bottom: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-lg {
        padding: 15px;
    }

    .d-grid {
        margin-top: 15px;
    }

    /* Styles pour les liens */
    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
