<?php

namespace App\Policies;

use App\Product;
use App\User;
use App\Shop;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the product.
     *
     * @return mixed
     */
    public function update(User $user, Product $product)
    {
        return $user->id == $product->shop->user_id;
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        return $user->id == $product->shop->user_id;
    }
}
