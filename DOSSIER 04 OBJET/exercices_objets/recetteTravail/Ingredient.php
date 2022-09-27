<?php

require '.\Ustensile.php';

/**
 * La classe ingrédient représente un ingrédient d'une recette
 * 
 */
class Ingredient
{
    /** @var string $nom Le nom de l'ingrédient */
    private string $nom;

    /** @var float $quantite La quantite de l'ingrédient de la recette */
    private float $quantite;

    /** @var string $uniteDeMesure l'unité de mesure utilisée pour la quantité */
    private string $uniteDeMesure;

    /**
     * @var Ustensile[] $ustensiles Ustensiles nécessaires pour manipuler l'ingrédient
     * 
     */
    
    /** @var Ustensile[] $ustensiles Ustensiles nécessaires pour manipuler l'ingrédient */
    private array $ustensiles;

     


    /**
     * Retourne le nom de l'ingrédient à l'utilisateur
     *
     * @return string Le nom actuel de l'ingrédient
     */
    public function getNom() : string
    {
        return $this->nom;
    }




    /**
     * Definit un nouveau nom pour l'ingrédient
     * Le nom doit respecter les conditions suivantes :
     * 2 caractères minimum, uniquement lettres, chiffres et tiret (-)
     *
     * @param string $nouveauNom Le nouveau nom de l'ingrédient
     * @throws Exception Le format de nouveauNom est incorrect
     */
    public function setNom(string $nouveauNom) : void
    {
        if (mb_strlen($nouveauNom) >= 2)  // mb_strlen
        // if (strlen($nouveauNom) >= 2)  // mb_strlen
        {
            $this->nom = $nouveauNom;
        }
        else
        {
            throw new Exception ('Le nouveau nom est invalide !');
        }

        // if (!empty($nouveauNom))
        // {
        //     $this->nom = $nouveauNom;
        //     //echo 'Veuillez saisir le nom de l\'ingrédient' . PHP_EOL;
        // }
        /* else
        {
            $this->nom = $nom;
        } */
        
    }


    

    /**
     * Retourne la quantité de l'ingredient à l'utilisateur
     *
     * @return float La valeur actuelle de la quantité
     */
    public function getQuantite() : float
    {
        return $this->quantite;
    }




    /**
     * Permet la modification de la quantite par l'utilisateur
     *
     * @param float $nouvelleQuantite La nouvelle quantité de l'ingrédient
     * @return void
     */
    public function setQuantite(float $nouvelleQuantite) : void
    {
        $this->quantite = $nouvelleQuantite;
        /* if ($nouvelleQuantite == null)
        {
            $this->quantite = 0;
        }
        else
        {
            $this->quantite = $nouvelleQuantite;
        } */
        
    }




    /**
     * Retourne l'unité de mesure de l'ingrédient à l'utilisateur
     *
     * @return void
     */
    public function getUniteDeMesure()
    {
        return $this->uniteDeMesure;
    }




    /**
     * Permet la modification de l'unité de mesure par l'utilisateur
     *
     * @param string $nouvelleUniteDeMesure Nouvelle unité de mesure
     * @return void
     */
    public function setUniteDeMesure(string $nouvelleUniteDeMesure) : void
    {
        $this->uniteDeMesure = $nouvelleUniteDeMesure;
        /* if ($nouvelleUniteDeMesure == null)
        {
            $this->uniteDeMesure = '';
        }
        else 
        {
            $this->uniteDeMesure = $nouvelleUniteDeMesure;
        } */
        
    }




    /**
     * Constructeur
     *
     * @param string $nom   Nom de l'ingrédient
     * @param float $quantite   Quantité de l'ingrédient
     * @param string $uniteDeMesure   Unité de mesure de l'ingrédient
     */
    public function __construct(string $nom, float $quantite = 0, string $uniteDeMesure = 'grammes')
    {
        $this->setNom($nom);
        $this->setQuantite($quantite);
        $this->setUniteDeMesure($uniteDeMesure);
        $this->mesUstensiles = [];

    } 




    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        $result = '';
        if (!empty($this->nom)) 
        {
            $result = 'L\'ingrédient a pour nom : ' . $this->nom;
            if ($this->quantite > 0)
            {
                $result .= ' et la quantité nécessaire est de ' . $this->quantite;
            }
            if (!empty($this->uniteDeMesure))
            {
                $result .= ' ' . $this->uniteDeMesure;
            }
        }
        else
        {
            $result = 'Veuillez saisir le nom de l\'ingrédient' . PHP_EOL;
        }
        
        //$result = 'L\'ingrédient a pour nom : ' . $this->nom . ' et la quantité nécessaire est de ' . $this->quantite . ' ' . $this->uniteDeMesure; 
        return $result;
    }





    public function copyTo(Ingredient $autreIngredient) : void
    {
        $autreIngredient->nom = $this->nom;
        // $autreIngredient->setNom($this->getNom());
    }





    /**
     * Permet l'ajout (association) d'un ustensile à un ingrédient
     *
     * @param Ustensile $_ustensile     // Ustensile ajouté
     * @return void
     */
    public function addNewUstensile(Ustensile $_ustensile) : void
    {
        array_push($this->mesUstensiles, $_ustensile);
    }





    public function deleteUstensile(int $_startingIndex, int $_numOfElements = 1) : void
    {
        array_splice($this->mesUstensiles, $_startingIndex, $_numOfElements);
    }





    public function deleteAllUstensile() : void
    {
        $nb = count($this->mesUstensiles);
        array_splice($this->mesUstensiles, 0, $nb);

    }





    public function displayUstensiles() : string
    {
        $result = '';
        $nbUstensiles = count($this->mesUstensiles);
        //echo $nbUstensiles;
        for ($i=0; $i < $nbUstensiles; $i++) 
        { 
            $result .= $this->mesUstensiles[$i]->getNomUstensile() . PHP_EOL;
            //echo $result;
        }
        return $result;
    }

}
