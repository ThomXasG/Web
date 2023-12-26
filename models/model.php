<?php
    class EnlacesPaginas {
        public static function enlacesPaginasModel($enlacesModel) {
            if ($enlacesModel == "nosotros" || $enlacesModel == "login" || $enlacesModel == "contacto" || $enlacesModel == "servicios") {
                $module = "views/interfaces/".$enlacesModel.".php";
            } else {
                $module = "views/interfaces/inicio.php";
            }

            return $module;
        }

        public static function enlaceServiciosModel($enlacesModel) {
            if ($enlacesModel == "servicios") {
                $module = "views/interfaces/".$enlacesModel.".php";
            } else {
                $module = "views/interfaces/inicio.php";
            }

            return $module;
        }
    }