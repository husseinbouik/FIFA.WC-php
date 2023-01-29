<?php
$teams =["MARRUECOS", "CROACIA", "BELGICA", "CANADA"];
$class = array();
foreach ($teams as $team) {
  $class[$team] = array( "PTS." => 0,"PAR." => 0,"GAN." => 0,"EMP." => 0,"PER." => 0,"G.F." => 0,"G.C." => 0, "+/-" => 0);
}
$scores = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($_POST as $key => $value) {
    $scores[$key] = $value;
  }
  for ($i = 0; $i < 12; $i += 2) {
    if ( array_values($scores)[$i] > array_values($scores)[$i + 1]) {
      similar_text("$teams[0]", array_keys($scores)[$i], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i], $be);
      similar_text("$teams[3]", array_keys($scores)[$i], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo){
        $class["$teams[0]"]['PTS.'] += 3;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['GAN.'] += 1;
        $class["$teams[0]"]['EMP.'] += 0;
        $class["$teams[0]"]['PER.'] += 0;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PTS.'] += 3;
        $class["$teams[1]"]['PAR.'] += 1;
        $class["$teams[1]"]['GAN.'] += 1;
        $class["$teams[1]"]['EMP.'] += 0;
        $class["$teams[1]"]['PER.'] += 0;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PTS.'] += 3;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['GAN.'] += 1;
        $class["$teams[2]"]['EMP.'] += 0;
        $class["$teams[2]"]['PER.'] += 0;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PTS.'] += 3;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['GAN.'] += 1;
        $class["$teams[3]"]['EMP.'] += 0;
        $class["$teams[3]"]['PER.'] += 0;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
      similar_text("$teams[0]", array_keys($scores)[$i + 1], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i + 1], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i + 1], $be);
      similar_text("$teams[3]", array_keys($scores)[$i + 1], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo) {
        $class["$teams[0]"]['PER.'] += 1;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PER.'] += 1;
        $class["$teams[1]"]['PAR.'] += 1;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PER.'] += 1;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PER.'] += 1;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
    } elseif (array_values($scores)[$i] < array_values($scores)[$i + 1]) {
      similar_text("$teams[0]", array_keys($scores)[$i + 1], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i + 1], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i + 1], $be);
      similar_text("$teams[3]", array_keys($scores)[$i + 1], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo) {
        $class["$teams[0]"]['PTS.'] += 3;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['GAN.'] += 1;
        $class["$teams[0]"]['EMP.'] += 0;
        $class["$teams[0]"]['PER.'] += 0;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PTS.'] += 3;
        $class["$teams[1]"]['PAR.'] += 1;
        $class["$teams[1]"]['GAN.'] += 1;
        $class["$teams[1]"]['EMP.'] += 0;
        $class["$teams[1]"]['PER.'] += 0;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PTS.'] += 3;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['GAN.'] += 1;
        $class["$teams[2]"]['EMP.'] += 0;
        $class["$teams[2]"]['PER.'] += 0;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PTS.'] += 3;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['GAN.'] += 1;
        $class["$teams[3]"]['EMP.'] += 0;
        $class["$teams[3]"]['PER.'] += 0;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
      similar_text("$teams[0]", array_keys($scores)[$i], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i], $be);
      similar_text("$teams[3]", array_keys($scores)[$i], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo) {
        $class["$teams[0]"]['PER.'] += 1;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PER.'] += 1;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PER.'] += 1;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PER.'] += 1;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
    } elseif (array_values($scores)[$i] == array_values($scores)[$i + 1]) {
      similar_text("$teams[0]", array_keys($scores)[$i], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i], $be);
      similar_text("$teams[3]", array_keys($scores)[$i], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo) {
        $class["$teams[0]"]['PTS.'] += 1;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['GAN.'] += 0;
        $class["$teams[0]"]['EMP.'] += 1;
        $class["$teams[0]"]['PER.'] += 0;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PTS.'] += 1;
        $class["$teams[1]"]['PAR.'] += 1;
        $class["$teams[1]"]['GAN.'] += 0;
        $class["$teams[1]"]['EMP.'] += 1;
        $class["$teams[1]"]['PER.'] += 0;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PTS.'] += 1;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['GAN.'] += 0;
        $class["$teams[2]"]['EMP.'] += 1;
        $class["$teams[2]"]['PER.'] += 0;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PTS.'] += 1;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['GAN.'] += 0;
        $class["$teams[3]"]['EMP.'] += 1;
        $class["$teams[3]"]['PER.'] += 0;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
      similar_text("$teams[0]", array_keys($scores)[$i + 1], $mo);
      similar_text("$teams[1]", array_keys($scores)[$i + 1], $cr);
      similar_text("$teams[2]", array_keys($scores)[$i + 1], $be);
      similar_text("$teams[3]", array_keys($scores)[$i + 1], $ca);
      $largest = $mo;
      $largest = max($mo, $cr, $be, $ca);
      if ($largest == $mo) {
        $class["$teams[0]"]['PTS.'] += 1;
        $class["$teams[0]"]['PAR.'] += 1;
        $class["$teams[0]"]['GAN.'] += 0;
        $class["$teams[0]"]['EMP.'] += 1;
        $class["$teams[0]"]['PER.'] += 0;
        $class["$teams[0]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[0]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[0]"]['+/-'] = $class["$teams[0]"]['G.F.'] - $class["$teams[0]"]['G.C.'];;
      } elseif ($largest == $cr) {
        $class["$teams[1]"]['PTS.'] += 1;
        $class["$teams[1]"]['PAR.'] += 1;
        $class["$teams[1]"]['GAN.'] += 0;
        $class["$teams[1]"]['EMP.'] += 1;
        $class["$teams[1]"]['PER.'] += 0;
        $class["$teams[1]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[1]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[1]"]['+/-'] = $class["$teams[1]"]['G.F.'] - $class["$teams[1]"]['G.C.'];
      } elseif ($largest == $be) {
        $class["$teams[2]"]['PTS.'] += 1;
        $class["$teams[2]"]['PAR.'] += 1;
        $class["$teams[2]"]['GAN.'] += 0;
        $class["$teams[2]"]['EMP.'] += 1;
        $class["$teams[2]"]['PER.'] += 0;
        $class["$teams[2]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[2]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[2]"]['+/-'] = $class["$teams[2]"]['G.F.'] - $class["$teams[2]"]['G.C.'];
      } elseif ($largest == $ca) {
        $class["$teams[3]"]['PTS.'] += 1;
        $class["$teams[3]"]['PAR.'] += 1;
        $class["$teams[3]"]['GAN.'] += 0;
        $class["$teams[3]"]['EMP.'] += 1;
        $class["$teams[3]"]['PER.'] += 0;
        $class["$teams[3]"]['G.F.'] += (int) array_values($scores)[$i + 1];
        $class["$teams[3]"]['G.C.'] += (int) array_values($scores)[$i];
        $class["$teams[3]"]['+/-'] = $class["$teams[3]"]['G.F.'] - $class["$teams[3]"]['G.C.'];
      }
    }
  }
  for ($i = 0; $i < 3; $i++) {
    uasort($class, function ($a, $b) {
      if ($a['PTS.'] == $b['PTS.']) {
        if ($a['+/-'] == $b['+/-']) {
          return $b['G.F.'] - $a['G.F.'];
        }
        return $b['+/-'] - $a['+/-'];
      }
      return $b['PTS.'] - $a['PTS.'];
    });
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="style" src="/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <form method="post" action="">
    <table class="table  table-bordered table-dark table-striped text-center ">
      <thead>
        <tr>
          <th scope="col">23 NOV 11:00H</th>
          <th scope="col">FINALIZADO</th>
          <th scope="col">PARTIDO 9</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MARRUECOS</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="MARRUECOS1">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="CROACIA1">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
        </tr>
        <tr>
          <td>23 NOV 20:00H</th>
          <td>FINALIZADO</th>
          <td>PARTIDO 12</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGICA</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="BELGICA1">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="CANADA1">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
        </tr>
        <tr>
          <td>27 NOV 14:00H</th>
          <td>FINALIZADO</th>
          <td>PARTIDO 26</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGICA</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="BELGICA2">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="MARRUECOS2">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MARRUECOS</td>
        </tr>
        <tr>
          <td>27 NOV 17:00H</th>
          <td>FINALIZADO</th>
          <td>PARTIDO 27</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="CROACIA2">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="CANADA2">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
        </tr>
        <tr>
          <td>01 Dec 1:00H</th>
          <td>FINALIZADO</th>
          <td>PARTIDO 41</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="CROACIA3">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="BELGICA3">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/578-removebg-preview.png" alt="">BELGICA</td>
        </tr>
        <tr>
          <td>01 Dec 16:00H</th>
          <td>FINALIZADO</th>
          <td>PARTIDO 42</th>
        </tr>
        <tr>
          <td><img class=" img-responsive" src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
          <td class="w-25">
            <div class="input-group  w-25  align-middle">
              <input type="number" class="form-control" name="CANADA3">
              <span class="input-group-text">:</span>
              <input type="number" class="form-control" name="MARRUECOS3">
            </div>
          </td>
          <td><img class=" img-responsive" src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MARRUECOS</td>
        </tr>
      </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
  </form>
  <table class="table  table-striped table-hover  table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Selection</th>
        <th scope="col">PTS.</th>
        <th scope="col">PAR</th>
        <th scope="col">GAN.</th>
        <th scope="col">EMP</th>
        <th scope="col">PER</th>
        <th scope="col">G.F.</th>
        <th scope="col">G.C</th>
        <th scope="col">+/-</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $countries = array(
        "$teams[0]" => 'img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png',
        "$teams[1]" => 'img/téléchargement-removebg-preview (3).png',
        "$teams[2]" => 'img/578-removebg-preview.png',
        "$teams[3]" => 'img/téléchargement-removebg-preview (4).png'
      );
      $i = 1;
      foreach ($class as $key => $value) {
        echo "<tr><th scope='row'>$i.</th>";
        echo "<td><img class='img-responsive' src='{$countries[$key]}' alt=''>$key</td>";
        foreach ($value as $cell) {
          echo "<td>$cell</td>";
        }
        echo "</tr>";
        $i++;
      }
      echo '</tbody></table>';
      ?>
</body>
</html>