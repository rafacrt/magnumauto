<?php require_once '../header.php'; ?>

<div class="main-content main-content-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="../home/index.php">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Contato
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">Contato</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="page-main-content">
        <div class="google-map">
            <div class="tanajil-google-maps" id="tanajil-google-maps" data-hue="" data-lightness="1" data-map-style="2" data-saturation="-99" data-longitude="-73.985130" data-latitude="40.758896" data-pin-icon="" data-zoom="14" data-map-type="ROADMAP"></div>
            <span class="fa fa-map-marker"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-contact">
                        <div class="col-lg-8 no-padding">
                            <div class="form-message">
                                <h2 class="title">
                                    Envia sua Mensagem!
                                </h2>
                                <form action="enviar.php" method="post" class="tanajil-contact-fom">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">Seu Nome *</span>
                                                <span class="form-control-wrap your-name">
                                                    <input title="Seu Nome" type="text" name="your-name" size="40" class="form-control form-control-name">
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">
                                                    Seu Email *
                                                </span>
                                                <span class="form-control-wrap your-email">
                                                    <input title="Seu Email" type="email" name="your-email" size="40" class="form-control form-control-email">
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">Telefone</span>
                                                <span class="form-control-wrap your-phone">
                                                    <input title="Telefone" type="text" name="your-phone" class="form-control form-control-phone">
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">
                                                    Empresa
                                                </span>
                                                <span class="form-control-wrap your-company">
                                                    <input title="Empresa" type="text" name="your-company" class="form-control your-company">
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        <span class="form-label">
                                            Sua Mensagem
                                        </span>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea title="Sua Mensagem" name="your-message" cols="40" rows="9" class="form-control your-textarea"></textarea>
                                        </span>
                                    </p>
                                    <p>
                                        <input type="submit" value="Enviar" class="form-control-submit button-submit">
                                    </p>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-4 no-padding">
                            <div class="form-contact-information">
                                <form action="#" class="tanajil-contact-info">
                                    <h2 class="title">
                                        Informações de Contato
                                    </h2>
                                    <div class="info">
                                        <div class="item address">
                                            <span class="icon">

                                            </span>
                                            <span class="text">
                                                R. Zulmiro Trevisani, 790 – Jardim São Judas Tadeu
                                                Sumaré – SP - Cep: 13180-612
                                            </span>
                                        </div>
                                        <div class="item phone">
                                            <span class="icon">

                                            </span>
                                            <span class="text">
                                                (19) 3922-4277 / 97409-3176
                                            </span>
                                        </div>
                                        <div class="item email">
                                            <span class="icon">

                                            </span>
                                            <span class="text">
                                                vendas@magnumauto.com.br
                                            </span>
                                        </div>
                                    </div>
                                    <div class="socials">
                                        <a href="#" class="social-item" target="_blank">
                                            <span class="icon fa fa-facebook">

                                            </span>
                                        </a>
                                        <a href="#" class="social-item" target="_blank">
                                            <span class="icon fa fa-twitter-square">

                                            </span>
                                        </a>
                                        <a href="#" class="social-item" target="_blank">
                                            <span class="icon fa fa-instagram">

                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>