<?php
	namespace ScottVM\UOM; 
	
	/**
	* PHP Length Class
	* 
	* Copyright (c) 2023, Scott Vander Molen; some rights reserved.
	* 
	* This work is licensed under a Creative Commons Attribution 4.0 International License.
	* To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/
	* 
	* @author  Scott Vander Molen
	* @version 1.0
	* @since   2023-10-17
	*
	* https://en.wikipedia.org/wiki/Conversion_of_scales_of_temperature
	*/
	
	// Change debugmode to true if you need to see error messages.
	$debugmode = false;
	if ($debugmode)
	{
		// Allow the display of error during debugging.
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}
	else
	{
		// Display a 404 error if the user attempts to access this file directly.
		if (__FILE__ == $_SERVER['SCRIPT_FILENAME'])
		{
			header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
			exit("<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\r\n<html><head>\r\n<title>404 Not Found</title>\r\n</head><body>\r\n<h1>Not Found</h1>\r\n<p>The requested URL " . $_SERVER['SCRIPT_NAME'] . " was not found on this server.</p>\r\n</body></html>");
		}
	}
	
	class Length
	{
		// Value is stored as a floating point in the SI base unit of metres.
		private $m_value_metres;
		
		/*
		* Set the value in metres
		* 
		* @param $input The desired value in metres.
		*/
		public function set_value_si_metres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_metres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in metres.
		* 
		* @return float The value in metres.
		*/
		public function get_value_si_metres()
		{
			return $this->m_value_metres;
		}
		
		/*
		* Set the value in decimetres
		* 
		* @param $input The desired value in decimetres.
		*/
		public function set_value_si_decimetres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / 10;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_decimetres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in decimetres.
		* 
		* @return float The value in decimetres.
		*/
		public function get_value_si_decimetres()
		{
			return $this->m_value_metres * 10;
		}
		
		/*
		* Set the value in centimetres
		* 
		* @param $input The desired value in centimetres.
		*/
		public function set_value_si_centimetres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / 100;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_centimetres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in centimetres.
		* 
		* @return float The value in centimetres.
		*/
		public function get_value_si_centimetres()
		{
			return $this->m_value_metres * 100;
		}
		
		/*
		* Set the value in millimetres
		* 
		* @param $input The desired value in millimetres.
		*/
		public function set_value_si_millimetres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / 1000;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_millimetres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in millimetres.
		* 
		* @return float The value in millimetres.
		*/
		public function get_value_si_millimetres()
		{
			return $this->m_value_metres * 1000;
		}
		
		/*
		* Set the value in micrometres
		* 
		* @param $input The desired value in micrometres.
		*/
		public function set_value_si_micrometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 6);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_micrometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in micrometres.
		* 
		* @return float The value in micrometres.
		*/
		public function get_value_si_micrometres()
		{
			return $this->m_value_metres * (10 ** 6);
		}
		
		/*
		* Set the value in nanometres
		* 
		* @param $input The desired value in nanometres.
		*/
		public function set_value_si_nanometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 9);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_nanometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in nanometres.
		* 
		* @return float The value in nanometres.
		*/
		public function get_value_si_nanometres()
		{
			return $this->m_value_metres * (10 ** 9);
		}
		
		/*
		* Set the value in picometres
		* 
		* @param $input The desired value in picometres.
		*/
		public function set_value_si_picometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 12);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_picometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in picometres.
		* 
		* @return float The value in picometres.
		*/
		public function get_value_si_picometres()
		{
			return $this->m_value_metres * (10 ** 12);
		}
		
		/*
		* Set the value in femtometres
		* 
		* @param $input The desired value in femtometres.
		*/
		public function set_value_si_femtometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 15);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_femtometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in femtometres.
		* 
		* @return float The value in femtometres.
		*/
		public function get_value_si_femtometres()
		{
			return $this->m_value_metres * (10 ** 15);
		}
		
		/*
		* Set the value in attometres
		* 
		* @param $input The desired value in attometres.
		*/
		public function set_value_si_attometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 18);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_attometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in attometres.
		* 
		* @return float The value in attometres.
		*/
		public function get_value_si_attometres()
		{
			return $this->m_value_metres * (10 ** 18);
		}
		
		/*
		* Set the value in zeptometres
		* 
		* @param $input The desired value in zeptometres.
		*/
		public function set_value_si_zeptometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 21);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_zeptometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in zeptometres.
		* 
		* @return float The value in zeptometres.
		*/
		public function get_value_si_zeptometres()
		{
			return $this->m_value_metres * (10 ** 21);
		}
		
		/*
		* Set the value in yoctometres
		* 
		* @param $input The desired value in yoctometres.
		*/
		public function set_value_si_yoctometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 24);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_yoctometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in yoctometres.
		* 
		* @return float The value in yoctometres.
		*/
		public function get_value_si_yoctometres()
		{
			return $this->m_value_metres * (10 ** 24);
		}
		
		/*
		* Set the value in rontometres
		* 
		* @param $input The desired value in rontometres.
		*/
		public function set_value_si_rontometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 27);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_rontometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in rontometres.
		* 
		* @return float The value in rontometres.
		*/
		public function get_value_si_rontometres()
		{
			return $this->m_value_metres * (10 ** 27);
		}
		
		/*
		* Set the value in quectometres
		* 
		* @param $input The desired value in quectometres.
		*/
		public function set_value_si_quectometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input / (10 ** 30);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_quectometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in quectometres.
		* 
		* @return float The value in quectometres.
		*/
		public function get_value_si_quectometres()
		{
			return $this->m_value_metres * (10 ** 30);
		}
		
		/*
		* Set the value in decametres
		* 
		* @param $input The desired value in decametres.
		*/
		public function set_value_si_decametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 10;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_decametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in decametres.
		* 
		* @return float The value in decametres.
		*/
		public function get_value_si_decametres()
		{
			return $this->m_value_metres / 10;
		}
		
		/*
		* Set the value in hectometres
		* 
		* @param $input The desired value in hectometres.
		*/
		public function set_value_si_hectometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 100;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_hectometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in hectometres.
		* 
		* @return float The value in hectometres.
		*/
		public function get_value_si_hectometres()
		{
			return $this->m_value_metres / 100;
		}
		
		/*
		* Set the value in kilometres
		* 
		* @param $input The desired value in kilometres.
		*/
		public function set_value_si_kilometres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 1000;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_kilometres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in kilometres.
		* 
		* @return float The value in kilometres.
		*/
		public function get_value_si_kilometres()
		{
			return $this->m_value_metres / 1000;
		}
		
		/*
		* Set the value in megametres
		* 
		* @param $input The desired value in megametres.
		*/
		public function set_value_si_megaetres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 6);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_megaetres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in megametres.
		* 
		* @return float The value in megametres.
		*/
		public function get_value_si_megametres()
		{
			return $this->m_value_metres / (10 ** 6);
		}
		
		/*
		* Set the value in gigametres
		* 
		* @param $input The desired value in gigametres.
		*/
		public function set_value_si_gigametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 9);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_gigametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in gigametres.
		* 
		* @return float The value in gigametres.
		*/
		public function get_value_si_gigametres()
		{
			return $this->m_value_metres / (10 ** 9);
		}
		
		/*
		* Set the value in terametres
		* 
		* @param $input The desired value in terametres.
		*/
		public function set_value_si_terametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 12);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_terametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in terametres.
		* 
		* @return float The value in terametres.
		*/
		public function get_value_si_terametres()
		{
			return $this->m_value_metres / (10 ** 12);
		}
		
		/*
		* Set the value in petametres
		* 
		* @param $input The desired value in petametres.
		*/
		public function set_value_si_petametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 15);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_petametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in petametres.
		* 
		* @return float The value in petametres.
		*/
		public function get_value_si_petametres()
		{
			return $this->m_value_metres / (10 ** 15);
		}
		
		/*
		* Set the value in exametres
		* 
		* @param $input The desired value in exametres.
		*/
		public function set_value_si_exametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 18);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_exametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in exametres.
		* 
		* @return float The value in exametres.
		*/
		public function get_value_si_exametres()
		{
			return $this->m_value_metres / (10 ** 18);
		}
		
		/*
		* Set the value in zettametres
		* 
		* @param $input The desired value in zettametres.
		*/
		public function set_value_si_zettametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 21);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_zettametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in zettametres.
		* 
		* @return float The value in zettametres.
		*/
		public function get_value_si_zettametres()
		{
			return $this->m_value_metres / (10 ** 21);
		}
		
		/*
		* Set the value in yottametres
		* 
		* @param $input The desired value in yottametres.
		*/
		public function set_value_si_yottametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 24);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_yottametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in yottametres.
		* 
		* @return float The value in yottametres.
		*/
		public function get_value_si_yottametres()
		{
			return $this->m_value_metres / (10 ** 24);
		}
		
		/*
		* Set the value in ronnametres
		* 
		* @param $input The desired value in ronnametres.
		*/
		public function set_value_si_ronnametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 27);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_ronnametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in ronnametres.
		* 
		* @return float The value in ronnametres.
		*/
		public function get_value_si_ronnametres()
		{
			return $this->m_value_metres / (10 ** 27);
		}
		
		/*
		* Set the value in quettametres
		* 
		* @param $input The desired value in quettametres.
		*/
		public function set_value_si_quettametres($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * (10 ** 30);
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_si_quettametres!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in quettametres.
		* 
		* @return float The value in quettametres.
		*/
		public function get_value_si_quettametres()
		{
			return $this->m_value_metres / (10 ** 30);
		}
		
		/*
		* Set the value in astronomical units
		* 1 au = 149,597,870,700 m
		* 
		* @param $input The desired value in astronomical units.
		*/
		public function set_value_astronomical_units($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 149597870700;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_astronomical_units!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in astronomical units.
		* 
		* @return float The value in astronomical units.
		*/
		public function get_value_astronomical_units()
		{
			return $this->m_value_metres / 149597870700;
		}
		
		/*
		* Set the value in light-years
		* 1 ly = 9,460,730,472,580.8 km
		* 
		* @param $input The desired value in light-years.
		*/
		public function set_value_lightyears($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 1000 * 9460730472580.8;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_lightyears!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in light-years.
		* 
		* @return float The value in light-years.
		*/
		public function get_value_lightyears()
		{
			return $this->m_value_metres / 1000 / 9460730472580.8;
		}
		
		/*
		* Set the value in parsecs
		* 1 pc = 30,856,775,814,671.9 km
		* 
		* @param $input The desired value in parsecs.
		*/
		public function set_value_parsecs($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 1000 * 30856775814671.9;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_parsecs!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in parsecs.
		* 
		* @return float The value in parsecs.
		*/
		public function get_value_parsecs()
		{
			return $this->m_value_metres / 1000 / 30856775814671.9;
		}
		
		/*
		* Set the value in imperial thousandths of an inch.
		* 1 thou = 1/1000 inch
		* 
		* @param $input The desired value in imperial thousandths of an inch.
		*/
		public function set_value_imperial_thou($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 / 36 / 1000;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_thou!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial thousandths of an inch.
		* 
		* @return float The value in imperial thousandths of an inch.
		*/
		public function get_value_imperial_thou()
		{
			return $this->m_value_metres / 0.9144 * 36 * 1000;
		}
		
		/*
		* Set the value in imperial barleycorns.
		* 1 barleycorn = 1/3 in
		* 
		* @param $input The desired value in imperial barleycorns.
		*/
		public function set_value_imperial_barleycorns($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 / 108;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_barleycorns!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial barleycorns.
		* 
		* @return float The value in imperial barleycorns.
		*/
		public function get_value_imperial_barleycorns()
		{
			return $this->m_value_metres / 0.9144 * 108;
		}
		
		/*
		* Set the value in imperial inches.
		* 1 in = 1/12 ft
		* 
		* @param $input The desired value in imperial inches.
		*/
		public function set_value_imperial_inches($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 / 36;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_inches!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial inches.
		* 
		* @return float The value in imperial inches.
		*/
		public function get_value_imperial_inches()
		{
			return $this->m_value_metres / 0.9144 * 36;
		}
		
		/*
		* Set the value in imperial hands.
		* 1 hh = 1/3 ft
		* 
		* @param $input The desired value in imperial hands.
		*/
		public function set_value_imperial_hands($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 / 9;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_hands!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial hands.
		* 
		* @return float The value in imperial hands.
		*/
		public function get_value_imperial_hands()
		{
			return $this->m_value_metres / 0.9144 * 9;
		}
		
		/*
		* Set the value in imperial feet.
		* 1 ft = 1/3 yd
		* 
		* @param $input The desired value in imperial feet.
		*/
		public function set_value_imperial_feet($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 / 3;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_feet!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial feet.
		* 
		* @return float The value in imperial feet.
		*/
		public function get_value_imperial_feet()
		{
			return $this->m_value_metres / 0.9144 * 3;
		}
		
		/*
		* Set the value in imperial yards.
		* 1 yd = 0.9144 m
		* 
		* @param $input The desired value in imperial yards.
		*/
		public function set_value_imperial_yards($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 ;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_yards!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial yards.
		* 
		* @return float The value in imperial yards.
		*/
		public function get_value_imperial_yards()
		{
			return $this->m_value_metres / 0.9144;
		}
		
		/*
		* Set the value in imperial chains.
		* 1 ch = 22 yd
		* 
		* @param $input The desired value in imperial chains.
		*/
		public function set_value_imperial_chains($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 22;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_chains!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial chains.
		* 
		* @return float The value in imperial chains.
		*/
		public function get_value_imperial_chains()
		{
			return $this->m_value_metres / 0.9144 / 22;
		}
		
		/*
		* Set the value in imperial links.
		* 1 link = 1/100 ch
		* 
		* @param $input The desired value in imperial links.
		*/
		public function set_value_imperial_links($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 22 / 100;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_links!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial links.
		* 
		* @return float The value in imperial links.
		*/
		public function get_value_imperial_links()
		{
			return $this->m_value_metres / 0.9144 / 22 * 100;
		}
		
		/*
		* Set the value in imperial rods.
		* 1 rod = 1/25 chain
		* 
		* @param $input The desired value in imperial rods.
		*/
		public function set_value_imperial_rods($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 22 / 4;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_rods!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial rods.
		* 
		* @return float The value in imperial rods.
		*/
		public function get_value_imperial_rods()
		{
			return $this->m_value_metres / 0.9144 / 22 * 4;
		}
		
		/*
		* Set the value in imperial furlongs.
		* 1 fur = 220 yd
		* 
		* @param $input The desired value in imperial furlongs.
		*/
		public function set_value_imperial_furlongs($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 220;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_furlongs!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial furlongs.
		* 
		* @return float The value in imperial furlongs.
		*/
		public function get_value_imperial_furlongs()
		{
			return $this->m_value_metres / 0.9144 / 220;
		}
		
		/*
		* Set the value in imperial miles.
		* 1 mi = 1760 yd
		* 
		* @param $input The desired value in imperial miles.
		*/
		public function set_value_imperial_miles($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 1760;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_miles!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial miles.
		* 
		* @return float The value in imperial miles.
		*/
		public function get_value_imperial_miles()
		{
			return $this->m_value_metres / 0.9144 / 1760;
		}
		
		/*
		* Set the value in imperial leagues.
		* 1 lea = 3 mi
		* 
		* @param $input The desired value in imperial leagues.
		*/
		public function set_value_imperial_leagues($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 0.9144 * 1760 * 3;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_imperial_leagues!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in imperial leagues.
		* 
		* @return float The value in imperial leagues.
		*/
		public function get_value_imperial_leagues()
		{
			return $this->m_value_metres / 0.9144 / 1760 / 3;
		}
		
		/*
		* Set the value in nautical fathoms.
		* 1 ftm = 1/1000 nautical mile
		* 
		* @param $input The desired value in nautical fathoms.
		*/
		public function set_value_nautical_fathoms($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 1.852;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_nautical_fathoms!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in nautical fathoms.
		* 
		* @return float The value in nautical fathoms.
		*/
		public function get_value_nautical_fathoms()
		{
			return $this->m_value_metres / 1.852;
		}
		
		/*
		* Set the value in nautical cables.
		* 1 cable = 1/10 nautical mile
		* 
		* @param $input The desired value in nautical cables.
		*/
		public function set_value_nautical_cables($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 185.2;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_nautical_cables!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in nautical cables.
		* 
		* @return float The value in nautical cables.
		*/
		public function get_value_nautical_cables()
		{
			return $this->m_value_metres / 185.2;
		}
		
		/*
		* Set the value in nautical miles.
		* 1 nautical mile  = 1852 m
		* 
		* @param $input The desired value in nautical miles.
		*/
		public function set_value_nautical_miles($input)
		{
			// Make sure we're getting a numeric value.
			if (is_numeric($input))
			{
				// Store value in member variable.
				$this->m_value_metres = $input * 1852;
			}
			else
			{
				// Unrecognized $input. Throw error "type mismatch".
				trigger_error("Type mismatch on set_value_nautical_miles!", E_USER_ERROR);
			}
		}
		
		/*
		* Get the value in nautical miles.
		* 
		* @return float The value in nautical miles.
		*/
		public function get_value_nautical_miles()
		{
			return $this->m_value_metres / 1852;
		}
	}
?>