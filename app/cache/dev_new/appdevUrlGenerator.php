<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'AngeAngeBundle_home' => true,
       'cours' => true,
       'cours_show' => true,
       'cours_new' => true,
       'cours_create' => true,
       'cours_edit' => true,
       'cours_update' => true,
       'cours_delete' => true,
       'devoir' => true,
       'devoir_show' => true,
       'devoir_new' => true,
       'devoir_create' => true,
       'devoir_edit' => true,
       'devoir_update' => true,
       'devoir_delete' => true,
       'groupe' => true,
       'groupe_show' => true,
       'groupe_new' => true,
       'groupe_create' => true,
       'groupe_edit' => true,
       'groupe_update' => true,
       'groupe_delete' => true,
       'groupedevoir' => true,
       'groupedevoir_show' => true,
       'groupedevoir_new' => true,
       'groupedevoir_create' => true,
       'groupedevoir_edit' => true,
       'groupedevoir_update' => true,
       'groupedevoir_delete' => true,
       'matiere' => true,
       'matiere_show' => true,
       'matiere_new' => true,
       'matiere_create' => true,
       'matiere_edit' => true,
       'matiere_update' => true,
       'matiere_delete' => true,
       'note' => true,
       'note_show' => true,
       'note_new' => true,
       'note_create' => true,
       'note_edit' => true,
       'note_update' => true,
       'note_delete' => true,
       'promotion' => true,
       'promotion_show' => true,
       'promotion_new' => true,
       'promotion_create' => true,
       'promotion_edit' => true,
       'promotion_update' => true,
       'promotion_delete' => true,
       'salle' => true,
       'salle_show' => true,
       'salle_new' => true,
       'salle_create' => true,
       'salle_edit' => true,
       'salle_update' => true,
       'salle_delete' => true,
       'utilisateur' => true,
       'utilisateur_show' => true,
       'utilisateur_new' => true,
       'utilisateur_create' => true,
       'utilisateur_edit' => true,
       'utilisateur_update' => true,
       'utilisateur_delete' => true,
       'utilisateurcours' => true,
       'utilisateurcours_show' => true,
       'utilisateurcours_new' => true,
       'utilisateurcours_create' => true,
       'utilisateurcours_edit' => true,
       'utilisateurcours_update' => true,
       'utilisateurcours_delete' => true,
       'contenu' => true,
       'contenu_show' => true,
       'contenu_new' => true,
       'contenu_create' => true,
       'contenu_edit' => true,
       'contenu_update' => true,
       'contenu_delete' => true,
       'home_etu' => true,
       'home_prof' => true,
       'home_admin' => true,
       'note_etu' => true,
       'profil' => true,
       'contact' => true,
       'utilisateur_envoi_mail' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getAngeAngeBundle_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getcoursRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cours/',  ),));
    }

    private function getcours_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/cours',  ),));
    }

    private function getcours_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cours/new',  ),));
    }

    private function getcours_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/cours/create',  ),));
    }

    private function getcours_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/cours',  ),));
    }

    private function getcours_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/cours',  ),));
    }

    private function getcours_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\CoursController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/cours',  ),));
    }

    private function getdevoirRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/devoir/',  ),));
    }

    private function getdevoir_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/devoir',  ),));
    }

    private function getdevoir_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/devoir/new',  ),));
    }

    private function getdevoir_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/devoir/create',  ),));
    }

    private function getdevoir_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/devoir',  ),));
    }

    private function getdevoir_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/devoir',  ),));
    }

    private function getdevoir_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\DevoirController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/devoir',  ),));
    }

    private function getgroupeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupe/',  ),));
    }

    private function getgroupe_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupe',  ),));
    }

    private function getgroupe_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupe/new',  ),));
    }

    private function getgroupe_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/groupe/create',  ),));
    }

    private function getgroupe_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupe',  ),));
    }

    private function getgroupe_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupe',  ),));
    }

    private function getgroupe_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupeController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupe',  ),));
    }

    private function getgroupedevoirRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupedevoir/',  ),));
    }

    private function getgroupedevoir_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupedevoir',  ),));
    }

    private function getgroupedevoir_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupedevoir/new',  ),));
    }

    private function getgroupedevoir_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/groupedevoir/create',  ),));
    }

    private function getgroupedevoir_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupedevoir',  ),));
    }

    private function getgroupedevoir_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupedevoir',  ),));
    }

    private function getgroupedevoir_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\GroupedevoirController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupedevoir',  ),));
    }

    private function getmatiereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/matiere/',  ),));
    }

    private function getmatiere_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/matiere/new',  ),));
    }

    private function getmatiere_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/matiere/create',  ),));
    }

    private function getmatiere_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getmatiere_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\MatiereController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/matiere',  ),));
    }

    private function getnoteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/note/',  ),));
    }

    private function getnote_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/note',  ),));
    }

    private function getnote_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/note/new',  ),));
    }

    private function getnote_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/note/create',  ),));
    }

    private function getnote_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/note',  ),));
    }

    private function getnote_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/note',  ),));
    }

    private function getnote_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/note',  ),));
    }

    private function getpromotionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/promotion/',  ),));
    }

    private function getpromotion_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/promotion',  ),));
    }

    private function getpromotion_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/promotion/new',  ),));
    }

    private function getpromotion_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/promotion/create',  ),));
    }

    private function getpromotion_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/promotion',  ),));
    }

    private function getpromotion_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/promotion',  ),));
    }

    private function getpromotion_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\PromotionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/promotion',  ),));
    }

    private function getsalleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/salle/',  ),));
    }

    private function getsalle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/salle',  ),));
    }

    private function getsalle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/salle/new',  ),));
    }

    private function getsalle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/salle/create',  ),));
    }

    private function getsalle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/salle',  ),));
    }

    private function getsalle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/salle',  ),));
    }

    private function getsalle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\SalleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/salle',  ),));
    }

    private function getutilisateurRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/utilisateur/',  ),));
    }

    private function getutilisateur_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateur',  ),));
    }

    private function getutilisateur_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/utilisateur/new',  ),));
    }

    private function getutilisateur_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/utilisateur/create',  ),));
    }

    private function getutilisateur_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateur',  ),));
    }

    private function getutilisateur_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateur',  ),));
    }

    private function getutilisateur_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateur',  ),));
    }

    private function getutilisateurcoursRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/utilisateurcours/',  ),));
    }

    private function getutilisateurcours_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateurcours',  ),));
    }

    private function getutilisateurcours_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/utilisateurcours/new',  ),));
    }

    private function getutilisateurcours_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/utilisateurcours/create',  ),));
    }

    private function getutilisateurcours_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateurcours',  ),));
    }

    private function getutilisateurcours_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateurcours',  ),));
    }

    private function getutilisateurcours_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurCoursController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/utilisateurcours',  ),));
    }

    private function getcontenuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contenu/',  ),));
    }

    private function getcontenu_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contenu',  ),));
    }

    private function getcontenu_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contenu/new',  ),));
    }

    private function getcontenu_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/contenu/create',  ),));
    }

    private function getcontenu_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contenu',  ),));
    }

    private function getcontenu_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contenu',  ),));
    }

    private function getcontenu_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\ContenuController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contenu',  ),));
    }

    private function gethome_etuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexEtuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/etu',  ),));
    }

    private function gethome_profRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexProfAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/prof',  ),));
    }

    private function gethome_adminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\HomeController::indexAdminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getnote_etuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\NoteController::noteEtudiantAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/etu/note',  ),));
    }

    private function getprofilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::consulterAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/consulterProfil',  ),));
    }

    private function getcontactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getutilisateur_envoi_mailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ange\\AngeBundle\\Controller\\UtilisateurController::envoiMailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/utilisateurEnvoiMail',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }
}
