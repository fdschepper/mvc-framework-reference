<?php
class Lessen extends Controller
{
    // Properties, field
    private $lesModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->lesModel = $this->model('Les');
    }

    public function index()
    {
        /**
         * Haal via de method getFruits() uit de model Fruit de records op
         * uit de database
         */
        $lessen = $this->lesModel->getLessen();

        /**
         * Maak de inhoud voor de tbody in de view
         */
        $rows = '';
        foreach ($lessen as $value) {
            $rows .= "<tr>
                  <td>$value->Id</td>
                  <td>$value->Naam</td>
                </tr>";
        }


        $data = [
            'title' => '<h1>Lessen</h1>',
            'lessen' => $rows
        ];
        $this->view('lessen/index', $data);
    }
}
