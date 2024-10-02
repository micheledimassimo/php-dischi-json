<?php
    $columnsNumber = 4;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Dischi JSON</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            PHP Dischi JSON
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main id="app">
            <div class="container">
                <div class="row">
                    <div v-for="disk in disks" class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div >
                                    <img :src="disk.poster" :alt="disk.title" class="w-100">
                                </div>
                                <h3>
                                    {{ disk.title }}
                                </h3>
                                <h4>
                                    {{ disk.author }}
                                </h4>
                                <h5>
                                    {{ disk.year }}
                                </h5>
                                <h6>
                                    {{ disk.genre }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- vue js-->  
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>  
        <!--axios-->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script> 
        <!-- MY js-->      
        <script src="js/scripts.js" ></script>          
    </body>
</html>