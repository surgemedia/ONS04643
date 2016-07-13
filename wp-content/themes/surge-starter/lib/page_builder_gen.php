<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Page Builder Generator</h1>

<code>
<textarea style="width:100%; height:2000px;">
<?php

function includePart($file,$vars){
        include($file);
        unset($vars);
}



 include('page_builder_parts/head.json') ?>
                    "layouts": [
                        <?php includePart('page_builder_parts/section-meta.json',''); ?>
                        {
                            "key": "574276ebe7e54",
                            "name": "grid-column_two",
                            "label": "Two Columns",
                            "display": "block",
                            "sub_fields": [
                            <?php include('page_builder_parts/section-industry-header.json'); ?>,
                            <?php include('page_builder_parts/grid-column_two.json') ?>,
                            <?php include('page_builder_parts/section-paragraph-with-image.json') ?>
                    ]
                }
            ]
        }
    ],
<?php include('page_builder_parts/foot.json') ?>
</textarea>
</code>


        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    </body>
</html>
                                   