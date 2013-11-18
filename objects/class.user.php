<?php
/*
	This SQL query will create the table to store your object.

	CREATE TABLE `user` (
	`userid` int(11) NOT NULL auto_increment,
	`id` INT NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`password` BLOB NOT NULL,
	`nome` VARCHAR(255) NOT NULL,
	`cognome` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL, PRIMARY KEY  (`userid`)) ENGINE=MyISAM;
*/

/**
* <b>User</b> class with integrated CRUD methods.
* @author Php Object Generator
* @version POG 3.2 / PHP5.1 MYSQL
* @see http://www.phpobjectgenerator.com/plog/tutorials/45/pdo-mysql
* @copyright Free for personal & commercial use. (Offered under the BSD license)
* @link http://www.phpobjectgenerator.com/?language=php5.1&wrapper=pdo&pdoDriver=mysql&objectName=User&attributeList=array+%28%0A++0+%3D%3E+%27id%27%2C%0A++1+%3D%3E+%27username%27%2C%0A++2+%3D%3E+%27password%27%2C%0A++3+%3D%3E+%27nome%27%2C%0A++4+%3D%3E+%27cognome%27%2C%0A++5+%3D%3E+%27email%27%2C%0A%29&typeList=array%2B%2528%250A%2B%2B0%2B%253D%253E%2B%2527INT%2527%252C%250A%2B%2B1%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B2%2B%253D%253E%2B%2527BLOB%2527%252C%250A%2B%2B3%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B4%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2B%2B5%2B%253D%253E%2B%2527VARCHAR%2528255%2529%2527%252C%250A%2529&classList=array+%28%0A++0+%3D%3E+%27%27%2C%0A++1+%3D%3E+%27%27%2C%0A++2+%3D%3E+%27%27%2C%0A++3+%3D%3E+%27%27%2C%0A++4+%3D%3E+%27%27%2C%0A++5+%3D%3E+%27%27%2C%0A%29
*/
include_once('class.pog_base.php');
class User extends POG_Base
{
	public $userId = '';

	/**
	 * @var INT
	 */
	public $id;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $username;
	
	/**
	 * @var BLOB
	 */
	public $password;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $nome;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $cognome;
	
	/**
	 * @var VARCHAR(255)
	 */
	public $email;
	
	public $pog_attribute_type = array(
		"userId" => array('db_attributes' => array("NUMERIC", "INT")),
		"id" => array('db_attributes' => array("NUMERIC", "INT")),
		"username" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"password" => array('db_attributes' => array("TEXT", "BLOB")),
		"nome" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"cognome" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		"email" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
		);
	public $pog_query;
	
	
	/**
	* Getter for some private attributes
	* @return mixed $attribute
	*/
	public function __get($attribute)
	{
		if (isset($this->{"_".$attribute}))
		{
			return $this->{"_".$attribute};
		}
		else
		{
			return false;
		}
	}
	
	function User($id='', $username='', $password='', $nome='', $cognome='', $email='')
	{
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->email = $email;
	}
	
	
	/**
	* Gets object from database
	* @param integer $userId 
	* @return object $User
	*/
	function Get($userId)
	{
		$connection = Database::Connect();
		$this->pog_query = "select * from `user` where `userid`='".intval($userId)."' LIMIT 1";
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$this->userId = $row['userid'];
			$this->id = $this->Unescape($row['id']);
			$this->username = $this->Unescape($row['username']);
			$this->password = $this->Unescape($row['password']);
			$this->nome = $this->Unescape($row['nome']);
			$this->cognome = $this->Unescape($row['cognome']);
			$this->email = $this->Unescape($row['email']);
		}
		return $this;
	}
	
	
	/**
	* Returns a sorted array of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param string $sortBy 
	* @param boolean $ascending 
	* @param int limit 
	* @return array $userList
	*/
	function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
	{
		$connection = Database::Connect();
		$sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
		$this->pog_query = "select * from `user` ";
		$userList = Array();
		if (sizeof($fcv_array) > 0)
		{
			$this->pog_query .= " where ";
			for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
			{
				if (sizeof($fcv_array[$i]) == 1)
				{
					$this->pog_query .= " ".$fcv_array[$i][0]." ";
					continue;
				}
				else
				{
					if ($i > 0 && sizeof($fcv_array[$i-1]) != 1)
					{
						$this->pog_query .= " AND ";
					}
					if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
					{
						if ($GLOBALS['configuration']['db_encoding'] == 1)
						{
							$value = POG_Base::IsColumn($fcv_array[$i][2]) ? "BASE64_DECODE(".$fcv_array[$i][2].")" : "'".$fcv_array[$i][2]."'";
							$this->pog_query .= "BASE64_DECODE(`".$fcv_array[$i][0]."`) ".$fcv_array[$i][1]." ".$value;
						}
						else
						{
							$value =  POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$this->Escape($fcv_array[$i][2])."'";
							$this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
						}
					}
					else
					{
						$value = POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$fcv_array[$i][2]."'";
						$this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
					}
				}
			}
		}
		if ($sortBy != '')
		{
			if (isset($this->pog_attribute_type[$sortBy]['db_attributes']) && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'SET')
			{
				if ($GLOBALS['configuration']['db_encoding'] == 1)
				{
					$sortBy = "BASE64_DECODE($sortBy) ";
				}
				else
				{
					$sortBy = "$sortBy ";
				}
			}
			else
			{
				$sortBy = "$sortBy ";
			}
		}
		else
		{
			$sortBy = "userid";
		}
		$this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
		$thisObjectName = get_class($this);
		$cursor = Database::Reader($this->pog_query, $connection);
		while ($row = Database::Read($cursor))
		{
			$user = new $thisObjectName();
			$user->userId = $row['userid'];
			$user->id = $this->Unescape($row['id']);
			$user->username = $this->Unescape($row['username']);
			$user->password = $this->Unescape($row['password']);
			$user->nome = $this->Unescape($row['nome']);
			$user->cognome = $this->Unescape($row['cognome']);
			$user->email = $this->Unescape($row['email']);
			$userList[] = $user;
		}
		return $userList;
	}
	
	
	/**
	* Saves the object to the database
	* @return integer $userId
	*/
	function Save()
	{
		$connection = Database::Connect();
		$rows = 0;
		if ($this->userId!=''){
			$this->pog_query = "select `userid` from `user` where `userid`='".$this->userId."' LIMIT 1";
			$rows = Database::Query($this->pog_query, $connection);
		}
		if ($rows > 0)
		{
			$this->pog_query = "update `user` set 
			`id`='".$this->Escape($this->id)."', 
			`username`='".$this->Escape($this->username)."', 
			`password`='".$this->Escape($this->password)."', 
			`nome`='".$this->Escape($this->nome)."', 
			`cognome`='".$this->Escape($this->cognome)."', 
			`email`='".$this->Escape($this->email)."' where `userid`='".$this->userId."'";
		}
		else
		{
			$this->pog_query = "insert into `user` (`id`, `username`, `password`, `nome`, `cognome`, `email` ) values (
			'".$this->Escape($this->id)."', 
			'".$this->Escape($this->username)."', 
			'".$this->Escape($this->password)."', 
			'".$this->Escape($this->nome)."', 
			'".$this->Escape($this->cognome)."', 
			'".$this->Escape($this->email)."' )";
		}
		$insertId = Database::InsertOrUpdate($this->pog_query, $connection);
		if ($this->userId == "")
		{
			$this->userId = $insertId;
		}
		return $this->userId;
	}
	
	
	/**
	* Clones the object and saves it to the database
	* @return integer $userId
	*/
	function SaveNew()
	{
		$this->userId = '';
		return $this->Save();
	}
	
	
	/**
	* Deletes the object from the database
	* @return boolean
	*/
	function Delete()
	{
		$connection = Database::Connect();
		$this->pog_query = "delete from `user` where `userid`='".$this->userId."'";
		return Database::NonQuery($this->pog_query, $connection);
	}
	
	
	/**
	* Deletes a list of objects that match given conditions
	* @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
	* @param bool $deep 
	* @return 
	*/
	function DeleteList($fcv_array)
	{
		if (sizeof($fcv_array) > 0)
		{
			$connection = Database::Connect();
			$pog_query = "delete from `user` where ";
			for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
			{
				if (sizeof($fcv_array[$i]) == 1)
				{
					$pog_query .= " ".$fcv_array[$i][0]." ";
					continue;
				}
				else
				{
					if ($i > 0 && sizeof($fcv_array[$i-1]) !== 1)
					{
						$pog_query .= " AND ";
					}
					if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
					{
						$pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$this->Escape($fcv_array[$i][2])."'";
					}
					else
					{
						$pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$fcv_array[$i][2]."'";
					}
				}
			}
			return Database::NonQuery($pog_query, $connection);
		}
	}
}
?>