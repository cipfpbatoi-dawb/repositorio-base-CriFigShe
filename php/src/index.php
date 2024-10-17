<?php
require $_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new DOMPDF();

$html = "<html><body>Hola esto es una prueba</body></html>";
$dompdf->loadHtml($html);
$dompdf->setPaper("A4","portrait"); // o 'landscape'
$dompdf->render();

$dompdf->stream("document.pdf", array("Attachment" => false));

use CFV\Models\Cotxe;
use CFV\Models\Motocicleta;
use CFV\Models\Vehicle;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

function mostrarDetallsVehicle(Vehicle $vehicle)
{
    echo $vehicle->mostrarDetalls() . "\n";
}

$moto = new Motocicleta(400);
$cotxe = new Cotxe("Audi", "A5");

mostrarDetallsVehicle($moto);
mostrarDetallsVehicle($cotxe);

$log = new Logger("MiLogger");
$log->pushHandler(
    new RotatingFileHandler(
        $_SERVER["DOCUMENT_ROOT"] . '/../log/milog.log',
        0,
        Logger::DEBUG
    )
);

$log->debug("Esto es un mensaje de DEBUG");
$log->info("Esto es un mensaje de INFO");
$log->warning("Esto es un mensaje de WARNING");
$log->error("Esto es un mensaje de ERROR");
$log->critical("Esto es un mensaje de CRITICAL");
$log->alert("Esto es un mensaje de ALERT");

