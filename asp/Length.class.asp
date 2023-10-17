<%
	' ASP Length Class
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
	class Length
		' Value is stored as a floating point in the SI base unit of metres.
		private m_value_metres
		
		' Constructor
		private sub Class_Initialize()
			' Constructor does not support parameters, so nothing to do until the user provides a value.
		end sub
		
		' Set the value in metres
		' 
		' @param input The desired value in metres.
		public property let value_si_metres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in metres.
		' 
		' @return float The value in metres.
		public property get value_si_metres()
			value_si_metres = m_value_metres
		end property
		
		' Set the value in decimetres
		' 
		' @param input The desired value in decimetres.
		public property let value_si_decimetres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / 10
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in decimetres.
		' 
		' @return float The value in decimetres.
		public property get value_si_decimetres()
			value_si_decimetres = m_value_metres * 10
		end property
		
		' Set the value in centimetres
		' 
		' @param input The desired value in centimetres.
		public property let value_si_centimetres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / 100
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in centimetres.
		' 
		' @return float The value in centimetres.
		public property get value_si_centimetres()
			value_si_centimetres = m_value_metres * 100
		end property
		
		' Set the value in millimetres
		' 
		' @param input The desired value in millimetres.
		public property let value_si_millimetres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / 1000
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in millimetres.
		' 
		' @return float The value in millimetres.
		public property get value_si_millimetres()
			value_si_millimetres = m_value_metres * 1000
		end property
		
		' Set the value in micrometres
		' 
		' @param input The desired value in micrometres.
		public property let value_si_micrometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 6)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in micrometres.
		' 
		' @return float The value in micrometres.
		public property get value_si_micrometres()
			value_si_micrometres = m_value_metres * (10 ^ 6)
		end property
		
		' Set the value in nanometres
		' 
		' @param input The desired value in nanometres.
		public property let value_si_nanometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 9)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in nanometres.
		' 
		' @return float The value in nanometres.
		public property get value_si_nanometres()
			value_si_nanometres = m_value_metres * (10 ^ 9)
		end property
		
		' Set the value in picometres
		' 
		' @param input The desired value in picometres.
		public property let value_si_picometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 12)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in picometres.
		' 
		' @return float The value in picometres.
		public property get value_si_picometres()
			value_si_picometres = m_value_metres * (10 ^ 12)
		end property
		
		' Set the value in femtometres
		' 
		' @param input The desired value in femtometres.
		public property let value_si_femtometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 15)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in femtometres.
		' 
		' @return float The value in femtometres.
		public property get value_si_femtometres()
			value_si_femtometres = m_value_metres * (10 ^ 15)
		end property
		
		' Set the value in attometres
		' 
		' @param input The desired value in attometres.
		public property let value_si_attometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 18)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in attometres.
		' 
		' @return float The value in attometres.
		public property get value_si_attometres()
			value_si_attometres = m_value_metres * (10 ^ 18)
		end property
		
		' Set the value in zeptometres
		' 
		' @param input The desired value in zeptometres.
		public property let value_si_zeptometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 21)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in zeptometres.
		' 
		' @return float The value in zeptometres.
		public property get value_si_zeptometres()
			value_si_zeptometres = m_value_metres * (10 ^ 21)
		end property
		
		' Set the value in yoctometres
		' 
		' @param input The desired value in yoctometres.
		public property let value_si_yoctometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 24)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in yoctometres.
		' 
		' @return float The value in yoctometres.
		public property get value_si_yoctometres()
			value_si_yoctometres = m_value_metres * (10 ^ 24)
		end property
		
		' Set the value in rontometres
		' 
		' @param input The desired value in rontometres.
		public property let value_si_rontometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 27)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in rontometres.
		' 
		' @return float The value in rontometres.
		public property get value_si_rontometres()
			value_si_rontometres = m_value_metres * (10 ^ 27)
		end property
		
		' Set the value in quectometres
		' 
		' @param input The desired value in quectometres.
		public property let value_si_quectometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input / (10 ^ 30)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in quectometres.
		' 
		' @return float The value in quectometres.
		public property get value_si_quectometres()
			value_si_quectometres = m_value_metres * (10 ^ 30)
		end property
		
		' Set the value in decametres
		' 
		' @param input The desired value in decametres.
		public property let value_si_decametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 10
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in decametres.
		' 
		' @return float The value in decametres.
		public property get value_si_decametres()
			value_si_decametres = m_value_metres / 10
		end property
		
		' Set the value in hectometres
		' 
		' @param input The desired value in hectometres.
		public property let value_si_hectometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 100
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in hectometres.
		' 
		' @return float The value in hectometres.
		public property get value_si_hectometres()
			value_si_hectometres = m_value_metres / 100
		end property
		
		' Set the value in kilometres
		' 
		' @param input The desired value in kilometres.
		public property let value_si_kilometres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 1000
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in kilometres.
		' 
		' @return float The value in kilometres.
		public property get value_si_kilometres()
			value_si_kilometres = m_value_metres / 1000
		end property
		
		' Set the value in megametres
		' 
		' @param input The desired value in megametres.
		public property let value_si_megaetres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 6)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in megametres.
		' 
		' @return float The value in megametres.
		public property get value_si_megametres()
			value_si_megametres = m_value_metres / (10 ^ 6)
		end property
		
		' Set the value in gigametres
		' 
		' @param input The desired value in gigametres.
		public property let value_si_gigametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 9)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in gigametres.
		' 
		' @return float The value in gigametres.
		public property get value_si_gigametres()
			value_si_gigametres = m_value_metres / (10 ^ 9)
		end property
		
		' Set the value in terametres
		' 
		' @param input The desired value in terametres.
		public property let value_si_terametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 12)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in terametres.
		' 
		' @return float The value in terametres.
		public property get value_si_terametres()
			value_si_terametres = m_value_metres / (10 ^ 12)
		end property
		
		' Set the value in petametres
		' 
		' @param input The desired value in petametres.
		public property let value_si_petametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 15)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in petametres.
		' 
		' @return float The value in petametres.
		public property get value_si_petametres()
			value_si_petametres = m_value_metres / (10 ^ 15)
		end property
		
		' Set the value in exametres
		' 
		' @param input The desired value in exametres.
		public property let value_si_exametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 18)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in exametres.
		' 
		' @return float The value in exametres.
		public property get value_si_exametres()
			value_si_exametres = m_value_metres / (10 ^ 18)
		end property
		
		' Set the value in zettametres
		' 
		' @param input The desired value in zettametres.
		public property let value_si_zettametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 21)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in zettametres.
		' 
		' @return float The value in zettametres.
		public property get value_si_zettametres()
			value_si_zettametres = m_value_metres / (10 ^ 21)
		end property
		
		' Set the value in yottametres
		' 
		' @param input The desired value in yottametres.
		public property let value_si_yottametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 24)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in yottametres.
		' 
		' @return float The value in yottametres.
		public property get value_si_yottametres()
			value_si_yottametres = m_value_metres / (10 ^ 24)
		end property
		
		' Set the value in ronnametres
		' 
		' @param input The desired value in ronnametres.
		public property let value_si_ronnametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 27)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in ronnametres.
		' 
		' @return float The value in ronnametres.
		public property get value_si_ronnametres()
			value_si_ronnametres = m_value_metres / (10 ^ 27)
		end property
		
		' Set the value in quettametres
		' 
		' @param input The desired value in quettametres.
		public property let value_si_quettametres(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * (10 ^ 30)
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in quettametres.
		' 
		' @return float The value in quettametres.
		public property get value_si_quettametres()
			value_si_quettametres = m_value_metres / (10 ^ 30)
		end property
		
		' Set the value in astronomical units
		' 1 au = 149,597,870,700 m
		' 
		' @param input The desired value in astronomical units.
		public property let value_astronomical_units(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 149597870700
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in astronomical units.
		' 
		' @return float The value in astronomical units.
		public property get value_astronomical_units()
			value_astronomical_units = m_value_metres / 149597870700
		end property
		
		' Set the value in light-years
		' 1 ly = 9,460,730,472,580.8 km
		' 
		' @param input The desired value in light-years.
		public property let value_lightyears(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 1000 * 9460730472580.8
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in light-years.
		' 
		' @return float The value in light-years.
		public property get value_lightyears()
			value_lightyears = m_value_metres / 1000 / 9460730472580.8
		end property
		
		' Set the value in parsecs
		' 1 pc = 30,856,775,814,671.9 km
		' 
		' @param input The desired value in parsecs.
		public property let value_parsecs(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 1000 * 30856775814671.9
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in parsecs.
		' 
		' @return float The value in parsecs.
		public property get value_parsecs()
			value_parsecs = m_value_metres / 1000 / 30856775814671.9
		end property
		
		' Set the value in imperial thousandths of an inch.
		' 1 thou = 1/1000 inch
		' 
		' @param input The desired value in imperial thousandths of an inch.
		public property let value_imperial_thou(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 / 36 / 1000
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial thousandths of an inch.
		' 
		' @return float The value in imperial thousandths of an inch.
		public property get value_imperial_thou()
			value_imperial_thou = m_value_metres / 0.9144 * 36 * 1000
		end property
		
		' Set the value in imperial barleycorns.
		' 1 barleycorn = 1/3 in
		' 
		' @param input The desired value in imperial barleycorns.
		public property let value_imperial_barleycorns(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 / 108
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial barleycorns.
		' 
		' @return float The value in imperial barleycorns.
		public property get value_imperial_barleycorns()
			value_imperial_barleycorns = m_value_metres / 0.9144 * 108
		end property
		
		' Set the value in imperial inches.
		' 1 in = 1/12 ft
		' 
		' @param input The desired value in imperial inches.
		public property let value_imperial_inches(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 / 36
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial inches.
		' 
		' @return float The value in imperial inches.
		public property get value_imperial_inches()
			value_imperial_inches = m_value_metres / 0.9144 * 36
		end property
		
		' Set the value in imperial hands.
		' 1 hh = 1/3 ft
		' 
		' @param input The desired value in imperial hands.
		public property let value_imperial_hands(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 / 9
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial hands.
		' 
		' @return float The value in imperial hands.
		public property get value_imperial_hands()
			value_imperial_hands = m_value_metres / 0.9144 * 9
		end property
		
		' Set the value in imperial feet.
		' 1 ft = 1/3 yd
		' 
		' @param input The desired value in imperial feet.
		public property let value_imperial_feet(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 / 3
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial feet.
		' 
		' @return float The value in imperial feet.
		public property get value_imperial_feet()
			value_imperial_feet = m_value_metres / 0.9144 * 3
		end property
		
		' Set the value in imperial yards.
		' 1 yd = 0.9144 m
		' 
		' @param input The desired value in imperial yards.
		public property let value_imperial_yards(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial yards.
		' 
		' @return float The value in imperial yards.
		public property get value_imperial_yards()
			value_imperial_yards = m_value_metres / 0.9144
		end property
		
		' Set the value in imperial chains.
		' 1 ch = 22 yd
		' 
		' @param input The desired value in imperial chains.
		public property let value_imperial_chains(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 22
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial chains.
		' 
		' @return float The value in imperial chains.
		public property get value_imperial_chains()
			value_imperial_chains = m_value_metres / 0.9144 / 22
		end property
		
		' Set the value in imperial links.
		' 1 link = 1/100 ch
		' 
		' @param input The desired value in imperial links.
		public property let value_imperial_links(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 22 / 100
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial links.
		' 
		' @return float The value in imperial links.
		public property get value_imperial_links()
			value_imperial_links = m_value_metres / 0.9144 / 22 * 100
		end property
		
		' Set the value in imperial rods.
		' 1 rod = 1/25 chain
		' 
		' @param input The desired value in imperial rods.
		public property let value_imperial_rods(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 22 / 4
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial rods.
		' 
		' @return float The value in imperial rods.
		public property get value_imperial_rods()
			value_imperial_rods = m_value_metres / 0.9144 / 22 * 4
		end property
		
		' Set the value in imperial furlongs.
		' 1 fur = 220 yd
		' 
		' @param input The desired value in imperial furlongs.
		public property let value_imperial_furlongs(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 220
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial furlongs.
		' 
		' @return float The value in imperial furlongs.
		public property get value_imperial_furlongs()
			value_imperial_furlongs = m_value_metres / 0.9144 / 220
		end property
		
		' Set the value in imperial miles.
		' 1 mi = 1760 yd
		' 
		' @param input The desired value in imperial miles.
		public property let value_imperial_miles(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 1760
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial miles.
		' 
		' @return float The value in imperial miles.
		public property get value_imperial_miles()
			value_imperial_miles = m_value_metres / 0.9144 / 1760
		end property
		
		' Set the value in imperial leagues.
		' 1 lea = 3 mi
		' 
		' @param input The desired value in imperial leagues.
		public property let value_imperial_leagues(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 0.9144 * 1760 * 3
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in imperial leagues.
		' 
		' @return float The value in imperial leagues.
		public property get value_imperial_leagues()
			value_imperial_leagues = m_value_metres / 0.9144 / 1760 / 3
		end property
		
		' Set the value in nautical fathoms.
		' 1 ftm = 1/1000 nautical mile
		' 
		' @param input The desired value in nautical fathoms.
		public property let value_nautical_fathoms(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 1.852
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in nautical fathoms.
		' 
		' @return float The value in nautical fathoms.
		public property get value_nautical_fathoms()
			value_nautical_fathoms = m_value_metres / 1.852
		end property
		
		' Set the value in nautical cables.
		' 1 cable = 1/10 nautical mile
		' 
		' @param input The desired value in nautical cables.
		public property let value_nautical_cables(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 185.2
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in nautical cables.
		' 
		' @return float The value in nautical cables.
		public property get value_nautical_cables()
			value_nautical_cables = m_value_metres / 185.2
		end property
		
		' Set the value in nautical miles.
		' 1 nautical mile  = 1852 m
		' 
		' @param input The desired value in nautical miles.
		public property let value_nautical_miles(input)
			' Make sure we're getting a numeric value.
			if isNumeric(input) then
				' Store value in member variable.
				m_value_metres = input * 1852
			else
				' Unrecognized input. Throw error "type mismatch".
				Err.Raise 13
			end if
		end property
		
		' Get the value in nautical miles.
		' 
		' @return float The value in nautical miles.
		public property get value_nautical_miles()
			value_nautical_miles = m_value_metres / 1852
		end property
	end class
%>