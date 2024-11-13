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

/* library/scorpion.html.twig */
class __TwigTemplate_7ff511569b6cfde9db9ec97738e7419a extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=seaserpent\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=scarab\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Scorpions</h2>  <img src=\"images/library/scorpion.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Scorpions live in the swamps and deserts of Tibia. They usually hunt small animals but when they get excited they even attack humans. Their very poisonous sting penetrates even thick armor so that they can be a great threat when they attack surprisingly. As their defence is quite weak you should strive to do the first strike.</p>  <p>Scorpions have 45 hitpoints. They are immune to earth damage. Moreover, they are strong against energy damage. On the other hand, they are weak against fire and ice damage. It takes 310 mana to summon these creatures but they cannot be convinced.</p>  <p>Scorpions yield 45 experience points. They rarely carry items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/scorpion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/scorpion.html.twig", "/var/www/html/system/templates/library/scorpion.html.twig");
    }
}
