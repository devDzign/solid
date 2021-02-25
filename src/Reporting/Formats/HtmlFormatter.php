<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

class HtmlFormatter
{

    /**
     * Retourne le rapport formatté en HTML
     *
     * @param Report $report
     *
     * @return string
     */
    public function formatToHTML( Report $report ): string
    {
        $contents = $report->getContents();

        $data = "";

        foreach ($contents["data"] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents["title"]}</h2>
            <em>Date :{$contents["date"]}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }
}