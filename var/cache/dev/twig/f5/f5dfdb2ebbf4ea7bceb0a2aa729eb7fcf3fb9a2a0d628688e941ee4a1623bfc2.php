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

/* vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php */
class __TwigTemplate_498847385b6ef926a1c2b6f31e755547535027f757e4bef4fd2f645fc99ccbbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php"));

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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class EnvPlaceholderParameterBag extends ParameterBag
{
    private \$envPlaceholderUniquePrefix;
    private \$envPlaceholders = [];
    private \$unusedEnvPlaceholders = [];
    private \$providedTypes = [];

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (0 === strpos(\$name, 'env(') && ')' === substr(\$name, -1) && 'env()' !== \$name) {
            \$env = substr(\$name, 4, -1);

            if (isset(\$this->envPlaceholders[\$env])) {
                foreach (\$this->envPlaceholders[\$env] as \$placeholder) {
                    return \$placeholder; // return first result
                }
            }
            if (isset(\$this->unusedEnvPlaceholders[\$env])) {
                foreach (\$this->unusedEnvPlaceholders[\$env] as \$placeholder) {
                    return \$placeholder; // return first result
                }
            }
            if (!preg_match('/^(?:\\w*+:)*+\\w++\$/', \$env)) {
                throw new InvalidArgumentException(sprintf('Invalid %s name: only \"word\" characters are allowed.', \$name));
            }

            if (\$this->has(\$name)) {
                \$defaultValue = parent::get(\$name);

                if (null !== \$defaultValue && !is_scalar(\$defaultValue)) { // !is_string in 5.0
                    //throw new RuntimeException(sprintf('The default value of an env() parameter must be a string or null, but \"%s\" given to \"%s\".', \\gettype(\$defaultValue), \$name));
                    throw new RuntimeException(sprintf('The default value of an env() parameter must be scalar or null, but \"%s\" given to \"%s\".', \\gettype(\$defaultValue), \$name));
                } elseif (is_scalar(\$defaultValue) && !\\is_string(\$defaultValue)) {
                    @trigger_error(sprintf('A non-string default value of an env() parameter is deprecated since 4.3, cast \"%s\" to string instead.', \$name), E_USER_DEPRECATED);
                }
            }

            \$uniqueName = md5(\$name.uniqid(mt_rand(), true));
            \$placeholder = sprintf('%s_%s_%s', \$this->getEnvPlaceholderUniquePrefix(), str_replace(':', '_', \$env), \$uniqueName);
            \$this->envPlaceholders[\$env][\$placeholder] = \$placeholder;

            return \$placeholder;
        }

        return parent::get(\$name);
    }

    /**
     * Gets the common env placeholder prefix for env vars created by this bag.
     */
    public function getEnvPlaceholderUniquePrefix(): string
    {
        return \$this->envPlaceholderUniquePrefix ?? \$this->envPlaceholderUniquePrefix = 'env_'.bin2hex(random_bytes(8));
    }

    /**
     * Returns the map of env vars used in the resolved parameter values to their placeholders.
     *
     * @return string[][] A map of env var names to their placeholders
     */
    public function getEnvPlaceholders()
    {
        return \$this->envPlaceholders;
    }

    public function getUnusedEnvPlaceholders(): array
    {
        return \$this->unusedEnvPlaceholders;
    }

    public function clearUnusedEnvPlaceholders()
    {
        \$this->unusedEnvPlaceholders = [];
    }

    /**
     * Merges the env placeholders of another EnvPlaceholderParameterBag.
     */
    public function mergeEnvPlaceholders(self \$bag)
    {
        if (\$newPlaceholders = \$bag->getEnvPlaceholders()) {
            \$this->envPlaceholders += \$newPlaceholders;

            foreach (\$newPlaceholders as \$env => \$placeholders) {
                \$this->envPlaceholders[\$env] += \$placeholders;
            }
        }

        if (\$newUnusedPlaceholders = \$bag->getUnusedEnvPlaceholders()) {
            \$this->unusedEnvPlaceholders += \$newUnusedPlaceholders;

            foreach (\$newUnusedPlaceholders as \$env => \$placeholders) {
                \$this->unusedEnvPlaceholders[\$env] += \$placeholders;
            }
        }
    }

    /**
     * Maps env prefixes to their corresponding PHP types.
     */
    public function setProvidedTypes(array \$providedTypes)
    {
        \$this->providedTypes = \$providedTypes;
    }

    /**
     * Gets the PHP types corresponding to env() parameter prefixes.
     *
     * @return string[][]
     */
    public function getProvidedTypes()
    {
        return \$this->providedTypes;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve()
    {
        if (\$this->resolved) {
            return;
        }
        parent::resolve();

        foreach (\$this->envPlaceholders as \$env => \$placeholders) {
            if (!\$this->has(\$name = \"env(\$env)\")) {
                continue;
            }
            if (is_numeric(\$default = \$this->parameters[\$name])) {
                if (!\\is_string(\$default)) {
                    @trigger_error(sprintf('A non-string default value of env parameter \"%s\" is deprecated since 4.3, cast it to string instead.', \$env), E_USER_DEPRECATED);
                }
                \$this->parameters[\$name] = (string) \$default;
            } elseif (null !== \$default && !is_scalar(\$default)) { // !is_string in 5.0
                //throw new RuntimeException(sprintf('The default value of env parameter \"%s\" must be a string or null, %s given.', \$env, \\gettype(\$default)));
                throw new RuntimeException(sprintf('The default value of env parameter \"%s\" must be scalar or null, %s given.', \$env, \\gettype(\$default)));
            } elseif (is_scalar(\$default) && !\\is_string(\$default)) {
                @trigger_error(sprintf('A non-string default value of env parameter \"%s\" is deprecated since 4.3, cast it to string instead.', \$env), E_USER_DEPRECATED);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php";
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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class EnvPlaceholderParameterBag extends ParameterBag
{
    private \$envPlaceholderUniquePrefix;
    private \$envPlaceholders = [];
    private \$unusedEnvPlaceholders = [];
    private \$providedTypes = [];

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        if (0 === strpos(\$name, 'env(') && ')' === substr(\$name, -1) && 'env()' !== \$name) {
            \$env = substr(\$name, 4, -1);

            if (isset(\$this->envPlaceholders[\$env])) {
                foreach (\$this->envPlaceholders[\$env] as \$placeholder) {
                    return \$placeholder; // return first result
                }
            }
            if (isset(\$this->unusedEnvPlaceholders[\$env])) {
                foreach (\$this->unusedEnvPlaceholders[\$env] as \$placeholder) {
                    return \$placeholder; // return first result
                }
            }
            if (!preg_match('/^(?:\\w*+:)*+\\w++\$/', \$env)) {
                throw new InvalidArgumentException(sprintf('Invalid %s name: only \"word\" characters are allowed.', \$name));
            }

            if (\$this->has(\$name)) {
                \$defaultValue = parent::get(\$name);

                if (null !== \$defaultValue && !is_scalar(\$defaultValue)) { // !is_string in 5.0
                    //throw new RuntimeException(sprintf('The default value of an env() parameter must be a string or null, but \"%s\" given to \"%s\".', \\gettype(\$defaultValue), \$name));
                    throw new RuntimeException(sprintf('The default value of an env() parameter must be scalar or null, but \"%s\" given to \"%s\".', \\gettype(\$defaultValue), \$name));
                } elseif (is_scalar(\$defaultValue) && !\\is_string(\$defaultValue)) {
                    @trigger_error(sprintf('A non-string default value of an env() parameter is deprecated since 4.3, cast \"%s\" to string instead.', \$name), E_USER_DEPRECATED);
                }
            }

            \$uniqueName = md5(\$name.uniqid(mt_rand(), true));
            \$placeholder = sprintf('%s_%s_%s', \$this->getEnvPlaceholderUniquePrefix(), str_replace(':', '_', \$env), \$uniqueName);
            \$this->envPlaceholders[\$env][\$placeholder] = \$placeholder;

            return \$placeholder;
        }

        return parent::get(\$name);
    }

    /**
     * Gets the common env placeholder prefix for env vars created by this bag.
     */
    public function getEnvPlaceholderUniquePrefix(): string
    {
        return \$this->envPlaceholderUniquePrefix ?? \$this->envPlaceholderUniquePrefix = 'env_'.bin2hex(random_bytes(8));
    }

    /**
     * Returns the map of env vars used in the resolved parameter values to their placeholders.
     *
     * @return string[][] A map of env var names to their placeholders
     */
    public function getEnvPlaceholders()
    {
        return \$this->envPlaceholders;
    }

    public function getUnusedEnvPlaceholders(): array
    {
        return \$this->unusedEnvPlaceholders;
    }

    public function clearUnusedEnvPlaceholders()
    {
        \$this->unusedEnvPlaceholders = [];
    }

    /**
     * Merges the env placeholders of another EnvPlaceholderParameterBag.
     */
    public function mergeEnvPlaceholders(self \$bag)
    {
        if (\$newPlaceholders = \$bag->getEnvPlaceholders()) {
            \$this->envPlaceholders += \$newPlaceholders;

            foreach (\$newPlaceholders as \$env => \$placeholders) {
                \$this->envPlaceholders[\$env] += \$placeholders;
            }
        }

        if (\$newUnusedPlaceholders = \$bag->getUnusedEnvPlaceholders()) {
            \$this->unusedEnvPlaceholders += \$newUnusedPlaceholders;

            foreach (\$newUnusedPlaceholders as \$env => \$placeholders) {
                \$this->unusedEnvPlaceholders[\$env] += \$placeholders;
            }
        }
    }

    /**
     * Maps env prefixes to their corresponding PHP types.
     */
    public function setProvidedTypes(array \$providedTypes)
    {
        \$this->providedTypes = \$providedTypes;
    }

    /**
     * Gets the PHP types corresponding to env() parameter prefixes.
     *
     * @return string[][]
     */
    public function getProvidedTypes()
    {
        return \$this->providedTypes;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve()
    {
        if (\$this->resolved) {
            return;
        }
        parent::resolve();

        foreach (\$this->envPlaceholders as \$env => \$placeholders) {
            if (!\$this->has(\$name = \"env(\$env)\")) {
                continue;
            }
            if (is_numeric(\$default = \$this->parameters[\$name])) {
                if (!\\is_string(\$default)) {
                    @trigger_error(sprintf('A non-string default value of env parameter \"%s\" is deprecated since 4.3, cast it to string instead.', \$env), E_USER_DEPRECATED);
                }
                \$this->parameters[\$name] = (string) \$default;
            } elseif (null !== \$default && !is_scalar(\$default)) { // !is_string in 5.0
                //throw new RuntimeException(sprintf('The default value of env parameter \"%s\" must be a string or null, %s given.', \$env, \\gettype(\$default)));
                throw new RuntimeException(sprintf('The default value of env parameter \"%s\" must be scalar or null, %s given.', \$env, \\gettype(\$default)));
            } elseif (is_scalar(\$default) && !\\is_string(\$default)) {
                @trigger_error(sprintf('A non-string default value of env parameter \"%s\" is deprecated since 4.3, cast it to string instead.', \$env), E_USER_DEPRECATED);
            }
        }
    }
}
", "vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ParameterBag/EnvPlaceholderParameterBag.php");
    }
}
