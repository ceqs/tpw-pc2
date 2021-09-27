<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"></head>
<body>
	<header class="main-header">
		<div class="main-header-logo">
            <img class="logo" src="imagenes/Logo.png" width="80px">
        </div>
        <div class="main-header-menu">
            <nav>
                <ul>
                    <li><a href="paginas/ejemplos.php">Ejemplos de notas</a></li>
                    <li><a href="paginas/tutorial.php">Tutorial</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-header-space">&nbsp;</div>
        <div class="main-header-buttons">
            <button class="" type="button" onclick="window.location.href='paginas/notas/notas.php'">
                <span class="">
                    <span class="" style="-webkit-line-clamp:2;-webkit-box-orient:vertical;max-height:calc(2 * 1.6em)">Ingresar</span>
                </span>
            </button>
            <button class="" type="button">
                <span class="">
                    <span class="" style="-webkit-line-clamp:2;-webkit-box-orient:vertical;max-height:calc(2 * 1.6em)">Regístrese</span>
                </span>
            </button>
        </div>
	</header>

    <section class="cabecera">
        <div class="cabecera-contenido">
			<div class="slogan"><h1>Los apuntes de la universidad siempre contigo</h1></div>
		</div>
    </section>
	
	<section class="nosotros centrado">
		<h2>Conoce UTP Notas</h2>

		<div class="nosotros-contenido">
			<div class="bloque">
				<img src="imagenes/Precio.png" width="20%">
				<h3>No pierdas tus notas</h3>
				<p>Lorem ipsum dolor sit amet, aliqua. Excepteur sint occaecat tu tu tu
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="bloque">
				<img src="imagenes/Calidad.png" width="20%">
				<h3>Fácil de usar</h3>
				<p>Lorem ipsum dolor sit amet, aliqua. Excepteur sint occaecat tu tu tu
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="bloque">
				<img src="imagenes/Garantia.png" width="20%">
				<h3>Usalo desde tu móvil</h3>
				<p>Lorem ipsum dolor sit amet, aliqua. Excepteur sint occaecat tu tu tu
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>	
	</section>

    <footer class="site-footer has-top-divider">
        <div class="container">
            <div class="site-footer-inner">
                <div class="brand footer-brand">
                    <a href="#">
                        <img class="asset-light" src="dist/images/logo-light.svg" alt="Logo">
                        <img class="asset-dark" src="dist/images/logo-dark.svg" alt="Logo">
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">FAQ's</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>
                <ul class="footer-social-links list-reset">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Google</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="footer-copyright">&copy; 2021 UTP Notas, todos los derechos reservados.</div>
            </div>
        </div>
    </footer>

</body>
</html>