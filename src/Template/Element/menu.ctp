        <header class="encabezado navbar-fixed-top" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                  <?= $this->html->image('AquiToyCompleto.png', array('alt' => 'logo')) ?> 
                </a>

                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li>
                         <?php echo $this->Html->link('Inicio',['controller' => 'Pages', 'action' => 'display', 'inicio'],['class'=>'nav-link']);?>
                        </li>

                        <li>
                         <?php echo $this->Html->link('Nosotros',['controller' => 'Pages', 'action' => 'display', 'nosotros'],['class'=>'nav-link']);?>
                        </li>

                        <li>
                         <?php echo $this->Html->link('Productos|Servicios',['controller' => 'Pages', 'action' => 'display', 'servicios'],['class'=>'nav-link']);?>
                        </li>
                        
                        <li>
                        <?php echo $this->Html->link('Contactos',['controller' => 'Pages', 'action' => 'display', 'contactos'],['class'=>'nav-link']);?>
                        </li>

                    </ul>
                </nav>

            </div>
        </header>