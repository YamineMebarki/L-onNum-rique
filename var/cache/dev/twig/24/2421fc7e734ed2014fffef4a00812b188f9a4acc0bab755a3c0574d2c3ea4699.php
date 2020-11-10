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

/* vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php */
class __TwigTemplate_4fb2028850b4448626b12b766f527aaf2c3ab1ec7aa14c7cb6f2ea76867c5eec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentValueResolver;

use Symfony\\Bridge\\PsrHttpMessage\\HttpMessageFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Injects the RequestInterface, MessageInterface or ServerRequestInterface when requested.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class Psr7ServerRequestResolver implements ArgumentValueResolverInterface
{
    private static \$supportedTypes = [
        'Psr\\Http\\Message\\ServerRequestInterface' => true,
        'Psr\\Http\\Message\\RequestInterface' => true,
        'Psr\\Http\\Message\\MessageInterface' => true,
    ];

    private \$httpMessageFactory;

    public function __construct(HttpMessageFactoryInterface \$httpMessageFactory)
    {
        \$this->httpMessageFactory = \$httpMessageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        return isset(self::\$supportedTypes[\$argument->getType()]);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield \$this->httpMessageFactory->createRequest(\$request);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentValueResolver;

use Symfony\\Bridge\\PsrHttpMessage\\HttpMessageFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Injects the RequestInterface, MessageInterface or ServerRequestInterface when requested.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class Psr7ServerRequestResolver implements ArgumentValueResolverInterface
{
    private static \$supportedTypes = [
        'Psr\\Http\\Message\\ServerRequestInterface' => true,
        'Psr\\Http\\Message\\RequestInterface' => true,
        'Psr\\Http\\Message\\MessageInterface' => true,
    ];

    private \$httpMessageFactory;

    public function __construct(HttpMessageFactoryInterface \$httpMessageFactory)
    {
        \$this->httpMessageFactory = \$httpMessageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        return isset(self::\$supportedTypes[\$argument->getType()]);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield \$this->httpMessageFactory->createRequest(\$request);
    }
}
", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php");
    }
}
