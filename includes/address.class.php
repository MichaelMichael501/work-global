<?php

/**
* Description 	: This is the class for address-related components.
* Author 		: Nadz Mangandog Jr.
* Date Created  : Sep. 28, 2020
* Date Modified : Mar. 21, 2022
* Revised By 	: Nadz Mangandog Jr.		
*/

class address
{

	//set the properties
	public $barangay_id 	= '';
	public $municipality_id = '';
	public $province_id 	= '';
	public $region_id 		= '';

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Province Option List
	|--------------------------------------------------------------------------
	|
	| This method initializes and return the list of provinces in an <option> 
	| tag.
	|
	*/
	
	public static function province_opt_list($provCode = '')
	{
		// variable to store the output
		$output = '';

		// perform a query to retrieve the list of provinces from the database
		$sql = "SELECT * FROM refprovince";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned rows
		if ($result->num_rows > 0) {

			// output data of each row
			while ($row = $result->fetch_assoc()) {

				// init selected
				$selected = ($provCode == $row["provCode"]) ? 'selected' :NULL;

				// concatenate each row in an <option> tag
				$output .= '<option value="' . htmlentities($row["provCode"]) . '" ' . $selected . '>' . htmlentities($row["provDesc"]) . '</option>';

			}

		}

		// return the output
		return $output;
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Province Array List
	|--------------------------------------------------------------------------
	|
	| This method initializes and return the list of provinces in an array.
	|
	*/
	
	public static function provinces_arr()
	{

		// init array to store the output
		$arr = array();

		// query to retrieve the list of provinces from the database
		$sql = "SELECT * FROM refprovince";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned rows
		if ($result->num_rows > 0) {

			// output data of each row
			while ($row = $result->fetch_assoc()) {
				$arr["code"][] = $row["provCode"];
				$arr["description"][] = $row["provDesc"];
			}

		}


		// return the output
		return $arr;
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Municipality Option List
	|--------------------------------------------------------------------------
	|
	| This method initializes and return the list of municipalities in an  
	| <option> tag.
	|
	*/
	
	public function municipality_opt_list()
	{
		// variable to store the output
		$output = '';

		// perform a query to retrieve the list of municipalities from the database
		$sql = "SELECT * FROM refcitymun LEFT JOIN refprovince ON refcitymun.provCode = refprovince.provCode";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned rows
		if ($result->num_rows > 0) {

			// output data of each row
			while ($row = $result->fetch_assoc()) {

				// concatenate each row in an <option> tag
				$output .= '<option value="' . $row["citymunCode"] . '">' . $row["citymunDesc"] . ', ' . $row["provDesc"] . '</option>';

			}

		}

		// return the output
		return $output;
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Municipalities Array List
	|--------------------------------------------------------------------------
	|
	| This method initializes and return the list of municipalities in an array.
	|
	*/
	
	public static function municipalities_arr($provCode = '')
	{

		// init array to store the output
		$arr = array();

		// query to get the respective municipalities from the selected province
		$sql = "SELECT * FROM refcitymun WHERE provCode = '$provCode'";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned rows
		if ($result->num_rows > 0) {

			// output data of each row
			while ($row = $result->fetch_assoc()) {
				$arr["code"][] 			= $row["citymunCode"];
				$arr["description"][] 	= $row["citymunDesc"];
			}

		}


		// return output
		return $arr;
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Municipalities Array List
	|--------------------------------------------------------------------------
	|
	| This method initializes and return the list of municipalities in an array.
	|
	*/
	
	public static function barangays_arr($citymunCode = '')
	{

		// init array to store the output
		$arr = array();

		// query to get the respective barangays from the selected municipality
		$sql = "SELECT * FROM refbrgy WHERE citymunCode = '$citymunCode'";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned rows
		if ($result->num_rows > 0) {

			// output data of each row
			while ($row = $result->fetch_assoc()) {
				$arr["code"][] 			= $row["brgyCode"];
				$arr["description"][] 	= $row["brgyDesc"];
			}

		}


		// return output
		return $arr;
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Get Barangay Name
	|--------------------------------------------------------------------------
	|
	| This method returns the name of the selected barangay id.
	|
	*/

	public function get_barangay_name($barangay_id = '') 
	{

		//perform a query to select the barangay by id from the database
		$sql = "SELECT * FROM refbrgy WHERE brgyCode = '$barangay_id'";
		$result = $GLOBALS["con"]->query($sql);

		//check if there any returned rows
		if ($result->num_rows > 0) {

			//output data of selected row
			while ($row = $result->fetch_assoc()) {

				//return description
				return ucwords(strtolower($row["brgyDesc"]));
				
			}

		}
		
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Get Municipality Name
	|--------------------------------------------------------------------------
	|
	| This method returns the name of the selected id. Will return a blank if no row 
	| from database is found.
	|
	*/

	public function get_municipality_name($municipality_id = '') 
	{

		//perform a query to select the municipality by id from the database
		$sql = "SELECT * FROM refcitymun WHERE citymunCode	 = '$municipality_id'";
		$result = $GLOBALS["con"]->query($sql);

		//check if there any returned rows
		if ($result->num_rows > 0) {

			//output data of selected row
			while ($row = $result->fetch_assoc()) {

				//return description
				return ucwords(strtolower($row["citymunDesc"]));

			}

		}
		
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Get Province Name
	|--------------------------------------------------------------------------
	|
	| This method returns the name of the selected id. Will return a blank if no row 
	| from database is found.
	|
	*/

	public function get_province_name($province_id = '') 
	{

		//perform a query to select the province by id from the database
		$sql = "SELECT * FROM refprovince WHERE provCode = '$province_id'";
		$result = $GLOBALS["con"]->query($sql);

		//check if there any returned rows
		if ($result->num_rows > 0) {

			//output data of selected row
			while ($row = $result->fetch_assoc()) {

				//return description
				return ucwords(strtolower($row["provDesc"]));

			}

		}
		
	}

	##############################################################################


	/*
	|--------------------------------------------------------------------------
	| Get Region Name
	|--------------------------------------------------------------------------
	|
	| This method returns the name of the selected id. Will return a blank if no row 
	| from database is found.
	|
	*/

	public function get_region_name($region_id = '') 
	{
		//perform a query to select the region by id from the database
		$sql = "SELECT * FROM refregion WHERE regCode = '$region_id'";
		$result = $GLOBALS["con"]->query($sql);

		//check if there any returned rows
		if ($result->num_rows > 0) {

			//output data of selected row
			while ($row = $result->fetch_assoc()) {

				//return description
				return $row["regDesc"];

			}
			
		}
		
	}

	##############################################################################	


	/*
	|--------------------------------------------------------------------------
	| Get Region By Province
	|--------------------------------------------------------------------------
	|
	| This method returns the name of the selected id. Will return a blank if no row 
	| from database is found.
	|
	*/

	public static function get_region_code_by_prov($province_id) 
	{

		//perform a query to select the region based on the selected province
		$sql = "SELECT * FROM refprovince WHERE provCode = '$province_id'";
		$result = $GLOBALS["con"]->query($sql);

		//check if there any returned rows
		return ($result->num_rows > 0) ? $result->fetch_assoc()["regCode"] : NULL;

	}

	###########################################################################

	/*
	|--------------------------------------------------------------------------
	| Municipality Data
	|--------------------------------------------------------------------------
	|
	| This method initializes the data of the selected municipality by passing
	| its code as an argument.
	|
	*/

	public function municipality_data($citymunCode='')
	{
		// perform a query to get the record of the selected municipality
		$sql = "SELECT * FROM refcitymun WHERE citymunCode = '$citymunCode'";
		$result = $GLOBALS["con"]->query($sql);

		// check if there are any returned row
		if ($result->num_rows > 0) {

			// init data of returned row
			$row = $result->fetch_assoc();

			// init data
			$this->citymun_id 			= $row["id"];
			$this->citymun_desc 		= $row["citymunDesc"];
			$this->citymun_regCode 		= $row["regDesc"];
			$this->citymun_provCode  	= $row["provCode"];

		}

	}


	###########################################################################

}



// EOF