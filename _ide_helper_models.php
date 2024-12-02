<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Common newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Common newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Common query()
 */
	class Common extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $machine_id
 * @property int $local_id
 * @property string $datetime
 * @property string $type
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\EventsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereLocalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Events whereUpdatedAt($value)
 */
	class Events extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $theme
 * @property string $message
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereUserId($value)
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $remains
 * @property string|null $valid
 * @property int $machine_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Machine $machine
 * @method static \Database\Factories\GoodsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereRemains($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Goods whereValid($value)
 */
	class Goods extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $status
 * @property string $number
 * @property string $imei
 * @property string $name
 * @property string $address
 * @property int|null $balance
 * @property string $condition
 * @property string $errors
 * @property string $subscription_until
 * @property string $software_version
 * @property string|null $cash_counter
 * @property string|null $goods_sold
 * @property string|null $goods_total
 * @property string $capacity
 * @property string $controller_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $session_id
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\MachineFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereCashCounter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereControllerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereErrors($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereGoodsSold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereGoodsTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereImei($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereSoftwareVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereSubscriptionUntil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Machine whereUserId($value)
 */
	class Machine extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $good_id
 * @property int $machine_id
 * @property string $code
 * @property string $name
 * @property int $is_enabled
 * @property int $is_available
 * @property string $price
 * @property int $stock
 * @property string $capacity
 * @property string $expiry_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PositionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereIsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Position whereUpdatedAt($value)
 */
	class Position extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $requisites
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites whereRequisites($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Requisites whereUserId($value)
 */
	class Requisites extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $dateTime
 * @property string $type
 * @property string $test
 * @property string $balance
 * @property string $complete
 * @property string|null $promocode
 * @property int $good_id
 * @property string|null $cashless_id
 * @property int $machine_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Machine|null $machine
 * @method static \Database\Factories\SalesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereCashlessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereGoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales wherePromocode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereTest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sales whereUpdatedAt($value)
 */
	class Sales extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $machine_id
 * @property array $settings
 * @property string $bills
 * @property string|null $online_kassa_settings
 * @property string|null $qr_payments_settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SettingsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereBills($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereOnlineKassaSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereQrPaymentsSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Settings whereUpdatedAt($value)
 */
	class Settings extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\StatsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stats whereUpdatedAt($value)
 */
	class Stats extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $fio
 * @property string $user_name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string $user_tz
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $email_verification_token
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerificationToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserTz($value)
 */
	class User extends \Eloquent {}
}

