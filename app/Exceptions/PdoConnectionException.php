<?php

namespace App\Exceptions;

use App\MyExceptionInterface;

class PdoConnectionException extends \Exception implements MyExceptionInterface
{
  public function getPublicMessage()
  {
    return _("Database connection failed.");
  }
}

 ?>
