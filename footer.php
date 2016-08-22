    <footer class="grey darken-2">
        <div class="container">
            <div class="row get-in-touch">
                <div class="col l12 s12">
                    <h5 class="white-text">ENTRE EM CONTATO</h5>
                    <p class="grey-text text-lighten-4">
                        Fique a vontade para entrar em contato comigo por qualquer rede social abaixo, ficarei feliz em te adicionar e responder alguma dúvida que você possa ter.
                    </p>
                    <div class="follow_us">
                        <a href="http://www.twitter.com/siqueiradg/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.facebook.com/siqueiradg/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/dougsiq/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://plus.google.com/u/0/+DouglasOdimar/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="http://github.com/siqueiradg" target="_blank"><i class="fa fa-github"></i></a>
						<a href="<?php echo site_url(); ?>/contato/" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div class="container">
                <p id="creditos">© 2016, Todos os direitos reservados | Desenvolvido com <a href="https://br.wordpress.org" title="Wordpress">Wordpress</a></p>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".button-collapse").sideNav({
                menuWidth: 240, // Default is 240
                edge: 'left', // Choose the horizontal origin
                closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
            });
        });
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/materialize.min.js"></script>
</body>

</html>