<?php
    class EnlacesPaginas {
        public static function enlacesPaginasModel($enlacesModel) {
            if ($enlacesModel == "nosotros" || $enlacesModel == "login" || $enlacesModel == "contacto" || $enlacesModel == "servicios" || $enlacesModel == "reporte") {
                $module = "views/interfaces/".$enlacesModel.".php";
            } else {
                $module = "views/interfaces/inicio.php";
            }

            return $module;
        }

        public static function enlaceReporteModel($enlacesModel) {
            if ($enlacesModel == "reporte") {
                $module = "./".$enlacesModel.".php";
            } else {
                $module = "views/interfaces/inicio.php";
            }

            return $module;
        }
    }