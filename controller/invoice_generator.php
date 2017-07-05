<?php

$orderid = $_GET['orderid'];

$sql = "SELECT * FROM `orders` WHERE order_id='$orderid'";

$stmt = $pdo->query($sql);
$order_details = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();


$table = json_decode($json = $order_details['szczegoly_zamowienia'], true);


ob_start();
require __DIR__ . '/pdf_friendly_invoice.html.php';
ob_end_clean();

ob_start();
require __DIR__ . '/pdf_friendly_invoice.html.php';

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
