<?php

namespace Users\Model;

/**
 * Représents an User Group
 * @author David CRAVO <contact@davidcravo.fr>
 * @version 0.0.1
 */
class Group
{
    /** @var int $group_id The user group identifier */
    public int $group_id;

    
    /** @var string $group_name The user group name */
    public string $group_name;


    public function getGroupId() : int
    {
        return $this->group_id;
    }

    private function setGroupId($_group_id) : void
    {
        $this->group_id = $_group_id;
    }

    public function getGroupName() : string
    {
        return $this->group_name;
    }

    private function setGroupName($_group_name) : void
    {
        $this->group_name = $_group_name;
    }

    public function __construct(int $_group_id, string $_group_name)
    {
        $this->setGroupId($_group_id);
        $this->setGroupName($_group_name);
    }

    public function __toString() : string
    {
        $result = 'Le groupe ' . $this->group_id . ' a pour nom ' . $this->group_name . PHP_EOL;
        return $result;
    }

}

