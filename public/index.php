<?php require_once('../includes/initialize.php'); ?>

<?php $layout_context = "public"; ?>
<?php $active_menu="home"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>


<div id="animate" style='position: relative; top: 100px;'>

<h1 class="text-center">Welcome to <?php echo $logo?></h1>

<!--<h1 class="text-center">Sorry this site is under construction</h1>-->

    <h6 class="text-center" style="position:relative; color:blue;"><a  target="_blank" href="https://www.lumosity.com/app/v4/dashboard">Exercice my brain in Lumonisity
        </a></h6>
    <h6><a href="../Inspinia/index.php">Inspinia</a></h6>



<!--    <div id="scrollcontainerTop" style="position:relative; overflow:hidden; width:100%;">-->
<!--  <span id="scrolltextTop" style="position:absolute; white-space:nowrap">-->
<!---->
<!--  </span>-->
<!--    </div>-->



</div>

<div class="col-md-6 col-md-offset-3">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
        <li data-target="#carousel-example-generic" data-slide-to="9"></li>
        <!--<li data-target="#carousel-example-generic" data-slide-to="11"></li>
        <li data-target="#carousel-example-generic" data-slide-to="12"></li>
        <li data-target="#carousel-example-generic" data-slide-to="13"></li>
-->



<?php

for ($i = 1; $i <= 11; $i++) {

    $c=9+$i;
    echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"{$c}\"></li>";
}



?>

    </ol>

    <!-- Wrapper for slides -->





    <div class="carousel-inner" role="listbox">



        <div class="item active">
           <img src="img/kamy.JPG" alt="tr1" style="width: 100%;height: 100%">
            <div class="carousel-caption">
                kamy is the best
            </div>
        </div>


        <div class="item">
            <img src="img/Kamy/Familly%20m%20bozargue%20mum%20dad.jpg" alt="tr1" >
            <div class="carousel-caption">
                Mum Dad Grandma
            </div>
        </div>


        <div class="item">
            <img src="img/Kamy/jalleh_maman.JPG" alt="ZivaMaman" >
            <div class="carousel-caption">
                Ziva maman
            </div>
        </div>


        <div class="item">
            <img src="img/Kamy/desiree.JPG" alt="Desiree" >
            <div class="carousel-caption">
                Desiree
            </div>
        </div>



        <div class="item">
            <img src="img/Kamy/CaroMichael.jpg" alt="CaroMichael">
            <div class="carousel-caption">
                Caroline & Michael
            </div>
        </div>

    <div class="item">
        <img src="img/Kamy/leiana_kamy.JPG" alt="Kamy Leiana">
            <div class="carousel-caption">
        Kamy & Leiana
    </div>
</div>

        <div class="item">
            <img src="img/admin.JPG" alt="kamy admin" style="width: 100%;height: 100%">
            <div class="carousel-caption">
                Notre informaticien le génie
            </div>
        </div>


        <div class="item">
            <img src="img/Kamy/Shire_Denisa.JPG" alt="Shirel Denisa">
            <div class="carousel-caption">
            Shirel Denisa  Kamy & Leiana
            </div>
        </div>

        <div class="item">
            <img src="img/Kamy/open-01.JPG" alt="Open">
            <div class="carousel-caption">
                Open
            </div>
        </div>

        <div class="item">
            <img src="img/Kamy/Kamran_March2015.jpg" alt="Kamy office">
            <div class="carousel-caption">
                Kamy at the office
            </div>
        </div>






        <?php

        for ($i = 1; $i <= 11; $i++) {

            $c=1556+$i;
            $img="EngDesiree_{$c}.JPG";

            echo "        <div class=\"item\">
            <img src=\"img/Kamy/{$img}\" alt=\"tr1\" style=\"width: 100%;height: 100%\">
            <div class=\"carousel-caption\">
                Fiancaille de desirée
            </div>
        </div>";

        }


        ?>
      <!--  <div class="item">
            <img src="img/photo_transmed_1.jpg" alt="Pablo & car">
            <div class="carousel-caption">
                Pablo et sa voiture
            </div>
        </div>

        <div class="item">
            <img src="img/photo_transmed_2.jpg" alt="transmed 1">
            <div class="carousel-caption">
            Pablo patient 1
            </div>
        </div>

        <div class="item">
            <img src="img/photo_transmed_3.jpg" alt="transmed 2">
            <div class="carousel-caption">
                Pablo patient 2
            </div>
        </div>-->

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</div>


<div id="scrollcontainer" style="position:relative; overflow:hidden; width:100%;">
  <span id="scrolltext" style="position:absolute; white-space:nowrap">
  <h1 class="text-center" style="position:relative; color:blue;">Please come back later, we have great features coming up.</h1>
  <h1 class="text-center" style="position:relative; color:red;">Use contact form to contact me.</h1>

  </span>
</div>



<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>
