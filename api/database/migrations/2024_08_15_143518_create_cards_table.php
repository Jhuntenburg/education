<?php

use App\Models\Card;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->text('description');
            $table->timestamps();
        });
        static::fill();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }

    private static function fill()
    {
        $payload = [
            [
                'id' => '1',
                'name' => 'THE FOOL',
                'image_url' => 'images/cards/card1.png',
                'description' => 'A figure dauntlessly launches off of the edge of a cliff, head back and heart forward. They trust in the universe enough not to look down—they know they will land right where they are meant to. Each time they’ve encountered this precipice, they’ve backed away in fear and apprehension. Today is a new day, however. The hopeful glow of the rising sun emboldens them to run and leap with all of the enthusiasm they can muster. Faith and trust are the forces that keep them aloft. The next step on your soul’s journey is a leap, and it’s waiting for you to take it. Dive into the vast unknown with strength and grace, Beauty. Be brave and meet your challenges head-on. There’s a calling rising within you that won’t be ignored, and the more you resist it, the louder it gets. The time to act is now, so leave off stalling and go for it! Trust that you have everything you need to navigate the challenges in store. Trust in the guidance of your Genius, that divine inner light that animates and inspires you. And finally, trust in the inherent benevolence of the beautiful cosmic expanse—it will take you where you’re meant to go.',
            ],
            [
                'id' => '2',
                'name' => 'THE MAGICIAN',
                'image_url' => 'images/cards/card2.png',
                'description' => 'A mage levitates all four elemental symbols with confidence and ease. His stare is gentle, confident, and penetrating. He draws energy from the heavens above him as he draws energy from the Genius within him to create a field that cushions the cup, wand, sword, and pentacle he wields. He is unflappable and assured of his success. This is what gives him the power to create. The time has come for you to channel your Genius so you can bring your wildest dreams into being. Seize your bag of tricks, spread them out before you, and take stock of what you have to work with. Have confidence in yourself, put your resources to their best use, and believe that your efforts will achieve their desired end. Freely consult your Genius to ensure that you’re acting with bravery and integrity; just because you can, doesn’t mean you should. Getting what you want is only rewarding if you stay true to your values along the way.',
            ],
            [
                'id' => '3',
                'name' => 'THE HIGH PRIESTESS',
                'image_url' => 'images/cards/card3.png',
                'description' => 'A holy woman prays at the mouth of a stream beneath the light of the crescent moon. She cradles a pomegranate, the symbol of spiritual fertility, in her arms. She’s parted the veil that cloaks the mysteries of the universe, revealing the depth of the wisdom held in her eternal garden. Only the humble, open seeker will receive the Truth she shares. The collective experience of all beings and the total history of all existence lives within you, and you may access this wisdom through the grace of the High Priestess. Look at the world with eyes that don’t judge or differentiate; challenge yourself to see the essence of things and the deepest mysteries will wordlessly reveal themselves to you. If you’re willing to surrender what you know and believe and approach the High Priestess with true humility, you will experience monumental shifts in your perception and understanding. You may not fully understand her messages at first, but trust that they will reveal themselves in time. Be still. Listen. Believe in the deep inner knowing you feel rising within you, and integrate it into your conscious understanding of life and existence.',
            ],
            [
                'id' => '4',
                'name' => 'THE EMPRESS',
                'image_url' => 'images/cards/card4.png',
                'description' => 'A bare mother with bright auburn hair bathes in the white light of the midday sun. She wears a circle of leaves, the symbol of her earthly dominion, on the crown of her head. In her hand is a crisp red apple, the sweet fruit of generativity. She is the divine affirmation of everything that exists, and she offers the promise of union, love, and creativity to those who are open to receiving it. The Empress appears to you now to proclaim the holiness of your existence and your inherent beauty and worth. She encourages you to surrender to the dynamic flow of life and to play the role you’re destined to play with boldness and bravery. You are here because she has placed you here, and she never makes mistakes. Your purpose is your existence, and you need only embrace that existence to feel the endless love she has for you. Once you do, you’ll be a bright and radiant light that shines on everything it encounters. The Empress loves you unconditionally—there’s nothing you could do that would make her forsake you. Draw strength from her love in times of suffering, and draw energy from her love in times of abundant creation. Her desire is your thriving, so thrive!',
            ],
            [
                'id' => '5',
                'name' => 'THE EMPEROR',
                'image_url' => 'images/cards/card5.png',
                'description' => 'A wizened man fuses with a mountain, guiding its growth with the palm of his hand. He is stoic and resolute, unwavering in his quest to bring structure and order to the raw material of the universe. His amethyst-crowned staff symbolizes the strength of his self-control and his ability to apply that self-control to everything he sculpts and shapes. The Emperor’s message for you is simple: do your best to bring order to your garden so you can nurture it with consistency and ease. Cut back what’s overgrown and feed what’s become shriveled and stunted. Consider the health of your domain deeply and often, and take action to return it to balance. After all, a garden is only as strong as its gardener. When the Emperor offers your Genius practical and sensible paths to follow, walk them. When you trip, stumble, or lose your way, lean on The Emperor until you’re sure-footed again. When you feel overwhelmed by the complexity of your experience, call on The Emperor to apply his organizing principle to get things back on track. You will never reach your full potential without his assistance.',
            ],
            [
                'id' => '6',
                'name' => 'THE HIEROPHANT',
                'image_url' => 'images/cards/card6.png',
                'description' => 'The Buddha sits beneath the Bodhi tree, absorbed in a state of blissful meditation. He has faced the demons of his psyche and overcome them, and he offers the wisdom gained through this experience to those who are ready to suffer well. He guides his disciples along the middle way, one that leads to compassion, acceptance, love, forgiveness, and detachment. His promise is nothing less than complete spiritual freedom. The Hierophant’s appearance in your reading encourages you to follow the path of balance so you can achieve the peace your heart yearns for. Temper your thoughts, feelings, and actions so you may be of benefit to yourself and those around you. Learn what triggers you, and learn how to modulate your response so it causes less pain. Recognize that you are a transcendent soul in a vast universe of souls, and your purpose is to love. Trust in kindness. Release regret. Open your heart to tolerance and understanding. If you can do these things, you’ll find peace and purpose. The Hierophant is here to guide you back to the path of divine calling—be wise enough to let him be that guide.',
            ],
            [
                'id' => '7',
                'name' => 'THE LOVERS',
                'image_url' => 'images/cards/card7.png',
                'description' => 'Two kindreds meet in a solitary grove under the light of the full moon. They’re cloaked in the veil of night, invisible to anyone else but each other. They reach out beyond personas, roles, and preconceived notions to discover authentic union; their souls mingle and merge as they open themselves to each other. They can’t explain their attraction, and they don’t have to—the universal love force understands. The time has come for you to release your attachment to ego identity so you can unify with another in a transcendent way. This card usually refers to an intimate, partnered relationship, but it can also reference kindreds and platonic soulmates. Lean into the bond you share and let the joy and comfort it brings assuage any fears or insecurities you might have. If you struggle with vulnerability in intimacy, now might be a perfect time to do the healing necessary to prepare you for a deep, loving partnership to enter your life.',
            ],
            [
                'id' => '8',
                'name' => 'THE CHARIOT',
                'image_url' => 'images/cards/card8.png',
                'description' => 'A traveler sits in half-lotus, ensconced in a canoe that drifts downstream. She’s surrendered to the flow of the river that carries her, trusting that it will lead to a vast ocean of opportunity. Her boat has no oars and her mind has no course. She’s fought the current before, and all it’s done is exhaust her. She knows that when she lets go and lets other forces guide her, she reaches her destination rested and prepared. The Chariot indicates that you’ll move quickly toward your destination once you’re able to get out of your own way. This archetype often illustrates the battle between the higher and lower self and the willpower needed to force them in the same direction. However, the seasoned traveler knows that such battles lead only to stress, exhaustion, and overwhelm. When you take a deep breath and listen to your heart, your higher and lower selves naturally line up to serve you. When you surrender to the flow and let it take you where you’re meant to go, you conserve your energy so you can rise and meet the challenges you encounter on your journey.',
            ],
            [
                'id' => '9',
                'name' => 'STRENGTH',
                'image_url' => 'images/cards/card9.png',
                'description' => 'A nude youth sits astride a tempered lion, her body veiled by locks of long black hair. Her steed’s gentle posture and expression reveal his obeisance, and her gentle posture and expression reveal her authority. The lion will not rage and destroy while under her care. He will not devolve into chaos or mindlessness, and he won’t throw her. As long as she is poised and present, he will serve her well. Strength invites you to bring mindful awareness to fear-based thoughts and behaviors so you can achieve your full potential. The wild animal within you wants to fight or flee when faced with danger, and it’s up to you to control that impulse so you can make the best possible decision. Our primitive brains often view surmountable challenges as mortal threats, and it’s up to us to apply our reason and self-control to shrink those threats to their proper size. Strength wants to assure you that you have the poise, discipline, and grit needed to navigate tough situations successfully. The more mindful awareness you bring to your thoughts and emotions, the better you’ll be at making choices that serve you well long term.',
            ],
            [
                'id' => '10',
                'name' => 'THE HERMIT',
                'image_url' => 'images/cards/card10.png',
                'description' => 'An elder woman stands at the peak of a rocky mountain, solitary and content. Her simple attire reflects her spartan lifestyle, her greying hair shows her age, and her penetrating stare shows the depth of her wisdom. She climbed the mountain alone to discover herself, and the fire she wields reveals what she has learned. She remains in blissful solitude because her greatest desire is to touch Truth forever and always. The Hermit calls you to look deep within yourself and discover the Truth that lies there. Something fundamental and paradigm-shifting waits in the shadows of your psyche, begging to be brought into the light. Set aside time for journaling, meditation, and silent reflection. Refrain from filling up your dance card with social engagements or tackling new projects and responsibilities. Dedicate whatever free time you have to learn more about who you are within the context of the vast universal organism. Let yourself transcend physicality and time through self-induced trance states (if that’s your thing, of course). Don’t be remiss in prioritizing yourself—the long-term payoff will be well worth any short-term sacrifices you make.',
            ],
            [
                'id' => '11',
                'name' => 'THE WHEEL OF FORTUNE',
                'image_url' => 'images/cards/card11.png',
                'description' => 'A dancer swirls the fabric of the universe around her, miming the movements of myriad things. Eyes closed, she cedes herself to the endless sway, confident in the integrity of her gate. Each of her undulations is essentially perfect—there are no right or wrong steps when her Genius leads the dance. The dharma wheel helps her see the turning of the world for what it is: an endless waltz that leads to deeper understanding. What happens now is neither good nor bad. Rather, it paves the way toward greater integrity and understanding. Learn from your struggles and appreciate tranquility when it visits. Don’t let hardship displace you—the further you move from the center of the wheel, the harder it becomes to stay on it. Understand that you are part of the cosmic dance, and depending on your perspective, today’s hurricane could be tomorrow’s blue sky.',
            ],
            [
                'id' => '12',
                'name' => 'JUSTICE',
                'image_url' => 'images/cards/card12.png',
                'description' => 'A yellow-robed arbiter balances two cairns before a muddy landscape. A fresh twig is the beam to her finger’s fulcrum, and the point at which they meet determines the strength of their equilibrium. She’s confident in her ability to keep the rocks aloft and confident in the laws of gravity that keep them stable. Her gaze is bold and penetrating—she invites your challenge, and she relishes the opportunity to arrive at a compromise with you. It’s time for you to consider the dynamic interplay between yourself and your environment, and how well you’re able to bridge the desires and demands of each. Are you a doormat who gives in at the first sign of conflict, or do you steamroll over everyone and everything to get your way? To achieve true harmony, you must learn to navigate the choppy waters of conflict so you can reach a suitable compromise with your environment. If you refuse to compromise, you’ll quickly find yourself isolated and alone, and if you refuse to advocate, you’ll be dismissed and taken advantage of at every turn.',
            ],
            [
                'id' => '13',
                'name' => 'THE HANGED MAN',
                'image_url' => 'images/cards/card13.png',
                'description' => 'A young woman hangs upside down in midair, her arms crossed over her chest. She is nude and exposed to the elements, but appears unmoved by them. Her golden hair is a curtain that obscures the landscape, and her closed eyes affirm her gentle acceptance of her position. Far above the landscape, she transcends the narrative that brought her to her knees. The Hanged Man invites you to set your expectations aside and surrender to the reality before you. Some things are simply larger than your will and your desire for control, and the sooner you realize this, the better things will become. Admitting defeat takes strength, and choosing defeat is the highest form of sacrifice. Take solace in knowing that your relinquishment is not in vain—it will fill you with the humility and vulnerability needed to absorb universal wisdom and merge with the divine.',
            ],
            [
                'id' => '14',
                'name' => 'DEATH',
                'image_url' => 'images/cards/card14.png',
                'description' => 'Molten lava spreads and hardens over a once fertile field. Smoke rises from the torched landscape, and a thick screen of ash obscures the horizon. In the foreground, a lone seedling springs forth, promising rebirth and renewal in the coming days. An era is ending for you, but an era is beginning, too. Don’t cling to the past lest you stifle the future that wants to be born. Accept what’s passing, and let it pass. Believe in the promise of the seed that destruction planted, and nurture it with all of your heart. If you refuse to release what’s moving away from you, you’ll add unnecessary suffering to your pain. Take the time you need to grieve your loss, but don’t forget that brighter days await you on the other side.',
            ],
            [
                'id' => '15',
                'name' => 'TEMPERANCE',
                'image_url' => 'images/cards/card15.png',
                'description' => 'A red pitcher tips a cascade of milk into a river of honey, infusing its sweetness with fullness. An ocean of milk and honey ripples in the background, pulsing with excitement over its marriage. An open hand extends itself to receive the bounty of the blend, eager to be blessed with the wholeness that consuming it provides. This is no ordinary liquid: it is manna from heaven, and it purifies everything it touches. The time has come for you to gather your parts and make yourself whole again, Beauty. What was lost in fragmentation can be regained and augmented in reconstruction; like kintsugi, your mended self is more beautiful than your immaculate self. Leave off striving for perfection and reclaim what shame, pain, and guilt stole from you. Recollect your failures, your regrets, your fears, and your trials and integrate them so you might see yourself for who you truly are. This is how you heal. This is how you become powerful. This is how you channel your Genius and grant her dominion over the landscape of Self.',
            ],
            [
                'id' => '16',
                'name' => 'THE DEVIL',
                'image_url' => 'images/cards/card16.png',
                'description' => 'A being bound in a lifeless tree trunk balls her fists and screams in rage, pain, and frustration. The muddled sky behind her mirrors her confusion—she is lost to herself and everyone around her. The landscape is barren and empty, so no one will hear her screams and pleas. She is trapped in a hell of self-destruction and illusion, and cannot see the pathway to freedom. Your Genius is buried beneath a mountain of fear and illusion, and it’s time for you to do the hard work of freeing yourself. Release any attachments that are harmful to you, even if they provide pleasure or relief in the short term. Don’t let your fear keep you locked in patterns of abuse, deception, and denial. Face the truth as if your life depended on it, and be brave enough to make the hard changes it begs you to make. All it takes is a single seed planted with a self-loving intention to begin this process. Recognize that you are worthy of health, happiness, and independence and that you’re strong and competent enough to create these conditions for yourself. The first day of the rest of your life begins today: put down what hurts, and pick up what heals.',
            ],
            [
                'id' => '17',
                'name' => 'THE TOWER',
                'image_url' => 'images/cards/card17.png',
                'description' => 'A lone tower burns in an empty field. Plumes of smoke rise from the growing flames like unseen distress beacons. Soon enough, ash will obscure the shrinking slivers of blue sky that remain. The tower will be reduced to nothing more than rubble and cinder, and walls once strong and impenetrable will cease to be. All will be dark, charred, unrecognizable. It appears that you’re having a “tower moment,” Beauty, and the best thing you can do is ride it out and wait for the ash to settle. Give yourself the time and space you need to grieve what’s leaving. Accept your powerlessness and take care of yourself. Reach out to loved ones for help, guidance, and support. Don’t judge yourself for being upset, and don’t expect yourself to bounce back immediately. You will rise from the ashes with renewed strength, conviction, devotion, and vigor soon enough. This is merely a season of your life and one that’s making room for growth and renewal to come. It will likely be tough to navigate, but it will show you how strong, capable, and resilient you can be.',
            ],
            [
                'id' => '18',
                'name' => 'THE STAR',
                'image_url' => 'images/cards/card18.png',
                'description' => 'A brilliant star shines its light outwards in all directions. Some of its beams form a luminescent waterfall that cascades into the lake below. In the distance, craggy mountains offset the gentleness of the scene. Bathed in purifying light, the water in the lake ripples and glows like the promise of health and renewal. A time of darkness and confusion is ending for you; what once was lost has been reclaimed and given new life. Your energy, once exhausted, is restored. Your Genius, once fled, has returned. Your luminous essence has revivified itself and your mind, heart, and body are one. Show deep gratitude for the health that’s blooming within you, and it will keep you in good company. Hold space for yourself to grow stronger before you leave the sanctuary of your healing to return to the world. Appreciate the gift of hope the Star has given you, and do your best to honor it in everything you think, feel, and do. Remember who you are and why you came, and bring that knowledge with you wherever you go.',
            ],
            [
                'id' => '19',
                'name' => 'THE MOON',
                'image_url' => 'images/cards/card19.png',
                'description' => 'A full moon floats regally before the backdrop of a pitch-black sky. Thin, wispy clouds drift past it, momentarily obscuring its reflected luminescence. Its craters and impact points are visible, but distance hides their details. The moon is simple, haunting, and enduring. Though it appears almost every night, it hides many secrets. Be mindful of yourself and your environment, Beauty—things are not what they seem. So much of what dances around you are illusions, and you must challenge yourself to figure out what’s true and what’s false. The moon hides your shame and your pain in her shadow, and reveals them when you are weakest. To intuit its wisdom, you must recognize the figments your vulnerability casts to obscure your reality. The Moon’s key unlocks the door that leads to self-understanding, and it will reveal precisely what needs healing when you pay attention in the moments it reflects your hidden self.',
            ],
            [
                'id' => '20',
                'name' => 'THE SUN',
                'image_url' => 'images/cards/card20.png',
                'description' => 'The sun smolders boldly, a glowing orange orb in a bright blue sky. Its surface shows where it burns black and red and white hot, a testament to its awesome power. There is no illusion, no sleight-of-hand here. The sun is what it is: the food that nurtures all life on Earth. Rejoice, my dear—the Sun shines on you. Blessed by the beneficence of its rays, you may walk your path in sheer joy. Abundance is all around you, ripe and ready for the picking. Simply recognize the gifts of the Sun, and your life will instantly improve. There’s no need to plumb your depths or to peek behind curtains at this time. All you need to know is right in front of you, easily visible and understandable. Find presence in the moment, appreciate small gifts, delight in the everyday, and permit yourself to transcend worry and care. Everything is going to be all right—you need only believe it.',
            ],
            [
                'id' => '21',
                'name' => 'JUDGEMENT',
                'image_url' => 'images/cards/card21.png',
                'description' => 'A journeyer stands before a streaming waterfall, admiring it with awe and reverence. This is the Fool nearing the end of his journey, ready and willing to move beyond restrictive notions of self and into full integration. As he prepares to plunge through transformative waters and into the vast unknown, he takes a moment to find presence and balance. His shift is a spiritual one, and once he crosses the threshold, he will never be the same. You’ve had as many experiences as you need to understand this length of your journey; this garden has no more to teach you. You’ve experienced as much joy and elation as you have pain and suffering, and you’ve also felt every being state in between. It’s time for you to move into the next theater of experience so your being may grow and expand. Don’t linger too long at the threshold. Be not afraid of what awaits you on the other side, because it will undoubtedly serve you well. Walk through, and be remade. Welcome this newest incarnation of being with open arms.',
            ],
            [
                'id' => '22',
                'name' => 'THE WORLD',
                'image_url' => 'images/cards/card22.png',
                'description' => 'An old woman floats in a placid sea, eyes closed and mouth curled into a gentle smile. She surrenders to the ebb and flow of the tide, becoming one with it. She feels herself both within her body and without her body; she is physical and non-physical at the same time. Released from the fog of her ignorance, she is at peace. You’ve reached the phase of completion, integration, and wholeness. Embrace every part of yourself with love, even the parts that inspire fear or shame. In doing so, you free yourself from the tyranny of your shadow so your Genius might come forth and express itself fully. Take a moment to breathe and process every step that brought you to where you are today. Honor your struggles, and celebrate your triumphs. You are the totality of your experience just as you are the totality of all that exists. Everything is connected. So it is.',
            ],
            [
                'id' => '23',
                'name' => 'ACE OF WANDS',
                'image_url' => 'images/cards/card23.png',
                'description' => 'A desert dweller holds a flaming branch aloft as awe, triumph, and fear course through him. He has just harnessed fire, and so has unlocked boundless creative potential within himself. There’s a passion or desire within you that’s just beginning to take shape, and it wants you to do what you can to kindle it into its form. Your Genius emerges from the void to ask this question—what hidden yearning is being born within you?',
            ],
            [
                'id' => '24',
                'name' => 'TWO OF WANDS',
                'image_url' => 'images/cards/card24.png',
                'description' => 'Two torches reveal the outline of a dark and distant mountain. Their light can only extend so far; beyond a certain distance, there’s naught but shadow. Now is the time for you to consider where you want to go and plot the best course you can conceive of to get there. There’s no way for you to anticipate everything that awaits, but this is no matter: it’s better to make a half-baked plan than it is to make no plan at all.',
            ],
            [
                'id' => '25',
                'name' => 'THREE OF WANDS',
                'image_url' => 'images/cards/card25.png',
                'description' => 'A traveler stands betwixt two staves and gazes at a third in the distance. The mountain’s peak is now a hill’s mound, and everything is illuminated. Your goal is within reach, Beauty—apply your energy and effort to the task at hand. How far you’ve come already is all the proof you need to convince yourself that you can go the distance. Center yourself and put one foot in front of the other—you’ll end up where you’re meant to be.',
            ],
            [
                'id' => '26',
                'name' => 'FOUR OF WANDS',
                'image_url' => 'images/cards/card26.png',
                'description' => 'Kinsmen stand and admire the sturdy frame they built together. Their clasped hands reflect their unity, solidarity, and satisfaction: they’ve created something beautiful and foundational, and now they’re ready to launch into the future together. This card invites you to consider the state of your foundations: where are they weak? Where are they strong? What can you do (and with whom) to create a platform for happiness, growth, and success?',
            ],
            [
                'id' => '27',
                'name' => 'FIVE OF WANDS',
                'image_url' => 'images/cards/card27.png',
                'description' => 'Two warriors spar on a mountaintop in the purple light of dawn. Their combat is a dance—there will be no winner or loser in this engagement. Though a conflict you’re embroiled in drains your energy, it leaves you largely unscathed. Rather than view it as a nuisance, use it as a way to prepare for real adversity: what you discover now will help you when a true battle presents itself. Allow the wisdom you gain through practice to serve you well in the future.',
            ],
            [
                'id' => '28',
                'name' => 'SIX OF WANDS',
                'image_url' => 'images/cards/card28.png',
                'description' => 'The vanquished offers gifts to the winner of the day. The champion knows that her triumph is ephemeral—such victories often pave the way for future defeats. She accepts her prize with wisdom and humility and grounds herself in the inevitability of change. When this card appears in a reading, it encourages you to enjoy your time in the sun without resting too much on your laurels. Make merry today and face tomorrow with open eyes, and always remember to honor your competitors in victory and defeat.',
            ],
            [
                'id' => '29',
                'name' => 'SEVEN OF WANDS',
                'image_url' => 'images/cards/card29.png',
                'description' => 'Staffs strike out at our protagonist from all directions. Although a blow or two tests her balance, she bravely holds her ground. This card indicates that although you’re beset on all sides by unexpected complications, you’re more than capable of working through them. Stand up and face whatever forces threaten to throw you off course. Believe that you have the strength, ability, and brilliance to overcome, come what may. Sometimes winning is simply refusing to back down.',
            ],
            [
                'id' => '30',
                'name' => 'EIGHT OF WANDS',
                'image_url' => 'images/cards/card30.png',
                'description' => 'Eight spears speed toward the blinding light of the rising sun. Nothing stands between them and their target, so there’s no doubt that they will hit their mark. Things are moving very quickly for you now, and it’s unlikely that they’ll slow down anytime soon. Keep your wits about you, maintain your focus, and manage your responsibilities well. Follow the natural flow of the energy that animates you, and you’ll go very far, very fast.',
            ],
            [
                'id' => '31',
                'name' => 'NINE OF WANDS',
                'image_url' => 'images/cards/card31.png',
                'description' => 'A sentinel guards a vast territory upon which the sun no longer shines. His grip is strong, but his body is weary; he hides himself so his challengers don’t know how weak he truly is. You’ve invested everything you have into your pursuit, and you don’t have much left to give. Find ways to care for yourself as you face these last few hurdles. Rest and recuperate; breathe. You can do this. Keep showing up even when it’s hard.',
            ],
            [
                'id' => '32',
                'name' => 'TEN OF WANDS',
                'image_url' => 'images/cards/card32.png',
                'description' => 'A laborer carries a weighty load through seeded fields. Her intentions are genuine and her purpose is clear, so she’s able to move forward one step at a time. Though you have many duties and responsibilities, you are connected to your community. You give in ways that are valuable and necessary, and you’re deeply appreciated for everything you offer. Prioritize what’s most important and release what’s unnecessary. Save your energy for that which enriches your life and the lives of those around you.',
            ],
            [
                'id' => '33',
                'name' => 'PAGE OF WANDS',
                'image_url' => 'images/cards/card33.png',
                'description' => 'A mage captures fire from a smoldering branch and wields it with his fingertips. The flame is small but promising—it will grow larger than his wildest dreams if he can learn how to master it. You’ve made progress in bringing a dream into being, but its expression is still fragile. Will you let it die, or will you summon your nerve and feed it what it needs to blossom? Let this flame light a passion within you that carries you forward and grants you the courage to keep creating.',
            ],
            [
                'id' => '34',
                'name' => 'KNIGHT OF WANDS',
                'image_url' => 'images/cards/card34.png',
                'description' => 'A young woman frolics barefoot with a torch in her hand. An ill-timed stumble could set the field ablaze, but she’s so wrapped up in her dance that she can’t see any danger. This card suggests that there’s a river of energy coursing through you that’s both strong and wild. Try not to let it carry you away, because it could quickly become a force for destruction. Instead, find proper channels for it to move through. Keep your wits about you and reign yourself in when you sense you’re being reckless. With great power comes great responsibility—take care of the force that’s coursing through you.',
            ],
            [
                'id' => '35',
                'name' => 'QUEEN OF WANDS',
                'image_url' => 'images/cards/card35.png',
                'description' => 'A ruler stands before a charred expanse, her hand stretched toward the sky. Her fiery crown proclaims her pride and authority, and her place in the landscape suggests that she’s unmatched. Now is the time for you to step into your full dynamic power with confidence and authenticity. Let your light shine brightly so it can find others to share its brilliance with. If you can channel your natural sparkle and charisma, you’ll always be among friends.',
            ],
            [
                'id' => '36',
                'name' => 'KING OF WANDS',
                'image_url' => 'images/cards/card36.png',
                'description' => 'A hiker looks out from the summit of a mountain, his body engulfed in flames. He has become the element he wields, so it cannot burn or wound him. You have reached the pinnacle of your creative power, and there’s nothing that can stop you. Follow this flow wherever it leads. Resist the urge to stifle or shrink yourself. Now is not the time to be diplomatic; it’s the time to let your yearning burn bright and true. There will be plenty who disapprove—let them. Follow your desires without fear or apology.',
            ],
            [
                'id' => '37',
                'name' => 'ACE OF CUPS',
                'image_url' => 'images/cards/card37.png',
                'description' => 'An otherworldly being lifts a lone chalice from the ocean. An endless well of water bubbles up and over its brim, filling the ocean below to its fullest capacity. When this card appears in a reading, it advises you to let your emotions flow. Open yourself fully and completely and feel the depth of your experience. Let love rise like the waters of a sudden spring and feel that you are a part of everything that is. If you can open wide enough, happiness will find you.',
            ],
            [
                'id' => '38',
                'name' => 'TWO OF CUPS',
                'image_url' => 'images/cards/card38.png',
                'description' => 'Two entwined cups balance on a precipice, and their pairing allows them to straddle a razor’s edge without tipping or faltering. You are blessed with the opportunity to create a partnership based on mutual trust, effort, and respect. If you offer care and integrity without attachment, you will inspire the same. Be tender, nurturing, supportive, and strong. Cultivate this relationship so it’s a lasting one, and you may rely on it in times of ease and hardship.',
            ],
            [
                'id' => '39',
                'name' => 'THREE OF CUPS',
                'image_url' => 'images/cards/card39.png',
                'description' => 'Kindreds laugh and embrace; they have neither worries nor cares, for together, they are free. Now is the perfect time to celebrate the joy of life with friends and loved ones. Each person your Genius touches is better for it, so reach out eagerly and often. Let others build you up, and let yourself build others up too. Lend an ear and offer your open arms, and you’ll understand what it means to be alive.',
            ],
            [
                'id' => '40',
                'name' => 'FOUR OF CUPS',
                'image_url' => 'images/cards/card40.png',
                'description' => 'A young woman attends to the row of cups before her as another cup materializes above her. She extends her hand to shield her eyes from the sun’s brightness, unknowingly obscuring her vision of the cup that awaits her embrace. The appearance of this card indicates that you are blind to an opportunity that’s offering itself to you. Shift your focus from what’s in front of you to what lies beyond: there’s a boon in the distance that you can scarcely imagine, but if you sharpen your vision, you’ll see it clearly enough to invite it in.',
            ],
            [
                'id' => '41',
                'name' => 'FIVE OF CUPS',
                'image_url' => 'images/cards/card41.png',
                'description' => 'Vulnerable and bare, a mourner weeps. The cups before her spill rivers of tears onto the green earth, and the cups above her promise better days to come. You’ve suffered a loss, and it’s shaken you. Don’t rush this experience: take the time you need to grieve. Honor your loss and let yourself feel the pain it’s created within you. Let your emotions move through you so you can grow from this experience. The sun will shine on you again, and when it does, you’ll be ready to receive its warmth precisely because you took the time you needed to process.',
            ],
            [
                'id' => '42',
                'name' => 'SIX OF CUPS',
                'image_url' => 'images/cards/card42.png',
                'description' => 'A child runs towards the ocean and away from a trail of cups that extend into his present. This card invites you to reconsider past events from your current perspective: what’s different now that you’ve grown? What needs healing and what needs releasing? Take some time to comfort the wounded child within you so you can create space for happy memories to thrive. Take some time to recall moments when you were challenged, moments when you were loved, and moments when your strength lifted you up to new heights.',
            ],
            [
                'id' => '43',
                'name' => 'SEVEN OF CUPS',
                'image_url' => 'images/cards/card43.png',
                'description' => 'A rising mist obscures the focus of the gazer. Everything is muddled, washed out, and uncertain, and his power to choose is compromised. When this card appears in a reading, it indicates distraction and confusion. Turn away from that which feeds illusion and turn towards that which is constant and true. If what’s tempting doesn’t align with your deepest values, it’s no good. Hold to what matters most, and you won’t be led astray.',
            ],
            [
                'id' => '44',
                'name' => 'EIGHT OF CUPS',
                'image_url' => 'images/cards/card44.png',
                'description' => 'A journeyer releases eight cups into the brackish sea, relinquishing them to the deep. The moment is bittersweet, but she remains firm in her decision to let go and move on. The time has come for you to relinquish the hurt and anguish that’s keeping you from moving forward. You’ve felt what needed to be felt and you’ve processed what needed to be processed, so you can learn nothing more from your pain. Set it aside and embark on the next phase of your journey—your future attends you.',
            ],
            [
                'id' => '45',
                'name' => 'NINE OF CUPS',
                'image_url' => 'images/cards/card45.png',
                'description' => 'A free being rejoices where the sea meets the shore. Her expression is one of pure bliss, and happiness radiates throughout her entire body. You’re entering a period of joy and gratitude, one that promises to be a boon to anyone who crosses your path. Share your goodwill. Be light and fluid. Give yourself up to the flow. You have so much to give, and there’s so much joy waiting for you in the giving of it. Surrender to your happiness and let it thrive!',
            ],
            [
                'id' => '46',
                'name' => 'TEN OF CUPS',
                'image_url' => 'images/cards/card46.png',
                'description' => 'Three palms touch beneath an arch of chalices and prismatic light. The closeness of the trio is evidenced by their proximity; they trust that they will be held, nurtured, and loved by each other. Familial bliss is yours, my dear. All you need to do is choose the relationship. Be nurturing rather than critical. Be trusting rather than suspicious. Choose to show love even when you’re uncertain and afraid, and love will meet you.',
            ],
            [
                'id' => '47',
                'name' => 'PAGE OF CUPS',
                'image_url' => 'images/cards/card47.png',
                'description' => 'A curious child holds a chalice aloft, her face illuminated by her brilliant smile. She opens herself to emotion and experience, and she feeds her inquisitive nature in conversation and observation. Be curious about the world around you, Beauty. Seek to understand. See the possibility of each interaction. Dream. And dream. And dream. And when the clarion call of creativity visits, drift down from your castle in the clouds and bring your beautiful visions into being.',
            ],
            [
                'id' => '48',
                'name' => 'KNIGHT OF CUPS',
                'image_url' => 'images/cards/card48.png',
                'description' => 'A young man prostrates himself in genuine devotion. He has finally found a cause worth living for and dedicates himself to it completely. Without purpose, conviction, and fidelity, life is meaningless. What are your reasons for living, Beauty? What fills your heart with truth and intention? Discover what means more to you than anything else and serve it faithfully. When you align with your Genius, your path is revealed.',
            ],
            [
                'id' => '49',
                'name' => 'QUEEN OF CUPS',
                'image_url' => 'images/cards/card49.png',
                'description' => 'A ruler stands at a precipice holding a round mirror. Reflected within it is a single chalice, the focus of her contemplation and consideration. This card invites you to enter into a period of self-reflection and depth-seeking. Something within you longs to be brought to the surface, and it’s up to you to plumb your depths and find where it’s hiding. This treasure can bring both joy and sorrow—prepare yourself for the truths it will reveal.',
            ],
            [
                'id' => '50',
                'name' => 'KING OF CUPS',
                'image_url' => 'images/cards/card50.png',
                'description' => 'A ruler commands the ocean beside him with a gentle, flexible hand. His kindliness is his strength—one cannot wield water with closed fists. When offering advice, do so with compassion. If seeking advice, consult those who are tempered in their wisdom. A thoughtful word delivered with great care can be all that’s needed. Don’t underestimate the power of empathy and support in your interactions and relationships with others.',
            ],
            [
                'id' => '51',
                'name' => 'ACE OF SWORDS',
                'image_url' => 'images/cards/card51.png',
                'description' => 'A heavenly hand clasps the hilt of a sword and pulls it from its bedrock lodgings. There is no brawn, no force of strength on display here. Instead, there is steady confidence, deep concentration, and sharp awareness. A brilliant idea tickles the periphery of your subconscious, begging to be perceived and named. Know with everything you are that you are its chosen recipient, and it will strike you like a bolt from the blue.',
            ],
            [
                'id' => '52',
                'name' => 'TWO OF SWORDS',
                'image_url' => 'images/cards/card52.png',
                'description' => 'A young girl prays at the edge of the world with her earthly eyes closed and her third eye open. She searches deep within for an answer to her question and the intricate order of the cosmos provides it. The appearance of this card indicates that you’ve pondered a choice for quite some time, and the only thing left to do now is to trust the path your reasoning guides you to. It is not you, but the entire universe, that makes this decision: take the first step knowing that your choice is affirmed.',
            ],
            [
                'id' => '53',
                'name' => 'THREE OF SWORDS',
                'image_url' => 'images/cards/card53.png',
                'description' => 'Three swords pierce the flaming heart of a weeping woman. Her tears quench the fire of her pain, making it possible for her to heal, forgive, and move forward. Though you may feel the fresh sting of upset and insult, trust time and grieving will heal what you have suffered. In the meantime, give yourself the time and space you need to feel your emotions fully. Give your pain safe and restorative outlets so you may release it when the time is right.',
            ],
            [
                'id' => '54',
                'name' => 'FOUR OF SWORDS',
                'image_url' => 'images/cards/card54.png',
                'description' => 'A yogi levitates above a stream at dawn. The rising sun strikes the blade at his shoulder, illuminating the Truth he touches through developing his mental focus and acuity. Now is a time for rest, reflection, and awareness. Refrain from beginning new projects and step away from tasks that don’t need your immediate attention. Breathe. Let your mind settle like a placid lake. When it’s time to move again, you’ll know.',
            ],
            [
                'id' => '55',
                'name' => 'FIVE OF SWORDS',
                'image_url' => 'images/cards/card55.png',
                'description' => 'A warrior places the tip of his blade at the base of his chin and meditates on the consequences of inflexible righteousness. An innocent mourns the fallen in the background; her prayer and focus give them peace. This card invites you to consider possible fallout before you enter the fray: is what you stand to gain worth risking all that you might lose? Remember that every time you hurt someone, you’re hurting yourself as well.',
            ],
            [
                'id' => '56',
                'name' => 'SIX OF SWORDS',
                'image_url' => 'images/cards/card56.png',
                'description' => 'A dinghy approaches a distant shore at sunrise. Six swords are its cargo, and hope is the reason for its journey. A benevolent force is leading you to greener pastures, Beauty. The time of needless suffering is past, and the time of new growth and possibility is nigh. Remember why you’re moving on and let your reasons push you forward when your emotions try to hold you back. Growth isn’t easy, but it is necessary—do what you must to open the book on the next chapter of your becoming.',
            ],
            [
                'id' => '57',
                'name' => 'SEVEN OF SWORDS',
                'image_url' => 'images/cards/card57.png',
                'description' => 'A traveler reaches the hill’s pinnacle that marks his village’s boundary. No one knows that he is going, and no one knows that he is never coming back. You’re being called to take what you can and use it to reinvent yourself. We must sometimes make hard choices in the service of our Genius, choices that hurt our relationships in the short term but strengthen them in the long term. It’s okay to do what you must to survive.',
            ],
            [
                'id' => '58',
                'name' => 'EIGHT OF SWORDS',
                'image_url' => 'images/cards/card58.png',
                'description' => 'A circle of swords draws a barrier around a scarlet-cloaked seeker. She struggles to bring what she sees into focus; her confusion is a veil that hides her pathway to freedom. The beliefs you maintain about who you are and what you’re capable of are the only things holding you back. Release what you think is true about you and test the boundaries of your expression and potential. Beyond these limitations, you’ll discover your true form.',
            ],
            [
                'id' => '59',
                'name' => 'NINE OF SWORDS',
                'image_url' => 'images/cards/card59.png',
                'description' => 'Trapped in a mire, a worrier gnashes his teeth and clasps his neck in distress. Everything he doesn’t know, can’t predict, and can’t control are figments on the black landscape of his uncertainty. Though your troubles are many, their shape is largely imagined. How much energy do you spend conjuring scenarios that never come to pass? How might you redirect that energy toward making the best of the moment you’re in?',
            ],
            [
                'id' => '60',
                'name' => 'TEN OF SWORDS',
                'image_url' => 'images/cards/card60.png',
                'description' => 'A young woman lies motionless on the Earth, impaled by the tips of ten swords. Though she is leveled and lifeless now, she will rise again like the sun behind her. Your energy, ambition, vision, and motivation have flown, leaving you fully inert. Though painful, this moment fertilizes the field of future generativity. Lie fallow and learn from your loss. When your new day comes (as it inevitably will), begin again with hope, faith, and zeal.',
            ],
            [
                'id' => '61',
                'name' => 'PAGE OF SWORDS',
                'image_url' => 'images/cards/card61.png',
                'description' => 'A thinker bathes in the brilliant point of light above her. Her thoughts proliferate and the possibilities they bring are endless. You have access to an abundance of ideas, concepts, and insights, all of which promise brilliant results. However, you must hone and strengthen them before they can be applied. Do you have the focus and determination needed to shape them into formidable tools? If so, you’ll find a solution to every problem that arises.',
            ],
            [
                'id' => '62',
                'name' => 'KNIGHT OF SWORDS',
                'image_url' => 'images/cards/card62.png',
                'description' => 'A warrior elevates her blade to intimidate those who would cross her. She raises her free hand to beckon anyone brave enough to answer her challenge. You’re attuned to your inner instigator and are ready to defend your convictions if necessary. Use this energy to create and enforce the boundaries that ensure your autonomy, but be careful—if left unchecked, you could do yourself more harm than good.',
            ],
            [
                'id' => '63',
                'name' => 'QUEEN OF SWORDS',
                'image_url' => 'images/cards/card63.png',
                'description' => 'Balanced on a rock cairn that stretches to the sky, a queen attends to those who seek her counsel. She is poised and prepared to offer the advice she deems most reasonable, actionable, and true. This queen is ready and willing to show you the way if you’re ready and willing to hear what she has to say. Though you may not like it, her guidance is just what you need to overcome your most recent obstacles.',
            ],
            [
                'id' => '64',
                'name' => 'KING OF SWORDS',
                'image_url' => 'images/cards/card64.png',
                'description' => 'Perched on a rock ledge before a verdant mountainscape, a king surveys the vastness of his territory. He is confident in his ability to do just what he needs to ensure its flourishing, and he isn’t afraid to upset or disappoint others if he feels that his judgment is sound. The time has come for you to make some hard decisions, Beauty. Your kingdom is your responsibility, and you must do what you can to support its vitality. This may mean letting go of some things you’d rather not release, but if doing so supports the health of the whole, it’s advised.',
            ],
            [
                'id' => '65',
                'name' => 'ACE OF PENTACLES',
                'image_url' => 'images/cards/card65.png',
                'description' => 'A disembodied hand cradles a large pentacle before tall grasses and white clouds. The coin represents the potential for earthly manifestation, and the hand represents the promise of future materialization for whoever wields the coin. The time has come for you to plant seeds of intention that will grow and ripen into nourishing fruit. Seize this opportunity to start fresh and watch the efforts of your labor blossom into abundance.',
            ],
            [
                'id' => '66',
                'name' => 'TWO OF PENTACLES',
                'image_url' => 'images/cards/card66.png',
                'description' => 'A young woman juggles two pentacles before an undulating sea. Her eyes focus on the highest while her hand levitates the lowest, and her concentration is matched only by her adeptness. You are being invited to bring equilibrium to the various theaters of your life; devote too much time to one and the others will fall. Remain sharp and flexible, and be sure to give yourself adequate rest so you may balance your responsibilities effectively.',
            ],
            [
                'id' => '67',
                'name' => 'THREE OF PENTACLES',
                'image_url' => 'images/cards/card67.png',
                'description' => 'Three neighbors lay down stepping stones to create a path from the village to the mountains. They each bless their pentacle in different ways, but their intention for success is the same. This card indicates that you’d be well-served by the aid of trusted friends and colleagues at this time. Consider who will best support you and humbly request assistance—those you petition will likely be ready and willing to help.',
            ],
            [
                'id' => '68',
                'name' => 'FOUR OF PENTACLES',
                'image_url' => 'images/cards/card68.png',
                'description' => 'A lone man gazes out from the summit of the tallest mountain. He is the sole witness to his remarkable ascendency, so there’s no one with whom he might celebrate it. Stockpiling abundance to the exclusion of all else is a recipe for loneliness and disconnection. Let your wealth flow freely and worthily. Let it care for you and for others. Give it the opportunity to serve your highest good by letting it move through the world.',
            ],
            [
                'id' => '69',
                'name' => 'FIVE OF PENTACLES',
                'image_url' => 'images/cards/card69.png',
                'description' => 'A wayward swimmer struggles to keep their head above water. Five pentacles form a lifeline above them, and they must grasp the nearest one if they’re to have any hope of saving themselves. The resources you need may well be closer than you think, Beauty. Open yourself to abundance from unexpected sources. Be humble enough to ask for help. Finally, don’t turn down help when it’s offered—it may be the very thing you need to get back on track.',
            ],
            [
                'id' => '70',
                'name' => 'SIX OF PENTACLES',
                'image_url' => 'images/cards/card70.png',
                'description' => 'A passerby reaches out to help a drowning soul. The ring of pentacles above them shows the reciprocal nature of charity: what you give will return to you in time. You’re being invited to consider ways to show up in service to your community. What can you do to ease someone’s burden, brighten the future, and lend a hand? The world depends on selfless acts of kindness and the goodwill inspired by that kindness. What skills, passions, or abilities can your Genius offer to others?',
            ],
            [
                'id' => '71',
                'name' => 'SEVEN OF PENTACLES',
                'image_url' => 'images/cards/card71.png',
                'description' => 'A yogi stretches to pluck a fruit from her humble tree. She hesitates, however—she can see that it needs more time to suckle at the vine. You’ve planted and watered your seeds, but the time for harvest is not yet nigh. Use this time to replenish your strength and nurture what you’ve already created. Practice patience and learn the value of waiting. Don’t worry: your fruits will ripen soon.',
            ],
            [
                'id' => '72',
                'name' => 'EIGHT OF PENTACLES',
                'image_url' => 'images/cards/card72.png',
                'description' => 'An artisan pauses to admire her work before replicating its design once more. She understands that there is value in consistency, so she shows up every day to perfect her skills. The time has come for you to choose a worthy path and follow it with dedication. If you want to bring something into being, you must be willing to undergo the process of trial and error. You must also be wise enough to learn from your mistakes and apply that wisdom to your actions. Remember: small efforts every day yield incredible results over time.',
            ],
            [
                'id' => '73',
                'name' => 'NINE OF PENTACLES',
                'image_url' => 'images/cards/card73.png',
                'description' => 'A self-made woman stands in the garden of her abundance. The fruits of her generativity circle her head like a crown, and the sun at her back shines its blessings upon her. You are comfortable, successful, and promising of your own volition, Beauty. You had a vision and saw it through, and now you get to enjoy everything you’ve created. Don’t doubt your ability to make amazing things happen—you have what it takes to cultivate the life of your dreams.',
            ],
            [
                'id' => '74',
                'name' => 'TEN OF PENTACLES',
                'image_url' => 'images/cards/card74.png',
                'description' => 'A young girl marvels at her grandmother’s bounty. As her mother reaches out to receive it, she passes her daughter a coin in continuance of their family’s legacy. This card invites you to reframe your life and work: what heritage are you creating? What example are you setting? What gifts will you leave to the world when you are gone? What you do now lives after you. Make sure your efforts serve your values with integrity.',
            ],
            [
                'id' => '75',
                'name' => 'PAGE OF PENTACLES',
                'image_url' => 'images/cards/card75.png',
                'description' => 'A shadowed youth studies the shape of the sun so she might glean a way to pluck it down. She is clever, ambitious, and capable, and as long as she applies herself, she’ll achieve her aim. An opportunity for growth has worked its way into your orbit and it’s up to you to take advantage of it. Have faith in yourself and be willing to take a risk or two—this boon requires a bit of ingenuity and persistence to be actualized.',
            ],
            [
                'id' => '76',
                'name' => 'KNIGHT OF PENTACLES',
                'image_url' => 'images/cards/card76.png',
                'description' => 'An athlete pushes a giant boulder up an incline, his body and mind completely engaged in their task. One false step sends him careening downwards, but he’s undeterred: he puts his head down and he starts over with little fuss or fanfare. The time has come for you to dig deep and muster the strength needed to accomplish what you set out to achieve. Sometimes the only difference between success and failure is giving up too soon.',
            ],
            [
                'id' => '77',
                'name' => 'QUEEN OF PENTACLES',
                'image_url' => 'images/cards/card77.png',
                'description' => 'A ruler in a lush green robe cradles a pentacle in her palm. She has a confident and relaxed mien, one that shows she is at home in her authority and the landscape that supports her. You are being called to take care: of yourself, of your garden, and of all those who share it with you. A plant withers without nurturance; provide what’s needed where it’s needed, and health and vitality will follow.',
            ],
            [
                'id' => '78',
                'name' => 'KING OF PENTACLES',
                'image_url' => 'images/cards/card78.png',
                'description' => 'A king surveys the length and breadth of his kingdom in preparation for enjoying it completely. He has worked hard his whole life and he has served his people well, and now it’s time for him to partake of the sweetness of his work. Now that the day is done, take a moment to luxuriate in what you’ve created. Sink into its richness and fullness; let it fill you to the brim with its potency. The fruit of Genius creation is the best there is: sink your teeth in and relish it.',
            ],
            [
                'id' => '79',
                'name' => 'BACK',
                'image_url' => 'images/cards/card79.png',
                'description' => 'The Image of the card back',
            ]

        ];

        foreach ($payload as $entry) {
            Card::factory()->create($entry);
        }
    }
};
