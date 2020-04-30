<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['data' =>[
            'id' => $this->id,
            'name' => $this->name,
            'phone'=>$this->phone->phone
        // ] ,'code'=>'1','message'=>'test'];
        ]];
    }
}