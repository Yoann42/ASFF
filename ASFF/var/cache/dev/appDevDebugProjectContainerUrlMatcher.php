<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // asff_core_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'asff_core_homepage');
            }

            return array (  '_controller' => 'ASFF\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'asff_core_homepage',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // asff_user_home
            if ('/profile' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'asff_user_home');
                }

                return array (  '_controller' => 'ASFF\\UserBundle\\Controller\\MonCompteController::indexAction',  '_route' => 'asff_user_home',);
            }

            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/tournois')) {
            // asff_tournois_home
            if ('/tournois' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'asff_tournois_home');
                }

                return array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::indexAction',  '_route' => 'asff_tournois_home',);
            }

            // asff_tournois_view
            if (preg_match('#^/tournois/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_view')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::viewAction',));
            }

            // asff_tournois_add
            if ('/tournois/add' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::addAction',  '_route' => 'asff_tournois_add',);
            }

            // asff_tournois_edit
            if (0 === strpos($pathinfo, '/tournois/edit') && preg_match('#^/tournois/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_edit')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::editAction',));
            }

            // asff_tournois_delete
            if (0 === strpos($pathinfo, '/tournois/delete') && preg_match('#^/tournois/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_delete')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::deleteAction',));
            }

            // asff_tournois_getinfo
            if (0 === strpos($pathinfo, '/tournois/recupererparticipant') && preg_match('#^/tournois/recupererparticipant/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_getinfo')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\TournoisController::getparticipantsAction',));
            }

            if (0 === strpos($pathinfo, '/tournois/inscription')) {
                // asff_tournois_inscription_add
                if (0 === strpos($pathinfo, '/tournois/inscription/add') && preg_match('#^/tournois/inscription/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_inscription_add')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\InscriptionController::addAction',));
                }

                // asff_tournois_inscription_edit
                if (0 === strpos($pathinfo, '/tournois/inscription/edit') && preg_match('#^/tournois/inscription/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_inscription_edit')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\InscriptionController::editAction',));
                }

                // asff_tournois_inscription_delete
                if (0 === strpos($pathinfo, '/tournois/inscription/delete') && preg_match('#^/tournois/inscription/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_tournois_inscription_delete')), array (  '_controller' => 'ASFF\\TournoisBundle\\Controller\\InscriptionController::deleteAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/le-club')) {
                // asff_club_association
                if ('/le-club/association' === $pathinfo) {
                    return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\LeClubController::associationAction',  '_route' => 'asff_club_association',);
                }

                // asff_club_contacts
                if ('/le-club/contacts' === $pathinfo) {
                    return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\LeClubController::contactsAction',  '_route' => 'asff_club_contacts',);
                }

                // asff_club_lebureau
                if ('/le-club/le-bureau' === $pathinfo) {
                    return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\LeClubController::lebureauAction',  '_route' => 'asff_club_lebureau',);
                }

                // asff_club_lieuhoraire
                if ('/le-club/lieu-horaire' === $pathinfo) {
                    return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\LeClubController::lieuhoraireAction',  '_route' => 'asff_club_lieuhoraire',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'ASFF\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'ASFF\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'ASFF\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/infos-techniques')) {
            // asff_club_conseils
            if ('/infos-techniques/conseils' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\InfoTechController::conseilsAction',  '_route' => 'asff_club_conseils',);
            }

            // asff_club_formations
            if ('/infos-techniques/formations' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\InfoTechController::formationsAction',  '_route' => 'asff_club_formations',);
            }

            // asff_club_liens
            if ('/infos-techniques/liens' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\InfoTechController::liensAction',  '_route' => 'asff_club_liens',);
            }

            // asff_club_reglesdubad
            if ('/infos-techniques/regles-du-bad' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\ClubBundle\\Controller\\InfoTechController::reglesdubadAction',  '_route' => 'asff_club_reglesdubad',);
            }

        }

        elseif (0 === strpos($pathinfo, '/news')) {
            // asff_actualite_home
            if ('/news' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'asff_actualite_home');
                }

                return array (  '_controller' => 'ASFF\\ActualiteBundle\\Controller\\ActuController::indexAction',  '_route' => 'asff_actualite_home',);
            }

            // asff_actualite_view
            if (preg_match('#^/news/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_actualite_view')), array (  '_controller' => 'ASFF\\ActualiteBundle\\Controller\\ActuController::viewAction',));
            }

            // asff_actualite_add
            if ('/news/add' === $pathinfo) {
                return array (  '_controller' => 'ASFF\\ActualiteBundle\\Controller\\ActuController::addAction',  '_route' => 'asff_actualite_add',);
            }

            // asff_actualite_edit
            if (0 === strpos($pathinfo, '/news/edit') && preg_match('#^/news/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_actualite_edit')), array (  '_controller' => 'ASFF\\ActualiteBundle\\Controller\\ActuController::editAction',));
            }

            // asff_actualite_delete
            if (0 === strpos($pathinfo, '/news/delete') && preg_match('#^/news/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asff_actualite_delete')), array (  '_controller' => 'ASFF\\ActualiteBundle\\Controller\\ActuController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ('/group/list' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ('/group/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_new;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_group_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
