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

/* library/gloothbandit.html.twig */
class __TwigTemplate_2671dfc4d6d1e319e0e71a6a368d71d7 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=gloothblob\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=gloothanemone\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Glooth Bandits</h2>  <img src=\"images/library/gloothbandit.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Glooth Bandits, as they also call themselves, hang out at the more or less  abandoned tunnels and sewers under Rathleton. As usual bandits they try to gain something of value for themselves, but they are also highly interested in new glooth-based inventions and weapons. Glooth Bandits are often in the possession of a wide variety of weapons, their armour has usually at least one glooth-based component. They set up their hideouts in secluded and often dangerous caves, tunnels and sewers. Involved in many illegal activities, they can be found in the service of all kind of persons that want some dirty work performed. Mostly though, the theft of new glooth weapons is their main purpose.</p>  <p>Glooth Bandits have 2600 hitpoints. They are immune to earth damage and cannot be paralyzed. Moreover, they are strong against death, energy, ice and physical damage. On the other hand, they are weak against fire damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Glooth Bandits yield 2000 experience points. They carry gold coins, platinum coins and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/gloothbandit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/gloothbandit.html.twig", "/var/www/html/system/templates/library/gloothbandit.html.twig");
    }
}
