<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

interface DeserializeInterface
{
    public function deserialize( string $str ): Report;
}