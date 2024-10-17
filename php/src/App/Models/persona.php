<?php
class Persona{

    const LIMIT_EDAT = 66;
    private string $nom;
    private string $cognoms;
    private int $edat;

    public function __construct($nom, $cognoms){
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edat = 25;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setCognoms(string $cognoms){
        $this->cognoms = $cognoms;
    }

    public function getCognoms(){
        return $this->cognoms;
    }

    public function setEdat(int $edat){
        $this->edat = $edat;
    }

    public function getEdat(){
        return $this->edat;
    }

    public function getNomComplet(){
        return "Nom complet: " . $this->nom . " " . $this->cognoms;
    }

    public function estaJubilat(){
        return $this->edat > self::LIMIT_EDAT;
    }

}
