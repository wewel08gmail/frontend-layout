<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front-End Demo</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
  


    <section class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-6">
            <img class="logo-image" src="images/ole777-white.png">
            </div>
            <div class="col-4 col-md-6 d-flex justify-content-end">
              <a class="btn btn-login me-2 d-none d-lg-block" href="#">Login</a>
              <a class="btn btn-gray d-none d-lg-block" href="#">Daftar Sekarang</a>


                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Tentang OLE 777</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Komisi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Peraturan</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pertamyan & Jabawaan</a>
                        </li>
                    </ul>
                    </div>
                </nav>          

            </div>
            
        </div>        
    </div>
    </section>
    
    <section class="nav-header d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-8">
                <nav class="navbar py-1">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Tentang OLE 777</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Komisi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Peraturan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pertamyan & Jabawaan</a>
                    </li>
                </ul>
                </nav>            
            </div>
            <div class="col-md-4">
                <a class="btn btn-official my-1 me-2" href="#">OLE777 Official</a>
            </div>
                        
        
        </div>
    </div>
    </section>
    <section class="d-none d-lg-block">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-0">
                <div class="slides">
                <?php
                    $url = 'https://super7tech.com/web_developer_exam_sr/json/slideshow.json';
                    $data = file_get_contents($url);
                    $slideshow = json_decode($data);

                    if ($slideshow !== null) {
                        foreach ($slideshow as $slide) {      
                            $image = $slide->img;
                            $caption = $slide->name;                            
                            echo '<div class="slide">';
                            echo '<img src="' . $image . '" alt="' . $caption . '">';                            
                            echo '</div>';
                        }
                    } else {
                        echo 'Failed to retrieve slideshow data.';
                    }
                ?>
                </div>

            </div>            
        </div>
    </div>
    </section>
    <section class="below-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                    <div class="cta-cards-wrapper">
                        <div class="cta-card"><img src="images/img-cta-1.jpg"></div>
                        <div class="cta-card"><img src="images/img-cta-2.jpg"></div>
                        <div class="cta-card"><img src="images/img-cta-3.jpg"></div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    <section class="section-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <p><strong>Kongsi OLE777</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur eu augue ut congue. Praesent tincidunt in elit vitae luctus. Vestibulum justo augue, scelerisque ut dictum quis, maximus sit amet dui. Fusce est nisi, dictum fermentum accumsan vel, malesuada et quam. Sed finibus lectus lorem, ut venenatis eros accumsan et. Phasellus eget suscipit tortor, eget sodales nulla. In hac habitasse platea dictumst. Vestibulum ultrices sed ligula vel mollis. Nullam rhoncus, diam in tristique ornare, lacus odio euismod arcu, in pretium dui erat eu ex. Aenean orci mi, imperdiet nec erat nec, consequat ullamcorper arcu.</p>
                    <p><strong>Langkah-langkah mendaputkan komisi dengan menjadi Kongsi OLE777</strong></p>
                    <ol class="styled-ordered">
                        <li>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</li>
                        <li>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</li>
                        <li>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</li>
                        <li>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</li>
                    </ol>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-6 col-sm-6 col-md-3 text-center py-3">
                        <img src="images/img-group.svg">
                        <h3>Tim Pembayaran <br>yang Profesional</h3>
                        <span class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                </div>
                <div class="col-6 col-sm-6 col-md-3 text-center py-3">
                        <img src="images/img-domino.svg">
                        <h3>Brand yang <br>Terkenal</h3>
                        <span class="d-none d-lg-block">Pellentesque efficitur eu augue ut congue.</span>
                </div>
                <div class="col-6 col-sm-6 col-md-3 text-center py-3">
                        <img src="images/img-document.svg">
                        <h3>Sistem Laporan <br>Profesional</h3>
                        <span class="d-none d-lg-block">Vestibulum justo augue, scelerisque ut dictum quis,</span>
                </div>
                <div class="col-6 col-sm-6 col-md-3 text-center py-3">
                    <img src="images/img-settings.svg">
                    <h3>Personalisaskan <br>Paket Pribadi</h3>
                    <span class="d-none d-lg-block">Phasellus eget suscipit tortor, eget sodales nulla.</span>
                </div>
            </div>
        </div>        
    </section>
    <section class="above-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center px-0">
                    <img class="w-100" src="images/Sticker WhatsApp Gratis - Kongsi OLE777.gif">
                </div>
            </div>
        </div>
    </section>
    <section class="footer-media d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center d-flex">
                    <img src="images/icon-skype.svg"> <strong>Pelayan Skype:</strong> <a href="#">afidia.com</a> 
                </div>
                <div class="col-md-4 text-center">
                    <img src="images/icon-email.svg"> <strong>Email:</strong> <a href="#">affiliate@ole77.com</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="images/icon-whatsapp.svg"> <strong>WhatsApp:</strong> <a href="#">+67134567</a>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-logos">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center d-flex align-items-center">
                    <div>
                        <img src="images/logo-chelsea.svg" class="mx-2 img-1">
                    </div>
                    <div>
                        <img src="images/logo-pagcor.png" class="mx-2 img-2">
                    </div>
                    <div>
                        <img src="images/logo-iom.png" class="mx-2 img-3">
                    </div>
                    <div>
                        <img src="images/ole777-white.png" class="mx-2 img-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        jQuery('.slides').slick({
            autoplay: true,
            autoplaySpeed: 2000,
        });
        jQuery('.cta-cards-wrapper').slick({
            slidesToShow: 3,
            dots: false,
            responsive: [
                            {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: false
                            }
                            },
                            {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                            },
                            {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                            }         
                        ]
        });
    </script>
  </body>
</html>