<?php

namespace Zizaco\Entrust\Traits;

use Zizaco\Entrust\Traits\EntrustUserTrait as OriginalEntrustUserTrait;

trait EntrustCachedUserTrait
{
    use OriginalEntrustUserTrait {
        OriginalEntrustUserTrait::cachedRoles as parentCachedRoles;
        OriginalEntrustUserTrait::roles as parentRoles;
    }

    private $cache = null;

    public function cachedRoles()
    {
        if ($this->cache) {
            return $this->cache;
        }

        $this->cache = $this->parentCachedRoles();
        return $this->cache;
    }
}
