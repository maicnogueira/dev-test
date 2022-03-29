<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files)
    {
        $owners = [];
        foreach ($files as $file => $owner) {
            if (!isset($owners[ucfirst($owner)])) {
                $owners[ucfirst($owner)][0] = $file;
            }else{
                $owners[ucfirst($owner)][count($owners[ucfirst($owner)])] = $file;
            }
        }

        return $owners;
    }
}

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",

);
var_dump(FileOwners::groupByOwners($files));