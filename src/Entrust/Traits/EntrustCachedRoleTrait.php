<?php

namespace Zizaco\Entrust\Traits;

use Zizaco\Entrust\Traits\EntrustRoleTrait as OriginalEntrustRoleTrait;

trait EntrustCachedRoleTrait
{
    use OriginalEntrustRoleTrait {
        OriginalEntrustRoleTrait::cachedPermissions as parentCachedPermissions;
    }

    private $cache = null;

    public function cachedPermissions()
    {
        if ($this->cache) {
            return $this->cache;
        }

        $this->cache = $this->parentCachedPermissions();
        return $this->cache;
    }
}
