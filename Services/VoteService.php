<?php
require_once SITE_ROOT."/Dao/VoteSongDao.php";
require_once SITE_ROOT."/Dao/HistoryVoteDao.php";
require_once SITE_ROOT."/Entity/VoteSong.php";

    class VoteService 
    {
        private $voteSongDao;
        private $historyVoteDao;

        public function __construct() 
	    {
            $this->voteSongDao = new VoteSongDao();
            $this->historyVoteDao = new HistoryVoteDao();
	    }

        // VOTE SONG FUNCTION

        public function getVoteSongById($id)
        {
            return $this->voteSongDao->getVoteSongBySongId($id);
        }

        public function addVoteSong($voteSong)
        {
            $this->voteSongDao->insertVoteSong($voteSong);
        }

        public function updateVoteSong($id)
        {
            $list = $this->historyVoteDao->getHistoryVoteBySongId($id);
            
            $count = 0;
            $sum = 0;
            foreach ($list as $hv)
            {
                $count++;
                $sum += $hv->getStars();
            }
            $average = $sum/$count;

            $voteSong = new VoteSong($id, floor($average), $average);
            $this->voteSongDao->updateVoteSong($voteSong);
        }

        // HISTORY VOTE FUNCTION

        public function getHistoryVoteByUsernameId($username_id, $song_id)
        {
            return $this->historyVoteDao->getHistoryVoteByUsernameIdAndSongId($username_id, $song_id);
        }

        public function addHistoryVote($historyVote)
        {
            $this->historyVoteDao->insertHistoryVote($historyVote);
        }

        public function deleteHistoryVote($id)
        {
            $this->historyVoteDao->deleteHistoryVote($id);
        }

    }

?>