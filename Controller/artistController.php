<?php 

    require_once SITE_ROOT."/Services/ArtistService.php";
    $artistService = new ArtistService();
    $singer = $artistService->getAllSinger();
    $composer = $artistService->getAllComposer();

    if ($_GET['page'] == 'singer') require_once SITE_ROOT.'/View/singerView.php';
    else require_once SITE_ROOT.'/View/composerView.php';
?>