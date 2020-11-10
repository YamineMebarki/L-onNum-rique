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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php */
class __TwigTemplate_4c76e4d6dfcc1788b658edbd85118c1589f6b6fdbd4b1155495047811a71a40a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php"));

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

use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Doctrine\\ORM\\Tools\\EntityRepositoryGenerator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to generate repository classes for mapping information.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateRepositoriesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-repositories')
             ->setAliases(['orm:generate:repositories'])
             ->setDescription('Generate repository classes from your mapping information')
             ->addArgument('dest-path', InputArgument::REQUIRED, 'The path to generate your repository classes.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->setHelp('Generate repository classes from your mapping information.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em = \$this->getHelper('em')->getEntityManager();

        \$metadatas = \$em->getMetadataFactory()->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        \$repositoryName = \$em->getConfiguration()->getDefaultRepositoryClassName();

        // Process destination directory
        \$destPath = realpath(\$input->getArgument('dest-path'));

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not exist.\", \$input->getArgument('dest-path'))
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        \$numRepositories = 0;
        \$generator       = new EntityRepositoryGenerator();

        \$generator->setDefaultRepositoryName(\$repositoryName);

        foreach (\$metadatas as \$metadata) {
            if (\$metadata->customRepositoryClassName) {
                \$ui->text(sprintf('Processing repository \"<info>%s</info>\"', \$metadata->customRepositoryClassName));

                \$generator->writeEntityRepositoryClass(\$metadata->customRepositoryClassName, \$destPath);

                ++\$numRepositories;
            }
        }

        if (\$numRepositories === 0) {
            \$ui->text('No Repository classes were found to be processed.');
            return;
        }

        // Outputting information message
        \$ui->newLine();
        \$ui->text(sprintf('Repository classes generated to \"<info>%s</info>\"', \$destPath));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php";
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

use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Doctrine\\ORM\\Tools\\EntityRepositoryGenerator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to generate repository classes for mapping information.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateRepositoriesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-repositories')
             ->setAliases(['orm:generate:repositories'])
             ->setDescription('Generate repository classes from your mapping information')
             ->addArgument('dest-path', InputArgument::REQUIRED, 'The path to generate your repository classes.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->setHelp('Generate repository classes from your mapping information.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em = \$this->getHelper('em')->getEntityManager();

        \$metadatas = \$em->getMetadataFactory()->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        \$repositoryName = \$em->getConfiguration()->getDefaultRepositoryClassName();

        // Process destination directory
        \$destPath = realpath(\$input->getArgument('dest-path'));

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not exist.\", \$input->getArgument('dest-path'))
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        \$numRepositories = 0;
        \$generator       = new EntityRepositoryGenerator();

        \$generator->setDefaultRepositoryName(\$repositoryName);

        foreach (\$metadatas as \$metadata) {
            if (\$metadata->customRepositoryClassName) {
                \$ui->text(sprintf('Processing repository \"<info>%s</info>\"', \$metadata->customRepositoryClassName));

                \$generator->writeEntityRepositoryClass(\$metadata->customRepositoryClassName, \$destPath);

                ++\$numRepositories;
            }
        }

        if (\$numRepositories === 0) {
            \$ui->text('No Repository classes were found to be processed.');
            return;
        }

        // Outputting information message
        \$ui->newLine();
        \$ui->text(sprintf('Repository classes generated to \"<info>%s</info>\"', \$destPath));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php");
    }
}
