<?php

include_once "../../includes/easyparliament/init.php";
include_once '../../../../phplib/mapit.php';


$PAGE->page_start();
?>
<h2>General election constituency boundaries (NI being done overnight)</h2>
<div style="margin-left:18px; margin-right:14px; overflow: auto;">
<?

function create_map_filename($c) {
    $c = str_replace(array(',', '(', ')', "'"), '', $c);
    $c = str_replace('&amp;', 'and', $c);
    $c = str_replace('&ocirc;', 'o', $c);
    $c = rawurlencode(strtolower($c));
    return $c;
}

$pc = get_http_var('pc');
if ($pc) {
    $current = postcode_to_constituency($pc);
    $current_disp = str_replace('&amp;', 'and', $current);
	if ($current == "connection_timed_out") {
	    print "Sorry, we couldn't check your postcode right now, as our postcode lookup server is under quite a lot of load.";
	} elseif ($current == "") {
		print "Sorry, ".htmlentities($pc) ." isn't a known postcode";
    }
    $map_url_current = create_map_filename($current);

    $new_areas = mapit_get_voting_areas($pc, 13); # Magic number 13
    if (isset($new_areas['WMC'])) {
        $new_info = mapit_get_voting_area_info($new_areas['WMC']);
        $new = $new_info['name'];
        $map_url_new = create_map_filename($new);
    }

    $MEMBER = new MEMBER(array('constituency' => $current));
?>

<div style="float:right;width:420px; padding-left: 1em; background-color: #ffffff;">
<h3 style="margin:0">Maps</h3>
<p style='padding-bottom:0'>Current constituency of <?=$current_disp?>:</p>
<p><img src='http://matthew.theyworkforyou.com/boundaries/maps_now/<?=$map_url_current?>.png' alt='Map showing boundary of the <?=$current_disp?> constituency' width=400 height=400>
<?
    if (isset($new_info) && $new_info['country'] == 'N') {
        print '<p><em>There is no map showing the new constituency boundary for Northern Irish constituencies.</em></p>';
    } elseif (isset($new)) {
        print "<p style='padding-bottom:0'>$new constituency at next election:</p>";
        print "<p><img src='http://matthew.theyworkforyou.com/boundaries/maps_next/$map_url_new.png' alt='Map showing boundary of the $new constituency' width=400 height=400>";
    }
?>

<p style="clear:both"><small>Images produced from the Ordnance Survey <a href="http://www.election-maps.co.uk/" rel="nofollow">election-maps</a> service. Images reproduced with permission of <a href="http://www.ordnancesurvey.co.uk/" rel="nofollow">Ordnance Survey</a> and <a href="http://www.lpsni.gov.uk/" rel="nofollow">Land and Property Services</a>.</small></p>

</div>

<ul style="margin-left:1em; list-style-type: disc; font-size: 150%;">

<li>You are currently in the <strong><?=$current_disp?></strong> constituency; your MP is <a href='<?=$MEMBER->url()?>'><?=$MEMBER->full_name()?></a>.</p>
<?
    if (isset($new)) {
        print '<li>At the next election, you will be in the <strong>' . $new . '</strong> constituency.';
    } else {
        print '<li>We cannot look up the constituency for the next election for some reason.
If you have entered a Northern Irish postcode, that data should be added overnight.';
    }

    echo '</ul>';

    if (isset($new) && $current_disp == $new && $new_info['country']!='N') {
        print '<p>The constituency may have kept the same name but altered its boundaries &ndash; do check the maps on the right.</p>';
    }
}
?>

<p style="padding-top:1em; border-top: solid 1px #666666;">Constituency
boundaries are <strong>changing</strong> at the next general election in
England, Wales, and Northern Ireland. Enter your postcode here to find out
what constituency you are currently in, and what constituency you will
be voting in at the election, along with maps of before and after.
</p>

<form method="get" style="margin-left: 3em">
<p><label for="pc">Enter your UK postcode:</label>
<input type="text" id="pc" name="pc" value="<?=htmlspecialchars($pc)?>" size="7">
<input type="submit" value="Look up">
</p>
</form>

<p>As far as I am aware, this is the only accurate public service.
The official election-maps.co.uk site does work for England, Wales, and Scotland,
but requires JavaScript, and does not have any new Northern Ireland boundaries on it.
This service should work anywhere in the UK, errors and omissions excepted.

<p>This service is also available through the <a href="/api/">TheyWorkForYou API</a>
via the getConstituency method; you must credit TheyWorkForYou if you use this, and 
please contact us about commercial use.

<p><big><em><a href="http://www.democracyclub.org.uk/">Join DemocracyClub</a> to help make
this coming election the most transparent ever!</em></big></p>

</div>
<?

$PAGE->page_end();
