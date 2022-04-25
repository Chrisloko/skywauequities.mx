<!DOCTYPE html>
<html lang="es-mx" class="no-js no-svg">
<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="keywords" content="<?php echo $key; ?>">
    <title><?php echo $title; ?></title>
    <link rel="canonical" href="<?php echo $canonical; ?>"/>
    <meta name="robots" content="index, follow"/>
    <link rel="shortcut icon" href="/img/favicon.jpg">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    


</head>
<body class="">

<div id="site-wrap" class="site">
    <div id="header-wrap" style="width: 100%; z-index: 2" class="fixed-top">
        <header id="header">
            <div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					  <a class="navbar-brand" href="index.php">
					  	<div id="logo" class="logo-top-white"></div>
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						  <!-- <li class="nav-item <?php if ($page == "home") echo 'active'; ?>">
							<a class="nav-link" href="#header-image">¿Quiénes Somos?<span class="sr-only">(current)</span></a>
						  </li> -->
						  
						  <li class="nav-item dropdown <?php if ($page == "soluciones") echo 'active'; ?>">
							<a class="nav-link" href="/quienes-somos.php" style="display: inline-block">
								¿Quiénes Somos?
							</a>
							<a class="nav-link dropdown-toggle" href="index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="/track-record.php" class="dropdown-item">Track Record</a>
                                    <a href="/quienes-somos.php#desa-estra" class="dropdown-item">Desarrolladores Estrategicos</a>
                                    <a href="/metricas-financieras.php" class="dropdown-item">Metricas Financieras</a>   
							</div>
						  </li>
						  <!-- <li class="nav-item dropdown">
							<a class="nav-link" href="gestion-del-capital-humano" style="display: inline-block">Nosotros</a>
							<a class="nav-link dropdown-toggle" href="index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block">
							
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							   		<a href="" class="dropdown-item">Cómo lo hacemos</a>
                                    
							</div>
						  </li> -->
						  <li class="nav-item">
						  	<a class="nav-link" href="/gobierno-corporativo.php">Gobierno Corporativo</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="index.php#distribucion">Nuestra Presencia</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="index.php#proyectos">Proyectos  </a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="index.php#contacto">Contacto </a>
						  </li>
						</ul>
					  </div>
					</nav>

            </div>
            <!-- #header-inner -->
        </header>
   
    </div>
</div>
     
