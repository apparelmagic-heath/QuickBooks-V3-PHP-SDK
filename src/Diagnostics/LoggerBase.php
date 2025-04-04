<?php
namespace QuickBooksOnline\API\Diagnostics;

use QuickBooksOnline\API\Core\CoreConstants;
use AllowDynamicProperties;

/**
 * This file contains an interface for Logging.
 */
#[AllowDynamicProperties]
class LoggerBase
{

    /**
     * Logs messages depending on the ids trace level.
     *
     * @param TraceLevel $idsTraceLevel IDS Trace Level.
     * @param string $messageToWrite The message to write.
     *
     */
    public function Log($idsTraceLevel, $messageToWrite)
    {
        // APPARELMAGIC CHANGED - We don't need this log
        return;

        $fileToWrite = CoreConstants::DEFAULT_LOGGINGLOCATION . '/executionlog.txt';
        if(file_exists($fileToWrite) && is_writable($fileToWrite))
        {
           file_put_contents($fileToWrite, $messageToWrite."\n", FILE_APPEND);
        }
    }
}
