<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title><?php wp_title('|', true, 'right');?></title>

    <!--Import Icon & Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- MaterializeCSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/materialize.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightbox.min.css">

    <?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31729233-7', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
    <header class="topo">
        <nav class="topbar">
            <div class="nav-wrapper">
                <div class="container-fluid">
                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name');?>" class="brand-logo center">
                        <h1 class="logo"><?php bloginfo('name');?></h1>
                        <h2 class="slogan"><?php bloginfo('description');?></h2>
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse" style="display:block;"><i class="button-top material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="http://twitter.com/siqueiradg" target="_blank"><i class="fa  fa-twitter  fa-2x" style="color:#333;" title="Twitter"></i></a>
                        </li>
                        <li><a href="http://github.com/siqueiradg" target="_blank"><i class="fa  fa-github  fa-2x " style="color:#333;" title="Github"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/dougsiq" target="_blank"><i class="fa  fa-linkedin  fa-2x" style="color:#333;" title="LinkedIn"></i></a>
                        </li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="<?php echo site_url(); ?>" title="Inicio">Inicio</a>
                        </li>
                        <li><a href="<?php echo site_url(); ?>/blog/" title="Blog">Blog</a>
                        </li>
                        <li><a href="<?php echo site_url(); ?>/trabalhos/" title="Trabalhos">Trabalhos</a>
                        </li>
                        <li><a href="<?php echo site_url(); ?>/contato/">Entre em Contato</a>
                        </li>
                        <li>
                            <form class="buscar" action="<?php echo home_url(); ?>" method="get">
                                <input type="text" class="blue-text text-darken-2" name="s" placeholder="PESQUISAR..">
                            </form><!--Fecha Busca-->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>