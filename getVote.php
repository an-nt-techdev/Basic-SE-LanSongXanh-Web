<?php
    define('SITE_ROOT', __DIR__);
    require_once SITE_ROOT."/Services/VoteService.php";
    require_once SITE_ROOT."/Entities/HistoryVote.php";

    $user = $_GET['user'];
    $point = $_GET['point'];
    $song = $_GET['song'];

    $vote = new VoteService();
    $vote->addHistoryVote(new HistoryVote($user, $song, $point));
    $vote->updateVoteSong($song);

    $voteSong = $vote->getVoteSongById((int)$song);
    echo $voteSong->getPoint();
?>