<?php
    define('TITULO_PAGINA','Tareas'); //para el titulo de la pagina
    define('SERVIDOR',"https://localhost/SUITS/loginPHPyMYSQL-2332022/");//definir el servidor que estas usando, podeis poner ip para que otro dispositivo conecte y de tu carpeta
    // define('SERVIDOR',"http://192.168.3.44/suit/loginPoo/");

    define('DEP_CSS',SERVIDOR."packages/css/");//son para dependencias css
    define('DEP_SCRIPT',SERVIDOR."packages/js/");//son para dependencias js
    define('DEP_FONTAWESOME',SERVIDOR."packages/fontawesome/");//dependencias fontawesome

    define('error',"view/error/error");

    define("direccion",array(
        'home'=>'view/inicio.php'
    ));


?>