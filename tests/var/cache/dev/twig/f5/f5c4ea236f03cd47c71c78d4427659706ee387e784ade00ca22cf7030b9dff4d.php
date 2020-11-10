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

/* vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php */
class __TwigTemplate_6ad264d2195e7675a254133b3481cd3ca7f970fa3e288a2cd965675ff0437755 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\WebProfilerBundle\\Csp;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Handles Content-Security-Policy HTTP header for the WebProfiler Bundle.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class ContentSecurityPolicyHandler
{
    private \$nonceGenerator;
    private \$cspDisabled = false;

    public function __construct(NonceGenerator \$nonceGenerator)
    {
        \$this->nonceGenerator = \$nonceGenerator;
    }

    /**
     * Returns an array of nonces to be used in Twig templates and Content-Security-Policy headers.
     *
     * Nonce can be provided by;
     *  - The request - In case HTML content is fetched via AJAX and inserted in DOM, it must use the same nonce as origin
     *  - The response -  A call to getNonces() has already been done previously. Same nonce are returned
     *  - They are otherwise randomly generated
     *
     * @return array
     */
    public function getNonces(Request \$request, Response \$response)
    {
        if (\$request->headers->has('X-SymfonyProfiler-Script-Nonce') && \$request->headers->has('X-SymfonyProfiler-Style-Nonce')) {
            return [
                'csp_script_nonce' => \$request->headers->get('X-SymfonyProfiler-Script-Nonce'),
                'csp_style_nonce' => \$request->headers->get('X-SymfonyProfiler-Style-Nonce'),
            ];
        }

        if (\$response->headers->has('X-SymfonyProfiler-Script-Nonce') && \$response->headers->has('X-SymfonyProfiler-Style-Nonce')) {
            return [
                'csp_script_nonce' => \$response->headers->get('X-SymfonyProfiler-Script-Nonce'),
                'csp_style_nonce' => \$response->headers->get('X-SymfonyProfiler-Style-Nonce'),
            ];
        }

        \$nonces = [
            'csp_script_nonce' => \$this->generateNonce(),
            'csp_style_nonce' => \$this->generateNonce(),
        ];

        \$response->headers->set('X-SymfonyProfiler-Script-Nonce', \$nonces['csp_script_nonce']);
        \$response->headers->set('X-SymfonyProfiler-Style-Nonce', \$nonces['csp_style_nonce']);

        return \$nonces;
    }

    /**
     * Disables Content-Security-Policy.
     *
     * All related headers will be removed.
     */
    public function disableCsp()
    {
        \$this->cspDisabled = true;
    }

    /**
     * Cleanup temporary headers and updates Content-Security-Policy headers.
     *
     * @return array Nonces used by the bundle in Content-Security-Policy header
     */
    public function updateResponseHeaders(Request \$request, Response \$response)
    {
        if (\$this->cspDisabled) {
            \$this->removeCspHeaders(\$response);

            return [];
        }

        \$nonces = \$this->getNonces(\$request, \$response);
        \$this->cleanHeaders(\$response);
        \$this->updateCspHeaders(\$response, \$nonces);

        return \$nonces;
    }

    private function cleanHeaders(Response \$response)
    {
        \$response->headers->remove('X-SymfonyProfiler-Script-Nonce');
        \$response->headers->remove('X-SymfonyProfiler-Style-Nonce');
    }

    private function removeCspHeaders(Response \$response)
    {
        \$response->headers->remove('X-Content-Security-Policy');
        \$response->headers->remove('Content-Security-Policy');
        \$response->headers->remove('Content-Security-Policy-Report-Only');
    }

    /**
     * Updates Content-Security-Policy headers in a response.
     *
     * @return array
     */
    private function updateCspHeaders(Response \$response, array \$nonces = [])
    {
        \$nonces = array_replace([
            'csp_script_nonce' => \$this->generateNonce(),
            'csp_style_nonce' => \$this->generateNonce(),
        ], \$nonces);

        \$ruleIsSet = false;

        \$headers = \$this->getCspHeaders(\$response);

        foreach (\$headers as \$header => \$directives) {
            foreach (['script-src' => 'csp_script_nonce', 'style-src' => 'csp_style_nonce'] as \$type => \$tokenName) {
                if (\$this->authorizesInline(\$directives, \$type)) {
                    continue;
                }
                if (!isset(\$headers[\$header][\$type])) {
                    if (isset(\$headers[\$header]['default-src'])) {
                        \$headers[\$header][\$type] = \$headers[\$header]['default-src'];
                    } else {
                        // If there is no script-src/style-src and no default-src, no additional rules required.
                        continue;
                    }
                }
                \$ruleIsSet = true;
                if (!\\in_array('\\'unsafe-inline\\'', \$headers[\$header][\$type], true)) {
                    \$headers[\$header][\$type][] = '\\'unsafe-inline\\'';
                }
                \$headers[\$header][\$type][] = sprintf('\\'nonce-%s\\'', \$nonces[\$tokenName]);
            }
        }

        if (!\$ruleIsSet) {
            return \$nonces;
        }

        foreach (\$headers as \$header => \$directives) {
            \$response->headers->set(\$header, \$this->generateCspHeader(\$directives));
        }

        return \$nonces;
    }

    /**
     * Generates a valid Content-Security-Policy nonce.
     *
     * @return string
     */
    private function generateNonce()
    {
        return \$this->nonceGenerator->generate();
    }

    /**
     * Converts a directive set array into Content-Security-Policy header.
     *
     * @param array \$directives The directive set
     *
     * @return string The Content-Security-Policy header
     */
    private function generateCspHeader(array \$directives)
    {
        return array_reduce(array_keys(\$directives), function (\$res, \$name) use (\$directives) {
            return ('' !== \$res ? \$res.'; ' : '').sprintf('%s %s', \$name, implode(' ', \$directives[\$name]));
        }, '');
    }

    /**
     * Converts a Content-Security-Policy header value into a directive set array.
     *
     * @param string \$header The header value
     *
     * @return array The directive set
     */
    private function parseDirectives(\$header)
    {
        \$directives = [];

        foreach (explode(';', \$header) as \$directive) {
            \$parts = explode(' ', trim(\$directive));
            if (\\count(\$parts) < 1) {
                continue;
            }
            \$name = array_shift(\$parts);
            \$directives[\$name] = \$parts;
        }

        return \$directives;
    }

    /**
     * Detects if the 'unsafe-inline' is prevented for a directive within the directive set.
     *
     * @param array  \$directivesSet The directive set
     * @param string \$type          The name of the directive to check
     *
     * @return bool
     */
    private function authorizesInline(array \$directivesSet, \$type)
    {
        if (isset(\$directivesSet[\$type])) {
            \$directives = \$directivesSet[\$type];
        } elseif (isset(\$directivesSet['default-src'])) {
            \$directives = \$directivesSet['default-src'];
        } else {
            return false;
        }

        return \\in_array('\\'unsafe-inline\\'', \$directives, true) && !\$this->hasHashOrNonce(\$directives);
    }

    private function hasHashOrNonce(array \$directives)
    {
        foreach (\$directives as \$directive) {
            if ('\\'' !== substr(\$directive, -1)) {
                continue;
            }
            if ('\\'nonce-' === substr(\$directive, 0, 7)) {
                return true;
            }
            if (\\in_array(substr(\$directive, 0, 8), ['\\'sha256-', '\\'sha384-', '\\'sha512-'], true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Retrieves the Content-Security-Policy headers (either X-Content-Security-Policy or Content-Security-Policy) from
     * a response.
     *
     * @return array An associative array of headers
     */
    private function getCspHeaders(Response \$response)
    {
        \$headers = [];

        if (\$response->headers->has('Content-Security-Policy')) {
            \$headers['Content-Security-Policy'] = \$this->parseDirectives(\$response->headers->get('Content-Security-Policy'));
        }

        if (\$response->headers->has('Content-Security-Policy-Report-Only')) {
            \$headers['Content-Security-Policy-Report-Only'] = \$this->parseDirectives(\$response->headers->get('Content-Security-Policy-Report-Only'));
        }

        if (\$response->headers->has('X-Content-Security-Policy')) {
            \$headers['X-Content-Security-Policy'] = \$this->parseDirectives(\$response->headers->get('X-Content-Security-Policy'));
        }

        return \$headers;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\WebProfilerBundle\\Csp;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Handles Content-Security-Policy HTTP header for the WebProfiler Bundle.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class ContentSecurityPolicyHandler
{
    private \$nonceGenerator;
    private \$cspDisabled = false;

    public function __construct(NonceGenerator \$nonceGenerator)
    {
        \$this->nonceGenerator = \$nonceGenerator;
    }

    /**
     * Returns an array of nonces to be used in Twig templates and Content-Security-Policy headers.
     *
     * Nonce can be provided by;
     *  - The request - In case HTML content is fetched via AJAX and inserted in DOM, it must use the same nonce as origin
     *  - The response -  A call to getNonces() has already been done previously. Same nonce are returned
     *  - They are otherwise randomly generated
     *
     * @return array
     */
    public function getNonces(Request \$request, Response \$response)
    {
        if (\$request->headers->has('X-SymfonyProfiler-Script-Nonce') && \$request->headers->has('X-SymfonyProfiler-Style-Nonce')) {
            return [
                'csp_script_nonce' => \$request->headers->get('X-SymfonyProfiler-Script-Nonce'),
                'csp_style_nonce' => \$request->headers->get('X-SymfonyProfiler-Style-Nonce'),
            ];
        }

        if (\$response->headers->has('X-SymfonyProfiler-Script-Nonce') && \$response->headers->has('X-SymfonyProfiler-Style-Nonce')) {
            return [
                'csp_script_nonce' => \$response->headers->get('X-SymfonyProfiler-Script-Nonce'),
                'csp_style_nonce' => \$response->headers->get('X-SymfonyProfiler-Style-Nonce'),
            ];
        }

        \$nonces = [
            'csp_script_nonce' => \$this->generateNonce(),
            'csp_style_nonce' => \$this->generateNonce(),
        ];

        \$response->headers->set('X-SymfonyProfiler-Script-Nonce', \$nonces['csp_script_nonce']);
        \$response->headers->set('X-SymfonyProfiler-Style-Nonce', \$nonces['csp_style_nonce']);

        return \$nonces;
    }

    /**
     * Disables Content-Security-Policy.
     *
     * All related headers will be removed.
     */
    public function disableCsp()
    {
        \$this->cspDisabled = true;
    }

    /**
     * Cleanup temporary headers and updates Content-Security-Policy headers.
     *
     * @return array Nonces used by the bundle in Content-Security-Policy header
     */
    public function updateResponseHeaders(Request \$request, Response \$response)
    {
        if (\$this->cspDisabled) {
            \$this->removeCspHeaders(\$response);

            return [];
        }

        \$nonces = \$this->getNonces(\$request, \$response);
        \$this->cleanHeaders(\$response);
        \$this->updateCspHeaders(\$response, \$nonces);

        return \$nonces;
    }

    private function cleanHeaders(Response \$response)
    {
        \$response->headers->remove('X-SymfonyProfiler-Script-Nonce');
        \$response->headers->remove('X-SymfonyProfiler-Style-Nonce');
    }

    private function removeCspHeaders(Response \$response)
    {
        \$response->headers->remove('X-Content-Security-Policy');
        \$response->headers->remove('Content-Security-Policy');
        \$response->headers->remove('Content-Security-Policy-Report-Only');
    }

    /**
     * Updates Content-Security-Policy headers in a response.
     *
     * @return array
     */
    private function updateCspHeaders(Response \$response, array \$nonces = [])
    {
        \$nonces = array_replace([
            'csp_script_nonce' => \$this->generateNonce(),
            'csp_style_nonce' => \$this->generateNonce(),
        ], \$nonces);

        \$ruleIsSet = false;

        \$headers = \$this->getCspHeaders(\$response);

        foreach (\$headers as \$header => \$directives) {
            foreach (['script-src' => 'csp_script_nonce', 'style-src' => 'csp_style_nonce'] as \$type => \$tokenName) {
                if (\$this->authorizesInline(\$directives, \$type)) {
                    continue;
                }
                if (!isset(\$headers[\$header][\$type])) {
                    if (isset(\$headers[\$header]['default-src'])) {
                        \$headers[\$header][\$type] = \$headers[\$header]['default-src'];
                    } else {
                        // If there is no script-src/style-src and no default-src, no additional rules required.
                        continue;
                    }
                }
                \$ruleIsSet = true;
                if (!\\in_array('\\'unsafe-inline\\'', \$headers[\$header][\$type], true)) {
                    \$headers[\$header][\$type][] = '\\'unsafe-inline\\'';
                }
                \$headers[\$header][\$type][] = sprintf('\\'nonce-%s\\'', \$nonces[\$tokenName]);
            }
        }

        if (!\$ruleIsSet) {
            return \$nonces;
        }

        foreach (\$headers as \$header => \$directives) {
            \$response->headers->set(\$header, \$this->generateCspHeader(\$directives));
        }

        return \$nonces;
    }

    /**
     * Generates a valid Content-Security-Policy nonce.
     *
     * @return string
     */
    private function generateNonce()
    {
        return \$this->nonceGenerator->generate();
    }

    /**
     * Converts a directive set array into Content-Security-Policy header.
     *
     * @param array \$directives The directive set
     *
     * @return string The Content-Security-Policy header
     */
    private function generateCspHeader(array \$directives)
    {
        return array_reduce(array_keys(\$directives), function (\$res, \$name) use (\$directives) {
            return ('' !== \$res ? \$res.'; ' : '').sprintf('%s %s', \$name, implode(' ', \$directives[\$name]));
        }, '');
    }

    /**
     * Converts a Content-Security-Policy header value into a directive set array.
     *
     * @param string \$header The header value
     *
     * @return array The directive set
     */
    private function parseDirectives(\$header)
    {
        \$directives = [];

        foreach (explode(';', \$header) as \$directive) {
            \$parts = explode(' ', trim(\$directive));
            if (\\count(\$parts) < 1) {
                continue;
            }
            \$name = array_shift(\$parts);
            \$directives[\$name] = \$parts;
        }

        return \$directives;
    }

    /**
     * Detects if the 'unsafe-inline' is prevented for a directive within the directive set.
     *
     * @param array  \$directivesSet The directive set
     * @param string \$type          The name of the directive to check
     *
     * @return bool
     */
    private function authorizesInline(array \$directivesSet, \$type)
    {
        if (isset(\$directivesSet[\$type])) {
            \$directives = \$directivesSet[\$type];
        } elseif (isset(\$directivesSet['default-src'])) {
            \$directives = \$directivesSet['default-src'];
        } else {
            return false;
        }

        return \\in_array('\\'unsafe-inline\\'', \$directives, true) && !\$this->hasHashOrNonce(\$directives);
    }

    private function hasHashOrNonce(array \$directives)
    {
        foreach (\$directives as \$directive) {
            if ('\\'' !== substr(\$directive, -1)) {
                continue;
            }
            if ('\\'nonce-' === substr(\$directive, 0, 7)) {
                return true;
            }
            if (\\in_array(substr(\$directive, 0, 8), ['\\'sha256-', '\\'sha384-', '\\'sha512-'], true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Retrieves the Content-Security-Policy headers (either X-Content-Security-Policy or Content-Security-Policy) from
     * a response.
     *
     * @return array An associative array of headers
     */
    private function getCspHeaders(Response \$response)
    {
        \$headers = [];

        if (\$response->headers->has('Content-Security-Policy')) {
            \$headers['Content-Security-Policy'] = \$this->parseDirectives(\$response->headers->get('Content-Security-Policy'));
        }

        if (\$response->headers->has('Content-Security-Policy-Report-Only')) {
            \$headers['Content-Security-Policy-Report-Only'] = \$this->parseDirectives(\$response->headers->get('Content-Security-Policy-Report-Only'));
        }

        if (\$response->headers->has('X-Content-Security-Policy')) {
            \$headers['X-Content-Security-Policy'] = \$this->parseDirectives(\$response->headers->get('X-Content-Security-Policy'));
        }

        return \$headers;
    }
}
", "vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php");
    }
}
