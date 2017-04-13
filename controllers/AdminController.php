<?php
//
namespace Leap\Plugins\Admin\Controllers;

use Leap\Core\Controller;
use Leap\Core\Template;

class AdminController extends Controller
{
    protected $links;
    public function hasAccess(): bool
    {
        return true;
    }

    public function init()
    {
        $links          = array();
        $links['admin'] = array("link" => "admin/dashboard", "name" => "Dashboard", "description" => "Here comes the description");
        $links['test1'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test2'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test3'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test4'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");
        $links['test5'] = array("link" => "#", "name" => "Test", "description" => "Here comes the description");

        $this->hooks->fire("hook_adminLinks", array(&$links));
        ksort($links);
        $this->links = $links;
    }

    public function renderPage($parameters)
    {
        $template = new Template($this->route, $this->hooks, $this->config);
        $template->set('links', $this->links);
        if (isset($parameters['title'])) {
            $template->set('title', $parameters['title']);
        } else {
            $tmp_page = explode("/", explode(".", $parameters['page'])[0]);
            $template->set('title', ucfirst(end($tmp_page)));
        }
        $page = $parameters['page'] ?? null;
        return $template->render($page);
    }
}
