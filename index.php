<?php 

//tutti gli orari sono moltiplicati per cento cosi da evitare l'uso di librerie o calcoli lunghi, l'esercizio è svolto in maniera puramente simbolica.
class Movie
{
    public $nome;
    public $voto = 0;
    private $orari_spettacoli_giornalieri;
    public $durata;
    public $apertura_sala;
    public $chiusura_sala;
    public function setorari(){
        $this->orari_spettacoli_giornalieri = strval($this->apertura_sala) ;
        $tempo = 0 + $this->apertura_sala ;
        while ($tempo < $this->chiusura_sala) { 
            $tempo = $tempo + $this->durata;
            $this->orari_spettacoli_giornalieri = strval($this->orari_spettacoli_giornalieri ) . ',' . strval($tempo);
        }
    }

}


$the_dog = new Movie();
$the_dog ->nome = 'the dog';
$the_dog ->voto = 5;
$the_dog ->durata = 1500;
$the_dog ->apertura_sala = 800;
$the_dog ->chiusura_sala = 2000;
$the_dog ->setorari();
var_dump($the_dog);

$nemo = new Movie();
$nemo ->nome = 'alla ricerca di nemo';
$nemo ->voto = 3;
$nemo ->durata = 1800;
$nemo ->apertura_sala = 1600;
$nemo ->chiusura_sala = 2000;
$nemo ->setorari();
var_dump($nemo);