<?php

namespace Testeru\News2\Carbon;

use Carbon\Carbon;

class CarbonDate
{

    public function mainCarbon(){

        return $this->getWeekends();

    }

    public function getWeekends(){

        $date = Carbon::now()->endOfWeek();

        return $date;

    }

}

