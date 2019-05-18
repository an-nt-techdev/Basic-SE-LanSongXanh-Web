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
        $this->song->insertSong($song);
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



    //
    // Composer
    //


}

?>