<?php

require_once __DIR__ . '/testCommon.php';

function Consume($a_SoapOptions)
{
    $o_Service = new W2IndigoServices(Null, $a_SoapOptions);

    $o_Params                                                          = new W2IndigoServices_WatchlistCheck;
    $o_Params->apiKey                                                  = 'BBB83EB6-7B82-458D-8A43-5AA005C467CE';
    $o_Params->clientReference                                         = 'Test';
    $o_Params->watchListCheckRequestInfo                               = new W2IndigoServices_WatchlistCheckRequestInfo;
//    $o_Params->watchListCheckRequestInfo->BirthDay                     = 1;
//    $o_Params->watchListCheckRequestInfo->BirthMonth                   = 10;
//    $o_Params->watchListCheckRequestInfo->BirthYear                    = 1967;
//    $o_Params->watchListCheckRequestInfo->DateOfBirthMatchingThreshold = -100;
    $o_Params->watchListCheckRequestInfo->NameMatchingThreshold        = 0;
    $o_Params->watchListCheckRequestInfo->SearchQuery                  = 'John Blackmore';

    $o_Response = $o_Service->WatchlistCheck($o_Params);

    return array($o_Service, $o_Response);
}
