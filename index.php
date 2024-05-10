<?php

class Production
{
  public $title;
  public $language;
  public $vote;

  function __construct(string $_title, string $_language, int $_vote)
  {
    $this->setName($_title);
    $this->setLanguage($_language);
    $this->setVote($_vote);
  }

  public function setName(string $new_title): void
  {
    $this->title = $new_title;
  }

  public function setLanguage(string $new_language): void
  {
    $this->language = $new_language;
  }

  public function setVote(int $vote): void
  {
    if (is_numeric($vote) && $vote > 0 && $vote <= 10) {
      $this->vote = intval($vote);
    } else {
      var_dump('il valore vote non è corretto');
    }
  }
}

class Movie extends Production {
  public $profit;
  public $durartion;

  function __construct(float $_profit, float $_duration)
  {
    $this->setProfit($_profit);
    $this->setDuration($_duration);
  }

  public function setProfit(float $new_profit): void
  {
    if (is_numeric($profit) && $profit >= 0) {
      $this->profit = intval($profit);
    } else {
      var_dump('il valore profit non è corretto');
    }
  }

  public function setDuration(float $duration): void
  {
    if (is_numeric($duration) && $duration > 0) {
      $this->duration = intval($duration);
    } else {
      var_dump('il valore duration non è corretto');
    }
  }
}

class TVSeries extends Production {
  public $numberOfSeasons;

  function __construct(int $_numberOfSeasons)
  {
    $this->setNumberOfSeasons($_numberOfSeasons);
  }

  public function setNumberOfSeasons(int $new_numberOfSeasons): void
  {
    if (is_numeric($numberOfSeasons) && $numberOfSeasons >= 0) {
      $this->numberOfSeasons = intval($numberOfSeasons);
    } else {
      var_dump('il valore numberOfSeasons non è corretto');
    }
  }
}

$production1 = new Production('Hello', 'en', '8');
$production2 = new Production('Ciao', 'it', '4');

// var_dump($production1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>php-oop-1</title>
</head>

<body>
    <div class="container">
        <div class="row p-2">
            <div class="card col-6">
              <h3 class="card-title">
                <?php echo $production1->title; ?>
              </h3>
              <div class="card-body">
                <p>Language:
                  <?php echo $production1->language; ?>
                </p>
                <p>Vote:
                  <?php echo $production1->vote; ?>
                </p>
              </div>
            </div>
            <div class="card col-6">
              <h3 class="card-title">
                <?php echo $production2->title; ?>
              </h3>
              <div class="card-body">
                <p>Language:
                  <?php echo $production2->language; ?>
                </p>
                <p>Vote:
                  <?php echo $production2->vote; ?>
                </p>
              </div>
            </div>
        </div>
    </div>
</body>

</html>