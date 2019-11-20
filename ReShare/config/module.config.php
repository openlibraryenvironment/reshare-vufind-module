<?php

return array (
  'vufind' => 
  array (
    'plugin_managers' => 
    array (
      'recorddriver' => 
      array (
        'factories' => 
        array (
          'ReShare\\RecordDriver\\SolrFolio' => 'ReShare\\RecordDriver\\SolrFolioFactory',
        ),
        'aliases' => 
        array (
          'solrfolio' => 'ReShare\\RecordDriver\\SolrFolio',
        ),
      ),
    ),
  ),
);