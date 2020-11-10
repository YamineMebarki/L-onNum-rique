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

/* vendor/symfony/routing/CompiledRoute.php */
class __TwigTemplate_07ba0d70b671d342e4bebf94ff48ddc171bd3330719973e631d5e2f225780541 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/CompiledRoute.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/CompiledRoute.php"));

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

namespace Symfony\\Component\\Routing;

/**
 * CompiledRoutes are returned by the RouteCompiler class.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CompiledRoute implements \\Serializable
{
    private \$variables;
    private \$tokens;
    private \$staticPrefix;
    private \$regex;
    private \$pathVariables;
    private \$hostVariables;
    private \$hostRegex;
    private \$hostTokens;

    /**
     * @param string      \$staticPrefix  The static prefix of the compiled route
     * @param string      \$regex         The regular expression to use to match this route
     * @param array       \$tokens        An array of tokens to use to generate URL for this route
     * @param array       \$pathVariables An array of path variables
     * @param string|null \$hostRegex     Host regex
     * @param array       \$hostTokens    Host tokens
     * @param array       \$hostVariables An array of host variables
     * @param array       \$variables     An array of variables (variables defined in the path and in the host patterns)
     */
    public function __construct(string \$staticPrefix, string \$regex, array \$tokens, array \$pathVariables, string \$hostRegex = null, array \$hostTokens = [], array \$hostVariables = [], array \$variables = [])
    {
        \$this->staticPrefix = \$staticPrefix;
        \$this->regex = \$regex;
        \$this->tokens = \$tokens;
        \$this->pathVariables = \$pathVariables;
        \$this->hostRegex = \$hostRegex;
        \$this->hostTokens = \$hostTokens;
        \$this->hostVariables = \$hostVariables;
        \$this->variables = \$variables;
    }

    public function __serialize(): array
    {
        return [
            'vars' => \$this->variables,
            'path_prefix' => \$this->staticPrefix,
            'path_regex' => \$this->regex,
            'path_tokens' => \$this->tokens,
            'path_vars' => \$this->pathVariables,
            'host_regex' => \$this->hostRegex,
            'host_tokens' => \$this->hostTokens,
            'host_vars' => \$this->hostVariables,
        ];
    }

    /**
     * @internal since Symfony 4.3
     * @final since Symfony 4.3
     */
    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function __unserialize(array \$data): void
    {
        \$this->variables = \$data['vars'];
        \$this->staticPrefix = \$data['path_prefix'];
        \$this->regex = \$data['path_regex'];
        \$this->tokens = \$data['path_tokens'];
        \$this->pathVariables = \$data['path_vars'];
        \$this->hostRegex = \$data['host_regex'];
        \$this->hostTokens = \$data['host_tokens'];
        \$this->hostVariables = \$data['host_vars'];
    }

    /**
     * @internal since Symfony 4.3
     * @final since Symfony 4.3
     */
    public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized, ['allowed_classes' => false]));
    }

    /**
     * Returns the static prefix.
     *
     * @return string The static prefix
     */
    public function getStaticPrefix()
    {
        return \$this->staticPrefix;
    }

    /**
     * Returns the regex.
     *
     * @return string The regex
     */
    public function getRegex()
    {
        return \$this->regex;
    }

    /**
     * Returns the host regex.
     *
     * @return string|null The host regex or null
     */
    public function getHostRegex()
    {
        return \$this->hostRegex;
    }

    /**
     * Returns the tokens.
     *
     * @return array The tokens
     */
    public function getTokens()
    {
        return \$this->tokens;
    }

    /**
     * Returns the host tokens.
     *
     * @return array The tokens
     */
    public function getHostTokens()
    {
        return \$this->hostTokens;
    }

    /**
     * Returns the variables.
     *
     * @return array The variables
     */
    public function getVariables()
    {
        return \$this->variables;
    }

    /**
     * Returns the path variables.
     *
     * @return array The variables
     */
    public function getPathVariables()
    {
        return \$this->pathVariables;
    }

    /**
     * Returns the host variables.
     *
     * @return array The variables
     */
    public function getHostVariables()
    {
        return \$this->hostVariables;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/CompiledRoute.php";
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

namespace Symfony\\Component\\Routing;

/**
 * CompiledRoutes are returned by the RouteCompiler class.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CompiledRoute implements \\Serializable
{
    private \$variables;
    private \$tokens;
    private \$staticPrefix;
    private \$regex;
    private \$pathVariables;
    private \$hostVariables;
    private \$hostRegex;
    private \$hostTokens;

    /**
     * @param string      \$staticPrefix  The static prefix of the compiled route
     * @param string      \$regex         The regular expression to use to match this route
     * @param array       \$tokens        An array of tokens to use to generate URL for this route
     * @param array       \$pathVariables An array of path variables
     * @param string|null \$hostRegex     Host regex
     * @param array       \$hostTokens    Host tokens
     * @param array       \$hostVariables An array of host variables
     * @param array       \$variables     An array of variables (variables defined in the path and in the host patterns)
     */
    public function __construct(string \$staticPrefix, string \$regex, array \$tokens, array \$pathVariables, string \$hostRegex = null, array \$hostTokens = [], array \$hostVariables = [], array \$variables = [])
    {
        \$this->staticPrefix = \$staticPrefix;
        \$this->regex = \$regex;
        \$this->tokens = \$tokens;
        \$this->pathVariables = \$pathVariables;
        \$this->hostRegex = \$hostRegex;
        \$this->hostTokens = \$hostTokens;
        \$this->hostVariables = \$hostVariables;
        \$this->variables = \$variables;
    }

    public function __serialize(): array
    {
        return [
            'vars' => \$this->variables,
            'path_prefix' => \$this->staticPrefix,
            'path_regex' => \$this->regex,
            'path_tokens' => \$this->tokens,
            'path_vars' => \$this->pathVariables,
            'host_regex' => \$this->hostRegex,
            'host_tokens' => \$this->hostTokens,
            'host_vars' => \$this->hostVariables,
        ];
    }

    /**
     * @internal since Symfony 4.3
     * @final since Symfony 4.3
     */
    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function __unserialize(array \$data): void
    {
        \$this->variables = \$data['vars'];
        \$this->staticPrefix = \$data['path_prefix'];
        \$this->regex = \$data['path_regex'];
        \$this->tokens = \$data['path_tokens'];
        \$this->pathVariables = \$data['path_vars'];
        \$this->hostRegex = \$data['host_regex'];
        \$this->hostTokens = \$data['host_tokens'];
        \$this->hostVariables = \$data['host_vars'];
    }

    /**
     * @internal since Symfony 4.3
     * @final since Symfony 4.3
     */
    public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized, ['allowed_classes' => false]));
    }

    /**
     * Returns the static prefix.
     *
     * @return string The static prefix
     */
    public function getStaticPrefix()
    {
        return \$this->staticPrefix;
    }

    /**
     * Returns the regex.
     *
     * @return string The regex
     */
    public function getRegex()
    {
        return \$this->regex;
    }

    /**
     * Returns the host regex.
     *
     * @return string|null The host regex or null
     */
    public function getHostRegex()
    {
        return \$this->hostRegex;
    }

    /**
     * Returns the tokens.
     *
     * @return array The tokens
     */
    public function getTokens()
    {
        return \$this->tokens;
    }

    /**
     * Returns the host tokens.
     *
     * @return array The tokens
     */
    public function getHostTokens()
    {
        return \$this->hostTokens;
    }

    /**
     * Returns the variables.
     *
     * @return array The variables
     */
    public function getVariables()
    {
        return \$this->variables;
    }

    /**
     * Returns the path variables.
     *
     * @return array The variables
     */
    public function getPathVariables()
    {
        return \$this->pathVariables;
    }

    /**
     * Returns the host variables.
     *
     * @return array The variables
     */
    public function getHostVariables()
    {
        return \$this->hostVariables;
    }
}
", "vendor/symfony/routing/CompiledRoute.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/CompiledRoute.php");
    }
}
