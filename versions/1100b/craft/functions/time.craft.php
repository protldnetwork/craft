<?php
/*
    Craft 1100b
    This file is a part of the Craft language. All rights reserved - (C) 2016-2016 ProTLD Network
*/

function time_y()
{
	date("y");
}
function time_Y()
{
	date("Y");
}
function time_d()
{
	date("d");
}
function time_D()
{
	date("D");
}
function time_dnz()
{
	// dnz: day no zero
	date("j");
}
function time_dl()
{
	// dl: day letters
	date("l");
}
function time_yd()
{
	// yd: year days
	// 0>365();
	date("z");
}
function time_yw()
{
	// yw: year week
	// 10th week of the year
	date("W");
}
function time_M()
{
	// Januray>December
	date("F");
}
function time_MNZ()
{
	// MNZ: month number witg zero
	// 01>12
	date("m");
}
function time_ms()
{
	// ms: month short
	// Jan>Dec;
	date("M");
}
function time_y()
{
	// y: year
	date("Y");
}
function time_aopl()
{
	// aopl: AM or PM lowercase
	// am/pm
	date("a");
}
function time_aopc()
{
	// aopc: AM or PM capital
	// AM/PM
	date("A");
}
function time_12nz()
{
	// 12nz: 12-hour system with no zero
	date("g");
}
function time_24nz()
{
	// 24nz: 24-hour system with no zero
	date("G");
}
function time_12z()
{
	// 12z: 12-hour system with zero
	date("h");
}
function time_24z()
{
	// 24z: 24-hour system with zero
	date("H");
}
function time_mins()
{
	// mins: minutes with zero
	date("i");
}
function time_secs()
{
	// secs: seconds with zero
	date("s");
}
function time_msecs()
{
	// msecs: milliseconds
	date("u");
}
?>