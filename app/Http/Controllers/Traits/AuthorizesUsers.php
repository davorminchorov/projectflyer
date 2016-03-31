<?php
/**
 * Created by PhpStorm.
 * User: davor
 * Date: 8/21/2015
 * Time: 6:05 AM
 */

namespace App\Http\Controllers\Traits;


use App\Flyer;
use Illuminate\Http\Request;

trait AuthorizesUsers
{
    /**
     * Determine if the user created the flyer.
     *
     * @param Request $request
     * @return bool
     */
    protected function userCreatedFlyer(Request $request)
    {
        return Flyer::where([
            'zip' => $request->zip,
            'street' => $request->street,
            'user_id' => $this->user->id
        ])->exists();
    }

    /**
     * The user is not authorized to upload photos.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthorized(Request $request)
    {
        if ($request->ajax())
        {
            return response(['message' => 'No way!'], 403);
        }

        flash('No way!');

        return redirect('/');
    }
}