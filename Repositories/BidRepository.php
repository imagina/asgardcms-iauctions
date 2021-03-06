<?php

namespace Modules\Iauctions\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface BidRepository extends BaseRepository
{
    /**
     * @param bool $params
     * @return mixed
     */
    public function getItemsBy($params = false);

    /**
     * @param $criteria
     * @param bool $params
     * @return mixed
     */
    public function getItem($criteria, $params = false);


}
