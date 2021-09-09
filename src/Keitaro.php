<?php

declare(strict_types=1);

namespace Wirgen\Larataro;

use Illuminate\Support\Facades\Facade;
use Wirgen\Keitaro\Model\AffiliateNetwork;
use Wirgen\Keitaro\Model\Campaign;
use Wirgen\Keitaro\Model\Group;
use Wirgen\Keitaro\Model\Report;
use Wirgen\Keitaro\Model\User;

/**
 * Class Keitaro
 *
 * @method static array|null request(string $method, string $path, array $params)
 * @method static AffiliateNetwork[] getAllAffiliateNetworks()
 * @method static AffiliateNetwork createAffiliateNetwork(array $data)
 * @method static AffiliateNetwork getAffiliateNetwork(int $id)
 * @method static AffiliateNetwork updateAffiliateNetwork(int $id, array $data)
 * @method static void moveAffiliateNetworkToArchive(int $id)
 * @method static AffiliateNetwork cloneAffiliateNetwork(int $id)
 * @method static Campaign[] getAllCampaigns()
 * @method static Campaign createCampaign(array $data)
 * @method static Campaign getCampaign(int $id)
 * @method static Campaign updateCampaign(int $id, array $data)
 * @method static void moveCampaignToArchive(int $id)
 * @method static Campaign cloneCampaign(int $id)
 * @method static void disableCampaign(int $id)
 * @method static void enableCampaign(int $id)
 * @method static void restoreCampaign(int $id)
 * @method static Campaign updateCampaignCosts(int $id, array $data)
 * @method static Campaign[] getDeletedCampaigns()
 * @method static void cleanStats(array $data)
 * @method static Report retrieveClickLog(array $data)
 * @method static void updateClicksCosts(array $data)
 * @method static Report getConversions(array $data)
 * @method static Group[] getGroups(string $type)
 * @method static Group createGroup(array $data)
 * @method static Group updateGroup(int $id, array $data)
 * @method static void deleteGroup(int $id)
 * @method static Report buildCustomReport(array $data)
 * @method static User[] getUsers()
 * @method static User createUser(array $data)
 * @method static User getUser(int $id)
 * @method static User updateUser(int $id, array $data)
 * @method static void removeUser(int $id)
 * @method static User updateUserAccessData(int $id, array $data)
 *
 * @see \Wirgen\Keitaro\Keitaro
 */
class Keitaro extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'keitaro';
    }
}
