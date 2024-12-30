<?php

class NextMovie
{
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview
    ) {}


    public function get_until_message(): string
    {
        return match (true) {
            $this->days_until === 0 => "Se estrena hoy",
            $this->days_until === 1 => "Se estrena mañana",
            $this->days_until < 7 => "Se estrena esta semana",
            default => "Faltan $this->days_until días para que se estrene",
        };
    }

    public static function get_and_create_next_movie(string $apiUrl): NextMovie
    {
        $data = self::get_data_from_api($apiUrl);
        return new NextMovie(
            $data['title'],
            $data['days_until'],
            $data['following_production']['title'] ?? 'unknown',
            $data['release_date'],
            $data['poster_url'],
            $data['overview']
        );
    }

    private static function get_data_from_api(string $apiUrl): array
    {
        $response = file_get_contents($apiUrl);
        return json_decode($response, true);
    }

    public function get_data(): array
    {
        return [
            'title' => $this->title,
            'days_until' => $this->days_until,
            'following_production' => $this->following_production,
            'release_date' => $this->release_date,
            'poster_url' => $this->poster_url,
            'overview' => $this->overview,
        ];
    }
}
