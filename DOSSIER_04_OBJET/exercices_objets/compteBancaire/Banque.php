<?php

require 'Compte.php';

class Banque
{

    /**
     * Nom de la banque
     *
     * @var string
     */
    private string $nom;

    /**
     * Ville de la banque
     *
     * @var string
     */
    private string $ville;

    /**
     * Un compte de la banque
     *
     * @var integer $nbComptes
     */
    private int $nbComptes;

    /**
     * L'ensemble des comptes de la banque
     *
     * @var array
     */
    public array $mesComptes;

    /**
     * Constructeur
     *
     * @param string $nom       Nom de la banque
     * @param string $ville     Ville de la banque
     */
    public function __construct(string $nom, string $ville)
    {
        $this->setNom($nom);
        $this->setVille($ville);
    }

    /**
     * Retourne le nom de la banque
     *
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Permet la modification du nom de la banque
     *
     * @param string $nom
     * @return void
     */
    private function setNom(string $nom) : void
    {
        $this->nom = $nom;
    }

    /**
     * Retourne la ville de la banque
     *
     * @return string
     */
    public function getVille() :string
    {
        return $this->ville;
    }

    /**
     * Permet la modification de la ville de la banque
     *
     * @param string $ville
     * @return void
     */
    private function setVille(string $ville) : void
    {
        $this->ville = $ville;
    }

    /**
     * Permet la création du premier compte bancaire
     *
     * @param Compte $compte    Premier compte à créer
     * @return void
     */
    public function premierCompte(Compte $compte) :void
    {
        $this->mesComptes[] = $compte;
    }

    /**
     * Permet l'ajout d'un compte bancaire
     *
     * @param Compte $compte    Compte à ajouter
     * @return void
     */
    public function ajouterCompte(Compte $compte) : void
    {
        array_push($this->mesComptes, $compte);
    }



    //***********************************************************************************************************
    public function compteSup() : void
    {
        //echo(array_search(max($this->mesComptes->solde, $this->mesComptes),$this->mesComptes));
        //var_dump((array_search(max($this->mesComptes->compte->solde, $this),$this->mesComptes)));

        /* $valeurMax = 0;
        $nbComptes = count($this->mesComptes);
        for ($i = 0; $i < $nbComptes; $i++)
        {
            for($j = $i; $j < $nbComptes; $j++)
            {
                $condition = (($this->mesCompte[$j]->solde) > ($this->mesCompte[$i]->solde));
                if ($condition)
                {
                    $valeurMax = ($this->mesComptes[$j]->numero);
                }
                //echo($this->mesComptes[$i]);
            }
        }*/
        var_dump ($this->mesComptes->solde);
    }

// *******************************************************************************************************************

public function rendCompte() : string
{
    $nb = readline('Veuillez saisir le numero de compte à afficher : ');

    // file_exists(string $filename): bool
    // property_exists(object|string $object_or_class, string $property): bool

    $condition = property_exists($this->mesComptes[$nb],"numero");
    if (!$condition)
    {
        $result = "null";
        return $result;
    }
    else 
    {
        $result = ($this->mesComptes[$nb]);
        return $result;
    }
}



// *******************************************************************************************************************

    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        $resultMesComptes = '';
        $nbComptes = count($this->mesComptes);

        $resultBanque = PHP_EOL . 'La banque ' . $this->nom . ' se situe dans la ville de ' . $this->ville
         . ' et possède ' . $nbComptes . ' comptes : ' . PHP_EOL;

        for($i = 0; $i < $nbComptes; $i++)
        {
            $resultMesComptes .= $this->mesComptes[$i]->__toString() . PHP_EOL;
        }

        return $resultBanque . PHP_EOL .$resultMesComptes;
    }
}
