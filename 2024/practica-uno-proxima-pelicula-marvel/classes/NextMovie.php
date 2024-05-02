<?php

  declare(strict_types=1);

  class NextMovie
  {

    private int $days_until;
    private string $title;
    private string $following_production;
    private string $release_date;
    private string $poster_url;
    private string $overview;

    public function __construct(int $days_until, string $title, string $following_production, string $release_date, string $poster_url, string $overview)
    {
      $this->days_until = $days_until;
      $this->title = $title;
      $this->following_production = $following_production;
      $this->release_date = $release_date;
      $this->poster_url = $poster_url;
      $this->overview = $overview;
    }

    public function getPoster_url()
    {
      return $this->poster_url;
    }

    public function setPoster_url($poster_url)
    {
      $this->poster_url = $poster_url;
      return $this;
    }

    public function getDays_until()
    {
      return $this->days_until;
    }

    public function setDays_until($days_until)
    {
      $this->days_until = $days_until;

      return $this;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function setTitle($title)
    {
      $this->title = $title;

      return $this;
    }

    public function getFollowing_production()
    {
      return $this->following_production;
    }

    public function setFollowing_production($following_production)
    {
      $this->following_production = $following_production;

      return $this;
    }

    public function getRelease_date()
    {
      return $this->release_date;
    }

    public function setRelease_date($release_date)
    {
      $this->release_date = $release_date;

      return $this;
    }

    public function getOverview()
    {
      return $this->overview;
    }

    public function setOverview($overview)
    {
      $this->overview = $overview;

      return $this;
    }

    public function get_until_message(): string {
      return match(true) {
        $this->days_until === 0 => "Hoy se estrena!",
        $this->days_until === 1 => "Manana se estrena!",
        $this->days_until < 7 => "En esta semana se estrena!",
        $this->days_until < 30 => "En este mes se estrena",
        default => "Falta un monton: " . $this->days_until . " dias!!!",
      };
    }

    public static function fetch_and_create_movie(string $url): NextMovie {
      $result = file_get_contents($url);
      $data = json_decode($result, true);
      return new self(
        $data["days_until"],
        $data["title"],
        $data["following_production"]["title"] ?? "Desconocido",
        $data["release_date"],
        $data["poster_url"],
        $data["overview"]
      );
    }

    public function getData () {
      return get_object_vars($this);
    }
  }
