<?php
    require './cabecalho.php';
?>
        <!-- Start slider -->
        <section id="aa-slider">
            <div class="aa-slider-area">
                <div id="sequence" class="seq">
                    <div class="seq-screen">
                        <ul class="seq-canvas">
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="shoesmasc.jpeg" alt="Men slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Ganhe 50% de desconto na sua primeira compra em qualquer coleção</span>                
                                    <h2 data-seq>Coleção Masculina</h2>                
                                    <p data-seq>As Melhores Opções de Calçados Masculinos Nessa Coleção</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRE AGORA!</a>
                                </div>
                            </li>
                            <!-- single slide item -->          
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="shoes emailing.png" alt="Shoes slide img" />
                                </div>
                                <div class="seq-title">             
                                    <h2 data-seq>Coleção Feminina</h2>                
                                    <p data-seq>As Melhores Opções de Calçados Femininos Nessa Coleção</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRE AGORA!</a>
                                </div>
                            </li>
                            <!-- single slide item -->  
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="conceito-recem-nascido-com-quatro-pares-de-sapatos.jpg" alt="Male Female slide img" />
                                </div>
                                <div class="seq-title">               
                                    <h2 data-seq>Coleção Infantil</h2>                
                                    <p data-seq>As Melhores Opções de Calçados Infantis Nessa Coleção</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRE AGORA!</a>
                                </div>
                            </li>                   
                        </ul>
                    </div>
                    <!-- slider navigation btn -->
                    <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                        <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                        <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                    </fieldset>
                </div>
            </div>
        </section>
        <!-- / sl -->
        <!-- Start Promo section -->
        <section id="aa-promo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-promo-area">
                            <div class="row">
                                <!-- promo left -->
                                <div class="col-md-5 no-padding">                
                                    <div class="aa-promo-left">
                                        <div class="aa-promo-banner">                    
                                            <img src="_.jpeg" alt="img">                    
                                            <div class="aa-prom-content">
                                                <span>Novidades</span>
                                                <h4><a href="#">Coleção Feminina</a></h4>                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- promo right -->
                                <div class="col-md-5 no-padding">                
                                    <div class="aa-promo-right">
                                        <div class="aa-promo-banner">                    
                                            <img src="New Balance MRL247ON_ Mushroom.jpeg" alt="img">                    
                                            <div class="aa-prom-content">   
                                                <span>Novidades</span>
                                                <h4><a href="#">Coleção Masculina</a></h4>                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 no-padding">
                                    <div class="aa-promo-right">

                                        <div class="aa-promo-banner">                      
                                            <img src="cinfantil.jpeg" alt="img">                      
                                            <div class="aa-prom-content">
                                                <span>Novidades</span>
                                                <h4><a href="#">Coleção Infantil</a></h4>                        
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Promo section -->
        <!-- Products section -->
        <section id="aa-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="aa-product-area">
                                <div class="aa-product-inner">
                                    <!-- start prduct navigation -->
                                    <ul class="nav nav-tabs aa-products-tab">
                                        <li class="active"><a href="#men" data-toggle="tab">Masculino</a></li>
                                        <li><a href="#women" data-toggle="tab">Feminino</a></li>
                                        <li><a href="#sports" data-toggle="tab">Crianças</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Start men product category -->
                                        <div class="tab-pane fade in active" id="men">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Chinelo Kenner Nk6 Original Preto Preto_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Chinelos<a href="#"></a></h4>
                                                            <span class="aa-product-price">R$45.50</span><span class="aa-product-price"><del>R$65.50</del></span>
                                                        </figcaption>
                                                    </figure>                        
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Sapato Social Masculino DUBUY 819FG Preto_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Sapato Social<a href="#"></a></h4>
                                                            <span class="aa-product-price">R$107,00</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="fcc60a48-0cb2-424d-8b0e-62d64bae36f0_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Botas</a></h4>
                                                            <span class="aa-product-price">R$90,90</span><span class="aa-product-price"><del>R$120,00</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Nike Shoes _ Nike Air Forces Black _ Color_ Black _ Size_ 8_5_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Tênis</a></h4>
                                                            <span class="aa-product-price">R$110,00</span><span class="aa-product-price"><del> R$130,00</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Tênis Nike Revolution 6 Next Nature Esportivo Masc_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Tênis Esportivo</a></h4>
                                                            <span class="aa-product-price">R$113,99</span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Carteira Masculina Executiva Couro Masculino_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Carteira</a></h4>
                                                            <span class="aa-product-price">R$45.50</span><span class="aa-product-price"><del>R$78,90</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Men Multi Zip Laptop Backpack, Schoolbag For Travel, College, School_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Mochilas</a></h4>
                                                            <span class="aa-product-price">R$92,00</span><span class="aa-product-price"><del>R$110,90</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="bolsadeviagem.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Bolsas de Viagem</a></h4>
                                                            <span class="aa-product-price">R$150,00</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>                        
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Navegar por todos os produtos <span class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / men product category -->
                                        <!-- start women product category -->
                                        <div class="tab-pane fade" id="women">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Sandálias Camurça salto agulha Cinta de Tornozelo_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Salto<a href="#">
                                                                
                                                                </a></h4>
                                                            <span class="aa-product-price">R$75.50</span><span class="aa-product-price"><del>R$85.50</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Rasteira Melissa Wave Sandal Preta_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Sandálias/Chinelos</a></h4>
                                                            <span class="aa-product-price">R$45.50</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Bota Feminina Coturno Tratorada Vittal Tendência 100_ Couro_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Botas</a></h4>
                                                            <span class="aa-product-price">R$120.50</span><span class="aa-product-price"><del>R$150.50</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="z.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Tênis<a href="#"></a></h4>
                                                            <span class="aa-product-price">R$96.50</span><span class="aa-product-price"><del>R$110.50</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Tênis Para Academia Original - Esportivo - Caminhada - Fit_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Tênis esportivos</a></h4>
                                                            <span class="aa-product-price">R$93.50</span>
                                                        </figcaption>
                                                    </figure>

                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Bolsa Tiracolo Preta Arezzo Pequena Barbicacho _ ZZ MALL_resized.png" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Bolsas de Mão</a></h4>
                                                            <span class="aa-product-price">R$69.50</span><span class="aa-product-price"><del>R$86.50</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="✨_ bastossjulia_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Bolsas de Alça </a></h4>
                                                            <span class="aa-product-price">R$73.50</span><span class="aa-product-price"><del>R$104.50</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Moda masculina de marca_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Bolsas de Viagem</a></h4>
                                                            <span class="aa-product-price">R$156.50</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>                        
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Navegar por todos os produtos <span class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / women product category -->
                                        <!-- start sports product category -->
                                        <div class="tab-pane fade" id="sports">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Premium Black and White Size 5 Soccer Ball_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no Carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Bolas<a href="#"></a></h4>
                                                            <span class="aa-product-price">R$40,00</span><span class="aa-product-price"><del>R$60,00</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Mochila Escolar Lancheira Preto Batman Maxtoy Da Diplomata_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Mochilas</a></h4>
                                                            <span class="aa-product-price">R$95,99</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Tênis Infantil Nike Court Borough Low Masculino_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Tênis</a></h4>
                                                            <span class="aa-product-price">R$83,00</span><span class="aa-product-price"><del>R$129,90</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Papete Ortopasso Infantil Anatomica Eco Preta_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Sandálias</a></h4>
                                                            <span class="aa-product-price">R$45,50</span><span class="aa-product-price"><del>R$65,50</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Sapato de bb_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Botas</a></h4>
                                                            <span class="aa-product-price">R$127,00</span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Meninos da Criança 5 pares meias de tripulação Gráfico listrado e em letras_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Meias</a></h4>
                                                            <span class="aa-product-price">R$26,90</span><span class="aa-product-price"><del>R$36,90</del></span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="__resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">Bolsas<a href="#"></a></h4>
                                                            <span class="aa-product-price">R$33,45</span><span class="aa-product-price"><del>R$58,00</del></span>
                                                        </figcaption>
                                                    </figure>                          
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">Compre!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img src="Tênis Molekinho Infantil Esportivo Preto_resized.jpeg" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Adicione no carrinho</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Tênis Esportivos</a></h4>
                                                            <span class="aa-product-price">R$89,99</span>
                                                        </figcaption>
                                                    </figure>                         
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Compre!</span>
                                                </li>                        
                                            </ul>
                                        </div>
                                        

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>  
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
        <!-- To Slider JS -->
        <script src="js/sequence.js"></script>
        <script src="js/sequence-theme.modern-slide-in.js"></script>  
        <!-- Product view slider -->
        <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
        <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="js/slick.js"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="js/nouislider.js"></script>
        <!-- Custom js -->
        <script src="js/custom.js"></script> 

    </body>
</html>
