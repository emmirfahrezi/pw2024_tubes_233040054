<?php


require_once __DIR__ . '/vendor/autoload.php';

include '../function/functions.php';
$motor = query("SELECT * FROM motor");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor Monav Classic</title>
</head>
<body>
    <h1>Daftar Motor Monav Classic</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Model</th>
            <th>Merek</th>
            <th>Harga</th>
            <th>Foto</th>
        </tr>';
$no = 1;
foreach ($motor as $m) {
    $html .= '<tr>
                <td>' . $no++ . '</td>
                <td>' . $m['model'] . '</td>
                <td>' . $m['merek'] . '</td>
                <td>' . number_format($m['harga'], 0, ',', '.') . '</td>
                <td><img src="galery/' . $m['foto'] . '" width="50"></td>
            </tr>';
}
$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
