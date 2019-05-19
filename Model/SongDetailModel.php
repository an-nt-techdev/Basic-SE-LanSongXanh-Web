<?php

    class SongDetailModel
    {
        private $song_id;
        private $nameSong;
        private $link;
        private $singer_id;
        private $singer; 
        private $singerDetail;   
        private $imageSinger;
        private $point;

        public function __construct($Song_id, $NameSong, $Link, $Singer_id, $Singer, $SingerDetail, $ImageSinger, $Point)
	    {
            $this->song_id = $Song_id;
            $this->nameSong = $NameSong;
            $this->link = $Link;
            $this->singer_id = $Singer_id;
            $this->singer = $Singer;
            $this->singerDetail = $SingerDetail;
            $this->imageSinger = $ImageSinger;
            $this->point = $Point;
        }
        
        public function getImageSinger()
        {
            return $this->imageSinger;
        }

        public function getSingerDetail()
        {
            return $this->singerDetail;
        }

        public function getLink()
        {
            return $this->link;
        }

        public function getNameSong()
        {
            return $this->nameSong;
        }

        public function getSong_id()
        {
            return $this->song_id;
        }

        public function getSinger_id()
        {
            return $this->singer_id;
        }

        public function getSinger()
        {
            return $this->singer;
        }

        public function getPoint()
        {
            return $this->point;
        }

    }

?>