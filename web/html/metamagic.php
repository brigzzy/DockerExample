<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<h1>Metamagic Helper</h1>
<h3>These are the feats you can apply (you have <?php echo $_POST['btn']; ?> points to spend.)</h3>

<body style="text-align:center;">

<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
}

test {
	min-width:50%;
}

th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: center;
	border: 2px solid black;
    border-collapse: collapse;
}

div.long {
    width:300px;
    margin: auto;
}
</style>

<table style="width:100%">

  <tr>
    <th><b>Feat Name</b></th>
    <th><b>Level</b></th>
    <th><b>Prerequisite</b></th>
    <th><b>Short Description</b></th>
    <th style="min-width:500px"><b>Long Description</b></th>
  </tr>

<?php
if(($_POST['btn'] >= 1) && ($_POST['btn'] <= 9)) {
?>

  <tr>
    <td>Heighten Spell</td>
    <td>Special</td>
    <td>-</td>
    <td>You can cast spells as if they were a higher level</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm1">More Details</button>
  <div id="mm1" class="collapse">
A heightened spell has a higher spell level than normal (up to a maximum of 9th level). Unlike other metamagic feats, Heighten Spell actually increases the effective level of the spell that it modifies. All effects dependent on spell level (such as saving throw DCs and ability to penetrate a lesser globe of invulnerability) are calculated according to the heightened level.  The heightened spell is as difficult to prepare and cast as a spell of its effective level.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Reach Spell</td>
    <td>Special</td>
    <td>-</td>
    <td>Your spells go farther than normal</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm2">More Details</button>
  <div id="mm2" class="collapse">
You can alter a spell with a range of touch, close, or medium to increase its range to a higher range category, using the following order: touch, close, medium, and long.  A reach spell uses up a spell slot one level higher than the spell’s actual level for each increase in range category.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Brisk Spell</td>
    <td>1</td>
    <td>Dex 13+</td>
    <td>You can alter spells that grant a creature a movement type it doesn't normally have to increase the speed for that movement type by 10 feet.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm3">More Details</button>
  <div id="mm3" class="collapse">
You can alter spells that grant a creature a movement type it doesn't normally have to increase the speed for that movement type by 10 feet.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Eclipsed Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Reverses the effect of a light affecting spell</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm4">More Details</button>
  <div id="mm4" class="collapse">
Only spells that create areas of light or darkness can be eclipsed spells. If the eclipsed spell creates an area that shines like a torch or raises the light level by one step, you can choose to have the spell lower the illumination level in the affected area by one step, functioning like darkness. If the eclipsed spell creates an area that shines like daylight or raises the light level by two steps, you can choose to have the spell lower the illumination level in the affected area by two steps and create an area of magical darkness, functioning like deeper darkness.
	</br>
	If the eclipsed spell lowers the illumination level in the affected area by one step, you can choose to have the spell cause the affected area to glow with normal light, functioning like light. If the eclipsed spell lowers the illumination level in the affected area by two steps, you can choose to have the spell cause the affected area to shed bright light, functioning like daylight.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Fleeting Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Dismiss a spell more easily</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm5">More Details</button>
  <div id="mm5" class="collapse">
A fleeting spell’s duration becomes dismissible, if it is not already. You can dismiss your own fleeting spell as a swift action. When you dismiss a fleeting spell, its lingering aura cannot be detected by magic unless the caster succeeds at a caster level check against a DC equal to 11 + your caster level. The DC of dispel checks to counter a fleeting spell is reduced by 2, and once active, dispel magic removes a fleeting spell without a caster level check. A fleeting spell has half its normal duration (with an extended fleeting spell, these duration adjustments cancel out). Only spells with a duration of at least 2 rounds can be made fleeting, and instantaneous or permanent spells cannot be fleeting spells.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Merciful Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can alter spells that inflict damage to inflict nonlethal damage instead.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm6">More Details</button>
  <div id="mm6" class="collapse">
You can alter spells that inflict damage to inflict nonlethal damage instead. Spells that inflict damage of a particular type (such as fire) inflict nonlethal damage of that same type.
  </div>
  </div>
    </td>
  </tr>

  <tr>
    <td>Aquatic Spell</td>
    <td>1</td>
    <td>-</td>
    <td>An aquatic spell functions normally when underwater and requires no caster level check to cast.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm7">More Details</button>
  <div id="mm7" class="collapse">
An aquatic spell functions normally when underwater and requires no caster level check to cast, even if it possesses the [fire] descriptor. In addition, the spell can be cast from the surface into water and still be effective.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Bouncing Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can direct a failed spell against a different target.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm8">More Details</button>
  <div id="mm8" class="collapse">
Whenever a bouncing spell targeting a single creature has no effect on its intended target (whether due to spell resistance or a successful saving throw) you may, as a swift action, redirect it to target another eligible creature within range. The redirected spell behaves in all ways as if its new target were the original target for the spell. Spells that affect a target in any way (including a lesser effect from a successful saving throw) may not be redirected in this manner.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Disruptive Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your magical energies cling to enemies, interfering with their spellcasting</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm9">More Details</button>
  <div id="mm9" class="collapse">
Targets affected by a disruptive spell must make concentration checks when using spells or spell-like abilities (DC equals the save DC of the disruptive spell plus the level of the spell being cast) for 1 round. Targets that avoid the spell’s effects avoid this feat’s effect as well.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Ectoplasmic Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your spells breach the gulf between dimensions, sending ghostly emanations into the ether.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm10">More Details</button>
  <div id="mm10" class="collapse">
An ectoplasmic spell has full effect against incorporeal or ethereal creatures.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Elemental Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can manipulate the elemental nature of your spells.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm11">More Details</button>
  <div id="mm11" class="collapse">
Choose one energy type: acid, cold, electricity, or fire. You may replace a spell’s normal damage with that energy type or split the spell’s damage, so that half is of that energy type and half is of its normal type.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Enlarge Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can increase the range of your spells</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm12">More Details</button>
  <div id="mm12" class="collapse">
You can alter a spell with a range of close, medium, or long to increase its range by 100%. An enlarged spell with a range of close now has a range of 50 ft. + 5 ft./level, while medium-range spells have a range of 200 ft. + 20 ft./level and long-range spells have a range of 800 ft. + 80 ft./level.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Extend Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can make your spells last twice as long.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm13">More Details</button>
  <div id="mm13" class="collapse">
An extended spell lasts twice as long as normal. A spell with a duration of concentration, instantaneous, or permanent is not affected by this feat.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Flaring Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You dazzle creatures when you affect them with a spell that has the fire, light, or electricity descriptor.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm14">More Details</button>
  <div id="mm14" class="collapse">
The electricity, fire, or light effects of the affected spell create a flaring that dazzles creatures that take damage from the spell. A flare spell causes a creature that takes fire or electricity damage from the affected spell to become dazzled for a number of rounds equal to the actual level of the spell. A flaring spell only affects spells with a fire, light, or electricity descriptor.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Focused Spell</td>
    <td>1</td>
    <td>-</td>
    <td>When you cast a spell that affects more than one creature, one opponent finds it more difficult to resist.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm15">More Details</button>
  <div id="mm15" class="collapse">
When casting a spell that affects or targets more than one creature, you can choose one target or creature within the spell effect. That creature’s saving throw DC to resist the spell is increased by +2. You must choose which target to focus the spell on before casting the spell.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Furious Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your spells seethe with the ferocious intensity of your blood-red rage.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm16">More Details</button>
  <div id="mm16" class="collapse">
A furious spell that deals hit point damage adds twice the spell’s original level to the amount of damage dealt by the spell. Spells that affect multiple targets deal the extra damage once to each target, regardless of whether the spell deals its damage all at once or in multiple hits (in the latter case, add the extra damage to the first hit against each target). In addition, a furious spell can be cast while the caster is enraged, including during a barbarian rage or while affected by a rage spell. Even a furious spell that requires an emotion component can be cast while enraged. The caster gains a +2 circumstance bonus on concentration checks and caster level checks related to casting a furious spell if she is enraged.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Intensified Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your spells can go beyond several normal limitations.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm17">More Details</button>
  <div id="mm17" class="collapse">
An intensified spell increases the maximum number of damage dice by 5 levels. You must actually have sufficient caster levels to surpass the maximum in order to benefit from this feat. No other variables of the spell are affected, and spells that inflict damage that is not modified by caster level are not affected by this feat.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Lingering Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your spell clings to existence, slowly fading from the world</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm18">More Details</button>
  <div id="mm18" class="collapse">
You may cause an instantaneous spell that affects an area to persist until the beginning of your next turn. Those already in the area suffer no additional harm, but other creatures or objects entering the area are subject to its effects. A lingering spell with a visual manifestation obscures vision, providing concealment (20% miss chance) beyond 5 feet and total concealment (50% miss chance) beyond 20 feet.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Piercing Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your studies have helped you develop methods to overcome spell resistance.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm19">More Details</button>
  <div id="mm19" class="collapse">
When you cast a piercing spell against a target with spell resistance, it treats the spell resistance of the target as 5 lower than its actual SR.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Rime Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Creatures damaged by your spells with the cold descriptor become entangled</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm20">More Details</button>
  <div id="mm20" class="collapse">
The frost of your cold spell clings to the target, impeding it for a short time. A rime spell causes creatures that takes cold damage from the spell to become entangled for a number of rounds equal to the original level of the spell.</br>This feat only affects spells with the cold descriptor.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Scarring Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your emotion-affecting magic causes psychic trauma in your opponents.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm21">More Details</button>
  <div id="mm21" class="collapse">
When a creature fails a saving throw against a scarring spell, for the next 24 hours that creature takes a —2 penalty on saving throws against emotion and fear effects you create, and a —1 penalty on saving throws against other emotion and fear effects. Penalties from multiple scarring spells don’t stack. This metamagic feat can be applied only to spells with the emotion or fear descriptor.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Selective Spell</td>
    <td>1</td>
    <td>Spellcraft 10 ranks</td>
    <td>Your allies need not fear friendly fire.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm22">More Details</button>
  <div id="mm22" class="collapse">
When casting a selective spell with an area effect and a duration of instantaneous, you can choose a number of targets in the area equal to the ability score modifier of your casting stat (Int, Wis, Cha). These targets are excluded from the effects of your spell.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Silent Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can cast your spells without making any sound.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm23">More Details</button>
  <div id="mm23" class="collapse">
A silent spell can be cast with no verbal components. Spells without verbal components are not affected.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Still Spell</td>
    <td>1</td>
    <td>-</td>
    <td>You can cast spells without moving.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm24">More Details</button>
  <div id="mm24" class="collapse">
A stilled spell can be cast with no somatic components. Spells without somatic components are not affected.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Tenacious Spell</td>
    <td>1</td>
    <td>-</td>
    <td>Your magic is difficult to unravel.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm25">More Details</button>
  <div id="mm25" class="collapse">
Increase the DC of caster level checks to counter or dispel a tenacious spell by 2. If a tenacious spell is dispelled or dismissed, it lasts for 1d4 further rounds (to a maximum of the spell’s normal duration) before ending (this does not occur if antimagic field or a similar spell or effect suppresses or ends the spell’s effect without dispelling or dismissing it). The lingering auras of tenacious spells detectable with detect magic last for twice as long as usual after the spells end.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Toxic Spell</td>
    <td>1</td>
    <td>Craft (poison) 5 ranks, </br>ability to cast 2nd-level spells, </br>poison use class feature.</td>
    <td>You can infuse a spell with the power of a poison.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm26">More Details</button>
  <div id="mm26" class="collapse">
You can use 1 dose of contact, ingested, inhaled, or injury poison as an additional material component for a spell you cast. This spell gains the poison descriptor. Select a single creature affected by the spell. If that creature fails its saving throw against the spell, it must also attempt a saving throw against the poison used as a material component. If the target fails the save against the poison, the poison takes effect immediately, ignoring any onset time. The poison uses its save DC (rather than the save DC of the spell), but is modified by any effects that increase the spell’s DC (such as Spell Focus). This feat works only with spells whose effects can be negated by a successful Fortitude save.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Vast Spell</td>
    <td>1</td>
    <td>CL3</td>
    <td>Your spells cover targets across a larger area.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm27">More Details</button>
  <div id="mm27" class="collapse">
You can alter a spell that targets a number of creatures no more than 30 feet apart, such as haste. The maximum distance apart of those you target with the spell increases to 60 feet.
  </div>
  </div>
    </td>
  </tr>
<?php 
} 
// level 2
if(($_POST['btn'] >= 2) && ($_POST['btn'] <=9)) { 
?>

  <tr>
    <td>Burning Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You cause creatures to take extra damage when you affect them with a spell that has the acid or fire descriptor.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm28">More Details</button>
  <div id="mm28" class="collapse">
The acid or fire effects of the affected spell adhere to the creature, causing more damage the next round. When a creature takes acid or fire damage from the affected spell, that creature takes damage equal to 2x the spell’s actual level at the start of its next turn. The damage is acid or fire, as determined by the spell’s descriptor. If a burning spell has both the fire and acid descriptor, the caster chooses what kind of damage is dealt by the burning spell effect.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Concussive Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You cause creatures to be disoriented when you affect them with a spell that has the sonic descriptor</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm29">More Details</button>
  <div id="mm29" class="collapse">
With sonic damage comes a concussive wave of energy that rattles creatures affected by the spell. A concussive spell causes creatures that take damage from a spell that has the sonic descriptor to take a –2 penalty on attack rolls, saving throws, skill checks, and ability checks for a number of rounds equal to the actual spell level of the spell. A concussive spell only affects spells with the sonic descriptor.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Contagious Spell</td>
    <td>2</td>
    <td>-</td>
    <td>Your spells are dangerous to dispel and likely to backfire upon those who try</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm30">More Details</button>
  <div id="mm30" class="collapse">
A caster level check to dispel or remove a contagious spell that fails by 5 or more causes it to spread from the original target to the creature that attempted to remove it. The spell spreads to the new target regardless of its normal range or any special targeting requirement like a melee or ranged touch attack. The spell is treated as if you had just cast it on the new target. The new target receives a saving throw or the benefit of spell resistance (if applicable) if the spell normally allows it
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Contingent Spell</td>
    <td>2</td>
    <td>Ability to cast 'cure' spells</td>
    <td>You are able to set up healing spells in advance so that they instantly take effect at the most opportune moments, especially those that take place on the field of battle.</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm31">More Details</button>
  <div id="mm31" class="collapse">
A contingent spell infuses a target with a dormant healing or restorative spell that can trigger when the target needs it the most. This metamagic feat can be applied to only cure spells; breath of life; or any harmless spell that can be used to remove ability score damage, ability score drain, or a negative condition or effect (including break enchantment, neutralize poison, and remove disease). When you cast a contingent spell, you must set a specific trigger that dictates under what circumstances the target is immediately subject to the spell’s effects (for instance, “When the target dies, breath of life takes effect”). The contingent spell’s effects can remain dormant within the target for up to 10 minutes per caster level you have. A creature can be infused with only one contingent spell at a time.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Empower Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You can increase the power of your spells, causing them to deal more damage</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm32">More Details</button>
  <div id="mm32" class="collapse">
All variable, numeric effects of an empowered spell are increased by half including bonuses to those dice rolls.  Saving throws and opposed rolls are not affected, nor are spells without random variables.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Fearsome Spell</td>
    <td>2</td>
    <td>-</td>
    <td>Your spells inspire great fear in those harmed by them</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm33">More Details</button>
  <div id="mm33" class="collapse">
When a creature takes damage from a fearsome spell, if that creature failed its save against the spell, it becomes shaken for a number of rounds equal to the spell’s original level. If the spell doesn’t allow a save, creatures harmed by it can attempt a Will save (against the same DC the spell would have if it did allow a save) to negate the shaken effect. If the spell effect already causes creatures to become shaken, on a failed save, add the duration of this metamagic effect to the duration of the shaken condition imposed by the spell. A fearsome spell can’t cause a creature to become frightened, even if that creature is already shaken.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Persistent Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You can modify a spell to become more tenacious when its targets resist its effect</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm34">More Details</button>
  <div id="mm34" class="collapse">
Whenever a creature targeted by a persistent spell or within its area succeeds on its saving throw against the spell, it must make another saving throw against the effect. If a creature fails this second saving throw, it suffers the full effects of the spell, as if it had failed its first saving throw.  Spells that do not require a saving throw to resist or lessen the spell’s effect do not benefit from this feat.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Seeking Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You can cast spells that bend around barriers to reach their intended destination</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm35">More Details</button>
  <div id="mm35" class="collapse">
A seeking spell’s range can bend around obstacles to reach the intended target. You can define the route yourself or unambiguously identify a target and allow the spell to determine its own path. However, the spell fails if it would have to travel farther than its maximum range to reach the identified target. A ranged attack roll made to deliver a seeking spell is not subject to cover or concealment. In order to benefit from this feat, the selected spell must have a range greater than touch and target one or more creatures, or it must require the caster to make a ranged touch attack.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Sickening Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You can sicken creatures with your spells</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm36">More Details</button>
  <div id="mm36" class="collapse">
You can modify a spell to sicken a creature damaged by the spell. When a creature takes damage from this spell, they become sickened for a number of rounds equal to the original level of the spell. If the spell allows a saving throw, a successful save negates the sickening effect. If the spell does not allow a save, the target can make a Fortitude save to negate the sickening effect. If the spell effect also causes the creature to become sickened, the duration of this metamagic effect is added on to the duration of the spell.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Snuffing Spell</td>
    <td>2</td>
    <td>-</td>
    <td>Your magic disrupts sources of light</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm37">More Details</button>
  <div id="mm37" class="collapse">
You can modify a spell to extinguish magical and non-magical light sources that the target has. The first time a creature takes damage from or fails a saving throw against a snuffing spell, any non-magical light sources it has are immediately extinguished and you can attempt to dispel any active spells with the light descriptor that are affecting the target as if you had also cast the targeted version of dispel magic. Spells that do not target creatures can’t be snuffing spells.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Thundering Spell</td>
    <td>2</td>
    <td>-</td>
    <td>You can conjure your spells into existence with blaring thunder or fearful shrieks, deafening creatures damaged by their effects</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm38">More Details</button>
  <div id="mm38" class="collapse">
You can modify a spell to deafen a creature damaged by the spell. When a creature takes damage from this spell, it becomes deafened for a number of rounds equal to the original level of the spell. If the spell allows a saving throw, a successful save negates the deafening effect. If the spell does not allow a save, the target can make a Fortitude save to negate the deafening effect. If the spell effect also causes the creature to become deafened, the duration of this metamagic effect is added to the duration of the spell.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Traumatic Spell</td>
    <td>2</td>
    <td>-</td>
    <td>Creatures harmed by your spells relive their torments in nightly terrors</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm39">More Details</button>
  <div id="mm39" class="collapse">
A traumatic spell causes lingering memories of pain and suffering in creatures harmed by it. When a creature fails a saving throw against a traumatic spell, the next time it sleeps it must succeed at a Will save with a DC equal to the original spell’s DC or be affected as if by nightmare. Each time the target fails its save, it must save again the following night or be affected by another nightmare, though the save DC decreases by 2 each night after the first.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Umbral Spell</td>
    <td>2</td>
    <td>-</td>
    <td>Targets of your darkness spells radiate darkness</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm40">More Details</button>
  <div id="mm40" class="collapse">
An umbral spell gains the darkness descriptor. As long as the spell is in effect, the creature or object affected radiates darkness in a 10-foot radius, reducing illumination similar to the effects of the darkness spell. Nonmagical sources of light, such as torches or lanterns, do not increase the light level in this area. Magical light sources only increase the light level in an area affected by an umbral spell if they are of a higher level than the umbral spell’s unmodified spell level. This effect does not stack with itself or with any other effect that creates darkness.
  </div>
  </div>
    </td>
  </tr>

<?php 
}; 
?>

<?php
// level 3
if(($_POST['btn'] >= 3) && ($_POST['btn'] <=9)) {
?>

  <tr>
    <td>Dazing Spell</td>
    <td>3</td>
    <td>-</td>
    <td>You can daze creatures with the power of your spells</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm41">More Details</button>
  <div id="mm41" class="collapse">
You can modify a spell to daze a creature damaged by the spell. When a creature takes damage from this spell, they become dazed for a number of rounds equal to the original level of the spell. If the spell allows a saving throw, a successful save negates the daze effect. If the spell does not allow a save, the target can make a Will save to negate the daze effect. If the spell effect also causes the creature to become dazed, the duration of this metamagic effect is added to the duration of the spell.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Maximize Spell</td>
    <td>3</td>
    <td>-</td>
    <td>Your spells have the maximum possible effect</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm42">More Details</button>
  <div id="mm42" class="collapse">
All variable, numeric effects of a spell modified by this feat are maximized. Saving throws and opposed rolls are not affected, nor are spells without random variables.
  </div>
  </div>
    </td>
  </tr>
  
  <tr>
    <td>Widen Spell</td>
    <td>3</td>
    <td>-</td>
    <td>You can cast your spells so that they occupy a larger space</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm43">More Details</button>
  <div id="mm43" class="collapse">
You can alter a burst, emanation, or spread-shaped spell to increase its area. Any numeric measurements of the spell’s area increase by 100%.
  </div>
  </div>
    </td>
  </tr>

<?php
};
?>

<?php
// level 4
if(($_POST['btn'] >= 4) && ($_POST['btn'] <=9)) {
?>

  <tr>
    <td>Quicken Spell</td>
    <td>4</td>
    <td>-</td>
    <td>You can cast spells in a fraction of the normal time</td>
    <td>
<div>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mm44">More Details</button>
  <div id="mm44" class="collapse">
Casting a quickened spell is a swift action. You can perform another action, even casting another spell, in the same round as you cast a quickened spell. A spell whose casting time is more than 1 round or 1 full-round action cannot be quickened.
  </div>
  </div>
    </td>
  </tr>

<?php
};
?>

</table>


</body>
<footer>
  <p><a href="reportabug.html">Click here to report a bug</a></p>
</footer>
</html>
