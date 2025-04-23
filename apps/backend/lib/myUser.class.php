<?php

class myUser extends sfBasicSecurityUser
{
    public function setReferer($referer)
    {
      if (!$this->hasAttribute('referer'))
      {
        $this->setAttribute('referer', $referer);
      }
    }
}
