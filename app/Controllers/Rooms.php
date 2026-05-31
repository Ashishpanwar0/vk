<?php

namespace App\Controllers;

class Rooms extends BaseController
{
    public function rooms()
    {
        $hotelData = include APPPATH . 'Data/hotel_data.php';

        return view('rooms_page', [
            'rooms' => $hotelData['rooms'] ?? []
        ]);
    }
}