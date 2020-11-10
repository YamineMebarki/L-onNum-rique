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

/* vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php */
class __TwigTemplate_7f8ca60d3c5c0673d76df7c2405219376f19b9513fc8812beb7b69a3ccee57dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php"));

        // line 1
        echo "This template is used for translation message extraction tests
<?php echo \$view['translator']->trans('single-quoted key'); ?>
<?php echo \$view['translator']->trans('double-quoted key'); ?>
<?php echo \$view['translator']->trans(<<<EOF
heredoc key
EOF
); ?>
<?php echo \$view['translator']->trans(<<<'EOF'
nowdoc key
EOF
); ?>
<?php echo \$view['translator']->trans(
    \"double-quoted key with whitespace and escaped \\\$\\n\\\" sequences\"
); ?>
<?php echo \$view['translator']->trans(
    'single-quoted key with whitespace and nonescaped \\\$\\n\\' sequences'
); ?>
<?php echo \$view['translator']->trans(<<<EOF
heredoc key with whitespace and escaped \\\$\\n sequences
EOF
); ?>
<?php echo \$view['translator']->trans(<<<'EOF'
nowdoc key with whitespace and nonescaped \\\$\\n sequences
EOF
); ?>

<?php echo \$view['translator']->trans('single-quoted key with \"quote mark at the end\"'); ?>

<?php echo \$view['translator']->transChoice(
    '{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
    10,
    ['%count%' => 10]
); ?>

<?php echo \$view['translator']->trans('concatenated'.' message'.<<<EOF
 with heredoc
EOF
.<<<'EOF'
 and nowdoc
EOF
); ?>

<?php echo \$view['translator']->trans('other-domain-test-no-params-short-array', [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-no-params-long-array', [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-params-short-array', ['foo' => 'bar'], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-params-long-array', ['foo' => 'bar'], 'not_messages'); ?>

<?php echo \$view['translator']->transChoice('other-domain-test-trans-choice-short-array-%count%', 10, ['%count%' => 10], 'not_messages'); ?>

<?php echo \$view['translator']->transChoice('other-domain-test-trans-choice-long-array-%count%', 10, ['%count%' => 10], 'not_messages'); ?>

<?php echo \$view['translator']->trans('typecast', ['a' => (int) '123'], 'not_messages'); ?>
<?php echo \$view['translator']->transChoice('msg1', 10 + 1, [], 'not_messages'); ?>
<?php echo \$view['translator']->transChoice('msg2', ceil(4.5), [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('default domain', [], null); ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("This template is used for translation message extraction tests
<?php echo \$view['translator']->trans('single-quoted key'); ?>
<?php echo \$view['translator']->trans('double-quoted key'); ?>
<?php echo \$view['translator']->trans(<<<EOF
heredoc key
EOF
); ?>
<?php echo \$view['translator']->trans(<<<'EOF'
nowdoc key
EOF
); ?>
<?php echo \$view['translator']->trans(
    \"double-quoted key with whitespace and escaped \\\$\\n\\\" sequences\"
); ?>
<?php echo \$view['translator']->trans(
    'single-quoted key with whitespace and nonescaped \\\$\\n\\' sequences'
); ?>
<?php echo \$view['translator']->trans(<<<EOF
heredoc key with whitespace and escaped \\\$\\n sequences
EOF
); ?>
<?php echo \$view['translator']->trans(<<<'EOF'
nowdoc key with whitespace and nonescaped \\\$\\n sequences
EOF
); ?>

<?php echo \$view['translator']->trans('single-quoted key with \"quote mark at the end\"'); ?>

<?php echo \$view['translator']->transChoice(
    '{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
    10,
    ['%count%' => 10]
); ?>

<?php echo \$view['translator']->trans('concatenated'.' message'.<<<EOF
 with heredoc
EOF
.<<<'EOF'
 and nowdoc
EOF
); ?>

<?php echo \$view['translator']->trans('other-domain-test-no-params-short-array', [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-no-params-long-array', [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-params-short-array', ['foo' => 'bar'], 'not_messages'); ?>

<?php echo \$view['translator']->trans('other-domain-test-params-long-array', ['foo' => 'bar'], 'not_messages'); ?>

<?php echo \$view['translator']->transChoice('other-domain-test-trans-choice-short-array-%count%', 10, ['%count%' => 10], 'not_messages'); ?>

<?php echo \$view['translator']->transChoice('other-domain-test-trans-choice-long-array-%count%', 10, ['%count%' => 10], 'not_messages'); ?>

<?php echo \$view['translator']->trans('typecast', ['a' => (int) '123'], 'not_messages'); ?>
<?php echo \$view['translator']->transChoice('msg1', 10 + 1, [], 'not_messages'); ?>
<?php echo \$view['translator']->transChoice('msg2', ceil(4.5), [], 'not_messages'); ?>

<?php echo \$view['translator']->trans('default domain', [], null); ?>
", "vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/extractor/translation.html.php");
    }
}
