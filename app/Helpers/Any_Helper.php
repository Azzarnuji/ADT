<?php
namespace App\Helpers;
class Any_Helper{
    private $data = [];
    public function __construct()
    {
        $this->request = \Config\Services::request();
    }
    
    /**
     * Create Meta data
     * @param string $dataValue
     */
    public function createMeta(string $dataValue = null, string $titleRental = null):object
    {
        if($dataValue == null){
            $this->data = [
                'title'=>'ADT Premium Car',
                'meta'=>[
                    [
                        'name'=>'description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
    
                    ],
                    [
                        'name'=>'keywords',
                        'content'=>'Rental mobil terdekat, Rental, Mobil, rental mobil, rental mobil bekasi, ADT, ADTrans, ADT Premuium Car'
                    ],
                    [
                        'name'=>'author',
                        'content'=>'ADT Premium Car'
                    ]
                ],
                'metaProperty'=>[
                    [
                        'value'=>'og:image',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:secure_url',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:width',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:image:height',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:url',
                        'content'=>base_url()
                    ],
                    [
                        'value'=>'og:site_name',
                        'content'=>'ADT Premium Car'
                    ],
                    [
                        'value'=>'og:type',
                        'content'=>'website'
                    ],
                    [
                        'value'=>'og:locale',
                        'content'=>'id_ID'
                    ],
                    [
                        'value'=>'og:title',
                        'content'=>'ADT Premium Car'
                    ],
                    [
                        'value'=>'og:description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
                    ]
                ]
            ];
            return $this;
        }elseif($dataValue == 'rental'){
            $tempTitleRental = $titleRental == "default" || $titleRental == null ? "ADT Premium Car | Rental Mobil" : "ADT Premium Car | Rental Mobil ". ucwords($titleRental);
            $this->data = [
                'title'=>$tempTitleRental,
                'meta'=>[
                    [
                        'name'=>'description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
    
                    ],
                    [
                        'name'=>'keywords',
                        'content'=>'Rental mobil terdekat, Rental, Mobil, rental mobil, rental mobil bekasi, ADT, ADTrans, ADT Premuium Car'
                    ],
                    [
                        'name'=>'author',
                        'content'=>'ADT Premium Car Rental Mobil'
                    ]
                ],
                'metaProperty'=>[
                    [
                        'value'=>'og:image',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:secure_url',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:width',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:image:height',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:url',
                        'content'=>$this->getFullPath()
                    ],
                    [
                        'value'=>'og:site_name',
                        'content'=>"ADT Premium Car | Rental Mobil"
                    ],
                    [
                        'value'=>'og:type',
                        'content'=>'website'
                    ],
                    [
                        'value'=>'og:locale',
                        'content'=>'id_ID'
                    ],
                    [
                        'value'=>'og:title',
                        'content'=>"ADT Premium Car | Rental Mobil"
                    ],
                    [
                        'value'=>'og:description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
                    ]
                ]
            ];
            return $this;
        }elseif($dataValue == 'about'){
            $this->data = [
                'title'=>"ADT Premium Car | Tentang Kami",
                'meta'=>[
                    [
                        'name'=>'description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
    
                    ],
                    [
                        'name'=>'keywords',
                        'content'=>'Rental mobil terdekat, Rental, Mobil, rental mobil, rental mobil bekasi, ADT, ADTrans, ADT Premuium Car'
                    ],
                    [
                        'name'=>'author',
                        'content'=>'ADT Premium Car'
                    ]
                ],
                'metaProperty'=>[
                    [
                        'value'=>'og:image',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:secure_url',
                        'content'=>base_url('assets/images/pt-logo-ad.webp')
                    ],
                    [
                        'value'=>'og:image:width',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:image:height',
                        'content'=>'70'
                    ],
                    [
                        'value'=>'og:url',
                        'content'=>$this->getFullPath()
                    ],
                    [
                        'value'=>'og:site_name',
                        'content'=>"ADT Premium Car | Tentang Kami"
                    ],
                    [
                        'value'=>'og:type',
                        'content'=>'article'
                    ],
                    [
                        'value'=>'og:locale',
                        'content'=>'id_ID'
                    ],
                    [
                        'value'=>'og:title',
                        'content'=>"ADT Premium Car | Tentang Kami"
                    ],
                    [
                        'value'=>'og:description',
                        'content'=>"ADT Premium Car Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Mewah Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya."
                    ]
                ]
            ];
            return $this;
        }
        
    }


    /**
     * Get Meta From createMeta()
     */
    public function getMeta():array
    {
        return $this->data;
    }
    
    /**
     * get Full URL For meta url
     */
    public function getFullPath():string
    {
        $uri = $this->request->getUri();
        $url = $uri->getScheme().'://'.$uri->getHost().'/'.$uri->getPath();
        return $url;
    }
}

// $data = [
        //     'title'=>'DRIS Rental Mobil',
        //     'meta'=>[
        //         [
        //             'name'=>'description',
        //             'content'=>'DRIS Rental Mobil Premium Cepat Dan Gampang Di Jabodetabek'

        //         ],
        //         [
        //             'name'=>'keywords',
        //             'content'=>'Rental mobil terdekat, Rental, Mobil, rental mobil'
        //         ],
        //         [
        //             'name'=>'author',
        //             'content'=>'DRIS Rental Mobil'
        //         ]
        //     ],
        //     'metaProperty'=>[
        //         [
        //             'value'=>'og:image',
        //             'content'=>base_url('assets/images/web1.png')
        //         ],
        //         [
        //             'value'=>'og:image:secure_url',
        //             'content'=>base_url('assets/images/web1.png')
        //         ],
        //         [
        //             'value'=>'og:image:width',
        //             'content'=>'70'
        //         ],
        //         [
        //             'value'=>'og:image:height',
        //             'content'=>'70'
        //         ],
        //         [
        //             'value'=>'og:url',
        //             'content'=>base_url()
        //         ],
        //         [
        //             'value'=>'og:site_name',
        //             'content'=>'DRIS Rental Mobil'
        //         ],
        //         [
        //             'value'=>'og:type',
        //             'content'=>'website'
        //         ],
        //         [
        //             'value'=>'og:locale',
        //             'content'=>'id_ID'
        //         ],
        //         [
        //             'value'=>'og:title',
        //             'content'=>'DRIS Rental Mobil'
        //         ],
        //         [
        //             'value'=>'og:description',
        //             'content'=>'DRIS Rental Mobil Premium Cepat Dan Gampang Di Jabodetabek'
        //         ]
        //     ]
        //     ];