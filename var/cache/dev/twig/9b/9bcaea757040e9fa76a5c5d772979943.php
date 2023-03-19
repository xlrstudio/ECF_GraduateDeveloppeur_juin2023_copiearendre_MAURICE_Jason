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

/* easycorp/easyadmin-bundle/src/Resources/public/entrypoints.json */
class __TwigTemplate_d0fd6824c98e0ee7413578a918ca0552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/entrypoints.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/entrypoints.json"));

        // line 1
        echo "{
  \"entrypoints\": {
    \"app\": {
      \"css\": [
        \"/app.efd86111.css\",
        \"/app.efd86111.rtl.css\"
      ],
      \"js\": [
        \"/app.7ef09592.js\"
      ]
    },
    \"form\": {
      \"js\": [
        \"/form.51fd6a48.js\"
      ]
    },
    \"page-layout\": {
      \"js\": [
        \"/page-layout.3347892e.js\"
      ]
    },
    \"page-color-scheme\": {
      \"js\": [
        \"/page-color-scheme.a1568167.js\"
      ]
    },
    \"field-boolean\": {
      \"js\": [
        \"/field-boolean.33d03224.js\"
      ]
    },
    \"field-code-editor\": {
      \"css\": [
        \"/field-code-editor.09574d54.css\",
        \"/field-code-editor.09574d54.rtl.css\"
      ],
      \"js\": [
        \"/field-code-editor.f8cb5568.js\"
      ]
    },
    \"field-collection\": {
      \"js\": [
        \"/field-collection.c6a8940b.js\"
      ]
    },
    \"field-file-upload\": {
      \"js\": [
        \"/field-file-upload.aef2ac30.js\"
      ]
    },
    \"field-image\": {
      \"js\": [
        \"/field-image.c14f1295.js\"
      ]
    },
    \"field-slug\": {
      \"js\": [
        \"/field-slug.7eed3cdc.js\"
      ]
    },
    \"field-textarea\": {
      \"js\": [
        \"/field-textarea.f496dd73.js\"
      ]
    },
    \"field-text-editor\": {
      \"css\": [
        \"/field-text-editor.7348fb97.css\",
        \"/field-text-editor.7348fb97.rtl.css\"
      ],
      \"js\": [
        \"/field-text-editor.5848d9aa.js\"
      ]
    },
    \"login\": {
      \"js\": [
        \"/login.7259f5de.js\"
      ]
    }
  }
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/entrypoints.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"entrypoints\": {
    \"app\": {
      \"css\": [
        \"/app.efd86111.css\",
        \"/app.efd86111.rtl.css\"
      ],
      \"js\": [
        \"/app.7ef09592.js\"
      ]
    },
    \"form\": {
      \"js\": [
        \"/form.51fd6a48.js\"
      ]
    },
    \"page-layout\": {
      \"js\": [
        \"/page-layout.3347892e.js\"
      ]
    },
    \"page-color-scheme\": {
      \"js\": [
        \"/page-color-scheme.a1568167.js\"
      ]
    },
    \"field-boolean\": {
      \"js\": [
        \"/field-boolean.33d03224.js\"
      ]
    },
    \"field-code-editor\": {
      \"css\": [
        \"/field-code-editor.09574d54.css\",
        \"/field-code-editor.09574d54.rtl.css\"
      ],
      \"js\": [
        \"/field-code-editor.f8cb5568.js\"
      ]
    },
    \"field-collection\": {
      \"js\": [
        \"/field-collection.c6a8940b.js\"
      ]
    },
    \"field-file-upload\": {
      \"js\": [
        \"/field-file-upload.aef2ac30.js\"
      ]
    },
    \"field-image\": {
      \"js\": [
        \"/field-image.c14f1295.js\"
      ]
    },
    \"field-slug\": {
      \"js\": [
        \"/field-slug.7eed3cdc.js\"
      ]
    },
    \"field-textarea\": {
      \"js\": [
        \"/field-textarea.f496dd73.js\"
      ]
    },
    \"field-text-editor\": {
      \"css\": [
        \"/field-text-editor.7348fb97.css\",
        \"/field-text-editor.7348fb97.rtl.css\"
      ],
      \"js\": [
        \"/field-text-editor.5848d9aa.js\"
      ]
    },
    \"login\": {
      \"js\": [
        \"/login.7259f5de.js\"
      ]
    }
  }
}", "easycorp/easyadmin-bundle/src/Resources/public/entrypoints.json", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\entrypoints.json");
    }
}
