<?php

ob_start();
require __DIR__ . '/../templates/order_details.html.php';

 $data = ob_get_clean();



// reference the Dompdf namespace

use Dompdf\Dompdf;

// instantiate and use the dompdf class

$dompdf = new Dompdf();

$dompdf->loadHtml($data);

// Render the HTML as PDF

$dompdf->render();

// Output the generated PDF to Browser

$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

