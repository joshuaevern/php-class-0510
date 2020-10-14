<?php
include_once ("menu_item.php");

$home = new Menu_Item("Home","/",3,"Opening Screen"),
$dashboard = new Menu_Item("Dashboard","dashboard.php",3,"Your Dashboard"),
$mark  = new Menu_Item("Mark","mark_attendance.php",3,"Mark Attendance"),
$past  = new Menu_Item("Past","attendance_log.php",3,"Past Attendance"),
$Pull_Down_Menu_Item = new Pull_Down_Menu_Item("Manage",[new Menu_Item("Add Student","add_student.php",2,"Add A student to the system"),
$Menu_Item= new Menu_Item("Sessions","manage_sessions.php",2,"Add, Remove, Edit upcoming class sessions")
    ],2,"Manage Class"),
$Menu_Item =  new Menu_Item("Logout","../login/logout.php",3,"Logout of system")

class Menu{
    private $menus;
    function __construct($active="Home", $min_role=3)
    $this->min_role =$min_role;                                                             
    $this->active =$active;

} 

 
function __construct($min_role =3, $active="Home"){
    $this->min_role =$min_role;
    $this->active = $active;
}

public function setUserRole($user_role) {
    $this ->min_role = $user_role;
}
public function getUserRole(){
    return $this ->minrole;
}
fuction get_html(){
    $menu_html = "";
    for each ($this -> menus as $menu){
        $menu ->active =$menu ->test == $active_menu;
        if($menu_role_view($user_role)) {
            $menu_html.= $menu->get_html();
        }
    }
    return $menu_html;
}
public function add_menu_item($Menu_Item){
    array_push($this->menus, $Menu_Item);
    
}
public function get_menu_item($Menu_Item){
    for($i =0; $i<count($this->menus);$i++){
        if($this->menus[i] == $menu_text) {
            return $menu_text[i];
        }else{
            return false;
        }
    }
}
}
?>