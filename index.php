

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div id="title"></div>

            <style>
                *{
                    margin: 20px;
                    padding: 20px;
                }
            </style>
        <?php
    $menu = [
        [
            "label" => "delfi framework",
            'url' => 'delfi.lv',

        ],
        [
            'label' => 'more frameworks',
            'items' => [
                [
                    'label' => 'laravel',
                    'url' => 'www.larawel.com',
                ],
                [
                    'label' => 'slim',
                    'url' => 'www.slimframework.com',
                ],
            ],
        ],
        [
            'label' => 'symfony',
            'url' => 'www.symfony.com',
        ],
    ];
        ?>

        <ul>

        <?php
        foreach($menu as $item){
            if($item['items']){
                foreach($item['items'] as $subitem){
                    ?>

                    <li><?=$subitem['label']?>: <a href=""><?=$subitem['url']?></a></li>
             <?php  
                }
        
            }else{
                ?>

                    <li><?=$item['label']?>: <a href=""><?=$item['url']?></a></li>
                 
                 <?php 
            }
            
        }
   
        ?>
    
        </ul>

        <script src="script.js"></script>
        </body>
        </html>
