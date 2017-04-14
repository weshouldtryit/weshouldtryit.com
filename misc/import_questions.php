<?

//basics
    $txt = "
have longer teasing and foreplay sessions with partner
give partner a sensual massage
have partner give me a sensual massage
take pictures of partner
have pictures taken by partner
take pictures of us having sex
strip or give a lap dance to partner
have partner strip or give me a lap dance
film ourselves having sex
use mirrors while having sex
be woken up with sex or oral sex by partner
wake partner up with sex or oral sex
watch partner masturbate
be watched by partner while I masturbate
shave partner
be shaven by partner
shave each other
watch porn together
show partner how I like something from porn scene
be shown what partner likes from porn
thrust my penis between partner's breasts
be more vocal towards partner during sex
have partner be more vocal
talk dirtier to partner
have partner talk dirtier to me
call partner obscene words (bitch, slut, whore, etc)
be called obscene words (bitch, slut, whore, etc)by partner
have sex while on period
have sex while on period
roleplay in costumes
wear stocking and high heels for partner during sex
listen to romantic music while having sex
listen to more aggressive (rap/rock) music while having sex
mutually masturbate
be rougher in sex towards partner
have partner be rougher to me in sex
be fisted by partner
69 partner
swallow partner's cum
swallow partner's cum
cum over partner's breasts/neck (pearl necklace)
cum over partner's face (facial)
cum over partner's face (facial)
have partner cum over my face (facial)
have partner sit on my face as I give oral sex
sit on partner's face and be given oral sex
";

 $group_id = 1;  //group to import
 $level = 1;     //level
    
//toys
$txt = "
use dildos in sex
use vibrators while having sex
wear a cock ring (vibrating/non-vibrating) during sex
use nipple clamps
use a butt plug while having sex with partner
have partner use a butt plug
use sex furniture (such as a sex swing or ramp)
";

 $group_id = 2;  //group to import
 $level = 1;     //level

//bsdm
$txt = "
have a weapon (knife, gun) directed at me during sex (knife and gun play)
direct a weapon (knife, gun) during sex (knife and gun play)
wear earplugs during sex
have partner wear earplugs during sex
slap partner's face during sex
have my face slapped during sex
blindfold partner
be blindfolded by partner
punch partner during sex
be punched by partner during sex
use restraints on partner
be tied down or otherwise restrained by partner
pull partner's hair
have my hair pulled by partner
use a riding crop on partner
have partner use a riding crop on me
spank partner with your hand
be spanked by partner's hand
have partner strike me with a cane
be struck with a cane
spank partner with toys (whip/paddle)
be spanked by partner with toys (whip/paddle)
bite partner
be bitten by partner
wear a dog collar with a leash
have partner wear a dog collar with a leash
have partner be submissive and worship one of my body parts
be submissive and worship one of partner's body parts
be submissive for partner
be dominant towards partner
wear hoods or half hoods for partner
have partner wear hoods or half-hoods
have partner act as furniture to be used by me
act as {furniture} to be used by partner
roleplay rape partner
be roleplay raped by partner
have partner be a submissive brat
be a submissive brat towards partner
have partner be a submissive servant
be a submissive servant towards partner
command and deny orgasms for partner
be commanded and denied orgasms by partner
be a 24/7 slave for partner
have partner be a 24/7 slave
wear a chastity belt for partner
have partner wear a chastity belt
be a Gorean slave for partner
be a Gorean master for partner
be suspended while having sex with partner
have partner be suspended while having sex
wear a ball gag for partner
have partner wear a ball gag
torture partner's genitals
have partner torture my genitals
";

$group_id = 3;  //group to import
$level = 2;     //level
 
 
//anal
$txt = "
anally fist partner
be anally fisted by partner
anally finger partner
be fingered anally by partner
anally penetrate partner
double penetrate partner with me and a toy
peg partner with a strap-on
lick partner's anus (analingus)
be licked anally by partner
";

$group_id = 4;  //group to import
$level = 1;     //level

//group
$txt = "
be bukkake'd by partner and other men
be bukkake'd by partner and other men
fondle partner in a public setting (restaurant/theater)
be fondled by partner in a public setting (restaurant/theater)
have my pictures shown over the internet
double penetration by your partner and another man
show pictures of us having sex over the internet
show pictures/film of partner over the internet
triple penetration by your partner two other men
have sex in a car
have sex in the woods or in a park
have sex in work environment (office, etc)
have sex in front of an outward facing window
have sex in a place where you might get caught
watch other couples have sex (live)
let another person/people/couples watch us have sex
have sex monogamously with other couples (don't touch other couples)
include another female in sex (menage-a-trois)
include another male in sex (menage-a-trois)
include another couple in sex (small orgy)
include more than two men in sex
include more than two women in sex
participate in an large orgy (more than 4 people)
watch partner have sex with another person
have sex with another person while partner watches
go to a strip club with partner
go to a sex or swingers club with partner
go to a nudist resort with partner
go to a pleasure resort with partner
";

$group_id = 5;  //group to import
$level = 2;     //level
 
//other
$txt = "
give partner a foot job
be given a foot job
douse ourselves in oil/mud/paint/milk/pies during sex
use chemicals (menthol, toothpaste, ben-gay) on partner
have partner use chemicals on me (menthol, toothpaste, ben-gay)
have partner give me a golden shower
give partner a golden shower
have partner give me a brown shower
give partner a brown shower
swap my cum with my partner
suck semen out of partner's vagina or anus after sex (felching)
suck semen out of partner's vagina or anus after sex (felching)
";

$group_id = 6;  //group to import
$level = 2;     //level

    //import 
    require('wwwroot/pages/global.php');
    require('wwwroot/pages/classes/class_db.php');
          
          $db = new database;
          $db->connect(); 
          
   
    $lang_id = 1;
    $stamp_now = time();
    
    $sort = 50;
    
    $arr = explode("\n",$txt);
    
    for($i=0;$i<count($arr);$i++)
        {
          $q = trim($arr[$i]);
          
           if($q != '')
            {
              $q = $db->quote_smart($q);
              
              //adding
              $query = "INSERT INTO question (user_id,group_id,language_id,date_added,body,sort,level)
              VALUES ('0','$group_id','$lang_id','$stamp_now','$q','$sort','$level')";
              
              $db->query($query);
               
              $sort = $sort+20;
               
              echo "$query \n";   
            }  
        }
    
    
 

?>