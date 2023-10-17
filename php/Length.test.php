<?php
	/**
	* PHP Length Class Unit Tests
	* 
	* Copyright (c) 2023, Scott Vander Molen; some rights reserved.
	* 
	* This work is licensed under a Creative Commons Attribution 4.0 International License.
	* To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/
	* 
	* @author  Scott Vander Molen
	* @version 2.0
	* @since   2023-10-17
	*/
	
	// Change debugmode to true if you need to see error messages.
	$debugmode = false;
	if ($debugmode)
	{
		// Allow the display of errors during debugging.
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}
	
	echo "<pre>";
	echo "/***************************************************************************************\\\n";
	echo "| PHP Length Class Unit Tests                                                      |\n";
	echo "|                                                                                       |\n";
	echo "| Copyright (c) 2023, Scott Vander Molen; some rights reserved.                         |\n";
	echo "|                                                                                       |\n";
	echo "| This work is licensed under a Creative Commons Attribution 4.0 International License. |\n";
	echo "| To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/    |\n";
	echo "|                                                                                       |\n";
	echo "\***************************************************************************************/\n";
	echo "</pre>";

	include 'Length.class.php';
	use ScottVM\UOM as UOM;
	
	if (!class_exists('ScottVM\UOM\Length'))
	{
		trigger_error('Could not find Length class! Did you set the path correctly?', E_USER_ERROR);
	}
	
	// Tests metric units
	function testMetricUnits()
	{
		$testLength = new UOM\Length();
		$testLength->set_value_si_metres(1);
		
		echo "Unit Test: metres to quettametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 30, $testLength->get_value_si_quettametres());
		echo "Unit Test: metres to ronnametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 27, $testLength->get_value_si_ronnametres());
		echo "Unit Test: metres to yottametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 24, $testLength->get_value_si_yottametres());
		echo "Unit Test: metres to zettametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 21, $testLength->get_value_si_zettametres());
		echo "Unit Test: metres to exametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 18, $testLength->get_value_si_exametres());
		echo "Unit Test: metres to petametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 15, $testLength->get_value_si_petametres());
		echo "Unit Test: metres to terametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 12, $testLength->get_value_si_terametres());
		echo "Unit Test: metres to gigametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 9, $testLength->get_value_si_gigametres());
		echo "Unit Test: metres to megametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 6, $testLength->get_value_si_megametres());
		echo "Unit Test: metres to kilometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 3, $testLength->get_value_si_kilometres());
		echo "Unit Test: metres to hectometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10 ** 2, $testLength->get_value_si_hectometres());
		echo "Unit Test: metres to decametres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() / 10, $testLength->get_value_si_decametres());
		echo "Unit Test: metres to metres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres(), $testLength->get_value_si_metres());
		echo "Unit Test: metres to decimetres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10, $testLength->get_value_si_decimetres());
		echo "Unit Test: metres to centimetres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 2, $testLength->get_value_si_centimetres());
		echo "Unit Test: metres to millimetres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 3, $testLength->get_value_si_millimetres());
		echo "Unit Test: metres to micrometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 6, $testLength->get_value_si_micrometres());
		echo "Unit Test: metres to nanometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 9, $testLength->get_value_si_nanometres());
		echo "Unit Test: metres to picometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 12, $testLength->get_value_si_picometres());
		echo "Unit Test: metres to femtometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 15, $testLength->get_value_si_femtometres());
		echo "Unit Test: metres to attometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 18, $testLength->get_value_si_attometres());
		echo "Unit Test: metres to zeptometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 21, $testLength->get_value_si_zeptometres());
		echo "Unit Test: metres to yoctometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 24, $testLength->get_value_si_yoctometres());
		echo "Unit Test: metres to rontometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 27, $testLength->get_value_si_rontometres());
		echo "Unit Test: metres to quectometres\n" . testFramework($testLength->get_value_si_metres(), $testLength->get_value_si_metres() * 10 ** 30, $testLength->get_value_si_quectometres());
	}
	
	// Test imperial units
	function testImperialUnits()
	{
		$testLength = new UOM\Length();
		
		$testLength->set_value_imperial_inches(1);
		echo "Unit Test: thou to inches\n" . testFramework($testLength->get_value_imperial_thou(), $testLength->get_value_imperial_thou() / 1000, $testLength->get_value_imperial_inches());
		echo "Unit Test: barleycorns to inches\n" . testFramework($testLength->get_value_imperial_barleycorns(), $testLength->get_value_imperial_barleycorns() / 3, $testLength->get_value_imperial_inches());
		
		$testLength->set_value_imperial_hands(1);
		echo "Unit Test: inches to hands\n" . testFramework($testLength->get_value_imperial_inches(), $testLength->get_value_imperial_inches() / 4, $testLength->get_value_imperial_hands());
		
		$testLength->set_value_imperial_feet(1);
		echo "Unit Test: inches to feet\n" . testFramework($testLength->get_value_imperial_inches(), $testLength->get_value_imperial_inches() / 12, $testLength->get_value_imperial_feet());
		
		$testLength->set_value_imperial_yards(1);
		echo "Unit Test: feet to yards\n" . testFramework($testLength->get_value_imperial_feet(), $testLength->get_value_imperial_feet() / 3, $testLength->get_value_imperial_yards());
		echo "Unit Test: yards to yards\n" . testFramework($testLength->get_value_imperial_yards(), $testLength->get_value_imperial_yards(), $testLength->get_value_imperial_yards());
		
		$testLength->set_value_imperial_chains(1);
		echo "Unit Test: yards to chains\n" . testFramework($testLength->get_value_imperial_yards(), $testLength->get_value_imperial_yards() / 22, $testLength->get_value_imperial_chains());
		echo "Unit Test: links to chains\n" . testFramework($testLength->get_value_imperial_links(), $testLength->get_value_imperial_links() / 100, $testLength->get_value_imperial_chains());
		echo "Unit Test: rods to chains\n" . testFramework($testLength->get_value_imperial_rods(), $testLength->get_value_imperial_rods() / 4, $testLength->get_value_imperial_chains());
		
		$testLength->set_value_imperial_furlongs(1);
		echo "Unit Test: yards to furlongs\n" . testFramework($testLength->get_value_imperial_yards(), $testLength->get_value_imperial_yards() / 220, $testLength->get_value_imperial_furlongs());
		
		$testLength->set_value_imperial_miles(1);
		echo "Unit Test: furlongs to miles\n" . testFramework($testLength->get_value_imperial_furlongs(), $testLength->get_value_imperial_furlongs() / 8, $testLength->get_value_imperial_miles());
		
		$testLength->set_value_imperial_leagues(1);
		echo "Unit Test: miles to leagues\n" . testFramework($testLength->get_value_imperial_miles(), $testLength->get_value_imperial_miles() / 3, $testLength->get_value_imperial_leagues());
	}
	
	// Tests nautical units
	function testNauticalUnits()
	{
		$testLength = new UOM\Length();
		$testLength->set_value_nautical_miles(1);
		
		echo "Unit Test: fathoms to nautical miles\n" . testFramework($testLength->get_value_nautical_fathoms(), $testLength->get_value_nautical_fathoms() / 1000, $testLength->get_value_nautical_miles());
		echo "Unit Test: cables to nautical miles\n" . testFramework($testLength->get_value_nautical_cables(), $testLength->get_value_nautical_cables() / 10, $testLength->get_value_nautical_miles());
	}
	
	// Tests astronomical units
	function testAstronomicalUnits()
	{
		$testLength = new UOM\Length();
		
		$testLength->set_value_astronomical_units(1);
		echo "Unit Test: kilometres to astronomical units\n" . testFramework($testLength->get_value_si_kilometres(), $testLength->get_value_si_kilometres() / 149597870.7, $testLength->get_value_astronomical_units());
		
		$testLength->set_value_lightyears(1);
		echo "Unit Test: kilometres to light-years\n" . testFramework($testLength->get_value_si_kilometres(), $testLength->get_value_si_kilometres() / 9460730472580.8, $testLength->get_value_lightyears());
		
		$testLength->set_value_parsecs(1);
		echo "Unit Test: kilometres to parsecs\n" . testFramework($testLength->get_value_si_kilometres(), $testLength->get_value_si_kilometres() / 30856775814671.9, $testLength->get_value_parsecs());
	}
	
	/*
	* Framework for running tests and building result strings.
	* 
	* @param input The specified value.
	* @param expected The expected value.
	* @param actual The actual value.
	* @return string The results of the test.
	*/
	function testFramework($input, $expected, $actual)
	{
		if (Round($actual, 10) == Round($expected, 10))
		{
			$result = true;
			$resultText = "successful";
		}
		else
		{
			$result = false;
			$resultText = "failed";
		}
		
		$returnString  = "Input:     " . $input . "\n";
		$returnString .= "Expected:  " . $expected . "\n";
		$returnString .= "Actual:    " . $actual . "\n";
		$returnString .= "Result:    Test " . $resultText .  "!" . "\n" . "\n";
		
		return $returnString;
	}
	
	
	echo "<pre>";
	
	echo "RUN METRIC TESTS\n\n";
	testMetricUnits();
	
	echo "RUN IMPERIAL TESTS\n\n";
	testImperialUnits();
	
	echo "RUN NAUTICAL TESTS\n\n";
	testNauticalUnits();
	
	echo "RUN ASTRONOMICAL TESTS\n\n";
	testAstronomicalUnits();
	
	echo "</pre>";
?>