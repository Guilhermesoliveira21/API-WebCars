<?php 


class Category {

    public static function getCategorys() {

        $hostHTTPS = $_SERVER['HTTP_HOST'];

        return [

            [
                'title' => 'Sedans',
                'image' => $hostHTTPS .'/image/sedans.jpg',
                'link' => 'sedans'
            ],
            [
                'title' => 'Hatch',
                'image' => $hostHTTPS.'/image/hatch.jpg',
                'link' => 'hatch'
            ],
            [
                'title' => 'Picapes',
                'image' => $hostHTTPS.'/image/picapes.jpg',
                'link' => 'picapes'
            ],
            [
                'title' => 'SUVs',
                'image' => $hostHTTPS.'/image/suv.jpg',
                'link' => 'suv'
            ],
            [
                'title' => 'Elétricos',
                'image' => $hostHTTPS.'/image/eletricos.webp',
                'link' => 'eletricos'
            ]

        ];

    }

}

?>