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

/* library/orccultfanatic.html.twig */
class __TwigTemplate_375f131736fe607fc7190b1236370dcb extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=orccultinquisitor\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=orcberserker\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Orc Cult Fanatics</h2> <img src=\"images/library/orccultfanatic.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The Orc Cult Fanatic is a stronger version of <a href=\"?subtopic=creatures&race=orcleader\">Orc Leaders</a>.</p> <p>Orc Cult Fanatics have 1300 hitpoints. They are immune to fire damage. Moreover, they are strong against energy and holy damage. On the other hand, they are weak against death, earth and physical damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Orc Cult Fanatics yield 1100 experience points. They carry brown mushrooms, cultish robes, fish, gold coins, great health potions, orc leather, plate shields, skull belts, small rubies, warrior helmets and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/orccultfanatic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/orccultfanatic.html.twig", "/var/www/html/system/templates/library/orccultfanatic.html.twig");
    }
}
