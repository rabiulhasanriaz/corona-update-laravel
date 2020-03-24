<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoronaController extends Controller
{
    public function index(){
        $total = file_get_contents("https://www.worldometers.info/coronavirus/");
        
        $get_todays_span_data_to_last = explode("<span class=\"number-table\"", $total)[1];
        $get_todays_span_data = explode("</span>", $get_todays_span_data_to_last)[0];
        $todays_span_mild = "<span ". $get_todays_span_data . "</span>";

        $get_todays_span_data_to_last_serious = explode("<span class=\"number-table\"", $total)[2];
        $get_todays_span_data_serious = explode("</span>", $get_todays_span_data_to_last_serious)[0];
        $todays_span_serious = "<span ". $get_todays_span_data_serious . "</span>";

        $get_todays_span_data_to_last_rec = explode("<span class=\"number-table\"", $total)[3];
        $get_todays_span_data_rec = explode("</span>", $get_todays_span_data_to_last_rec)[0];
        $todays_span_rec = "<span ". $get_todays_span_data_rec . "</span>";

        $get_todays_span_data_to_last_death = explode("<span class=\"number-table\"", $total)[4];
        $get_todays_span_data_death = explode("</span>", $get_todays_span_data_to_last_death)[0];
        $todays_span_death = "<span ". $get_todays_span_data_death . "</span>";

        $get_todays_div_data_to_last_active = explode("<div class=\"number-table-main\"", $total)[1];
        $get_todays_div_data_active = explode("</div>", $get_todays_div_data_to_last_active)[0];
        $todays_div_active = "<div ". $get_todays_div_data_active . "</div>";

        $get_todays_div_data_to_last_close = explode("<div class=\"number-table-main\"", $total)[2];
        $get_todays_div_data_close = explode("</div>", $get_todays_div_data_to_last_close)[0];
        $todays_div_close = "<div ". $get_todays_div_data_close . "</div>";



        return view('index',compact('todays_span_mild','todays_span_serious','todays_span_rec','todays_span_death','todays_div_close','todays_div_active'));
    }
    public function worldwide(){
        $total = file_get_contents("https://www.worldometers.info/coronavirus/");
        
        $get_todays_table_data_to_last = explode("<table id=\"main_table_countries_today\"", $total)[1];

        $get_todays_table_data = explode("</table>", $get_todays_table_data_to_last)[0];
        $todays_table = "<table ". $get_todays_table_data . "</table>";
        return view('worldwide',compact('todays_table'));
    }
    public function prevention(){
        return view('prevention');
    }
}
