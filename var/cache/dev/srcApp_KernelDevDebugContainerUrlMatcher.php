<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
            '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AboutController::cgu'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::adminUsers'], null, null, null, false, false, null]],
            '/admin/memories' => [[['_route' => 'admin_memories', '_controller' => 'App\\Controller\\AdminController::adminMemories'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/souvenirs' => [[['_route' => 'memories', '_controller' => 'App\\Controller\\MemoryController::index'], null, null, null, false, false, null]],
            '/souvenir/creation' => [[['_route' => 'memory_creation', '_controller' => 'App\\Controller\\MemoryController::createMemory'], null, null, null, false, false, null]],
            '/utilisateur/souvenirs' => [[['_route' => 'user_memories', '_controller' => 'App\\Controller\\MemoryController::userMemories'], null, null, null, false, false, null]],
            '/souvenirs/cinquante' => [[['_route' => 'fifties', '_controller' => 'App\\Controller\\MemoryController::fiftiesMemories'], null, null, null, false, false, null]],
            '/photos' => [[['_route' => 'photos', '_controller' => 'App\\Controller\\PhotoController::index'], null, null, null, false, false, null]],
            '/photos/bbh' => [[['_route' => 'bbh', '_controller' => 'App\\Controller\\PhotoController::bbh'], null, null, null, false, false, null]],
            '/photos/mathis' => [[['_route' => 'mathis', '_controller' => 'App\\Controller\\PhotoController::mathis'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\UserController::registration'], null, null, null, false, false, null]],
            '/utilisateurs' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
            '/parametres' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\UserController::settings'], null, null, null, false, false, null]],
            '/delete' => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\UserController::deleteAccount'], null, null, null, false, false, null]],
            '/update-password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\UserController::updatePassword'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/s(?'
                        .'|ouvenir/(?'
                            .'|([^/]++)(*:193)'
                            .'|cinquante/([^/]++)(*:219)'
                        .')'
                        .'|upprimer/(?'
                            .'|souvenir/([^/]++)(*:257)'
                            .'|utilisateur/([^/]++)(*:285)'
                        .')'
                    .')'
                    .'|/editer/souvenir/([^/]++)(*:320)'
                    .'|/accepter/utilisateur/([^/]++)(*:358)'
                    .'|/utilisateur/([^/]++)/details(*:395)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            193 => [[['_route' => 'memory_show', '_controller' => 'App\\Controller\\MemoryController::show'], ['id'], null, null, false, true, null]],
            219 => [[['_route' => 'show_fifties', '_controller' => 'App\\Controller\\MemoryController::showFiftiesMemories'], ['id'], null, null, false, true, null]],
            257 => [[['_route' => 'delete_memory', '_controller' => 'App\\Controller\\MemoryController::deleteMemory'], ['id'], null, null, false, true, null]],
            285 => [[['_route' => 'delete_invitation', '_controller' => 'App\\Controller\\UserController::deleteInvitation'], ['id'], null, null, false, true, null]],
            320 => [[['_route' => 'edit_memory', '_controller' => 'App\\Controller\\MemoryController::editMemory'], ['id'], null, null, false, true, null]],
            358 => [[['_route' => 'accept_invitation', '_controller' => 'App\\Controller\\UserController::acceptInvitation'], ['id'], null, null, false, true, null]],
            395 => [[['_route' => 'user_details', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, false, null]],
        ];
    }
}
