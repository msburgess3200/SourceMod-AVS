<div class="jumbotron">
  <h1>Dashboard</h1>
  <p>Here is the homepage, or dashboard. You can get a brief overview of basic information from the adverts here.</p>
</div>
<?php
$randomquote = array();
array_push($randomquote, "The ships hung in the sky in much the same way that bricks don't.");
array_push($randomquote, "&quot;Funny,&quot; he intoned funereally, &quot;how just when you think life can't possibly get any worse it suddenly does.&quot;");
array_push($randomquote, "A common mistake that people make when trying to design something completely foolproof is to underestimate the ingenuity of complete fools.");
array_push($randomquote, "Many were increasingly of the opinion that they'd all made a big mistake in coming down from the trees in the first place. And some said that even the trees had been a bad move, and that no one should ever have left the oceans.");
array_push($randomquote, "&quot;Space,&quot; it says, &quot;is big. Really big. You just won't believe how vastly, hugely, mindbogglingly big it is. I mean, you may think it's a long way down the road to the chemist's, but that's just peanuts to space.&quot;");
array_push($randomquote, "&quot;Time is an illusion. Lunchtime doubly so.&quot;");
array_push($randomquote, "&quot;If there's anything more important than my ego around, I want it caught and shot now.&quot;");
array_push($randomquote, "&quot;I'd far rather be happy than right any day.&quot;");
array_push($randomquote, "&quot;This must be Thursday,&quot; said Arthur to himself, sinking low over his beer. &quot;I never could get the hang of Thursdays.&quot;");
array_push($randomquote, "&quot;Ford... you're turning into a penguin. Stop it.&quot;");
array_push($randomquote, "&quot;Ford!&quot; he said, &quot;there's an infinite number of monkeys outside who want to talk to us about this script for Hamlet they've worked out.&quot;");
array_push($randomquote, "&quot;I don't want to die now!&quot; he yelled. &quot;I've still got a headache! I don't want to go to heaven with a headache, I'd be all cross and wouldn't enjoy it!&quot;");
?>
<img src="img/chat.png" class="img-thumbnail" />
<hr>
<blockquote>
  <p><?php echo $randomquote[rand(0,11)];?></p>
  <small>Hitchhiker's guide to the galaxy by <cite title="Douglas Adams">Douglas Adams</cite></small>
</blockquote>