<body>
    <div class="bienvenidos">
        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Te seguimos donde vayas</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Dale seguimiento en tiempo real a tu auto.</p>
                
                <?php echo $this->Html->link('Ponte en contacto',['controller' => 'Pages', 'action' => 'display', 'nosotros'],['class'=>'btn btn-primary btn-lg']);?>
            </div>

        </div>
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>

    </div>
    <section class="agencia p-y-1" id="agencia">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">Solución satelital de protección y control vehicular</h2>
                    <p>AQUITOY! es un servicio que consta de un aplicativo móvil y un módulo GPS, previsto para la geolocalización de tu auto en tiempo real.</p>
                    <p>Ponemos a tu alcance un servicio adaptado a tus necesidades, que te brindará la confiabilidad y seguridad que necesitabas, y así poder conocer la ubicación de tu vehiculo en todo momento y combatir la inseguridad ciudadana.</p>
                    <p>Conoce más acerca de nosotros.</p>
                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                     <?= $this->html->image('celular.png',array('alt' => 'Nosotros'),['class'=>'col-md-4 col-xl-3 wow bounceIn']) ?> 
                </div>
            </div>
        </div>

    </section>
    <section class="tu-mejor-eleccion p-y-1">
        <div class="container">

            <h2 class="h3 text-xs-center font-weight-bold">¿Porque AQUITOY! es <span>tu mejor elección?</span></h2>
            <p class="text-xs-center">
                Seguimiento en tiempo real a tu vehículo.
            </p>

            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Seguridad</h4>
                            <p class="hidden-md-down">Tus datos están 100% protegidos.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Confiabilidad</h4>
                            <p class="hidden-md-down">Te brindamos un servicio de calidad.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">

                        <i class="fa  fa-comment-o" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Para todo vehiculo</h4>
                            <p class="hidden-md-down">Utilizalo en cualquier vehículo.</p>
                        </div>
                    </li>
                </ul>

                <div class="hidden-md-down col-lg-4">
                    
                    <?= $this->html->image('mundo.png',array('alt' => 'Mundo movil'),['class'=>'nav-link']) ?> 
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <i class="fa  fa-calendar" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Interfaz amigable</h4>
                            <p class="hidden-md-down">Una interfaz fácil de usar.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Usabilidad</h4>
                            <p class="hidden-md-down">El sistema cuenta con una curva de aprendizaje intuitiva.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.3s">
                        <i class="fa  fa-cogs" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Funciones a medida</h4>
                            <p class="hidden-md-down">Tienes más de 50 funciones predesarrolladas para escoger.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
</body>