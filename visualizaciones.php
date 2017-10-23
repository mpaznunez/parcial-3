<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_presidencial.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<?php $mujeres = 0; $hombres = 0;?>

<h3>Relación de genero entre candidatos</h3>

<svg width="1000" height="333.3333333333333" xmlns="http://www.w3.org/2000/svg"><g transform="translate(166.66666666666666,166.66666666666666)"><g class="arc"><path d="M-79.32296357925802,129.26966089064163A151.66666666666666,151.66666666666666 0 0,1 -2.786071468060228e-14,-151.66666666666666L0,0Z" style="fill: rgb(191, 105, 105);"></path></g><g class="arc"><path d="M9.286904893534095e-15,-151.66666666666666A151.66666666666666,151.66666666666666 0 1,1 -79.32296357925802,129.26966089064163L0,0Z" style="fill: rgb(105, 191, 191);"></path></g><text y="161.66666666666666" style="text-anchor: middle; font-size: 11px; font-family: Arial, Helvetica;">Diputados</text></g><g transform="translate(500,166.66666666666666)"><g class="arc"><path d="M-141.50682270805711,1.7329587748693413e-14A141.50682270805711,141.50682270805711 0 0,1 -2.599438162304012e-14,-141.50682270805711L0,0Z" style="fill: rgb(191, 105, 105);"></path></g><g class="arc"><path d="M8.664793874346707e-15,-141.50682270805711A141.50682270805711,141.50682270805711 0 1,1 -141.50682270805711,1.7329587748693413e-14L0,0Z" style="fill: rgb(105, 191, 191);"></path></g><text y="151.50682270805711" style="text-anchor: middle; font-size: 11px; font-family: Arial, Helvetica;">Presidentes</text></g><g transform="translate(833.3333333333333,166.66666666666666)"><g class="arc"><path d="M-66.31714468944712,104.26156643676366A123.56552073943908,123.56552073943908 0 0,1 -2.2698617918779493e-14,-123.56552073943908L0,0Z" style="fill: rgb(191, 105, 105);"></path></g><g class="arc"><path d="M7.566205972926498e-15,-123.56552073943908A123.56552073943908,123.56552073943908 0 1,1 -66.31714468944712,104.26156643676366L0,0Z" style="fill: rgb(105, 191, 191);"></path></g><text y="133.56552073943908" style="text-anchor: middle; font-size: 11px; font-family: Arial, Helvetica;">Senadores</text></g></svg>

</div>
</div>
</div>
<?php include('footer.php')?>
