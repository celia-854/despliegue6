<?php
class BD {
    
    private static $instancia = NULL;

    public static function crearInstancia() {
        if (!isset(self::$instancia)) {
            $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            self::$instancia = new PDO("mysql:host=localhost;dbname=gestion_profesores", "root", "", $opciones);
            self::$instancia->exec("SET CHARACTER SET utf8");
        }
        return self::$instancia;
    }
}
?>

