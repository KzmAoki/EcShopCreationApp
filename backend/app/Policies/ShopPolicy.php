<?php

namespace App\Policies;

use App\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the shop.
     *
     * @return mixed
     */
    public function update(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can delete the shop.
     *
     * @return mixed
     */
    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }
}
