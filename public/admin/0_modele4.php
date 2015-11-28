<?php
//defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'rajah_production');
//defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
//require_once LIB_PATH.DS.'config.php';

 require_once('../../includes/initialize.php');
 $session->confirmation_protected_page();
 if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}



require_once LIB_PATH.DS.'src'.DS.'Foundationphp'.DS.'Psr4Autoloader.php';

$loader = new Foundationphp\Psr4Autoloader();
$loader->register();
$loader->addNamespace('Foundationphp', LIB_PATH.DS.'src'.DS.'Foundationphp');

use Foundationphp\Exporter\Csv;
// server user password server
$database = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

$database->set_charset('utf-8');

if ($database->connect_error) {
    $error = $database->connect_error;
} else {
//    $sql = 'SELECT car_id, make, yearmade, mileage, transmission,
//	price, description FROM cars
//	INNER JOIN makes USING (make_id)
//	WHERE yearmade > 2008
//	ORDER BY price';
    $sql = 'SELECT * FROM clients'  ;

    $result = $database->query($sql);
    if ($database->error) {
        $error = $database->error;
    }
}

//function getRow($result) {
//    return $result->fetch_assoc();
//}





try {
    //	$options['suppress'] = 'transmission';
    $options="";
    //	$options['delimiter'] = "\t";
    new Csv($result, 'cars_tab.csv', $options);
} catch (Exception $e) {
    $error = $e->getMessage();
}



// for testing
//
//if (isset($error)){
//    echo $error;
//} else {
//    echo "ok";
//}




