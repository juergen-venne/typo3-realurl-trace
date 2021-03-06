<?php

/*********************************************************************
* Extension configuration file for ext "realurl_trace".
*
* Generated by ext 26-02-2017 15:21 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Logs for Realurl',
  'description' => 'Logs stack trace when a certain URL gets into the cache',
  'category' => 'services',
  'version' => '1.0.0',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearcacheonload' => 1,
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.4.999',
      'php' => '5.4.0-7.0.999',
      'realurl' => '2.1.5-2.1.999',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'comment' => 'Bug fix release',
  'user' => 'dmitry',
);

?>