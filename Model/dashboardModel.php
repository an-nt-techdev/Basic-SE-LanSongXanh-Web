<?php 

require_once SITE_ROOT."/Services/AccountService.php";
require_once SITE_ROOT."/Services/ArtistService.php";
require_once SITE_ROOT."/Services/SongService.php";

class DashboardModel {

    private $song;
    private $artist;
    private $account;

    public function __construct()
    {
        $this->song = new SongService();
        $this->artist = new ArtistService();
        $this->account = new AccountService(); 
    }

    //
    // Song
    //
    public function getAllSong()
    {
        return $this->song->getAllSong();
    }

    public function addSong($song)
    {
        $this->song->addSong($song);
    }

    public function editSong($song)
    {
        $this->song->updateSong($song);
    }

    public function deleteSong($id)
    {
        $this->song->deleteSong($id);
    }


    //
    // Singer
    //
    public function getAllSinger()
    {
        return $this->artist->getAllSinger();
    }
    public function getSingerById($id)
    {
        return $this->artist->getSingerById($id);
    }

    //
    // Composer
    //
    public function getAllComposer()
    {
        return $this->artist->getAllComposer();
    }
    public function getComposerById($id)
    {
        return $this->artist->getComposerById($id);
    }
}

?>