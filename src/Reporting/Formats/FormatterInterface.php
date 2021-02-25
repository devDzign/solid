<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

interface FormatterInterface
{
    public function format( Report $report ): string;
}