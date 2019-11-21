<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Models\Product;
use App\Models\Cat;


function xml2array ( $xmlObject, $out = array () )
{
    foreach ( (array) $xmlObject as $index => $node )
        $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;

    return $out;
}

class ImportCat extends Command {

    // php artisan import:cat
    protected $signature = 'import:cat';
    protected $description = 'Categories import';
    public function __construct()    {        parent::__construct();    }
    public function handle(){

        echo "Get cats file skip\n";
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_cats.xml -O public/storage/data_cats.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');

        echo "Import Cats: ";
        Cat::truncate();

        


        $data_cats = Storage::get('public\import.xml');
        $data_cats_json1 = json_encode(  simplexml_load_string($data_cats) );
        $data_cats_array1 = json_decode($data_cats_json1,TRUE);
        // echo $data_cats_array1["Классификатор"];
        // dd($data_cats_array1);
        // print count($data_cats_array1["КоммерческаяИнформация"]["Группы"]["Группа"]);
        echo " = ";
        echo count(Cat::all());
        echo "\n";

        // var_dump( Cat::all() );

        // FOREACH CATS
            foreach ($data_cats_array1 as $item) {
        //         // if ($item['@attributes']['Ident']==0) {                    continue;                }


        //         // Cat::create(array('id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'image'=> '/'.$arrXX[$randIndex2[0]], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
        //         // echo "+";
                // var_dump($item);
                foreach ($item as $i) {
                    // var_dump($i);
                    if (isset($i['Группа'])) {
                            foreach ($i as $i2) {
                                    if (isset($i2['Наименование'])) {
                                        var_dump($i2['Наименование']);
                                        var_dump($i2['Ид']);
                                        // echo $i2['Наименование'];
                                      if (isset($i2['Группы'])) {
                                            // if (isset($i2[0]['Группa'])) {
                                        foreach ($i2['Группы'] as $i3) {
                                                $arrXX = array("uploads/menu-title-burgers.jpg", "uploads/menu-title-desserts.jpg", "uploads/menu-title-drinks.jpg", "uploads/menu-title-pasta.jpg", "uploads/menu-title-pizza.jpg", "uploads/menu-title-sushi.jpg" );
                                                $randIndex2 = array_rand($arrXX, 2);
                                                // var_dump($i3);
                                                var_dump($i3['Наименование']);
                                                var_dump($i3['Ид']);
                                                Cat::create(array ( 'id' => $i3['Ид'], 'name' => $i3['Наименование'], 'ident' => $i3['Ид'], 'image'=> '/'.$arrXX[$randIndex2[0]], 'xml_name' => $i3['Наименование'], 'parent_id' => 0 ));
                                                echo "+";                                                

                                        //     }
                                        }   
                                      }

                                    }
                            }
                    }
                }

        //         // FIND ID IDENT
        //         // $row = Cat::where('ident' , '=', $item['@attributes']['Ident'])->first();
        //         // if ($row) {
        //         //     // UPDATE
        //         //     // echo $row['name'];
        //         //     // $row->update(array('ident' => $item['@attributes']['Ident'], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
        //         //     $row->update(array('name' => $item['@attributes']['Name'], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
        //         //     echo "~";
        //         //     $row->save();
        //         // } else {
        //         //     Cat::create(array('id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'image'=> '/'.$arrXX[$randIndex2[0]], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
        //         //     echo "+";
        //         //     // echo "=";
        //         // }
        // // UNSET ROW
        //         // unset($row);
            }
            // var_dump($item->toArray());

            echo "\n";
    // FOREACH CATS END

    }
}
