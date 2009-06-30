<?php
include_once "../../includes/easyparliament/init.php";
require_once "share.php";
require_once "sharethis.php";

$this_page = 'campaign';
$PAGE->page_start();
$PAGE->stripe_start();
$PAGE->block_start(array ('id'=>'intro', 'title'=>'We need your help:'));

freeourbills_styles();

?>

<h2>Free our Bills!</h2>

<p id="free_our_bills_banner">The Nice Polite Campaign to Gently Encourage
Parliament to Publish Bills in a 21st Century Way, Please. Now.</p>

<h3>What the&hellip;?</h3>

<?php /*
<!--<script type="text/javascript" src="/jslib/share/share.js"></script>-->
<script type="text/javascript" src="/freeourbills/jquery.js"></script>
<script type="text/javascript">
// Share this related functions
function share(link) {
    var form = $('#share_form');
    if (!form.is(':hidden')) {
        form.hide();
        return;
    }
    var offset = $(link).offset();
    form.css('left', offset.left + 'px');
    form.css('top', (offset.top + link.offsetHeight + 3) + 'px');
    form.show();
}

function share_tab(tab) {
    if (tab == 1) {
        $('#share_tab2').removeClass();
        $('#share_tab1').addClass('selected');
        $('#share_email').hide();
        $('#share_social').show();
    } else {
        $('#share_tab1').removeClass()
        $('#share_tab2').addClass('selected');
        $('#share_social').hide();
        $('#share_email').show();
    }
}
</script>
*/ ?>

<p>Writing, discussing and voting on bills is what we employ our MPs to do. If
enough <strong>MPs vote on bills</strong> they become the law, meaning you or I
can get <strong>locked up</strong> if they pass a bad one.</p>

<p>What a Bill contains is hugely more important than what an MP says, how they look,
or what expenses they claim.</p>

<p>The problem, to put it simply, is that the way in which Bills are currently
published out is completely <strong>incompatible with the Internet</strong> era. As a
consequence far fewer people than should ever get to find out what a Bill says
before it becomes law and binds us all. Bills are currently buried within the
Parliamentary website, published in a hopelessly old fashioned way that makes
them difficult to find, difficult to read and impossible to do anything clever
with.</p>

<p><strong>Update!</strong> Our supporters have been asking MPs to sign an Early Day Motion to
support the campaign, and over 100 MPs have signed up so far. Sign up to our
campaign and we'll tell you whether your MP has signed.</p>

<h3>We need you!</h3>

<? signup_form() ?>
<? freeourbills_sharethis_link(); ?>

<p></p>

<h3>"Why?"</h3>

<p>Being the people who run TheyWorkForYou we spend lots of our time
taking rubbish, broken information from Parliament and fixing it up so
that it makes a nice, usable site so you can find out whether your MP
is actually working for you or not. Lots of people seem to like it,
nearly 2 million came to visit last year. <!-- Some of them weren't even
MPs obsessively checking their own stats. -->

<p>
It&rsquo;s time for Parliament to improve its act and start publishing these vital
documents properly in the first place. Quite apart from the fact that we&rsquo;re a
tiny charity without many resources to fix this information, 
<em>you&rsquo;re paying</em> for them to produce it in a uselessly old
fashioned way.  Unless Parliament produces better bills:

<ul class="free_our_bill_reasons">
<li class="free_our_bill_reasons">We can&rsquo;t give you <strong>email alerts</strong> to tell you when a bill mentions
something you might be interested in.
<li>We can&rsquo;t tell you what <strong>amendments your own MP</strong> is asking for, or voting on.
<li>We can&rsquo;t help people who know about bills <strong>annotate them</strong> to explain
what they&rsquo;re really going on about for everyone else.
<li>We can&rsquo;t build services that would help MPs and their staff notice
when they were being asked to vote on dumb or <strong>dubious things</strong>.
<li>We can&rsquo;t really give a <strong>rounded view</strong> of how useful your MP is if we
can&rsquo;t see their involvement with the bill making process.
<li>We can&rsquo;t do about <strong>12 zillion</strong> other things that we&rsquo;re not even bright
enough to think of yet.
</ul>

<br><!-- yuk -->

<h3>"Why won&rsquo;t Parliament do this?"</h3>

<p>We tried, my dears, we really did. We had meetings, and heard
encouraging words. We wrote a proposal on what they should do,
explaining the merits. We wore suits and polished our shoes and used
long words to make them feel comfortable. We met lots of nice people
who really want Parliament to get better at this stuff

<p>And then we got nowhere. It turns out that some unelected officials thought
that our proposal was a &ldquo;real turkey&rdquo;, and called even the idea of
signing up for email alerts &ldquo;na&iuml;ve&rdquo;. Those are the same email
alerts (73,000 and counting) that people sign up for every day on
TheyWorkForYou.

<h3>"Isn&rsquo;t it really expensive?"</h3>

<p>No. This needs about &pound;10,000 worth of programming to build a tool to
convert bills to the right format, and probably a Parliamentary staff
member putting between 10% and 100% of their day into operating it,
whilst Parliament is actually in session. They can do what they want
in the holidays &ndash; we aren&rsquo;t slave drivers. Oh yes, 5,000 people work in
Parliament too, over 250 in the computers bit, so we really think they
can afford this.

<p>See "<a href="/freeourbills/techy">Details of the technical changes we want Parliament to make to the way it publishes bills</a>" for more.

<h3>"Won&rsquo;t this disrupt the delicate process of writing bills?"</h3>

<p>Nope, the improved publication we&rsquo;re talking about has nothing to do
with the actual legal contents of bills. It&rsquo;s about how it gets
translated into an electronic format once they&rsquo;ve finished.

<h3>"What are your real motives? Who does this benefit politically?"</h3>

<p>Dammit, we hoped you wouldn't ask that, and now our secret is blown.
Obviously this campaign benefits Gordon Brown at the expense of Tony Blair. No,
wait a minute, that was last year. It definitely gives Hillary the edge over
Obama though. No, hang on, that's over too. Actually, it isn't partisan at all
- that's what I was trying to say. mySociety is based on a charity, you see, so
even if we wanted to be partisan, it'd be against the law. And if you're still
suspicious you'll see that MPs from almost all parties have signed our EDM.

<h3>"Isn&rsquo;t this an embarrassingly obscure thing to be campaigning about?
Can&rsquo;t you campaign about saving puppies or something?"</h3>

<p>Hey &ndash; <strong>you&rsquo;re</strong> the one who just read all the way down to this point.
Suck it and sign up, soldier.

<h3>We need you!</h3>

<? signup_form(); ?>
<? freeourbills_sharethis_link(); ?>

<?
$PAGE->block_end();
$PAGE->stripe_end(array(array(
	'type' => 'html',
	'content' => '<p align="center"><img title="Duck-billed platypus" src="bill3.jpg" alt="" hspace="10"></p>'
)));
$PAGE->page_end ();


