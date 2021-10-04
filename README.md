# File Download is simple

To install the library, run the following command:

``` sh
composer require devphp-pmro/devphp-file-download
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<? php

require __DIR__. '/vendor/autoload.php';

use Src\devphp\Download;
    
require_once __DIR__."/../vendor/autoload.php";

1º - caminho para o arquivo
2º - o aquivo a ser baixado 

$dl = new Download();
$dl->downloadExec(
    $_SERVER['DOCUMENT_ROOT']."/devphp-file-download/exemplo/",
    "file.txt"
);

    
    ?>
```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>
* [Download] - Lib from Apfelbox\FileDownload\FileDownload

License
----

MIT