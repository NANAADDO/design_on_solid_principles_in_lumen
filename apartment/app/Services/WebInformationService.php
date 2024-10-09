<?php

namespace App\Services;

class WebInformationService

{
    protected $serviceName;

public function __construct(string $serviceName)
{
    $this->serviceName = $serviceName;
}

public function getServiceInformation(string $name):WebInformation{

    $name = "get$name"."Strategy";
    $resutlt = call_user_func([$this, $name]);
    if($resutlt === false){
        throw  new \Exception('Ops: Service Name does Not Exit');

    }
    return call_user_func([$this, $name]);
}



public function getWeatherInformationStrategy(){
    $serviceInformation = new WebInformation();

    return $serviceInformation->setEndpointURL("https://api.restful-api.dev/objects");
}

}