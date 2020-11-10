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

/* vendor/symfony/console/Helper/SymfonyQuestionHelper.php */
class __TwigTemplate_485d608fcdcb4a7b9565ae27fc660e79295da435989ce8f8d9eff184c1192ee8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/SymfonyQuestionHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/SymfonyQuestionHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Symfony Style Guide compliant question helper.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SymfonyQuestionHelper extends QuestionHelper
{
    /**
     * {@inheritdoc}
     */
    protected function writePrompt(OutputInterface \$output, Question \$question)
    {
        \$text = OutputFormatter::escapeTrailingBackslash(\$question->getQuestion());
        \$default = \$question->getDefault();

        switch (true) {
            case null === \$default:
                \$text = sprintf(' <info>%s</info>:', \$text);

                break;

            case \$question instanceof ConfirmationQuestion:
                \$text = sprintf(' <info>%s (yes/no)</info> [<comment>%s</comment>]:', \$text, \$default ? 'yes' : 'no');

                break;

            case \$question instanceof ChoiceQuestion && \$question->isMultiselect():
                \$choices = \$question->getChoices();
                \$default = explode(',', \$default);

                foreach (\$default as \$key => \$value) {
                    \$default[\$key] = \$choices[trim(\$value)];
                }

                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(implode(', ', \$default)));

                break;

            case \$question instanceof ChoiceQuestion:
                \$choices = \$question->getChoices();
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(isset(\$choices[\$default]) ? \$choices[\$default] : \$default));

                break;

            default:
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(\$default));
        }

        \$output->writeln(\$text);

        if (\$question instanceof ChoiceQuestion) {
            \$width = max(array_map('strlen', array_keys(\$question->getChoices())));

            foreach (\$question->getChoices() as \$key => \$value) {
                \$output->writeln(sprintf(\"  [<comment>%-\${width}s</comment>] %s\", \$key, \$value));
            }
        }

        \$output->write(' > ');
    }

    /**
     * {@inheritdoc}
     */
    protected function writeError(OutputInterface \$output, \\Exception \$error)
    {
        if (\$output instanceof SymfonyStyle) {
            \$output->newLine();
            \$output->error(\$error->getMessage());

            return;
        }

        parent::writeError(\$output, \$error);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/SymfonyQuestionHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Symfony Style Guide compliant question helper.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SymfonyQuestionHelper extends QuestionHelper
{
    /**
     * {@inheritdoc}
     */
    protected function writePrompt(OutputInterface \$output, Question \$question)
    {
        \$text = OutputFormatter::escapeTrailingBackslash(\$question->getQuestion());
        \$default = \$question->getDefault();

        switch (true) {
            case null === \$default:
                \$text = sprintf(' <info>%s</info>:', \$text);

                break;

            case \$question instanceof ConfirmationQuestion:
                \$text = sprintf(' <info>%s (yes/no)</info> [<comment>%s</comment>]:', \$text, \$default ? 'yes' : 'no');

                break;

            case \$question instanceof ChoiceQuestion && \$question->isMultiselect():
                \$choices = \$question->getChoices();
                \$default = explode(',', \$default);

                foreach (\$default as \$key => \$value) {
                    \$default[\$key] = \$choices[trim(\$value)];
                }

                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(implode(', ', \$default)));

                break;

            case \$question instanceof ChoiceQuestion:
                \$choices = \$question->getChoices();
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(isset(\$choices[\$default]) ? \$choices[\$default] : \$default));

                break;

            default:
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(\$default));
        }

        \$output->writeln(\$text);

        if (\$question instanceof ChoiceQuestion) {
            \$width = max(array_map('strlen', array_keys(\$question->getChoices())));

            foreach (\$question->getChoices() as \$key => \$value) {
                \$output->writeln(sprintf(\"  [<comment>%-\${width}s</comment>] %s\", \$key, \$value));
            }
        }

        \$output->write(' > ');
    }

    /**
     * {@inheritdoc}
     */
    protected function writeError(OutputInterface \$output, \\Exception \$error)
    {
        if (\$output instanceof SymfonyStyle) {
            \$output->newLine();
            \$output->error(\$error->getMessage());

            return;
        }

        parent::writeError(\$output, \$error);
    }
}
", "vendor/symfony/console/Helper/SymfonyQuestionHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/SymfonyQuestionHelper.php");
    }
}
