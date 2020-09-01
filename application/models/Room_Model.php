<?php
class Room_Model extends CI_Model
{
	function roomcapacity($room_id)
	{
		$query=$this->db->query("select room.BuildingName, room.RoomNumber, room.Room_Capacity, count(attendance.Student_Id) * room.Room_Capacity / 100 AS RoomUsage, modules.name, class.Date
		from room, attendance, class, modules
		where room.Room_Id=class.Room_Id
        and modules.Module_Id=class.Module_Id
		and class.Class_Id=attendance.Class_Id
		and room.Room_Id='".$room_id."'
		group by modules.name
		order by class.date asc");
		return $query->result();
	} 
	function get_rooms()
	{
		$query = $this->db->get('room');
		return $query->result();
	} 
}
