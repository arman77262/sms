<?php
    require_once "header.php";
?>
            <div class="col-sm-12">
                <div class="containt">

                    <?php

                        if (isset($_GET['page'])){
                            $page = $_GET['page'].'.php';
                        }else{
                            $page = "dashboard.php";
                        }


                        if (file_exists($page)){
                            require_once $page;
                        }else{
                            require_once '404.php';
                        }
                    ?>

                </div>
            </div>

            

             
            
        <?php
            require_once "footer.php";
        ?>