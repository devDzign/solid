<?php

namespace App\Controller;

use App\Reporting\Formats\HtmlFormatter;
use App\Reporting\Formats\HtmlSpecialFormatter;
use App\Reporting\Formats\JsonFormatter;
use App\Reporting\Report;
use App\Reporting\ReportExtractor;

class BulkReportController
{
    public function show()
    {
        require_once(TEMPLATES_DIR . 'bulk-report/show.html.php');
    }

    public function execute()
    {
        // Extraction des données, on fait au plus simple / rapide mais ce serait à revoir
        $date = $_POST['date'];
        $title = $_POST['title'];
        $data = $_POST['data'];

        // Début de l'algorithme
        $report = new Report($date, $title, $data);

        $extractor = new ReportExtractor();

        $extractor->addFormatter( new JsonFormatter());
        $extractor->addFormatter(new HtmlFormatter());
        $extractor->addFormatter(new HtmlSpecialFormatter());

        $results = $extractor->process($report);

        require_once(TEMPLATES_DIR . 'bulk-report/result.html.php');
    }
}
