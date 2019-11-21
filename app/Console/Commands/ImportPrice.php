<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Models\Product;
use App\Models\Cat;

class ImportPrice extends Command {



    // php artisan import:import:price
    protected $signature = 'import:price';
    protected $description = 'Price import';
    public function __construct()    {        parent::__construct();    }
    public function handle(){

        echo "Import Prices: ";
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_pricetypes.xml -O public/storage/data_pricetypes.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_prices.xml -O public/storage/data_prices.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');

        $data_prices = Storage::get('public\offers.xml');
        $json2 = json_encode(  simplexml_load_string($data_prices) );
        $array2 = json_decode($json2,TRUE);

        $ii=0;

        // FOREACH CATS
            foreach ($array2 as $item) {
                foreach ($item as $i) {
                    if (isset($i["Предложение"])) {

                        // var_dump($i);


                            foreach ($i["Предложение"] as $i2) {
                                    var_dump($i2["Ид"]);
                                    var_dump($i2["Количество"]);

                                    if (isset($i2['Цены'])) {
                                        // var_dump($i2['Цены']);
                                        foreach ($i2["Цены"] as $i3) {
                                            var_dump($i3['ЦенаЗаЕдиницу']);

                                            $row = Product::find( array('ident' => $i2["Ид"] ) )->first();

                                            if ($row) {
                                                // echo "!!!";
                                                // var_dump($row);

                                                $row->update( array('price' => $i3['ЦенаЗаЕдиницу'], 'price_amount' => $i3['ЦенаЗаЕдиницу'] ) );
                                                $row->save();
                                            }

                                        }
                                        // var_dump($i2['Цены']);
                                        
                            //             // var_dump($i2['Ид']);
                            //             // var_dump($i2["Артикул"]);
                            //             // var_dump($i2['Наименование']);
                            //             // var_dump($i2["Категория"]);

                            //             // $arrX = array("/uploads/product-chicken-wings.jpg", "/uploads/product-burger.jpg", "/uploads/product-chicken-burger.jpg", "/uploads/product-sushi.jpg", "/uploads/product-pizza.jpg" );
                            //             // $randIndex = array_rand($arrX, 2);

                            //             // Product::create( array('name' => $i2['Наименование'], 'ident' => $i2['Ид'], 'xml_name' => $i2["Артикул"], "cat_id" => $i2["Категория"], 'image'=> $arrX[$randIndex[0]] ) );

                                    }
                            }
                    }
                }
            }

        
        echo "\n";
        // всего против загружено
        echo "Product::count ";
        echo Product::count();
        echo "\n";
        // echo "all prices: ".count($array2["RK7Reference"]["Items"]['Item'])." !== ".$ii." uploads";
        echo "\n";
        echo Product::count()-$ii. " product bad prices";
        echo "\n";
    }

}
