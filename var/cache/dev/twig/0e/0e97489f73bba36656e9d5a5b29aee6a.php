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

/* easycorp/easyadmin-bundle/src/Router/UrlSigner.php */
class __TwigTemplate_7e47ba427853730d61ab5e6fc0554c88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Router/UrlSigner.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Router/UrlSigner.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Router;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;

/**
 * This class is entirely based on Symfony\\Component\\HttpKernel\\UriSigner.
 * (c) Fabien Potencier <fabien@symfony.com> - MIT License.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UrlSigner
{
    private string \$kernelSecret;

    public function __construct(string \$kernelSecret)
    {
        trigger_deprecation(
            'easycorp/easyadmin-bundle',
            '4.1.0',
            'EasyAdmin URLs no longer include signatures because they don\\'t provide any additional security. The \"%s\" class will be removed in future EasyAdmin versions, so you should stop using it.',
            __CLASS__
        );

        \$this->kernelSecret = \$kernelSecret;
    }

    /**
     * Signs a URL adding a query parameter with a hash generated
     * with the values of some of the URL query parameters.
     */
    public function sign(string \$url): string
    {
        \$urlParts = parse_url(\$url);
        if (isset(\$urlParts['query'])) {
            parse_str(\$urlParts['query'], \$queryParams);
        } else {
            \$queryParams = [];
        }

        \$queryParams[EA::URL_SIGNATURE] = \$this->computeHash(\$this->getQueryParamsToSign(\$queryParams));

        return \$this->buildUrl(\$urlParts, \$queryParams);
    }

    /**
     * Checks that a URL contains a valid signature.
     */
    public function check(string \$url): bool
    {
        \$urlParts = parse_url(\$url);
        if (isset(\$urlParts['query'])) {
            parse_str(\$urlParts['query'], \$queryParams);
        } else {
            \$queryParams = [];
        }

        // this differs from Symfony's UriSigner behavior: if the URL doesn't contain any
        // query parameters, then consider that the signature is OK (even if there's no signature)
        if ([] === \$queryParams) {
            return true;
        }

        \$urlSignature = \$queryParams[EA::URL_SIGNATURE] ?? null;
        if (null === \$urlSignature || '' === \$urlSignature) {
            return false;
        }

        \$expectedHash = \$queryParams[EA::URL_SIGNATURE];
        \$calculatedHash = \$this->computeHash(\$this->getQueryParamsToSign(\$queryParams));

        return hash_equals(\$calculatedHash, \$expectedHash);
    }

    private function computeHash(array \$queryParameters): string
    {
        // Base64 hashes include some characters which are not compatible with
        // query strings, so we replace them to avoid encoding them in the query string
        return str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode(hash_hmac('sha256', http_build_query(\$queryParameters), \$this->kernelSecret, true))
        );
    }

    /**
     * Instead of signing the entire URL, including all its query parameters,
     * sign only a few parameters that can be used to attack a backend by:.
     *
     *   * Enumerating all entities of certain type (EA::ENTITY_ID)
     *   * Accessing all application entities (EA::CRUD_CONTROLLER_FQCN)
     *   * Accessing any CRUD controller method (EA::CRUD_ACTION)
     *   * Accessing any application route (EA::ROUTE_NAME)
     *   * Meddling with the parameters of any application route (EA::ROUTE_PARAMS)
     *
     * The rest of query parameters are not relevant for the signature (EA::PAGE, EA::SORT, etc.)
     * or are dynamically set by the user (EA::QUERY, EA::FILTERS, etc.) so they can't be
     * included in a signature calculated before providing that data.
     */
    private function getQueryParamsToSign(array \$queryParams): array
    {
        \$signableQueryParams = array_intersect_key(\$queryParams, [
            EA::CRUD_ACTION => 0,
            EA::CRUD_CONTROLLER_FQCN => 1,
            EA::ENTITY_ID => 2,
            EA::ROUTE_NAME => 3,
            EA::ROUTE_PARAMS => 4,
        ]);

        ksort(\$signableQueryParams, \\SORT_STRING);

        return \$signableQueryParams;
    }

    private function buildUrl(array \$urlParts, array \$queryParams = []): string
    {
        ksort(\$queryParams, \\SORT_STRING);
        \$urlParts['query'] = http_build_query(\$queryParams, '', '&');

        \$scheme = isset(\$urlParts['scheme']) ? \$urlParts['scheme'].'://' : '';
        \$host = \$urlParts['host'] ?? '';
        \$port = isset(\$urlParts['port']) ? ':'.\$urlParts['port'] : '';
        \$user = \$urlParts['user'] ?? '';
        \$pass = isset(\$urlParts['pass']) ? ':'.\$urlParts['pass'] : '';
        \$pass = ('' !== \$user || '' !== \$pass) ? \"\$pass@\" : '';
        \$path = \$urlParts['path'] ?? '';
        \$query = '' !== \$urlParts['query'] ? '?'.\$urlParts['query'] : '';
        \$fragment = isset(\$urlParts['fragment']) ? '#'.\$urlParts['fragment'] : '';

        return \$scheme.\$user.\$pass.\$host.\$port.\$path.\$query.\$fragment;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Router/UrlSigner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Router;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;

/**
 * This class is entirely based on Symfony\\Component\\HttpKernel\\UriSigner.
 * (c) Fabien Potencier <fabien@symfony.com> - MIT License.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UrlSigner
{
    private string \$kernelSecret;

    public function __construct(string \$kernelSecret)
    {
        trigger_deprecation(
            'easycorp/easyadmin-bundle',
            '4.1.0',
            'EasyAdmin URLs no longer include signatures because they don\\'t provide any additional security. The \"%s\" class will be removed in future EasyAdmin versions, so you should stop using it.',
            __CLASS__
        );

        \$this->kernelSecret = \$kernelSecret;
    }

    /**
     * Signs a URL adding a query parameter with a hash generated
     * with the values of some of the URL query parameters.
     */
    public function sign(string \$url): string
    {
        \$urlParts = parse_url(\$url);
        if (isset(\$urlParts['query'])) {
            parse_str(\$urlParts['query'], \$queryParams);
        } else {
            \$queryParams = [];
        }

        \$queryParams[EA::URL_SIGNATURE] = \$this->computeHash(\$this->getQueryParamsToSign(\$queryParams));

        return \$this->buildUrl(\$urlParts, \$queryParams);
    }

    /**
     * Checks that a URL contains a valid signature.
     */
    public function check(string \$url): bool
    {
        \$urlParts = parse_url(\$url);
        if (isset(\$urlParts['query'])) {
            parse_str(\$urlParts['query'], \$queryParams);
        } else {
            \$queryParams = [];
        }

        // this differs from Symfony's UriSigner behavior: if the URL doesn't contain any
        // query parameters, then consider that the signature is OK (even if there's no signature)
        if ([] === \$queryParams) {
            return true;
        }

        \$urlSignature = \$queryParams[EA::URL_SIGNATURE] ?? null;
        if (null === \$urlSignature || '' === \$urlSignature) {
            return false;
        }

        \$expectedHash = \$queryParams[EA::URL_SIGNATURE];
        \$calculatedHash = \$this->computeHash(\$this->getQueryParamsToSign(\$queryParams));

        return hash_equals(\$calculatedHash, \$expectedHash);
    }

    private function computeHash(array \$queryParameters): string
    {
        // Base64 hashes include some characters which are not compatible with
        // query strings, so we replace them to avoid encoding them in the query string
        return str_replace(
            ['+', '/', '='],
            ['-', '_', ''],
            base64_encode(hash_hmac('sha256', http_build_query(\$queryParameters), \$this->kernelSecret, true))
        );
    }

    /**
     * Instead of signing the entire URL, including all its query parameters,
     * sign only a few parameters that can be used to attack a backend by:.
     *
     *   * Enumerating all entities of certain type (EA::ENTITY_ID)
     *   * Accessing all application entities (EA::CRUD_CONTROLLER_FQCN)
     *   * Accessing any CRUD controller method (EA::CRUD_ACTION)
     *   * Accessing any application route (EA::ROUTE_NAME)
     *   * Meddling with the parameters of any application route (EA::ROUTE_PARAMS)
     *
     * The rest of query parameters are not relevant for the signature (EA::PAGE, EA::SORT, etc.)
     * or are dynamically set by the user (EA::QUERY, EA::FILTERS, etc.) so they can't be
     * included in a signature calculated before providing that data.
     */
    private function getQueryParamsToSign(array \$queryParams): array
    {
        \$signableQueryParams = array_intersect_key(\$queryParams, [
            EA::CRUD_ACTION => 0,
            EA::CRUD_CONTROLLER_FQCN => 1,
            EA::ENTITY_ID => 2,
            EA::ROUTE_NAME => 3,
            EA::ROUTE_PARAMS => 4,
        ]);

        ksort(\$signableQueryParams, \\SORT_STRING);

        return \$signableQueryParams;
    }

    private function buildUrl(array \$urlParts, array \$queryParams = []): string
    {
        ksort(\$queryParams, \\SORT_STRING);
        \$urlParts['query'] = http_build_query(\$queryParams, '', '&');

        \$scheme = isset(\$urlParts['scheme']) ? \$urlParts['scheme'].'://' : '';
        \$host = \$urlParts['host'] ?? '';
        \$port = isset(\$urlParts['port']) ? ':'.\$urlParts['port'] : '';
        \$user = \$urlParts['user'] ?? '';
        \$pass = isset(\$urlParts['pass']) ? ':'.\$urlParts['pass'] : '';
        \$pass = ('' !== \$user || '' !== \$pass) ? \"\$pass@\" : '';
        \$path = \$urlParts['path'] ?? '';
        \$query = '' !== \$urlParts['query'] ? '?'.\$urlParts['query'] : '';
        \$fragment = isset(\$urlParts['fragment']) ? '#'.\$urlParts['fragment'] : '';

        return \$scheme.\$user.\$pass.\$host.\$port.\$path.\$query.\$fragment;
    }
}
", "easycorp/easyadmin-bundle/src/Router/UrlSigner.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Router\\UrlSigner.php");
    }
}
