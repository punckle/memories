<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/about']], [], []],
        'cgu' => [[], ['_controller' => 'App\\Controller\\AboutController::cgu'], [], [['text', '/cgu']], [], []],
        'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
        'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::adminUsers'], [], [['text', '/admin/users']], [], []],
        'admin_memories' => [[], ['_controller' => 'App\\Controller\\AdminController::adminMemories'], [], [['text', '/admin/memories']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'memories' => [[], ['_controller' => 'App\\Controller\\MemoryController::index'], [], [['text', '/souvenirs']], [], []],
        'memory_creation' => [[], ['_controller' => 'App\\Controller\\MemoryController::createMemory'], [], [['text', '/souvenir/creation']], [], []],
        'memory_show' => [['id'], ['_controller' => 'App\\Controller\\MemoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/souvenir']], [], []],
        'user_memories' => [[], ['_controller' => 'App\\Controller\\MemoryController::userMemories'], [], [['text', '/utilisateur/souvenirs']], [], []],
        'delete_memory' => [['id'], ['_controller' => 'App\\Controller\\MemoryController::deleteMemory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimer/souvenir']], [], []],
        'edit_memory' => [['id'], ['_controller' => 'App\\Controller\\MemoryController::editMemory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editer/souvenir']], [], []],
        'fifties' => [[], ['_controller' => 'App\\Controller\\MemoryController::fiftiesMemories'], [], [['text', '/souvenirs/cinquante']], [], []],
        'show_fifties' => [['id'], ['_controller' => 'App\\Controller\\MemoryController::showFiftiesMemories'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/souvenir/cinquante']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'registration' => [[], ['_controller' => 'App\\Controller\\UserController::registration'], [], [['text', '/inscription']], [], []],
        'delete_invitation' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteInvitation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimer/utilisateur']], [], []],
        'accept_invitation' => [['id'], ['_controller' => 'App\\Controller\\UserController::acceptInvitation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accepter/utilisateur']], [], []],
        'users' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/utilisateurs']], [], []],
        'user_details' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], []],
        'settings' => [[], ['_controller' => 'App\\Controller\\UserController::settings'], [], [['text', '/parametres']], [], []],
        'delete_account' => [[], ['_controller' => 'App\\Controller\\UserController::deleteAccount'], [], [['text', '/delete']], [], []],
        'update_password' => [[], ['_controller' => 'App\\Controller\\UserController::updatePassword'], [], [['text', '/update-password']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
