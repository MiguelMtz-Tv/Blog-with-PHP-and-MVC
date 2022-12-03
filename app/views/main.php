<?php require_once RUTA_APP.'/views/inc/header.php';?>
        <section id="content" class="s-content">
                <!-- pageheader -->
                <div class="s-pageheader">
                    <div class="row">
                        <div class="column large-12">
                            <h1 class="page-title">
                                Noticias publicadas
                            </h1>
                        </div>
                    </div>
                </div> <!-- end s-pageheader-->


                <!--  masonry -->
                <div id="bricks" class="bricks">

                    <div class="masonry">

                        <div class="bricks-wrapper" data-animate-block>

                            <div class="grid-sizer"></div>
                            <?php foreach($data['news'] as $new) :?>
                            <article class="brick entry" data-animate-el>
            
                                <div class="entry__thumb">
                                    
                                    <a href="noticia/new/<?= $new -> not_url?>" class="thumb-link"> 
                                        <img src="./images/<?=$new->not_port_url?>" 
                                            alt="">
                                </a> 
                                
                                </div> <!-- end entry__thumb -->
                                
                                <div class="entry__text">
                                    <div class="entry__header">
                                        <div class="entry__meta">
                                            <span class="byline">
                                                Escrito por:
                                                <a href="#0"><?=$new -> not_user_name?></a>
                                            </span>
                                        </div>
                                        <h1 class="entry__title"><a href="single-standard.html"></a><?=$new -> not_titulo?></h1>
                                    </div>
                                    <div class="entry__excerpt">
                                    <p>
                                    <?=html_entity_decode($new -> not_descripcion)?>
                                    </p>
                                    </div>
                                    <a class="entry__more-link" href="#0">Leer más</a>
                                    <div class="entry__meta">
                                        <span class="byline">
                                        <?=date('y/d/m', strtotime($new->not_fecha))?>
                                        </span>
                                    </div>
                                </div> <!-- end entry__text -->
                            
                            </article> <!-- end article -->
                            <?php endforeach;?>
        </section>
<?php require_once RUTA_APP.'/views/inc/footer.php';?>