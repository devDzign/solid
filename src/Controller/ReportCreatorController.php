<?php

namespace App\Controller;

use App\Reporting\Formats\HtmlFormatter;
use App\Reporting\Formats\JsonFormatter;
use App\Reporting\Report;
use App\Reporting\StringReport;

class ReportCreatorController
{
    public function show()
    {
        require_once(TEMPLATES_DIR.'report-creator/show.html.php');
    }

    public function execute()
    {
        // Extraction des données, on fait au plus simple / rapide mais ce serait à revoir
        $date   = $_POST['date'];
        $title  = $_POST['title'];
        $data   = $_POST['data'];
        $format = $_POST['format'];

        // Début de l'algorithme
        $report = new StringReport($date, $title, $data);

        if ( $format === "html" ) {
            $reportResult = (new HtmlFormatter())->format($report);
        } else {
            $reportResult = (new JsonFormatter())->format($report);
        }

        require_once(TEMPLATES_DIR.'report-creator/result.html.php');
    }
}
