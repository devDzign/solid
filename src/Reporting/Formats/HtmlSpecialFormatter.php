<?php


namespace App\Reporting\Formats;


use App\Reporting\Report;

class HtmlSpecialFormatter extends HtmlFormatter
{

    /**
     * @param Report $report
     *
     * @return string
     */
    public function format( Report $report ): string
    {
        $html = parent::format($report);

        return sprintf("<div style=\"font-weight: bold; color: red\">%s</div>", $html);
    }
}