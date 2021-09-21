<?php
namespace CookieCheck;
use HeadlessChromium\BrowserFactory;

class CookieCheck {
    private $browser;

    function __construct() {
        $browserFactory = new BrowserFactory();
        $this->browser = $browserFactory->createBrowser();
    }
    function __destruct() {
        $this->browser->close();
    }

    private function getPage(String $url) {
        try {
            // creates a new page and navigate to an url
            $page = $this->browser->createPage();
            $page->navigate($url)->waitForNavigation();
        } finally {
            
        }
        return $page;
    }
    public function getPageTitle (String $url)
    {
        $page = $this->getPage($url);
        return $page->evaluate('document.title')->getReturnValue();
    }

    public function getCookies(Array $services)
    {
        foreach($services as $key => $service) {
            $page = $this->getPage($key);
            $services[$key]['result'] = $page->getCookies();
        }
        return $services;
    }
}
