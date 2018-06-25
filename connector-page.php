<?php
/**
 * Created by PhpStorm.
 * User: f.wehrhausen
 * Date: 15.06.2018
 * Time: 08:47
 */

include_once('./inc/header.php');

//Logik

$page = $_GET["page"];
$action = $_POST["cmd"];

?>


    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h2>Connector-Status:</h2>
                <?php
                    if (!empty($action)){
                        #ToDo
                        //nur zum testen
                        echo "<b>Folgende Aktion wurde gewählt: <span style=\"color:green\">".$action."</span><b></b><br><br>";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="backlog-info">
                    <button class="btn btn-connector">BACKLOG:INFO</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="backlog-process">
                    <button class="btn btn-connector">BACKLOG:PROCESS</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="process-product">
                    <button class="btn btn-connector">PROCESS:PRODUCT</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="process-stock">
                    <button class="btn btn-connector">PROCESS:STOCK</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector last-form" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="process-order">
                    <button class="btn btn-connector">PROCESS:ORDER</button>
                </form>
            </div>

            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="swclearcache">
                    <button class="btn btn-connector">SW:CACHE:CLEAR</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="swmediacleanup">
                    <button class="btn btn-connector">SW:MEDIA:CLEANUP</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="process-order-all">
                    <button class="btn btn-connector-red">PROCESS:ORDER --all</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="category-all">
                    <button class="btn btn-connector-red">CATEGORY --all</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form class="form-connector last-form" method="POST" action="?page=connector">
                    <input type="hidden" name="cmd" value="cleanup">
                    <button class="btn btn-connector-red">CLEANUP</button>
                </form>
            </div>
        </div>
        <div class="clear"></div>

        <br>

        <pre>Wait for your command...</pre>

        <div class="colClear"></div>

    </div>
    </div>
    </div>

<?php

include_once('./inc/footer.php');