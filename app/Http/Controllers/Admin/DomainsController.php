<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Domain;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class DomainsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'roles:super_admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $domains = Domain::where('domain', 'LIKE', "%$keyword%")
                ->orWhere('bootstrap', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $domains = Domain::latest()->paginate($perPage);
        }

        return view('admin.domains.index', compact('domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.domains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'domain' => 'required|unique:system.domains,domain',
            'name' => 'required'
		]);
        $requestData = $request->all();

        $newDomain = Domain::create($requestData);

        $sites = config('domains');

        $newConfigDomains = '<?php' . PHP_EOL . 'return ['  . PHP_EOL;

        foreach ($sites as $site) {
            $newConfigDomains .= "
            ['bootstrap' => '" . $site['bootstrap'] . "',
                'id' => " . $site['id'] . ",
                'domain' => '" . $site['domain'] . "',
                'name' => '" . $site['name'] . "',
                'domain_alternatives' => [
                    'www." . $site['domain'] . "',
                ],
            ],
            ";
        }

        $newConfigDomains .= "
            ['bootstrap' => '" . ($newDomain['bootstrap']) ?? 'App\Providers\DomainBootstrapServiceProvider' . "',
                'id' => " . $newDomain['id'] . ",
                'domain' => '" . $newDomain['domain'] . "',
                'name' => '" . $newDomain['domain'] . "',
                'domain_alternatives' => [
                    'www." . $newDomain['domain'] . "',
                ],
            ],
            ";

        $newConfigDomains .= '];';

        File::put(config_path('domains.php'), $newConfigDomains);

        $newEnvFile = "APP_NAME=\"NEW SITE\"
        APP_URL=http://".$newDomain['domain']."
        DB_CONNECTION=\"".$newDomain['id']."\"
        MAIL_DRIVER=smtp
        MAIL_HOST=".$newDomain['email_host'] ?? ''."
        MAIL_PORT=".$newDomain['email_port'] ?? ''."
        MAIL_USERNAME=".$newDomain['email'] ?? ''."
        MAIL_PASSWORD=".$newDomain['email_password'] ?? ''."
        MAIL_ENCRYPTION=".$newDomain['email_encryption'] ?? ''."
        MAIL_FROM_ADDRESS=".$newDomain['email'] ?? ''."
        MAIL_FROM_NAME=".$newDomain['name'] ?? ''."
        PUSHER_APP_ID=".$newDomain['pusher_app_id'] ?? ''."
        PUSHER_APP_KEY=".$newDomain['pusher_app_key'] ?? ''."
        PUSHER_APP_SECRET=".$newDomain['pusher_app_secret'] ?? ''."
        PUSHER_APP_CLUSTER=".$newDomain['pusher_app_cluster'] ?? 'mt1' ."
        MIX_PUSHER_APP_KEY=\"${PUSHER_APP_KEY}\"
        MIX_PUSHER_APP_CLUSTER=\"${PUSHER_APP_CLUSTER}\"";

        File::put(app_path('../env/' . $newDomain['domain'] . '.env'), $newEnvFile);

        return redirect('admin/domains')->with('flash_message', 'Domain added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $domain = Domain::findOrFail($id);

        return view('admin.domains.show', compact('domain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $domain = Domain::findOrFail($id);

        return view('admin.domains.edit', compact('domain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'domain' => 'required|unique:system.domains,domain,' . $id,
            'name' => 'required'
		]);
        $requestData = $request->all();

        $domain = Domain::findOrFail($id);
        $domain->update($requestData);

        return redirect('admin/domains')->with('flash_message', 'Domain updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Domain::destroy($id);

        return redirect('admin/domains')->with('flash_message', 'Domain deleted!');
    }
}
