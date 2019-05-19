<?php 

    require_once SITE_ROOT."/Services/SongService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";
    require_once SITE_ROOT."/Services/VoteService.php";
    require_once SITE_ROOT."/Model/RankingModel.php";
    require_once SITE_ROOT."/Model/SongModel.php";

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

        public function getTop10()
        {
            $result = array();

            $listTop10 = $this->voteService->getVoteSongTop10();
            for ($i = 0; $i <= 19; $i++)
            {
                $vs = $this->voteService->getVoteSongById($listTop10[$i]->getSong_id());
                $s = $this->songService->getSongById($listTop10[$i]->getSong_id());
                $singer = $this->artistService->getSingerById($s->getSinger_id());

                $rm = new RankingModel($listTop10[$i]->getTop(), $s->getId(), $s->getNameSong(), $singer->getId(), $singer->getName(), $vs->getPoint());
                array_push($result, $rm);
            }

            return $result;
        }

        public function getSong()
        {
            $result = array();

            $list = $this->songService->getAllSong();
            $begin = count($list)-1-5;
            $end = count($list)-1;
            for ($i = $end; $i >= $begin; $i--)
            {
                $s = $this->songService->getSongById($list[$i]->getId());
                $singer = $this->artistService->getSingerById($s->getSinger_id());

                $sm = new SongModel($s->getId(), $s->getNameSong(), $singer->getId(), $singer->getName(), $singer->getImage());
                array_push($result, $sm);
            }

            return $result;
        }

    }

?>