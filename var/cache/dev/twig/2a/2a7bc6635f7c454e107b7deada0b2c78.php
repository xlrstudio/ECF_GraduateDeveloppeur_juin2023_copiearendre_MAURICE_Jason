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

/* easycorp/easyadmin-bundle/assets/js/form.js */
class __TwigTemplate_b2c6d1fe5ede4490f476e9efba73e44e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/form.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/form.js"));

        // line 1
        echo "import DirtyForm from 'dirty-form';

document.addEventListener('DOMContentLoaded', () => {
    new Form();
});

class Form {
    constructor() {
        this.#createUnsavedFormChangesWarning();
        this.#createFieldsWithErrors();
        this.#preventMultipleFormSubmission();
    }

    #createUnsavedFormChangesWarning() {
        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null === form) {
                return;
            }

            // although DirtyForm supports passing a custom message to display,
            // modern browsers don't allow to display custom messages to protect users
            new DirtyForm(form);
        });
    }

    #createFieldsWithErrors() {
        const handleFieldsWithErrors = (form, pageName) => {
            // Intercept errors before submit to avoid browser error \"An invalid form control with name='...' is not focusable.\"
            //
            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            //
            // Adding visual error counter feedback for invalid fields inside form tabs (visible or not)
            document.querySelector('.ea-edit, .ea-new').querySelectorAll('[type=\"submit\"]').forEach((button) => {
                button.addEventListener('click', function onSubmitButtonsClick(clickEvent) {
                    let formHasErrors = false;

                    // Remove all error counter badges
                    document.querySelectorAll('.form-tabs .nav-item .badge-danger.badge').forEach( (badge) => {
                        badge.parentElement.removeChild(badge);
                    });
                    
                    if (null !== form.getAttribute('novalidate')) {
                        return;
                    }

                    form.querySelectorAll('input,select,textarea').forEach( (input) => {
                        if (!input.disabled && !input.validity.valid) {
                            formHasErrors = true;

                            // Visual feedback for tabs
                            // Adding a badge with a error count next to the tab label
                            const formTab = input.closest('div.tab-pane');
                            if (formTab) {
                                const navLinkTab = document.querySelector(`#\${ formTab.id }-tab`);
                                const badge = navLinkTab.querySelector('.badge');
                                if (badge) {
                                    // Increment number of error
                                    badge.textContent = (parseInt(badge.textContent) + 1).toString();
                                } else {
                                    // Create a new badge
                                    let newErrorBadge = document.createElement('span');
                                    newErrorBadge.classList.add('badge', 'badge-danger');
                                    newErrorBadge.title = 'form.tab.error_badge_title';
                                    newErrorBadge.textContent = '1';
                                    navLinkTab.appendChild(newErrorBadge);
                                }
                                navLinkTab.addEventListener('click', function onFormNavLinkTabClick() {
                                    navLinkTab.querySelectorAll('.badge-danger.badge').forEach( (badge) => {
                                        badge.parentElement.removeChild(badge);
                                    });
                                    navLinkTab.removeEventListener('click', onFormNavLinkTabClick);
                                });
                            }

                            // Visual feedback for group
                            const formGroup = input.closest('div.form-group');
                            formGroup.classList.add('has-error');

                            formGroup.addEventListener('click', function onFormGroupClick() {
                                formGroup.classList.remove('has-error');
                                formGroup.removeEventListener('click', onFormGroupClick);
                            });
                        }
                    });

                    if (formHasErrors) {
                        clickEvent.preventDefault();
                        clickEvent.stopPropagation();
                    }
                });
            });

            form.addEventListener('submit', (submitEvent) => {
                const eaEvent = new CustomEvent('ea.form.submit', {
                    cancelable: true,
                    detail: { page: pageName, form: form }
                });
                const eaEventResult = document.dispatchEvent(eaEvent);
                if (false === eaEventResult) {
                    submitEvent.preventDefault();
                    submitEvent.stopPropagation();
                }
            });
        };

        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null !== form) {
                handleFieldsWithErrors(form, formSelector.includes('-new-') ? 'new' : 'edit');
            }
        });
    }

    #preventMultipleFormSubmission() {
        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null === form) {
                return;
            }

            form.addEventListener('submit', () => {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(() => {
                    const submitButtons = document.querySelector('.ea-edit, .ea-new').querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach((button) => {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/form.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("import DirtyForm from 'dirty-form';

document.addEventListener('DOMContentLoaded', () => {
    new Form();
});

class Form {
    constructor() {
        this.#createUnsavedFormChangesWarning();
        this.#createFieldsWithErrors();
        this.#preventMultipleFormSubmission();
    }

    #createUnsavedFormChangesWarning() {
        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null === form) {
                return;
            }

            // although DirtyForm supports passing a custom message to display,
            // modern browsers don't allow to display custom messages to protect users
            new DirtyForm(form);
        });
    }

    #createFieldsWithErrors() {
        const handleFieldsWithErrors = (form, pageName) => {
            // Intercept errors before submit to avoid browser error \"An invalid form control with name='...' is not focusable.\"
            //
            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            //
            // Adding visual error counter feedback for invalid fields inside form tabs (visible or not)
            document.querySelector('.ea-edit, .ea-new').querySelectorAll('[type=\"submit\"]').forEach((button) => {
                button.addEventListener('click', function onSubmitButtonsClick(clickEvent) {
                    let formHasErrors = false;

                    // Remove all error counter badges
                    document.querySelectorAll('.form-tabs .nav-item .badge-danger.badge').forEach( (badge) => {
                        badge.parentElement.removeChild(badge);
                    });
                    
                    if (null !== form.getAttribute('novalidate')) {
                        return;
                    }

                    form.querySelectorAll('input,select,textarea').forEach( (input) => {
                        if (!input.disabled && !input.validity.valid) {
                            formHasErrors = true;

                            // Visual feedback for tabs
                            // Adding a badge with a error count next to the tab label
                            const formTab = input.closest('div.tab-pane');
                            if (formTab) {
                                const navLinkTab = document.querySelector(`#\${ formTab.id }-tab`);
                                const badge = navLinkTab.querySelector('.badge');
                                if (badge) {
                                    // Increment number of error
                                    badge.textContent = (parseInt(badge.textContent) + 1).toString();
                                } else {
                                    // Create a new badge
                                    let newErrorBadge = document.createElement('span');
                                    newErrorBadge.classList.add('badge', 'badge-danger');
                                    newErrorBadge.title = 'form.tab.error_badge_title';
                                    newErrorBadge.textContent = '1';
                                    navLinkTab.appendChild(newErrorBadge);
                                }
                                navLinkTab.addEventListener('click', function onFormNavLinkTabClick() {
                                    navLinkTab.querySelectorAll('.badge-danger.badge').forEach( (badge) => {
                                        badge.parentElement.removeChild(badge);
                                    });
                                    navLinkTab.removeEventListener('click', onFormNavLinkTabClick);
                                });
                            }

                            // Visual feedback for group
                            const formGroup = input.closest('div.form-group');
                            formGroup.classList.add('has-error');

                            formGroup.addEventListener('click', function onFormGroupClick() {
                                formGroup.classList.remove('has-error');
                                formGroup.removeEventListener('click', onFormGroupClick);
                            });
                        }
                    });

                    if (formHasErrors) {
                        clickEvent.preventDefault();
                        clickEvent.stopPropagation();
                    }
                });
            });

            form.addEventListener('submit', (submitEvent) => {
                const eaEvent = new CustomEvent('ea.form.submit', {
                    cancelable: true,
                    detail: { page: pageName, form: form }
                });
                const eaEventResult = document.dispatchEvent(eaEvent);
                if (false === eaEventResult) {
                    submitEvent.preventDefault();
                    submitEvent.stopPropagation();
                }
            });
        };

        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null !== form) {
                handleFieldsWithErrors(form, formSelector.includes('-new-') ? 'new' : 'edit');
            }
        });
    }

    #preventMultipleFormSubmission() {
        ['.ea-new-form', '.ea-edit-form'].forEach((formSelector) => {
            const form = document.querySelector(formSelector);
            if (null === form) {
                return;
            }

            form.addEventListener('submit', () => {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(() => {
                    const submitButtons = document.querySelector('.ea-edit, .ea-new').querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach((button) => {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    }
}
", "easycorp/easyadmin-bundle/assets/js/form.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\form.js");
    }
}
