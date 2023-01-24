<?php 
$scores = array();
$class = [
  'MARRUECOS'=> ['PTS.'  => '','PAR.'  => '','GAN.'  => '','EMP.'  => '','PER.'  => '','G.F.'  => '','G.C'  => '','+/-'  => ''],
  'CROACIA'=> ['PTS.'  => '','PAR.'  => '','GAN.'  => '','EMP.'  => '','PER.'  => '','G.F.'  => '','G.C'  => '','+/-'  => ''],
  'BELGICA'=> ['PTS.'  => '','PAR.'  => '','GAN.'  => '','EMP.'  => '','PER.'  => '','G.F.'  => '','G.C'  => '','+/-'  => ''],
  'CANADA'=> ['PTS.'  => '','PAR.'  => '','GAN.'  => '','EMP.'  => '','PER.'  => '','G.F.'  => '','G.C'  => '','+/-'  => '']
];
print_r($class);
// similar_text() function to find the similarity between two words "cat" and "bat"
// similar_text("cat", "bat", $percent);
// echo "Similarity: $percent%";
// similar_text(string $first, string $second, float &$percent);



if($_SERVER['REQUEST_METHOD'] === 'POST'){
  foreach ($_POST as $key => $value){
      $scores[$key] = $value;
      // echo'the keys is ' .$key.'and the value is '.$value; 
      // echo'key ='.$key.'value='.$value;
  }
  print_r($scores);
}
for ($i=0; $i < 12 ; $i++) { 
  # code...
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
    <!-- <script href="/node_modules/bootstrap/dist/js/bootstrap.js" defer ></script> -->
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
                <td><img class=" img-responsive"  src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="">MARRUECOS</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="MO1" >
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="CR1">
                  </div></td>
                <td><img class=" img-responsive"  src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
              </tr>
              <tr>
                <td>23 NOV 20:00H</th>
                <td>FINALIZADO</th>
                <td>PARTIDO 12</th>
              </tr>
              <tr>
                <td><img class=" img-responsive"  src="img/578-removebg-preview.png" alt="" >BELGICA</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="BEL1">
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="CA1">
                  </div></td>
                <td><img class=" img-responsive"  src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
              </tr>
              <tr>
                <td>27 NOV 14:00H</th>
                <td>FINALIZADO</th>
                <td>PARTIDO 26</th>
              </tr>
              <tr>
                <td><img class=" img-responsive"  src="img/578-removebg-preview.png" alt="" >BELGICA</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="BEL2" >
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="MO2">
                  </div></td>
                  <td><img class=" img-responsive"  src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="" >MARRUECOS</td>
              </tr>
              <tr>
                <td>27 NOV 17:00H</th>
                <td>FINALIZADO</th>
                <td>PARTIDO 27</th>
              </tr>
              <tr>
                <td><img class=" img-responsive"  src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="CR2">
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="CA2">
                  </div></td>
                  <td><img class=" img-responsive"  src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
              </tr>
              <tr>
                <td>01 Dec 1:00H</th>
                <td>FINALIZADO</th>
                <td>PARTIDO 41</th>
              </tr>
              <tr>
                <td><img class=" img-responsive"  src="img/téléchargement-removebg-preview (3).png" alt="">CROACIA</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="CR3">
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="BEL3">
                  </div></td>
                  <td><img class=" img-responsive"  src="img/578-removebg-preview.png" alt="" >BELGICA</td>
              </tr>
              <tr>
                <td>01 Dec 16:00H</th>
                <td>FINALIZADO</th>
                <td>PARTIDO 42</th>
              </tr>
              <tr>
                <td><img class=" img-responsive"   src="img/téléchargement-removebg-preview (4).png" alt="">CANADA</td>
                <td class="w-25"><div class="input-group  w-25  align-middle" >
                    <input type="number" class="form-control"  name="CA3">
                    <span class="input-group-text">:</span>
                    <input type="number" class="form-control"  name="MO3">
                  </div></td>
                  <td><img class=" img-responsive"  src="img/png-clipart-flag-of-morocco-moroccan-cuisine-logo-others-miscellaneous-flag-removebg-preview.png" alt="" >MARRUECOS</td>
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
        <tr>
          <th scope="row">1.</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">2.</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">3.</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">4.</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
</body>
</html>