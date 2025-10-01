<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheduling;
use App\Models\Scheldule;

class Helper
{

    public static function scheldule($fk_Scheldules_id)
    {
        $scheldule= Scheldule::find($fk_Scheldules_id);
        return $scheldule;
    }

    public static function schelduling($fk_Schelduling_id)
    {
        $schelduling= Scheduling::find($fk_Schelduling_id);
        return $schelduling;
    }
    public static function payment($fk_Payments_id)
    {
        $payment= Payment::find($fk_Payments_id);
        return $payment;
    }

    public static function client($fk_Clients_id)
    {
        $payment= Client::find($fk_Clients_id);
        return $payment;
    }
}
