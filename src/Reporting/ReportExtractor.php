<?php

namespace App\Reporting;

use App\Reporting\Formats\HtmlFormatter;
use App\Reporting\Formats\JsonFormatter;

class ReportExtractor
{

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process( Report $report ): array
    {
        $results = [];

        $results[] = (new HtmlFormatter())->formatToHTML($report);
        $results[] = (new JsonFormatter())->formatToJSON($report);

        return $results;
    }
}
