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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // annuaire_homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',  '_route' => 'annuaire_homepage',);
        }

        // annuaire_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'annuaire_home');
            }

            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',  '_route' => 'annuaire_home',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // annuaire_registerpage
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::registerAction',  '_route' => 'annuaire_registerpage',);
            }

            // annuaire_registercompanypage
            if ($pathinfo === '/registercompany') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::registercompanyAction',  '_route' => 'annuaire_registercompanypage',);
            }

        }

        // annuaire_fichesociete
        if (0 === strpos($pathinfo, '/fichesociete') && preg_match('#^/fichesociete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_fichesociete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::ficheAction',));
        }

        if (0 === strpos($pathinfo, '/editsoc')) {
            // annuaire_editpage
            if ($pathinfo === '/editsoc') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::infossocieteAction',  '_route' => 'annuaire_editpage',);
            }

            // annuaire_socialnetwork
            if ($pathinfo === '/editsocialnet') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::socialnetworkcompanyAction',  '_route' => 'annuaire_socialnetwork',);
            }

        }

        // annuaire_listannonces
        if ($pathinfo === '/annonces') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::listannoncesAction',  '_route' => 'annuaire_listannonces',);
        }

        if (0 === strpos($pathinfo, '/detail')) {
            // annuaire_ficheannonce
            if (0 === strpos($pathinfo, '/detailannonce') && preg_match('#^/detailannonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_ficheannonce')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::ficheannonceAction',));
            }

            // annuaire_fichepromotion
            if (0 === strpos($pathinfo, '/detailpromotion') && preg_match('#^/detailpromotion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_fichepromotion')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::fichepromotionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/promotion')) {
            // annuaire_listpromotions
            if ($pathinfo === '/promotions') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::listpromotionsAction',  '_route' => 'annuaire_listpromotions',);
            }

            // annuaire_promotion
            if (preg_match('#^/promotion(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_promotion')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::ajoutpromotionAction',  'id' => 0,));
            }

        }

        // annuaire_mespromotions
        if ($pathinfo === '/mes-promotions') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::mespromotionsAction',  '_route' => 'annuaire_mespromotions',);
        }

        // annuaire_deletepromotion
        if (0 === strpos($pathinfo, '/deletepromotion') && preg_match('#^/deletepromotion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_deletepromotion')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::deletepromotionAction',));
        }

        // annuaire_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::contactAction',  '_route' => 'annuaire_contact',);
        }

        // annuaire_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::searchAction',  '_route' => 'annuaire_search',);
        }

        // annuaire_mescoordonness
        if ($pathinfo === '/mesinfos') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::mesinfosAction',  '_route' => 'annuaire_mescoordonness',);
        }

        // annuaire_ajoutannonce
        if ($pathinfo === '/ajoutannonce') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::ajoutannonceAction',  '_route' => 'annuaire_ajoutannonce',);
        }

        // annuaire_editannonce
        if (0 === strpos($pathinfo, '/editannonce') && preg_match('#^/editannonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_editannonce')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::editannonceAction',));
        }

        // annuaire_deleteannonce
        if (0 === strpos($pathinfo, '/deleteannonce') && preg_match('#^/deleteannonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_deleteannonce')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::deleteannonceAction',));
        }

        // annuaire_monespace
        if ($pathinfo === '/monespace') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::monespaceAction',  '_route' => 'annuaire_monespace',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // annuaire_souscategories
            if ($pathinfo === '/souscategorie') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::sousCategorieAction',  '_route' => 'annuaire_souscategories',);
            }

            // annuaire_specialites
            if ($pathinfo === '/specialite') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::specialiteAction',  '_route' => 'annuaire_specialites',);
            }

        }

        // annuaire_aboutpage
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::aboutAction',  '_route' => 'annuaire_aboutpage',);
        }

        // annuaire_contactpage
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::contactAction',  '_route' => 'annuaire_contactpage',);
        }

        // annuaire_sitemappage
        if ($pathinfo === '/sitemap') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::sitemapAction',  '_route' => 'annuaire_sitemappage',);
        }

        // annuaire_productpage
        if ($pathinfo === '/product') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::productAction',  '_route' => 'annuaire_productpage',);
        }

        if (0 === strpos($pathinfo, '/ca')) {
            // annuaire_cartpage
            if ($pathinfo === '/cart') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::cartAction',  '_route' => 'annuaire_cartpage',);
            }

            // annuaire_categorypage
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::categoryAction',  '_route' => 'annuaire_categorypage',);
            }

        }

        // annuaire_articlepage
        if ($pathinfo === '/article') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::articleAction',  '_route' => 'annuaire_articlepage',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/repondre')) {
                // annuaire_repondre_annonce
                if ($pathinfo === '/repondre') {
                    return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::repondreannonceAction',  '_route' => 'annuaire_repondre_annonce',);
                }

                // annuaire_repondre_promotion
                if ($pathinfo === '/repondrepromo') {
                    return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::repondrepromotionAction',  '_route' => 'annuaire_repondre_promotion',);
                }

            }

            // rechercheannonces
            if ($pathinfo === '/resannonces') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::rechecheannonceAction',  '_route' => 'rechercheannonces',);
            }

        }

        // contactsociete
        if ($pathinfo === '/contactersoc') {
            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnuaireController::contactsocieteAction',  '_route' => 'contactsociete',);
        }

        if (0 === strpos($pathinfo, '/rep')) {
            // annuaire_reppromotions
            if ($pathinfo === '/reppromotions') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::reppromotionsAction',  '_route' => 'annuaire_reppromotions',);
            }

            // annuaire_repannonces
            if ($pathinfo === '/repannonces') {
                return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::repannoncesAction',  '_route' => 'annuaire_repannonces',);
            }

        }

        if (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/deleterep')) {
                // annuaire_deleterepprom
                if (0 === strpos($pathinfo, '/deleterepprom') && preg_match('#^/deleterepprom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_deleterepprom')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::deletereppromAction',));
                }

                // annuaire_deleterepannonces
                if (0 === strpos($pathinfo, '/deleterepannonce') && preg_match('#^/deleterepannonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_deleterepannonces')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::deleterepannonceAction',));
                }

            }

            if (0 === strpos($pathinfo, '/detailsrep')) {
                // annuaire_detailsrepannonces
                if (0 === strpos($pathinfo, '/detailsrepannonce') && preg_match('#^/detailsrepannonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_detailsrepannonces')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::detailsrepannonceAction',));
                }

                // annuaire_detailsreppromotions
                if (0 === strpos($pathinfo, '/detailsreppromotions') && preg_match('#^/detailsreppromotions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuaire_detailsreppromotions')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ProfilController::detailsreppromotionAction',));
                }

            }

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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/business/annuaire')) {
                if (0 === strpos($pathinfo, '/admin/business/annuaire/user')) {
                    // admin_business_annuaire_user_list
                    if ($pathinfo === '/admin/business/annuaire/user/list') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_list',  '_route' => 'admin_business_annuaire_user_list',);
                    }

                    // admin_business_annuaire_user_create
                    if ($pathinfo === '/admin/business/annuaire/user/create') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_create',  '_route' => 'admin_business_annuaire_user_create',);
                    }

                    // admin_business_annuaire_user_batch
                    if ($pathinfo === '/admin/business/annuaire/user/batch') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_batch',  '_route' => 'admin_business_annuaire_user_batch',);
                    }

                    // admin_business_annuaire_user_edit
                    if (preg_match('#^/admin/business/annuaire/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_user_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_edit',));
                    }

                    // admin_business_annuaire_user_delete
                    if (preg_match('#^/admin/business/annuaire/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_user_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_delete',));
                    }

                    // admin_business_annuaire_user_show
                    if (preg_match('#^/admin/business/annuaire/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_user_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_show',));
                    }

                    // admin_business_annuaire_user_export
                    if ($pathinfo === '/admin/business/annuaire/user/export') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.user',  '_sonata_name' => 'admin_business_annuaire_user_export',  '_route' => 'admin_business_annuaire_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/business/annuaire/annonce')) {
                    // admin_business_annuaire_annonce_list
                    if ($pathinfo === '/admin/business/annuaire/annonce/list') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_list',  '_route' => 'admin_business_annuaire_annonce_list',);
                    }

                    // admin_business_annuaire_annonce_create
                    if ($pathinfo === '/admin/business/annuaire/annonce/create') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_create',  '_route' => 'admin_business_annuaire_annonce_create',);
                    }

                    // admin_business_annuaire_annonce_batch
                    if ($pathinfo === '/admin/business/annuaire/annonce/batch') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_batch',  '_route' => 'admin_business_annuaire_annonce_batch',);
                    }

                    // admin_business_annuaire_annonce_edit
                    if (preg_match('#^/admin/business/annuaire/annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_annonce_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_edit',));
                    }

                    // admin_business_annuaire_annonce_delete
                    if (preg_match('#^/admin/business/annuaire/annonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_annonce_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_delete',));
                    }

                    // admin_business_annuaire_annonce_show
                    if (preg_match('#^/admin/business/annuaire/annonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_annonce_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_show',));
                    }

                    // admin_business_annuaire_annonce_export
                    if ($pathinfo === '/admin/business/annuaire/annonce/export') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\AnnonceAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.annonce',  '_sonata_name' => 'admin_business_annuaire_annonce_export',  '_route' => 'admin_business_annuaire_annonce_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/business/annuaire/c')) {
                    if (0 === strpos($pathinfo, '/admin/business/annuaire/categorie')) {
                        // admin_business_annuaire_categorie_list
                        if ($pathinfo === '/admin/business/annuaire/categorie/list') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_list',  '_route' => 'admin_business_annuaire_categorie_list',);
                        }

                        // admin_business_annuaire_categorie_create
                        if ($pathinfo === '/admin/business/annuaire/categorie/create') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_create',  '_route' => 'admin_business_annuaire_categorie_create',);
                        }

                        // admin_business_annuaire_categorie_batch
                        if ($pathinfo === '/admin/business/annuaire/categorie/batch') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_batch',  '_route' => 'admin_business_annuaire_categorie_batch',);
                        }

                        // admin_business_annuaire_categorie_edit
                        if (preg_match('#^/admin/business/annuaire/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_categorie_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_edit',));
                        }

                        // admin_business_annuaire_categorie_delete
                        if (preg_match('#^/admin/business/annuaire/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_categorie_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_delete',));
                        }

                        // admin_business_annuaire_categorie_show
                        if (preg_match('#^/admin/business/annuaire/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_categorie_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_show',));
                        }

                        // admin_business_annuaire_categorie_export
                        if ($pathinfo === '/admin/business/annuaire/categorie/export') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\CategorieAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.categorie',  '_sonata_name' => 'admin_business_annuaire_categorie_export',  '_route' => 'admin_business_annuaire_categorie_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/business/annuaire/contact')) {
                        // admin_business_annuaire_contact_list
                        if ($pathinfo === '/admin/business/annuaire/contact/list') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_list',  '_route' => 'admin_business_annuaire_contact_list',);
                        }

                        // admin_business_annuaire_contact_create
                        if ($pathinfo === '/admin/business/annuaire/contact/create') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_create',  '_route' => 'admin_business_annuaire_contact_create',);
                        }

                        // admin_business_annuaire_contact_batch
                        if ($pathinfo === '/admin/business/annuaire/contact/batch') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_batch',  '_route' => 'admin_business_annuaire_contact_batch',);
                        }

                        // admin_business_annuaire_contact_edit
                        if (preg_match('#^/admin/business/annuaire/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_contact_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_edit',));
                        }

                        // admin_business_annuaire_contact_delete
                        if (preg_match('#^/admin/business/annuaire/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_contact_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_delete',));
                        }

                        // admin_business_annuaire_contact_show
                        if (preg_match('#^/admin/business/annuaire/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_contact_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_show',));
                        }

                        // admin_business_annuaire_contact_export
                        if ($pathinfo === '/admin/business/annuaire/contact/export') {
                            return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\ContactAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.contact',  '_sonata_name' => 'admin_business_annuaire_contact_export',  '_route' => 'admin_business_annuaire_contact_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/business/annuaire/specialite')) {
                    // admin_business_annuaire_specialite_list
                    if ($pathinfo === '/admin/business/annuaire/specialite/list') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_list',  '_route' => 'admin_business_annuaire_specialite_list',);
                    }

                    // admin_business_annuaire_specialite_create
                    if ($pathinfo === '/admin/business/annuaire/specialite/create') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_create',  '_route' => 'admin_business_annuaire_specialite_create',);
                    }

                    // admin_business_annuaire_specialite_batch
                    if ($pathinfo === '/admin/business/annuaire/specialite/batch') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_batch',  '_route' => 'admin_business_annuaire_specialite_batch',);
                    }

                    // admin_business_annuaire_specialite_edit
                    if (preg_match('#^/admin/business/annuaire/specialite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_specialite_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_edit',));
                    }

                    // admin_business_annuaire_specialite_delete
                    if (preg_match('#^/admin/business/annuaire/specialite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_specialite_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_delete',));
                    }

                    // admin_business_annuaire_specialite_show
                    if (preg_match('#^/admin/business/annuaire/specialite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_specialite_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_show',));
                    }

                    // admin_business_annuaire_specialite_export
                    if ($pathinfo === '/admin/business/annuaire/specialite/export') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\SpecialiteAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.specialite',  '_sonata_name' => 'admin_business_annuaire_specialite_export',  '_route' => 'admin_business_annuaire_specialite_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/business/annuaire/domaine')) {
                    // admin_business_annuaire_domaine_list
                    if ($pathinfo === '/admin/business/annuaire/domaine/list') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_list',  '_route' => 'admin_business_annuaire_domaine_list',);
                    }

                    // admin_business_annuaire_domaine_create
                    if ($pathinfo === '/admin/business/annuaire/domaine/create') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_create',  '_route' => 'admin_business_annuaire_domaine_create',);
                    }

                    // admin_business_annuaire_domaine_batch
                    if ($pathinfo === '/admin/business/annuaire/domaine/batch') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_batch',  '_route' => 'admin_business_annuaire_domaine_batch',);
                    }

                    // admin_business_annuaire_domaine_edit
                    if (preg_match('#^/admin/business/annuaire/domaine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_domaine_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_edit',));
                    }

                    // admin_business_annuaire_domaine_delete
                    if (preg_match('#^/admin/business/annuaire/domaine/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_domaine_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_delete',));
                    }

                    // admin_business_annuaire_domaine_show
                    if (preg_match('#^/admin/business/annuaire/domaine/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_domaine_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_show',));
                    }

                    // admin_business_annuaire_domaine_export
                    if ($pathinfo === '/admin/business/annuaire/domaine/export') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\DomaineAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.domaine',  '_sonata_name' => 'admin_business_annuaire_domaine_export',  '_route' => 'admin_business_annuaire_domaine_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/business/annuaire/promotion')) {
                    // admin_business_annuaire_promotion_list
                    if ($pathinfo === '/admin/business/annuaire/promotion/list') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::listAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_list',  '_route' => 'admin_business_annuaire_promotion_list',);
                    }

                    // admin_business_annuaire_promotion_create
                    if ($pathinfo === '/admin/business/annuaire/promotion/create') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::createAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_create',  '_route' => 'admin_business_annuaire_promotion_create',);
                    }

                    // admin_business_annuaire_promotion_batch
                    if ($pathinfo === '/admin/business/annuaire/promotion/batch') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::batchAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_batch',  '_route' => 'admin_business_annuaire_promotion_batch',);
                    }

                    // admin_business_annuaire_promotion_edit
                    if (preg_match('#^/admin/business/annuaire/promotion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_promotion_edit')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::editAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_edit',));
                    }

                    // admin_business_annuaire_promotion_delete
                    if (preg_match('#^/admin/business/annuaire/promotion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_promotion_delete')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::deleteAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_delete',));
                    }

                    // admin_business_annuaire_promotion_show
                    if (preg_match('#^/admin/business/annuaire/promotion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_business_annuaire_promotion_show')), array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::showAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_show',));
                    }

                    // admin_business_annuaire_promotion_export
                    if ($pathinfo === '/admin/business/annuaire/promotion/export') {
                        return array (  '_controller' => 'Business\\AnnuaireBundle\\Controller\\PromotionAdminController::exportAction',  '_sonata_admin' => 'business_annuaire.admin.promotion',  '_sonata_name' => 'admin_business_annuaire_promotion_export',  '_route' => 'admin_business_annuaire_promotion_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ($pathinfo === '/admin/sonata/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ($pathinfo === '/admin/sonata/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ($pathinfo === '/admin/sonata/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ($pathinfo === '/admin/sonata/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ($pathinfo === '/admin/sonata/user/group/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ($pathinfo === '/admin/sonata/user/group/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ($pathinfo === '/admin/sonata/user/group/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ($pathinfo === '/admin/sonata/user/group/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
