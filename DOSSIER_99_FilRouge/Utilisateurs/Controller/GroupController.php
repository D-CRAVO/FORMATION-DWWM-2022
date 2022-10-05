<?php

namespace Users\Controller;

/**
 * Manage groups UI actions
 * @author David CRAVO <contact@davidcravo.fr>
 * @version 0.0.1
 * @license MIT
 */
class GroupController
{

    /**
     * Route /?page=groups
     * @return void
     */
    public function index() : void
    {
        require '../View/groups.php';
    }

    /**
     * Route /?page=groups&action=add
     * @return void
     */
    public function add() : void
    {

    }
}