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

/* vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php */
class __TwigTemplate_94ae3ae2f8c731be218126173462cd65c0f7ce1ef1a7d20b852d7618c39b52ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Mime\\DependencyInjection\\AddMimeTypeGuesserPass;
use Symfony\\Component\\Mime\\FileinfoMimeTypeGuesser;
use Symfony\\Component\\Mime\\MimeTypes;

class AddMimeTypeGuesserPassTest extends TestCase
{
    public function testTags()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddMimeTypeGuesserPass());

        \$definition = new Definition(FileinfoMimeTypeGuesser::class);
        \$definition->addArgument('/path/to/magic/file');
        \$definition->addTag('mime.mime_type_guesser');
        \$container->setDefinition('some_mime_type_guesser', \$definition->setPublic(true));
        \$container->register('mime_types', MimeTypes::class)->setPublic(true);
        \$container->compile();

        \$router = \$container->getDefinition('mime_types');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerGuesser', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_mime_type_guesser'), \$calls[0][1][0]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Mime\\DependencyInjection\\AddMimeTypeGuesserPass;
use Symfony\\Component\\Mime\\FileinfoMimeTypeGuesser;
use Symfony\\Component\\Mime\\MimeTypes;

class AddMimeTypeGuesserPassTest extends TestCase
{
    public function testTags()
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new AddMimeTypeGuesserPass());

        \$definition = new Definition(FileinfoMimeTypeGuesser::class);
        \$definition->addArgument('/path/to/magic/file');
        \$definition->addTag('mime.mime_type_guesser');
        \$container->setDefinition('some_mime_type_guesser', \$definition->setPublic(true));
        \$container->register('mime_types', MimeTypes::class)->setPublic(true);
        \$container->compile();

        \$router = \$container->getDefinition('mime_types');
        \$calls = \$router->getMethodCalls();
        \$this->assertCount(1, \$calls);
        \$this->assertEquals('registerGuesser', \$calls[0][0]);
        \$this->assertEquals(new Reference('some_mime_type_guesser'), \$calls[0][1][0]);
    }
}
", "vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/DependencyInjection/AddMimeTypeGuesserPassTest.php");
    }
}
