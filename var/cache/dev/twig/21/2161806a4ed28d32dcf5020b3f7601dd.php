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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/color-palette.scss */
class __TwigTemplate_5fdf832a5f7cb84bd055b9c7ac6d7998 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/color-palette.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/color-palette.scss"));

        // line 1
        echo "// Color palette copied from Tailwind CSS (MIT License)
// see https://tailwindcss.com/docs/customizing-colors
// and https://github.com/tailwindlabs/tailwindcss/blob/master/colors.js
:root {
  --black: #000;
  --white: #fff;

  --rose-50: #fff1f2;
  --rose-100: #ffe4e6;
  --rose-200: #fecdd3;
  --rose-300: #fda4af;
  --rose-400: #fb7185;
  --rose-500: #f43f5e;
  --rose-600: #e11d48;
  --rose-700: #be123c;
  --rose-800: #9f1239;
  --rose-900: #881337;

  --pink-50: #fdf2f8;
  --pink-100: #fce7f3;
  --pink-200: #fbcfe8;
  --pink-300: #f9a8d4;
  --pink-400: #f472b6;
  --pink-500: #ec4899;
  --pink-600: #db2777;
  --pink-700: #be185d;
  --pink-800: #9d174d;
  --pink-900: #831843;

  --fuchsia-50: #fdf4ff;
  --fuchsia-100: #fae8ff;
  --fuchsia-200: #f5d0fe;
  --fuchsia-300: #f0abfc;
  --fuchsia-400: #e879f9;
  --fuchsia-500: #d946ef;
  --fuchsia-600: #c026d3;
  --fuchsia-700: #a21caf;
  --fuchsia-800: #86198f;
  --fuchsia-900: #701a75;

  --purple-50: #faf5ff;
  --purple-100: #f3e8ff;
  --purple-200: #e9d5ff;
  --purple-300: #d8b4fe;
  --purple-400: #c084fc;
  --purple-500: #a855f7;
  --purple-600: #9333ea;
  --purple-700: #7e22ce;
  --purple-800: #6b21a8;
  --purple-900: #581c87;

  --violet-50: #f5f3ff;
  --violet-100: #ede9fe;
  --violet-200: #ddd6fe;
  --violet-300: #c4b5fd;
  --violet-400: #a78bfa;
  --violet-500: #8b5cf6;
  --violet-600: #7c3aed;
  --violet-700: #6d28d9;
  --violet-800: #5b21b6;
  --violet-900: #4c1d95;

  --indigo-50: #eef2ff;
  --indigo-100: #e0e7ff;
  --indigo-200: #c7d2fe;
  --indigo-300: #a5b4fc;
  --indigo-400: #818cf8;
  --indigo-500: #6366f1;
  --indigo-600: #4f46e5;
  --indigo-700: #4338ca;
  --indigo-800: #3730a3;
  --indigo-900: #312e81;

  --blue-50: #eff6ff;
  --blue-100: #dbeafe;
  --blue-200: #bfdbfe;
  --blue-300: #93c5fd;
  --blue-400: #60a5fa;
  --blue-500: #3b82f6;
  --blue-600: #2563eb;
  --blue-700: #1d4ed8;
  --blue-800: #1e40af;
  --blue-900: #1e3a8a;

  --sky-50: #f0f9ff;
  --sky-100: #e0f2fe;
  --sky-200: #bae6fd;
  --sky-300: #7dd3fc;
  --sky-400: #38bdf8;
  --sky-500: #0ea5e9;
  --sky-600: #0284c7;
  --sky-700: #0369a1;
  --sky-800: #075985;
  --sky-900: #0c4a6e;

  --cyan-50: #ecfeff;
  --cyan-100: #cffafe;
  --cyan-200: #a5f3fc;
  --cyan-300: #67e8f9;
  --cyan-400: #22d3ee;
  --cyan-500: #06b6d4;
  --cyan-600: #0891b2;
  --cyan-700: #0e7490;
  --cyan-800: #155e75;
  --cyan-900: #164e63;

  --teal-50: #f0fdfa;
  --teal-100: #ccfbf1;
  --teal-200: #99f6e4;
  --teal-300: #5eead4;
  --teal-400: #2dd4bf;
  --teal-500: #14b8a6;
  --teal-600: #0d9488;
  --teal-700: #0f766e;
  --teal-800: #115e59;
  --teal-900: #134e4a;

  --emerald-50: #ecfdf5;
  --emerald-100: #d1fae5;
  --emerald-200: #a7f3d0;
  --emerald-300: #6ee7b7;
  --emerald-400: #34d399;
  --emerald-500: #10b981;
  --emerald-600: #059669;
  --emerald-700: #047857;
  --emerald-800: #065f46;
  --emerald-900: #064e3b;

  --green-50: #f0fdf4;
  --green-100: #dcfce7;
  --green-200: #bbf7d0;
  --green-300: #86efac;
  --green-400: #4ade80;
  --green-500: #22c55e;
  --green-600: #16a34a;
  --green-700: #15803d;
  --green-800: #166534;
  --green-900: #14532d;

  --lime-50: #f7fee7;
  --lime-100: #ecfccb;
  --lime-200: #d9f99d;
  --lime-300: #bef264;
  --lime-400: #a3e635;
  --lime-500: #84cc16;
  --lime-600: #65a30d;
  --lime-700: #4d7c0f;
  --lime-800: #3f6212;
  --lime-900: #365314;

  --yellow-50: #fefce8;
  --yellow-100: #fef9c3;
  --yellow-200: #fef08a;
  --yellow-300: #fde047;
  --yellow-400: #facc15;
  --yellow-500: #eab308;
  --yellow-600: #ca8a04;
  --yellow-700: #a16207;
  --yellow-800: #854d0e;
  --yellow-900: #713f12;

  --amber-50: #fffbeb;
  --amber-100: #fef3c7;
  --amber-200: #fde68a;
  --amber-300: #fcd34d;
  --amber-400: #fbbf24;
  --amber-500: #f59e0b;
  --amber-600: #d97706;
  --amber-700: #b45309;
  --amber-800: #92400e;
  --amber-900: #78350f;

  --orange-50: #fff7ed;
  --orange-100: #ffedd5;
  --orange-200: #fed7aa;
  --orange-300: #fdba74;
  --orange-400: #fb923c;
  --orange-500: #f97316;
  --orange-600: #ea580c;
  --orange-700: #c2410c;
  --orange-800: #9a3412;
  --orange-900: #7c2d12;

  --red-50: #fef2f2;
  --red-100: #fee2e2;
  --red-200: #fecaca;
  --red-300: #fca5a5;
  --red-400: #f87171;
  --red-500: #ef4444;
  --red-600: #dc2626;
  --red-700: #b91c1c;
  --red-800: #991b1b;
  --red-900: #7f1d1d;

  --warm-gray-50: #fafaf9;
  --warm-gray-100: #f5f5f4;
  --warm-gray-200: #e7e5e4;
  --warm-gray-300: #d6d3d1;
  --warm-gray-400: #a8a29e;
  --warm-gray-500: #78716c;
  --warm-gray-600: #57534e;
  --warm-gray-700: #44403c;
  --warm-gray-800: #292524;
  --warm-gray-900: #1c1917;

  --true-gray-50: #fafafa;
  --true-gray-100: #f5f5f5;
  --true-gray-200: #e5e5e5;
  --true-gray-300: #d4d4d4;
  --true-gray-400: #a3a3a3;
  --true-gray-500: #737373;
  --true-gray-600: #525252;
  --true-gray-700: #404040;
  --true-gray-800: #262626;
  --true-gray-900: #171717;

  // Tailwind CSS calls this color \"gray\", but we renamed it to \"neutral gray\"
  // because our design is based on blue tones, so the best \"gray\" for our design
  // is \"blue gray\" and we alias \"blue gray\" color as \"gray\" to simplify things
  --neutral-gray-50: #fafafa;
  --neutral-gray-100: #f4f4f5;
  --neutral-gray-200: #e4e4e7;
  --neutral-gray-300: #d4d4d8;
  --neutral-gray-400: #a1a1aa;
  --neutral-gray-500: #71717a;
  --neutral-gray-600: #52525b;
  --neutral-gray-700: #3f3f46;
  --neutral-gray-800: #27272a;
  --neutral-gray-900: #18181b;

  --cool-gray-50: #f9fafb;
  --cool-gray-100: #f3f4f6;
  --cool-gray-200: #e5e7eb;
  --cool-gray-300: #d1d5db;
  --cool-gray-400: #9ca3af;
  --cool-gray-500: #6b7280;
  --cool-gray-600: #4b5563;
  --cool-gray-700: #374151;
  --cool-gray-800: #1f2937;
  --cool-gray-900: #111827;

  --blue-gray-50: #f8fafc;
  --blue-gray-100: #f1f5f9;
  --blue-gray-200: #e2e8f0;
  --blue-gray-300: #cbd5e1;
  --blue-gray-400: #94a3b8;
  --blue-gray-500: #64748b;
  --blue-gray-600: #475569;
  --blue-gray-700: #334155;
  --blue-gray-800: #1e293b;
  --blue-gray-900: #0f172a;

  // this is the color alias to consider the \"blue gray\" color as \"the normal gray\"
  --gray-50:  var(--blue-gray-50);
  --gray-100: var(--blue-gray-100);
  --gray-200: var(--blue-gray-200);
  --gray-300: var(--blue-gray-300);
  --gray-400: var(--blue-gray-400);
  --gray-500: var(--blue-gray-500);
  --gray-600: var(--blue-gray-600);
  --gray-700: var(--blue-gray-700);
  --gray-800: var(--blue-gray-800);
  --gray-900: var(--blue-gray-900);
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/color-palette.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Color palette copied from Tailwind CSS (MIT License)
// see https://tailwindcss.com/docs/customizing-colors
// and https://github.com/tailwindlabs/tailwindcss/blob/master/colors.js
:root {
  --black: #000;
  --white: #fff;

  --rose-50: #fff1f2;
  --rose-100: #ffe4e6;
  --rose-200: #fecdd3;
  --rose-300: #fda4af;
  --rose-400: #fb7185;
  --rose-500: #f43f5e;
  --rose-600: #e11d48;
  --rose-700: #be123c;
  --rose-800: #9f1239;
  --rose-900: #881337;

  --pink-50: #fdf2f8;
  --pink-100: #fce7f3;
  --pink-200: #fbcfe8;
  --pink-300: #f9a8d4;
  --pink-400: #f472b6;
  --pink-500: #ec4899;
  --pink-600: #db2777;
  --pink-700: #be185d;
  --pink-800: #9d174d;
  --pink-900: #831843;

  --fuchsia-50: #fdf4ff;
  --fuchsia-100: #fae8ff;
  --fuchsia-200: #f5d0fe;
  --fuchsia-300: #f0abfc;
  --fuchsia-400: #e879f9;
  --fuchsia-500: #d946ef;
  --fuchsia-600: #c026d3;
  --fuchsia-700: #a21caf;
  --fuchsia-800: #86198f;
  --fuchsia-900: #701a75;

  --purple-50: #faf5ff;
  --purple-100: #f3e8ff;
  --purple-200: #e9d5ff;
  --purple-300: #d8b4fe;
  --purple-400: #c084fc;
  --purple-500: #a855f7;
  --purple-600: #9333ea;
  --purple-700: #7e22ce;
  --purple-800: #6b21a8;
  --purple-900: #581c87;

  --violet-50: #f5f3ff;
  --violet-100: #ede9fe;
  --violet-200: #ddd6fe;
  --violet-300: #c4b5fd;
  --violet-400: #a78bfa;
  --violet-500: #8b5cf6;
  --violet-600: #7c3aed;
  --violet-700: #6d28d9;
  --violet-800: #5b21b6;
  --violet-900: #4c1d95;

  --indigo-50: #eef2ff;
  --indigo-100: #e0e7ff;
  --indigo-200: #c7d2fe;
  --indigo-300: #a5b4fc;
  --indigo-400: #818cf8;
  --indigo-500: #6366f1;
  --indigo-600: #4f46e5;
  --indigo-700: #4338ca;
  --indigo-800: #3730a3;
  --indigo-900: #312e81;

  --blue-50: #eff6ff;
  --blue-100: #dbeafe;
  --blue-200: #bfdbfe;
  --blue-300: #93c5fd;
  --blue-400: #60a5fa;
  --blue-500: #3b82f6;
  --blue-600: #2563eb;
  --blue-700: #1d4ed8;
  --blue-800: #1e40af;
  --blue-900: #1e3a8a;

  --sky-50: #f0f9ff;
  --sky-100: #e0f2fe;
  --sky-200: #bae6fd;
  --sky-300: #7dd3fc;
  --sky-400: #38bdf8;
  --sky-500: #0ea5e9;
  --sky-600: #0284c7;
  --sky-700: #0369a1;
  --sky-800: #075985;
  --sky-900: #0c4a6e;

  --cyan-50: #ecfeff;
  --cyan-100: #cffafe;
  --cyan-200: #a5f3fc;
  --cyan-300: #67e8f9;
  --cyan-400: #22d3ee;
  --cyan-500: #06b6d4;
  --cyan-600: #0891b2;
  --cyan-700: #0e7490;
  --cyan-800: #155e75;
  --cyan-900: #164e63;

  --teal-50: #f0fdfa;
  --teal-100: #ccfbf1;
  --teal-200: #99f6e4;
  --teal-300: #5eead4;
  --teal-400: #2dd4bf;
  --teal-500: #14b8a6;
  --teal-600: #0d9488;
  --teal-700: #0f766e;
  --teal-800: #115e59;
  --teal-900: #134e4a;

  --emerald-50: #ecfdf5;
  --emerald-100: #d1fae5;
  --emerald-200: #a7f3d0;
  --emerald-300: #6ee7b7;
  --emerald-400: #34d399;
  --emerald-500: #10b981;
  --emerald-600: #059669;
  --emerald-700: #047857;
  --emerald-800: #065f46;
  --emerald-900: #064e3b;

  --green-50: #f0fdf4;
  --green-100: #dcfce7;
  --green-200: #bbf7d0;
  --green-300: #86efac;
  --green-400: #4ade80;
  --green-500: #22c55e;
  --green-600: #16a34a;
  --green-700: #15803d;
  --green-800: #166534;
  --green-900: #14532d;

  --lime-50: #f7fee7;
  --lime-100: #ecfccb;
  --lime-200: #d9f99d;
  --lime-300: #bef264;
  --lime-400: #a3e635;
  --lime-500: #84cc16;
  --lime-600: #65a30d;
  --lime-700: #4d7c0f;
  --lime-800: #3f6212;
  --lime-900: #365314;

  --yellow-50: #fefce8;
  --yellow-100: #fef9c3;
  --yellow-200: #fef08a;
  --yellow-300: #fde047;
  --yellow-400: #facc15;
  --yellow-500: #eab308;
  --yellow-600: #ca8a04;
  --yellow-700: #a16207;
  --yellow-800: #854d0e;
  --yellow-900: #713f12;

  --amber-50: #fffbeb;
  --amber-100: #fef3c7;
  --amber-200: #fde68a;
  --amber-300: #fcd34d;
  --amber-400: #fbbf24;
  --amber-500: #f59e0b;
  --amber-600: #d97706;
  --amber-700: #b45309;
  --amber-800: #92400e;
  --amber-900: #78350f;

  --orange-50: #fff7ed;
  --orange-100: #ffedd5;
  --orange-200: #fed7aa;
  --orange-300: #fdba74;
  --orange-400: #fb923c;
  --orange-500: #f97316;
  --orange-600: #ea580c;
  --orange-700: #c2410c;
  --orange-800: #9a3412;
  --orange-900: #7c2d12;

  --red-50: #fef2f2;
  --red-100: #fee2e2;
  --red-200: #fecaca;
  --red-300: #fca5a5;
  --red-400: #f87171;
  --red-500: #ef4444;
  --red-600: #dc2626;
  --red-700: #b91c1c;
  --red-800: #991b1b;
  --red-900: #7f1d1d;

  --warm-gray-50: #fafaf9;
  --warm-gray-100: #f5f5f4;
  --warm-gray-200: #e7e5e4;
  --warm-gray-300: #d6d3d1;
  --warm-gray-400: #a8a29e;
  --warm-gray-500: #78716c;
  --warm-gray-600: #57534e;
  --warm-gray-700: #44403c;
  --warm-gray-800: #292524;
  --warm-gray-900: #1c1917;

  --true-gray-50: #fafafa;
  --true-gray-100: #f5f5f5;
  --true-gray-200: #e5e5e5;
  --true-gray-300: #d4d4d4;
  --true-gray-400: #a3a3a3;
  --true-gray-500: #737373;
  --true-gray-600: #525252;
  --true-gray-700: #404040;
  --true-gray-800: #262626;
  --true-gray-900: #171717;

  // Tailwind CSS calls this color \"gray\", but we renamed it to \"neutral gray\"
  // because our design is based on blue tones, so the best \"gray\" for our design
  // is \"blue gray\" and we alias \"blue gray\" color as \"gray\" to simplify things
  --neutral-gray-50: #fafafa;
  --neutral-gray-100: #f4f4f5;
  --neutral-gray-200: #e4e4e7;
  --neutral-gray-300: #d4d4d8;
  --neutral-gray-400: #a1a1aa;
  --neutral-gray-500: #71717a;
  --neutral-gray-600: #52525b;
  --neutral-gray-700: #3f3f46;
  --neutral-gray-800: #27272a;
  --neutral-gray-900: #18181b;

  --cool-gray-50: #f9fafb;
  --cool-gray-100: #f3f4f6;
  --cool-gray-200: #e5e7eb;
  --cool-gray-300: #d1d5db;
  --cool-gray-400: #9ca3af;
  --cool-gray-500: #6b7280;
  --cool-gray-600: #4b5563;
  --cool-gray-700: #374151;
  --cool-gray-800: #1f2937;
  --cool-gray-900: #111827;

  --blue-gray-50: #f8fafc;
  --blue-gray-100: #f1f5f9;
  --blue-gray-200: #e2e8f0;
  --blue-gray-300: #cbd5e1;
  --blue-gray-400: #94a3b8;
  --blue-gray-500: #64748b;
  --blue-gray-600: #475569;
  --blue-gray-700: #334155;
  --blue-gray-800: #1e293b;
  --blue-gray-900: #0f172a;

  // this is the color alias to consider the \"blue gray\" color as \"the normal gray\"
  --gray-50:  var(--blue-gray-50);
  --gray-100: var(--blue-gray-100);
  --gray-200: var(--blue-gray-200);
  --gray-300: var(--blue-gray-300);
  --gray-400: var(--blue-gray-400);
  --gray-500: var(--blue-gray-500);
  --gray-600: var(--blue-gray-600);
  --gray-700: var(--blue-gray-700);
  --gray-800: var(--blue-gray-800);
  --gray-900: var(--blue-gray-900);
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/color-palette.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\color-palette.scss");
    }
}
