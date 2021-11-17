<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('veiculos.list', ['name' => $veiculos]);
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
	
	   public function teste()
    {
        $secret = new \AzKeyVault\Secret('https://nomedocofre.vault.azure.net/');

// If you want to get all secrets (default max to 25):
//$secrets = $secret->getSecrets();
// ... else get next page via nextLink
//$secrets = $secret->getSecrets($secrets->getNextLink());

// If you want the latest secret
$value = $secret->getSecret('nomeSegredo');

// If you want a specific secret version:
//$value = $secret->getSecret('mySecretName', '9fe63d32-5eb0-47f2-8ef8-version-id');

// ... otherwise get all versions of secret
// with name "mySecretName" which are marked
// as enabled and retrieve the first one
//$enabledSecretVersions = $secret->getSecretVersions('mySecretName')->enabled();
//$firstEnabledVersion = reset($enabledSecretVersions);
//$value = $secret->getSecret($firstEnabledVersion);

echo $value->secret;
// prints: my super secret message

// If you want to set secret or update secret with newer version:
//$value = $secret->setSecret('mySecretName', 'mySecretValue');
//echo $value->secret;
// prints: mySecretValue

/**
 * Keys
 */
//$key = new AzKeyVault\Key('https://my-keyvault-dns.vault.azure.net');

// Retrieve specific key version:
//$value = $key->getKey('myKeyName', 'j7d8rd32-5eb0-47f2-8ef8-version-id');

// ... or get all versions of a key
// and retrieve the first one which
// is enabled, just like with the
// secrets above
//$enabledKeyVersions = $key->getKeyVersions('myKeyName')->enabled();
//$firstEnabledVersion = reset($enabledKeyVersions);
//$value = $key->getKey($firstEnabledVersion);

//echo $value->type; // e.g. "RSA"
//echo $value->n;    // prints base64 encoded RSA modulus

// This library also provides some key utilities
// to make retrieved keys work with the OpenSSL extension
//$pem = (new AzKeyVault\KeyUtil($value))->toPEM();
//$keyDetails = openssl_pkey_get_details(openssl_pkey_get_private($pem));
//var_dump($keyDetails);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
