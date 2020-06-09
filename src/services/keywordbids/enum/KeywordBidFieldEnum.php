<?php

namespace directapi\services\keywordbids\enum;

use directapi\components\Enum;

class KeywordBidFieldEnum extends Enum
{
    public const KEYWORD_ID = 'KeywordId';
    public const AD_GROUP_ID = 'AdGroupId';
    public const CAMPAIGN_ID = 'CampaignId';
    public const BID = 'Bid';
    public const CONTEXT_BID = 'ContextBid';
    public const STRATEGY_PRIORITY = 'StrategyPriority';
    public const COMPETITORS_BIDS = 'CompetitorsBids';
    public const SEARCH_PRICES = 'SearchPrices';
    public const CONTEXT_COVERAGE = 'ContextCoverage';
    public const MIN_SEARCH_PRICE = 'MinSearchPrice';
    public const CURRENT_SEARCH_PRICE = 'CurrentSearchPrice';
    public const AUCTION_BIDS = 'AuctionBids';
}
