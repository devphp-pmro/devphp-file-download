<?php


namespace Src\devphp;

use Apfelbox\FileDownload\FileDownload;

class Download
{

    /**
     * @param $sourceFolder
     * @param $fileThatWillBeDownloaded
     */
    function downloadExec($sourceFolder, $fileThatWillBeDownloaded){
        $download = FileDownload::createFromFilePath($sourceFolder.$fileThatWillBeDownloaded);
        $download->sendDownload($fileThatWillBeDownloaded);

    }
}