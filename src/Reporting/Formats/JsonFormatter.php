<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

class JsonFormatter
{
    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     *
     * @return string
     */
    public function formatToJSON(Report $report): string
    {
        return json_encode($report->getContents(), JSON_THROW_ON_ERROR);
    }
}