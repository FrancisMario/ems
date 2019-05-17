<?php
class property 
{   

    function __construct($type){

        switch ($type) {
            case 'estate':
                $GLOBALS['propertyType'] = $type;
                break;
            
            case'rental':
            $GLOBALS['propertyType'] = $type;
            break;
        }

    }
    
   
    // default
    public function propertyName($var)
    {
        $GLOBALS['propertyName'] = $var;
    }
    // default
    public function propertyLocation($var)
    {
        $GLOBALS['propertyLocation'] = $var;
    }
    // For Estates
    public function propertyNoOfPlots($var)
    {
        $GLOBALS['propertyNoOfPlots'] = $var;
    }
    // For Estates
    public function propertyNoOfPlots($var)
    {
        $GLOBALS['propertyNoOfPlots'] = $var;
    }
}
