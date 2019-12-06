<?php

return array (
  'vufind' => 
  array (
    'plugin_managers' => 
    array (
      'recorddriver' => 
      array (
	'delegators' =>
	array (
	  'ReShare\\RecordDriver\\SolrFolio' =>  array('VuFind\\RecordDriver\\IlsAwareDelegatorFactory'),
	),
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
