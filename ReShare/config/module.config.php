<?php

$config = [
  'vufind' => [
    'plugin_managers' => [
      'recorddriver' => [
        'delegators' => [
          'ReShare\\RecordDriver\\SolrFolio' =>  ['VuFind\\RecordDriver\\IlsAwareDelegatorFactory'],
        ],
        'factories' => [
          'ReShare\\RecordDriver\\SolrFolio' => 'ReShare\\RecordDriver\\SolrFolioFactory',
        ],
        'aliases' => [
          'solrfolio' => 'ReShare\\RecordDriver\\SolrFolio',
        ],
      ],
    ],
  ],
];

return $config;
