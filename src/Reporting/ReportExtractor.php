<?php

namespace App\Reporting;

use App\Reporting\Formats\FormatterInterface;
use App\Reporting\Formats\HtmlFormatter;
use App\Reporting\Formats\HtmlSpecialFormatter;
use App\Reporting\Formats\JsonFormatter;

class ReportExtractor
{

    public function __construct( protected array $formatters = [] )
    {
        $this->formatters = $formatters;
    }

    public function addFormatter( FormatterInterface $formatter )
    {
        $this->formatters[] = $formatter;
    }

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

        foreach ($this->formatters as $formatter) {
            /** @var FormatterInterface $formatter */
            $results[] = $formatter->format($report);
        }

        return $results;
    }
}
