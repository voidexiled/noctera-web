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

/* library/thornbacktortoise.html.twig */
class __TwigTemplate_d7948903c23cdc93ed5b1a762d83568b extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=tiger\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=terrorsleep\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Thornback Tortoises</h2>  <img src=\"images/library/thornbacktortoise.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Everything that their more peaceful cousins lack in fighting prowess, the warlike Thornback Tortoises own all the more. Incredibly armed they come with a small but efficient array of distance attacks that compensate their lack of agility. Even though Thornback Tortoises are quite slow, they often manage to catch their enemies in close combat by incapacitating them. If it comes to one-to-one battles, they can face even the strongest opponents due to their incredible armor and their sheer strength.</p>  <p>Thornback Tortoises have 300 hitpoints. They are strong against earth, ice and physical damage. On the other hand, they are weak against fire damage. It takes 490 mana to convince these creatures but they cannot be summoned.</p>  <p>Thornback Tortoises yield 150 experience points. They carry fish, gold coins, thorns and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/thornbacktortoise.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/thornbacktortoise.html.twig", "/var/www/html/system/templates/library/thornbacktortoise.html.twig");
    }
}
