<?php

namespace App\Reporting;

class Report
{

    /**
     * Constructeur qui reçoit la date et le titre du rapport
     *
     * @param string $date
     * @param string $title
     * @param array  $data
     */
    public function __construct(
        protected string $date,
        protected string $title,
        protected array $data)
    {
        $this->date  = $date;
        $this->title = $title;
        $this->data = $data;
    }

    /**
     * Retourne un tableau associatif contenant la date et le titre du rapport
     * Indice : tiens tiens, on pourrait donc récupérer ces données depuis l'extérieur ?
     */
    public function getContents(): array
    {
        return [
            'date'  => $this->date,
            'title' => $this->title,
            'data' => $this->data
        ];
    }
}
