<?php
require './utils/header.php'
?>
<!-- Section Home -->
<section id="home" class="home">
    <div class="slider-overlay"></div>
    <div class="flexslider">
        <ul class="slides scroll">
            <li class="first">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Un avenir meilleur pour tous</div>
                        <div class="small">Agissons ensemble pour un changement durable</div>
                        <a class="middle btn btn-white" id="supportCauseBtn">SOUTENEZ NOTRE CAUSE</a>
                        <button class="middle btn btn-white" id="videoBtn">Voir une vidéo</button>
                    </div>
                </div>
                <img src="images/1.png" alt="TMK Foundation - Avenir meilleur">
            </li>

            <li class="secondary">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Nous intervenons dans l'éducation, la santé et l'aide humanitaire</div>
                        <div class="small">Votre soutien peut transformer des vies</div>
                        <a class="middle btn btn-white" id="learnMoreBtn">EN SAVOIR PLUS</a>
                    </div>
                </div>
                <img src="images/2.png" alt="TMK Foundation - Aide humanitaire">
            </li>

            <li class="third">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big">Rejoignez-nous dans notre mission</div>
                        <div class="small">Votre don peut faire la différence</div>
                        <a href="" class="middle btn btn-white">FAIRE UN DON</a>
                    </div>
                </div>
                <img src="images/3.png" alt="TMK Foundation - Rejoindre notre mission">
            </li>
        </ul>
    </div>
</section>

<!-- Modal pour la vidéo -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeVideoModal">&times;</span>
        <iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/IUnlo_BRRBA?si=zi1wLjH4BDmmRAF1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<!-- Modal Soutenir notre cause -->
<div id="supportCauseModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeSupportModal">&times;</span>
        <h2>Soutenez notre cause</h2>
        <p>Nous avons besoin de votre soutien pour changer des vies. Voici comment vous pouvez nous aider :</p>
        <ul>
            <li>Airtel RDC: +243 999 999 999</li>
            <li>Cielux: +243 888 888 888</li>
            <li>Vodacom RDC: +243 777 777 777</li>
            <li>Huawei RDC: +243 666 666 666</li>
        </ul>
        <p>Vous pouvez faire des paiements en utilisant les plateformes suivantes :</p>
        <div>
            <img src="airtel-icon.png" alt="Airtel">
            <img src="vodacom-icon.png" alt="Vodacom">
            <img src="huawei-icon.png" alt="Huawei">
        </div>
    </div>
</div>

<!-- Modal En savoir plus -->
<div id="learnMoreModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeLearnMoreModal">&times;</span>
        <h2>En savoir plus</h2>
        <p>Voici tous les détails concernant notre projet et comment vous pouvez contribuer à faire une différence. Nous intervenons dans les domaines de l'éducation, de la santé, et de l'aide humanitaire. Votre soutien est crucial pour améliorer la vie de milliers de personnes. Nous avons besoin de vos dons pour :</p>
        <ul>
            <li>Améliorer l'accès à l'éducation dans les zones rurales</li>
            <li>Fournir des soins de santé essentiels aux populations vulnérables</li>
            <li>Apporter une aide humanitaire d'urgence</li>
        </ul>
        <p>Merci de soutenir notre cause!</p>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById("videoBtn").addEventListener("click", function() {
        document.getElementById("videoModal").style.display = "block";
    });

    document.getElementById("supportCauseBtn").addEventListener("click", function() {
        document.getElementById("supportCauseModal").style.display = "block";
    });

    document.getElementById("learnMoreBtn").addEventListener("click", function() {
        document.getElementById("learnMoreModal").style.display = "block";
    });

    document.getElementById("closeVideoModal").addEventListener("click", function() {
        document.getElementById("videoModal").style.display = "none";
    });

    document.getElementById("closeSupportModal").addEventListener("click", function() {
        document.getElementById("supportCauseModal").style.display = "none";
    });

    document.getElementById("closeLearnMoreModal").addEventListener("click", function() {
        document.getElementById("learnMoreModal").style.display = "none";
    });
</script>

<!-- Styles de base pour le modal -->
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 99999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 800px;
        position: relative;
    }

    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        float: right;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Centrage de l'iframe dans le modal */
    .video-frame {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        max-width: 560px;
        /* Limiter la taille maximale de la vidéo */
    }
</style>


<!-- Start Features -->
<section id="about" class="section">
    <div class="container">
        <div class="row">

            <!-- Feature 1: Projets Humanitaires -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="features-info">
                        <h4>Projets Humanitaires</h4>
                        <p>Nous intervenons dans les zones les plus vulnérables pour fournir une aide humanitaire essentielle, notamment des vivres et des soins médicaux.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 2: Éducation pour Tous -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="features-info">
                        <h4>Éducation pour Tous</h4>
                        <p>Nous soutenons les enfants et jeunes défavorisés en leur offrant un accès à l'éducation de qualité, pour un avenir plus prometteur.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Santé et Bien-être -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="features-info">
                        <h4>Services de Santé</h4>
                        <p>Notre fondation assure un accès aux soins de santé primaires, y compris la prévention et le traitement des maladies courantes.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 4: Aide aux Personnes Marginalisées -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="features-info">
                        <h4>Aide aux Personnes Marginalisées</h4>
                        <p>Nous mettons en place des programmes pour soutenir les groupes les plus vulnérables, notamment les orphelins, les réfugiés et les déplacés internes.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 5: Unité et Paix -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-peace"></i>
                    </div>
                    <div class="features-info">
                        <h4>Unité et Paix</h4>
                        <p>Nous travaillons pour la réconciliation et la promotion de la paix, particulièrement dans les zones de conflit, pour bâtir un avenir stable.</p>
                    </div>
                </div>
            </div>


            <!-- Feature 6: Développement Communautaire -->
            <div class="col-md-4">
                <div class="features-icon-box">
                    <div class="features-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="features-info">
                        <h4>Développement Communautaire</h4>
                        <p>Nous soutenons les initiatives communautaires visant à améliorer les conditions de vie locales, en encourageant l'autosuffisance et la solidarité.</p>
                    </div>
                </div>
            </div>

        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!-- End Features -->

<!-- Start Facts -->
<section id="facts" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Start Item: Projets Réalisés -->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-presentation"></i></span>
                <h3>5</h3>
                <span>Projets Réalisés</span>
            </div>
            <!-- End Item -->

            <!-- Start Item: Membres Actifs -->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="fa fa-users"></i></span>
                <h3>300+</h3>
                <span>Membres Actifs</span>
            </div>
            <!-- End Item -->

            <!-- Start Item: Dons Collectés -->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-wallet"></i></span>
                <h3>12</h3>
                <span>Dons Collectés</span>
            </div>
            <!-- End Item -->

            <!-- Start Item: Distinctions -->
            <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                <span><i class="icon-trophy"></i></span>
                <h3>10</h3>
                <span>Distinctions Remises</span>
            </div>
            <!-- End Item -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!-- End Facts -->

<!--Start History-->
<section id="history" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <center>
            <div class="title-box text-center white" id="boxs">
                <h2 class="title">Histoire de TMK Foundation</h2>
                <img src="../images/logo.png" alt="Logo TMK Foundation">
            </div>
        </center>

        <div id="histoires">
            <h2>The Miracle Kingdom</h2>
            <h3>1. Préambule</h3>
            <p>Il n’est donc pas un secret de connaitre que sur cette terre, il existe plusieurs types de problèmes que vivent les êtres humains et qui leur empêchent de s’épanouir dans leur vie. En effet, tout le monde n’a pas toujours la chance d’avoir les moyens nécessaires pour vivre une vie capable de leur permettre d’avancer ou d’être heureux, suite à plusieurs circonstances de la vie telles que :</p>
            <ul>
                <li>La pauvreté</li>
                <li>La marginalisation, etc.</li>
            </ul>
            <p>Ces circonstances jouent un rôle négatif en engendrant une longévité réduite, une mauvaise santé, une malnutrition, l’analphabétisme, un manque de confiance en soi, etc. Sur le plan psychologique, concernant la pauvreté, les hommes choisissent souvent la voie de l’agression et de mendier, tandis que les femmes choisissent souvent une vie de prostitution et de mendicité pour survivre. En outre, il existe aussi des personnes mises en écart, jugées inutiles et discriminées par d’autres membres de la société, telles que :</p>
            <ul>
                <li>Les personnes en situation de handicap</li>
                <li>Les filles et les femmes</li>
            </ul>
            <p>Ces personnes sont souvent négligées et exclues des prises de décision dans la société.</p>

            <h3>2. Fondation THE MIRACLE KINGDOM</h3>
            <p>Suite aux problèmes cités ci-dessus, l’idée de créer une fondation a été jugée utile afin de réduire la pauvreté et les inégalités, ainsi que d’améliorer le train de vie des êtres humains.</p>

            <div id="memeblock">
                <img src="../images/logos.png" alt="TMK Foundation Logo" style=" gap: 250px; width: 400px">
                <img src="../images/logo.png" alt="Logo TMK Foundation">
            </div>
            <p>
                Ladite fondation, appelé « THE MIRACLE KINGDOM », « TMK » en sigle, est
                une association qui consiste à contribuer à l’amélioration et au développement
                de la vie sociale des êtres humains tout à leur aidant à être utiles en eux-
                mêmes et à la société.
            </p>
            <center>
                <img src="../images/enfan.png" alt="">
            </center>
            <br>
            <h4>Elle consiste également à influencer de façon positive les générations pour
                bâtir un avenir meilleur.</h4>

            <h3>2.1 Objectifs poursuivis par la fondation</h3>
            <ul>
                <li>Assainir l’environnement</li>
                <li>Soutenir les personnes marginalisées et désavantagées</li>
                <li>Aider les personnes démunies</li>
                <li>Réduire la pauvreté et les inégalités</li>
                <li>Créer des orphelinats</li>
                <li>Instruire et former les individus en leadership et entrepreneuriat</li>
                <li>Accroître l’accès aux biens et services</li>
                <li>Créer des emplois</li>
            </ul>

            <h3>2.2 Pourquoi le nom « THE MIRACLE KINGDOM » ?</h3>
            <p>« THE MIRACLE KINGDOM » signifie « Royaume de miracle ». Il est important de noter que la fondation est avant tout chrétienne, réunissant plusieurs personnes distinguées, apportant chacune leurs objectifs individuels dans un même projet. Son slogan est : « Espérance, amour, union et foi ».</p>

            <h3>2.3 Création de la fondation</h3>
            <p>L’initiative du projet TMK a commencé en mai 2021, dans le but d’améliorer la vie sociale dans le monde.</p>

            <h3>2.4 Le secteur d’activité de TMK</h3>
            <p>La fondation a d'abord commencé par intervenir dans le secteur social, mais elle vise à étendre ses actions à plusieurs secteurs, étant donné que ses objectifs sont universels.</p>

            <h3>3. Fonctionnement de TMK</h3>
            <p>Comme toute association ou organisation sociale, la fondation TMK fonctionne grâce aux cotisations mensuelles de ses membres, qui contribuent à la caisse de la fondation. De plus, les dons, subventions ou toute autre contribution extérieure sont essentiels pour la réalisation et la continuité du projet de manière efficace et efficiente.</p>

            <h3>4. Les réalisations de TMK en 2021</h3>
            <h4>4.1 Première descente à l’orphelinat C.O.C</h4>
            <center>
                <img src="../images/orphelinat.png" alt="">
            </center> <br>

            <p>
                Le 02 juillet 2021, la fondation TMK fait sa première descente à l’orphelinat
                C.O.C qui se trouve à bandal tshibangu (derrière alimentation kin marché).
                En apportant les nécessités et en partageant avec eux (les enfants) les
                expériences de la vie.</p>
            <p>Et c’était une reconcentre spéciale pour la fondation TMK, qui a eu la chance
                de partager avec eux les circonstances auxquelles ils enduraient tout au long
                de leur vie et cela les a motivés et encouragés.</p>
            <center>
                <img src="../images/enfants.png" alt="">
            </center>
            <br>
            <h3>
                Pour apporter son soutien à ce qui concerne la santé, TMK avait apporté sa
                contribution en achetant les nécessités primaires afin d’aider du moins aux
                bien être de ces enfants.</h3>
            <center>
                <img src="../images/bidon1.png" alt=""> <br> <br>
                <img src="../images/bidon2.png" alt=""> <br> <br>
                <img src="../images/bidon3.png" alt=""> <br> <br>
            </center>
            <br>
            <h4>5. Soutien aux hôpitaux et lutte contre la drépanocytose</h4>
            <h5>5.1 Soutien à l’hôpital MABANGA</h5>

            <center>
                <img src="../images/bidon4.png" alt="">
            </center>
            <h3>
                Le 02 octobre 2022, la fondation TMK fait sa deuxième descente au centre
                d’accueil qui se trouve sur l’avenu ANGO-ANGO dans la commune de
                bandalungwa plus précisément dans la province de Kinshasa.
            </h3>
            <h4>
                Les rencontres avec ces orphelins, ajouta un plus à la fondation TMK, a ce qui
                concerne sa vision sur sa façon de faire pour apporter sa contribution dans
                l’amélioration sociales.
            </h4>
            <center>
                <img src="../images/bidon5.png" alt=""> <br> <br>
                <img src="../images/bidon6.png" alt=""> <br> <br>
            </center>
            <h2>
                6. Nos réalisations pour l’année 2023</h2>
            <h4>Etant une année jugée décisives, pour 2023, THE MIRACLE KINGDOM avait
                décidé d’améliorer et de diversifier ses activités dans plusieurs secteurs
            </h4>
            <h2>A. Descende vers les personnes démunis</h2> <br>
            <h4>Dans les années passées, la fondation se beaucoup plus focalisé sur les
                orphelinats mais pour l’année 2023, TMK avait prévu non seulement de
                continuer d’apporter sa contribution dans les orphelinats mais aussi d’aller
                dans les endroits dont les gens se trouvent dans des circonstances impasses
                dans leur vie tels que nous voyons dans les hôpitaux.</h4>

            <h2>
                A.1. Les hôpitaux</h2>
            <h3>A.1.1. La drépanocytose</h3>
            <center>
                <img src="../images/bidon7.png" alt=""> <br> <br>
            </center>
            <h3>Déjà pour rappel la drépanocytose est un groupe de maladies héréditaires, les
                globules rouges sont déformés et ressemblent à des faucilles. Les globules
                rouges meurent précocement, ce qui entraine un manque de globules rouges
                sains, et peuvent bloquer la circulation sanguine, provoquant des douleurs.</h3>
            <center>
                <img src="../images/bidon8.png" alt=""> <br> <br>
            </center>
            <h2>6.1. Descende à l’hôpital MABANGA (YOLO MEDICAL)</h2>
            <br>
            <center>
                <img src="../images/bidon9.png" alt=""> <br> <br>
            </center>
            <h3>
                De ce fait, la fondation TMK avait décidé de faire une descente et d’apporter
                son soutien à l’hôpital MABANGA qui est spécialisés pour les personnes dit
                « drépanocytaires »
            </h3>
            <h4>
                Lors de nos descentes sur terrain pour connaitre les nécessités pour traiter
                cette maladie, la majorité des médecins et pansions nous ont parlés des
                éléments qui suivent :
            </h4>
            <h4>
                Nécessité des sachets des sangs : le sang facilite l’oxygène et ainsi la
                bonne circulation des autres facteurs vitaux pour la santé.
            </h4>
            <h4>
                Nécessité des médicaments élémentaires : ici on parle des
                médicaments pour les traitements de leur douleur répétitifs. Et c’est
                médicament sont :
            </h4>
            <h5>
                ACIDE FOLIQUE ; HYDREA ; PENVIC ;
                AMOXYCILINE ; LYNEVITE ; LYCOTON ; TRAMADOL ; ACCUPAN ;
                COMPRESSE STERILES ; SPASFON ; NIFLURI ; PROFENID ; ORNID ;
                AMYCEF ; SERENES ; IPPROSEC ; BETADINE ; PRITHER ; ACUPAN ;
                ARAUPHAR et WATT.
            </h5>
            <p>
                Hormis les nécessités pour le traitement des malades, nous trouvons souvent
                les problèmes des impayés ce qui pénalise d’une part, l’hôpital qui manquera
                des ressources pour bien fonctionner et de payer ces employés. Et de l’autre
                part, l’insuffisance des places pour accueillir d’autres malades suit aux
                personnes retenues due aux impayées.
            </p>
            <h4>

                Suite à tout ce qui a été dit ci-haut, la fondation TMK avait décidé de soutenir
                les personnes drépanocytaires en apportant les nécessités ci-haut et des payés
                des facturations des malades (en fonction des moyens disponibles).
            </h4>
            <center>
                <img src="../images/bidon10.png" alt=""> <br> <br>
            </center>
            <h2>
                • A.1.2. Lutte pour réduire les taux de drépanocytose</h2>
            <h4>
                Pour rappel, la drépanocytose est héréditaire c’est-à-dire deux personnes du
                sexe opposés décide de procréer alors que leurs électrophorèses ne sont pas
                compatibles ce qui aura pour conséquence leur descendants seront des
                drépanocytaires.
            </h4>
            <h5>
                Pour lutter contre ça, la fondation TMK veut dans la majorité des communes
                organiser de teste gratuit pour les personnes qui veulent s’unir ou non de
                connaitre leurs électrophorèses afin d’éviter de procréer si cela est
                impossibles. Et une campagne à grande échelle afin de pouvoir sensibiliser les
                plus de monde sur les dangers de la drépanocytose
            </h5>

        </div>
</section>

<!--End History-->
<?php
// Tableau des images
$images = [];
for ($i = 1; $i <= 28; $i++) {
    $images[] = "aide" . $i . ".jpeg";
}

// Mélanger les images pour les afficher dans un ordre aléatoire
shuffle($images);

// Structure HTML de la section de projets
echo '<section id="works" class="section">
    <div class="title-box text-center">
        <h2 class="title">Nos Projets</h2>
    </div>

    <div class="work-main">
        <ul class="work-grid">';

// Boucle pour afficher les 30 images de manière dynamique
for ($i = 0; $i < count($images); $i++) {

    echo '<li class="work-item thumnail-img mix ">
        <div class="work-image">
            <img src="images/' . $images[$i] . '" alt="thumbnail">
        </div>

        <div class="work-caption">
            <h4>Projet N°' . ($i + 1) . '</h4>
        </div>
    </li>';
}

echo '</ul>
    </div>
</section>';
?>


<!-- Start Team -->
<section id="team" class="section">
    <div class="container">
        <div class="row">
            <div class="title-box text-center">
                <h2 class="title">Notre Équipe</h2>
            </div>
        </div>

        <!-- Team -->
        <div class="team-items team-carousel">
            <div class="item">
                <img src="images/1.jpeg" alt="Franck Nsinga" />
                <h4>Franck Nsinga</h4>
            </div>
            <div class="item">
                <img src="images/2.jpeg" alt="Leaticia Abibu" />
                <h4>Leaticia Abibu</h4>
            
            </div>
            <div class="item">
                <img src="images/3.jpeg" alt="Patrick Nsapu" />
                <h4>Patrick Nsapu</h4>
            </div>
            <div class="item">
                <img src="images/4.jpeg" alt="Nkulu Justine" />
                <h4>Nkulu Justine</h4>
            </div>
            <div class="item">
                <img src="images/5.jpeg" alt="Nkongolo Kabeji Isabelle" />
                <h4>Nkongolo Kabeji Isabelle</h4>
            </div>
            <div class="item">
                <img src="images/6.jpeg" alt="Yambanu Ndugbia Glody" />
                <h4>Yambanu Ndugbia Glody</h4>
            </div>
            <div class="item">
                <img src="images/7.jpeg" alt="Nono Olivera" />
                <h4>Nono Olivera</h4>
            </div>
            <div class="item">
                <img src="images/8.jpeg" alt="Elie Tshilongo" />
                <h4>Elie Tshilongo</h4>
            </div>
            <div class="item">
                <img src="images/9.jpeg" alt="Nsumbu Ramath" />
                <h4>Nsumbu Ramath</h4>
            </div>
            <div class="item">
                <img src="images/10.jpeg" alt="Kabeya Kayembe Manassé" />
                <h4>Kabeya Kayembe Manassé</h4>
            </div>
            <div class="item">
                <img src="images/11.jpeg" alt="Ngoie Mulongo Anthony Alfred" />
                <h4>Ngoie Mulongo Anthony Alfred</h4>
            </div>
            <div class="item">
                <img src="images/12.jpeg" alt="Lareine NDUME" />
                <h4>Lareine NDUME</h4>
            </div>
            <div class="item">
                <img src="images/13.jpeg" alt="Michelange Manda" />
                <h4>Michelange Manda</h4>
            </div>
            <div class="item">
                <img src="images/14.jpeg" alt="Mwitubile Mwebe Paola" />
                <h4>Mwitubile Mwebe Paola</h4>
            </div>
            <div class="item">
                <img src="images/15.jpeg" alt="Hodd Senguime" />
                <h4>Hodd Senguime</h4>
            </div>
            <div class="item">
                <img src="images/16.jpeg" alt="Roy Kasanda" />
                <h4>Roy Kasanda</h4>
            </div>
            <div class="item">
                <img src="images/17.jpeg" alt="Joel Massamba" />
                <h4>Joel Massamba</h4>
            </div>
            <div class="item">
                <img src="images/18.jpeg" alt="Nathan masiala" />
                <h4>Nathan masiala</h4>
            </div>
            <div class="item">
                <img src="images/19.jpeg" alt="Esther Ngoie" />
                <h4>Esther Ngoie</h4>
            </div>
            <div class="item">
                <img src="images/20.jpeg" alt="Malika Kubua Veronica" />
                <h4>Malika Kubua Veronica</h4>
            </div>
            <div class="item">
                <img src="images/21.jpeg" alt="Aziza Mponga Trésor" />
                <h4>Aziza Mponga Trésor</h4>
            </div>
        </div>
        <!-- End Team -->
    </div>
    <!-- End Content -->
</section>
<!-- End Team -->
<!--Start Skills-->
<section id="skills" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="title-box text-center white">
                <h2 class="title">Compétences Techniques de TMK</h2>
            </div>

            <!-- Skill #1: Gestion de Projet Humanitaire -->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <span class="pie-chart" data-percent="90">
                    <span class="percent"></span>
                </span>
                <h4>Gestion de Projet Humanitaire</h4>
                <p>Compétence dans la gestion de projets humanitaires, en coordonnant les équipes et en assurant l'impact positif des actions sur le terrain.</p>
            </div>

            <!-- Skill #2: Formation et Sensibilisation -->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <span class="pie-chart" data-percent="80">
                    <span class="percent"></span>
                </span>
                <h4>Formation et Sensibilisation</h4>
                <p>Excellentes compétences dans l'organisation de formations pour les jeunes leaders et la sensibilisation des communautés locales.</p>
            </div>

            <!-- Skill #3: Aide Médicale et Sanitaire -->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <span class="pie-chart" data-percent="75">
                    <span class="percent"></span>
                </span>
                <h4>Aide Médicale et Sanitaire</h4>
                <p>Intervention sur des projets de soins de santé de base et de prévention des maladies dans des régions en crise sanitaire.</p>
            </div>

            <!-- Skill #4: Mobilisation Communautaire -->
            <div class="col-sm-3 col-md-3 col-lg-3 pie-chart-main">
                <span class="pie-chart" data-percent="85">
                    <span class="percent"></span>
                </span>
                <h4>Mobilisation Communautaire</h4>
                <p>Compétences en organisation communautaire et en renforcement de la cohésion sociale pour favoriser la paix et l'unité au sein des communautés.</p>
            </div>
        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End Skills-->
<!--Start Services-->
<section id="services" class="section">
    <div class="container">
        <div class="row">
            <div class="title-box text-center">
                <h2 class="title" style="color: black;">Nos Services</h2>
            </div>

            <!-- Services Item #1: Aide Humanitaire -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-heart"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Aide Humanitaire</h4>
                        <p style="color: black;">Fourniture de secours essentiels aux populations en détresse, y compris la nourriture, l'eau et les abris, dans les zones de crise.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

            <!-- Services Item #2: Formation des Leaders -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-users"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Formation des Leaders</h4>
                        <p style="color: black;">Programmes de formation pour les jeunes leaders afin de renforcer leur capacité à diriger et à influencer positivement leur communauté.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

            <!-- Services Item #3: Assistance Sanitaire -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-medkit"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Assistance Sanitaire</h4>
                        <p style="color: black;">Assistance médicale dans les zones dévastées par les conflits ou les épidémies, en fournissant des soins de santé primaires et des médicaments essentiels.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

            <!-- Services Item #4: Projets de Réconciliation -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-handshake"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Projets de Réconciliation</h4>
                        <p style="color: black;">Initiatives pour promouvoir la paix, la réconciliation et l'unité au sein des communautés en Afrique centrale et de l'Ouest.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

            <!-- Services Item #5: Éducation et Sensibilisation -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-book"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Éducation et Sensibilisation</h4>
                        <p style="color: black;">Programmes d'éducation, y compris des sessions de sensibilisation sur des sujets vitaux tels que la santé, la sécurité et les droits humains.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

            <!-- Services Item #6: Soutien aux Orphelins -->
            <div class="col-md-4">
                <div class="services-box" style="border: 1px solid #ccc; padding: 20px; margin: 10px; border-radius: 10px;">
                    <div class="services-icon" style="font-size: 40px; color: black; text-align: center;"> 
                        <i class="fa fa-child"></i> 
                    </div>
                    <div class="services-desc" style="text-align: center;">
                        <h4 style="color: black;">Soutien aux Orphelins</h4>
                        <p style="color: black;">Création et gestion d'orphelinats pour offrir un foyer aux enfants vulnérables et leur fournir une éducation et des soins appropriés.</p>
                    </div>
                </div>
            </div>
            <!--End Services Item-->

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>

<!--End Services-->

<!--Start Why Choose Us-->
<section id="why-choose" class="section">
    <div class="container">
        <div class="row">
            <div class="title-box text-center">
                <h2 class="title">Pourquoi Choisir TMK</h2>
            </div>

            <!-- Start Tabs -->
            <div class="col-md-6">
                <div class="tabs tabs-main">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#one" data-toggle="tab">Notre Mission</a></li>
                        <li><a href="#two" data-toggle="tab">Nos Valeurs</a></li>
                        <li><a href="#three" data-toggle="tab">Notre Impact</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start Tab Item #1 (Mission) -->
                        <div class="tab-pane in active" id="one">
                            <p>
                                TMK Foundation est dédiée à l'amélioration des conditions de vie des communautés en difficulté.
                                Nous nous engageons à offrir des programmes de soutien humanitaire, éducatif et de développement
                                durable, visant à transformer des vies dans les zones les plus vulnérables.
                            </p>
                        </div>
                        <!-- End Tab -->

                        <!-- Start Tab Item #2 (Valeurs) -->
                        <div class="tab-pane" id="two">
                            <p>
                                Nos valeurs fondamentales sont l'intégrité, la solidarité, et l'engagement envers les communautés
                                que nous servons. TMK Foundation s'efforce de promouvoir la justice sociale, la paix, et l'unité
                                parmi les populations les plus démunies.
                            </p>
                        </div>
                        <!-- End Tab -->

                        <!-- Start Tab Item #3 (Impact) -->
                        <div class="tab-pane" id="three">
                            <p>
                                Grâce à nos programmes, nous avons touché des milliers de vies. Nous avons construit des orphelinats,
                                soutenu l'éducation, fourni une aide humanitaire en temps de crise et favorisé des initiatives locales
                                pour un avenir plus solidaire et pacifique.
                            </p>
                        </div>
                        <!-- End Tab -->

                    </div>
                </div>
            </div>
            <!-- End Tabs-->

            <!-- Start Accordion -->
            <div class="col-md-6">
                <div class="panel-group accordion-main" id="accordion">
                    <!-- About Accordion #1: Aide Humanitaire -->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion"
                            data-target="#collapseOne">
                            <h6 class="panel-title accordion-toggle">
                                Aide Humanitaire
                            </h6>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nous intervenons en cas de catastrophe pour fournir une aide d'urgence : nourriture, eau, abris,
                                    et services médicaux pour soutenir les populations dans les moments de crise.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Accordion #2: Education et Formation -->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion"
                            data-target="#collapseTwo">
                            <h6 class="panel-title accordion-toggle">
                                Education et Formation
                            </h6>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nous offrons des programmes éducatifs, y compris des bourses et des formations en leadership,
                                    afin de favoriser l'épanouissement et l'autonomisation des jeunes leaders dans les communautés.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Accordion #3: Projets de Réconciliation -->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion"
                            data-target="#collapseThree">
                            <h6 class="panel-title accordion-toggle">
                                Projets de Réconciliation
                            </h6>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nous soutenons des initiatives locales pour promouvoir la paix, la réconciliation et la cohésion
                                    sociale, particulièrement dans les zones post-conflit ou à forte division.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Accordion #4: Soutien aux Orphelins -->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion"
                            data-target="#collapseFour">
                            <h6 class="panel-title accordion-toggle">
                                Soutien aux Orphelins
                            </h6>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nous soutenons les enfants orphelins en leur offrant un foyer sécurisé, des soins de santé et une éducation de qualité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion-->

        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!-- End Why Choose Us-->

<!--Start video-->
<section id="video" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Vidéo</h2>
            </div>

            <div class="col-md-6">
                <div class="video-caption-main">
                    <!--Video caption #1-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>Découvrez notre action humanitaire en Afrique</h4>
                            <p>Apprenez comment TMK Foundation soutient les communautés dans le besoin à travers l'aide humanitaire et des programmes de réconciliation.</p>
                        </div>
                    </div>

                    <!--Video caption #2-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>Formation des jeunes leaders pour un avenir meilleur</h4>
                            <p>Notre mission est de former des jeunes leaders afin qu'ils puissent apporter des changements positifs au sein de leurs communautés.</p>
                        </div>
                    </div>

                    <!--Video caption #3-->
                    <div class="video-caption">
                        <div class="video-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="video-caption-info">
                            <h4>Agir pour la paix et la réconciliation</h4>
                            <p>Nous œuvrons pour instaurer la paix dans les régions en crise, en soutenant des initiatives de réconciliation entre les communautés divisées.</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Video caption-->

            <div class="col-md-6">
                <div class="play-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/U-W2jCmSz6I?si=d1jnL0mtXD8pN8fM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End video-->

<!--Start Contact-->
<section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="title-box text-center white">
                <h2 class="title">Contactez TMK</h2>
            </div>
        </div>

        <!--Start contact form-->
        <div class="col-md-8 col-md-offset-2 contact-form">

            <div class="contact-info text-center">
                <p><strong>Téléphone :</strong> +243 900 000 000</p>
                <p><strong>Adresse :</strong> A108 Rue Adam, Kinshasa, RDC</p>
                <p><strong>Email :</strong> <a href="mailto:contact@tmkfoundation.org">contact@tmkfoundation.org</a></p>
            </div>

            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" id="name" placeholder="Nom Complet" type="text">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="email" placeholder="Votre Email" type="email">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" id="subject" placeholder="Objet" type="text">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="message" rows="7" placeholder="Votre Message"></textarea>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-green">ENVOYER LE MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
        <!--End contact form-->

    </div> <!-- /.container-->
</section>
<!--End Contact-->

<?php
require './utils/footer.php'
?>