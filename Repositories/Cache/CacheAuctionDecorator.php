<?php

namespace Modules\Iauctions\Repositories\Cache;

use Modules\Iauctions\Repositories\AuctionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheAuctionDecorator extends BaseCacheDecorator implements AuctionRepository
{
    public function __construct(AuctionRepository $auction)
    {
        parent::__construct();
        $this->entityName = 'iauctions.auctions';
        $this->repository = $auction;
    }

    /**
     * @param bool $params
     * @return mixed
     */
    public function getItemsBy($params = false)
    {
        return $this->remember(function () use ($params) {
            return $this->repository->getItemsBy($params);
        });
    }


    /**
     * @param $criteria
     * @param bool $params
     * @return mixed
     */
    public function getItem($criteria, $params = false)
    {
        return $this->remember(function () use ($criteria, $params) {
            return $this->repository->getItem($criteria, $params);
        });
    }
}
