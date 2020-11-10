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

/* vendor/symfony/dependency-injection/Alias.php */
class __TwigTemplate_7e4574457e3e4b31e6445cc28f5ff740a0e204a001ff6e83168aadb1b96f76f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Alias.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Alias.php"));

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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

class Alias
{
    private \$id;
    private \$public;
    private \$private;
    private \$deprecated;
    private \$deprecationTemplate;

    private static \$defaultDeprecationTemplate = 'The \"%alias_id%\" service alias is deprecated. You should stop using it, as it will be removed in the future.';

    public function __construct(string \$id, bool \$public = true)
    {
        \$this->id = \$id;
        \$this->public = \$public;
        \$this->private = 2 > \\func_num_args();
        \$this->deprecated = false;
    }

    /**
     * Checks if this DI Alias should be public or not.
     *
     * @return bool
     */
    public function isPublic()
    {
        return \$this->public;
    }

    /**
     * Sets if this Alias is public.
     *
     * @param bool \$boolean If this Alias should be public
     *
     * @return \$this
     */
    public function setPublic(\$boolean)
    {
        \$this->public = (bool) \$boolean;
        \$this->private = false;

        return \$this;
    }

    /**
     * Sets if this Alias is private.
     *
     * When set, the \"private\" state has a higher precedence than \"public\".
     * In version 3.4, a \"private\" alias always remains publicly accessible,
     * but triggers a deprecation notice when accessed from the container,
     * so that the alias can be made really private in 4.0.
     *
     * @param bool \$boolean
     *
     * @return \$this
     */
    public function setPrivate(\$boolean)
    {
        \$this->private = (bool) \$boolean;

        return \$this;
    }

    /**
     * Whether this alias is private.
     *
     * @return bool
     */
    public function isPrivate()
    {
        return \$this->private;
    }

    /**
     * Whether this alias is deprecated, that means it should not be referenced
     * anymore.
     *
     * @param bool   \$status   Whether this alias is deprecated, defaults to true
     * @param string \$template Optional template message to use if the alias is deprecated
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when the message template is invalid
     */
    public function setDeprecated(\$status = true, \$template = null)
    {
        if (null !== \$template) {
            if (preg_match('#[\\r\\n]|\\*/#', \$template)) {
                throw new InvalidArgumentException('Invalid characters found in deprecation template.');
            }

            if (false === strpos(\$template, '%alias_id%')) {
                throw new InvalidArgumentException('The deprecation template must contain the \"%alias_id%\" placeholder.');
            }

            \$this->deprecationTemplate = \$template;
        }

        \$this->deprecated = (bool) \$status;

        return \$this;
    }

    public function isDeprecated(): bool
    {
        return \$this->deprecated;
    }

    public function getDeprecationMessage(string \$id): string
    {
        return str_replace('%alias_id%', \$id, \$this->deprecationTemplate ?: self::\$defaultDeprecationTemplate);
    }

    /**
     * Returns the Id of this alias.
     *
     * @return string The alias id
     */
    public function __toString()
    {
        return \$this->id;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Alias.php";
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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

class Alias
{
    private \$id;
    private \$public;
    private \$private;
    private \$deprecated;
    private \$deprecationTemplate;

    private static \$defaultDeprecationTemplate = 'The \"%alias_id%\" service alias is deprecated. You should stop using it, as it will be removed in the future.';

    public function __construct(string \$id, bool \$public = true)
    {
        \$this->id = \$id;
        \$this->public = \$public;
        \$this->private = 2 > \\func_num_args();
        \$this->deprecated = false;
    }

    /**
     * Checks if this DI Alias should be public or not.
     *
     * @return bool
     */
    public function isPublic()
    {
        return \$this->public;
    }

    /**
     * Sets if this Alias is public.
     *
     * @param bool \$boolean If this Alias should be public
     *
     * @return \$this
     */
    public function setPublic(\$boolean)
    {
        \$this->public = (bool) \$boolean;
        \$this->private = false;

        return \$this;
    }

    /**
     * Sets if this Alias is private.
     *
     * When set, the \"private\" state has a higher precedence than \"public\".
     * In version 3.4, a \"private\" alias always remains publicly accessible,
     * but triggers a deprecation notice when accessed from the container,
     * so that the alias can be made really private in 4.0.
     *
     * @param bool \$boolean
     *
     * @return \$this
     */
    public function setPrivate(\$boolean)
    {
        \$this->private = (bool) \$boolean;

        return \$this;
    }

    /**
     * Whether this alias is private.
     *
     * @return bool
     */
    public function isPrivate()
    {
        return \$this->private;
    }

    /**
     * Whether this alias is deprecated, that means it should not be referenced
     * anymore.
     *
     * @param bool   \$status   Whether this alias is deprecated, defaults to true
     * @param string \$template Optional template message to use if the alias is deprecated
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when the message template is invalid
     */
    public function setDeprecated(\$status = true, \$template = null)
    {
        if (null !== \$template) {
            if (preg_match('#[\\r\\n]|\\*/#', \$template)) {
                throw new InvalidArgumentException('Invalid characters found in deprecation template.');
            }

            if (false === strpos(\$template, '%alias_id%')) {
                throw new InvalidArgumentException('The deprecation template must contain the \"%alias_id%\" placeholder.');
            }

            \$this->deprecationTemplate = \$template;
        }

        \$this->deprecated = (bool) \$status;

        return \$this;
    }

    public function isDeprecated(): bool
    {
        return \$this->deprecated;
    }

    public function getDeprecationMessage(string \$id): string
    {
        return str_replace('%alias_id%', \$id, \$this->deprecationTemplate ?: self::\$defaultDeprecationTemplate);
    }

    /**
     * Returns the Id of this alias.
     *
     * @return string The alias id
     */
    public function __toString()
    {
        return \$this->id;
    }
}
", "vendor/symfony/dependency-injection/Alias.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Alias.php");
    }
}
