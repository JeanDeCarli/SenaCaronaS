<?php

class ItineraryDb{
    
    public function getItinerarysDescription($od)
    {
        require_once 'Connection.php';
        
        $cnn = new Connection();
        
        $cnn->open();
        if ($od == 'origem'){
            $consulta=pg_query('select * from "Itinerary" where "IdType" = 1;');
        }  else {
            $consulta=pg_query('select * from "Itinerary" where "IdType" = 2;');
        }
        
        $cnn->close();
        
        return $consulta;
    }
}

?>