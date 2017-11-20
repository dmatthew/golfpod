<?php

namespace dmatthew\crafttwitter\variables;

use dmatthew\crafttwitter\CraftTwitterPlugin;
use Craft;

class CraftTwitterVariable
{
    // Public Methods
    // =========================================================================
    /**
     * @param null $optional
     * @return string
     */
     public function twitterUsername()
     {
         return CraftTwitterPlugin::getInstance()->settings->twitterUsername;
     }

     /**
      * @param null $optional
      * @return string
      */
      public function twitterUserTitle()
      {
          return CraftTwitterPlugin::getInstance()->settings->twitterUserTitle;
      }
}
