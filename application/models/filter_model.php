<?php
class filter_model extends CI_Model
{
	function roomcapacity($room_id)
	{
		$query=$this->db->query("select room.building_name, room.room_number, room.room_capacity, modules.Name
		from room, attendance, class, modules
		where room.room_Id=class.room_Id
        and modules.Module_Id=class.Module_Id
		and class.Class_Id=attendance.Class_Id
		and room.room_Id='".$room_id."'");
		return $query->result();
	} 
	 
	function get_rooms()
	{
		$query = $this->db->get('room');
		return $query->result();
	} 
}
