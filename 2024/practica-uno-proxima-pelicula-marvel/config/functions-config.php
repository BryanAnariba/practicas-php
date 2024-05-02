<?php
  declare(strict_types=1);

  function get_data(string $url): array {
    // HttpRequest with curl
    // $ch = curl_init($url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $result = curl_exec($ch);
    // $data = json_decode($result, true);
    // curl_close($ch);

    // HttpRequest with file_get_contents
    $result = file_get_contents($url);
    return json_decode($result, true);
  }

  function get_until_message(int $days): string {
    return match(true) {
      $days === 0 => "Hoy se estrena!",
      $days === 1 => "Manana se estrena!",
      $days < 7 => "En esta semana se estrena!",
      $days < 30 => "En este mes se estrena",
      default => "Falta un monton: " . $days . " dias!!!",
    };
  }

  function renderTemplate(string $template, array $data = []) {
    extract($data);
    require("templates/$template.php");
  }