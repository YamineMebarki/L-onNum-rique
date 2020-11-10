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

/* vendor/symfony/form/CallbackTransformer.php */
class __TwigTemplate_1d24d20d99919e8ef55cfddb00dc36f8449baead7e783a0e7f23a27e4785c726 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/CallbackTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/CallbackTransformer.php"));

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

namespace Symfony\\Component\\Form;

class CallbackTransformer implements DataTransformerInterface
{
    private \$transform;
    private \$reverseTransform;

    /**
     * @param callable \$transform        The forward transform callback
     * @param callable \$reverseTransform The reverse transform callback
     */
    public function __construct(callable \$transform, callable \$reverseTransform)
    {
        \$this->transform = \$transform;
        \$this->reverseTransform = \$reverseTransform;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$data)
    {
        return (\$this->transform)(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$data)
    {
        return (\$this->reverseTransform)(\$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/CallbackTransformer.php";
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

namespace Symfony\\Component\\Form;

class CallbackTransformer implements DataTransformerInterface
{
    private \$transform;
    private \$reverseTransform;

    /**
     * @param callable \$transform        The forward transform callback
     * @param callable \$reverseTransform The reverse transform callback
     */
    public function __construct(callable \$transform, callable \$reverseTransform)
    {
        \$this->transform = \$transform;
        \$this->reverseTransform = \$reverseTransform;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$data)
    {
        return (\$this->transform)(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$data)
    {
        return (\$this->reverseTransform)(\$data);
    }
}
", "vendor/symfony/form/CallbackTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/CallbackTransformer.php");
    }
}
