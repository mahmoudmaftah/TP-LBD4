<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="cont">
        <div class="container">
            exercice 1 <br> <br>
            let's coonsider the following array

            <?php
                $arr = array(1, 1, 3, 4, 5, 1, 1, 7, 8, 5, 4, 5, 5, 5, 9, 9, 9, 9);
                echo "<br>";

                for($i = 0; $i < count($arr); $i++){
                    echo $arr[$i].", ";
                }

                echo "<br>";
                sort($arr);
                echo "after having sorted the array<br>";

                for($i = 0; $i < count($arr); $i++){
                    echo $arr[$i].", ";
                }

                echo "<br>let's now remove the duplicates:<br>";

                $o = count($arr);
                for($j = 0; $j < $o-1; $j++){
                    if($arr[$j] == $arr[$j +1]){
                        unset($arr[$j]);
                    }
                    
                }
                foreach($arr as $e){
                    echo "$e".", ";
                }

            ?>
        </div>


        <div class="container">
            Exercice 2:
            <br>

            <?php
                $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                    'Octobre', 'Novembre', 'Décembre');

                
                echo "<br>By using the for loop: <br><br>";
                for($i = 1; $i <= count($moisFr); $i++ ){
                    echo $i." _ ".$moisFr[$i]."<br>";
                }


                echo "<br>By using the foreach function: <br><br>";
                $j = 1;
                foreach($moisFr as $val){
                    
                    echo $j." _ ".$val."<br>";
                    $j++;
                }


                echo "<br>Displaying the actual month using the considered array:<br><br>";
                echo $moisFr[intval(date('m'))];


                echo "<br>On a remplacé l'ancien tableau par le nouveau, les indices entre 7 et 13 ne sont plus reconnus et ensuite ceux entre 13 et 17 le sont.";

                $moisFr2 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre',
                    'Octobre', 'Novembre', 'Décembre');

                foreach($moisFr2 as $key => $val){
                    echo "$val";
                }
            ?>
        </div>


        <div class="container">

            Exercice 3
            <br>
            <?php
                $notes = array(13, 14, 11, 18, 17, 19, 12, 20, 10, 8, 19, 19, 9, 17, 20);

                function comp20(array $a){
                    $i = 0;
                    foreach($a as $val){
                        if($val == 20 ){
                            $i++;
                        }
                    }
                    return $i;
                }

                function validé(array $a){
                    $i = 0;
                    foreach($a as $val){
                        if($val > 10 ){
                            $i++;
                        }
                    }
                    return $i;
                }

                function display(array $a){
                    foreach($a as $e){
                        echo " | ".$e;
                    }
                    echo " |";
                }

                function mean(array $a){
                    $p=0;
                    foreach($a as $val){
                        $p+=$val;
                    }
                    return $p/count($a);
                }


                function retrieve(array $a,  int $b){
                    for($u = 0; $u < count($a); $u++){
                        if($a[$u] == $b){
                            return $u;
                        }
                    }
                    return "non trouvé";
                    
                }

                function trier(array $a){
                    for($i = 0; $i < count($a); $i++){
                        $u = $i;
                        for($j = $i; $j < count($a); $j++){
                            if($a[$u] > $a[$j]){
                                $u = $j;
                            }
                        }
                        $z = $a[$i];
                        $a[$i] = $a[$u];
                        $a[$u] =  $z;
                    }

                    return $a;
                }
                

                

                echo "<br>1. voici tous les elements de votre tableau: <br>";
                display($notes);

                echo "<br>2. la note moyenne est :".mean($notes);

                echo "<br>3. il y'a  ".validé($notes)." notes superieures strictement a 10";


                echo "<br>4. il y'a  ".comp20($notes)." occurences du nombre 20 dans votre liste de notes";

                echo "<br>5. en utilisant la fonction 'trier' sur le tableau notes on recupere le tableau suivant <br>";
                display(trier($notes));

                echo "<br>6. l'indice de l'element que vous avez entré est   ".retrieve($notes, 20)." ";

            ?>
        </div>

        <div class="container">
            exercice 4

            <br>

            <?php
                echo "<br>on considere le tableau suivant : <br>";
                $arr = array(13, 140, 141, 318, 197, 189, 112, 20, 130, 8, 192, 19, 9, 317, 210);

                display($arr);

                function rtrier(array $a){
                    for($i = 0; $i < count($a); $i++){
                        $u = $i;
                        for($j = $i; $j < count($a); $j++){
                            if($a[$u] < $a[$j]){
                                $u = $j;
                            }
                        }
                        $z = $a[$i];
                        $a[$i] = $a[$u];
                        $a[$u] =  $z;
                    }

                    return $a;
                }
                

                echo "<br>Apres avoir trié le tableau de facon ascendante on obtint :<br>";

                
                display(rtrier($arr));

                


            ?>
        </div>


        <div class="container">
            Exercice 5 <br> <br>

            

            <div>
                <div class="title">
                    tableau de couleurs
                </div>
                <div class="tab-coul">

                    <?php
                        $tab = array( "Yellow", "Blue", "Red", "Purple", 
                        "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet");

                        foreach($tab as $color){
                            echo '<div style = "background-color:'.$color.'" class ="re"></div>';
                        }

                        echo "<br> ";
                    ?>



                </div>

                <form method="post">
                    2. Entrez la couleur en question si elle existe son indice sera retourné notez bien que (Blue =! blue ) :
                    <br>
                    <div class="flex">
                        <input type="text" name="find" id="test" /><br/>
                        <input type="submit" name="" id="">
                    </div>
                </form>

                <?php

                    function testfun()
                    {
                        echo "Your test function on button click is working";
                    }

                    if(array_key_exists('find',$_POST)){
                        $a = $_POST['find'];
                        if(in_array($a, $tab)){
                            $p = array_search($a, $tab) + 1;
                            echo "This color exists at index $p";
                        } else{
                            echo "the color you just entered doesn't exist in this tab.";
                        }
                    }

                ?>
            </div>

           


        </div>

        <div class="container">
            Exercice 6:

            <?php

                $emails = array("mamhoud@gmail.com", "mehdi@gmail.ma", "mamhoud@gmail.com", "mehdi@gmail.com", "mamhoud@gmail.fr", "rayan@gmail.com", "mamhoud@gmail.fr");
                   
                echo "<br>On va utiliser la fonctioon explode sur notre liste d'adresses<br>";
                $p = array();
                foreach($emails as $val){
                    $temp = explode(".", $val)[1];
                    if( array_key_exists($temp, $p)){
                        $p[$temp] ++;
                    }
                    else{
                        $p[$temp] = 1;
                    }
                }

                foreach($p as $key => $val){
                    echo "the domain name : _ $key _ appears $val times.<br>";
                }
                
            ?>


        </div>

        
    </div>
 
    <div class="cont">
        <div class="container">
                Exercice 1:

                <br>1. Initialisation di tableau.

                <?php
                    $arr = array("mahmoud" => 19, 
                                "yahya" => 17,
                                "mehdi" => 19,
                                "abdo" => 29,
                                "mourad" => 30);

                    
                echo "<br>2. Affichage du contenu du tableau : <br>";
                foreach($arr as $key => $val){
                    echo "$key a $val ans.<br>";
                } 

                ?>

                2. Affichage en utilisant les balises table.
                <table border="1">
                    <?php
                        $arr = array("mahmoud" => 19, 
                        "yahya" => 17,
                        "mehdi" => 19,
                        "abdo" => 29,
                        "mourad" => 30);

                        foreach($arr as $key => $val){
                            echo '<tr>';
                            
                            echo '<td>'.$key.'</td>';
                            echo '<td>'.$val.'</td>';

                            echo '</tr>';
                        }
                    ?>
                </table>
        </div>

        <div class="container">
                Exercice 2:

                <?php
                    $tab=array("PHP"=>"http://www.php.net",
                    "MySQL"=>"http://www.mysql.org",
                    "SQLite"=>"http://www.sqlite.org",
                    "HTML"=>"https://www.w3schools.com/html/default.asp",
                    "CSS"=>"https://www.w3schools.com/css/default.asp");
                    echo "<br>1. On va utiliser la fonction rand() pour retrouver une clef aleatoire du tableau et ensuite retourner la valeur correspondante: <br>";
                    $z = array_rand($tab);
                    echo $z."  =>  $tab[$z]"; 
                ?>
        </div>

        <div class="container">
                Exercice 3:

                <?php

                echo "<br>1. Initialisation du tableau : <br>";
                    $tab = array("ahmed" => 14,
                    "Joudia" => 19,
                    "Samir" => 14,
                    "Yasser" => 14.5,
                    "Aya" => 12,
                    "Ilham" => 16,
                    "Yassine" => 17,
                );

                echo "2. affichage des elements du tableau en utilisant le format specifié :<br>";
                foreach($tab as $key => $val){
                    echo "Nom : $key, note = $val<br>";
                }

                echo "3. Affichage du tableau sous la forme demandée :";

                echo '<table class="repo" border="1">';
                echo '<tr><th>Nom</th><th>Note</th></tr>';
                foreach($tab as $key => $val){
                    echo '<tr>';
                    
                    echo '<td>'.$key.'</td>';
                    echo '<td>'.$val.'</td>';

                    echo '</tr>';
                }
                echo '</table>';


                $i = array_search(max($tab), $tab);
                echo "4. Affichage du nom de l'etudiant ayant la note la plus élevée : $i<br>";


                $i = array_search(min($tab), $tab);
                echo "5. Affichage du nom de l'etudiant ayant la note la plus basse : $i<br>";


                $i = number_format(mean($tab), 2, ".", " ");
                echo "6. Affichage de la note moyenne de la classe : $i<br>";

                ?>

                
        </div>

        <div class="container">
                Exercice 3:
                Affichage de la table de multiplication sous format HTML:

                <table border="1" class="spe">

                <?php

                    echo '<tr>';
                    echo '<td class="ar3"></td>';
                    for($k = 2; $k <= 10; $k++){
                        echo '<td class="ar3">'.$k.'</td>';
                    }
                    echo '</tr>';

                    
                    for($i = 2; $i<=10; $i++){
                        if($i%2 == 0){
                            echo '<tr>';

                            echo '<td class="ar3">'.$i.'</td>';
                            for($j = 2; $j<= 10; $j++){
                                echo '<td class="ar1">'.($j * $i).'</td>';
                            }
                            echo '</tr>';

                        }
                        else{

                            echo '<tr>';

                            echo '<td class="ar3">'.$i.'</td>';
                            for($j = 2; $j<= 10; $j++){
                                echo '<td class="ar2">'.($j * $i).'</td>';
                            }
                            echo '</tr>';

                        }
                        

                    }
                    ?>


                </table>
                
        </div>

        <div class="container">
                Exercice 5:
                <?php

                    $capitales = array("Maroc" => "Rabat" , "Allemagne" => "Berlin" , "Serbie" => "Belgrade" , "Brésil" => "Brasilia" , "Slovaquie" => "Bratislava" , "Italie" => "Rome" , "Venezuela" => "Caracas" , "Moldavie" => "Chisinau" , "Guyana" => "Georgetown" , "Viêt Nam" => "Hanoï" , "Zimbabwe" => "Harare" , "Cuba" => "La Havane" , "Pays-Bas" => "LaHaye" , "Finlande" => "Helsinki" );

                    echo "<br>1. affichage des elements du tableau en utilisant le format specifié :<br>";
                    foreach($capitales as $key => $val){
                        echo "la capitale de :  $key, est : $val<br>";
                    }

                    echo "<br>2. affichage du tableau sous format Table : ";

                    echo '<table class="repo" border="1">';
                    echo '<tr><th>Pays</th><th>capitale</th></tr>';
                    foreach($capitales as $key => $val){
                        echo '<tr>';
                        
                        echo '<td>'.$key.'</td>';
                        echo '<td>'.$val.'</td>';

                        echo '</tr>';
                    }
                    echo '</table>';


                ?>


                <form method="post">
                    2. Entrez la ville dont vous voulez retrouver la capitale :
                    <br>
                    <div class="flex">
                        <input type="text" name="test" id="test" /><br/>
                        <input type="submit" name="" id="">
                    </div>
                </form>

                <?php

                    

                    if(array_key_exists('test',$_POST)){
                        $a = $_POST['test'];
                        if(array_key_exists($a, $capitales)){
                            
                            echo "La capitale du pays que vous vener d'entrer est :  $capitales[$a]";
                        } else{
                            echo "Ce pays n'est pas pris en charge par notre systeme.";
                        }
                    }

                ?>
        </div>

        

        <div class="container">
                Exercice 6: <br>

                <?php
                    $tab = array(
                        "WEB" => array("PHP" => array("https://www.php.net/", "*****"),
                                        "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
                                        "JavaScript" => array("https://www.javascript.com/", "**"),
                                        "CSS" => array("https://www.w3schools.com/css/", "****"),
                    ),
                        "DB" => array("MySQL" => array("https://www.mysql.com/", "*****"),
                                        "PostgreSQL" => array("https://www.postgresql.org/", "*****"),
                                        "Oracle" => array("https://www.oracle.com/", "****"),
                                        "DB2" => array("https://www.ibm.com/products/db2", "****"),
                    )
                );

                echo "1. Declaration du tableau : <br>";
                echo "2. Affichage des sites recommandés: ";

                echo '<br>';
                foreach($tab as $key => $value){
                    echo '<span class="main">'.$key.'</span>';
                    echo '<br>';
                    foreach($value as $pey => $pal){
                        echo $pey.', ';
                    }
                    echo '<br>';
                }

                echo '3. Afficher les sites Triés par Avis : <br>';

                foreach($tab as $key => $value){
                    echo '<span class="main">'.$key.'</span>';
                    echo '<br>';
                    
                    foreach($value as $pey => $pal){
                        if(strlen($pal[1]) == 5){
                            echo $pey.', ';

                        }
                    }

                    foreach($value as $pey => $pal){
                        if(strlen($pal[1]) == 4){
                            echo $pey.', ';

                        }
                    }

                    foreach($value as $pey => $pal){
                        if(strlen($pal[1]) == 3){
                            echo $pey.', ';

                        }
                    }

                    foreach($value as $pey => $pal){
                        if(strlen($pal[1]) == 2){
                            echo $pey.', ';

                        }
                    }

                    foreach($value as $pey => $pal){
                        if(strlen($pal[1]) == 1){
                            echo $pey.', ';

                        }
                    }
                
                    echo '<br>';
                }



                ?>
        </div>

        <div class="container">
                Exercice 7:

                
                    <?php
                        
                        $codes = array("Et123" => array("AB", "AC", 17),
                                        "Et676" => array("BC", "BD", 12),
                                        "Et998" => array("CD", "CE", 9),
                                        "Et764" => array("DE", "DF", 16.5),);

                        echo "<br>1. affichage de chaque etudiant repere par son code :<br>";

                        foreach($codes as $key => $val){
                            echo "Code : ".$key." Nom : ".$val[0]." Prenom : ".$val[1]." Moyenne : ".$val[2]."<br>";
                        }

                        echo "<br>2. affichage de l'etudiant ayant la note la plus élevée :<br>";

                        $indx = "Et123";
                        foreach($codes as $key => $val){
                            if($val[2] > $codes[$indx][2]){
                                $indx = $key; 
                            }
                        }

                        echo "Code : ".$indx." Nom : ".$codes[$indx][0]." Prenom : ".$codes[$indx][1]." Moyenne : ".$codes[$indx][2]."<br>";



                        echo "<br>3. affichage de l'etudiant ayant validde de justesse :<br>";


                        $indx = 0;
                        foreach($codes as $key => $val){
                            if($val[2] >= 10){
                                $indx = $key;
                                break;
                            }
                        }
                        if($indx == 0){
                            echo "aucun Etudiant n'a Validé.";
                        }
                        else{

                            foreach($codes as $key => $val){
                                if( $val[2] > 10 and ($val[2] < $codes[$indx][2])){
                                    $indx = $key; 
                                }
                            }
                            echo "Code : ".$indx." Nom : ".$codes[$indx][0]." Prenom : ".$codes[$indx][1]." Moyenne : ".$codes[$indx][2]."<br>";

                        }
                        

                        echo "<br>3. Affichage des nnoms des etudiants n'ayant pas validé l'année : <br>";
                        foreach($codes as $key => $val){
                            if($val[2] < 10){
                                echo "$key, ";
                            }
                        }





                        ?>
        </div>

        <div class="container">
                Exercice 8:

                <?php

                    $gen = array("Et123" => array("AB", "AC", array("module1" => 2,
                                                                        "module2" => 2,
                                                                        "module3" => 2,
                                                                        "module4" => 12,
                                                                        "module5" => 12,
                                                                        "module6" => 12,
                                                                        "module7" => 2)),
                                    "Et676" => array("BC", "BD", array("module1" => 2,
                                                                        "module2" => 5,
                                                                        "module3" => 5,
                                                                        "module4" => 6,
                                                                        "module5" => 8,
                                                                        "module6" => 8,
                                                                        "module7" =>2)),
                                    "Et998" => array("CD", "CE", array("module1" => 17,
                                                                        "module2" => 17,
                                                                        "module3" => 2,
                                                                        "module4" => 0,
                                                                        "module5" => 0,
                                                                        "module6" => 2,
                                                                        "module7" => 2)),
                                    "Et764" => array("DE", "DF", array("module1" => 2,
                                                                        "module2" => 16,
                                                                        "module3" => 16,
                                                                        "module4" => 13,
                                                                        "module5" => 13,
                                                                        "module6" => 2,
                                                                        "module7" => 9)),);

                    echo "<br>1. Declarration et initialisation du tableau : (Notez bien que chaque etudiannt a 7 modules au lieu de 16 pour conserveer l'aspect esthetique du document.)";
                    //pour Eviter de trop charger le document on s'est contenté de 7 modules au lieu de 16

                    echo "<br>2. Afficher le module ou un etudiant donné a eu la meilleur note et ou il a eu la note max : <br> ";


                    foreach($gen as $key => $val){
                        
                        echo "pour l'eleve : $key   :  ";

                        $min = "module1";
                        $max = "module1";
                        foreach($val[2] as $pey => $pal){
                            if($pal > $val[2][$max]){
                                $max = $pey;
                            }
                            if($pal < $val[2][$min]){
                                $min = $pey;
                            }
                        }
                        $z = $val[2];
                        echo "meilleure performannce : $z[$max], pire performannce : $z[$min] <br>";

                    }



                    echo "<br>3. Afficher la note max et min pour chaque module : <br> ";


                        

                    for($i = 0; $i < count($gen["Et123"][2]); $i++){
                        $o = $i+1;
                        echo "pour le module : $o   :  "; 
                        $max = 0;
                        $min = 0;
                        $name = "module".$o;
                        foreach($gen as $key => $val){
                            if($val[2][$name] > $max){
                                $max = $val[2][$name];
                            }
                            if($val[2][$name] < $min){
                                $min = $val[2][$name];
                            }
                        }

                        echo "la note max est : ".$max;
                        echo "la note min est : ".$min."<br>";
                        
                    }
                        
                    




                    echo "<br>4. Afficher la meyenne de chaque etudiant et dire s'il a validé son année ou pas : <br> ";


                    foreach($gen as $key => $val){
                        
                        echo "pour l'eleve : $key   :  ";

                        $cum = 0;
                        foreach($val[2] as $pey => $pal){
                            $cum += $pal;
                        }
                        $z = $cum / count($val[2]);
                        echo "la moyenne de cet eleve est $z <br>";
                        if($z>10){
                            echo "     Cet eleve il passe l'annee<br>";
                        }else{
                            echo "     Cet eleve va repasser l'annee<br>";
                        }
                    }

                        
                ?>
        </div>

    </div>

    

</body>

<style>

    *{
        box-sizing:border-box;
    }

    .main{
        font-weight: bold
    }

    .cont{
        width:1000px;
        background-color:green;
        display:flex;
        justify-content:center;
        flex-wrap: wrap;
        border:1px solid;
        margin-top:20px;

    }

    .ar1{
        background-color:yellow;
    }
    .ar2{
        background-color:orange;

    }
    .ar3{
        background-color:orangered;
        font-weight:bold;

    }

    .spe td{
        width: 50px;
        height:20px;
        text-align:center;
    }

    .repo{
        width:200px;
        border-collapse: collapse;
        text-align:center;
    }
    .container{
        border: black solid;
        width: 600px;
        margin: 20px;
        padding: 20px;
        background-color: white

    }

    body{
        display:flex;
        align-items:center;
        flex-wrap: wrap;
        flex-direction:column;

    }


    .tab-coul{
        display:flex;
        flex-wrap:wrap;
        width:100%;
        border:2px solid;

    }

    .re{
        height:30px;
        border: 1px solid white;
        width:20%;
    }

    .title{
        text-align:center;
    }
    .flex{
        display:flex;
        flex-direction:column;
        align-items:center;
    }
    
</style>
</html>