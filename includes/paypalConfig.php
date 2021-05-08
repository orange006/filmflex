<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Acz7MHTnGJwudmT7tjGF0mTavpSa4D24ekKVnBGcThpKGLbF2zLq1viPlln86nTvVY6yOyFNcVhrIVQi',     // ClientID
        'EB5Hq3hmqte9X4fystIQ1MwXS9hQ41YX0xLnCQetUA6fXGNJt4RowYGdHU8DG-HXJtmgd7SwHcV_cP2G'      // ClientSecret
    )
);
?>
