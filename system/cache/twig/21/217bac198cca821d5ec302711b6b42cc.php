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

/* library/bat.html.twig */
class __TwigTemplate_99803aa87428948ca62707196bfa8e78 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=bear\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=barklessfanatic\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Bats</h2>  <img src=\"images/library/bat.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Often encountered in caves and ruins, Bats are often seen as a bad omen. Being little stronger than a rat, they are rather a nuisance than a threat to an experienced adventurer. Their diet usually consists of small animals and their rare attacks on people mainly happen out of self-defence. Bats often form large swarms, and it is slightly more dangerous to face such a swarm than a single exemplar. Bats can be found almost everywhere as long as there is some dark place close-by where they can breed and sleep.</p>  <p>Bats have 30 hitpoints. They are weak against earth damage. It takes 250 mana to summon or convince these creatures.</p>  <p>Bats yield 10 experience points. They rarely carry items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/bat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/bat.html.twig", "/var/www/html/system/templates/library/bat.html.twig");
    }
}
