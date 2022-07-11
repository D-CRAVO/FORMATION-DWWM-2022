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



    /**
     * Détermine le compte ayant le solde le plus important
     *
     * @return Compte
     */
    public function compteSup() : Compte
    {
        //echo(array_search(max($this->mesComptes->solde, $this->mesComptes),$this->mesComptes));
        //var_dump(array_search(max($this->solde, $this),$this->mesComptes));
        //var_dump(max($this->solde), $this->mesComptes);

        $compteMax = $this->mesComptes[0];

        foreach($this->mesComptes as $unCompte) {
            if($unCompte->getSoldeCompte() > $compteMax->getSoldeCompte()) 
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


    /**
     * Retourne les informations du compte demandé de la banque $this recherché par son numéro de compte
     * Elle retourne "null" si le compte n'est pas trouvé 
     *
     * @param integer $_numCompte
     * @return Compte|null
     */
    public function rendCompte(int $_numCompte) : ?Compte
    {
        for ($i=0; $i < count($this->mesComptes); $i++) 
        { 

            if ($this->mesComptes[$i]->getNumeroCompte() == $_numCompte) 
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



    /**
     * Effectue le transfert (virement) du montant $_montant de la banque émettrice $this vers la banque 
     * $_banqueRecepteur via leurs numéros de comptes respectifs 
     *
     * @param integer $_numeroEmetteur      // Numéro de compte de la banque émettrice $this
     * @param Banque $_banqueRecepteur      // Banque réceptrice du virement
     * @param integer $_numeroRecepteur     // Numéro de compte de la banque réceptrice
     * @param float $_montant               // Montant du virement
     * @return void
     */
    public function transfererBanque(int $_numeroEmetteur, Banque $_banqueRecepteur , int $_numeroRecepteur, float $_montant) : void
    {
        $variable1 = $this->rendCompte($_numeroEmetteur); 
        $variable2 = $_banqueRecepteur->rendCompte($_numeroRecepteur);

        $variable1->transferer($variable2, $_montant);

        // echo $variable2;
        // echo $variable1;

    }


 
}
