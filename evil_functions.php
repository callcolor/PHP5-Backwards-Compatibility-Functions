$DATABASE;
$ERROR;

if (!function_exists('mysql_connect')){
	function mysql_connect($h, $u, $p){
		GLOBAL $DATABASE;
		return $DATABASE = mysqli_connect($h, $u, $p);
	}
	
	function mysql_pconnect($h, $u, $p){
		mysql_connect($h, $u, $p);
	}
	
	function mysql_select_db($d){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if(mysqli_select_db($DATABASE, $d)){
			return 1;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_error(){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		return "Error: ".$ERROR;
	}
	
	function mysql_query($q){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($q = mysqli_query($DATABASE, $q)){
			return $q;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_fetch_assoc($q){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($r = mysqli_fetch_assoc($q)){
			return $r;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_fetch_array($q){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($r = mysqli_fetch_array($q)){
			return $r;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_num_rows($q){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($r = mysqli_num_rows($q)){
			return $r;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_list_tables($db){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($q = mysqli_query($DATABSE, "SHOW TABLES FROM '$db'")){
			return $q;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_fetch_row(){
		GLOBAL $DATABASE;
		GLOBAL $ERROR;
		if ($r = mysqli_fetch_row($q)){
			return $r;
		}
		else{
			$ERROR = mysqli_error($DATABASE);
			return 0;
		}
	}
	
	function mysql_escape_string($s){
		GLOBAL $DATABASE;
		return mysqli_escape_string($DATABSE, $s);
	}
}