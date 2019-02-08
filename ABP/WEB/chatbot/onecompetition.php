<?php
include "header.php";
if(!isset($_GET['id']))
{
    header("Location: error.php?error=Id expected&message=The requested page requires an Id");
    exit;
}
$ccm = new CBSDCompetitionManagement;

$competid = intval($_GET['id']);

$rounds = $ccm->getAllRounds($competid);
$tmp = null;
try {
    $tmp = $ccm->getCompetition($competid);

}
catch(Exception $ex) {

    header("Location: error.php?error=Competition not found&message=The requested competition does not exist");
    exit;
}

$participants = $ccm->getAllParticipations($competid);
function getRankName($rank)
{
    if($rank == 1)
        return "1st";
    else if($rank == 2)
        return "2nd";
    else if($rank == 3)
        return "3rd";
    else return "4th";
}
function getStatusName($stat)
{
    if($stat == 0)
        return "Pending";
    else if($stat == 1)
        return "Playing";
    else if($stat == 2)
        return "Voting";
    else return "Complete";
}
if($loggedin)
    include "header.loggedin.php";
else
    include "header.offline.php";
?>
<!-- Main Page -->
<div id="content" role="main">


    <!-- name page with background -->
    <section class="section swatch-black-beige" id="website_main_name">
        <div class="background-media skrollable skrollable-between" style="background-image: url(cbsm/background.jpg); background-size: cover; background-position: 50% 0px;" data-start="background-position: 50% 0px" data-top-bottom="background-position: 50% -200px">
        </div>
        <!--Background Overlay-->
        <div class="background-overlay" style="background-color:rgba(0, 0, 0, 0.2)">
        </div>
        <div class="container">
            <header class="section-header underline">

                <h1 style="font-family:'Agency FB'" class="headline hyper hairline" style="color : rgba(255, 255, 255, 0.7)">ChatBot SmackDown</h1>
            </header>
        </div>

    </section>
    <script type="text/javascript">

        jQuery(document).ready(function() {
            setInterval('refreshOnStateChange()', 2000);
        });
    function refreshOnStateChange()
    {
        recheckCompetition(<?php echo $tmp->Id; ?>,"<?php echo $tmp->Status; ?>");
    }
 </script>
    <?php
    if($tmp->Status != CompetitionStatus::Ready)
    {
    ?>

    <section class="section swatch-beige-black top" id="services">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">

            <header class="section-header ">
                <h1 class="headline super hairline">Games</h1>
                <p class=""> Competition Name : <?php echo $tmp->Name ?></p>
            </header>
            <div class="row-fluid">
                <div class="span12">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Game number </th>
                            <th>Start time</th>
                            <th>Player 1 </th>
                            <th>Player 2</th>
                            <th>Status</th>
                            <th>Winner</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; ?>
<?php foreach($rounds as $round ){ $games = $ccm->getAllGames($round->Id);
    foreach($games as $game) {?>
                        <tr>

                            <td> <?php echo $i ; $i++;?></td>
                            <td> <?php echo $game->Start ?></td>
                            <td><?php $players = $ccm->getAllPlayers($game->Id);
                                $tmp1 = $players[0]->BotId;
                                $player1 = $ccm->getBot($tmp1);
                                echo $player1->BotName; ?>
                            </td>
                            <td>
                                <?php $btmp = $ccm->getAllPlayers($game->Id);
                                $tmp2 = $players[1]->BotId;
                                $player2 = $ccm->getBot($tmp2);
                                echo $player2->BotName; ?></td>

                            <td> <?php echo getStatusName($game->Status); ?></td>
                            <td> <?php $btmp = ($ccm ->getBot($game->WinnerId)); echo $btmp->BotName ?></td>

                            <td><div class="col-lg-12 col-sm-12">
                                    <form action="game.php" method="get">
                                        <input type="hidden" value="<?php echo $game->Id; ?>"  name="id" id="id" >
                                        <input class="btn btn-success " type="submit" value="Visit game" >
                                    </form>


                                </div></td>
                        </tr>
                   <?php     }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>

   <?php } ?>
    <section class="section swatch-black-beige " >


        <div class="container well " style="">

            <header class="section-header ">
                <h1 class="headline super    hairline" style="font-family: 'Agency FB'">Competition structure</h1>
                <p class=""> Competition Name : <?php  echo $tmp->Name ?></p>
            </header>

<div class=" col-lg-12 col-sm-12 ">
    <?php
    if($tmp->Status == CompetitionStatus::Ready)
    {
    ?>
    <h1 class="countdown hyper hairline" data-date="<?php echo $tmp->Start;  ?>">
        <div class="counter-element">
            <span class="counter-days odometer odometer-auto-theme">\</span>
            <b>
                days
            </b>
        </div>
        <div class="counter-element">
            <span class="counter-hours odometer odometer-auto-theme"></span>
            <b>
                hours
            </b>
        </div>
        <div class="counter-element">
            <span class="counter-minutes odometer odometer-auto-theme"></span>
            <b>
                minutes
            </b>
        </div>
        <div class="counter-element">
            <span class="counter-seconds odometer odometer-auto-theme"></span>
            <b>
                seconds
            </b>
        </div>
    </h1>
    <?php }
    else
    {
        $gamesstring = "";
        $resultsstring = "";
                $teamid = 0;

                $rounds = $ccm->getAllRounds($competid);

        $i =0;
        $rnd =0;
    foreach ($participants as $part) {
        $player = $ccm->getBot($part->BotId);
        if($i % 2 == 0)
        $gamesstring = $gamesstring."[\"".$player->BotName."\",";
        else
            $gamesstring = $gamesstring."\"".$player->BotName."\"],\n";

        $i++;
    }
                foreach ($rounds as $key) {$rnd++;
                    $resultsstring = $resultsstring."[";
                    $gpair = 0;
                    $games = $ccm->getAllGames($key->Id);

                    foreach ($games as $game)
                        $resultsstring = $resultsstring."[".$players[0]->Score.", ".$players[1]->Score."],\n";


                    $resultsstring = $resultsstring."],\n";


                }
?>
    <div id="minimal">
        <script type="text/javascript">
            var singleElimination = {


                "teams": [              // Matchups
                    <?php echo $gamesstring; ?>
                ],


                "results": [            // List of brackets (single elimination, so only one bracket)
                    [                     // List of rounds in bracket
                        <?php echo $resultsstring; ?>
                    ]
                ]
            }
            $(function() {
                $('#minimal .demo').bracket({
                    skipConsolationRound: true,
                    init: singleElimination /* data to initialize the bracket with */ });
                $('#minimal .jQBracket').css("left",300+"px");
                $('#minimal .jQBracket').css("top",70+"px");
                $('#minimal .label').css("color","black");
                $('#minimal .jQBracket').css("height",<?php echo $tmp->ParticipantNumber * 50 + 100; ?> +"px");
            })
        </script>
    <div class="demo" style="transform: scale(1.5)">    </div>
</div>
<?php     }
    ?>
            </div></div>
            </section>
    <!-- Service Section -->
    <section class="section swatch-beige-black top" id="services">
        <div class="decor-top">
            <svg class="decor hidden-xs hidden-sm" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L2 60 L4 100 L6 60 L8 100 L10 60 L12 100 L14 60 L16 100 L18 60 L20 100 L22 60 L24 100 L26 60 L28 100 L30 60 L32 100 L34 60 L36 100 L38 60 L40 100 L42 60 L44 100 L46 60 L48 100 L50 60 L52 100 L54 60 L56 100 L58 60 L60 100 L62 60 L64 100 L66 60 L68 100 L70 60 L72 100 L74 60 L76 100 L78 60 L80 100 L82 60 L84 100 L86 60 L88 100 L90 60 L92 100 L94 60 L96 100 L98 60 L100 100 Z" stroke-width="0"></path>
            </svg>
            <svg class="decor visible-xs visible-sm" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L5 60 L10 100 L5 60 L10 100 L15 60 L20 100 L25 60 L30 100 L35 60 L40 100 L45 60 L50 100 L55 60 L60 100 L65 60 L70 100 L75 60 L80 100 L85 60 L90 100 L95 60 L100 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">

            <header class="section-header ">
                <h1 class="headline super hairline"><?php if($tmp->Status == CompetitionStatus::Completed) echo "Rankings"; else echo "Participants"; ?></h1>

            </header>
            <div class="row-fluid">
                <div class="span12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>BotName</th>

                            <th>score</th>

                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if($tmp->Status == CompetitionStatus::Completed){
                            $ranks = $ccm->getAllRankings($competid);
                        foreach ($ranks as $rank){
                            $cuser = $ccm->getBot($rank->BotId);

                            if($cuser->BotActive == true) {

                                ?>
                        <tr>
                                    <td><?php
                                            echo $rank->Rank;?>

                                    </td>
                                    <td><?php echo "$cuser->BotName" ?></td>
                                    <td><?php echo "$cuser->BotScore" ?></td>

                                    <td>
                                        <div class="col-lg-12 col-sm-12">

                                            <div>
                                                <form action="profile.php" method="get">
                                                    <input value='<?php echo "$cuser->Id"; ?>' name="id" id="id" type="hidden">
                                                    <input class="btn btn-success col-lg-8 " type="submit"
                                                           value="Visit profile"/>


                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php                }} }else{

                        foreach ($participants as $part){
                            $cuser = $ccm->getBot($part->BotId);

                            if($cuser->BotActive == true) {

                                ?>
                                <tr>
                                    <td><?php
                                       echo "$cuser->Id" ?>
                                    </td>
                                    <td><?php echo "$cuser->BotName" ?></td>
                                    <td><?php echo "$cuser->BotScore" ?></td>

                                    <td>
                                        <div class="col-lg-12 col-sm-12">

                                            <div>
                                                <form action="profile.php" method="get">
                                                    <input value='<?php echo "$cuser->Id"; ?>' name="id" id="id" type="hidden">
                                                    <input class="btn btn-success col-lg-8 " type="submit"
                                                           value="Visit profile"/>


                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }}}?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>





    <footer class="section swatch-black-beige  section-big-triangle" id="about" role="contentinfo">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-widget widget_categories">
                        <h3 class="sidebar-header">Team members</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Arsslen Idadi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Amine Troudi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Laouini Ahmed
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">Contact us</h3>
                        <ul>
                            <li>
                                <div >
                                    <i class="fa fa-facebook">

                                    </i>
                                </div>
                                <a href="http://facebook.com/ChatBotsm">
                                    facebook.com/ChatBotsm
                                </a>

                            </li>
                            <li>
                                <div >
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <a href="http://twitter.com/cbsm">
                                    twitter.com/cbsm
                                </a>

                            </li>
                            <li>
                                <div >
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <a href="">
                                    INSAT- GL2
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">About Us</h3>
                        <ul>
                            <li>

                                <a href="#">
                                    SDL Team 2016
                                </a>

                            </li>
                            <li>

                                <a href="#">
                                    ALL RIGHTS RESERVED
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </footer>
</div>
<a class="go-top hex-alt" href="javascript:void(0)">
    <i class="fa fa-angle-up"></i>
</a>
<script src="assets/js/packages.min.js"></script>
<script src="assets/js/theme.min.js"></script>
<script type="text/javascript" src="js/jquery.bracket.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bracket.min.css" />
</body>
</html>
