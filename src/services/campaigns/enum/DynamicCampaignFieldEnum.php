<?php


namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class DynamicCampaignFieldEnum extends Enum
{
    public const COUNTER_IDS = 'CounterIds';
    public const SETTINGS = 'Settings';
    public const BIDDING_STRATEGY = 'BiddingStrategy';
    public const PRIORITY_GOALS = 'PriorityGoals';
    public const ATTRIBUTION_MODEL = 'AttributionModel';
}
