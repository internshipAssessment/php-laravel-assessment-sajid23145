<?php
/**
 * Laravel 10+ pseudocode stubs.
 * Paste your code in the TODO blocks. You can run these inside a Laravel Tinker session
 * after adapting namespaces/imports as needed.
 */

use App\Models\Order;

// ------------------------------------------------------------
// Task 1 — Eloquent query (one-liner or two small lines)
// Fetch latest 5 orders with: user, items.product
// Constraint: total_amount > 100
// Order by created_at desc
// Save result in $orders
// ------------------------------------------------------------
$orders = Order::with(['user', 'items.product'])
    ->where('total_amount', '>', 100)
    ->latest()
    ->take(5)
    ->get(); // TODO: assign Eloquent query result to $orders

// ------------------------------------------------------------
// Task 2 — FormRequest rules for storing a User
// name: required, string, 2–60
// email: required, valid, unique:users,email
// password: required, min 8, confirmed
// Return the array from this function.
// ------------------------------------------------------------
function userStoreRules(): array
{
    return [
    'name' => 'required|string|min:2|max:60',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|string|min:8|confirmed',
];

    
}

// ------------------------------------------------------------
// Task 3 — Eloquent scope in Order model
// Add this method into App\Models\Order
// Filters created_at to last $days days.
// ------------------------------------------------------------
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class Order extends Model
{
   use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Order extends Model
{
    // ...

    /**
     * Scope a query to only include orders from the last given number of days.
     *
     * @param  Builder  $query
     * @param  int  $days
     * @return Builder
     */
    public function scopeRecentDays(Builder $query, int $days): Builder
    {
        return $query->where('created_at', '>=', Carbon::now()->subDays($days));
    }

}
*/
