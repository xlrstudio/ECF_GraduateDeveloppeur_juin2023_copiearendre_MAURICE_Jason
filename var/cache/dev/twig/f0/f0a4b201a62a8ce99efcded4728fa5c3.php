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

/* easycorp/easyadmin-bundle/assets/js/autocomplete.js */
class __TwigTemplate_0c3ba690e5b857485035ddadb494687c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/autocomplete.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/autocomplete.js"));

        // line 1
        echo "import TomSelect from \"tom-select/dist/js/tom-select.complete.min\";

export default class Autocomplete
{
    create(element) {
        // this avoids initializing the same field twice (TomSelect shows an error otherwise)
        if (element.classList.contains('tomselected')) {
            return;
        }

        const autocompleteEndpointUrl = element.getAttribute('data-ea-autocomplete-endpoint-url');
        if (null !== autocompleteEndpointUrl) {
            return this.#createAutocompleteWithRemoteData(element, autocompleteEndpointUrl);
        }

        const renderOptionsAsHtml = 'true' === element.getAttribute('data-ea-autocomplete-render-items-as-html');
        if (renderOptionsAsHtml) {
            return this.#createAutocompleteWithHtmlContents(element);
        }

        return this.#createAutocomplete(element);
    }

    #getCommonConfig(element) {
        const config = {
            render: {
                no_results: function(data, escape) {
                    return `<div class=\"no-results\">\${element.getAttribute('data-ea-i18n-no-results-found')}</div>`;
                },
            },
            plugins: {
                dropdown_input: {},
            }
        };

        if (null === element.getAttribute('required') && null === element.getAttribute('disabled')) {
            config.plugins.clear_button = { title: '' };
        }

        if (null !== element.getAttribute('multiple')) {
            config.plugins.remove_button = { title: '' };
        }

        if (null !== element.getAttribute('data-ea-autocomplete-endpoint-url')) {
            config.plugins.virtual_scroll = {};
        }

        if ('true' === element.getAttribute('data-ea-autocomplete-allow-item-create')) {
            config.create = true;
        }

        return config;
    };

    #createAutocomplete(element) {
        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            maxOptions: null,
        });

        return new TomSelect(element, config);
    }

    #createAutocompleteWithHtmlContents(element) {
        const autoSelectOptions = [];
        for (let i = 0; i < element.options.length; i++) {
            const label = element.options[i].text;
            const value = element.options[i].value;

            autoSelectOptions.push({
                label_text: this.#stripTags(label),
                label_raw: label,
                value: value,
            });
        }

        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            valueField: 'value',
            labelField: 'label_raw',
            searchField: ['label_text'],
            options: autoSelectOptions,
            maxOptions: null,
            render: {
                item: function(item, escape) {
                    return `<div>\${item.label_raw}</div>`;
                },
                option: function(item, escape) {
                    return `<div>\${item.label_raw}</div>`;
                }
            },
        });

        return new TomSelect(element, config);
    }

    #createAutocompleteWithRemoteData(element, autocompleteEndpointUrl) {
        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            valueField: 'entityId',
            labelField: 'entityAsString',
            searchField: ['entityAsString'],
            firstUrl: (query) => {
                return autocompleteEndpointUrl + '&query=' + encodeURIComponent(query);
            },
            // VERY IMPORTANT: use 'function (query, callback) { ... }' instead of the
            // '(query, callback) => { ... }' syntax because, otherwise,
            // the 'this.XXX' calls inside of this method fail
            load: function (query, callback) {
                const url = this.getUrl(query);
                fetch(url)
                    .then(response => response.json())
                    // important: next_url must be set before invoking callback()
                    .then(json => { this.setNextUrl(query, json.next_page); callback(json.results) })
                    .catch(() => callback());
            },
            // on remote calls, we don't want tomselect to further filter the results by \"entityAsString\"
            // this override causes all results to be returned with the sorting from the server
            score: function(search) {
                return function(item) {
                    return 1;
                };
            },
            render: {
                option: function(item, escape) {
                    return `<div>\${item.entityAsString}</div>`;
                },
                item: function(item, escape) {
                    return `<div>\${item.entityAsString}</div>`;
                },
                loading_more: function(data, escape) {
                    return `<div class=\"loading-more-results\">\${element.getAttribute('data-ea-i18n-loading-more-results')}</div>`;
                },
                no_more_results: function(data, escape) {
                    return `<div class=\"no-more-results\">\${element.getAttribute('data-ea-i18n-no-more-results')}</div>`;
                },
                no_results: function(data, escape) {
                    return `<div class=\"no-results\">\${element.getAttribute('data-ea-i18n-no-results-found')}</div>`;
                },
            },
        });

        return new TomSelect(element, config);
    }

    #stripTags(string) {
        return string.replace(/(<([^>]+)>)/gi, '');
    }

    #mergeObjects(object1, object2) {
        return { ...object1, ...object2 };
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/autocomplete.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("import TomSelect from \"tom-select/dist/js/tom-select.complete.min\";

export default class Autocomplete
{
    create(element) {
        // this avoids initializing the same field twice (TomSelect shows an error otherwise)
        if (element.classList.contains('tomselected')) {
            return;
        }

        const autocompleteEndpointUrl = element.getAttribute('data-ea-autocomplete-endpoint-url');
        if (null !== autocompleteEndpointUrl) {
            return this.#createAutocompleteWithRemoteData(element, autocompleteEndpointUrl);
        }

        const renderOptionsAsHtml = 'true' === element.getAttribute('data-ea-autocomplete-render-items-as-html');
        if (renderOptionsAsHtml) {
            return this.#createAutocompleteWithHtmlContents(element);
        }

        return this.#createAutocomplete(element);
    }

    #getCommonConfig(element) {
        const config = {
            render: {
                no_results: function(data, escape) {
                    return `<div class=\"no-results\">\${element.getAttribute('data-ea-i18n-no-results-found')}</div>`;
                },
            },
            plugins: {
                dropdown_input: {},
            }
        };

        if (null === element.getAttribute('required') && null === element.getAttribute('disabled')) {
            config.plugins.clear_button = { title: '' };
        }

        if (null !== element.getAttribute('multiple')) {
            config.plugins.remove_button = { title: '' };
        }

        if (null !== element.getAttribute('data-ea-autocomplete-endpoint-url')) {
            config.plugins.virtual_scroll = {};
        }

        if ('true' === element.getAttribute('data-ea-autocomplete-allow-item-create')) {
            config.create = true;
        }

        return config;
    };

    #createAutocomplete(element) {
        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            maxOptions: null,
        });

        return new TomSelect(element, config);
    }

    #createAutocompleteWithHtmlContents(element) {
        const autoSelectOptions = [];
        for (let i = 0; i < element.options.length; i++) {
            const label = element.options[i].text;
            const value = element.options[i].value;

            autoSelectOptions.push({
                label_text: this.#stripTags(label),
                label_raw: label,
                value: value,
            });
        }

        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            valueField: 'value',
            labelField: 'label_raw',
            searchField: ['label_text'],
            options: autoSelectOptions,
            maxOptions: null,
            render: {
                item: function(item, escape) {
                    return `<div>\${item.label_raw}</div>`;
                },
                option: function(item, escape) {
                    return `<div>\${item.label_raw}</div>`;
                }
            },
        });

        return new TomSelect(element, config);
    }

    #createAutocompleteWithRemoteData(element, autocompleteEndpointUrl) {
        const config = this.#mergeObjects(this.#getCommonConfig(element), {
            valueField: 'entityId',
            labelField: 'entityAsString',
            searchField: ['entityAsString'],
            firstUrl: (query) => {
                return autocompleteEndpointUrl + '&query=' + encodeURIComponent(query);
            },
            // VERY IMPORTANT: use 'function (query, callback) { ... }' instead of the
            // '(query, callback) => { ... }' syntax because, otherwise,
            // the 'this.XXX' calls inside of this method fail
            load: function (query, callback) {
                const url = this.getUrl(query);
                fetch(url)
                    .then(response => response.json())
                    // important: next_url must be set before invoking callback()
                    .then(json => { this.setNextUrl(query, json.next_page); callback(json.results) })
                    .catch(() => callback());
            },
            // on remote calls, we don't want tomselect to further filter the results by \"entityAsString\"
            // this override causes all results to be returned with the sorting from the server
            score: function(search) {
                return function(item) {
                    return 1;
                };
            },
            render: {
                option: function(item, escape) {
                    return `<div>\${item.entityAsString}</div>`;
                },
                item: function(item, escape) {
                    return `<div>\${item.entityAsString}</div>`;
                },
                loading_more: function(data, escape) {
                    return `<div class=\"loading-more-results\">\${element.getAttribute('data-ea-i18n-loading-more-results')}</div>`;
                },
                no_more_results: function(data, escape) {
                    return `<div class=\"no-more-results\">\${element.getAttribute('data-ea-i18n-no-more-results')}</div>`;
                },
                no_results: function(data, escape) {
                    return `<div class=\"no-results\">\${element.getAttribute('data-ea-i18n-no-results-found')}</div>`;
                },
            },
        });

        return new TomSelect(element, config);
    }

    #stripTags(string) {
        return string.replace(/(<([^>]+)>)/gi, '');
    }

    #mergeObjects(object1, object2) {
        return { ...object1, ...object2 };
    }
}
", "easycorp/easyadmin-bundle/assets/js/autocomplete.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\autocomplete.js");
    }
}
