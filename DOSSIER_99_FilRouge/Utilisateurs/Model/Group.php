<?php


class Group
{

    private int $group_id;
    private string $group_name;

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
        
    }
}

