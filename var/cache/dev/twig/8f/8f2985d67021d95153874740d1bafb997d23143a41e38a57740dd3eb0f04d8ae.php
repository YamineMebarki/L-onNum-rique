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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php */
class __TwigTemplate_16f05c0df40ed0b048639257b83da87533c2fe96be86c3c96824b054920c9f85 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to (re)generate the proxy classes used by doctrine.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateProxiesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-proxies')
             ->setAliases(['orm:generate:proxies'])
             ->setDescription('Generates proxy classes for entity classes')
             ->addArgument('dest-path', InputArgument::OPTIONAL, 'The path to generate your proxy classes. If none is provided, it will attempt to grab from configuration.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->setHelp('Generates proxy classes for entity classes.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /** @var EntityManagerInterface \$em */
        \$em = \$this->getHelper('em')->getEntityManager();

        \$metadatas = \$em->getMetadataFactory()->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        // Process destination directory
        if ((\$destPath = \$input->getArgument('dest-path')) === null) {
            \$destPath = \$em->getConfiguration()->getProxyDir();
        }

        if ( ! is_dir(\$destPath)) {
            mkdir(\$destPath, 0775, true);
        }

        \$destPath = realpath(\$destPath);

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Proxies destination directory '<info>%s</info>' does not exist.\", \$em->getConfiguration()->getProxyDir())
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Proxies destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        foreach (\$metadatas as \$metadata) {
            \$ui->text(sprintf('Processing entity \"<info>%s</info>\"', \$metadata->name));
        }

        // Generating Proxies
        \$em->getProxyFactory()->generateProxyClasses(\$metadatas, \$destPath);

        // Outputting information message
        \$ui->newLine();
        \$ui->text(sprintf('Proxy classes generated to \"<info>%s</info>\"', \$destPath));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to (re)generate the proxy classes used by doctrine.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateProxiesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-proxies')
             ->setAliases(['orm:generate:proxies'])
             ->setDescription('Generates proxy classes for entity classes')
             ->addArgument('dest-path', InputArgument::OPTIONAL, 'The path to generate your proxy classes. If none is provided, it will attempt to grab from configuration.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->setHelp('Generates proxy classes for entity classes.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /** @var EntityManagerInterface \$em */
        \$em = \$this->getHelper('em')->getEntityManager();

        \$metadatas = \$em->getMetadataFactory()->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        // Process destination directory
        if ((\$destPath = \$input->getArgument('dest-path')) === null) {
            \$destPath = \$em->getConfiguration()->getProxyDir();
        }

        if ( ! is_dir(\$destPath)) {
            mkdir(\$destPath, 0775, true);
        }

        \$destPath = realpath(\$destPath);

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Proxies destination directory '<info>%s</info>' does not exist.\", \$em->getConfiguration()->getProxyDir())
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Proxies destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        foreach (\$metadatas as \$metadata) {
            \$ui->text(sprintf('Processing entity \"<info>%s</info>\"', \$metadata->name));
        }

        // Generating Proxies
        \$em->getProxyFactory()->generateProxyClasses(\$metadatas, \$destPath);

        // Outputting information message
        \$ui->newLine();
        \$ui->text(sprintf('Proxy classes generated to \"<info>%s</info>\"', \$destPath));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php");
    }
}
