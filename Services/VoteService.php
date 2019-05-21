<?php
require_once SITE_ROOT."/Dao/VoteSongDao.php";
require_once SITE_ROOT."/Dao/HistoryVoteDao.php";
require_once SITE_ROOT."/Dao/TopWeekDao.php";
require_once SITE_ROOT."/Dao/TopMonthDao.php";
require_once SITE_ROOT."/Entities/VoteSong.php";
require_once SITE_ROOT."/Entities/TopWeek.php";
require_once SITE_ROOT."/Entities/TopMonth.php";

    class VoteService 
    {
        private $voteSongDao;
        private $historyVoteDao;
        private $topWeekDao;
        private $topMonthDao;

        public function __construct() 
	    {
            $this->voteSongDao = new VoteSongDao();
            $this->historyVoteDao = new HistoryVoteDao();
            $this->topWeekDao = new TopWeekDao();
            $this->topMonthDao = new TopMonthDao();
	    }

        // VOTE SONG FUNCTION

        public function getVoteSongById($id)
        {
            return $this->voteSongDao->getVoteSongBySongId($id);
        }

        public function statistic()
        {
            $list = $this->voteSongDao->getAllVoteSong();
            $n = count($list) - 1;
            for ($i = 0; $i <= $n - 1; $i++)
            {
                for ($j = $i + 1; $j <= $n; $j++)
                {
                    if ($list[$i]->getPoint() < $list[$j]->getPoint())
                    {
                        $tmp = $list[$i];
                        $list[$i] = $list[$j];
                        $list[$j] = $tmp;
                    }
                }
            }
            return $list;
        }

        public function saveTopWeek()
        {
            $l = $this->statistic();
            for ($i = 0; $i <= 9; $i++)
            {
                $tmp = new TopWeek($i+1, $l[$i]->getSong_id());
                $this->topWeekDao->updateTopWeek($tmp);
            }
        }

        public function saveTopMonth()
        {
            $l = $this->statistic();
            for ($i = 0; $i <= 9; $i++)
            {
                $tmp = new TopMonth($i+1, $l[$i]->getSong_id());
                $this->topMonthDao->updateTopMonth($tmp);
            }
        }

        public function getVoteSongTop5()
        {
            $l = array();

            $listWeek = $this->topWeekDao->getAllTopWeek();
            for ($i = 0; $i <= 4; $i++)
            {
                array_push($l, $listWeek[$i]);
            }
            $listMonth = $this->topMonthDao->getAllTopMonth();
            for ($i = 0; $i <= 4; $i++)
            {
                array_push($l, $listMonth[$i]);
            }

            return $l;
        }

        public function getVoteSongTop10()
        {
            $l = array();

            $listWeek = $this->topWeekDao->getAllTopWeek();
            for ($i = 0; $i <= 9; $i++)
            {
                array_push($l, $listWeek[$i]);
            }
            $listMonth = $this->topMonthDao->getAllTopMonth();
            for ($i = 0; $i <= 9; $i++)
            {
                array_push($l, $listMonth[$i]);
            }

            return $l;
        }

        public function addVoteSong($voteSong)
        {
            return $this->voteSongDao->insertVoteSong($voteSong);
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