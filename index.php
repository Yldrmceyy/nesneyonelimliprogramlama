<?php

class Sekil {
  public $alan;
  public $cevre;

  public function alanHesapla() {
      return $this->alan;
  }

  public function cevreHesapla() {
      return $this->cevre;
  }
}

class Dikdortgen extends Sekil {
  public $genislik;
  public $yukseklik;

  public function __construct($genislik, $yukseklik) {
      $this->genislik = $genislik;
      $this->yukseklik = $yukseklik;
      $this->alan = $genislik * $yukseklik;
      $this->cevre = 2 * ($genislik + $yukseklik);
  }
}

class Ucgen extends Sekil {
  public $taban;
  public $yukseklik;

  public function __construct($taban, $yukseklik) {
      $this->taban = $taban;
      $this->yukseklik = $yukseklik;
      $this->alan = 0.5 * $taban * $yukseklik;
      $this->cevre = $taban + 2 * sqrt(pow($taban/2, 2) + pow($yukseklik, 2));
  }
}

class Kare extends Sekil {
  public $kenar;

  public function __construct($kenar) {
      $this->kenar = $kenar;
      $this->alan = pow($kenar, 2);
      $this->cevre = 4 * $kenar;
  }
}

$dikdortgen = new Dikdortgen(8, 10);
echo "Dikdörtgenin Alanı: " . $dikdortgen->alanHesapla() . "<br>";
echo "Dikdörtgenin Çevresi: " . $dikdortgen->cevreHesapla() . "<br>";

$ucgen = new Ucgen(3, 10);
echo "Üçgenin Alanı: " . $ucgen->alanHesapla() . "<br>";
echo "Üçgenin Çevresi: " . $ucgen->cevreHesapla() . "<br>";

$kare = new Kare(7);
echo "Karenin Alanı: " . $kare->alanHesapla() . "<br>";
echo "Karenin Çevresi: " . $kare->cevreHesapla() . "<br>";


?>
