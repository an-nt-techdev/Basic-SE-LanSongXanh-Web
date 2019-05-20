<?php 

    require_once SITE_ROOT."/Services/SongService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";
    require_once SITE_ROOT."/Services/VoteService.php";
    require_once SITE_ROOT."/Services/AccountService.php";
    require_once SITE_ROOT."/Model/RankingModel.php";
    require_once SITE_ROOT."/Model/SongModel.php";

    class homeModel {
        private $songService;
        private $artistService;
        private $voteService;
        private $accountService;

        public function __construct()
        {
            $this->voteService = new VoteService();
            $this->artistService = new ArtistService();
            $this->songService =  new SongService();
            $this->accountService =  new AccountService();
        }

        public function getAllPlaylist($Username_id)
        {
            return $this->accountService->getPlaylistByUsernameId($Username_id);
        }

        public function getPlaylistDetail($Playlist_id)
        {
            $result = array();

            $list = $this->accountService->getPlaylistDetailByPlaylistId($Playlist_id);
            for ($i = 0; $i <= count($list)-1; $i++)
            {
                $vs = $this->voteService->getVoteSongById($list[$i]->getSong_id());
                $s = $this->songService->getSongById($list[$i]->getSong_id());
                $singer = $this->artistService->getSingerById($s->getSinger_id());

                $rm = new RankingModel(1, $s->getId(), $s->getNameSong(), $singer->getId(), $singer->getName(), $vs->getPoint());
                array_push($result, $rm);
            }

            return $result;
        }

        // public function getSong()
        // {
        //     $result = array();

        //     $list = $this->songService->getAllSong();
        //     $begin = count($list)-1-5;
        //     $end = count($list)-1;
        //     for ($i = $end; $i >= $begin; $i--)
        //     {
        //         $s = $this->songService->getSongById($list[$i]->getId());
        //         $singer = $this->artistService->getSingerById($s->getSinger_id());

        //         $sm = new SongModel($s->getId(), $s->getNameSong(), $singer->getId(), $singer->getName(), $singer->getImage());
        //         array_push($result, $sm);
        //     }

        //     return $result;
        // }

    }

?>