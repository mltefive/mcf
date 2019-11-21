<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Models\Product;
use App\Models\Cat;

class ImportProduct extends Command {

    protected $signature = 'import:product';
    protected $description = 'Product import';
    public function __construct()    {        parent::__construct();    }
    public function handle(){
        echo "Get products file skip\n";
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_items.xml -O public/storage/data_items.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        $data_items = Storage::get('public\import.xml');

// Items
        echo "Import Items: ";
        Product::truncate();

        $xml3 = simplexml_load_string($data_items);
        $json3 = json_encode($xml3);
        $array3 = json_decode($json3,TRUE,512,JSON_INVALID_UTF8_IGNORE);
        // echo count($array3["RK7Reference"]["Items"]['Item']);
        echo " = ";
        // echo Product::count();
        echo "\n";

        // FOREACH CATS
            foreach ($array3 as $item) {
                foreach ($item as $i) {
                    if (isset($i["Товар"])) {
                        // var_dump($i);
                            foreach ($i["Товар"] as $i2) {
                                    if (isset($i2['Наименование'])) {
                                        var_dump($i2['Ид']);
                                        // var_dump($i2);
                                        var_dump($i2["Артикул"]);
                                        var_dump($i2['Наименование']);
                                        
                                        var_dump($i2["Категория"]);
                                        // var_dump($i2["Группы"]);

                                        $arrX = array("/uploads/product-chicken-wings.jpg", "/uploads/product-burger.jpg", "/uploads/product-chicken-burger.jpg", "/uploads/product-sushi.jpg", "/uploads/product-pizza.jpg" );
                                        $randIndex = array_rand($arrX, 2);

                                        foreach ($i2["Группы"] as $i3) {
                                            // $gr = $i3["Ид"];
                                            var_dump($i3);
                                            Product::create( array('name' => $i2['Наименование'], 'ident' => $i2['Ид'], 'xml_name' => $i2["Артикул"], "cat_id" => $i3, 'image'=> $arrX[$randIndex[0]] ) );
                                        }


                                        // Product::create( array('name' => $i2['Наименование'], 'ident' => $i2['Ид'], 'xml_name' => $i2["Артикул"], "cat_id" => $i2["Категория"], 'image'=> $arrX[$randIndex[0]] ) );

                                    }
                            }
                    }
                }
            }


    }
}
