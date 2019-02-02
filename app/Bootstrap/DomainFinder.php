<?php

namespace App\Bootstrap;

use Illuminate\Support\Facades\Config;
use \Request;

class DomainFinder
{
    private $domain;
    private $url;
    /**
     * @return mixed
     */
    public function bootstrap()
    {
        $this->url = parse_url(Request::url());
        $this->domain = $this->getDomain();
        return $this->domain['bootstrap'];
    }
    /**
     * @return array|null
     */
    public function getDomain()
    {
        if (isset($this->domain)) {
            return $this->domain;
        }
        foreach ($this->getDomains() as $domain) {
            if ($domain['domain'] == $this->url['host']) {
                $this->domain = $domain;
                Config::set('site', $domain);
                break;
            } elseif (isset($domain['domain_alternatives'])) {
                foreach ($domain['domain_alternatives'] as $alias) {
                    if ($alias == $this->url['host']) {
                        $this->domain = $domain;
                        Config::set('site', $domain);
                        break;
                    }
                }
            }
        }
        if (!isset($this->domain) && isset($this->getDomains()['default'])) {
            $this->domain = $this->getDomains()['default'];
        }
        return $this->domain;
    }
    /**
     * @return mixed
     */
    public function getDomains()
    {
        return Config::get('domains');
    }
}
