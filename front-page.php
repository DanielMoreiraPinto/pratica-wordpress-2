<?php
    get_header();
?>

<!-- Letreiro -->
<section id="banner">
        <div class="inner">
            <h1>Industrious</h1>
            <p>A responsive business oriented template with a video background<br />
            designed by <a href="https://templated.co/">TEMPLATED</a> and released under the Creative Commons License.</p>
        </div>
        <video autoplay loop muted playsinline src="<?php echo(get_template_directory_uri()."/images/banner.mp4") ?>"></video>
    </section>

<!-- Posts ou trabalhos ou coisas a se mostrar na vitrine do site -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Sem turpis amet semper</h2>
                <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                            <h3>Feugiat consequat</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
                            <h3>Ante sem integer</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
                            <h3>Ipsum consequat</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
                            <h3>Interdum gravida</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
                            <h3>Faucibus consequat</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
                            <h3>Accumsan viverra</h3>
                        </header>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="wrapper"> 
        <div class="inner">
        <header class="special">
            <h2>Blog do tema</h2>
        </header>
        <?php

            if (have_posts()) :

                while (have_posts()) : the_post(); ?>

                    <h3> <?php the_title(); ?> </h3>
                    <?php
                        $content = get_the_excerpt();
                        $resumo = substr($content, 0, 450);
                        echo '<p>'.$resumo.'<p>';
                    ?>
                    <a href="<?php the_permalink(); ?>"> Saiba mais </a>
                    <hr>
                    <br>

                <?php endwhile;

            else:
                echo'<p> Sem conteúdo </p>';

            endif;
        ?>
        </div>
    </section>

<!-- Um negocio facil de ver porque ta na cor diferente -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>Curabitur ullamcorper ultricies</h2>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
        </div>
    </section>

<!-- Fulanas e Fulanos dando opinião -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Faucibus consequat lorem</h2>
                <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
            </header>
            <div class="testimonials">
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo(get_template_directory_uri()."/images/pic01.jpg") ?>" alt="" />
                            </div>
                            <p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo(get_template_directory_uri()."/images/pic03.jpg") ?>" alt="" />
                            </div>
                            <p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo(get_template_directory_uri()."/images/pic02.jpg") ?>" alt="" />
                            </div>
                            <p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
            
<?php
    get_footer()
?>