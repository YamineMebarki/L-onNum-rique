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

/* vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php */
class __TwigTemplate_7cf62c332917bf6c1874975a4ab9141947e4d3214e27882f6260b88202eb9cf5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Node\\SpacelessNode;
use Twig\\Token;

/**
 * Remove whitespaces between HTML tags.
 *
 *   ";
        // line 20
        ob_start();
        // line 21
        echo " *      <div>
 *          <strong>foo</strong>
 *      </div>
 *   ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 25
        echo " *   ";
        // line 26
        echo " *
 * @deprecated since Twig 2.7, to be removed in 3.0 (use the spaceless filter instead)
 */
final class SpacelessTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();
        \$lineno = \$token->getLine();

        @trigger_error(sprintf('The spaceless tag in \"%s\" at line %d is deprecated since Twig 2.7, use the spaceless filter instead.', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideSpacelessEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new SpacelessNode(\$body, \$lineno, \$this->getTag());
    }

    public function decideSpacelessEnd(Token \$token)
    {
        return \$token->test('endspaceless');
    }

    public function getTag()
    {
        return 'spaceless';
    }
}

class_alias('Twig\\TokenParser\\SpacelessTokenParser', 'Twig_TokenParser_Spaceless');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  72 => 25,  66 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Node\\SpacelessNode;
use Twig\\Token;

/**
 * Remove whitespaces between HTML tags.
 *
 *   {% spaceless %}
 *      <div>
 *          <strong>foo</strong>
 *      </div>
 *   {% endspaceless %}
 *   {# output will be <div><strong>foo</strong></div> #}
 *
 * @deprecated since Twig 2.7, to be removed in 3.0 (use the spaceless filter instead)
 */
final class SpacelessTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();
        \$lineno = \$token->getLine();

        @trigger_error(sprintf('The spaceless tag in \"%s\" at line %d is deprecated since Twig 2.7, use the spaceless filter instead.', \$stream->getSourceContext()->getName(), \$lineno), E_USER_DEPRECATED);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideSpacelessEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new SpacelessNode(\$body, \$lineno, \$this->getTag());
    }

    public function decideSpacelessEnd(Token \$token)
    {
        return \$token->test('endspaceless');
    }

    public function getTag()
    {
        return 'spaceless';
    }
}

class_alias('Twig\\TokenParser\\SpacelessTokenParser', 'Twig_TokenParser_Spaceless');
", "vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/SpacelessTokenParser.php");
    }
}
