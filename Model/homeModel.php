<?php 

    require_once SITE_ROOT."/Services/SongService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";
    require_once SITE_ROOT."/Services/VoteService.php";
    require_once SITE_ROOT."/Model/RankingModel.php";

    class homeModel {
        private $songService;
        private $artistService;
        private $voteService;

        public function __construct()
        {
            $this->voteService = new VoteService();
            $this->artistService = new ArtistService();
            $this->songService =  new SongService();
        }

        public function getTop5()
        {
            $result = array();

            $listTop5 = $this->voteService->getVoteSongTop5();
            for ($i = 0; $i <= 9; $i++)
            {
                $vs = $this->voteService->getVoteSongById($listTop5[$i]->getSong_id());
                $s = $this->songService->getSongById($listTop5[$i]->getSong_id());
                $singer = $this->artistService->getSingerById($s->getSinger_id());

                $rm = new RankingModel($listTop5[$i]->getTop(), $s->getId(), $s->getNameSong(), $singer->getId(), $singer->getName(), $vs->getPoint());
                array_push($result, $rm);
            }

            return $result;
        }

    }

?>