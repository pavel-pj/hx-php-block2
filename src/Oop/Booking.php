<?php

namespace Testeru\News2\Oop;

use Carbon\Carbon;

class Booking
{

    private array $bookings = [];

    public function book(string $dateStart, string $dateEnd)
    {


        $dateStart = Carbon::create($dateStart);
        $dateEnd = Carbon::create($dateEnd);

        if ($dateStart >= $dateEnd)
        {
            Echo "Бронь невозможна!\n";
            return false;
        }


         foreach ($this->bookings as $booking) {
           $bookedStart = $booking['start'];
           $bookedEnd = $booking['end'];


           if (($dateStart  < $bookedEnd and $dateStart >= $bookedStart) or
               ($dateEnd > $bookedStart and $dateEnd <= $bookedEnd) or
               ($bookedStart >= $dateStart  and  $bookedEnd <= $dateEnd)
           ) {

               Echo "Бронь невозможна!\n";
               return false;


           }

        }
        $this->bookings [] = ['start'=>$dateStart, 'end'=>$dateEnd];
        Echo "Забронировано!\n";
        return true;

    }



}