<?php 

    require_once SITE_ROOT.'/Services/SearchService.php';

    $search = strtoupper($_GET['search']);
    $searchService = new SearchService();
    $list = $searchService->getAllSong();
    $rs = array();

    for ($i = 0; $i <= count($list)-1; $i++)
    {
        if (strpos(strtoupper($list[$i]->getNameSong()), $search)!==false)
         array_push($rs, $list[$i]);
    }

    //echo count($rs);
    //echo $search;

    require_once SITE_ROOT.'/View/search.php';
?>