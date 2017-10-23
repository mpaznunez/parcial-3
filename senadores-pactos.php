<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">

<?php
$csv = array_map('str_getcsv', file('data/eleccion_senadores.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>


<h3>Chile Vamos</h3>

      <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Partido</th>

          </tr>
        </thead>
        <tbody>



          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
          <tr>
            <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?>
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
            </td>
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

          </tr>
                <?php $vamos++;?>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

<br><hr><br>

<h3>La Fuerza de la mayoria</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>
                            </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $mayoria++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>

<h3>Frente Amplio</h3>

            <table class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Partido</th>

                </tr>
              </thead>
              <tbody>



                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                      <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                <tr>
                  <td>
                              <?php echo($csv[$a]["Candidato Nombre"])?>
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                  </td>
                          <td><?php echo($csv[$a]["Partido Politico"])?></td>

                </tr>
                      <?php $frente++;?>
                      <?php };?>
                <?php };?>
              </tbody>
            </table>

<br><hr><br>
<h3>Sumemos</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $sumemos++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>
<h3>Convergencia Democrática</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $convergencia++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>
<h3>Por Todo Chile</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $portodo++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>
<h3>Independientes</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $independiente++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>
<h3>Unión Patriótica</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>



                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php $union++;?>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>
<br><hr><br>
<h3>Coalición Regionalista Verde</h3>

            <table class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Partido</th>

                </tr>
              </thead>
              <tbody>



                <?php for($a = 0; $a < $total = count($csv); $a++){?>
                      <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                <tr>
                  <td>
                              <?php echo($csv[$a]["Candidato Nombre"])?>
                        <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                        <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                  </td>
                          <td><?php echo($csv[$a]["Partido Politico"])?></td>

                </tr>
                      <?php $verde++;?>
                      <?php };?>
                <?php };?>
              </tbody>
            </table>
<br><hr><br>




<div class="alert alert-danger">
<h4>Los candidatos de Chile Vamos son <?php print $vamos;?></h4>
<h4>Los candidatos de La fuerza de la Mayoría son <?php print $mayoria;?></h4>
<h4>Los candidatos del Frente Amplio son <?php print $frente;?></h4>
<h4>Los candidatos de Sumemos son <?php print $sumemos;?></h4>
<h4>Los candidatos del Convergencia Democrática son <?php print $convergencia;?></h4>
<h4>Los candidatos del Por todo Chile son <?php print $portodo;?></h4>
<h4>Los candidatos del Independiente son <?php print $independiente;?></h4>
<h4>Los candidatos de la Unión Patriótica son <?php print $union;?></h4>
<h4>Los candidatos del Coalición Regionalista Verde son <?php print $verde;?></h4>


</div>
</div>
</div>
<?php include('footer.php')?>
