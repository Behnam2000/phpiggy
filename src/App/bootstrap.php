<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;

use function App\Config\{regiterRoutes, registerMiddleware};

$app = new App(Paths::SOURCE . "App/container-definitions.php");

regiterRoutes($app);
registerMiddleware($app);

return $app;
