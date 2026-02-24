<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use function App\Config\regiterRoutes;

$app = new App();

regiterRoutes($app);

return $app;
