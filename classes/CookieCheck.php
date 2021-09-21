<?php
namespace CookieCheck;
use HeadlessChromium\BrowserFactory;

class CookieCheck {
    private $browser;
    private $trackers = [
        '_ga' => [
            'name' => 'Google Analytics'
        ],
        '_fbp' => [
            'name' => 'Facebook Pixel'
        ],
        '_fbp' => [
            'name' => 'Facebook Pixel'
        ],
        'sailthru_visitor' => [
            'name' => 'Sailthru Tracking'
        ],
        '_pin_unauth' => [
            'name' => 'Pinterest Tracking'
        ],
        'li_at' => [
            'name' => 'LinkedIn Pixel'
        ],
        's_cc' => [
            'name' => 'Adobe Analytics'
        ]
    ];
    function __construct() {
        $browserFactory = new BrowserFactory();
        $this->browser = $browserFactory->createBrowser();
    }
    function __destruct() {
        $this->browser->close();
    }

    private function getPage(String $url) {
        try {
            $page = $this->browser->createPage();
            $page->navigate($url)->waitForNavigation(\HeadlessChromium\Page::NETWORK_IDLE);
        } finally {
            
        }
        return $page;
    }
    public function getPageTitle (String $url)
    {
        $page = $this->getPage($url);
        return $page->evaluate('document.title')->getReturnValue();
    }

    public function getCookies(Array $services, $trackers = [])
    {
        if(empty($trackers)) {
            $trackers = $this->trackers;
        }
        $result = [];
        foreach($services as $service) {
            $page = $this->getPage($service);
            $cookies = $page->getCookies();
            $result[$service]['trackers'] = $trackers;
            foreach($cookies as $key => $cookie)
            {
                if  (isset($trackers[$cookie['name']])) {
                    $result[$service]['trackers'][$cookie['name']]['status'] = 1;
                }
            }
        }
        return $result;
    }
}
