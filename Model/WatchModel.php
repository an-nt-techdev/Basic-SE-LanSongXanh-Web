<?php 

    require_once SITE_ROOT."/Services/SongService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";
    require_once SITE_ROOT."/Services/VoteService.php";
    require_once SITE_ROOT."/Model/SongDetailModel.php";
    require_once SITE_ROOT."/Model/SongModel.php";

    class WatchModel {
        private $songService;
        private $artistService;
        private $voteService;

        public function __construct()
        {
            $this->voteService = new VoteService();
            $this->artistService = new ArtistService();
            $this->songService =  new SongService();
        }

        public function getSongDetail($id)
        {
            $s = $this->songService->getSongById($id);
            $singer = $this->artistService->getSingerById($s->getSinger_id());
            $vs = $this->voteService->getVoteSongById($id);
            $sdm = new SongDetailModel($s->getId(), $s->getNameSong(), $s->getLink(), $singer->getId(), $singer->getName(), $singer->getDetail(), $singer->getImage(), $vs->getPoint());

            return $sdm;
        }

        public function getSongDetail1($id)
        {
            $s = $this->songService->getSongById($id);
            $composer = $this->artistService->getComposerById($s->getComposer_id());
            $vs = $this->voteService->getVoteSongById($id);
            $sdm = new SongDetailModel($s->getId(), $s->getNameSong(), $s->getLink(), $composer->getId(), $composer->getName(), $composer->getDetail(), $composer->getImage(), $vs->getPoint());

            return $sdm;
        }

        public function getSong()
        {
            $result = array();

            $list = $this->songService->getAllSong();
            $begin = count($list)-1-13;
            $end = count($list)-1-6;
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