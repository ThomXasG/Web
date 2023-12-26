<?php
    class MvcController {
        // Llamar a la plantilla
        public function plantilla() {
            include "views/template.php";
        }

        // Interacción del usuario
        public function enlacesPaginasController() {
            if (isset($_GET["action"])) {
                $enlacesController = $_GET["action"];
            } else {
                $enlacesController = "inicio";
            }

            $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

            include $respuesta;
        }

        public function enlaceServiciosController() {
            if (isset($_GET["action"])) {
                $enlacesController = $_GET["action"];
            } else {
                $enlacesController = "servicios";
            }

            $respuesta = EnlacesPaginas::enlaceServiciosModel($enlacesController);

            include $respuesta;
        }
    }