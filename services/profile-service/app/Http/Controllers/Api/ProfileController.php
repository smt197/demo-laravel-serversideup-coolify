<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Orion\Concerns\DisableAuthorization;

class ProfileController extends Controller
{
    use DisableAuthorization;

    protected $model = Profile::class;
}
