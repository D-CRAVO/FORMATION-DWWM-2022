<?php


class User
{

    /**
     * Identifiant de l'utilisateur.
     *
     * @var integer
     */
    private int $user_id;

    /**
     * Nom de l'utilisateur.
     *
     * @var string
     */
    private string $user_name;

    /**
     * Adresse email de l'utilisateur.
     *
     * @var string
     */
    private string $user_email;

    /**
     * Mot de passe de l'utilisateur.
     *
     * @var string
     */
    private string $user_pass;

    /**
     * Identifiant du groupe.
     *
     * @var integer
     */
    private int $group_id;

    /**
     * Retourne l'identifiant de l'utilisateur.
     *
     * @return integer
     */
    public function getUserId() : int
    {
        return $this->user_id;
    }

    /**
     * Crée l'identifiant de l'utilisateur.
     *
     * @param [type] $_user_id
     * @return void
     */
    private function setUserId($_user_id) : void
    {
        $this->user_id = $_user_id;
    }

    /**
     * Retourne le nom d'utilisateur.
     *
     * @return string
     */
    public function getUserName() : string
    {
        return $this->user_name;
    }

    /**
     * Crée le nom d'utilisateur.
     *
     * @param [type] $_user_name
     * @return void
     */
    private function setUserName($_user_name) : void
    {
        $this->user_name = $_user_name;
    }

    /**
     * Retourne l'adresse email de l'utilisateur.
     *
     * @return string
     */
    public function getUserEmail() : string
    {
        return $this->user_email;
    }
    
    /**
     * Crée l'adresse email de l'utilisateur.
     *
     * @param [type] $_user_email
     * @return void
     */
    private function setUserEmail($_user_email) : void
    {
        $this->user_email = $_user_email;
    }

    /**
     * Retourne le mot de passe de l'utilisateur
     *
     * @return string
     */
    public function getUserPass() : string
    {
        return $this->user_pass;
    }

    /**
     * Crée le mot de passe de l'utilisateur.
     *
     * @param [type] $_user_pass
     * @return void
     */
    private function setUserPass($_user_pass) : void
    {
        $this->user_pass = $_user_pass;
    }

    /**
     * Retourne l'identifiant du groupe.
     *
     * @return integer
     */
    public function getGroupId() : int
    {
        return $this->group_id;
    }

    /**
     * Crée l'identifiant du groupe
     *
     * @param [type] $_group_id
     * @return void
     */
    private function setGroupId($_group_id) : void
    {
        $this->group_id = $_group_id;
    }

    /**
     * Constructeur
     *
     * @param integer $_user_id
     * @param string $_user_name
     * @param string $_user_email
     * @param string $_user_pass
     * @param integer $_group_id
     */
    public function __construct(int $_user_id, string $_user_name, string $_user_email, string $_user_pass, int $_group_id)
    {
        $this->setUserId($_user_id);
        $this->setUserName($_user_name);
        $this->setUserEmail($_user_email);
        $this->setUserPass($_user_pass);
        $this->setGroupId($_group_id);
    }
}