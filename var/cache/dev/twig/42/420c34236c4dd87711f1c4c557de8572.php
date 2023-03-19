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

/* easycorp/easyadmin-bundle/assets/js/field-slug.js */
class __TwigTemplate_3d17ac629e721e114d8f89d02ba3a371 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-slug.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-slug.js"));

        // line 1
        echo "const slugify = require('slugify');
slugify.extend({
    \"\$\": \"\",
    \"%\": \"\",
    \"&\": \"\",
    \"<\": \"\",
    \">\": \"\",
    \"|\": \"\",
    \"¢\": \"\",
    \"£\": \"\",
    \"¤\": \"\",
    \"¥\": \"\",
    \"₠\": \"\",
    \"₢\": \"\",
    \"₣\": \"\",
    \"₤\": \"\",
    \"₥\": \"\",
    \"₦\": \"\",
    \"₧\": \"\",
    \"₨\": \"\",
    \"₩\": \"\",
    \"₪\": \"\",
    \"₫\": \"\",
    \"€\": \"\",
    \"₭\": \"\",
    \"₮\": \"\",
    \"₯\": \"\",
    \"₰\": \"\",
    \"₱\": \"\",
    \"₲\": \"\",
    \"₳\": \"\",
    \"₴\": \"\",
    \"₵\": \"\",
    \"₸\": \"\",
    \"₹\": \"\",
    \"₽\": \"\",
    \"₿\": \"\",
    \"∂\": \"\",
    \"∆\": \"\",
    \"∑\": \"\",
    \"∞\": \"\",
    \"♥\": \"\",
    \"元\": \"\",
    \"円\": \"\",
    \"﷼\": \"\",
});

class Slugger {
    constructor(field) {
        this.field = field;
        this.setTargetElement();
        this.locked = true;
        this.field.setAttribute('readonly', 'readonly');

        if ('' === this.field.value) {
            this.currentSlug = '';
            this.updateValue();
            this.listenTarget();
        } else {
            this.currentSlug = this.field.value;
        }

        this.appendLockButton();
    }

    setTargetElement() {
        const fieldNames = JSON.parse(this.field.dataset.target);
        this.targets = [];

        for (const name of fieldNames) {
            const target = document.getElementById(name);

            if (null === target) {
                throw `Wrong target specified for slug widget (\"\${name}\").`;
            }

            this.targets.push(target);
        }
    }

    /**
     * Append a \"lock\" button to control slug behaviour (auto or manual)
     */
    appendLockButton() {
        this.lockButton = this.field.parentNode.querySelector('button');
        this.lockButtonIcon = this.lockButton.querySelector('i');
        this.lockButton.addEventListener('click', () => {
            if (this.locked) {
                let confirmMessage = this.field.dataset.confirmText || null;
                if (null === confirmMessage) {
                    this.unlock();
                } else {
                    let formattedConfirmMessage = decodeURIComponent(JSON.parse('\"' + confirmMessage.replace(/\\\"/g, '\\\\\"') + '\"'));
                    if (true === confirm(formattedConfirmMessage)) {
                        this.unlock();
                    }
                }
            } else {
                this.lock();
            }
        });
    }

    /**
     * Unlock the widget input (manual mode)
     */
    unlock() {
        this.locked = false;
        this.lockButtonIcon.classList.replace('fa-lock', 'fa-lock-open');
        this.field.removeAttribute('readonly');
    }

    /**
     * Lock the widget input (auto mode)
     */
    lock() {
        this.locked = true;
        this.lockButtonIcon.classList.replace('fa-lock-open', 'fa-lock');

        // Locking it back changes the value either to default value, or recomputes it
        if ('' !== this.currentSlug) {
            this.field.value = this.currentSlug;
        } else {
            this.updateValue();
        }

        this.field.setAttribute('readonly', 'readonly');
    }

    updateValue() {
        this.field.value = slugify(this.targets.map(target => target.value).join('-'), {
            remove: /[^A-Za-z0-9\\s-]/g,
            lower: true,
            strict: true,
        });
    }

    /**
     * Observe the target field and slug it
     */
    listenTarget() {
        for (const target of this.targets) {
            target.addEventListener('keyup', () => {
                if ('readonly' === this.field.getAttribute('readonly')) {
                    this.updateValue();
                }
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-slug-field]').forEach((field) => {
        new Slugger(field);
    });
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-slug.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("const slugify = require('slugify');
slugify.extend({
    \"\$\": \"\",
    \"%\": \"\",
    \"&\": \"\",
    \"<\": \"\",
    \">\": \"\",
    \"|\": \"\",
    \"¢\": \"\",
    \"£\": \"\",
    \"¤\": \"\",
    \"¥\": \"\",
    \"₠\": \"\",
    \"₢\": \"\",
    \"₣\": \"\",
    \"₤\": \"\",
    \"₥\": \"\",
    \"₦\": \"\",
    \"₧\": \"\",
    \"₨\": \"\",
    \"₩\": \"\",
    \"₪\": \"\",
    \"₫\": \"\",
    \"€\": \"\",
    \"₭\": \"\",
    \"₮\": \"\",
    \"₯\": \"\",
    \"₰\": \"\",
    \"₱\": \"\",
    \"₲\": \"\",
    \"₳\": \"\",
    \"₴\": \"\",
    \"₵\": \"\",
    \"₸\": \"\",
    \"₹\": \"\",
    \"₽\": \"\",
    \"₿\": \"\",
    \"∂\": \"\",
    \"∆\": \"\",
    \"∑\": \"\",
    \"∞\": \"\",
    \"♥\": \"\",
    \"元\": \"\",
    \"円\": \"\",
    \"﷼\": \"\",
});

class Slugger {
    constructor(field) {
        this.field = field;
        this.setTargetElement();
        this.locked = true;
        this.field.setAttribute('readonly', 'readonly');

        if ('' === this.field.value) {
            this.currentSlug = '';
            this.updateValue();
            this.listenTarget();
        } else {
            this.currentSlug = this.field.value;
        }

        this.appendLockButton();
    }

    setTargetElement() {
        const fieldNames = JSON.parse(this.field.dataset.target);
        this.targets = [];

        for (const name of fieldNames) {
            const target = document.getElementById(name);

            if (null === target) {
                throw `Wrong target specified for slug widget (\"\${name}\").`;
            }

            this.targets.push(target);
        }
    }

    /**
     * Append a \"lock\" button to control slug behaviour (auto or manual)
     */
    appendLockButton() {
        this.lockButton = this.field.parentNode.querySelector('button');
        this.lockButtonIcon = this.lockButton.querySelector('i');
        this.lockButton.addEventListener('click', () => {
            if (this.locked) {
                let confirmMessage = this.field.dataset.confirmText || null;
                if (null === confirmMessage) {
                    this.unlock();
                } else {
                    let formattedConfirmMessage = decodeURIComponent(JSON.parse('\"' + confirmMessage.replace(/\\\"/g, '\\\\\"') + '\"'));
                    if (true === confirm(formattedConfirmMessage)) {
                        this.unlock();
                    }
                }
            } else {
                this.lock();
            }
        });
    }

    /**
     * Unlock the widget input (manual mode)
     */
    unlock() {
        this.locked = false;
        this.lockButtonIcon.classList.replace('fa-lock', 'fa-lock-open');
        this.field.removeAttribute('readonly');
    }

    /**
     * Lock the widget input (auto mode)
     */
    lock() {
        this.locked = true;
        this.lockButtonIcon.classList.replace('fa-lock-open', 'fa-lock');

        // Locking it back changes the value either to default value, or recomputes it
        if ('' !== this.currentSlug) {
            this.field.value = this.currentSlug;
        } else {
            this.updateValue();
        }

        this.field.setAttribute('readonly', 'readonly');
    }

    updateValue() {
        this.field.value = slugify(this.targets.map(target => target.value).join('-'), {
            remove: /[^A-Za-z0-9\\s-]/g,
            lower: true,
            strict: true,
        });
    }

    /**
     * Observe the target field and slug it
     */
    listenTarget() {
        for (const target of this.targets) {
            target.addEventListener('keyup', () => {
                if ('readonly' === this.field.getAttribute('readonly')) {
                    this.updateValue();
                }
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-slug-field]').forEach((field) => {
        new Slugger(field);
    });
});
", "easycorp/easyadmin-bundle/assets/js/field-slug.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-slug.js");
    }
}
