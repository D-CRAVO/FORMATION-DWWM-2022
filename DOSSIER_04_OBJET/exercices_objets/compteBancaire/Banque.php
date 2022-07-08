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
        $this->setNomBanque($nom);
        $this->setVilleBanque($ville);
        $this->mesComptes = [];
    }

    /**
     * Retourne le nom de la banque
     *
     * @return string
     */
    public function getNomBanque() : string
    {
        return $this->nom;
    }

    /**
     * Permet la modification du nom de la banque
     *
     * @param string $nom
     * @return void
     */
    private function setNomBanque(string $nom) : void
    {
        $this->nom = $nom;
    }

    /**
     * Retourne la ville de la banque
     *
     * @return string
     */
    public function getVilleBanque() :string
    {
        return $this->ville;
    }

    /**
     * Permet la modification de la ville de la banque
     *
     * @param string $ville
     * @return void
     */
    private function setVilleBanque(string $ville) : void
    {
        $this->ville = $ville;
    }

    /**
     * Permet la création du premier compte bancaire
     *
     * @param Compte $compte    //Premier compte à créer
     * @return void
     */
    /* public function premierCompte(Compte $compte) :void
    {
        $this->mesComptes[0] = $compte;
    } */

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

    // *******************************************************************************************************************


    //***********************************************************************************************************
    public function compteSup() : Compte
    {
        //echo(array_search(max($this->mesComptes->solde, $this->mesComptes),$this->mesComptes));
        //var_dump(array_search(max($this->solde, $this),$this->mesComptes));
        //var_dump(max($this->solde), $this->mesComptes);

        $compteMax = $this->mesComptes[0];

        foreach($this->mesComptes as $unCompte) {
            if($unCompte->getSolde() > $compteMax->getSolde()) 
            {
                $compteMax = $unCompte;
            }
        }

        /*$count = count($this->mesComptes);

        for($i = 0; $i < $count; $i++) {
            if($this->mesComptes[$i]->getSolde() > $compteMax->getSolde()) {
                $compteMax = $unCompte;
            }
        }*/

        return $compteMax;
    }

    // *******************************************************************************************************************

    public function rendCompte(int $_numCompte) : ?Compte
    {
        for ($i=0; $i < count($this->mesComptes); $i++) 
        { 

            if ($this->mesComptes[$i]->getNumero() == $_numCompte) 
            {
                return $this->mesComptes[$i];
            }
        }
    return null;

  
    

    // $count = count($this->mesComptes);
    // $i = 0;
    // do
    // {
    //     $condition = ($this->mesComptes[$i]->getNumero() == $nb);
    //     if($condition)
    //     {
    //         $result = $this->mesComptes[$i];
    //         return $result;
    //     }
    //     $i++;
    // } while ($i < $count);
    // return null;
    
}



    // *******************************************************************************************************************

    public function transfererBanque(int $numeroEmettrice, Banque $banqueRecepteur , int $numeroRecepteur, float $montant) : void
    {
        echo($variable1 = $this->rendCompte($numeroEmettrice)); 

        echo($variable2 = $banqueRecepteur->rendCompte($numeroRecepteur));

        $variable1->transferer($variable2, $montant);

        echo $variable2;
        echo $variable1;

    }






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
            $resultMesComptes .= $this->mesComptes[$i]->__toString(). PHP_EOL;
        }

        return $resultBanque . PHP_EOL .$resultMesComptes;
    }
}
