<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Employment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {// var_dump($this->resource); exit;
        return  [
            'type' => 'institution', 
            'id' => $this->id,
            "attributes"=>
            [
                'name' => $this->name,
                'address' => $this->address,
                'startdate' => $this->startDate,
                'endDate' => $this->endDate   
            ],
           
            
        ];
    }
}
