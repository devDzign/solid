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
    public function formatToHtml( Report $report ): string
    {
        $html = parent::formatToHTML($report);

        return sprintf("<div style=\"font-weight: bold; color: red\">%s</div>", $html);
    }
}