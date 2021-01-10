<?php
  $song = [
    'success' => 'true',
    'response' => [
      [
        'poster' => 'img/9fc3e897716850c2b8911c724c1e2635.1000x1000x1.jpg',
        'title' => 'On the Corner',
        'author' => 'Gemitaiz',
        'year' => '2014',
        'genre' => 'rap'
      ],
      [
        'poster' => 'img/Progetto-senza-titolo-min-2-768x576.jpg',
        'title' => 'Veleno 7',
        'author' => 'Madman ft Gemitaiz',
        'year' => '2019',
        'genre' => 'rap'
      ],
      [
        'poster' => 'img/R-238369-1490362449-5582.jpeg.jpg',
        'title' => 'all eyez on me',
        'author' => '2Pac',
        'year' => '1992',
        'genre' => 'Hip-hop'
      ],
      [
        'poster' => 'img/_cosang.jpg',
        'title' => 'A vita bon',
        'author' => 'Co Sang',
        'year' => '2005',
        'genre' => 'hip-hop'
      ],
      [
        'poster' => 'img/scampia.jpg',
        'title' => 'Dori me',
        'author' => 'Deborah De Luca',
        'year' => '2020',
        'genre' => 'Teckno'
      ],
      [
        'poster' => 'img/28941757_350_350.jpg',
        'title' => 'Malammor',
        'author' => 'Franco Ricciardi',
        'year' => '2015',
        'genre' => 'Neomelodico-Napoletano'
      ],
      [
        'poster' => 'img/download.jpg',
        'title' => 'Simme Nuje',
        'author' => 'Niko Pandetta',
        'year' => '2018',
        'genre' => 'Neomelodico-Napoletano'
      ],
    ]
  ];
  //var_dump($song);
  header('content-type: application/json');
  header('access-control-allow-origin: *');
  echo json_encode($song);
 ?>
