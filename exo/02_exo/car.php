<?php
class Voiture {
  private $plate = 'BE54512156';
  private $circulationDate = 1996;
  private $model = 'Utilitaire';
  private $km = 75000;
  private $brand = 'Audi';
  private $color = 'red';
  private $weight = 4;

  function checkBrand($brand) {
    if ($brand == 'Audi') {
      echo 'Reserved<br>';
    } else {
      echo 'Free<br>';
    }
  }

  function getBrand() {
    return $this->brand.'<br>';
  }

  function checkWeight() {
    if ($this->weight > 3.5) {
      echo 'Véhicule Utilitaire<br>';
    } else {
      echo 'Véhicule Commercial<br>';
    }
  }

  function checkPlate() {
    if (substr($this->plate, 0, 2) == "BE") {
      echo 'La voiture est Belge<br>';
    } elseif (substr($this->plate, 0, 2) == "FR") {
      echo 'La voiture est Française<br>';
    } elseif (substr($this->plate, 0, 2) == "DE") {
      echo 'La voiture est Allemande<br>';
    } else {
      echo 'UNKNOWN<br>';
    }
  }

  function checkKm() {
    if ($this->km > 200000) {
      echo 'Usage : high<br>';
    } elseif ($this->km > 100000) {
      echo 'Usage : middle<br>';
    } else {
      echo 'Usage : low<br>';
    }
  }

  function checkYear() {
    $year = date('Y');
    return 'La voiture a '.($year - ($this->circulationDate)).' an(s)<br>';
  }
  function getKm() {
    return $this->km;
  }

  function setKm($km) {
    $this->km = $km;
  }

  function ride() {
    $this->setKm($this->km + 100000);
    // return $km = $this->km + 100000;
  }


  function display() {
    echo '<table border="1">';
    echo '<tr>
          <th>Car</th>
          <th>Brand</th>
          <th>Model</th>
          <th>Year of release</th>
          <th>Weight</th>
          <th>Color</th>
          </tr>';
    echo '<tr>
          <td><img src="https://i2.cdscdn.com/pdt2/5/8/9/1/700x700/bbu4893993210589/rw/modele-reduit-audi-a1.jpg" alt="" /></td>
          <td>'.$this->brand.'</td>
          <td>'.$this->model.'</td>
          <td>'.$this->circulationDate.'</td>
          <td>'.$this->weight.'</td>
          <td>'.$this->color.'</td>
          </tr>';
    echo '</table>';
  }
}
 ?>
