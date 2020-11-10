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

/* vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php */
class __TwigTemplate_c11265e84828825aa1ddd08baf1940a23dfb0549912129df2b0350f5fd3f8757 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\hr_HR;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * @link http://www.behindthename.com/top/lists/croatia/2009
     */
    protected static \$firstNameMale = array(
        'Adam', 'Adrian', 'Aleksandar', 'Alen', 'Andrej', 'Andrija', 'Ante', 'Antonio', 'Antun', 'Bartol', 'Benjamin', 'Borna', 'Branislav', 'Bruno', 'Damjan', 'Daniel', 'Danijel', 'Dario', 'David', 'Denis', 'Dino', 'Domagoj', 'Dominik', 'Dorian', 'Dorijan', 'Duje', 'Emanuel', 'Emil', 'Filip', 'Fran', 'Frane', 'Franjo', 'Franko', 'Gabriel', 'Gabrijel', 'Hrvoje', 'Ilija', 'Ivan', 'Ivano', 'Ivor', 'Jakov', 'Josip', 'Juraj', 'Jure', 'Jurica', 'Karlo', 'Kristijan', 'Leo', 'Leon', 'Leonardo', 'Lovre', 'Lovro', 'Luka', 'Lukas', 'Marijan', 'Marin', 'Marino', 'Mario', 'Marko', 'Martin', 'Mate', 'Matej', 'Mateo', 'Matija', 'Matko', 'Mihael', 'Mislav', 'Niko', 'Nikola', 'Nino', 'Noa', 'Patrik', 'Petar', 'Rafael', 'Robert', 'Roko', 'Sebastijan', 'Stipe', 'Stjepan', 'Sven', 'Teo', 'Tin', 'Toma', 'Tomislav', 'Toni', 'Valentino', 'Vanja', 'Vedran', 'Vice', 'Vid', 'Viktor', 'Zvonimir', 'Šime', 'Šimun'
    );

    /**
     * @link http://www.behindthename.com/top/lists/croatia/2009
     */
    protected static \$firstNameFemale = array(
        'Ana', 'Anamarija', 'Andrea', 'Anja', 'Antonela', 'Antonija', 'Anđela', 'Barbara', 'Dora', 'Dorotea', 'Dunja', 'Ela', 'Elena', 'Ella', 'Ema', 'Ena', 'Eva', 'Franka', 'Gabrijela', 'Hana', 'Helena', 'Ines', 'Iris', 'Ivana', 'Ivona', 'Jelena', 'Josipa', 'Karla', 'Katarina', 'Katja', 'Klara', 'Korina', 'Kristina', 'Lana', 'Lara', 'Laura', 'Lea', 'Lena', 'Leona', 'Lora', 'Lorena', 'Lucija', 'Magdalena', 'Maja', 'Manuela', 'Mara', 'Marija', 'Marina', 'Marta', 'Martina', 'Matea', 'Maša', 'Melani', 'Melanie', 'Mia', 'Mihaela', 'Mila', 'Monika', 'Nela', 'Nika', 'Nikolina', 'Nina', 'Nora', 'Paola', 'Patricia', 'Paula', 'Petra', 'Sara', 'Stela', 'Stella', 'Tamara', 'Tara', 'Tea', 'Tena', 'Tia', 'Tina', 'Valentina', 'Vanesa', 'Vanessa', 'Veronika', 'Viktorija'
     );

    /**
     * @link http://surnames.behindthename.com/names/usage/croatian
     */
    protected static \$lastName = array(
        'Abramović', 'Adamić', 'Antić', 'Babić', 'Blažević', 'Bogdanić', 'Bogdanović', 'Božić', 'Brož', 'Dragić', 'Dragović', 'Filipović', 'Franić', 'Franjić', 'Grgić', 'Horvat', 'Horvatinčić', 'Ivanović', 'Janković', 'Jurić', 'Juriša', 'Kasun', 'Knežević', 'Kovač', 'Kovačević', 'Kovačić', 'Košar', 'Kranjčar', 'Lovren', 'Mandžukić', 'Maras', 'Marić', 'Marković', 'Marušić', 'Matić', 'Milić', 'Mlakar', 'Modrić', 'Neretljak', 'Nikolić', 'Novak', 'Novaković', 'Pavić', 'Pavletić', 'Perić', 'Perković', 'Petrović', 'Radić', 'Raić-Sudar', 'Ratković', 'Srna', 'Stanković', 'Tomić', 'Tomčić', 'Vincetić', 'Vinković', 'Vlahović', 'Vlašić', 'Vuka', 'Vuković', 'Zorić', 'Ćorluka', 'Čupić', 'Župan'
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\hr_HR;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * @link http://www.behindthename.com/top/lists/croatia/2009
     */
    protected static \$firstNameMale = array(
        'Adam', 'Adrian', 'Aleksandar', 'Alen', 'Andrej', 'Andrija', 'Ante', 'Antonio', 'Antun', 'Bartol', 'Benjamin', 'Borna', 'Branislav', 'Bruno', 'Damjan', 'Daniel', 'Danijel', 'Dario', 'David', 'Denis', 'Dino', 'Domagoj', 'Dominik', 'Dorian', 'Dorijan', 'Duje', 'Emanuel', 'Emil', 'Filip', 'Fran', 'Frane', 'Franjo', 'Franko', 'Gabriel', 'Gabrijel', 'Hrvoje', 'Ilija', 'Ivan', 'Ivano', 'Ivor', 'Jakov', 'Josip', 'Juraj', 'Jure', 'Jurica', 'Karlo', 'Kristijan', 'Leo', 'Leon', 'Leonardo', 'Lovre', 'Lovro', 'Luka', 'Lukas', 'Marijan', 'Marin', 'Marino', 'Mario', 'Marko', 'Martin', 'Mate', 'Matej', 'Mateo', 'Matija', 'Matko', 'Mihael', 'Mislav', 'Niko', 'Nikola', 'Nino', 'Noa', 'Patrik', 'Petar', 'Rafael', 'Robert', 'Roko', 'Sebastijan', 'Stipe', 'Stjepan', 'Sven', 'Teo', 'Tin', 'Toma', 'Tomislav', 'Toni', 'Valentino', 'Vanja', 'Vedran', 'Vice', 'Vid', 'Viktor', 'Zvonimir', 'Šime', 'Šimun'
    );

    /**
     * @link http://www.behindthename.com/top/lists/croatia/2009
     */
    protected static \$firstNameFemale = array(
        'Ana', 'Anamarija', 'Andrea', 'Anja', 'Antonela', 'Antonija', 'Anđela', 'Barbara', 'Dora', 'Dorotea', 'Dunja', 'Ela', 'Elena', 'Ella', 'Ema', 'Ena', 'Eva', 'Franka', 'Gabrijela', 'Hana', 'Helena', 'Ines', 'Iris', 'Ivana', 'Ivona', 'Jelena', 'Josipa', 'Karla', 'Katarina', 'Katja', 'Klara', 'Korina', 'Kristina', 'Lana', 'Lara', 'Laura', 'Lea', 'Lena', 'Leona', 'Lora', 'Lorena', 'Lucija', 'Magdalena', 'Maja', 'Manuela', 'Mara', 'Marija', 'Marina', 'Marta', 'Martina', 'Matea', 'Maša', 'Melani', 'Melanie', 'Mia', 'Mihaela', 'Mila', 'Monika', 'Nela', 'Nika', 'Nikolina', 'Nina', 'Nora', 'Paola', 'Patricia', 'Paula', 'Petra', 'Sara', 'Stela', 'Stella', 'Tamara', 'Tara', 'Tea', 'Tena', 'Tia', 'Tina', 'Valentina', 'Vanesa', 'Vanessa', 'Veronika', 'Viktorija'
     );

    /**
     * @link http://surnames.behindthename.com/names/usage/croatian
     */
    protected static \$lastName = array(
        'Abramović', 'Adamić', 'Antić', 'Babić', 'Blažević', 'Bogdanić', 'Bogdanović', 'Božić', 'Brož', 'Dragić', 'Dragović', 'Filipović', 'Franić', 'Franjić', 'Grgić', 'Horvat', 'Horvatinčić', 'Ivanović', 'Janković', 'Jurić', 'Juriša', 'Kasun', 'Knežević', 'Kovač', 'Kovačević', 'Kovačić', 'Košar', 'Kranjčar', 'Lovren', 'Mandžukić', 'Maras', 'Marić', 'Marković', 'Marušić', 'Matić', 'Milić', 'Mlakar', 'Modrić', 'Neretljak', 'Nikolić', 'Novak', 'Novaković', 'Pavić', 'Pavletić', 'Perić', 'Perković', 'Petrović', 'Radić', 'Raić-Sudar', 'Ratković', 'Srna', 'Stanković', 'Tomić', 'Tomčić', 'Vincetić', 'Vinković', 'Vlahović', 'Vlašić', 'Vuka', 'Vuković', 'Zorić', 'Ćorluka', 'Čupić', 'Župan'
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/hr_HR/Person.php");
    }
}
