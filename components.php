<?php
function head_tag() {
    echo "<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"favicon/site.webmanifest\">
    <link rel=\"mask-icon\" href=\"favicon/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"favicon/favicon.ico\">
    <meta name=\"msapplication-TileColor\" content=\"#00a300\">
    <meta name=\"msapplication-config\" content=\"favicon/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <meta name=\"title\" content=\"Imperial Wellness | Nutrition. Fitness. Mentoring. Motivation\">
    <meta name=\"description\"
        content=\"Hey there I’m Additi. As a Dedicated Wellness Coach, I want to share with you a Course of Action, on how You can easily incorporate nutrition balancing and fitness into your busy lifestyle. You could be a work-o-holic, a busy mom or a student and in spite of all the busy ness you can still rep the fitness star version of yourself.\">

    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://www.imperialwellness24.com/\">
    <meta property=\"og:title\" content=\"Imperial Wellness | Nutrition. Fitness. Mentoring. Motivation\">
    <meta property=\"og:description\"
        content=\"Hey there I’m Additi. As a Dedicated Wellness Coach, I want to share with you a Course of Action, on how You can easily incorporate nutrition balancing and fitness into your busy lifestyle. You could be a work-o-holic, a busy mom or a student and in spite of all the busy ness you can still rep the fitness star version of yourself.\">
    <meta property=\"og:image\" content=\"\">

    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://www.imperialwellness24.com/\">
    <meta property=\"twitter:title\" content=\"Imperial Wellness | Nutrition. Fitness. Mentoring. Motivation\">
    <meta property=\"twitter:description\"
        content=\"Hey there I’m Additi. As a Dedicated Wellness Coach, I want to share with you a Course of Action, on how You can easily incorporate nutrition balancing and fitness into your busy lifestyle. You could be a work-o-holic, a busy mom or a student and in spite of all the busy ness you can still rep the fitness star version of yourself.\">
    <meta property=\"twitter:image\" content=\"\">

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\" />
    <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" />
    <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/aos@next/dist/aos.css\" />
    <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css\" />
    <link rel=\"stylesheet\" href=\"css/styles.css\">";
}

function navbar($color, $toggler) {
  echo "<nav id=\"navbar\" class=\"navbar navbar-expand-lg navbar-$color better-bootstrap-nav-right\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"./images/logo.png\" alt=\"\" class=\"img-fluid\"></a>
            <button class=\"navbar-toggler custom-toggler $toggler\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item ml-5\">
                        <a class=\"nav-link\" href=\"index\">Home</a>
                    </li>
                    <li class=\"nav-item ml-5\">
                        <a class=\"nav-link\" href=\"about\">About Us</a>
                    </li>
                    <li class=\"nav-item ml-5\">
                        <a class=\"nav-link\" href=\"plans\">Plans</a>
                    </li>
                    <li class=\"nav-item ml-5\">
                        <a class=\"nav-link\" href=\"register\">Register</a>
                    </li>
                    <li class=\"nav-item ml-5\">
                        <a class=\"nav-link\" href=\"https://imperialwellness.goherbalife.com/Catalog/Home/Index/en-in\">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
}

function footer() {
    echo "<footer id=\"footer\">
        <div class=\"container\">
            <h3>Contact Us</h3>
            <p>We’d love to hear from you</p>
            <div class=\"row justify-content-start\">
                <div class=\"col-lg-3 col-md-6 mt-4\">
                    <h5>Find us here</h5>
                    <p>
                        17B, Mantri Corner,<br />1st Floor, Sayani Road<br />
                        Mumbai - 400025,<br />
                        Maharashtra, India
                    </p>
                </div>
                <div class=\"col-lg-3 col-md-6 mt-4\">
                    <h5>Email us at</h5>
                    <a href=\"#\">info@imperialwellness.com</a>
                    <h5 class=\"mt-4\">Call us on</h5>
                    <a href=\"#\">+91-9930 065 532</a>
                </div>
                <div class=\"col-lg-3 col-md-6 mt-4\">
                    <h5>Quick links</h5>
                    <div class=\"links\">
                        <a href=\"\">Home</a>
                        <a href=\"\">About Us</a>
                        <a href=\"\">Plans</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 mt-4\">
                    <h5>Our Social</h5>
                    <a class=\"footer-social mr-3\" href=\"https://www.facebook.com/Imperialwellness24\"><i class=\"fab fa-facebook\"></i></a>
                    <a class=\"footer-social mr-3\" href=\"https://www.instagram.com/imperialwellness24/\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"footer-social mr-3\" href=\"https://www.youtube.com/channel/UC8WBmVVl6LP9ccbUeTBSrGA\"><i class=\"fab fa-youtube\"></i></a>
                </div>
            </div>
            <p class=\"copyright\">
                &copy; All Rights reserved | Privacy Policy | Credits
            </p>
        </div>
    </footer>";
}

function scripts() {
    echo "<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js\"></script>
    <script src=\"./js/main.js\"></script>";
}


?>