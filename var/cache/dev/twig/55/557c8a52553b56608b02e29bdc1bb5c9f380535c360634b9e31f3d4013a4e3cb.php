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

/* vendor/symfony/form/Util/FormUtil.php */
class __TwigTemplate_7e772b7fca5805b244e1163ce3385826a9cc889f144d3915afae9a59e2c295ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/FormUtil.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/FormUtil.php"));

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

namespace Symfony\\Component\\Form\\Util;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormUtil
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Returns whether the given data is empty.
     *
     * This logic is reused multiple times throughout the processing of
     * a form and needs to be consistent. PHP keyword `empty` cannot
     * be used as it also considers 0 and \"0\" to be empty.
     *
     * @param mixed \$data
     *
     * @return bool
     */
    public static function isEmpty(\$data)
    {
        // Should not do a check for [] === \$data!!!
        // This method is used in occurrences where arrays are
        // not considered to be empty, ever.
        return null === \$data || '' === \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/FormUtil.php";
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

namespace Symfony\\Component\\Form\\Util;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormUtil
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Returns whether the given data is empty.
     *
     * This logic is reused multiple times throughout the processing of
     * a form and needs to be consistent. PHP keyword `empty` cannot
     * be used as it also considers 0 and \"0\" to be empty.
     *
     * @param mixed \$data
     *
     * @return bool
     */
    public static function isEmpty(\$data)
    {
        // Should not do a check for [] === \$data!!!
        // This method is used in occurrences where arrays are
        // not considered to be empty, ever.
        return null === \$data || '' === \$data;
    }
}
", "vendor/symfony/form/Util/FormUtil.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/FormUtil.php");
    }
}
