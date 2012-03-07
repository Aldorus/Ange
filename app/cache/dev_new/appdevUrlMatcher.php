<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // AngeAngeBundle_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AngeAngeBundle_home');
            }
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexAction',  '_route' => 'AngeAngeBundle_home',);
        }

        if (0 === strpos($pathinfo, '/cours')) {
            // cours
            if (rtrim($pathinfo, '/') === '/cours') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cours');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::indexAction',  '_route' => 'cours',);
            }

            // cours_show
            if (preg_match('#^/cours/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::showAction',)), array('_route' => 'cours_show'));
            }

            // cours_new
            if ($pathinfo === '/cours/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::newAction',  '_route' => 'cours_new',);
            }

            // cours_create
            if ($pathinfo === '/cours/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::createAction',  '_route' => 'cours_create',);
            }
            not_cours_create:

            // cours_edit
            if (preg_match('#^/cours/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::editAction',)), array('_route' => 'cours_edit'));
            }

            // cours_update
            if (preg_match('#^/cours/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::updateAction',)), array('_route' => 'cours_update'));
            }
            not_cours_update:

            // cours_delete
            if (preg_match('#^/cours/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cours_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::deleteAction',)), array('_route' => 'cours_delete'));
            }
            not_cours_delete:

        }

        if (0 === strpos($pathinfo, '/devoir')) {
            // devoir
            if (rtrim($pathinfo, '/') === '/devoir') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'devoir');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::indexAction',  '_route' => 'devoir',);
            }

            // devoir_show
            if (preg_match('#^/devoir/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::showAction',)), array('_route' => 'devoir_show'));
            }

            // devoir_new
            if ($pathinfo === '/devoir/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::newAction',  '_route' => 'devoir_new',);
            }

            // devoir_create
            if ($pathinfo === '/devoir/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_devoir_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::createAction',  '_route' => 'devoir_create',);
            }
            not_devoir_create:

            // devoir_edit
            if (preg_match('#^/devoir/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::editAction',)), array('_route' => 'devoir_edit'));
            }

            // devoir_update
            if (preg_match('#^/devoir/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_devoir_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::updateAction',)), array('_route' => 'devoir_update'));
            }
            not_devoir_update:

            // devoir_delete
            if (preg_match('#^/devoir/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_devoir_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::deleteAction',)), array('_route' => 'devoir_delete'));
            }
            not_devoir_delete:

        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe',);
            }

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::showAction',)), array('_route' => 'groupe_show'));
            }

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
            }

            // groupe_create
            if ($pathinfo === '/groupe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::createAction',  '_route' => 'groupe_create',);
            }
            not_groupe_create:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::editAction',)), array('_route' => 'groupe_edit'));
            }

            // groupe_update
            if (preg_match('#^/groupe/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::updateAction',)), array('_route' => 'groupe_update'));
            }
            not_groupe_update:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::deleteAction',)), array('_route' => 'groupe_delete'));
            }
            not_groupe_delete:

            if (0 === strpos($pathinfo, '/groupedevoir')) {
                // groupedevoir
                if (rtrim($pathinfo, '/') === '/groupedevoir') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'groupedevoir');
                    }
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::indexAction',  '_route' => 'groupedevoir',);
                }

                // groupedevoir_show
                if (preg_match('#^/groupedevoir/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::showAction',)), array('_route' => 'groupedevoir_show'));
                }

                // groupedevoir_new
                if ($pathinfo === '/groupedevoir/new') {
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::newAction',  '_route' => 'groupedevoir_new',);
                }

                // groupedevoir_create
                if ($pathinfo === '/groupedevoir/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groupedevoir_create;
                    }
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::createAction',  '_route' => 'groupedevoir_create',);
                }
                not_groupedevoir_create:

                // groupedevoir_edit
                if (preg_match('#^/groupedevoir/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::editAction',)), array('_route' => 'groupedevoir_edit'));
                }

                // groupedevoir_update
                if (preg_match('#^/groupedevoir/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groupedevoir_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::updateAction',)), array('_route' => 'groupedevoir_update'));
                }
                not_groupedevoir_update:

                // groupedevoir_delete
                if (preg_match('#^/groupedevoir/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groupedevoir_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::deleteAction',)), array('_route' => 'groupedevoir_delete'));
                }
                not_groupedevoir_delete:

            }

        }

        if (0 === strpos($pathinfo, '/matiere')) {
            // matiere
            if (rtrim($pathinfo, '/') === '/matiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matiere');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
            }

            // matiere_show
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::showAction',)), array('_route' => 'matiere_show'));
            }

            // matiere_new
            if ($pathinfo === '/matiere/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
            }

            // matiere_create
            if ($pathinfo === '/matiere/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
            }
            not_matiere_create:

            // matiere_edit
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::editAction',)), array('_route' => 'matiere_edit'));
            }

            // matiere_update
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::updateAction',)), array('_route' => 'matiere_update'));
            }
            not_matiere_update:

            // matiere_delete
            if (preg_match('#^/matiere/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matiere_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::deleteAction',)), array('_route' => 'matiere_delete'));
            }
            not_matiere_delete:

        }

        if (0 === strpos($pathinfo, '/note')) {
            // note
            if (rtrim($pathinfo, '/') === '/note') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::indexAction',  '_route' => 'note',);
            }

            // note_show
            if (preg_match('#^/note/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::showAction',)), array('_route' => 'note_show'));
            }

            // note_new
            if ($pathinfo === '/note/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::newAction',  '_route' => 'note_new',);
            }

            // note_create
            if ($pathinfo === '/note/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::createAction',  '_route' => 'note_create',);
            }
            not_note_create:

            // note_edit
            if (preg_match('#^/note/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::editAction',)), array('_route' => 'note_edit'));
            }

            // note_update
            if (preg_match('#^/note/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::updateAction',)), array('_route' => 'note_update'));
            }
            not_note_update:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::deleteAction',)), array('_route' => 'note_delete'));
            }
            not_note_delete:

        }

        if (0 === strpos($pathinfo, '/promotion')) {
            // promotion
            if (rtrim($pathinfo, '/') === '/promotion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promotion');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::indexAction',  '_route' => 'promotion',);
            }

            // promotion_show
            if (preg_match('#^/promotion/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::showAction',)), array('_route' => 'promotion_show'));
            }

            // promotion_new
            if ($pathinfo === '/promotion/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::newAction',  '_route' => 'promotion_new',);
            }

            // promotion_create
            if ($pathinfo === '/promotion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_promotion_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::createAction',  '_route' => 'promotion_create',);
            }
            not_promotion_create:

            // promotion_edit
            if (preg_match('#^/promotion/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::editAction',)), array('_route' => 'promotion_edit'));
            }

            // promotion_update
            if (preg_match('#^/promotion/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_promotion_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::updateAction',)), array('_route' => 'promotion_update'));
            }
            not_promotion_update:

            // promotion_delete
            if (preg_match('#^/promotion/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_promotion_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::deleteAction',)), array('_route' => 'promotion_delete'));
            }
            not_promotion_delete:

        }

        if (0 === strpos($pathinfo, '/salle')) {
            // salle
            if (rtrim($pathinfo, '/') === '/salle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'salle');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
            }

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::showAction',)), array('_route' => 'salle_show'));
            }

            // salle_new
            if ($pathinfo === '/salle/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }

            // salle_create
            if ($pathinfo === '/salle/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
            }
            not_salle_create:

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::editAction',)), array('_route' => 'salle_edit'));
            }

            // salle_update
            if (preg_match('#^/salle/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::updateAction',)), array('_route' => 'salle_update'));
            }
            not_salle_update:

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salle_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::deleteAction',)), array('_route' => 'salle_delete'));
            }
            not_salle_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
            }

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::showAction',)), array('_route' => 'utilisateur_show'));
            }

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }

            // utilisateur_create
            if ($pathinfo === '/utilisateur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
            }
            not_utilisateur_create:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::editAction',)), array('_route' => 'utilisateur_edit'));
            }

            // utilisateur_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::updateAction',)), array('_route' => 'utilisateur_update'));
            }
            not_utilisateur_update:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::deleteAction',)), array('_route' => 'utilisateur_delete'));
            }
            not_utilisateur_delete:

            if (0 === strpos($pathinfo, '/utilisateurcours')) {
                // utilisateurcours
                if (rtrim($pathinfo, '/') === '/utilisateurcours') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'utilisateurcours');
                    }
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::indexAction',  '_route' => 'utilisateurcours',);
                }

                // utilisateurcours_show
                if (preg_match('#^/utilisateurcours/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::showAction',)), array('_route' => 'utilisateurcours_show'));
                }

                // utilisateurcours_new
                if ($pathinfo === '/utilisateurcours/new') {
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::newAction',  '_route' => 'utilisateurcours_new',);
                }

                // utilisateurcours_create
                if ($pathinfo === '/utilisateurcours/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_utilisateurcours_create;
                    }
                    return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::createAction',  '_route' => 'utilisateurcours_create',);
                }
                not_utilisateurcours_create:

                // utilisateurcours_edit
                if (preg_match('#^/utilisateurcours/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::editAction',)), array('_route' => 'utilisateurcours_edit'));
                }

                // utilisateurcours_update
                if (preg_match('#^/utilisateurcours/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_utilisateurcours_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::updateAction',)), array('_route' => 'utilisateurcours_update'));
                }
                not_utilisateurcours_update:

                // utilisateurcours_delete
                if (preg_match('#^/utilisateurcours/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_utilisateurcours_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::deleteAction',)), array('_route' => 'utilisateurcours_delete'));
                }
                not_utilisateurcours_delete:

            }

            // utilisateur_envoi_mail
            if ($pathinfo === '/utilisateurEnvoiMail') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::envoiMailAction',  '_route' => 'utilisateur_envoi_mail',);
            }

        }

        if (0 === strpos($pathinfo, '/contenu')) {
            // contenu
            if (rtrim($pathinfo, '/') === '/contenu') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contenu');
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::indexAction',  '_route' => 'contenu',);
            }

            // contenu_show
            if (preg_match('#^/contenu/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::showAction',)), array('_route' => 'contenu_show'));
            }

            // contenu_new
            if ($pathinfo === '/contenu/new') {
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::newAction',  '_route' => 'contenu_new',);
            }

            // contenu_create
            if ($pathinfo === '/contenu/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contenu_create;
                }
                return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::createAction',  '_route' => 'contenu_create',);
            }
            not_contenu_create:

            // contenu_edit
            if (preg_match('#^/contenu/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::editAction',)), array('_route' => 'contenu_edit'));
            }

            // contenu_update
            if (preg_match('#^/contenu/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contenu_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::updateAction',)), array('_route' => 'contenu_update'));
            }
            not_contenu_update:

            // contenu_delete
            if (preg_match('#^/contenu/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contenu_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::deleteAction',)), array('_route' => 'contenu_delete'));
            }
            not_contenu_delete:

        }

        // home_etu
        if ($pathinfo === '/etu') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexEtuAction',  '_route' => 'home_etu',);
        }

        // home_prof
        if ($pathinfo === '/prof') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexProfAction',  '_route' => 'home_prof',);
        }

        // home_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexAdminAction',  '_route' => 'home_admin',);
        }

        // note_etu
        if ($pathinfo === '/etu/note') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::noteEtudiantAction',  '_route' => 'note_etu',);
        }

        // profil
        if ($pathinfo === '/consulterProfil') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::consulterAction',  '_route' => 'profil',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::contactAction',  '_route' => 'contact',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
