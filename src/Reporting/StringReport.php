<?php


namespace App\Reporting;


class StringReport extends Report
{
    /**
     * @return string
     */
    public function getStringContents(  ): string
    {
        return "title: $this->title;date: $this->date; data:".implode(",", $this->data);
    }
}