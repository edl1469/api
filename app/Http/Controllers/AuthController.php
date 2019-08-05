<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function ldap(Request $request)
    {



        $bid = $request->input('beachid');
        $pw = $request->input('pwd');

        $host = env('ADLDS_HOST');
        $ldap = ldap_connect($host);
        $ldapdn = "CN={$bid},OU=Active,OU=People,DC=idm,DC=csulb,DC=edu";


        // configure ldap params

        ldap_set_option($ldap,LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);


        $bind = @ldap_bind($ldap, $ldapdn, $pw);


        if ($bind) {


            $success = true;

        } else {
            $success = false;
        }


        return \Response::json($success);



    }

    public function invalid()
    {
        return response()->json('Direct Access to this URL is prohibited');
    }
}
