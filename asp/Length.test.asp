<%@ CodePage=65001 Language="VBScript"%>
<% Option Explicit %>
<!--#include file="Length.class.asp"-->
<%
	' ASP Length Class Unit Tests
	' 
	' Copyright (c) 2023, Scott Vander Molen; some rights reserved.
	' 
	' This work is licensed under a Creative Commons Attribution 4.0 International License.
	' To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/
	' 
	' @author  Scott Vander Molen
	' @version 1.0
	' @since   2023-10-17
	'
	' https://en.wikipedia.org/wiki/Unit_of_length

	' Ensure that UTF-8 encoding is used instead of Windows-1252
	Session.CodePage = 65001
	Response.CodePage = 65001
	Response.CharSet = "UTF-8"
	Response.ContentType = "text/html"
	
	' Tests metric units
	sub testMetricUnits()
		dim testLength
		set testLength = new Length
		testLength.value_si_metres = 1
		
		Response.Write "Unit Test: metres to quettametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 30, testLength.value_si_quettametres)
		Response.Write "Unit Test: metres to ronnametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 27, testLength.value_si_ronnametres)
		Response.Write "Unit Test: metres to yottametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 24, testLength.value_si_yottametres)
		Response.Write "Unit Test: metres to zettametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 21, testLength.value_si_zettametres)
		Response.Write "Unit Test: metres to exametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 18, testLength.value_si_exametres)
		Response.Write "Unit Test: metres to petametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 15, testLength.value_si_petametres)
		Response.Write "Unit Test: metres to terametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 12, testLength.value_si_terametres)
		Response.Write "Unit Test: metres to gigametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 9, testLength.value_si_gigametres)
		Response.Write "Unit Test: metres to megametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 6, testLength.value_si_megametres)
		Response.Write "Unit Test: metres to kilometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 3, testLength.value_si_kilometres)
		Response.Write "Unit Test: metres to hectometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10 ^ 2, testLength.value_si_hectometres)
		Response.Write "Unit Test: metres to decametres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres / 10, testLength.value_si_decametres)
		Response.Write "Unit Test: metres to metres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres, testLength.value_si_metres)
		Response.Write "Unit Test: metres to decimetres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10, testLength.value_si_decimetres)
		Response.Write "Unit Test: metres to centimetres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 2, testLength.value_si_centimetres)
		Response.Write "Unit Test: metres to millimetres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 3, testLength.value_si_millimetres)
		Response.Write "Unit Test: metres to micrometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 6, testLength.value_si_micrometres)
		Response.Write "Unit Test: metres to nanometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 9, testLength.value_si_nanometres)
		Response.Write "Unit Test: metres to picometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 12, testLength.value_si_picometres)
		Response.Write "Unit Test: metres to femtometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 15, testLength.value_si_femtometres)
		Response.Write "Unit Test: metres to attometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 18, testLength.value_si_attometres)
		Response.Write "Unit Test: metres to zeptometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 21, testLength.value_si_zeptometres)
		Response.Write "Unit Test: metres to yoctometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 24, testLength.value_si_yoctometres)
		Response.Write "Unit Test: metres to rontometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 27, testLength.value_si_rontometres)
		Response.Write "Unit Test: metres to quectometres" & vbCrLf & testFramework(testLength.value_si_metres, testLength.value_si_metres * 10 ^ 30, testLength.value_si_quectometres)
		
		set testLength = nothing
	end sub
	
	' Tests imperial units
	sub testImperialUnits()
		dim testLength
		set testLength = new Length
		
		testLength.value_imperial_inches = 1
		Response.Write "Unit Test: thou to inches" & vbCrLf & testFramework(testLength.value_imperial_thou, testLength.value_imperial_thou / 1000, testLength.value_imperial_inches)
		Response.Write "Unit Test: barleycorns to inches" & vbCrLf & testFramework(testLength.value_imperial_barleycorns, testLength.value_imperial_barleycorns / 3, testLength.value_imperial_inches)
		
		testLength.value_imperial_hands = 1
		Response.Write "Unit Test: inches to hands" & vbCrLf & testFramework(testLength.value_imperial_inches, testLength.value_imperial_inches / 4, testLength.value_imperial_hands)
		
		testLength.value_imperial_feet = 1
		Response.Write "Unit Test: inches to feet" & vbCrLf & testFramework(testLength.value_imperial_inches, testLength.value_imperial_inches / 12, testLength.value_imperial_feet)
		
		testLength.value_imperial_yards = 1
		Response.Write "Unit Test: feet to yards" & vbCrLf & testFramework(testLength.value_imperial_feet, testLength.value_imperial_feet / 3, testLength.value_imperial_yards)
		Response.Write "Unit Test: yards to yards" & vbCrLf & testFramework(testLength.value_imperial_yards, testLength.value_imperial_yards, testLength.value_imperial_yards)
		
		testLength.value_imperial_chains = 1
		Response.Write "Unit Test: yards to chains" & vbCrLf & testFramework(testLength.value_imperial_yards, testLength.value_imperial_yards / 22, testLength.value_imperial_chains)
		Response.Write "Unit Test: links to chains" & vbCrLf & testFramework(testLength.value_imperial_links, testLength.value_imperial_links / 100, testLength.value_imperial_chains)
		Response.Write "Unit Test: rods to chains" & vbCrLf & testFramework(testLength.value_imperial_rods, testLength.value_imperial_rods / 4, testLength.value_imperial_chains)
		
		testLength.value_imperial_furlongs = 1
		Response.Write "Unit Test: yards to furlongs" & vbCrLf & testFramework(testLength.value_imperial_yards, testLength.value_imperial_yards / 220, testLength.value_imperial_furlongs)
		
		testLength.value_imperial_miles = 1
		Response.Write "Unit Test: furlongs to miles" & vbCrLf & testFramework(testLength.value_imperial_furlongs, testLength.value_imperial_furlongs / 8, testLength.value_imperial_miles)
		
		testLength.value_imperial_leagues = 1
		Response.Write "Unit Test: miles to leagues" & vbCrLf & testFramework(testLength.value_imperial_miles, testLength.value_imperial_miles / 3, testLength.value_imperial_leagues)
		
		set testLength = nothing
	end sub
	
	' Tests nautical units
	sub testNauticalUnits()
		dim testLength
		set testLength = new Length
		testLength.value_nautical_miles = 1
		
		Response.Write "Unit Test: fathoms to nautical miles" & vbCrLf & testFramework(testLength.value_nautical_fathoms, testLength.value_nautical_fathoms / 1000, testLength.value_nautical_miles)
		Response.Write "Unit Test: cables to nautical miles" & vbCrLf & testFramework(testLength.value_nautical_cables, testLength.value_nautical_cables / 10, testLength.value_nautical_miles)
		
		set testLength = nothing
	end sub
	
	' Tests astronomical units
	sub testAstronomicalUnits()
		dim testLength
		set testLength = new Length
		
		testLength.value_astronomical_units = 1
		Response.Write "Unit Test: kilometres to astronomical units" & vbCrLf & testFramework(testLength.value_si_kilometres, testLength.value_si_kilometres / 149597870.7, testLength.value_astronomical_units)
		
		testLength.value_lightyears = 1
		Response.Write "Unit Test: kilometres to light-years" & vbCrLf & testFramework(testLength.value_si_kilometres, testLength.value_si_kilometres / 9460730472580.8, testLength.value_lightyears)
		
		testLength.value_parsecs = 1
		Response.Write "Unit Test: kilometres to parsecs" & vbCrLf & testFramework(testLength.value_si_kilometres, testLength.value_si_kilometres / 30856775814671.9, testLength.value_parsecs)
		
		set testLength = nothing
	end sub
	
	' Framework for running tests and building result strings.
	' 
	' @param input The specified value.
	' @param expected The expected value.
	' @param actual The actual value.
	' @return string The results of the test.
	function testFramework(input, expected, actual)
		dim result
		dim resultText
		
		if Round(actual, 10) = Round(expected, 10) then
			result = true
			resultText = "successful"
		else
			result = false
			resultText = "failed"
		end if
		
		dim returnString
		returnString = "Input:     " & input & vbCrLf & _
			"Expected:  " & expected & vbCrLf & _
			"Actual:    " & actual & vbCrLf & _
			"Result:    Test " & resultText &  "!" & vbCrLf & vbCrLf
		
		testFramework = returnString
	end function
	
	' Create an HTML container for our output.
	Response.Write "<!DOCTYPE html>" & vbCrLf
	Response.Write "<html lang=""en"">" & vbCrLf
	Response.Write "<meta http-equiv=""Content-Type"" content=""text/html;charset=UTF-8"" />" & vbCrLf
	Response.Write "<body>" & vbCrLf
	
	' Display code header
	Response.Write "<pre>"
	Response.Write "/***************************************************************************************\" & vbCrLf
	Response.Write "| ASP Length Class Unit Tests                                                           |" & vbCrLf
	Response.Write "|                                                                                       |" & vbCrLf
	Response.Write "| Copyright (c) 2023, Scott Vander Molen; some rights reserved.                         |" & vbCrLf
	Response.Write "|                                                                                       |" & vbCrLf
	Response.Write "| This work is licensed under a Creative Commons Attribution 4.0 International License. |" & vbCrLf
	Response.Write "| To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/    |" & vbCrLf
	Response.Write "|                                                                                       |" & vbCrLf
	Response.Write "\***************************************************************************************/" & vbCrLf
	Response.Write "</pre>"
	
	' Run unit tests
	Response.Write "<pre>"
	
	Response.Write "RUN METRIC TESTS" & vbCrLf & vbCrLf
	call testMetricUnits
	
	Response.Write "RUN IMPERIAL TESTS" & vbCrLf & vbCrLf
	call testImperialUnits
	
	Response.Write "RUN NAUTICAL TESTS" & vbCrLf & vbCrLf
	call testNauticalUnits
	
	Response.Write "RUN ASTRONOMICAL TESTS" & vbCrLf & vbCrLf
	call testAstronomicalUnits
	
	Response.Write "</pre>" & vbCrLf
	
	' Close the HTML container.
	Response.Write "</body>" & vbCrLf
	Response.Write "</html>"
%>