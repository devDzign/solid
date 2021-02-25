<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

class JsonFormatter implements FormatterInterface, DeserializeInterface
{
    /**
     * Retourne le rapport formatté en JSON
     *
     * @param Report $report
     *
     * @return string
     */
    public function format(Report $report): string
    {
        return json_encode($report->getContents(), JSON_THROW_ON_ERROR);
    }


    public function deserialize( String $str ): Report
    {
        $content = json_decode($str, true, 512, JSON_THROW_ON_ERROR);

        return new Report($content['date'], $content['title'], $content['data']);
    }
}