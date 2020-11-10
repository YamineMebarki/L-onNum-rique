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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php */
class __TwigTemplate_57469224f834373fac1bd28665e5224539ff22c0f9a66b517924489f17e2f809 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_PT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
    );

    /** @link http://goo.gl/v6bScG document with all pt abreviations **/
    protected static \$titleMale = array('Sr.', 'Dr.', 'Exmo.', 'Eng.', 'Eng.º', 'Ex.', 'Exº');
    protected static \$titleFemale = array('Sra.', 'Dra.', 'Exma', 'Eng.ª', 'Exª');

    protected static \$firstEightDigitsFormat = array(
      '1#######',
      '2#######',
      '3#######',
      '45######',
      '5#######',
      '6#######',
      '70######',
      '71######',
      '72######',
      '77######',
      '79######',
      '8#######' ,
      '90######',
      '98######',
      '99######'
    );

    /**
     * Taxpayer Identification Number (NIF in Portugal)
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @return string 9 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        \$firstEightDigits = static::numerify(static::randomElement(static::\$firstEightDigitsFormat));
        \$lastDigit = static::dvCalcMod11(\$firstEightDigits);

        return \$firstEightDigits.\$lastDigit;
    }

    /**
     * Generate module
     *
     * @link http://pt.wikipedia.org/wiki/D%C3%ADgito_verificador
     *
     * @param string \$number number
     *
     * @return int
     */
    public static function dvCalcMod11(\$number)
    {
        \$base = 9;
        \$sum = 0;
        \$factor = 2;

        for (\$i = strlen(\$number); \$i > 0; \$i--) {
            \$numbers[\$i] = substr(\$number, \$i - 1, 1);
            \$partial[\$i] = \$numbers[\$i] * \$factor;
            \$sum += \$partial[\$i];
            if (\$factor == \$base) {
                \$factor = 1;
            }
            \$factor++;
        }
        \$res = \$sum % 11;

        if (\$res == 0 || \$res == 1) {
            \$digit = 0;
        } else {
            \$digit = 11 - \$res;
        }

        return \$digit;
    }

    /**
     *
     * @link http://nomesportugueses.blogspot.pt/2012/01/lista-dos-cem-nomes-mais-usados-em.html
     */

    protected static \$firstNameMale = array(
        'Rodrigo', 'João', 'Martim', 'Afonso', 'Tomás', 'Gonçalo', 'Francisco', 'Tiago',
        'Diogo', 'Guilherme', 'Pedro', 'Miguel', 'Rafael', 'Gabriel', 'Santiago', 'Dinis',
        'David', 'Duarte', 'José', 'Simão', 'Daniel', 'Lucas', 'Gustavo', 'André', 'Denis',
        'Salvador', 'António', 'Vasco', 'Henrique', 'Lourenço', 'Manuel', 'Eduardo', 'Bernardo',
        'Leandro', 'Luís', 'Diego', 'Leonardo', 'Alexandre', 'Rúben', 'Mateus', 'Ricardo',
        'Vicente', 'Filipe', 'Bruno', 'Nuno', 'Carlos', 'Rui', 'Hugo', 'Samuel', 'Álvaro',
        'Matias', 'Fábio', 'Ivo', 'Paulo', 'Jorge', 'Xavier', 'Marco', 'Isaac', 'Raúl','Benjamim',
        'Renato', 'Artur', 'Mário', 'Frederico', 'Cristiano', 'Ivan', 'Sérgio', 'Micael',
        'Vítor', 'Edgar', 'Kevin', 'Joaquim', 'Igor', 'Ângelo', 'Enzo', 'Valentim', 'Flávio',
        'Joel', 'Fernando', 'Sebastião', 'Tomé', 'César', 'Cláudio', 'Nelson', 'Lisandro', 'Jaime',
        'Gil', 'Mauro', 'Sandro', 'Hélder', 'Matheus', 'William', 'Gaspar', 'Márcio',
        'Martinho', 'Emanuel', 'Marcos', 'Telmo', 'Davi', 'Wilson'
    );

    protected static \$firstNameFemale = array(
        'Maria', 'Leonor', 'Matilde', 'Mariana', 'Ana', 'Beatriz', 'Inês', 'Lara', 'Carolina', 'Margarida',
        'Joana', 'Sofia', 'Diana', 'Francisca', 'Laura', 'Sara', 'Madalena', 'Rita', 'Mafalda', 'Catarina',
        'Luana', 'Marta', 'Íris', 'Alice', 'Bianca', 'Constança', 'Gabriela', 'Eva', 'Clara', 'Bruna', 'Daniela',
        'Iara', 'Filipa', 'Vitória', 'Ariana', 'Letícia', 'Bárbara', 'Camila', 'Rafaela', 'Carlota', 'Yara',
        'Núria', 'Raquel', 'Ema', 'Helena', 'Benedita', 'Érica', 'Isabel', 'Nicole', 'Lia', 'Alícia', 'Mara',
        'Jéssica', 'Soraia', 'Júlia', 'Luna', 'Victória', 'Luísa', 'Teresa', 'Miriam', 'Adriana', 'Melissa',
        'Andreia', 'Juliana', 'Alexandra', 'Yasmin', 'Tatiana', 'Leticia', 'Luciana', 'Eduarda', 'Cláudia',
        'Débora', 'Fabiana', 'Renata', 'Kyara', 'Kelly', 'Irina', 'Mélanie', 'Nádia', 'Cristiana', 'Liliana',
        'Patrícia', 'Vera', 'Doriana', 'Ângela', 'Mia', 'Erica', 'Mónica', 'Isabela', 'Salomé', 'Cátia',
        'Verónica', 'Violeta', 'Lorena', 'Érika', 'Vanessa', 'Iris', 'Anna', 'Viviane', 'Rebeca', 'Neuza',
    );

    protected static \$lastName = array(
        'Abreu',  'Almeida',  'Alves', 'Amaral', 'Amorim', 'Andrade', 'Anjos', 'Antunes', 'Araújo', 'Assunção',
        'Azevedo', 'Baptista', 'Barbosa', 'Barros', 'Batista', 'Borges', 'Branco', 'Brito', 'Campos', 'Cardoso',
        'Carneiro', 'Carvalho', 'Castro', 'Coelho', 'Correia', 'Costa', 'Cruz', 'Cunha', 'Domingues', 'Esteves',
        'Faria', 'Fernandes', 'Ferreira', 'Figueiredo', 'Fonseca', 'Freitas', 'Garcia', 'Gaspar', 'Gomes',
        'Gonçalves', 'Guerreiro', 'Henriques', 'Jesus', 'Leal', 'Leite', 'Lima', 'Lopes', 'Loureiro', 'Lourenço',
        'Macedo', 'Machado', 'Magalhães', 'Maia', 'Marques', 'Martins', 'Matias', 'Matos', 'Melo', 'Mendes',
        'Miranda', 'Monteiro', 'Morais', 'Moreira', 'Mota', 'Moura', 'Nascimento', 'Neto', 'Neves', 'Nogueira',
        'Nunes', 'Oliveira', 'Pacheco', 'Paiva', 'Pereira', 'Pinheiro', 'Pinho', 'Pinto', 'Pires', 'Ramos',
        'Reis', 'Ribeiro', 'Rocha', 'Rodrigues', 'Santos', 'Silva', 'Simões', 'Soares', 'Sousa',
        'Sá', 'Tavares', 'Teixeira', 'Torres', 'Valente', 'Vaz', 'Vicente', 'Vieira',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 26,  173 => 25,  163 => 24,  155 => 23,  147 => 22,  139 => 21,  131 => 20,  125 => 19,  110 => 15,  100 => 14,  90 => 13,  82 => 12,  74 => 11,  66 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_PT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} de {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} {{lastName}}',
    );

    /** @link http://goo.gl/v6bScG document with all pt abreviations **/
    protected static \$titleMale = array('Sr.', 'Dr.', 'Exmo.', 'Eng.', 'Eng.º', 'Ex.', 'Exº');
    protected static \$titleFemale = array('Sra.', 'Dra.', 'Exma', 'Eng.ª', 'Exª');

    protected static \$firstEightDigitsFormat = array(
      '1#######',
      '2#######',
      '3#######',
      '45######',
      '5#######',
      '6#######',
      '70######',
      '71######',
      '72######',
      '77######',
      '79######',
      '8#######' ,
      '90######',
      '98######',
      '99######'
    );

    /**
     * Taxpayer Identification Number (NIF in Portugal)
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @return string 9 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        \$firstEightDigits = static::numerify(static::randomElement(static::\$firstEightDigitsFormat));
        \$lastDigit = static::dvCalcMod11(\$firstEightDigits);

        return \$firstEightDigits.\$lastDigit;
    }

    /**
     * Generate module
     *
     * @link http://pt.wikipedia.org/wiki/D%C3%ADgito_verificador
     *
     * @param string \$number number
     *
     * @return int
     */
    public static function dvCalcMod11(\$number)
    {
        \$base = 9;
        \$sum = 0;
        \$factor = 2;

        for (\$i = strlen(\$number); \$i > 0; \$i--) {
            \$numbers[\$i] = substr(\$number, \$i - 1, 1);
            \$partial[\$i] = \$numbers[\$i] * \$factor;
            \$sum += \$partial[\$i];
            if (\$factor == \$base) {
                \$factor = 1;
            }
            \$factor++;
        }
        \$res = \$sum % 11;

        if (\$res == 0 || \$res == 1) {
            \$digit = 0;
        } else {
            \$digit = 11 - \$res;
        }

        return \$digit;
    }

    /**
     *
     * @link http://nomesportugueses.blogspot.pt/2012/01/lista-dos-cem-nomes-mais-usados-em.html
     */

    protected static \$firstNameMale = array(
        'Rodrigo', 'João', 'Martim', 'Afonso', 'Tomás', 'Gonçalo', 'Francisco', 'Tiago',
        'Diogo', 'Guilherme', 'Pedro', 'Miguel', 'Rafael', 'Gabriel', 'Santiago', 'Dinis',
        'David', 'Duarte', 'José', 'Simão', 'Daniel', 'Lucas', 'Gustavo', 'André', 'Denis',
        'Salvador', 'António', 'Vasco', 'Henrique', 'Lourenço', 'Manuel', 'Eduardo', 'Bernardo',
        'Leandro', 'Luís', 'Diego', 'Leonardo', 'Alexandre', 'Rúben', 'Mateus', 'Ricardo',
        'Vicente', 'Filipe', 'Bruno', 'Nuno', 'Carlos', 'Rui', 'Hugo', 'Samuel', 'Álvaro',
        'Matias', 'Fábio', 'Ivo', 'Paulo', 'Jorge', 'Xavier', 'Marco', 'Isaac', 'Raúl','Benjamim',
        'Renato', 'Artur', 'Mário', 'Frederico', 'Cristiano', 'Ivan', 'Sérgio', 'Micael',
        'Vítor', 'Edgar', 'Kevin', 'Joaquim', 'Igor', 'Ângelo', 'Enzo', 'Valentim', 'Flávio',
        'Joel', 'Fernando', 'Sebastião', 'Tomé', 'César', 'Cláudio', 'Nelson', 'Lisandro', 'Jaime',
        'Gil', 'Mauro', 'Sandro', 'Hélder', 'Matheus', 'William', 'Gaspar', 'Márcio',
        'Martinho', 'Emanuel', 'Marcos', 'Telmo', 'Davi', 'Wilson'
    );

    protected static \$firstNameFemale = array(
        'Maria', 'Leonor', 'Matilde', 'Mariana', 'Ana', 'Beatriz', 'Inês', 'Lara', 'Carolina', 'Margarida',
        'Joana', 'Sofia', 'Diana', 'Francisca', 'Laura', 'Sara', 'Madalena', 'Rita', 'Mafalda', 'Catarina',
        'Luana', 'Marta', 'Íris', 'Alice', 'Bianca', 'Constança', 'Gabriela', 'Eva', 'Clara', 'Bruna', 'Daniela',
        'Iara', 'Filipa', 'Vitória', 'Ariana', 'Letícia', 'Bárbara', 'Camila', 'Rafaela', 'Carlota', 'Yara',
        'Núria', 'Raquel', 'Ema', 'Helena', 'Benedita', 'Érica', 'Isabel', 'Nicole', 'Lia', 'Alícia', 'Mara',
        'Jéssica', 'Soraia', 'Júlia', 'Luna', 'Victória', 'Luísa', 'Teresa', 'Miriam', 'Adriana', 'Melissa',
        'Andreia', 'Juliana', 'Alexandra', 'Yasmin', 'Tatiana', 'Leticia', 'Luciana', 'Eduarda', 'Cláudia',
        'Débora', 'Fabiana', 'Renata', 'Kyara', 'Kelly', 'Irina', 'Mélanie', 'Nádia', 'Cristiana', 'Liliana',
        'Patrícia', 'Vera', 'Doriana', 'Ângela', 'Mia', 'Erica', 'Mónica', 'Isabela', 'Salomé', 'Cátia',
        'Verónica', 'Violeta', 'Lorena', 'Érika', 'Vanessa', 'Iris', 'Anna', 'Viviane', 'Rebeca', 'Neuza',
    );

    protected static \$lastName = array(
        'Abreu',  'Almeida',  'Alves', 'Amaral', 'Amorim', 'Andrade', 'Anjos', 'Antunes', 'Araújo', 'Assunção',
        'Azevedo', 'Baptista', 'Barbosa', 'Barros', 'Batista', 'Borges', 'Branco', 'Brito', 'Campos', 'Cardoso',
        'Carneiro', 'Carvalho', 'Castro', 'Coelho', 'Correia', 'Costa', 'Cruz', 'Cunha', 'Domingues', 'Esteves',
        'Faria', 'Fernandes', 'Ferreira', 'Figueiredo', 'Fonseca', 'Freitas', 'Garcia', 'Gaspar', 'Gomes',
        'Gonçalves', 'Guerreiro', 'Henriques', 'Jesus', 'Leal', 'Leite', 'Lima', 'Lopes', 'Loureiro', 'Lourenço',
        'Macedo', 'Machado', 'Magalhães', 'Maia', 'Marques', 'Martins', 'Matias', 'Matos', 'Melo', 'Mendes',
        'Miranda', 'Monteiro', 'Morais', 'Moreira', 'Mota', 'Moura', 'Nascimento', 'Neto', 'Neves', 'Nogueira',
        'Nunes', 'Oliveira', 'Pacheco', 'Paiva', 'Pereira', 'Pinheiro', 'Pinho', 'Pinto', 'Pires', 'Ramos',
        'Reis', 'Ribeiro', 'Rocha', 'Rodrigues', 'Santos', 'Silva', 'Simões', 'Soares', 'Sousa',
        'Sá', 'Tavares', 'Teixeira', 'Torres', 'Valente', 'Vaz', 'Vicente', 'Vieira',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Person.php");
    }
}
