<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	  public static $SUPER_ADMIN  = 1;
   	public static $SUB_ADMIN    = 2;
   	public static $STUDENT      = 3;
    public static $TEAM_LEADER  = 4;
    public static $TEAM_MEMBER  = 5;
    public static $JUDGE        = 6;
    public static $INTERN       = 7;
	  public static $AMBASSADOR   = 8;
    


   	public static function getRole($id)
   	{
   		$list = array(
            array('type'=>self::$SUPER_ADMIN,'label'=>'SUPER ADMIN'),
            array('type'=>self::$SUB_ADMIN,'label'=>'SUB ADMIN'),
            array('type'=>self::$STUDENT,'label'=>'STUDENT'),
            array('type'=>self::$TEAM_LEADER,'label'=>'TEAM LEADER'),
            array('type'=>self::$TEAM_MEMBER,'label'=>'TEAM MEMBER'),
            array('type'=>self::$JUDGE,'label'=>'JUDGE'),
            array('type'=>self::$INTERN,'label'=>'INTERNSHIP'),
            array('type'=>self::$AMBASSADOR,'label'=>'AMBASSADOR'),
        );

        foreach ($list as $type){
            if($type['type']==$id){
                return $type['label'];
            }
        }

        return '--UNKNOWN--';
   	}
}
