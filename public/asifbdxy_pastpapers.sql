-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2025 at 06:22 PM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asifbdxy_pastpapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'ASHIF FOYSAL', 'ashiffoysal8818@gmail.com', '01783038818', 'Lorem', '2024-12-20 00:08:22'),
(2, 'ASHIF FOYSAL', 'ashiffoysal8818@gmail.com', '01783038818', 'lorem', '2024-12-20 00:08:31'),
(3, 'Mike King', '249083149', '249083149', 'Greetings and Happy New Year!\r\n\r\nThe 2025 membership for the International Trade Council is now open!\r\n\r\nRegister for membership before January 15, 2025, to unlock discounted 1-year Corporate Membership along with incredible free benefits, including 1 year of LinkedIn Business Premium and 1 Year Access to ADAMftd. \r\n\r\nMembership offers countless advantages, from exclusive networking opportunities to market research and trade tools tailored for success. \r\n\r\nExplore the many benefits waiting for you and secure your spot today: https://tradecouncil.org/membership-benefits/', '2025-01-03 06:11:55'),
(4, 'David Pavel', 'david@domainlions.net', '6615059573', 'Hi there,\n\nI hope you\'re well. I\'m excited to share that mypastpaper.com is now available—it could be a powerful asset for boosting your brand’s online presence.\n\nFor more details or to submit an offer, please visit: http://domainlions.net/domains/mypastpaper.com?id=3gtv\n\nFeel free to reply if you have any questions.\n\nKind regards,\n\nDavid Pavel\nDomain Lions\n+1 661 505 9573', '2025-02-18 02:42:35'),
(5, '813356720', '813356720', '813356720', 'Hi Mypastpapers,\n\nMost business owners pour money into marketing that doesn’t work. They run ads, post on social media, and hope for the best—only to be disappointed by the results. \n\nThe problem? They’re relying on vague branding tactics instead of proven strategies.\n\nDan Kennedy calls this the “ADHD approach to marketing”—jumping from one shiny tactic to another without a clear, measurable plan.\n\nBut there’s a better way: Direct-Response Marketing.\n\nThis approach focuses on generating real, measurable results, like leads, sales, and conversions. Here’s how you can start applying it today:\n\nStep 1: Speak Directly to Your Audience\n\nOne of Dan’s key teachings is this: “If you’re speaking to everyone, you’re speaking to no one.” Direct-response marketing works because it’s personal.\n\nFor example:\n\nA company selling weight loss supplements doesn’t just target “everyone who wants to lose weight.” Instead, they target busy moms who want to shed pounds quickly after having kids.\n\nA financial advisor doesn’t market to “everyone interested in saving money.” They craft campaigns for high-income professionals nearing retirement.\n\nYour Action Step: Write down your audience’s specific demographics, challenges, and goals.\n\nStep 2: Use an Irresistible Call-to-Action\n\nEvery piece of marketing must tell the audience what to do next. Whether it’s “Download this guide,” “Sign up for a webinar,” or “Call now,” your call-to-action (CTA) should be clear and compelling.\n\nExample 1:\nA dental clinic offered a free teeth-whitening session for new patients. The clear CTA—“Call to schedule your free session today!”—resulted in a 200% increase in appointments.\n\nExample 2:\nA SaaS company ran ads with the CTA: “Get a 30-day free trial today.” The campaign boosted signups by 35%.\n\nStep 3: Track and Test Everything\n\nOne of Dan’s most famous quotes is: “You can’t improve what you don’t measure.” Direct-response marketing relies on tracking every aspect of your campaign.\n\nWhat’s your click-through rate?\nHow many leads did you generate?\nWhat’s your cost per acquisition?\n\nExample:\nA real estate agent ran Facebook ads targeting first-time homebuyers. By testing different headlines and images, they reduced their cost per lead by 50%.\n\nTomorrow, we’ll dive into the art of crafting offers your customers can’t refuse.\n\nTo your success,\nKevin\n\nWho is Dan Kennedy?\nhttps://books.forbes.com/authors/dan-kennedy/\n\n\n\n\nUnsubscribe: \nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-03-21 14:04:31'),
(6, '381635921', '381635921', '381635921', 'Hey Mypastpapers,\r\n\r\nImagine launching a product and selling out in 48 hours—without spending a fortune on ads. Sounds like a dream, right?\r\n\r\nThat’s exactly what happened to EcoStride, a sustainable sneaker brand. Instead of relying only on ads, they used a press release to get featured on Yahoo Finance, Google News, and 150+ media sites.\r\n\r\n✅ 11,400+ visitors in 5 days\r\n✅ 300+ sales before ads even started\r\n✅ 100% free organic traffic from media coverage\r\n\r\nAnd the best part? Writing a press release used to be time-consuming and difficult, but now EIN Presswire’s AI Press Release Generator makes it fast and effortless.\r\n\r\nJust enter your details, let AI craft a professional press release, and distribute it to top-tier media instantly.\r\n\r\nLaunch your next product the smart way.\r\n\r\nTry It Today: https://marketersmentor.com/sold-out-product-launch.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nTo your success,\r\nDevin\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-03-28 00:40:06'),
(7, '4742626', '4742626', '4742626', 'Dan Kennedy often uses a simple analogy to illustrate a common marketing mistake:\r\n\r\nImagine walking into a store and being swarmed by a salesperson who starts pitching everything they sell—refrigerators, running shoes, blenders—without once asking what you’re actually looking for. It’s frustrating, ineffective… and exactly what most businesses do in their marketing.\r\n\r\nInstead of speaking directly to prospects’ specific needs or concerns, most businesses blast the same generic message to everyone. And according to Dan, that’s a surefire way to water down your impact—and your profits.\r\n\r\nHe points to Weight Watchers as a prime example.\r\n\r\nThey serve two distinct types of customers:\r\n\r\nHealth Buyers – motivated by medical reasons, like a doctor’s orders or an upcoming surgery.\r\n\r\nEvent-Driven Buyers – focused on short-term goals, like fitting into a dress for a wedding or looking good for a vacation.\r\n\r\nThese two audiences have completely different motivations. One wants to avoid a health crisis. The other wants to feel confident on the beach. But for years, Weight Watchers hesitated to segment their leads and tailor their message accordingly—despite the fact that segmentation could’ve easily doubled their effectiveness.\r\n\r\nAnd this issue isn’t limited to weight loss companies.\r\n\r\nAt Magnetic Marketing, Dan Kennedy and his team have identified seven distinct interest categories among their audience—from wealth attraction to direct marketing and beyond. If they tried to send one message to all seven groups, they’d fail to deeply connect with any of them.\r\n\r\nDan compares this to politics: voters often care about one primary issue. Your leads are no different. Some are driven by fear. Others by ambition. And others by a very specific short-term goal.\r\n\r\nConsider three different prospects in the finance space:\r\n\r\nOne fears running out of money in retirement.\r\n\r\nAnother wants to protect wealth for their grandchildren.\r\n\r\nA third wants to maximize investment returns.\r\n\r\nA single message trying to appeal to all three ends up resonating with none of them.\r\n\r\nThat’s why segmentation is so powerful—and profitable.\r\n\r\nBy tailoring messages to meet prospects where they are mentally and emotionally, businesses instantly build trust, create relevance, and position themselves as the only solution that truly gets the customer.\r\n\r\nDan outlines a simple framework for doing this:\r\n\r\n1.Use a Self-Select Mechanism\r\nAsk your audience questions like:\r\n“Are you looking to grow your wealth?”\r\n“Do you want to protect your assets for your family?”\r\n\r\n2.Tailor the Follow-Up\r\nOnce they identify their concern, follow up with stories, testimonials, and offers that directly address it.\r\n\r\n3.Watch Response Rates Soar\r\nA personalized message turns cold leads into warm conversations—and buyers.\r\n\r\nDan stresses this strategy works in every industry. He’s seen it boost performance in colleges, financial firms, info-product businesses, and even local service providers.\r\n\r\nTake colleges, for example. A dad wants to know his kid will get a job after graduation. A mom wants safety and solid food options. The student just wants to know they’ll make friends. Smart schools speak directly to each one—and enrollment improves dramatically.\r\n\r\nIf segmentation sounds like a mystery to you, Dan lays it all out in plain English in The No B.S. Guide to Direct Marketing. In it, he reveals:\r\n\r\nThe art of message-to-market match—how to say the right thing to the right people.\r\n\r\nHow to build self-select mechanisms that get prospects to reveal what they want—without a survey.\r\n\r\nHis exact process for creating segmented campaigns that maximize every dollar spent.\r\n\r\n������ Click Here to Claim Your FREE Copy of The No B.S. Guide to Direct Marketing + $6,193 in Exclusive Bonuses:\r\n\r\nhttps://marketersmentor.com/direct-marketing-book.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nDan Kennedy has watched businesses transform overnight simply by getting smarter with how they segment and speak to their audience.\r\n\r\nDon’t waste another marketing dollar talking to everyone. Start speaking to someone—the right someone—and watch your results soar.\r\n\r\nDedicated to Multiplying Your Income,\r\n\r\nIola\r\n\r\nP.S. Dan always reminds his clients:\r\nWhoever can spend the most to acquire a customer—wins.Segmentation helps you do just that… profitably.\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-04-09 08:44:50'),
(8, '6556396457', '6556396457', '6556396457', 'You might be surprised by how many people are overpaying for car insurance, and honestly, it’s not your fault.\r\n\r\nCheck here: https://udeal.uk   \r\n\r\nThe system is set up in such a way that many drivers end up paying far more than they should, even though there are simple ways to reduce those costs.\r\n\r\nIn fact, studies show that most drivers could be saving up to £300-£500 every single year by using the right strategies.\r\n\r\nCheck here: https://udeal.uk     \r\n\r\nAre you one of those drivers? ??\r\n\r\nIn the next few emails, I’ll share some insider tips on how you can avoid paying too much for your car insurance.\r\n\r\nCheck here: https://udeal.uk', '2025-04-12 03:33:07'),
(9, '261454029', '261454029', '261454029', 'Dan Kennedy often uses a simple analogy to illustrate a common marketing mistake:\r\n\r\nImagine walking into a store and being swarmed by a salesperson who starts pitching everything they sell—refrigerators, running shoes, blenders—without once asking what you’re actually looking for. It’s frustrating, ineffective… and exactly what most businesses do in their marketing.\r\n\r\nInstead of speaking directly to prospects’ specific needs or concerns, most businesses blast the same generic message to everyone. And according to Dan, that’s a surefire way to water down your impact—and your profits.\r\n\r\nHe points to Weight Watchers as a prime example.\r\n\r\nThey serve two distinct types of customers:\r\n\r\nHealth Buyers – motivated by medical reasons, like a doctor’s orders or an upcoming surgery.\r\n\r\nEvent-Driven Buyers – focused on short-term goals, like fitting into a dress for a wedding or looking good for a vacation.\r\n\r\nThese two audiences have completely different motivations. One wants to avoid a health crisis. The other wants to feel confident on the beach. But for years, Weight Watchers hesitated to segment their leads and tailor their message accordingly—despite the fact that segmentation could’ve easily doubled their effectiveness.\r\n\r\nAnd this issue isn’t limited to weight loss companies.\r\n\r\nAt Magnetic Marketing, Dan Kennedy and his team have identified seven distinct interest categories among their audience—from wealth attraction to direct marketing and beyond. If they tried to send one message to all seven groups, they’d fail to deeply connect with any of them.\r\n\r\nDan compares this to politics: voters often care about one primary issue. Your leads are no different. Some are driven by fear. Others by ambition. And others by a very specific short-term goal.\r\n\r\nConsider three different prospects in the finance space:\r\n\r\nOne fears running out of money in retirement.\r\n\r\nAnother wants to protect wealth for their grandchildren.\r\n\r\nA third wants to maximize investment returns.\r\n\r\nA single message trying to appeal to all three ends up resonating with none of them.\r\n\r\nThat’s why segmentation is so powerful—and profitable.\r\n\r\nBy tailoring messages to meet prospects where they are mentally and emotionally, businesses instantly build trust, create relevance, and position themselves as the only solution that truly gets the customer.\r\n\r\nDan outlines a simple framework for doing this:\r\n\r\n1.Use a Self-Select Mechanism\r\nAsk your audience questions like:\r\n“Are you looking to grow your wealth?”\r\n“Do you want to protect your assets for your family?”\r\n\r\n2.Tailor the Follow-Up\r\nOnce they identify their concern, follow up with stories, testimonials, and offers that directly address it.\r\n\r\n3.Watch Response Rates Soar\r\nA personalized message turns cold leads into warm conversations—and buyers.\r\n\r\nDan stresses this strategy works in every industry. He’s seen it boost performance in colleges, financial firms, info-product businesses, and even local service providers.\r\n\r\nTake colleges, for example. A dad wants to know his kid will get a job after graduation. A mom wants safety and solid food options. The student just wants to know they’ll make friends. Smart schools speak directly to each one—and enrollment improves dramatically.\r\n\r\nIf segmentation sounds like a mystery to you, Dan lays it all out in plain English in The No B.S. Guide to Direct Marketing. In it, he reveals:\r\n\r\nThe art of message-to-market match—how to say the right thing to the right people.\r\n\r\nHow to build self-select mechanisms that get prospects to reveal what they want—without a survey.\r\n\r\nHis exact process for creating segmented campaigns that maximize every dollar spent.\r\n\r\n������ Click Here to Claim Your FREE Copy of The No B.S. Guide to Direct Marketing + $6,193 in Exclusive Bonuses:\r\n\r\nhttps://marketersmentor.com/direct-marketing-book.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nDan Kennedy has watched businesses transform overnight simply by getting smarter with how they segment and speak to their audience.\r\n\r\nDon’t waste another marketing dollar talking to everyone. Start speaking to someone—the right someone—and watch your results soar.\r\n\r\nDedicated to Multiplying Your Income,\r\n\r\nAntoine\r\n\r\nP.S. Dan always reminds his clients:\r\nWhoever can spend the most to acquire a customer—wins.Segmentation helps you do just that… profitably.\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-04-17 04:16:10'),
(10, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\r\n\r\nAre you finding it hard to generate leads and attract more visitors to your website?\r\n\r\nShould I send over more in-depth solutions for you to review?\r\n\r\nWell wishes,\r\nLucy Johnson | Digital Marketing Manager\r\n\r\n\r\n\r\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-04-17 09:00:28'),
(11, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\r\n\r\nAre you finding it tough to get more website visitors and convert them into leads?\r\n\r\nWould you like me to share more detailed solutions with you?\r\n\r\nWell wishes,\r\nLucy Gordon | Digital Marketing Manager\r\n\r\n\r\n\r\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-04-17 23:30:19'),
(12, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\n\nDo you wish you could generate more leads and increase your website traffic effectively?\n\nWould you be interested in hearing more about it?\n\nWell wishes,\nLucy Gordon | Digital Marketing Manager\n\n\n\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-04-18 07:52:00'),
(13, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\n\nEmploy sustainable, white-hat tactics to secure 10 to 20 new, eager clients for your services.\n\nDo you mind if I share more about it?\n\nWell wishes,\nTommy  Zapes | Digital Marketing Manager\n\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-04-18 07:57:59'),
(14, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\n\nSecure 10 to 20 organic clients who are genuinely interested in your services through ethical marketing strategies.\n\nWould you be interested in hearing more about it?\n\nWell wishes,\nTommy  Zapes | Digital Marketing Manager\n\n\n\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-04-18 15:24:42'),
(15, '690626092', '690626092', '690626092', 'Dan Kennedy has seen it time and again—businesses, from small shops to multi-billion-dollar giants, making the same costly mistake: treating advertising, marketing, and sales as three separate, disconnected silos.\r\n\r\nAdvertising is outsourced to an agency. Marketing is tossed to an in-house team that often lacks real direct response chops. And sales? It’s left to operate on its own, often finding out about ad campaigns only after seeing them online or in a magazine.\r\n\r\nDan calls it what it is: an inefficient, expensive mess. And it’s more common than you’d think.\r\n\r\nHere’s the real problem with this disconnected approach:\r\n\r\nWhen advertising and marketing flood the funnel with unqualified leads, it doesn’t just waste money—it drives away your best closers. Instead of focusing on selling, they’re buried in garbage leads. Frustrated and underused, your top performers don’t stick around. They take their talent elsewhere, and you’re left with a mediocre team struggling to hit quota.\r\n\r\nDan Kennedy says the solution is simple—but rarely implemented: Integration.\r\n\r\nYour advertising, marketing, and sales efforts must work in harmony. When they do, your sales team can focus exclusively on what they do best—closing deals.\r\n\r\nHere’s how Dan recommends structuring the process:\r\n\r\nLead Generation brings in only high-quality, pre-qualified prospects.\r\n\r\nMarketing nurtures those leads, building trust and guiding them toward the buying decision.\r\n\r\nSales swoops in at the right moment to close, onboard, and potentially upsell or retain.\r\n\r\nDan often compares it to a world-class hospital. If you’re the Cleveland Clinic, you don’t have your top heart surgeon giving community lectures, screening patients, or sweeping floors. You want them in the operating room doing what only they can do—saving lives.\r\n\r\nThe same logic applies to your sales team.\r\nYour closers should be doing one thing: closing. Not chasing cold leads. Not doing follow-ups. Not dialing dead-end phone numbers. That’s a waste of elite talent.\r\n\r\nTo build a business like this, Dan emphasizes one core principle: start with the end in mind.\r\n\r\nAsk yourself:\r\n\r\nWhat does the ideal, sales-ready lead look like?\r\n\r\nWhat marketing process gets them to that point?\r\n\r\nWhat lead gen strategy attracts those people in the first place?\r\n\r\nOnce you have the answers, you reverse-engineer the system. That’s how you create a high-performance machine—where every part fuels the next, and your best people are doing their highest-value work.\r\n\r\nIf this approach resonates with you—and you’re ready to eliminate the disconnect in your business—Dan Kennedy lays it all out in his book,\r\n“The NO B.S. Direct Marketing for Non-Direct Marketing Businesses.”\r\n\r\n������ Click Here to Claim Your FREE Copy and Unlock Over $6,193 in Bonuses\r\nhttps://marketersmentor.com/direct-marketing-book.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nHere’s what you’ll get when you order today:\r\n\r\nThe Direct Marketing Toolkit – a playbook for building a system that unites lead gen, marketing, and sales.\r\n\r\n4-Hour Elite Marketing Intensive – featuring 21 of the world’s top marketers revealing their #1 ROI-driving strategy.\r\n\r\nClick here to get everything now →\r\nhttps://marketersmentor.com/direct-marketing-book.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nDedicated to Multiplying Your Income,\r\nDane\r\n\r\nP.S. Dan always says:\r\nWhoever can spend the most money to acquire a customer—wins.\r\nAn integrated system helps you do that with precision and profitability.\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-04-19 03:45:06'),
(16, 'NAEWTRER2435116NERTHRTYHR', 'nrdwcius@aurevoirmail.com', '89223795524', 'MERTYHR2435116MAWRERGTRH', '2025-04-20 21:48:40'),
(17, '262354454', '262354454', '262354454', 'Hey,\r\n\r\nThere’s a reason smart marketers keep this on their morning reading list.\r\n\r\nIt’s not flashy.\r\nIt’s not some “get-rich-quick” garbage.\r\nBut it’s real. Tactical. Sharp. No fluff.\r\n\r\nFor $1, I got access to insights I’d pay hundreds for.\r\nThings I now actually use in my business.\r\n\r\nYou won’t see this promoted by big-name gurus.\r\nAnd maybe that’s why it works so well.\r\n\r\n������ Click here to see what it’s all about:\r\n\r\nhttps://marketersmentor.com/dan-kennedy.php?refer=mypastpapers.co.uk&real=yes\r\n\r\nYou’ll see what I mean.\r\nFelipe\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=mypastpapers.co.uk&real=yes', '2025-04-24 13:06:16'),
(18, '9266141479', '9266141479', '9266141479', 'Hi,\r\n\r\nI\'m Manshi, working as an SEO Manager with 8 years of experience in this field.\r\n\r\nI checked your website you have an impressive site but ranking is not good on Google, Yahoo and Bing.\r\n\r\nLet me know if you are interested, I will send you our SEO Packages and price list.\r\n\r\nMay I send a quote! if interested?\r\n\r\nThank You!\r\nManshi Sharma\r\nSEO Expert', '2025-05-01 01:51:25'),
(19, '9266141479', '9266141479', '9266141479', 'Hi,\r\n\r\nI\'m Manshi, and I\'m part of a leading SEO company based in India.\r\n\r\nWe specialize in achieving top rankings for our clients\' websites on Google and other major search engines, ensuring high revenue and top page rank within a guaranteed 3-4 months.\r\n\r\nWe\'re excited to present you with a special SEO package that includes:\r\n\r\n•Detailed Website Audit\r\n•Keyword research\r\n•Competitor Analysis\r\n•Meta tags optimizations\r\n•Content Optimization\r\n•Article Posting(Weekly)\r\n•Blog Posting\r\n•Guest Posting\r\n•Article Submissions\r\n•Blog Submissions\r\n•Heading tag changes\r\n•Alt tag changes\r\n•Interlinking wherever required.\r\n•Keyword Density in site content.\r\n•HTML Site Map\r\n•XML site map and Submission in webmaster tool\r\n•Link Building & Marketing\r\n\r\n\r\nIf you\'re interested, we\'d love to analyze your website and suggest the best strategy for you. Please share your website URL along with up to 10 keywords to get started.\r\n\r\nLooking forward to your positive reply.\r\n\r\nBest regards,\r\nManshi\r\nBusiness Development Manager\r\nWebxTalk Pvt. Ltd.', '2025-05-05 23:47:49'),
(20, '9266141479', '9266141479', '9266141479', 'Hi,\r\n\r\nI\'m Manshi, and I\'m part of a leading SEO company based in India.\r\n\r\nWe specialize in achieving top rankings for our clients\' websites on Google and other major search engines, ensuring high revenue and top page rank within a guaranteed 3-4 months.\r\n\r\nWe\'re excited to present you with a special SEO package that includes:\r\n\r\n•Detailed Website Audit\r\n•Keyword research\r\n•Competitor Analysis\r\n•Meta tags optimizations\r\n•Content Optimization\r\n•Article Posting(Weekly)\r\n•Blog Posting\r\n•Guest Posting\r\n•Article Submissions\r\n•Blog Submissions\r\n•Heading tag changes\r\n•Alt tag changes\r\n•Interlinking wherever required.\r\n•Keyword Density in site content.\r\n•HTML Site Map\r\n•XML site map and Submission in webmaster tool\r\n•Link Building & Marketing\r\n\r\n\r\nIf you\'re interested, we\'d love to analyze your website and suggest the best strategy for you. Please share your website URL along with up to 10 keywords to get started.\r\n\r\nLooking forward to your positive reply.\r\n\r\nBest regards,\r\nManshi\r\nBusiness Development Manager\r\nWebxTalk Pvt. Ltd.', '2025-05-15 02:52:38'),
(21, '1201201200', '1201201200', '1201201200', 'Hello mypastpapers.co.uk,\n\nAttract 10 to 20 organic clients who are genuinely interested in your services using ethical, white-hat strategies.\n\nLet me know if you\'d like to hear more about it.\n\nWell wishes,\nTerry Fowler | Digital Marketing Manager\n\n\n\nNote: - If you’re not Interested in our Services, send us  \"opt-out\"', '2025-05-15 23:54:37'),
(22, 'john Yeo', 'johneyeo@hotmail.com', '07880627354', 'The past paper website does not appear to have any papers fpr OCR past exams', '2025-05-19 02:40:08'),
(25, 'ashiffoysal8818@gmail.com', 'ashiffoysal8818@gmail.com', '01783038818', 'dsa', '2025-05-26 11:17:18'),
(26, '1201201200', '1201201200', '1201201200', 'Dear team, \"mypastpapers.co.uk\"\r\n\r\nLet me start with a question: Are you having trouble generating leads and experiencing low website traffic?\r\n\r\nP.S. Feel free to let me know if you\'d like to hear more about our services and solutions. \r\n\r\nYours faithfully,\r\nDiana Cruz | Digital Marketing Manager\r\n\r\n\r\n\r\nNote :  - If you’re not Interested in our Services, send us  \" NO \"', '2025-06-19 07:26:56'),
(27, '9266141479', '9266141479', '9266141479', 'Hello,\r\n\r\nMany local businesses lose out on customers due to poor local SEO.\r\n\r\nWhen I checked your site, I found:\r\n\r\n  • Missing Google Business Profile details\r\n\r\n  • Lack of location-based keywords\r\n\r\n  • No local citations or reviews\r\n\r\nIf you\'re looking to bring in more local traffic, I’d love to help.\r\n\r\nWe can help optimize your website for better conversions. Interested?\r\n\r\nThank you,\r\nManshi Sharma', '2025-06-24 01:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `exam_borad`
--

CREATE TABLE `exam_borad` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_borad`
--

INSERT INTO `exam_borad` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'AQA', 'aqa', NULL, NULL),
(2, 'Pearson/Edexcel', 'edexcel', NULL, NULL),
(3, 'OCR', 'ocr', NULL, NULL),
(4, 'WJEC', 'wjec', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `slug` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'GCSE', 'gcse', NULL),
(2, 'IGCSE', 'igcse', NULL),
(3, 'A Level', 'alevel', NULL),
(4, 'AS Level', 'aslevel', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_11_27_054545_create_past_papers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `past_papers`
--

CREATE TABLE `past_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `exam_board` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `ques_link` varchar(255) DEFAULT NULL,
  `ans_link` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `past_papers`
--

INSERT INTO `past_papers` (`id`, `name`, `slug`, `exam_type`, `exam_board`, `subject`, `year`, `ques_link`, `ans_link`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(21, 'June 2022 Mathematics Paper 1H', 'june-2022-mathematics-paper-1h', '1', '1', '1', '3', '21question_paper-gcse-edexcel-mathematics-june-2022-mathematics-paper-1h.pdf', '21markscheme-gcse-edexcel-mathematics-june-2022-mathematics-paper-1h.pdf', 1, 0, '2024-12-21 00:05:46', NULL),
(22, 'June 2022 Mathematics Paper 2H', 'june-2022-mathematics-paper-2h', '1', '1', '1', '3', '22question_paper-gcse-aqa-mathematics-june-2022-mathematics-paper-2h.pdf', '22markscheme-gcse-aqa-mathematics-june-2022-mathematics-paper-2h.pdf', 1, 0, '2024-12-21 00:06:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'June 2023', NULL, NULL),
(2, 'November 2023', NULL, NULL),
(3, 'June 2022', NULL, NULL),
(4, 'November 2022', NULL, NULL),
(5, 'June 2021', NULL, NULL),
(6, 'November 2021', NULL, NULL),
(7, 'June 2020', NULL, NULL),
(8, 'November 2020', NULL, NULL),
(9, 'June 2019', NULL, NULL),
(10, 'November 2019', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `unit_code` varchar(50) DEFAULT NULL,
  `board` int(11) DEFAULT NULL,
  `exam_type` varchar(50) DEFAULT NULL,
  `slug` varchar(55) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `unit_code`, `board`, `exam_type`, `slug`, `is_deleted`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics', '8300', 1, '1', 'gcse-aqa-mathematics', 0, 1, '2024-10-27 23:35:02', NULL),
(2, 'English Language', '8700', 1, '1', 'gcse-aqa-english-language', 0, 1, '2024-10-27 23:36:37', NULL),
(3, 'Mathematics', '1MA1', 2, '1', 'gcse-edexcel-mathematics', 0, 1, '2024-10-27 23:37:15', NULL),
(4, 'English Language', '1EN0', 2, '1', 'gcse-edexcel-english-language', 0, 1, '2024-10-27 23:37:48', NULL),
(5, 'Mathematics', 'J560', 3, '1', 'gcse-ocr-mathematics', 0, 1, '2024-10-27 23:38:11', NULL),
(6, 'English Language', 'J351', 3, '1', 'gcse-ocr-english-language', 0, 1, '2024-10-27 23:38:40', NULL),
(7, 'Mathematics', 'C300U', 4, '1', 'gcse-wjec-mathematics', 0, 1, '2024-10-27 23:40:20', NULL),
(8, 'English Language', 'C700U', 4, '1', 'gcse-wjec-english-language', 0, 1, '2024-10-27 23:40:47', NULL),
(10, 'Mathematics', '7357', 1, '3', 'alevel-aqa-mathematics', 0, 1, '2024-12-18 22:16:50', NULL),
(11, 'English Language', '7702', 1, '3', 'alevel-aqa-english-language', 0, 1, '2024-12-18 22:17:11', NULL),
(12, 'Mathematics', '7356', 1, '4', 'aslevel-aqa-mathematics', 0, 1, '2024-12-18 22:23:30', NULL),
(13, 'English Language', '7701', 1, '4', 'aslevel-aqa-english-language', 0, 1, '2024-12-18 22:23:59', NULL),
(14, 'Chemistry', '8462', 1, '1', 'gcse-aqa-chemistry', 0, 1, '2024-12-20 02:52:02', NULL),
(15, 'Physics', '8463', 1, '1', 'gcse-aqa-physics', 0, 1, '2024-12-20 02:53:44', NULL),
(16, 'Biology', '8461', 1, '1', 'gcse-aqa-biology', 0, 1, '2024-12-20 02:54:14', NULL),
(17, 'Chemistry', '1CH0', 2, '1', 'gcse-edexcel-chemistry', 0, 1, '2024-12-20 02:59:52', NULL),
(18, 'Physics', '1PH0', 2, '1', 'gcse-edexcel-physics', 0, 1, '2024-12-20 03:00:14', NULL),
(19, 'Biology', '1BI0', 2, '1', 'gcse-edexcel-biology', 0, 1, '2024-12-20 03:00:39', NULL),
(20, 'Biology A', 'J247', 3, '1', 'gcse-ocr-biology-a', 0, 1, '2024-12-20 03:01:55', NULL),
(21, 'Biology B', 'J257', 3, '1', 'gcse-ocr-biology-b', 0, 1, '2024-12-20 03:02:12', NULL),
(22, 'Chemistry A', 'J248', 3, '1', 'gcse-ocr-chemistry-a', 0, 1, '2024-12-20 03:02:48', NULL),
(23, 'Chemistry B', 'J258', 3, '1', 'gcse-ocr-chemistry-b', 0, 1, '2024-12-20 03:03:04', NULL),
(24, 'Physics A', 'J249', 3, '1', 'gcse-ocr-physics-a', 0, 1, '2024-12-20 03:03:41', NULL),
(25, 'Physics B', 'J259', 3, '1', 'gcse-ocr-physics-b', 0, 1, '2024-12-20 03:03:55', NULL),
(26, 'Chemistry', '4CH1', 2, '2', 'igcse-edexcel-chemistry', 0, 1, '2024-12-20 03:08:54', NULL),
(27, 'Physics', '4PH1', 2, '2', 'igcse-edexcel-physics', 0, 1, '2024-12-20 03:09:26', NULL),
(28, 'Biology', '4BI1', 2, '2', 'igcse-edexcel-biology', 0, 1, '2024-12-20 03:09:49', NULL),
(29, 'Biology', '7402', 1, '3', 'alevel-aqa-biology', 0, 1, '2024-12-20 03:22:34', NULL),
(30, 'Chemistry', '7405', 1, '3', 'alevel-aqa-chemistry', 0, 1, '2024-12-20 03:22:55', NULL),
(31, 'Physics', '7408', 1, '3', 'alevel-aqa-physics', 0, 1, '2024-12-20 03:23:33', NULL),
(32, 'Biology', '7401', 1, '4', 'aslevel-aqa-biology', 0, 1, '2024-12-20 03:26:58', NULL),
(33, 'Chemistry', '7404', 1, '4', 'aslevel-aqa-chemistry', 0, 1, '2024-12-20 03:27:18', NULL),
(34, 'Physics', '7407', 1, '4', 'aslevel-aqa-physics', 0, 1, '2024-12-20 03:27:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', NULL, '$2y$12$gkM9HYzQjjDR7OoXXiDDr.CBYBb5dNHUAZOF7rvD5Q/q2FWN.IHcu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2018', NULL, NULL),
(2, '2019', NULL, NULL),
(3, '2020', NULL, NULL),
(4, '2021', NULL, NULL),
(5, '2022', NULL, NULL),
(6, '2023', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_borad`
--
ALTER TABLE `exam_borad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `past_papers`
--
ALTER TABLE `past_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `exam_borad`
--
ALTER TABLE `exam_borad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `past_papers`
--
ALTER TABLE `past_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
