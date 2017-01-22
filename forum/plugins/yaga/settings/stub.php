<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013-2016 Zachary Doll */

$SQL = Gdn::Database()->SQL();

// Only insert default actions if none exist
$Row = $SQL->get('Action', '', 'asc', 1)->firstRow(DATASET_TYPE_ARRAY);
if (!$Row) {
  $SQL->Insert('Action', array('ActionID' => 1,'Name' => 'Promote','Description' => 'This post deserves to be featured on the best of page!','Tooltip' => 'Click me if this content should be featured.','CssClass' => 'ReactPointUp','AwardValue' => 5,'Permission' => 'Garden.Curation.Manage','Sort' => 0));
  $SQL->Insert('Action', array('ActionID' => 2,'Name' => 'Insightful','Description' => 'This post brings new meaning to the discussion.','Tooltip' => 'Insightful','CssClass' => 'ReactEye2','AwardValue' => 1,'Permission' => 'Yaga.Reactions.Add','Sort' => 1));
  $SQL->Insert('Action', array('ActionID' => 3,'Name' => 'Awesome','Description' => 'This post is made of pure win.','Tooltip' => 'Awesome','CssClass' => 'ReactHeart','AwardValue' => 1,'Permission' => 'Yaga.Reactions.Add','Sort' => 2));
  $SQL->Insert('Action', array('ActionID' => 4,'Name' => 'LOL','Description' => 'This post is funny.','Tooltip' => 'LOL','CssClass' => 'ReactWink','AwardValue' => 1,'Permission' => 'Yaga.Reactions.Add','Sort' => 3));
  $SQL->Insert('Action', array('ActionID' => 5,'Name' => 'WTF','Description' => 'This post is all sorts of shocking.','Tooltip' => 'WTF','CssClass' => 'ReactShocked','AwardValue' => 1,'Permission' => 'Yaga.Reactions.Add','Sort' => 4));
  $SQL->Insert('Action', array('ActionID' => 6,'Name' => 'Spam','Description' => 'This post is spam.','Tooltip' => 'Spam','CssClass' => 'ReactWarning','AwardValue' => -5,'Permission' => 'Garden.Curation.Manage','Sort' => 5));
}

// Only insert default badges if none exist
$Row = $SQL->get('Badge', '', 'asc', 1)->firstRow(DATASET_TYPE_ARRAY);
if (!$Row) {
  $SQL->Insert('Badge', array('Name' => 'First Anniversary','Description' => 'Has it been a year already?','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-1','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"1";s:6:"Period";s:4:"year";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'Second Anniversary','Description' => 'Thanks for sticking with us for 2 years.','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-2','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"2";s:6:"Period";s:4:"year";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'Third Anniversary','Description' => 'That\'s three years you have been here!','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-3','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"3";s:6:"Period";s:4:"year";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'Fourth Anniversary','Description' => 'You might have graduated from college considering how long you have been here.','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-4','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"4";s:6:"Period";s:4:"year";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'Fifth Anniversary','Description' => 'Five years ago, you created your account. Thanks for sticking around!','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-5','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"5";s:6:"Period";s:4:"year";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'Final Anniversary','Description' => 'You have reached your final form. OK, not really, but you are still awesome in my book!','Photo' => '/applications/yaga/design/images/default_badges.svg#anniversary-longtime','RuleClass' => 'LengthOfService','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"6";s:6:"Period";s:4:"year";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '5 Awesomes','Description' => 'You have received 5 awesomes. Not a bad start!','Photo' => '/applications/yaga/design/images/default_badges.svg#awesome-1','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"5";s:8:"ActionID";s:1:"3";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '25 Awesomes','Description' => 'You keep posting great content. Nice!','Photo' => '/applications/yaga/design/images/default_badges.svg#awesome-2','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"25";s:8:"ActionID";s:1:"3";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '100 Awesomes','Description' => 'Your posts are what good forums are made of!','Photo' => '/applications/yaga/design/images/default_badges.svg#awesome-3','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"100";s:8:"ActionID";s:1:"3";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '250 Awesomes','Description' => 'We definitely want you to keep doing what you are doing.','Photo' => '/applications/yaga/design/images/default_badges.svg#awesome-4','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"250";s:8:"ActionID";s:1:"3";}','AwardValue' => 25));
  $SQL->Insert('Badge', array('Name' => '500 Awesomes','Description' => 'We\'re lucky to have you here. Amazing!','Photo' => '/applications/yaga/design/images/default_badges.svg#awesome-5','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"500";s:8:"ActionID";s:1:"3";}','AwardValue' => 50));
  $SQL->Insert('Badge', array('Name' => 'Have Some Cake','Description' => 'Thanks for posting on your anniversary. It means so much to us that you remembered!','Photo' => '/applications/yaga/design/images/default_badges.svg#cakeday','RuleClass' => 'CakeDayPost','RuleCriteria' => 'a:0:{}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => 'First Post','Description' => 'You are in there and getting involved. Have some free points!','Photo' => '/applications/yaga/design/images/default_badges.svg#comment-1','RuleClass' => 'PostCount','RuleCriteria' => 'a:2:{s:10:"Comparison";s:3:"gte";s:6:"Target";s:1:"1";}','AwardValue' => 2));
  $SQL->Insert('Badge', array('Name' => '10 Posts','Description' => 'This is how you get to places. Keep up your posting.','Photo' => '/applications/yaga/design/images/default_badges.svg#comment-2','RuleClass' => 'PostCount','RuleCriteria' => 'a:2:{s:10:"Comparison";s:3:"gte";s:6:"Target";s:2:"10";}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => '100 Posts','Description' => 'Thanks for driving discussions!','Photo' => '/applications/yaga/design/images/default_badges.svg#comment-3','RuleClass' => 'PostCount','RuleCriteria' => 'a:2:{s:10:"Comparison";s:3:"gte";s:6:"Target";s:3:"100";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '500 Posts','Description' => 'You have given the gift of gab to this community.','Photo' => '/applications/yaga/design/images/default_badges.svg#comment-4','RuleClass' => 'PostCount','RuleCriteria' => 'a:2:{s:10:"Comparison";s:3:"gte";s:6:"Target";s:3:"500";}','AwardValue' => 15));
  $SQL->Insert('Badge', array('Name' => '1000 Posts','Description' => 'When you are here, you\'re family!','Photo' => '/applications/yaga/design/images/default_badges.svg#comment-5','RuleClass' => 'PostCount','RuleCriteria' => 'a:2:{s:10:"Comparison";s:3:"gte";s:6:"Target";s:4:"1000";}','AwardValue' => 20));
  $SQL->Insert('Badge', array('Name' => 'Book Connection','Description' => 'See how many likes you get with these shares. Am I doing this right?','Photo' => '/applications/yaga/design/images/default_badges.svg#fb-connector','RuleClass' => 'SocialConnection','RuleCriteria' => 'a:1:{s:13:"SocialNetwork";s:8:"Facebook";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '5 Insightfuls','Description' => 'You have received 5 insightfuls. Not a bad start!','Photo' => '/applications/yaga/design/images/default_badges.svg#insightful-1','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"5";s:8:"ActionID";s:1:"2";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '25 Insightfuls','Description' => 'You keep posting great content. Nice!','Photo' => '/applications/yaga/design/images/default_badges.svg#insightful-2','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"25";s:8:"ActionID";s:1:"2";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '100 Insightfuls','Description' => 'Your posts are what good forums are made of!','Photo' => '/applications/yaga/design/images/default_badges.svg#insightful-3','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"100";s:8:"ActionID";s:1:"2";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '250 Insightfuls','Description' => 'We definitely want you to keep doing what you are doing.','Photo' => '/applications/yaga/design/images/default_badges.svg#insightful-4','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"250";s:8:"ActionID";s:1:"2";}','AwardValue' => 25));
  $SQL->Insert('Badge', array('Name' => '500 Insightfuls','Description' => 'We\'re lucky to have you here. Amazing!','Photo' => '/applications/yaga/design/images/default_badges.svg#insightful-5','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"500";s:8:"ActionID";s:1:"2";}','AwardValue' => 50));
  $SQL->Insert('Badge', array('Name' => 'Paging Mr. F','Description' => 'Mentioning someone in a post is a great way to direct comments.','Photo' => '/applications/yaga/design/images/default_badges.svg#mention','RuleClass' => 'HasMentioned','RuleCriteria' => 'a:0:{}','AwardValue' => 5));
  $SQL->Insert('Badge', array('Name' => 'We Have Touchdown','Description' => 'Today is the anniversary of the first human moon-walk. Celebrate!','Photo' => '/applications/yaga/design/images/default_badges.svg#moon-landing','RuleClass' => 'HolidayVisit','RuleCriteria' => 'a:2:{s:5:"Month";s:1:"7";s:3:"Day";s:2:"20";}','AwardValue' => 15));
  $SQL->Insert('Badge', array('Name' => 'You Look Familiar','Description' => 'Thanks for sharing yourself with the community.','Photo' => '/applications/yaga/design/images/default_badges.svg#portrait-upload','RuleClass' => 'PhotoExists','RuleCriteria' => 'a:0:{}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '1 Promote','Description' => 'You have received your first promote. This is a great start!','Photo' => '/applications/yaga/design/images/default_badges.svg#promote-1','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"1";s:8:"ActionID";s:1:"1";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '5 Promotes','Description' => 'You keep posting great content. Nice!','Photo' => '/applications/yaga/design/images/default_badges.svg#promote-2','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"5";s:8:"ActionID";s:1:"1";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '25 Promotes','Description' => 'Your posts are what good forums are made of!','Photo' => '/applications/yaga/design/images/default_badges.svg#promote-3','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"25";s:8:"ActionID";s:1:"1";}','AwardValue' => 25));
  $SQL->Insert('Badge', array('Name' => '50 Promotes','Description' => 'We definitely want you to keep doing what you are doing.','Photo' => '/applications/yaga/design/images/default_badges.svg#promote-4','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"50";s:8:"ActionID";s:1:"1";}','AwardValue' => 50));
  $SQL->Insert('Badge', array('Name' => '100 Promotes','Description' => 'We\'re lucky to have you here. Amazing!','Photo' => '/applications/yaga/design/images/default_badges.svg#promote-5','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"100";s:8:"ActionID";s:1:"1";}','AwardValue' => 100));
  $SQL->Insert('Badge', array('Name' => 'c-c-COMBO BREAKER!','Description' => 'You are doing so much stuff today. Have another badge!','Photo' => '/applications/yaga/design/images/default_badges.svg#achievement-combo','RuleClass' => 'AwardCombo','RuleCriteria' => 'a:3:{s:6:"Target";s:1:"5";s:8:"Duration";s:1:"1";s:6:"Period";s:3:"day";}','AwardValue' => 20));
  $SQL->Insert('Badge', array('Name' => 'Post Marathon','Description' => 'I am tired just looking at all the stuff you are doing!','Photo' => '/applications/yaga/design/images/default_badges.svg#running-man','RuleClass' => 'CommentMarathon','RuleCriteria' => 'a:3:{s:6:"Target";s:2:"25";s:8:"Duration";s:1:"1";s:6:"Period";s:3:"day";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '5 WTFs','Description' => 'You have received 5 WTFs. Not a bad start!','Photo' => '/applications/yaga/design/images/default_badges.svg#shock-1','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"5";s:8:"ActionID";s:1:"5";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '25 WTFs','Description' => 'You keep posting great content. Nice!','Photo' => '/applications/yaga/design/images/default_badges.svg#shock-2','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"25";s:8:"ActionID";s:1:"5";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '100 WTFs','Description' => 'Your posts are what good forums are made of!','Photo' => '/applications/yaga/design/images/default_badges.svg#shock-3','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"100";s:8:"ActionID";s:1:"5";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '250 WTFs','Description' => 'We definitely want you to keep doing what you are doing.','Photo' => '/applications/yaga/design/images/default_badges.svg#shock-4','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"250";s:8:"ActionID";s:1:"5";}','AwardValue' => 25));
  $SQL->Insert('Badge', array('Name' => '500 WTFs','Description' => 'We\'re lucky to have you here. Amazing!','Photo' => '/applications/yaga/design/images/default_badges.svg#shock-5','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"500";s:8:"ActionID";s:1:"5";}','AwardValue' => 50));
  $SQL->Insert('Badge', array('Name' => 'Threadshot!','Description' => 'You have super fast reflexes to have responded so quickly!','Photo' => '/applications/yaga/design/images/default_badges.svg#threadshot-reticle','RuleClass' => 'ReflexComment','RuleCriteria' => 'a:1:{s:7:"Seconds";s:2:"60";}','AwardValue' => 15));
  $SQL->Insert('Badge', array('Name' => 'Twitterpated','Description' => 'Make way for the retweets, hash tags, and restrictive message length. It is refreshing to see well crafted messages make every character cou','Photo' => '/applications/yaga/design/images/default_badges.svg#twitter-connector','RuleClass' => 'SocialConnection','RuleCriteria' => 'a:1:{s:13:"SocialNetwork";s:7:"Twitter";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => 'I\'m Not Dead Yet!','Description' => 'You should try bring humans back to life now that you have brought this discussion back from the dead.','Photo' => '/applications/yaga/design/images/default_badges.svg#unimpressed-necropost','RuleClass' => 'NecroPost','RuleCriteria' => 'a:2:{s:8:"Duration";s:2:"26";s:6:"Period";s:4:"week";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => 'Welcome Committee','Description' => 'Thanks for posting on a new member\'s first discussion. I know you made them feel at home.','Photo' => '/applications/yaga/design/images/default_badges.svg#welcome-committee','RuleClass' => 'NewbieComment','RuleCriteria' => 'a:2:{s:8:"Duration";s:1:"2";s:6:"Period";s:3:"day";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '5 LOLs','Description' => 'You have received 5 LOLs. Not a bad start!','Photo' => '/applications/yaga/design/images/default_badges.svg#wink-1','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:1:"5";s:8:"ActionID";s:1:"4";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '25 LOLs','Description' => 'You keep posting great content. Nice!','Photo' => '/applications/yaga/design/images/default_badges.svg#wink-2','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:2:"25";s:8:"ActionID";s:1:"4";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '100 LOLs','Description' => 'Your posts are what good forums are made of!','Photo' => '/applications/yaga/design/images/default_badges.svg#wink-3','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"100";s:8:"ActionID";s:1:"4";}','AwardValue' => 10));
  $SQL->Insert('Badge', array('Name' => '250 LOLs','Description' => 'We definitely want you to keep doing what you are doing.','Photo' => '/applications/yaga/design/images/default_badges.svg#wink-4','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"250";s:8:"ActionID";s:1:"4";}','AwardValue' => 25));
  $SQL->Insert('Badge', array('Name' => '500 LOLs','Description' => 'We\'re lucky to have you here. Amazing!','Photo' => '/applications/yaga/design/images/default_badges.svg#wink-5','RuleClass' => 'ReactionCount','RuleCriteria' => 'a:2:{s:6:"Target";s:3:"500";s:8:"ActionID";s:1:"4";}','AwardValue' => 50));
}

// Only insert default ranks if none exist
$Row = $SQL->get('Rank', '', 'asc', 1)->firstRow(DATASET_TYPE_ARRAY);
if (!$Row) {
  $SQL->Insert('Rank', array('RankID' => 1,'Name' => 'Level 1','Description' => 'You are at the lowest level. Build up your points to unlock new features!','Sort' => 1,'PointReq' => 0,'PostReq' => 0,'AgeReq' => 0,'Perks' => 'a:6:{s:29:"ConfGarden.EditContentTimeout";s:1:"0";s:26:"PermGarden.Curation.Manage";s:6:"revoke";s:27:"PermPlugins.Signatures.Edit";s:6:"revoke";s:23:"PermPlugins.Tagging.Add";s:6:"revoke";s:35:"ConfPlugins.Emotify.FormatEmoticons";s:1:"0";s:27:"ConfGarden.Format.MeActions";s:1:"0";}'));
  $SQL->Insert('Rank', array('RankID' => 2,'Name' => 'Level 2','Description' => 'Level up!','Sort' => 2,'PointReq' => 0,'PostReq' => 5,'AgeReq' => 86400,'Perks' => 'a:4:{s:29:"ConfGarden.EditContentTimeout";s:1:"0";s:26:"PermGarden.Curation.Manage";s:6:"revoke";s:27:"PermPlugins.Signatures.Edit";s:6:"revoke";s:23:"PermPlugins.Tagging.Add";s:6:"revoke";}'));
  $SQL->Insert('Rank', array('RankID' => 3,'Name' => 'Level 3','Description' => 'Building your reputation has unlocked emoticons!','Sort' => 3,'PointReq' => 15,'PostReq' => 50,'AgeReq' => 604800,'Perks' => 'a:3:{s:29:"ConfGarden.EditContentTimeout";s:1:"0";s:35:"ConfPlugins.Emotify.FormatEmoticons";s:1:"1";s:27:"ConfGarden.Format.MeActions";s:1:"1";}'));
  $SQL->Insert('Rank', array('RankID' => 4,'Name' => 'Level 4','Description' => 'Your pen now has an eraser! You can edit your posts for up to a week after making them.','Sort' => 4,'PointReq' => 75,'PostReq' => 200,'AgeReq' => 2678400,'Perks' => 'a:4:{s:29:"ConfGarden.EditContentTimeout";s:6:"604800";s:27:"PermPlugins.Signatures.Edit";s:5:"grant";s:35:"ConfPlugins.Emotify.FormatEmoticons";s:1:"1";s:27:"ConfGarden.Format.MeActions";s:1:"1";}'));
  $SQL->Insert('Rank', array('RankID' => 5,'Name' => 'Level 5','Description' => 'Holy batman, you are awesome. Have some more reactions!','Sort' => 5,'PointReq' => 250,'PostReq' => 400,'AgeReq' => 7776000,'Perks' => 'a:6:{s:29:"ConfGarden.EditContentTimeout";s:7:"2592000";s:26:"PermGarden.Curation.Manage";s:5:"grant";s:27:"PermPlugins.Signatures.Edit";s:5:"grant";s:23:"PermPlugins.Tagging.Add";s:5:"grant";s:35:"ConfPlugins.Emotify.FormatEmoticons";s:1:"1";s:27:"ConfGarden.Format.MeActions";s:1:"1";}'));
  $SQL->Insert('Rank', array('RankID' => 6,'Name' => 'Moderator','Description' => 'You can now moderate content. Welcome aboard!','Sort' => 6,'PointReq' => 1000,'PostReq' => 1000,'AgeReq' => 31536000,'Perks' => 'a:2:{s:4:"Role";s:2:"32";s:26:"PermGarden.Curation.Manage";s:5:"grant";}'));
  $SQL->Insert('Rank', array('RankID' => 7,'Name' => 'Administrator','Description' => 'With great power comes great responsibility.','Sort' => 7,'PointReq' => 10000,'PostReq' => 10000,'AgeReq' => 157766400,'Perks' => 'a:7:{s:4:"Role";s:2:"16";s:29:"ConfGarden.EditContentTimeout";s:2:"-1";s:26:"PermGarden.Curation.Manage";s:5:"grant";s:27:"PermPlugins.Signatures.Edit";s:5:"grant";s:23:"PermPlugins.Tagging.Add";s:5:"grant";s:35:"ConfPlugins.Emotify.FormatEmoticons";s:1:"1";s:27:"ConfGarden.Format.MeActions";s:1:"1";}','Enabled' => 0));
}