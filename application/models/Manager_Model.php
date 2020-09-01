<?php

class  Manager_Model extends CI_Model
{
    public $T_Room = "";
    public $T_Lectures = "";
    public $user;
    
    function CountRoom()
    {
        $query = $this->db->query("SELECT count(Room_Id) as TotalRoom FROM room");
        return $query;
    }
    function CountLectures()
    {
        $query = $this->db->query("SELECT count(Module_Id) as TotalLectures FROM modules");
        return $query;
    }
}
