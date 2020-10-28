<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-160-120-28.compute-1.amazonaws.com');
$CFG->dbname    = getenv('d2nisbejsvo5ls');
$CFG->dbuser    = getenv('aoznrdmpcrotxd');
$CFG->dbpass    = getenv('95e81c51c3fbd5a286297e1ee76d493df04e666c570b224cd4f96f9692025721');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://b8couponm.herokuapp.com,');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
