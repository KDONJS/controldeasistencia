<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>control</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="../public/coloradmin/css/vendor.min.css" rel="stylesheet" />
    <link href="../public/coloradmin/css/app.min.css" rel="stylesheet" />
    <link href="../public/coloradmin/css/ionicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../public/img/favicon.ico">

</head>

<body class='pace-top'>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app">

        <div class="login login-with-news-feed">

            <div class="news-feed">
                <div class="news-image" style="background-image: url(../public/coloradmin/img/login-bg-11.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>LOGIN</b> CONTROL</h4>
                    <p>
                        Bienvenido al sistema de control de asitencia
                    </p>
                </div>
            </div>


            <div class="login-container">

                <div class="login-header mb-30px">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <b>CONTROL</b> ASISTENCIA
                        </div>
                        <small>Sistena de control de asistencia</small>
                    </div>
                </div>


                <div class="login-content">
                    <form method="post" id="frmAcceso" class="fs-13px">
                        <div class="form-floating mb-15px">
                            <input type="text" class="form-control h-45px fs-13px" placeholder="Usuario" id="logina"
                                name="logina" />
                            <label for="emailAddress"
                                class="d-flex align-items-center fs-13px text-gray-600">Usuario</label>
                        </div>
                        <div class="form-floating mb-15px">
                            <input type="password" class="form-control h-45px fs-13px" placeholder="Password"
                            id="clavea" name="clavea" />
                            <label for="password"
                                class="d-flex align-items-center fs-13px text-gray-600">Password</label>
                        </div>
                        <div class="form-check mb-30px">
                            <input class="form-check-input" type="checkbox"/>
                            <label class="form-check-label" for="rememberMe">
                                Recordar
                            </label>
                        </div>
                        <div class="mb-15px">
                            <button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign me
                                in</button>
                        </div>
                        <hr class="bg-gray-600 opacity-2" />
                        <div class="text-gray-600 text-center text-gray-500-darker mb-0">
                            &copy; Administrador |KDON| derechos reservados
                        </div>
                    </form>
                </div>

            </div>

        </div>


        <script src="../public/coloradmin/js/vendor.min.js" type="16e6135bf1d2cfa79204ae9a-text/javascript"></script>
        <script src="../public/coloradmin/js/app.min.js" type="16e6135bf1d2cfa79204ae9a-text/javascript"></script>
        <script src="../public/coloradmin/js/apple.min.js" type="16e6135bf1d2cfa79204ae9a-text/javascript"></script>
        <script src="../public/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="scripts/login.js"></script>

        <script type="16e6135bf1d2cfa79204ae9a-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
        <script src="../public/coloradmin/js/rocket-loader.min.js" data-cf-settings="16e6135bf1d2cfa79204ae9a-|49"
            defer=""></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
            data-cf-beacon='{"rayId":"69a68bff2c46a376","version":"2021.9.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>
</body>

</html>