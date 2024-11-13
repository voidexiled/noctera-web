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

/* library/larva.html.twig */
class __TwigTemplate_360d4efd98169e42bd527b9a5853febf extends \Twig\Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=lavagolem\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=lancerbeetle\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Larvas</h2>  <img src=\"images/library/larva.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Larva of the Daramian desert scarab is a small, yet poisonous insect that usually avoids the sun and dwells only underground. Lacking the hard shells which protect older scarabs and moving rather slowly, they do not pose a too dangerous threat to a well armed warrior. However, in greater numbers they can bring down even a capable foe. Since they usually prefer to remain with their siblings, it is unfortunately not rare to encounter a pack of them at once.</p>  <p>Larvas have 70 hitpoints. They are immune to earth damage and cannot be paralyzed. Moreover, they are strong against energy damage. On the other hand, they are weak against fire and ice damage. It takes 355 mana to summon these creatures but they cannot be convinced.</p>  <p>Larvas yield 44 experience points. They carry gold coins and meat with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/larva.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/larva.html.twig", "/var/www/html/system/templates/library/larva.html.twig");
    }
}
