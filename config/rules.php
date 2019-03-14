<?php
return [
    '/index' => '/site/index',
    '/login' => '/login/index',
    '/logout' => '/login/logout',
    '/register' => '/login/register',
    '/forgetpassword' => '/login/forget-password',
    '/agreement'=>'site/agreement',
    '/submitweb'=>'submit/web',
    '/web/<id:\d+>'=> 'web/detail',
]
?>