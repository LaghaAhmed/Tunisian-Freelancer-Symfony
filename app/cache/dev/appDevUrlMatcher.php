<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/projets')) {
            // projets
            if (rtrim($pathinfo, '/') === '/projets') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projets');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::indexAction',  '_route' => 'projets',);
            }

            // projets_show
            if (preg_match('#^/projets/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projets_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::showAction',));
            }

            // projets_new
            if ($pathinfo === '/projets/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::newAction',  '_route' => 'projets_new',);
            }

            // projets_create
            if ($pathinfo === '/projets/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projets_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::createAction',  '_route' => 'projets_create',);
            }
            not_projets_create:

            // projets_edit
            if (preg_match('#^/projets/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projets_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::editAction',));
            }

            // projets_update
            if (preg_match('#^/projets/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_projets_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projets_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::updateAction',));
            }
            not_projets_update:

            // projets_delete
            if (preg_match('#^/projets/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_projets_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projets_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::deleteAction',));
            }
            not_projets_delete:

            // projetv_ajout_amine
            if (preg_match('#^/projets/(?P<id>[^/]++)/(?P<jobowner>[^/]++)/ajout$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetv_ajout_amine')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsController::ajoutAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tests')) {
            // tests
            if (rtrim($pathinfo, '/') === '/tests') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tests');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::indexAction',  '_route' => 'tests',);
            }

            // tests_show
            if (preg_match('#^/tests/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::showAction',));
            }

            // tests_new
            if ($pathinfo === '/tests/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::newAction',  '_route' => 'tests_new',);
            }

            // tests_create
            if ($pathinfo === '/tests/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tests_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::createAction',  '_route' => 'tests_create',);
            }
            not_tests_create:

            // tests_edit
            if (preg_match('#^/tests/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::editAction',));
            }

            // tests_update
            if (preg_match('#^/tests/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tests_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::updateAction',));
            }
            not_tests_update:

            // tests_delete
            if (preg_match('#^/tests/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tests_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tests_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TestsController::deleteAction',));
            }
            not_tests_delete:

        }

        if (0 === strpos($pathinfo, '/projet')) {
            if (0 === strpos($pathinfo, '/projetsuivi')) {
                // projetsuivi
                if (rtrim($pathinfo, '/') === '/projetsuivi') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'projetsuivi');
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::indexAction',  '_route' => 'projetsuivi',);
                }

                // projetsuivi_show
                if (preg_match('#^/projetsuivi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetsuivi_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::showAction',));
                }

                // projetsuivi_new
                if ($pathinfo === '/projetsuivi/new') {
                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::newAction',  '_route' => 'projetsuivi_new',);
                }

                // projetsuivi_create
                if ($pathinfo === '/projetsuivi/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_projetsuivi_create;
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::createAction',  '_route' => 'projetsuivi_create',);
                }
                not_projetsuivi_create:

                // projetsuivi_edit
                if (preg_match('#^/projetsuivi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetsuivi_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::editAction',));
                }

                // projetsuivi_update
                if (preg_match('#^/projetsuivi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_projetsuivi_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetsuivi_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::updateAction',));
                }
                not_projetsuivi_update:

                // projetsuivi_delete
                if (preg_match('#^/projetsuivi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_projetsuivi_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetsuivi_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetsuiviController::deleteAction',));
                }
                not_projetsuivi_delete:

            }

            if (0 === strpos($pathinfo, '/projetv')) {
                // projetv
                if (rtrim($pathinfo, '/') === '/projetv') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'projetv');
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::indexAction',  '_route' => 'projetv',);
                }

                // projetv_show
                if (preg_match('#^/projetv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetv_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::showAction',));
                }

                // projetv_new
                if ($pathinfo === '/projetv/new') {
                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::newAction',  '_route' => 'projetv_new',);
                }

                // projetv_create
                if ($pathinfo === '/projetv/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_projetv_create;
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::createAction',  '_route' => 'projetv_create',);
                }
                not_projetv_create:

                // projetv_edit
                if (preg_match('#^/projetv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetv_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::editAction',));
                }

                // projetv_update
                if (preg_match('#^/projetv/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_projetv_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetv_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::updateAction',));
                }
                not_projetv_update:

                // projetv_delete
                if (preg_match('#^/projetv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_projetv_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetv_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\ProjetvController::deleteAction',));
                }
                not_projetv_delete:

            }

        }

        if (0 === strpos($pathinfo, '/feedbacks')) {
            // feedbacks
            if (rtrim($pathinfo, '/') === '/feedbacks') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'feedbacks');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::indexAction',  '_route' => 'feedbacks',);
            }

            // feedbacks_show
            if (preg_match('#^/feedbacks/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedbacks_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::showAction',));
            }

            // feedbacks_new
            if ($pathinfo === '/feedbacks/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::newAction',  '_route' => 'feedbacks_new',);
            }

            // feedbacks_create
            if ($pathinfo === '/feedbacks/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_feedbacks_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::createAction',  '_route' => 'feedbacks_create',);
            }
            not_feedbacks_create:

            // feedbacks_edit
            if (preg_match('#^/feedbacks/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedbacks_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::editAction',));
            }

            // feedbacks_update
            if (preg_match('#^/feedbacks/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_feedbacks_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedbacks_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::updateAction',));
            }
            not_feedbacks_update:

            // feedbacks_delete
            if (preg_match('#^/feedbacks/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_feedbacks_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedbacks_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\FeedbacksController::deleteAction',));
            }
            not_feedbacks_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateurs')) {
            // utilisateurs
            if (rtrim($pathinfo, '/') === '/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateurs');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::indexAction',  '_route' => 'utilisateurs',);
            }

            // utilisateurs_show
            if (preg_match('#^/utilisateurs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::showAction',));
            }

            // utilisateurs_new
            if ($pathinfo === '/utilisateurs/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::newAction',  '_route' => 'utilisateurs_new',);
            }

            // utilisateurs_create
            if ($pathinfo === '/utilisateurs/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateurs_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::createAction',  '_route' => 'utilisateurs_create',);
            }
            not_utilisateurs_create:

            // utilisateurs_edit
            if (preg_match('#^/utilisateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::editAction',));
            }

            // utilisateurs_update
            if (preg_match('#^/utilisateurs/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateurs_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::updateAction',));
            }
            not_utilisateurs_update:

            // utilisateurs_delete
            if (preg_match('#^/utilisateurs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateurs_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurs_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::deleteAction',));
            }
            not_utilisateurs_delete:

        }

        if (0 === strpos($pathinfo, '/cv')) {
            // cv
            if (rtrim($pathinfo, '/') === '/cv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cv');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::indexAction',  '_route' => 'cv',);
            }

            // cv_show
            if (preg_match('#^/cv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::showAction',));
            }

            // cv_new
            if ($pathinfo === '/cv/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::newAction',  '_route' => 'cv_new',);
            }

            // cv_create
            if ($pathinfo === '/cv/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cv_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::createAction',  '_route' => 'cv_create',);
            }
            not_cv_create:

            // cv_edit
            if (preg_match('#^/cv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::editAction',));
            }

            // cv_update
            if (preg_match('#^/cv/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cv_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::updateAction',));
            }
            not_cv_update:

            // cv_delete
            if (preg_match('#^/cv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cv_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\CvController::deleteAction',));
            }
            not_cv_delete:

        }

        if (0 === strpos($pathinfo, '/groupes')) {
            if (0 === strpos($pathinfo, '/groupesmembres')) {
                // groupesmembres
                if (rtrim($pathinfo, '/') === '/groupesmembres') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'groupesmembres');
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::indexAction',  '_route' => 'groupesmembres',);
                }

                // groupesmembres_show
                if (preg_match('#^/groupesmembres/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupesmembres_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::showAction',));
                }

                // groupesmembres_new
                if ($pathinfo === '/groupesmembres/new') {
                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::newAction',  '_route' => 'groupesmembres_new',);
                }

                // groupesmembres_create
                if ($pathinfo === '/groupesmembres/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groupesmembres_create;
                    }

                    return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::createAction',  '_route' => 'groupesmembres_create',);
                }
                not_groupesmembres_create:

                // groupesmembres_edit
                if (preg_match('#^/groupesmembres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupesmembres_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::editAction',));
                }

                // groupesmembres_update
                if (preg_match('#^/groupesmembres/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_groupesmembres_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupesmembres_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::updateAction',));
                }
                not_groupesmembres_update:

                // groupesmembres_delete
                if (preg_match('#^/groupesmembres/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_groupesmembres_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupesmembres_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesmembresController::deleteAction',));
                }
                not_groupesmembres_delete:

            }

            // groupes
            if (rtrim($pathinfo, '/') === '/groupes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupes');
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::indexAction',  '_route' => 'groupes',);
            }

            // groupes_show
            if (preg_match('#^/groupes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupes_show')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::showAction',));
            }

            // groupes_new
            if ($pathinfo === '/groupes/new') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::newAction',  '_route' => 'groupes_new',);
            }

            // groupes_create
            if ($pathinfo === '/groupes/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupes_create;
                }

                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::createAction',  '_route' => 'groupes_create',);
            }
            not_groupes_create:

            // groupes_edit
            if (preg_match('#^/groupes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupes_edit')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::editAction',));
            }

            // groupes_update
            if (preg_match('#^/groupes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_groupes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupes_update')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::updateAction',));
            }
            not_groupes_update:

            // groupes_delete
            if (preg_match('#^/groupes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_groupes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupes_delete')), array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\GroupesController::deleteAction',));
            }
            not_groupes_delete:

        }

        // esprit_freelancer_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\MailController::indexAction',  '_route' => 'esprit_freelancer_mail_succ',);
        }

        // esprit_freelancer_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\MailController::newAction',  '_route' => 'esprit_freelancer_mail_form',);
        }

        // esprit_freelancer_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\MailController::sendMailAction',  '_route' => 'esprit_freelancer_mail_sendpage',);
        }

        // esprit_freelancer_map
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'EspritFreelancerBundle:Map:index',  '_route' => 'esprit_freelancer_map',);
        }

        // esprit_freelancer_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_freelancer_homepage')), array (  '_controller' => 'EspritFreelancerBundle:Default:index',));
        }

        // freelancer_update
        if ($pathinfo === '/updatefreelancer') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::editAction',  '_route' => 'freelancer_update',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // freelancer_show
            if ($pathinfo === '/showfreelancer') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\UtilisateursController::showfreelancerAction',  '_route' => 'freelancer_show',);
            }

            // my_app_mailer
            if ($pathinfo === '/senda') {
                return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\MailController::envoyerAction',  '_route' => 'my_app_mailer',);
            }

        }

        // tunisian_freelancer_listTransactionByFreelancer
        if ($pathinfo === '/TransactionFreelancer') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TransactionsController::listTransactionFreelancerAction',  '_route' => 'tunisian_freelancer_listTransactionByFreelancer',);
        }

        // tunisian_freelancer_searchTransactionByFreelancer
        if ($pathinfo === '/searchTransactionFreelancer') {
            return array (  '_controller' => 'MyApp\\FreelancerBundle\\Controller\\TransactionsController::searchTransactionFreelancerAction',  '_route' => 'tunisian_freelancer_searchTransactionByFreelancer',);
        }

        // jobowner_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jobowner_homepage')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\DefaultController::indexAction',));
        }

        // freelance_AddProjets
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::addAction',  '_route' => 'freelance_AddProjets',);
        }

        // Freelance_Affichage_Projets
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::listAction',  '_route' => 'Freelance_Affichage_Projets',);
        }

        // Freelance_Affichage_Pjob
        if ($pathinfo === '/Projets') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::finduserAction',  '_route' => 'Freelance_Affichage_Pjob',);
        }

        // Freelance_supp_Pjob
        if (0 === strpos($pathinfo, '/supp') && preg_match('#^/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Freelance_supp_Pjob')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::deleteAction',));
        }

        // Freelance_up_Pjob
        if (0 === strpos($pathinfo, '/Modif') && preg_match('#^/Modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Freelance_up_Pjob')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::updateAction',));
        }

        // Freelance_find_Pjob
        if (0 === strpos($pathinfo, '/pos') && preg_match('#^/pos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Freelance_find_Pjob')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::findidAction',));
        }

        // Freelance_ajout_Pjob
        if (0 === strpos($pathinfo, '/affecter') && preg_match('#^/affecter/(?P<id>[^/]++)/(?P<freelancer>[^/]++)/(?P<jobowner>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Freelance_ajout_Pjob')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::ajoutAction',));
        }

        // Freelance_supprimer_projet
        if (0 === strpos($pathinfo, '/suppression') && preg_match('#^/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Freelance_supprimer_projet')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::deleteProjetAction',));
        }

        // Freelance_Projet_encours
        if ($pathinfo === '/listProjetSuivi') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::listProjetSuiviAction',  '_route' => 'Freelance_Projet_encours',);
        }

        // tunisian_freelancer_addTransactionByJobowner
        if ($pathinfo === '/addTransactionJobOwner') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\TransactionsController::addTransactionJobOwnerAction',  '_route' => 'tunisian_freelancer_addTransactionByJobowner',);
        }

        // tunisian_freelancer_listTransactionByJobowner
        if ($pathinfo === '/TransactionJobOwner') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\TransactionsController::listTransactionJobOwnerAction',  '_route' => 'tunisian_freelancer_listTransactionByJobowner',);
        }

        // tunisian_freelancer_deleteTransactionByJobowner
        if (0 === strpos($pathinfo, '/deleteTransactionJobOwner') && preg_match('#^/deleteTransactionJobOwner/(?P<idt>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tunisian_freelancer_deleteTransactionByJobowner')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\TransactionsController::deleteTransactionJobOwnerAction',));
        }

        // tunisian_freelancer_updateTransactionByJobowner
        if ($pathinfo === '/updateTransactionJobOwner') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\TransactionsController::updateTransactionJobOwnerAction',  '_route' => 'tunisian_freelancer_updateTransactionByJobowner',);
        }

        // tunisian_freelancer_searchTransactionByJobowner
        if ($pathinfo === '/searchTransactionJobOwner') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\TransactionsController::searchTransactionJobOwnerAction',  '_route' => 'tunisian_freelancer_searchTransactionByJobowner',);
        }

        // tunisian_freelancer_parametreJobowner
        if (rtrim($pathinfo, '/') === '/parametreJobOwner') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tunisian_freelancer_parametreJobowner');
            }

            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\UtilisateursController::parametreJobOwnerAction',  '_route' => 'tunisian_freelancer_parametreJobowner',);
        }

        // tunisian_freelancer_updateJobowner
        if ($pathinfo === '/updateJobOwner') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\UtilisateursController::updateJobOwnerAction',  '_route' => 'tunisian_freelancer_updateJobowner',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // tunisian_freelancer_removeJobowner
            if (0 === strpos($pathinfo, '/removeJobOwner') && preg_match('#^/removeJobOwner/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tunisian_freelancer_removeJobowner')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\UtilisateursController::removeJobOwnerAction',));
            }

            // tunisian_freelancer_Recherche
            if (0 === strpos($pathinfo, '/recherche') && preg_match('#^/recherche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tunisian_freelancer_Recherche')), array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\ProjetsController::rechercheAction',));
            }

        }

        // my_app_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
        }

        // my_app_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_form',);
        }

        if (0 === strpos($pathinfo, '/send')) {
            // my_app_mail_sendpage
            if ($pathinfo === '/sendmail') {
                return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\MailController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
            }

            // my_app_mail
            if ($pathinfo === '/send') {
                return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\MailController::envoyerAction',  '_route' => 'my_app_mail',);
            }

        }

        // my_app_mail1
        if ($pathinfo === '/envoyer') {
            return array (  '_controller' => 'MyApp\\JobownerBundle\\Controller\\MailController::envoyer2Action',  '_route' => 'my_app_mail1',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
