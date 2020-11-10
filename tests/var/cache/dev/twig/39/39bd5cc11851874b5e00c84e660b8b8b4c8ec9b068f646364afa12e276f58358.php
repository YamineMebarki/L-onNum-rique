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

/* vendor/symfony/var-dumper/Dumper/ServerDumper.php */
class __TwigTemplate_aa6a1c896cf16b3b85a709eda8683892d90af70b4227dc03b202956314dd66f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ServerDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Dumper/ServerDumper.php"));

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

namespace Symfony\\Component\\VarDumper\\Dumper;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * ServerDumper forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ServerDumper implements DataDumperInterface
{
    private \$connection;
    private \$wrappedDumper;

    /**
     * @param string                     \$host             The server host
     * @param DataDumperInterface|null   \$wrappedDumper    A wrapped instance used whenever we failed contacting the server
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, DataDumperInterface \$wrappedDumper = null, array \$contextProviders = [])
    {
        \$this->connection = new Connection(\$host, \$contextProviders);
        \$this->wrappedDumper = \$wrappedDumper;
    }

    public function getContextProviders(): array
    {
        return \$this->connection->getContextProviders();
    }

    /**
     * {@inheritdoc}
     */
    public function dump(Data \$data)
    {
        if (!\$this->connection->write(\$data) && \$this->wrappedDumper) {
            \$this->wrappedDumper->dump(\$data);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Dumper/ServerDumper.php";
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

namespace Symfony\\Component\\VarDumper\\Dumper;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * ServerDumper forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ServerDumper implements DataDumperInterface
{
    private \$connection;
    private \$wrappedDumper;

    /**
     * @param string                     \$host             The server host
     * @param DataDumperInterface|null   \$wrappedDumper    A wrapped instance used whenever we failed contacting the server
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, DataDumperInterface \$wrappedDumper = null, array \$contextProviders = [])
    {
        \$this->connection = new Connection(\$host, \$contextProviders);
        \$this->wrappedDumper = \$wrappedDumper;
    }

    public function getContextProviders(): array
    {
        return \$this->connection->getContextProviders();
    }

    /**
     * {@inheritdoc}
     */
    public function dump(Data \$data)
    {
        if (!\$this->connection->write(\$data) && \$this->wrappedDumper) {
            \$this->wrappedDumper->dump(\$data);
        }
    }
}
", "vendor/symfony/var-dumper/Dumper/ServerDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Dumper/ServerDumper.php");
    }
}
