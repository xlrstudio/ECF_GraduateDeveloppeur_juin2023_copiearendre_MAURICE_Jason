<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/menu.scss */
class __TwigTemplate_f7116390de095069f35c9289e8294127 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/menu.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/menu.scss"));

        // line 1
        echo "// Sidebar navigation menu
// ----------------------------------------------------------------------------

#main-menu {
    padding: 0 0 20px;

    .menu {
        padding-left: 0;

        li { list-style: none; }

        .menu-header {
            color: var(--sidebar-menu-header-color);
            font-size: 12px;
            font-weight: 500;
            line-height: 15px;
            margin-top: 15px;
            padding: 7px 5px 7px var(--sidebar-menu-items-padding-left);
            text-transform: uppercase;

            &:first-child { margin-top: 0; }

            .menu-icon { color: inherit; margin: 0 8px 0 0; }
            .menu-header-contents { display: block; }
            .menu-item-badge {
                float: right;
                margin-left: 16px;
                top: 0;
            }
        }

        .menu-item {
            border-radius: var(--border-radius);
            padding-left: var(--sidebar-menu-items-padding-left);
            padding-right: 5px;
            position: relative;

            &.active {
                background: var(--sidebar-menu-active-item-bg);

                .menu-item-label { font-weight: 500; }

                .menu-item-badge.badge-secondary {
                    background: var(--sidebar-menu-badge-active-bg);
                    color: var(--sidebar-menu-badge-active-color);
                }
            }

            &.active:not(.expanded) a, &.active:not(.expanded) .menu-icon {
                color: var(--sidebar-menu-active-item-color);
            }

            &.has-submenu.expanded .submenu-toggle-icon {
                transform: rotate(90deg);
            }

            &.has-submenu:not(.expanded) .submenu {
                // don't use 'display: none' to hide submenus; it breaks the menu accordion
                max-height: 0px;
            }

            .submenu-toggle {
                .submenu-toggle-icon {
                    color: var(--sidebar-menu-icon-color);
                    position: relative;
                    top: 5px;
                    transition: transform 0.25s ease;
                    width: auto; // this is needed to make it look better
                }
            }
        }

        .menu-item-contents {
            align-items: flex-start;
            color: var(--sidebar-menu-color);
            display: flex;
            padding: 4px 0;
        }

        .menu-icon {
            color: var(--sidebar-menu-icon-color);
            font-size: var(--font-size-lg);
            margin-right: 10px;
            transform: translateY(3px);
            height: 16px;
            width: 20px;
        }

        .menu-item-badge {
            float: right;
            min-width: 25px;
            margin: 0 0 0 8px;
            position: relative;
            top: 2px;

            &.badge-secondary {
                background: var(--sidebar-menu-badge-bg);
                color: var(--sidebar-menu-badge-color);
            }
        }

        .submenu-toggle-icon {
            float: right;
            margin-left: 8px;
        }

        .submenu {
            // padding must be 0 for the element that slides up/down;
            // if some padding is needed, create another HTML element inside this one
            padding: 0;
            overflow: hidden;
            transition: max-height 150ms linear;

            a {
                color: var(--sidebar-menu-submenu-color);
                padding: 3px 0 3px 26px;
            }

            .menu-header {
                padding-left: 26px;
            }

            .menu-item {
                margin: 5px 0 5px 0;
                padding-right: 0;

                &.active {
                    padding-left: 6px;
                    margin-left: 0;
                }
            }
            .menu-icon { font-size: var(--font-size-base); margin-right: 5px; }
            .menu-item-badge { margin-right: 4px; }
        }
    }
}

body.ea-sidebar-width-compact .sidebar {
    padding: 0;
    overflow: visible;

    .main-header .navbar {
        padding-left: var(--sidebar-padding-left);
    }

    #main-menu .menu .menu-item {
        padding-left: var(--sidebar-padding-left);
    }
}

@media(min-width: 992px) {
    body.ea-sidebar-width-compact #main-menu .menu {
        .menu-item {
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            padding-right: 0;

            .menu-item-label, .menu-item-badge, .submenu, .submenu-toggle-icon { display: none; }
            .menu-item-label { flex: 1; }
            .menu-item-contents {
                align-items: center;
                border-radius: 0 var(--border-radius) var(--border-radius) 0;
                display: flex;
                min-width: max-content;
                padding: 7px 5px 7px 0;
            }

            &.active { background: transparent; }

            &:hover {
                background: var(--body-bg);
                box-shadow: var(--sidebar-menu-compact-hover-box-shadow);
                min-width: max-content;
                padding-left: var(--sidebar-padding-left);
                z-index: \$zindex-modal-backdrop;

                .menu-item-label, .menu-item-badge, .submenu, .submenu-toggle-icon { display: block; }
                .menu-item-contents { background: var(--body-bg); }

                .submenu {
                    background: var(--body-bg);
                    border-radius: 0 var(--border-radius) var(--border-radius) var(--border-radius);
                    position: absolute;
                    top: 0;
                    margin-left: 34px;
                    padding: 2px 10px 0 0;
                    width: max-content;
                }
                .submenu a {
                    padding: 3px 5px 3px 13px;
                }
            }

            &.has-submenu:hover {
                .submenu-toggle .menu-item-label { display: none; }
                .submenu-toggle-icon {
                    display: inline-block;
                    font-size: 18px;
                    left: -7px;
                    transform: rotate(0);
                    top: 0;
                    z-index: 9999;
                }
                .submenu .menu-icon { margin-right: 8px; }
            }

            .menu-icon { font-size: 18px; height: 21px; max-width: 21px; }
            .submenu .menu-icon { font-size: 16px; position: relative; left: -4px; width: 21px; }

            .submenu {
                box-shadow: var(--sidebar-menu-compact-hover-box-shadow);
                max-height: initial !important;
                padding-top: 5px;
                padding-bottom: 5px;

                .menu-item:hover { box-shadow: none; }
            }
        }

        .menu-header {
            height: 0;
            overflow: hidden;
            padding: 0;
            width: 0;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/menu.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Sidebar navigation menu
// ----------------------------------------------------------------------------

#main-menu {
    padding: 0 0 20px;

    .menu {
        padding-left: 0;

        li { list-style: none; }

        .menu-header {
            color: var(--sidebar-menu-header-color);
            font-size: 12px;
            font-weight: 500;
            line-height: 15px;
            margin-top: 15px;
            padding: 7px 5px 7px var(--sidebar-menu-items-padding-left);
            text-transform: uppercase;

            &:first-child { margin-top: 0; }

            .menu-icon { color: inherit; margin: 0 8px 0 0; }
            .menu-header-contents { display: block; }
            .menu-item-badge {
                float: right;
                margin-left: 16px;
                top: 0;
            }
        }

        .menu-item {
            border-radius: var(--border-radius);
            padding-left: var(--sidebar-menu-items-padding-left);
            padding-right: 5px;
            position: relative;

            &.active {
                background: var(--sidebar-menu-active-item-bg);

                .menu-item-label { font-weight: 500; }

                .menu-item-badge.badge-secondary {
                    background: var(--sidebar-menu-badge-active-bg);
                    color: var(--sidebar-menu-badge-active-color);
                }
            }

            &.active:not(.expanded) a, &.active:not(.expanded) .menu-icon {
                color: var(--sidebar-menu-active-item-color);
            }

            &.has-submenu.expanded .submenu-toggle-icon {
                transform: rotate(90deg);
            }

            &.has-submenu:not(.expanded) .submenu {
                // don't use 'display: none' to hide submenus; it breaks the menu accordion
                max-height: 0px;
            }

            .submenu-toggle {
                .submenu-toggle-icon {
                    color: var(--sidebar-menu-icon-color);
                    position: relative;
                    top: 5px;
                    transition: transform 0.25s ease;
                    width: auto; // this is needed to make it look better
                }
            }
        }

        .menu-item-contents {
            align-items: flex-start;
            color: var(--sidebar-menu-color);
            display: flex;
            padding: 4px 0;
        }

        .menu-icon {
            color: var(--sidebar-menu-icon-color);
            font-size: var(--font-size-lg);
            margin-right: 10px;
            transform: translateY(3px);
            height: 16px;
            width: 20px;
        }

        .menu-item-badge {
            float: right;
            min-width: 25px;
            margin: 0 0 0 8px;
            position: relative;
            top: 2px;

            &.badge-secondary {
                background: var(--sidebar-menu-badge-bg);
                color: var(--sidebar-menu-badge-color);
            }
        }

        .submenu-toggle-icon {
            float: right;
            margin-left: 8px;
        }

        .submenu {
            // padding must be 0 for the element that slides up/down;
            // if some padding is needed, create another HTML element inside this one
            padding: 0;
            overflow: hidden;
            transition: max-height 150ms linear;

            a {
                color: var(--sidebar-menu-submenu-color);
                padding: 3px 0 3px 26px;
            }

            .menu-header {
                padding-left: 26px;
            }

            .menu-item {
                margin: 5px 0 5px 0;
                padding-right: 0;

                &.active {
                    padding-left: 6px;
                    margin-left: 0;
                }
            }
            .menu-icon { font-size: var(--font-size-base); margin-right: 5px; }
            .menu-item-badge { margin-right: 4px; }
        }
    }
}

body.ea-sidebar-width-compact .sidebar {
    padding: 0;
    overflow: visible;

    .main-header .navbar {
        padding-left: var(--sidebar-padding-left);
    }

    #main-menu .menu .menu-item {
        padding-left: var(--sidebar-padding-left);
    }
}

@media(min-width: 992px) {
    body.ea-sidebar-width-compact #main-menu .menu {
        .menu-item {
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            padding-right: 0;

            .menu-item-label, .menu-item-badge, .submenu, .submenu-toggle-icon { display: none; }
            .menu-item-label { flex: 1; }
            .menu-item-contents {
                align-items: center;
                border-radius: 0 var(--border-radius) var(--border-radius) 0;
                display: flex;
                min-width: max-content;
                padding: 7px 5px 7px 0;
            }

            &.active { background: transparent; }

            &:hover {
                background: var(--body-bg);
                box-shadow: var(--sidebar-menu-compact-hover-box-shadow);
                min-width: max-content;
                padding-left: var(--sidebar-padding-left);
                z-index: \$zindex-modal-backdrop;

                .menu-item-label, .menu-item-badge, .submenu, .submenu-toggle-icon { display: block; }
                .menu-item-contents { background: var(--body-bg); }

                .submenu {
                    background: var(--body-bg);
                    border-radius: 0 var(--border-radius) var(--border-radius) var(--border-radius);
                    position: absolute;
                    top: 0;
                    margin-left: 34px;
                    padding: 2px 10px 0 0;
                    width: max-content;
                }
                .submenu a {
                    padding: 3px 5px 3px 13px;
                }
            }

            &.has-submenu:hover {
                .submenu-toggle .menu-item-label { display: none; }
                .submenu-toggle-icon {
                    display: inline-block;
                    font-size: 18px;
                    left: -7px;
                    transform: rotate(0);
                    top: 0;
                    z-index: 9999;
                }
                .submenu .menu-icon { margin-right: 8px; }
            }

            .menu-icon { font-size: 18px; height: 21px; max-width: 21px; }
            .submenu .menu-icon { font-size: 16px; position: relative; left: -4px; width: 21px; }

            .submenu {
                box-shadow: var(--sidebar-menu-compact-hover-box-shadow);
                max-height: initial !important;
                padding-top: 5px;
                padding-bottom: 5px;

                .menu-item:hover { box-shadow: none; }
            }
        }

        .menu-header {
            height: 0;
            overflow: hidden;
            padding: 0;
            width: 0;
        }
    }
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/menu.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\menu.scss");
    }
}
