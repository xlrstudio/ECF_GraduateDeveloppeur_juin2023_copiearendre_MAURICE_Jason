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

/* easycorp/easyadmin-bundle/assets/js/page-color-scheme.js */
class __TwigTemplate_2958d281444bb41cd7c6e8fe9aef38c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/page-color-scheme.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/page-color-scheme.js"));

        // line 1
        echo "class ColorSchemeHandler {
    #colorSchemeLocalStorageKey;

    constructor() {
        this.#colorSchemeLocalStorageKey = 'ea/colorScheme';
    }

    updateColorScheme() {
        const selectedColorScheme = localStorage.getItem(this.#colorSchemeLocalStorageKey) || 'auto';
        this.#setColorScheme(selectedColorScheme);
    }

    createColorSchemeSelector() {
        if (null === document.querySelector('.dropdown-settings')) {
            return;
        }

        // for·responsive design\" reasons, pages contain two settings dropdowns (and inside them, one
        // scheme selector each) instead of one and the selected scheme must be kept in sync in both
        const colorSchemeSelectors = document.querySelectorAll('.dropdown-settings');
        const currentScheme = localStorage.getItem(this.#colorSchemeLocalStorageKey) || 'auto';

        colorSchemeSelectors.forEach((colorSchemeSelector) => {
            const selectorOptions = colorSchemeSelector.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme]');
            const selectorActiveOption = colorSchemeSelector.querySelector(`a.dropdown-appearance-item[data-ea-color-scheme=\"\${ currentScheme }\"]`);

            selectorOptions.forEach((selector) => { selector.classList.remove('active') });
            selectorActiveOption.classList.add('active');

            selectorOptions.forEach((selector) => {
                selector.addEventListener('click', () => {
                    const selectedColorScheme = selector.getAttribute('data-ea-color-scheme');
                    this.#setColorScheme(selectedColorScheme);

                    const allSelectorOptions = document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme]');
                    const allSelectorActiveOptions = document.querySelectorAll(`a.dropdown-appearance-item[data-ea-color-scheme=\"\${ selectedColorScheme }\"]`);
                    allSelectorOptions.forEach((selectorOption) => { selectorOption.classList.remove('active') });
                    allSelectorActiveOptions.forEach((selectorOption) => { selectorOption.classList.add('active') });
                });
            });
        });
    }

    #setColorScheme(colorScheme) {
        if ('false' === document.body.getAttribute('data-ea-dark-scheme-is-enabled')) {
            return;
        }

        const resolvedColorScheme = 'auto' === colorScheme
            ? matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            : colorScheme;

        document.body.classList.remove('ea-light-scheme', 'ea-dark-scheme');
        document.body.classList.add('light' === resolvedColorScheme ? 'ea-light-scheme' : 'ea-dark-scheme');
        localStorage.setItem(this.#colorSchemeLocalStorageKey, colorScheme);
        document.body.style.colorScheme = resolvedColorScheme;
    }
}

const colorSchemeHandler = new ColorSchemeHandler();
// this method needs to be called even before 'DOMContentLoaded' because
// otherwise the page shows an annoying flicker when loading it
colorSchemeHandler.updateColorScheme();
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
    colorSchemeHandler.updateColorScheme();
});

document.addEventListener('DOMContentLoaded', () => {
    colorSchemeHandler.createColorSchemeSelector();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/page-color-scheme.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("class ColorSchemeHandler {
    #colorSchemeLocalStorageKey;

    constructor() {
        this.#colorSchemeLocalStorageKey = 'ea/colorScheme';
    }

    updateColorScheme() {
        const selectedColorScheme = localStorage.getItem(this.#colorSchemeLocalStorageKey) || 'auto';
        this.#setColorScheme(selectedColorScheme);
    }

    createColorSchemeSelector() {
        if (null === document.querySelector('.dropdown-settings')) {
            return;
        }

        // for·responsive design\" reasons, pages contain two settings dropdowns (and inside them, one
        // scheme selector each) instead of one and the selected scheme must be kept in sync in both
        const colorSchemeSelectors = document.querySelectorAll('.dropdown-settings');
        const currentScheme = localStorage.getItem(this.#colorSchemeLocalStorageKey) || 'auto';

        colorSchemeSelectors.forEach((colorSchemeSelector) => {
            const selectorOptions = colorSchemeSelector.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme]');
            const selectorActiveOption = colorSchemeSelector.querySelector(`a.dropdown-appearance-item[data-ea-color-scheme=\"\${ currentScheme }\"]`);

            selectorOptions.forEach((selector) => { selector.classList.remove('active') });
            selectorActiveOption.classList.add('active');

            selectorOptions.forEach((selector) => {
                selector.addEventListener('click', () => {
                    const selectedColorScheme = selector.getAttribute('data-ea-color-scheme');
                    this.#setColorScheme(selectedColorScheme);

                    const allSelectorOptions = document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme]');
                    const allSelectorActiveOptions = document.querySelectorAll(`a.dropdown-appearance-item[data-ea-color-scheme=\"\${ selectedColorScheme }\"]`);
                    allSelectorOptions.forEach((selectorOption) => { selectorOption.classList.remove('active') });
                    allSelectorActiveOptions.forEach((selectorOption) => { selectorOption.classList.add('active') });
                });
            });
        });
    }

    #setColorScheme(colorScheme) {
        if ('false' === document.body.getAttribute('data-ea-dark-scheme-is-enabled')) {
            return;
        }

        const resolvedColorScheme = 'auto' === colorScheme
            ? matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            : colorScheme;

        document.body.classList.remove('ea-light-scheme', 'ea-dark-scheme');
        document.body.classList.add('light' === resolvedColorScheme ? 'ea-light-scheme' : 'ea-dark-scheme');
        localStorage.setItem(this.#colorSchemeLocalStorageKey, colorScheme);
        document.body.style.colorScheme = resolvedColorScheme;
    }
}

const colorSchemeHandler = new ColorSchemeHandler();
// this method needs to be called even before 'DOMContentLoaded' because
// otherwise the page shows an annoying flicker when loading it
colorSchemeHandler.updateColorScheme();
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
    colorSchemeHandler.updateColorScheme();
});

document.addEventListener('DOMContentLoaded', () => {
    colorSchemeHandler.createColorSchemeSelector();
});
", "easycorp/easyadmin-bundle/assets/js/page-color-scheme.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\page-color-scheme.js");
    }
}
