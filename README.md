# Length Class for PHP and ASP

A class for working with length values. Supports the following units of measure:

- SI units (metre, etc.)
- Imperial units (thou, inch, foot, yard, mile, league, etc.)
- Marine units (fathom, cable, nautical mile)
- Astronomy (astronomical unit, light-year, parsec)

## Project Status

No further development is planned, as this class is considered complete.

## Installation

### PHP

Place Length.class.php in any location on your web server. For additional security, you may wish to place it in a location that isn't directly accessible by users, though attempts to access the library directly will generate a 404 error.

The file Length.test.php is not required in order to use the library and does not need to be placed on the web server unless you want to run unit tests.

### ASP Classic

Place Length.class.asp in any location on your web server, or on another machine on the same network. For additional security, you may wish to place it in a location that isn't directly accessible by users.

Optionally, you may register the Windows Script Component by right-clicking on the file in Windows Explorer and choosing Register.

The file Length.test.asp is not required in order to use the library and does not need to be placed on the web server unless you want to run unit tests.

## Usage

### PHP

```PHP
// Change the path if you're storing the library in a different folder.
include 'Length.class.php';

// Feel free to alias the class so that you don't need to type my name every time you use it.
use ScottVM\UOM as UOM;

// Create a Length
$yardStick = new UOM\Length();
$yardStick->set_value_imperial_yards(1);

// Displays 3
echo $yardStick->get_value_imperial_feet();

// Displays 36
echo $yardStick->get_value_imperial_inches();
```

### ASP Classic

```vbscript
<!--#include file="Length.class.asp"-->
<%
' Create a Length
dim yardStick
set yardStick = new Length
yardStick.value_imperial_yards = 1

' Displays 3
Response.Write yardStick.value_imperial_feet

' Displays 36
Response.Write yardStick.value_imperial_inches
%>
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

See Temperature.test.php or Temperature.test.asp for unit tests.

## Authors

Version 1.0 written October 2023 by Scott Vander Molen

## License
This work is licensed under a [Creative Commons Attribution 4.0 International License](https://creativecommons.org/licenses/by/4.0/).