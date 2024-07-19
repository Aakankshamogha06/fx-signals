-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2024 at 08:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fx_signals`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `page_name` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image1url` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image2url` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image3url` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image4url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `page_name`, `image1`, `image1url`, `image2`, `image2url`, `image3`, `image3url`, `image4`, `image4url`) VALUES
(1, 'about-us', '28ad04458133ae99faf99a67c4de9676.jpeg', 'https://yamarkets.com/', '5ebd17bc2a75c69b19023df54f76f1e5.jpeg', 'https://yamarkets.com/', 'c477a218321133c4c7c0ea6ae6220448.jpeg', 'https://yamarkets.com/', 'd6d1570ccab7e2fbe53044a619e84412.jpeg', 'https://yamarkets.com/'),
(2, 'home', 'f3f7dcaa0cb3f2baced7fe2f8e6031a0.jpeg', 'https://yamarkets.com/', '2e0ea8cf7f977b04d0b0760b942768f5.png', 'https://yamarkets.com/', 'db8cbfdb3d12280468d0f8a655610c15.jpeg', 'https://yamarkets.com/', 'f973c10cf811e3c24463696001fcd733.png', 'https://yamarkets.com/'),
(3, 'news-cat', '88a0f1b9c97784d831344954723e71c9.png', 'https://yamarkets.com/', '38abc69f8a1929e400f45c592c8ca19c.png', 'https://yamarkets.com/', 'd9a3eca6b89269a687b089bc00549e29.png', 'https://yamarkets.com/', '0e1ed0c4ef802b7fcd6f2671e1519a0b.png', 'https://yamarkets.com/'),
(4, 'contact-us', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(5, 'signals-article', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(6, 'live-rate', '532cff65f14d0ea616ffcf38d1f81797.png', 'https://yamarkets.com/', 'fdc00bcad58ac664b11a24375941fb5f.png', 'https://yamarkets.com/', '1445cbafdf3c58cc430f25d66b5fbff5.png', 'https://yamarkets.com/', '22b4c5ce3aedda1898f138f6b8f43694.png', 'https://yamarkets.com/'),
(7, 'learn', 'aec4941c58c7401f81ebc39018c329ec.png', 'https://yamarkets.com/', 'f9b2618450383ab4f2b4b35e298980a7.png', 'https://yamarkets.com/', 'd7c2e5a8dcf86b98a8fd0d811f42e8ab.png', 'https://yamarkets.com/', 'c55d978de3f0f14d424aa7706c7d82b6.png', 'https://yamarkets.com/'),
(8, 'forecast', 'null', 'null', 'null\r\n', 'null', 'null', 'null', 'null', 'null'),
(9, 'trade', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
(10, 'analysis', '4cea51e8012c57863e143b7f2ed92101.png', 'https://yamarkets.com/', '602de165fc2ed86cc1d3bb48425a7fb8.png', 'https://yamarkets.com/', '7d86048d12eaae1bc36d9410a8843766.png', 'https://yamarkets.com/', '77321bd75b76e464db396864a633a422.png', 'https://yamarkets.com/'),
(11, 'tools', 'f9ca72596967b4091b4f5b77c30cab95.png', 'https://yamarkets.com/', '3f7e250d2f258c28aaf377deb54dc744.png', 'https://yamarkets.com/', '6533b050f7e17117803124eb729001f0.png', 'https://yamarkets.com/', '9850ba3eb900f7d1e8b50267f4a8f56f.png', 'https://yamarkets.com/'),
(12, 'blogs', '7fab600b763b7d23ee80cd11a44f3208.png', 'https://yamarkets.com/', '3ea18af65b799f1d7d084854636fbe05.png', 'https://yamarkets.com/', '04263b3b8cdb7e8be604993d02e4692f.png', 'https://yamarkets.com/', '5cdae2c9dc6a6d28508e95388dc1423f.png', 'https://yamarkets.com/'),
(13, 'economic-calender', '6cfecd5060ea17226dd8bdd032301da9.png', 'https://yamarkets.com/', '6a5d2be5a1379b775711107fe1624cf8.png', 'https://yamarkets.com/', 'ef82ea27f43ba989c039bb092ec4b1c9.png', 'https://yamarkets.com/', '6c8c2acc77b8de6253df1b51d83c95e5.png', 'https://yamarkets.com/');

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `heading` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(50) NOT NULL,
  `analysis_image` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id`, `date`, `heading`, `description`, `author`, `analysis_image`, `type`) VALUES
(1, '2024-01-25', 'todays analysis', 'aa', 'fx signals', 'b6610c9e072008d90ffb61179c029042.png', '1'),
(2, '2024-01-26', 'todays analysis', 'nnn', 'fx signal', '066a32fb1f212d8a0e1ad7fe94f768f2.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `sample_article` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'on_hold',
  `linkedin` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `username`, `firstname`, `lastname`, `mobile_no`, `email`, `password`, `confirm_password`, `profile_image`, `role_name`, `sample_article`, `status`, `linkedin`, `created_at`) VALUES
(37, 'abhinav rajput', 'abhinav', 'rajput', '1643179062', 'abhinavrajput@gmail.com', '$2y$10$qeB3n5ZfhaKy4ECXNU6Or..FXusMhYb.Qtw0hEKgnLAieKtD5wRu6', '12345', '761b713a4f8a15933bf1d045cfa2ac6c.png', 'expert', 'fbcb03e78631c7cf93b038913913d023.pdf', 'approved', 'https://auth-db431.hstgr.io/index.php?route=/table/structure&&server=1&db=u474763945_fx_signal&table=author', '2024-03-08 05:53:47'),
(38, 'sumit shah', 'sumit', 'shah', '+91 81442-56', 'vikasvikramasdss@gmail.com', '$2y$10$mxMlb5Kl14QxnqlVKy89PuJPQqmtzDxv.eYnQxz88yt6gUhie3vUy', '$2y$10$cZwg7lQjOuHARFDUfKacPeIjbRoJjokVXaZZJP2GlUl7CZjvUYIz6', '4a31c8861d150f21704a9e653b740a84.png', '3', '5e1383b61ad4763c10ea813118533431.pdf', 'rejected', 'https://www.linkedin.com/in/rohit-t-5977a8155', '2024-03-08 11:58:47'),
(39, 'Rohit Rai', 'Rohit', 'Rai', '08144256428', 'rohit0101rm@gmail.com', '$2y$10$LWni5EVohaItQBT527WHUuAgjl4.C58w3sV3M33AepSBqleu1W7Iy', '$2y$10$DKR2DQJPJxCfNYgXnQExuekBM5zvxZBilmEyF6ZF9Il1zDJ3ZrZAS', '75b531f64dba7b443c2559dd68233c08.png', '2', '711267a1eb2d34b0a4ec67344dc37b76.pdf', 'approved', 'https://www.linkedin.com/in/rohit-t-5977a8155/', '2024-03-10 12:20:57'),
(40, '', 'Rekha', 'Mogha', '1234567890', 'aakanksha@fxcareers.com', '12', '', 'fa3f9dfadb4f60bdb73935304826c296.jpeg', 'a', '6b9caa28a3e57d09cbdf1f39ea9e1182.pdf', 'approved', ' <div class=\"form-group col-md-6\">                                 <label for=\"inputEmail4\" class=\"form-label\">Role<span class=\"text-danger\">*</span> </label>                                 <input type=\"text\" name=\"role_name\" parsley-trigger=\"change\" class=\"form-control\" id=\"role_name\" placeholder=\"Role \" required>                             </div>', '2024-04-16 06:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `author_pricing`
--

CREATE TABLE `author_pricing` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_pricing`
--

INSERT INTO `author_pricing` (`id`, `name`, `description`, `price`) VALUES
(1, 'Free', 'Lorem', '0'),
(2, 'Basic', 'Lorem', '99'),
(3, 'Unlimited', 'Lorem', '199');

-- --------------------------------------------------------

--
-- Table structure for table `author_pricing_features`
--

CREATE TABLE `author_pricing_features` (
  `id` int(11) NOT NULL,
  `pricing_id` varchar(250) NOT NULL,
  `features` varchar(250) NOT NULL,
  `features_available` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_pricing_features`
--

INSERT INTO `author_pricing_features` (`id`, `pricing_id`, `features`, `features_available`) VALUES
(1, '2', '20+ articles', 'Yes'),
(2, '1', 'Only 20 articles', 'Yes'),
(3, '3', '20+ articles', 'Yes'),
(4, '1', 'Verified author profile', 'No'),
(5, '1', 'Choice of article categories', 'No'),
(6, '2', 'Verified author profile', 'Yes'),
(7, '3', 'Verified author profile', 'Yes'),
(8, '2', 'Choice between article categories', 'No'),
(9, '3', 'Choice between article categories', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `author_profile`
--

CREATE TABLE `author_profile` (
  `id` int(11) NOT NULL,
  `author_id` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `author_profile_image` varchar(250) NOT NULL,
  `linkedin` longtext NOT NULL,
  `twitter` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_profile`
--

INSERT INTO `author_profile` (`id`, `author_id`, `username`, `email`, `mobile_no`, `author_profile_image`, `linkedin`, `twitter`, `facebook`, `instagram`, `about`) VALUES
(11, '1', 'Aakanksha Mogha', 'aakanksha@gmail.com', '1234567890', '56139992a372337471cf1d631d6573d2.jpeg', 'https://fxsignals.ae/', 'https://fxsignals.ae/', 'https://fxsignals.ae/', 'https://fxsignals.ae/', 'https://fxsignals.ae/');

-- --------------------------------------------------------

--
-- Table structure for table `author_role`
--

CREATE TABLE `author_role` (
  `id` int(11) NOT NULL,
  `author_role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_role`
--

INSERT INTO `author_role` (`id`, `author_role`) VALUES
(1, 'Technical Analysis'),
(2, 'Fundamental Analysis'),
(3, 'News Article'),
(4, 'Educational Article');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(250) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_category` varchar(250) NOT NULL,
  `blog_author` varchar(250) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_desc` longtext NOT NULL,
  `long_desc` longtext NOT NULL,
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_name`, `blog_image`, `blog_category`, `blog_author`, `blog_date`, `blog_desc`, `long_desc`, `created_by`) VALUES
(5, 'Exploring the Forex Adventure', 'e20c1af6808328b9638e0de75795a932.jpg', '1', 'Rohit Tikoo', '2024-01-29', 'Discover Forex, the global market where money travels! Learn the need to learn Forex before you trade & open doors to financial opportunities. Build a solid foundation for profitable & informed decisions.', '<p><strong>Exploring the Forex Adventure!&nbsp;</strong></p>\r\n\r\n<p>Ever wondered how money magically crosses borders? Welcome to the fascinating world of Forex! It&#39;s where currencies, like the Euro and Dollar, swap places, influencing everything from your travel costs to international trade. But before you jump in, let&#39;s unpack this exciting (but sometimes confusing) realm.&nbsp;</p>\r\n\r\n<p>So, what is Forex?&nbsp;<br />\r\n&nbsp;<br />\r\nForex, short for foreign exchange, is the global marketplace where currencies are traded and their exchange rates are determined. Imagine it like a giant swap meet where instead of toys or clothes, countries exchange their currencies with each other!&nbsp;</p>\r\n\r\n<p>Why Learn Forex Before Trading?&nbsp;</p>\r\n\r\n<p><strong>1. Gain a Solid Foundation:</strong>&nbsp;</p>\r\n\r\n<p>Think of learning Forex like building a house. You wouldn&#39;t start by putting on the roof if you haven&#39;t laid a strong foundation, right? Similarly, before you jump into trading, it&#39;s crucial to understand the fundamental concepts of Forex. This includes things like:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Currency pairs:</strong>&nbsp;Currencies are always traded in pairs,&nbsp;such as EUR/USD or USD/JPY.&nbsp;The first currency is the one you&#39;re buying,&nbsp;and the second is the one you&#39;re selling.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bid and ask prices:</strong>&nbsp;At any given time,&nbsp;there are two prices for each currency pair:&nbsp;the bid price (what someone is willing to buy for) and the asking price (what someone wants to sell for).&nbsp;Your profit or loss depends on the difference between these prices when you enter and exit a trade.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pips and pipsqueaks:</strong>&nbsp;These are the smallest units of measurement for currency price changes.&nbsp;Think of them as inches on a ruler,&nbsp;helping you track market movements with precision.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Leverage:</strong>&nbsp;This is like borrowing money to trade.&nbsp;It can amplify your profits,&nbsp;but also magnify your losses,&nbsp;so it&#39;s important to use it cautiously.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Make Informed Decisions:&nbsp;</strong></p>\r\n\r\n<p>The Forex market is constantly moving, influenced by a variety of factors like economic data, political events, and central bank decisions. By understanding these factors and how they impact currency values, you can make more informed trading decisions. This means less guesswork and more strategic approaches to potentially maximize your profits and minimize your losses.&nbsp;</p>\r\n\r\n<p><strong>3. Develop Essential Skills:&nbsp;</strong></p>\r\n\r\n<p>Learning Forex isn&#39;t just about memorizing facts and figures. It&#39;s also about developing essential skills that can benefit you in all areas of your life, such as:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Analytical thinking:</strong>&nbsp;You&#39;ll learn to analyse market data,&nbsp;identify trends,&nbsp;and make predictions about future price movements.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Risk management:</strong>&nbsp;Forex trading involves risk,&nbsp;so understanding how to manage that risk is crucial for protecting your capital.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Discipline:</strong>&nbsp;Sticking to your trading plan and not letting emotions control your decisions is essential for long-term success.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4. Protect Yourself from Mistakes:&nbsp;</strong></p>\r\n\r\n<p>Without proper knowledge and understanding, jumping into Forex trading can be like walking into a dark forest blindfolded. You&#39;re likely to make costly mistakes, lose money, and potentially get discouraged. By learning the basics before you start trading, you can equip yourself with the tools and knowledge you need to navigate the market more confidently and avoid preventable errors.&nbsp;</p>\r\n\r\n<p><strong>5. Open Up More Opportunities:&nbsp;</strong></p>\r\n\r\n<p>Understanding Forex can open up a variety of opportunities beyond just trading. For example, you can:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Make better financial decisions:</strong>&nbsp;Knowing how currencies work can help you make informed decisions about things like international travel,&nbsp;investing,&nbsp;and borrowing money.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Start your own Forex trading business:</strong>&nbsp;Once you have a strong understanding of the market,&nbsp;you may consider starting your own Forex trading business or working as a professional Forex trader.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gain a deeper understanding of the global economy:</strong>&nbsp;The Forex market is a reflection of the global economy,&nbsp;so learning about it can give you valuable insights into how the world works.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '1'),
(7, 'A Trader\'s Guide to Technical Analysis in Forex Markets', 'f6d0b76c245d0df147d225b8512a318b.jpeg', '1', 'Rohit Tikoo', '2024-02-09', 'Master technical analysis, the art of using historical data & patterns to predict future price movements in forex. Learn key components like moving averages, trend lines, chart patterns, and technical indicators. ', '<p>Can predicting the future of markets be more than just a gambler&#39;s dream? Technical analysis whispers, &quot;yes.&quot; Analysing historical price patterns and market psychology equips you to navigate the ever-shifting tides of financial landscapes.</p>\r\n\r\n<p><strong>Ready to ditch the guesswork and become a market maestro? Explore the potential of technical analysis.</strong></p>\r\n\r\n<p><strong>What is Technical Analysis?</strong></p>\r\n\r\n<p>Technical analysis is a method of analysing financial markets by examining historical price and volume data. The goal of technical analysis is to identify patterns and trends that can be used to predict future price movements. Technical analysts use a variety of tools and techniques to analyse markets, including chart patterns, trend lines, support and resistance levels, and technical indicators.</p>\r\n\r\n<p><strong>Let&rsquo;s take a couple of examples to understand Technical Analysis </strong></p>\r\n\r\n<p><strong>Example 1</strong>:<br />\r\n<br />\r\nTo better understand technical analysis, let&#39;s consider a day-to-day example. Imagine you are planning a road trip from New York to Los Angeles. Before you start your journey, you check the weather forecast, the traffic conditions, and the road map. You analyse this information to determine the best route to take, the estimated time of arrival, and the potential obstacles you may encounter along the way.</p>\r\n\r\n<p><strong>Example 2:&nbsp; </strong></p>\r\n\r\n<p><br />\r\nImagine you&#39;re baking a cake. You gather all the necessary ingredients, carefully follow a recipe, and keep a close eye on the oven temperature to ensure the cake bakes perfectly. Similarly, in forex trading, conducting technical analysis involves examining historical market data to forecast future price movements.</p>\r\n\r\n<p><strong>What are some basic components of technical analysis?</strong></p>\r\n\r\n<p>Some of the basic components of Technical Analysis are as follows</p>\r\n\r\n<p><strong>Moving Averages</strong></p>\r\n\r\n<p>A moving average is calculated by taking the average closing price over a set period, typically 50 or 200 days. It produces a smoothed trendline. When the 50-day moving average crosses above the 200-day, this signals an uptrend. If the 50-day drops below the 200-day, a downtrend is likely underway.</p>\r\n\r\n<p><strong>Price Channels</strong></p>\r\n\r\n<p>Price channels highlight the current trading range. Channel lines contain the price action between support and resistance levels. When the price breaks out above or below the channel, it signals the start of a new trend in that direction. Savvy traders buy near support and sell near resistance within the channel.</p>\r\n\r\n<p><strong>Trend Lines</strong></p>\r\n\r\n<p>By connecting two or more swing highs or swing lows, an upward or downward-sloping trend line emerges. A break in the uptrend line indicates a trend reversal. Downward-sloping trend lines depict downtrends and help identify support levels.</p>\r\n\r\n<p><strong>Analysing Chart Patterns</strong></p>\r\n\r\n<p>Certain price patterns tend to repeat themselves on the charts. Recognising chart patterns provides valuable insight into market psychology and potential trend changes.</p>\r\n\r\n<p><strong>Reversal Patterns</strong></p>\r\n\r\n<p>These signal a trend is losing momentum and likely reversing. Double and triple top/bottom patterns, head and shoulders, and inverse head and shoulders are common reversal patterns. A break below the neckline confirms the reversal.</p>\r\n\r\n<p><strong>Continuation Patterns</strong></p>\r\n\r\n<p>These suggest the prior trend will resume after a brief consolidation, such as flags, pennants, wedges, triangles, and rectangles. Trade in the direction of the previous trend upon a validated breakout from the pattern.</p>\r\n\r\n<p><strong>Gaps</strong></p>\r\n\r\n<p>Gaps form when no trading occurs between two price levels. A breakaway gap signals the start of a new trend, while a runaway gap shows the acceleration of the trend. An exhaustion gap indicates the trend is ending and reversal is likely.</p>\r\n\r\n<p><strong>Using Indicators and Oscillators</strong></p>\r\n\r\n<p>Indicators analyse price data to generate insightful trading signals:</p>\r\n\r\n<p><strong>Moving Average Convergence Divergence (MACD)</strong></p>\r\n\r\n<p>MACD displays trend momentum and direction. Crossovers of the MACD line and signal line suggest trade entry or exit points.</p>\r\n\r\n<p><strong>Relative Strength Index (RSI)</strong></p>\r\n\r\n<p>RSI oscillates between 0 and 100. Readings above 70 indicate overbought conditions, while levels below 30 signal oversold conditions.</p>\r\n\r\n<p><strong>Bollinger Bands</strong></p>\r\n\r\n<p>Upper and lower bands plot standard deviation levels above and below a simple moving average. When the price hits the upper or lower band, a reversal may occur.</p>\r\n\r\n<p><strong>Average Directional Index (ADX)</strong></p>\r\n\r\n<p>ADX measures trend strength from 0 to 100. Values above 25 indicate a strong trend. Traders use ADX to enter breakouts early in a new trend.</p>\r\n\r\n<p><strong>Reading Candlestick Charts</strong></p>\r\n\r\n<p>Candlestick charts display price action using candle-like formations. Their large real bodies are easy to analyse:</p>\r\n\r\n<p><strong>Reversal Patterns</strong></p>\r\n\r\n<p>Doji, hammer, hanging man, shooting star, and other candlesticks indicate potential trend reversals.</p>\r\n\r\n<p><strong>Continuation Patterns</strong></p>\r\n\r\n<p>Rising or falling window candles show brief pauses in the trend, which continues when the pattern completes.</p>\r\n\r\n<p><strong>Support and Resistance</strong></p>\r\n\r\n<p>Candles closing at the same price level create support or resistance, which act as entry and exit points.</p>\r\n\r\n<p><strong>Mastering technical analysis requires practice but delivers rewards. By applying these techniques, traders make informed decisions based on probabilities and market psychology. Start integrating technical analysis into your forex trading today.</strong></p>\r\n', ''),
(8, 'Mastering Forex Trading Strategies', '2dc059f2cf749692c19c3b28ca5e7379.jpeg', '1', 'Rohit Tikoo', '2024-02-12', 'Navigate the exciting world of forex trading with confidence! This guide unveils why trading strategies are important to consider before exploring the forex market and how you figure out the best strategies for making money in forex.', '<p><strong>Mastering Forex Trading Strategies: A Guide for Beginners and Beyond</strong></p>\r\n\r\n<p>With its constant movement and huge profit potential, the FX market draws traders of all experience levels. But here&#39;s the big question: How do you figure out the best strategies for making money in forex?</p>\r\n\r\n<p>Finding the best strategies for making money in the forex market involves a combination of research, analysis, and practical experience.</p>\r\n\r\n<p><strong>Here are some key steps to help you navigate this process:</strong></p>\r\n\r\n<p><strong>Educate Yourself:</strong> Acquire knowledge of the terminology, trading platforms, and market dynamics crucial to understand before exploring your forex trading journey. Online courses, books, tutorials, and other resources are readily available.</p>\r\n\r\n<p><strong>Comprehend Market Analysis</strong>: Familiarize yourself with fundamental analysis (examining economic indicators, geopolitical events, and central bank policies) and technical analysis (analysing price charts and patterns) to pinpoint potential trading opportunities.</p>\r\n\r\n<p><strong>Formulate a Trading Plan:</strong> Define your trading objectives, risk tolerance, and preferred trading style (e.g., day trading, swing trading, or position trading). Establish a structured trading plan delineating your entry and exit criteria, risk management strategies, and position sizing rules.</p>\r\n\r\n<p><strong>Backtest Strategies:</strong> Evaluate the performance and profitability of various strategies under diverse market conditions through backtesting.</p>\r\n\r\n<p><strong>Demo Trading:</strong> Gain practical experience in trading with a demo account to refine your strategies and cultivate confidence in your trading approach without risking actual funds.</p>\r\n\r\n<p><strong>Risk Management</strong>: Implement robust risk management practices to safeguard your capital and mitigate potential losses. This encompasses setting stop-loss orders, diversifying your trades, and refraining from overleveraging.</p>\r\n\r\n<p><strong>Stay Informed:</strong> Stay abreast of market news, economic reports, and geopolitical developments that may influence currency prices. Remain adaptable and adjust your strategies as market conditions evolve.</p>\r\n\r\n<p><strong>Continuous Learning:</strong> Given that forex trading is a dynamic realm, commit to continuous learning and enhancement. Remain receptive to novel ideas, strategies, and technologies that could augment your trading performance.</p>\r\n\r\n<p><strong>Seek Guidance:</strong> Contemplate joining online trading communities and forums, or finding a mentor who can furnish guidance, support, and valuable insights based on their expertise.</p>\r\n\r\n<p><strong>Develop A Trading Plan</strong></p>\r\n\r\n<p>Disciplined traders rely on trading plans to guide their decisions. A good trading plan outlines what currency pairs you&#39;ll trade, entry and exit methods, position sizing, risk management rules, and more. When starting, keep your plan simple. As you gain experience, build upon your initial trading plan. Following a plan removes emotion from trading and leads to better results.</p>\r\n\r\n<p><strong>Understand Key Strategies</strong></p>\r\n\r\n<p>Look for strategies that fit your risk tolerance and personality. Some strategies require constant monitoring while others rely on setting up trades</p>\r\n\r\n<p>While these are some common trading strategies, there are numerous others to explore.</p>\r\n\r\n<p><strong>Day Trading</strong></p>\r\n\r\n<p>Day trading involves the opening and closing of positions within the same trading day. It is a fast-paced approach that requires traders to make quick decisions based on technical analysis and charting systems. Day traders aim to capture small price movements and often make multiple trades in a single day. This strategy demands a solid understanding of market trends, technical analysis, and risk management.</p>\r\n\r\n<p><strong>Swing Trading</strong></p>\r\n\r\n<p>Swing trading seeks to capitalize on short-term price fluctuations over days to weeks. Unlike day trading, swing traders rely on technical analysis to identify patterns and execute trades. This approach allows for a more fundamental-driven outlook, and traders aim to capture price swings toward the upside or downside. While it provides fewer trading opportunities than day trading, swing trading can offer quicker profits and requires less time commitment.</p>\r\n\r\n<p><strong>Positional Trading</strong></p>\r\n\r\n<p>Positional trading is a long-term strategy where traders hold positions from weeks to months, and even years. It involves identifying and capitalizing on long-term market trends using fundamental analysis. While it offers fewer trading opportunities, positional trading has the potential for larger returns compared to day trading and swing trading. Traders must be prepared for the increased risk of changing market conditions over the longer holding period</p>\r\n\r\n<p><strong>Scalping:</strong> Scalping is a short-term trading strategy where traders aim to profit from small price movements by entering and exiting positions rapidly. Scalpers typically execute multiple trades throughout the day, focusing on capturing small gains from intraday price fluctuations. This strategy requires quick decision-making, tight risk management, and the ability to act swiftly on market opportunities.</p>\r\n\r\n<p><strong>Trend-Following:</strong> Trend-following strategies aim to profit from the directional movement of currency pairs by identifying and riding established market trends. Traders using trend-following techniques employ technical analysis tools such as moving averages, trendlines, and momentum indicators to identify the direction of the prevailing trend and enter positions in alignment with the trend&#39;s momentum. Trend-following strategies can be particularly effective in trending markets but require traders to be vigilant for signs of trend reversals or exhaustion.</p>\r\n\r\n<p><strong>Reaching the Peak: Key Takeaways</strong></p>\r\n\r\n<p>Mastering forex strategies is a continuous journey demanding unwavering dedication and discipline.</p>\r\n\r\n<ul>\r\n	<li><strong>Practice makes perfect</strong>: Utilize simulated trading platforms to hone your skills before risking real money.</li>\r\n	<li><strong>Risk management is your shield:</strong> Always prioritize protecting your capital with stop-loss orders and position size management.</li>\r\n	<li><strong>Embrace the learning curve: </strong>Seek mentorship, join exclusive communities, and continuously expand your knowledge.</li>\r\n</ul>\r\n\r\n<p><strong>Conclusion:</strong></p>\r\n\r\n<p>In the ever-evolving world of forex trading, success hinges on your ability to adapt, innovate, and persevere. With a solid understanding of market dynamics, a well-defined forex strategy, and a commitment to continuous improvement, you&#39;ll be well-equipped to navigate the complexities of the forex market and achieve a great degree of profitability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(9, 'Top 10 Forex Market Events that Shape the Economic Landscape', 'af2f067d49ccfaf6dd88cbcc4af93847.jpg', '1', 'Rohit Tikoo', '2024-02-23', 'Master the forex market with the top 10 market events that impact currency valuations and economic stability. Understand central bank decisions, employment data, GDP growth, and more.', '<p>The foreign exchange market, also known as the <strong>forex market</strong>, is a vast and dynamic ecosystem worth trillions of dollars daily. It&#39;s where currencies are traded, and even seemingly minor events can trigger significant fluctuations, impacting economies worldwide. Understanding these <strong>top 10 forex market events</strong> is crucial for anyone involved in currency trading, whether individual investors, businesses, or financial institutions.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>The Power of Market Events:</strong></p>\r\n\r\n<p>Picture this: It&#39;s just another day of trading in New York City. Traders all around the globe are eagerly waiting for an important economic report. When it&#39;s finally released, it can cause a lot of chaos in the market, making exchange rates go up or down dramatically. This shows how significant market events can be in influencing the world of forex trading.</p>\r\n\r\n<p>This intense scenario exemplifies the <strong>power of market events</strong> in shaping the forex landscape.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>A Case Study: The 2008 Recession</strong></p>\r\n\r\n<p>The 2008 financial crisis serves as a potent reminder of how global events can disrupt the forex market. Several factors contributed to the turbulence and volatility witnessed during this period:</p>\r\n\r\n<ul>\r\n	<li><strong>Global Economic Uncertainty:</strong>&nbsp;The recession triggered widespread fear about the health of economies worldwide.&nbsp;Investors flocked to&nbsp;<strong>safe-haven currencies</strong>&nbsp;like the US dollar,&nbsp;Japanese yen,&nbsp;and Swiss franc,&nbsp;causing significant fluctuations in their exchange rates against other currencies.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Financial Market Instability:</strong>&nbsp;The collapse of major financial institutions and the ensuing credit crunch amplified&nbsp;volatility&nbsp;in the forex market.&nbsp;Concerns about the solvency of banks and financial firms led to risk aversion,&nbsp;further impacting currency prices.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Central Bank Intervention:</strong>&nbsp;Central banks around the world intervened to&nbsp;stabilize their currencies&nbsp;and support their economies.&nbsp;This involved interest rate cuts,&nbsp;quantitative easing measures,&nbsp;and direct currency market interventions,&nbsp;all of which influenced currency values.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Commodity Price Swings:</strong>&nbsp;The recession also impacted&nbsp;commodity prices,&nbsp;affecting currencies tied to commodity-exporting countries.&nbsp;Fluctuations in oil,&nbsp;gold,&nbsp;and other key commodities influenced the value of currencies like the Canadian dollar,&nbsp;Australian dollar,&nbsp;and Norwegian krone.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Cross-Border Capital Flows:</strong>&nbsp;The recession disrupted&nbsp;cross-border capital flows&nbsp;as investors repatriated funds and reduced exposure to riskier assets.&nbsp;This led to abrupt shifts in currency demand and exchange rates.<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Top 10 Market Movers:</strong></p>\r\n\r\n<p>Now, let&#39;s delve into the <strong>top 10 market events</strong> that can significantly impact the forex market:</p>\r\n\r\n<ol>\r\n	<li><strong>Interest Rate Decisions:</strong> Central bank interest rate announcements are pivotal events that set the tone for monetary policy. Rate hikes typically strengthen a currency by making investments more attractive, while rate cuts usually weaken it. The decisions of key banks like the Fed, ECB, Bank of England, and Bank of Japan are closely watched, as their policy stances can trigger significant currency movements.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Employment/Unemployment Data:</strong> The U.S. non-farm payrolls report is a closely scrutinized indicator of economic health. Robust job additions suggest a strong labour market, signalling rising incomes and growth, which is positive for the US dollar. Conversely, weaker payrolls could hurt the dollar.<br />\r\n	&nbsp;</li>\r\n	<li><strong>GDP Growth Rates:</strong> <strong>Gross Domestic Product (GDP)</strong> measures the total economic output of a country. Expected GDP trajectories significantly impact currency valuations. Higher GDP growth signifies stronger economic performance, often leading to higher interest rates in the long run, both of which boost a currency&#39;s appeal. Sluggish GDP growth can dampen currency pairs like EUR/USD.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Inflation Reports:</strong> Inflation erodes purchasing power, and central banks aim to keep it in check. Rising inflation often prompts policy tightening through rate hikes, which in turn boost currency demand. However, extremely high inflation, as seen recently in Turkey and Argentina, can threaten economic stability and undermine the currency in the long term.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Trade Balance:</strong> A persistent trade deficit reflects lower international competitiveness, gradually eroding demand for a currency and leading to depreciation. Conversely, sustained trade surpluses signal robust external sectors, potentially boosting the local currency&#39;s appreciation over time.<br />\r\n	&nbsp;</li>\r\n	<li><strong>PMI Survey Data:</strong> <strong>Markit&#39;s Purchasing Managers Index (PMI)</strong> surveys gauge business activity based on influential supply managers in the manufacturing and services sectors. PMIs above 50 indicate economic expansion, while below 50 suggests contraction. As forward-looking indicators of output and orders, significant PMI swings can move forex pairs like EUR and GBP.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Consumer Spending Levels:</strong> Currency prices factor in overall economic demand indicators like retail sales data. Strong consumer spending boosts the GDP outlook, potentially signalling a more hawkish central bank stance, keeping currency pairs like USD/JPY buoyed. Conversely, deteriorating consumer spending has the opposite effect.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Sentiment Surveys</strong>: Sentiment indicators reflect the mood among businesses and consumers which impacts GDP and inflation outlooks. Improved sentiment like a higher German Ifo business climate index is seen lifting the EUR, while deteriorating mood weighs on currencies over time. Sentiment further solidifies monetary policy expectations.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Commodity Prices:</strong> Commodity-exporting countries often experience changes in their terms of trade based on fluctuations in commodity prices. When commodity prices rise, the exporting country&#39;s terms of trade improve, leading to increased export revenues and potentially strengthening its currency. Conversely, falling commodity prices can weaken the currency of commodity-exporting nations.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Geopolitical Events:</strong> Geopolitical turmoil whether local elections, civil unrest, or escalating regional conflicts can greatly undermine investor confidence in a nation and trigger aggressive currency selling. Major events prompt haven flows benefiting currencies like CHF and JPY. Trade disputes similarly cause jitters dampening currencies entangled like China&rsquo;s yuan.</li>\r\n</ol>\r\n', ''),
(10, 'Top 5 Forex Mistakes to Avoid for Aspiring Traders', '267a810e2bc6a686afefea0346bf7d1a.jpg', '1', 'Rohit Tikoo', '2024-03-05', 'Master the art of forex trading and outsmart 5  common mistakes in Forex with this insightful guide. Embrace continuous learning and responsible trading practices to become a confident and successful forex trader.\r\n\r\n', '<p><strong>Master the Forex Market: 5 Common Forex Mistakes to Avoid</strong></p>\r\n\r\n<p>The allure of forex trading can be immense, but it&#39;s vital to navigate this complex world with a clear head and a solid plan. While forex signal providers offer guidance, relying solely on them can lead to costly mistakes. Let&#39;s explore<strong> 5 common Forex mistakes</strong> to avoid and empower you to become a more confident and informed trader:</p>\r\n\r\n<p><strong>Mistake #1: Emotional Trading:</strong></p>\r\n\r\n<p>Many aspiring forex traders fall prey to emotional trading, allowing fear and greed to influence their decisions. This can lead to impulsive actions based on short-term market movements, deviating from their trading plan and potentially incurring significant losses.</p>\r\n\r\n<p><strong>Solution:</strong></p>\r\n\r\n<p>To combat emotional trading and navigate the dynamic forex market effectively, traders must:</p>\r\n\r\n<ol>\r\n	<li><strong>Develop a comprehensive trading plan: </strong>This plan should define entry and exit points, risk management strategies (stop-loss orders, risk-to-reward ratios), and overall trading goals.</li>\r\n	<li><strong>Maintain discipline and stick to the plan: </strong>Regardless of market fluctuations, adhere to the pre-defined plan to avoid impulsive decisions based on emotions.</li>\r\n	<li><strong>Cultivate patience: </strong>The forex market is dynamic and requires patience. Avoid making hasty decisions and trust the established strategy</li>\r\n</ol>\r\n\r\n<p><strong>Example</strong>: Imagine you receive a sell signal, but the price spikes upwards just as you enter the trade. Don&#39;t panic and close your position impulsively! Follow your pre-determined stop-loss and exit strategy to avoid making emotional decisions that could exacerbate losses.</p>\r\n\r\n<p><strong>Mistake #2: Ignoring Signal Provider Credibility:</strong></p>\r\n\r\n<p>Not all forex signal providers are created equal. Selecting a reliable and trustworthy source is crucial to ensure the quality and accuracy of the signals you receive. It&#39;s like planning a trip to a new city. You wouldn&#39;t blindly follow any random person claiming to be the best tour guide.</p>\r\n\r\n<p><strong>Solution:</strong> Conduct thorough research before choosing a provider. Look for a proven track record, a transparent methodology for generating signals, and positive customer reviews. Don&#39;t solely rely on their claims &ndash; be your investigative journalist.</p>\r\n\r\n<p><strong>Mistake #3: Failing to Backtest Signals:</strong></p>\r\n\r\n<p>Putting your faith in untested signals can be a recipe for disaster. Backtesting involves applying the signals to historical market data to assess their past performance and identify potential strengths and weaknesses. It&#39;s akin to trying out a new recipe &ndash; you wouldn&#39;t just throw all the ingredients together without checking the instructions or seeing if it works first.</p>\r\n\r\n<p><strong>Solution:</strong> Before deploying signals in live trading, backtest them using historical data. This will help you understand their effectiveness and potential risks, allowing you to make informed decisions about their suitability for your trading strategy.</p>\r\n\r\n<p><strong>Mistake #4: Ignoring Signal Frequency:</strong></p>\r\n\r\n<p>The frequency of signals can significantly impact your trading experience and workload. Consider your lifestyle and trading goals when choosing a provider. Do you prefer frequent signals requiring constant monitoring, or are you looking for less frequent, higher-quality signals that allow for more analysis?</p>\r\n\r\n<p><strong>Solution:</strong> Analyze your available time and resources. If you have limited time, a provider with fewer, high-quality signals might suit you better. Conversely, if you actively monitor markets and enjoy frequent trading opportunities, a provider with a higher signal volume might be a good fit. Select a provider whose signal frequency fits both your time constraints and trading style.</p>\r\n\r\n<p><strong>Mistake #5: Neglecting Risk Management:</strong></p>\r\n\r\n<p>Forex trading involves inherent risks, and relying solely on signals can lead to neglecting crucial risk management practices. Always prioritize protecting your capital by setting appropriate stop-loss orders and adhering to a defined risk-to-reward ratio. Remember, even the best signals can be wrong, and sound risk management is your safety net in the volatile world of forex.</p>\r\n\r\n<p><strong>Solution:</strong> Develop and implement a robust risk management strategy before starting to trade. This includes defining your risk tolerance, setting stop-loss levels for each trade, and adhering to a risk-to-reward ratio that balances potential profits with potential losses. Don&#39;t let the excitement of signals overshadow the importance of responsible risk management.</p>\r\n\r\n<p>By avoiding these <strong>5 common mistakes of Forex</strong> and prioritizing your research, risk management, and self-education, you can leverage forex signals as a valuable tool on your path towards becoming a more confident and successful trader. Remember, the journey in forex is about continuous learning and improvement. Equip yourself with the necessary knowledge and a responsible approach, and conquer the market with a keen mind and calculated strategy.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category`) VALUES
(1, 'Forex');

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE `broker` (
  `id` int(11) NOT NULL,
  `broker_image` varchar(250) NOT NULL,
  `website_url` varchar(250) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `type` varchar(250) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `ranking` varchar(250) NOT NULL,
  `min_deposit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`id`, `broker_image`, `website_url`, `rating`, `order_id`, `type`, `company_name`, `ranking`, `min_deposit`) VALUES
(1, '8618eb66e5d984931ea165444f5e2537.jpeg', 'https://yamarkets.com/', '4.9', '1', 'forex-brokers', 'yamarkets', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `broker_detail`
--

CREATE TABLE `broker_detail` (
  `id` int(11) NOT NULL,
  `broker_id` varchar(250) NOT NULL,
  `broker_email` varchar(250) NOT NULL,
  `broker_contact` varchar(250) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `broker_detail`
--

INSERT INTO `broker_detail` (`id`, `broker_id`, `broker_email`, `broker_contact`, `about`) VALUES
(1, '1', 'info@yamarkets.com', '1234567890', '<p>weqtryygjhn</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(15) NOT NULL,
  `heading1` varchar(250) NOT NULL,
  `desc1` longtext NOT NULL,
  `heading2` varchar(250) NOT NULL,
  `desc2` longtext NOT NULL,
  `heading3` varchar(250) NOT NULL,
  `desc3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `date`, `day`, `heading1`, `desc1`, `heading2`, `desc2`, `heading3`, `desc3`) VALUES
(1, '2024-01-13', 'saturday', 'hello', '<p>bhhj</p>\r\n', 'nj', '<p>jknjk</p>\r\n', 'cfvghbjn', '<p>bhjnkm</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `desc1` longtext NOT NULL,
  `heading1` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `imgname1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `imgname2` varchar(250) NOT NULL,
  `desc2` longtext NOT NULL,
  `heading2` varchar(250) NOT NULL,
  `images1` varchar(250) NOT NULL,
  `images2` varchar(250) NOT NULL,
  `heading3` varchar(250) NOT NULL,
  `desc3` longtext NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`id`, `title`, `desc1`, `heading1`, `image1`, `imgname1`, `image2`, `imgname2`, `desc2`, `heading2`, `images1`, `images2`, `heading3`, `desc3`, `category`) VALUES
(1, 'gh', '<p>gdf</p>\r\n', 'd', '26d29c629f3a9037f074ac0887f2ea95.jpeg', 'se', '3b758526f8f34a3f9795d493b827837b.jpeg', 'ffh', '<p>ddfg</p>\r\n', 'dtgh', '943faa2566a4648509dc7cbd1277131d.jpeg', 'c32a90010608bfde434c8ec90ed2b120.jpeg', 'dh', '<p>rgs</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `closed_signals`
--

CREATE TABLE `closed_signals` (
  `id` int(11) NOT NULL,
  `pair` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  `time_open` datetime NOT NULL,
  `time_closed` datetime NOT NULL,
  `sl_tp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(5, 'fdfgj', 'a@gmail.com', 'hjjhjkhjh'),
(6, 'fdfg', 'a@gmail.com', 'hjjhjkhjh'),
(7, 'fdfg', 'a@gmail.com', 'hjjhjkhjh'),
(8, 'rohit', 'vikasvikram987@gmail.com', 'wddd'),
(9, 'rohit', 'mahip@gmail.com', 'wdw'),
(10, 'rohit', 'vikasvikram987@gmail.com', 'swdsd'),
(11, 'Nitesh Mahto', 'rohit1234567864@gmail.com', 'wqeqweqweqweqwe'),
(12, 'Nitesh Mahto', 'rohitpaymenttest@gmail.com', 'adswdwsdswdd'),
(13, 'Nitesh Mahto', 'rohit1234567864@gmail.com', 'qsss'),
(14, 'Nitesh Mahto', 'sumitshah@gmail.comw', 'dwd'),
(15, 'Nitesh Mahto', 'sumitshah@gmail.com', 'qsws'),
(16, 'Nitesh Mahto', 'sumitshah@gmail.com', 'asds');

-- --------------------------------------------------------

--
-- Table structure for table `currency_pair`
--

CREATE TABLE `currency_pair` (
  `id` int(11) NOT NULL,
  `pair_category` varchar(255) NOT NULL,
  `pair_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_pair`
--

INSERT INTO `currency_pair` (`id`, `pair_category`, `pair_name`) VALUES
(1, '1', 'EUR/USD'),
(2, '1', 'GBP/USD'),
(3, '1', 'USD/JPY'),
(4, '1', 'AUD/USD'),
(5, '1', 'USD/CAD'),
(6, '1', 'USD/CHF'),
(7, '2', 'BTC/USD'),
(8, '2', 'ETH/USD'),
(9, '2', 'LTC/USD'),
(10, '2', 'XRP/USD'),
(11, '2', 'BCH/USD'),
(12, '3', 'S&P 500'),
(13, '3', 'Dow Jones Industrial Average (DJIA)'),
(14, '3', 'NASDAQ Composite Index'),
(15, '3', 'FTSE 100'),
(16, '3', 'DAX 30'),
(17, '3', 'Nikkei 225'),
(18, '4', 'Gold'),
(19, '4', 'Silver'),
(20, '4', 'Crude Oil'),
(21, '4', 'Brent Oil'),
(22, '4', 'Natural Gas'),
(23, '4', 'Copper'),
(24, '1', 'All'),
(25, '2', 'All'),
(26, '3', 'All'),
(27, '4', 'All'),
(28, '1', 'EUR/CHF');

-- --------------------------------------------------------

--
-- Table structure for table `economic_calender`
--

CREATE TABLE `economic_calender` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(50) NOT NULL,
  `heading1` varchar(250) NOT NULL,
  `desc1` longtext NOT NULL,
  `heading2` varchar(250) NOT NULL,
  `desc2` longtext NOT NULL,
  `heading3` varchar(250) NOT NULL,
  `desc3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economic_calender`
--

INSERT INTO `economic_calender` (`id`, `date`, `day`, `heading1`, `desc1`, `heading2`, `desc2`, `heading3`, `desc3`) VALUES
(1, '2024-01-15', 'Monday', 'as', '<p>sd</p>\r\n', 'asd', '<p>fgchh</p>\r\n', 'gh', '<p>hggc</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `user_id`, `message`) VALUES
(1, '12', 'hello'),
(2, '12', 'hey'),
(3, '103', 'wdwdwd'),
(4, '103', 'wreerer'),
(5, '103', 'dfdfdfdf'),
(6, '103', 'adsdsdsdsdsdsd'),
(7, '103', 'dfsdfsdfsdfdsfdsfdsf'),
(8, '103', 'ssdsdsdsdsdsdsdgg'),
(9, '103', 'asasasasad'),
(10, '103', 'sdsd'),
(11, '103', 'sdsdsdsd'),
(12, '103', '5march'),
(13, '103', 'fdfgfg666');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `heading1` varchar(250) NOT NULL,
  `desc1` longtext NOT NULL,
  `heading2` varchar(250) NOT NULL,
  `desc2` longtext NOT NULL,
  `date` date NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `heading1`, `desc1`, `heading2`, `desc2`, `date`, `day`, `time`) VALUES
(1, 'j', '<p>ggyy</p>\r\n', '', '<p>gjh</p>\r\n', '2024-01-15', 'Monday', '11:11:00'),
(2, 'gvh', '<p>bhbn</p>\r\n', 'jjvh', '<p>hvhjvj</p>\r\n', '2024-01-15', 'Monday', '12:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `forecast`
--

CREATE TABLE `forecast` (
  `id` int(11) NOT NULL,
  `forecast_name` varchar(250) NOT NULL,
  `forecast_image` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `long_description` longtext NOT NULL,
  `forecast_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forecast`
--

INSERT INTO `forecast` (`id`, `forecast_name`, `forecast_image`, `description`, `long_description`, `forecast_type`) VALUES
(1, 'a', 'a2cb78cd668b5e84a32b1fd02631dd72.jpeg', '<p>sd</p>\r\n', '<p>sd</p>\r\n', 'forex-forecasts'),
(2, 'nbnk', '05facf0060fdc810425291b16a9d0d32.jpeg', '<p>j</p>\r\n', '<p>jknkj</p>\r\n', 'forex-forecasts'),
(3, 'nbnk', 'cb1ff69d4f6616efb66981fc8bc68904.jpeg', '<p>j</p>\r\n', '<p>jknkj</p>\r\n', 'forex-forecasts');

-- --------------------------------------------------------

--
-- Table structure for table `imagebank`
--

CREATE TABLE `imagebank` (
  `id` int(11) NOT NULL,
  `images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagebank`
--

INSERT INTO `imagebank` (`id`, `images`) VALUES
(7, '9759f3e80a2f191363eed23b0660b699.jpeg'),
(8, '34f31bedc8743e892b2cccd9bd736ebf.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `id` int(11) NOT NULL,
  `learn_type` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `page_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`id`, `learn_type`, `title`, `description`, `page_name`) VALUES
(1, '1', 'defi', '<p>Forex trading signal systems are used by Forex traders all over the world to aid them in making critical decisions about their trades. They are one of the most important tools a forex trader has and almost all traders choose to use them in one way or another. There are many types of forex signals systems, some are offered for free while others for a fee but take in mind that a trustworthy service should include information about take profit and stop loss configurations.</p>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Proin feugiat, augue at congue elementum.</li>\r\n	<li>Suspendisse potenti. Nunc vel arcu at metus gravida hendrerit.</li>\r\n	<li>Integer sagittis turpis vel tempor gravida.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'defi'),
(2, '1', 'yeild farming', '<p>Forex trading signal systems are used by Forex traders all over the world to aid them in making critical decisions about their trades. They are one of the most important tools a forex trader has and almost all traders choose to use them in one way or another. There are many types of forex signals systems, some are offered for free while others for a fee but take in mind that a trustworthy service should include information about take profit and stop loss configurations.</p>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n	<li>Proin feugiat, augue at congue elementum.</li>\r\n	<li>Suspendisse potenti. Nunc vel arcu at metus gravida hendrerit.</li>\r\n	<li>Integer sagittis turpis vel tempor gravida.</li>\r\n</ul>\r\n', 'yeild-farming');

-- --------------------------------------------------------

--
-- Table structure for table `live_rate`
--

CREATE TABLE `live_rate` (
  `id` int(11) NOT NULL,
  `page_name` varchar(250) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_rate`
--

INSERT INTO `live_rate` (`id`, `page_name`, `description`) VALUES
(1, 'eur-usd', '<p>The GBP/USD pair is the third most frequently traded currency pair in forex, nicknamed Cable. It&rsquo;s one of the oldest currency pairs, representing two economies - the United Kingdom and the United States. The value of the GBP/USD depends greatly upon the relative economic strength of each nation.The currency pair indicates how many U.S. dollars (the quote currency) are needed to purchase one Great Britain Pound (the base currency). For example, if the pair is trading at 1.30, it means it takes 1.30 U.S. dollars to buy 1 British pound. The British pound/U.S. dollar pair is one of the most liquid currency trades in the forex space. The tight bid-ask spreads, volume, and volatility produce excellent opportunities for substantial day-trading profits.</p>\r\n\r\n<p>The GBP/USD is one of the most liquid, cash-rich currency pairs in the world. GBP/USD is the third most traded major currency pair, consisting of about 9.3% of total daily forex trading volume. As two of the most advanced markets in the world, GBP/USD uses an abundance of resources for obtaining price information and data. In 2019, it was determined that over 41% of the volume traded in the FX markets goes through London.GBP/USD rates can shift exceptionally fast. While this is excellent for active, decisive traders, it also implies that you can lose money pronto. To counter this, you need to be disciplined, employing effective risk and money management tactics.</p>\r\n'),
(2, 'btc', '<p>The GBP/USD pair is the third most frequently traded currency pair in forex, nicknamed Cable. It&rsquo;s one of the oldest currency pairs, representing two economies - the United Kingdom and the United States. The value of the GBP/USD depends greatly upon the relative economic strength of each nation.The currency pair indicates how many U.S. dollars (the quote currency) are needed to purchase one Great Britain Pound (the base currency). For example, if the pair is trading at 1.30, it means it takes 1.30 U.S. dollars to buy 1 British pound. The British pound/U.S. dollar pair is one of the most liquid currency trades in the forex space. The tight bid-ask spreads, volume, and volatility produce excellent opportunities for substantial day-trading profits.</p>\r\n\r\n<h5><strong>Breaking Down &lsquo;GBP/USD&rsquo;</strong></h5>\r\n\r\n<p>The GBP/USD is one of the most liquid, cash-rich currency pairs in the world. GBP/USD is the third most traded major currency pair, consisting of about 9.3% of total daily forex trading volume. As two of the most advanced markets in the world, GBP/USD uses an abundance of resources for obtaining price information and data. In 2019, it was determined that over 41% of the volume traded in the FX markets goes through London.GBP/USD rates can shift exceptionally fast. While this is excellent for active, decisive traders, it also implies that you can lose money pronto. To counter this, you need to be disciplined, employing effective risk and money management tactics.</p>\r\n'),
(3, 'tsla', '<p>The GBP/USD pair is the third most frequently traded currency pair in forex, nicknamed Cable. It&rsquo;s one of the oldest currency pairs, representing two economies - the United Kingdom and the United States. The value of the GBP/USD depends greatly upon the relative economic strength of each nation.The currency pair indicates how many U.S. dollars (the quote currency) are needed to purchase one Great Britain Pound (the base currency). For example, if the pair is trading at 1.30, it means it takes 1.30 U.S. dollars to buy 1 British pound. The British pound/U.S. dollar pair is one of the most liquid currency trades in the forex space. The tight bid-ask spreads, volume, and volatility produce excellent opportunities for substantial day-trading profits.</p>\r\n\r\n<h5><strong>Breaking Down &lsquo;GBP/USD&rsquo;</strong></h5>\r\n\r\n<p>The GBP/USD is one of the most liquid, cash-rich currency pairs in the world. GBP/USD is the third most traded major currency pair, consisting of about 9.3% of total daily forex trading volume. As two of the most advanced markets in the world, GBP/USD uses an abundance of resources for obtaining price information and data. In 2019, it was determined that over 41% of the volume traded in the FX markets goes through London.GBP/USD rates can shift exceptionally fast. While this is excellent for active, decisive traders, it also implies that you can lose money pronto. To counter this, you need to be disciplined, employing effective risk and money management tactics.</p>\r\n'),
(4, 'dow', '<p>The GBP/USD pair is the third most frequently traded currency pair in forex, nicknamed Cable. It&rsquo;s one of the oldest currency pairs, representing two economies - the United Kingdom and the United States. The value of the GBP/USD depends greatly upon the relative economic strength of each nation.The currency pair indicates how many U.S. dollars (the quote currency) are needed to purchase one Great Britain Pound (the base currency). For example, if the pair is trading at 1.30, it means it takes 1.30 U.S. dollars to buy 1 British pound. The British pound/U.S. dollar pair is one of the most liquid currency trades in the forex space. The tight bid-ask spreads, volume, and volatility produce excellent opportunities for substantial day-trading profits.</p>\r\n\r\n<h5><strong>Breaking Down &lsquo;GBP/USD&rsquo;</strong></h5>\r\n\r\n<p>The GBP/USD is one of the most liquid, cash-rich currency pairs in the world. GBP/USD is the third most traded major currency pair, consisting of about 9.3% of total daily forex trading volume. As two of the most advanced markets in the world, GBP/USD uses an abundance of resources for obtaining price information and data. In 2019, it was determined that over 41% of the volume traded in the FX markets goes through London.GBP/USD rates can shift exceptionally fast. While this is excellent for active, decisive traders, it also implies that you can lose money pronto. To counter this, you need to be disciplined, employing effective risk and money management tactics.</p>\r\n'),
(5, 'silver', '<p>The GBP/USD pair is the third most frequently traded currency pair in forex, nicknamed Cable. It&rsquo;s one of the oldest currency pairs, representing two economies - the United Kingdom and the United States. The value of the GBP/USD depends greatly upon the relative economic strength of each nation.The currency pair indicates how many U.S. dollars (the quote currency) are needed to purchase one Great Britain Pound (the base currency). For example, if the pair is trading at 1.30, it means it takes 1.30 U.S. dollars to buy 1 British pound. The British pound/U.S. dollar pair is one of the most liquid currency trades in the forex space. The tight bid-ask spreads, volume, and volatility produce excellent opportunities for substantial day-trading profits.</p>\r\n\r\n<h5><strong>Breaking Down &lsquo;GBP/USD&rsquo;</strong></h5>\r\n\r\n<p>The GBP/USD is one of the most liquid, cash-rich currency pairs in the world. GBP/USD is the third most traded major currency pair, consisting of about 9.3% of total daily forex trading volume. As two of the most advanced markets in the world, GBP/USD uses an abundance of resources for obtaining price information and data. In 2019, it was determined that over 41% of the volume traded in the FX markets goes through London.GBP/USD rates can shift exceptionally fast. While this is excellent for active, decisive traders, it also implies that you can lose money pronto. To counter this, you need to be disciplined, employing effective risk and money management tactics.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `market_primer`
--

CREATE TABLE `market_primer` (
  `id` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `pdf` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `market_primer`
--

INSERT INTO `market_primer` (`id`, `date`, `pdf`) VALUES
(1, '2024-04-09', 'b9da4c91cba318ea81a8c3cb012483e3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`) VALUES
(1, 'News'),
(2, 'Live Rates'),
(3, 'Forex Signals'),
(4, 'Learn'),
(5, 'Forecast'),
(6, 'Trade'),
(7, 'Charts'),
(8, 'Tools'),
(9, 'About Us'),
(10, 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `news_image` varchar(250) NOT NULL,
  `publish_date` date NOT NULL,
  `news_desc` longtext NOT NULL,
  `category` varchar(250) NOT NULL,
  `sub_category` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `news_type` varchar(50) NOT NULL,
  `news_package` varchar(255) NOT NULL,
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news_image`, `publish_date`, `news_desc`, `category`, `sub_category`, `author`, `news_type`, `news_package`, `created_by`) VALUES
(9, ' Currency Movements and Precious Metals Update', '75bb8a1de3f5ecc42c3219899119de97.jpg', '2024-01-24', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>During the early European session on Wednesday, the EUR/USD pair showed strength, briefly touching the weekly lows at 1.0821 before rebounding to 1.0862. However, the potential for further upside appears limited as investors exercise caution ahead of the European Central Bank&#39;s (ECB) upcoming interest rate decision on Thursday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/JPY:</strong></p>\r\n\r\n<p>The Japanese Yen (JPY) strengthened against the US Dollar following an overnight pullback from a one-week high. The JPY maintained its gains heading into the European session on Wednesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>GBP/USD recovered recent gains, trading higher around 1.2690 during the Asian session on Wednesday. The immediate resistance is seen at the psychological level of 1.2700, followed by the weekly high at 1.2747 and a major barrier at 1.2750.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>USD/CAD attempted to recover recent losses ahead of the Bank of Canada (BoC) interest rate decision on Wednesday, edging higher to around 1.3470 during the Asian trading hours. Technical analysis of the Moving Average Convergence Divergence (MACD) for the USD/CAD pair suggests a potential bullish sentiment in the market.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CHF:</strong></p>\r\n\r\n<p>USD/CHF made efforts to halt its winning streak that started on January 11, trading lower near 0.8690 during the Asian session on Wednesday. This decline could be attributed to a minor decrease in the US Dollar, influenced by downbeat US Treasury yields.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>Despite improved preliminary Purchasing Managers Index (PMI) data from Australia, the Australian Dollar (AUD) retraced its recent gains on Wednesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>NZD/USD capitalized on intraday gains as the US Dollar (USD) declined after recording profits in the previous two sessions. The pair traded around 0.6110 during the early European hours on Wednesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>USD/Indian Rupee (INR) traded flat on Wednesday, despite further strength in the US Dollar (USD) and higher US yields. Robust US economic data led to expectations that the Federal Reserve (Fed) is unlikely to cut rates as aggressively as the market anticipates.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Prices (XAU/USD):</strong></p>\r\n\r\n<p>Gold prices (XAU/USD) attracted dip-buying near the $2,023-$2,022 area on Wednesday, refreshing daily lows during the early European session. The precious metal remained within a familiar trading range observed over the past four days and below the $2,040-$2,042 supply zone.</p>\r\n', '1', '1', 'Rohit Tikoo', '3', '2', ''),
(12, 'Global Currency and Precious Metals Snapshot ', '75e85cf39ff9c4ba73fc50e7037a390f.jpeg', '2024-01-25', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>In the London session, the EUR/USD pair trades slightly below the key resistance level of 1.0900. The major currency pair is anticipated to remain cautious as it approaches various upcoming economic indicators.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>During early Asian trading hours on Thursday, the GBP/USD pair sees modest gains, reclaiming levels above 1.2700 due to prevailing risk-on sentiment. However, the market might experience volatility with the release of preliminary US GDP growth numbers for the fourth quarter (Q4) later in the day.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/JPY:</strong></p>\r\n\r\n<p>On Thursday, the Japanese Yen showed a slight decline against the USD, with a limited downside. Factors such as the potential escalation of military action in the Middle East and the uncertain global economic outlook provide support for the safe-haven JPY.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>Supported by improved crude oil prices, USD/CAD attempted to sustain recent gains despite the Bank of Canada\'s (BoC) interest rate decision on Wednesday. Additionally, positive S&P Global Purchasing Managers Index (PMI) data from the US may have diminished the likelihood of future rate cuts.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Gold Price (XAU/USD):</strong></p>\r\n\r\n<p>Struggling to capitalize on a modest intraday uptick, gold prices (XAU/USD) hover near the weekly low reached the previous day. In India, the price stands at 62,052 Indian rupees (INR) per 10 grams, reflecting a decrease of INR 168 compared to Wednesday\'s rate of INR 62,220.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Silver Prices (XAG/USD):</strong></p>\r\n\r\n<p>Silver maintains a positive bias for the third consecutive day on Thursday. However, caution is advised in the technical setup before anticipating further gains, with a convincing breakout above $23.00 required for bullish control.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>On Thursday, the Australian Dollar (AUD) experienced a second consecutive day of decline. The AUD/USD pair faces downward pressure following the release of positive S&P Global Purchasing Managers Index (PMI) data from the United States (US) on Wednesday.</p>\r\n', '1', '1', 'Rohit Tikoo', '3', '2', ''),
(14, 'News flash for January 29, 2024', '3b2867da51fbed85bc5ebf34e9b68e80.jpeg', '2024-01-29', '<p><strong>USD/JPY</strong></p>\r\n\r\n<p>The Japanese Yen (JPY) starts the new week with subdued movement, as the USD/JPY pair hovers within a narrow band above the 148.00 mark during the Asian session.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) shows strength on Monday, recovering from recent losses in the previous session. The AUD/USD pair advances despite a stronger US Dollar (USD) amidst heightened geopolitical tensions.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Gold Prices (XAU/USD)</strong></p>\r\n\r\n<p>Gold prices (XAU/USD) begin the week positively but struggle to gain momentum, staying below the 50-day Simple Moving Average (SMA) during the Asian session. Technically, a move beyond the 50-day SMA hurdle, currently around the $2,027-2,028 region, may attract sellers near the $2,040-2,042 supply zone.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>EUR/USD</strong></p>\r\n\r\n<p>EUR/USD trades lower around 1.0840 in the Asian session on Monday, retracing recent gains. The pair faces downward pressure due to a risk-off sentiment, possibly linked to heightened tensions in the Middle East following a drone attack on a United States (US) post in Jordan, resulting in the death of three US personnel.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>The GBP/USD pair edges higher after a dip in the Asian session on Monday, though it lacks follow-through and remains within a familiar range held over the past two weeks. Current spot prices hover around the 1.2700 mark, showing minimal change for the day as traders await a fresh catalyst before establishing a near-term trajectory.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/INR</strong></p>\r\n\r\n<p>The Indian Rupee (INR) loses ground on Monday amid the rebound of the US Dollar (USD). INR is expected to have a relatively quiet session as traders adopt a cautious stance ahead of the Federal Open Market Committee (FOMC) policy meeting and the presentation of India\'s federal budget later in the week.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/MXN</strong></p>\r\n\r\n<p>USD/MXN continues its losing streak for the third consecutive session on Friday, sliding to 17.16 during the European session. The USD/MXN pair faces challenges following the release of the first half-month inflation data on Wednesday from Mexico, indicating a resurgence in inflation within the country.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>WTI Prices</strong></p>\r\n\r\n<p>West Texas Intermediate (WTI) oil prices extend gains for the fourth consecutive session, trading higher near $78.30 per barrel on Monday. Although WTI prices reached the monthly peak at $79.19 during the early Asian hours, they have since pared some of their intraday gains.</p>\r\n', '1', '1', 'Rohit Tikoo', '2', '1', ''),
(16, 'Global Forex Market Update: January 30, 2024', '4bc1535e6f079efe056230822a0d585f.png', '2024-01-30', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>EUR/USD is around 1.0830 during the Asian session on Tuesday, showing a modest retreat from its intraday gains. The pair struggles to recover losses incurred in the previous session, with 1.0850 emerging as a crucial immediate resistance level.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) continued its upward trajectory on Tuesday, buoyed by a stable US Dollar (USD). Support for the AUD/USD pair comes from the decline in United States (US) bond yields in the preceding session, attributed to a healthier US balance sheet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/JPY</strong></p>\r\n\r\n<p>The Japanese Yen (JPY) strengthens against the US Dollar for the second consecutive day on Tuesday, pulling the USD/JPY pair down to the 147.20-147.15 area, marking a multi-day low during the Asian session.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>The USD/CAD pair faces selling pressure in early Asian trading hours on Tuesday. Attention turns to Canada&#39;s Gross Domestic Product (GDP) data for November scheduled for release on Wednesday, with forecasts anticipating a 0.1% MoM expansion. The Federal Open Market Committee (FOMC) meeting on Wednesday is set to become a focal point.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/JPY</strong></p>\r\n\r\n<p>GBP/JPY records losses for the second consecutive session on Tuesday, dipping near 187.40 during the Asian session. The cross encounters headwinds from risk-off sentiment due to an escalated situation in the Middle East, prompting investors to seek refuge in the Japanese Yen (JPY) safe haven.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR</strong></p>\r\n\r\n<p>The Indian Rupee (INR) trades flat with a slight positive bias on Tuesday, reclaiming ground against the US Dollar. Foreign portfolio inflows contribute to the INR&#39;s status as the top-performing currency in Asian markets for January 2024.</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '2', ''),
(17, 'Currency Pairs Movement on February 1, 2024', '87b2157c5bdd2fdd1c6e33cf5d777ce9.png', '2024-02-01', '<p><strong>AUD/USD </strong></p>\r\n\r\n<p>The Australian Dollar (AUD) attempted a rebound against the US Dollar (USD) on Thursday, seeking to recover from recent losses. However, the pair witnessed a decline in the preceding session, following an announcement by Federal Reserve (Fed) Chairman Jerome Powell.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR </strong></p>\r\n\r\n<p>The Indian Rupee (INR) gained traction on Thursday against the USD. This uptick was bolstered by significant USD sales from both local and foreign banks, propelling the INR to its strongest level in over two weeks.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD </strong></p>\r\n\r\n<p>The GBP/USD pair remained within a confined trading range between 1.2600 and 1.2800 during the early Asian session on Thursday. The Bank of England (BoE) was poised to announce its interest rate decision later in the day, with expectations leaning towards the continuation of the current monetary status quo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/USD</strong></p>\r\n\r\n<p>EUR/USD made efforts to recover recent losses, edging higher to near 1.0810 during the Asian session on Thursday. However, the pair faced downward pressure following hawkish remarks from Federal Reserve Chairman Jerome Powell.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD </strong></p>\r\n\r\n<p>The NZD/USD pair attracted buyers during the Asian session on Thursday, momentarily stalling the retracement slide from the 0.6175 region observed the previous day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/JPY </strong></p>\r\n\r\n<p>The AUD/JPY cross remained under selling pressure for the third straight day on Thursday, dropping to a nearly one-month low during the Asian session. Current spot prices traded around the 96.20-96.15 area, with bears looking to extend the downward trajectory below the 100-day Simple Moving Average (SMA).</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '2', ''),
(18, 'Global Currency Update: February 2, 2024', 'e555e55c102b62b1074812bf579acf5d.jpg', '2024-02-02', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>In the Asian session on Friday, EUR/USD is consolidating recent losses from the previous session, hovering around 1.0870. The pair may encounter immediate resistance around the 21-day Exponential Moving Average (EMA) at 1.0882, followed by the psychological level at 1.0900.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>Struggling to capitalize on a solid recovery of around 130 pips from the 1.2625 area, GBP/USD oscillates in a narrow band during the Asian session on Friday. Current spot prices are near the mid-1.2700s, closer to the weekly peak, as traders await the US monthly jobs report before making fresh bets.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) continued its upward momentum on Friday, recovering from a three-month low reached at 0.6508 on Thursday. Downward pressure on the US Dollar (USD) ensues following mixed economic data from the United States (US).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/JPY:</strong></p>\r\n\r\n<p>Experiencing difficulty in establishing a clear direction after a choppy previous day, EUR/JPY hovers around 159.20 during the Asian session on Friday. The Euro (EUR) gains upward support following the release of mixed Eurozone inflation data on Thursday, providing a foundation for the EUR/JPY cross.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>WTI Crude:</strong></p>\r\n\r\n<p>Western Texas Intermediate (WTI), the US crude oil benchmark, trades around $74.30 on Friday. WTI prices break a two-day losing streak amid signs of potential interest rate cuts from the US Federal Reserve (Fed).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>The USD/CAD pair remains on the defensive below the 1.3400 mark during the early Asian trading hours on Friday. The pair snaps a four-week winning streak as the US Dollar (USD) loses recovery momentum and drops to 103.00.</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '1', ''),
(19, 'Global Currency Update: February 5, 2024', '1dfc49c9f9896b03e3ac806c7c7dcaff.jpg', '2024-02-05', '<p><strong>AUD/JPY</strong></p>\r\n\r\n<p>AUD/JPY retraces recent advances amid speculation about an imminent shift in the Bank of Japan&#39;s (BoJ) policy stance. Additionally, heightened geopolitical tension in the Middle East boosts demand for the safe-haven Japanese Yen (JPY), acting as a headwind for the AUD/JPY cross. Consequently, the cross dips to around 96.60 during Monday&#39;s Asian session.</p>\r\n\r\n<p><strong>EUR/USD</strong></p>\r\n\r\n<p>The EUR/USD pair remains on the defensive in the early European session on Monday. Hawkish remarks from Federal Reserve (Fed) Chairman Jerome Powell offer some support to the US Dollar (USD) and exert selling pressure on the EUR/USD pair.</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>GBP/USD continues its decline for the second consecutive session, dropping to around 1.2610 during Monday&#39;s Asian trading hours. The Pound Sterling (GBP) faces challenges as the US Dollar (USD), measured by the US Dollar Index (DXY), reaches an eight-week high.</p>\r\n\r\n<p><strong>USD/CHF</strong></p>\r\n\r\n<p>USD/CHF improves to 0.8680 during Monday&#39;s Asian session, extending gains for the second straight session. The US Dollar (USD) receives support as market sentiment indicates that the Federal Reserve is unlikely to cut interest rates at March&#39;s meeting after solid US employment figures released on Friday.</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>The USD/CAD pair gains positive traction for the second straight day on Monday, reaching over a one-week high during the Asian session.</p>\r\n\r\n<p><strong>Gold Prices</strong></p>\r\n\r\n<p>Gold price (XAU/USD) remains under selling pressure for the second successive day on Monday, trading around the $2,030 area. It is down nearly 0.30% for the day heading into the European session.</p>\r\n\r\n<p><strong>WTI News</strong></p>\r\n\r\n<p>West Texas Intermediate (WTI) oil price struggles to break a three-day losing streak on Monday. Despite escalated geopolitical tension in the Middle East, where the United States (US) and the United Kingdom (UK) conducted new air strikes on the Iran-backed Houthi militant group in Yemen on Saturday.</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '2', ''),
(20, 'Global Currency Update: Feb 7, 2024', '71b736e7daff49171349b8baffe1a4d6.jpg', '2024-02-07', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>During the Asian session on Wednesday, EUR/USD saw a modest uptick, nearing 1.0760, marking its second consecutive session of gains. The pivotal resistance level at 1.0800 is in focus, with the 23.6% Fibonacci retracement level at 1.0820 following closely.</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>In early European trading on Wednesday, GBP/USD is holding onto slight gains near 1.2600 amid ongoing weakness in the US Dollar. The decline in US Treasury bond yields is weighing on the Greenback, with USD buyers showing restraint in the absence of significant US economic data.</p>\r\n\r\n<p><strong>USD/CHF:</strong></p>\r\n\r\n<p>During the early European hours on Wednesday, USD/CHF is staging a recovery from its losses, edging higher to around 0.8700. The subdued performance of the US Dollar is aiding this rebound, as lower US Treasury bond yields continue to challenge the currency, thereby exerting downward pressure on the USD/CHF pair.</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) extended its upward trajectory for a second consecutive day, benefiting from a weakened US Dollar and declining US bond yields. Additionally, supportive remarks from Reserve Bank of Australia (RBA) Governor Michele Bullock further bolstered the Aussie Dollar, lending support to the AUD/USD pair.</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>The USD/CAD pair is continuing its retreat from the mid-1.3500s, marking its highest level in nearly two months. It remains under selling pressure for a second consecutive day on Wednesday.</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>The Indian Rupee (INR) halted a three-day losing streak on Wednesday, driven by corrective movements in the US Dollar and a decrease in US Treasury yields. Additionally, the Organization for Economic Co-operation and Development (OECD) raised India&rsquo;s growth forecast for FY25 to 6.2%, up from the previous estimate of 6.1% outlined in its November outlook.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '1', ''),
(21, 'Global Currency Update: February 8, 2024', 'ef694a85b31ad2cb4056a6011649ffc0.jpg', '2024-02-08', '<p><strong>EUR/USD: </strong></p>\r\n\r\n<p>The EUR/USD pair is on a recovery path from its recent lows, approaching the 1.0800 mark during the Asian session. This upward momentum is attributed to a modest weakness in the US Dollar (USD).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CNH: </strong></p>\r\n\r\n<p>The USD/CNH pair remains in negative territory, trading near 7.2090 during Asian trading hours. Despite trimming intraday losses, it&#39;s worth noting that the People&rsquo;s Bank of China (PBoC) set the USD/CNY central rate lower than Reuters estimates, at 7.1063.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD: </strong></p>\r\n\r\n<p>USD/CAD continues its downward movement for the third consecutive day, nearing 1.3450 during the Asian session. The strength in Crude oil prices is supporting the Canadian Dollar (CAD), posing a challenge for the USD/CAD pair.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>&nbsp;NZD/USD maintains a positive stance above 0.6100 in the early Asian session, with solid Q4 labour market data from New Zealand influencing market sentiment. This, combined with re-pricing odds of further Reserve Bank of New Zealand (RBNZ) policy tightening, has boosted the New Zealand Dollar (NZD).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD: </strong></p>\r\n\r\n<p>GBP/USD showed upward movement during the early Asian session, supported by rising house prices in the UK. This suggests market expectations that the Bank of England (BoE) is unlikely to cut interest rates in the near term.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD: </strong></p>\r\n\r\n<p>The Australian Dollar (AUD) has rebounded from recent losses, driven by a risk-on sentiment in the market. Despite the US Federal Reserve&#39;s commitment to maintaining elevated interest rates until inflation returns to the 2% target, the US Dollar (USD) faces challenges.</p>\r\n', '1', '1', 'Rohit Tikoo', '1', '1', ''),
(22, 'Global Currency Update: February 9, 2024', '618ad7213621425cbf06e49fa07b16ae.jpg', '2024-02-09', '<p><strong>EUR/USD: </strong></p>\r\n\r\n<p>The euro traded weaker against the US dollar early Friday, remaining rangebound around 1.0775. German inflation data will be in focus later in the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD: </strong></p>\r\n\r\n<p>The New Zealand dollar recovered some recent losses and traded higher Friday morning around 0.6120. The Kiwi is gaining as ANZ expects further rate hikes from the RBNZ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD: </strong></p>\r\n\r\n<p>The British pound struggled to build on the previous day&#39;s gains and traded in a narrow range early Friday near 1.2620. It drew some support from a slight downtick in the US dollar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD: </strong></p>\r\n\r\n<p>The Australian dollar extended its downside early Friday, holding below 0.6500. Hawkish Fed comments and a stronger greenback weighed on the Aussie.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Price: (XAU/USD)</strong></p>\r\n\r\n<p>Gold prices failed to sustain the overnight bounce from the $2,020 level early Friday, oscillating in a familiar range.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>WTI Oil: </strong></p>\r\n\r\n<p>Oil prices edged lower early Friday to near $76.30 per barrel, snapping a four-day winning streak. But prices found some support from escalated Middle East tensions after Israel rejected a Hamas ceasefire.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(23, 'Global Currency News Update', '1dbdcaaebd27d88bb8ba717303a3cfac.jpg', '2024-02-12', '<p><strong>EUR/JPY:</strong></p>\r\n\r\n<p>During the Asian session on the first day of the new week, the EUR/JPY cross exhibits a positive uptrend, surpassing the 161.00 round-figure threshold. Current spot prices remain near a peak attained on Friday, which marked a high not seen in over two weeks. The trajectory suggests a continuation of the recent upward movement from the vicinity of the 158.00 mark, corresponding to the monthly low.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>In the early hours of Monday&#39;s Asian trading session, the EUR/USD pair experienced buying interest around the 1.0800 level. Despite the absence of significant US data releases last week, attention shifts to insights from numerous Federal Reserve (Fed) officials and European Central Bank (ECB) policymakers later in the week, offering perspectives on the interest rate outlook.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>Although witnessing some buying activity during the Asian session on Monday, the GBP/USD pair failed to sustain momentum and remains below the mid-1.2600s range, representing the upper boundary of a trading range established over several days.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>Following a volatile session on Friday, USD/CAD maintains a sideways movement on Monday, hovering around the 1.3460 mark during the Asian session. The decline in crude oil prices may have pressured the Canadian Dollar (CAD), particularly considering Canada&#39;s status as the largest oil exporter to the United States (US).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>On Monday, the Indian Rupee (INR) showed signs of recovery amidst subdued early trading, notably with many Asian markets closed. The focus for the beginning of the week shifts to India&#39;s Consumer Price Index (CPI) for January, which is expected to take centre stage.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(24, 'Global Currency News ', 'fc7a5b714c213cdfd68b9c22bf992be4.jpg', '2024-02-13', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>On Monday, the EUR/USD pair tested the 1.0800 level, but market activity remained subdued with limited trading volume to start the new week. With a light data calendar for Monday, the focus shifts to the release of US Consumer Price Index (CPI) inflation figures on Tuesday, as investors closely monitor price growth indicators from the US.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>During the early Asian session on Tuesday, the GBP/USD pair consolidated within a narrow trading range above 1.2600. Later in the day, attention will turn to the UK labour market data and the US inflation report, which could introduce volatility into the market. Currently, GBP/USD is trading at 1.2626, reflecting a marginal decline of 0.02% for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>The Indian Rupee (INR) is weakening on Tuesday against a strengthening US Dollar (USD) and a rebound in crude oil prices. Despite signs of resilience in the Indian economy at the start of the year, with improvements in industrial production and a decline in inflation as reported on Monday, the INR faces downward pressure.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Price (XAU/USD):</strong></p>\r\n\r\n<p>For the fifth consecutive day, the price of gold (XAU/USD) is trading in negative territory during the early Asian session on Tuesday. The narrative of higher interest rates from the US Federal Reserve (Fed) is contributing to selling pressure on the non-yielding precious metal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>Continuing its decline for the second consecutive session, the NZD/USD pair reached near 0.6110 during the Asian trading session on Tuesday. Pressure on the New Zealand Dollar (NZD) against the US Dollar (USD) is attributed in part to lower inflation expectations in the first quarter, with RBNZ Inflation Expectations (QoQ) decreasing to 2.5% from the previous reading of 2.7%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/JPY:</strong></p>\r\n\r\n<p>The USD/JPY pair is trading flat during the early Asian session on Tuesday. Uncertainty surrounding the timing of interest rate adjustments contributes to the consolidation of the US Dollar (USD). Traders are adopting a wait-and-see approach ahead of the release of US Consumer Price Index (CPI) data for January, which may provide insights into the Fed&#39;s potential interest rate decisions. Currently, USD/JPY is trading slightly higher by 0.02% for the day, around 149.35.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>Despite the release of improved Australia Consumer Confidence data on Tuesday, the Australian Dollar (AUD) is retreating after two consecutive sessions of gains. The Westpac-Melbourne Institute Consumer Sentiment index surged to 86 in February from 81 in January, marking its highest reading in 20 months.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(25, 'Global Currency Update', 'e2f379024f4af9379d7fddea0ae46f61.png', '2024-02-14', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>During Wednesday&#39;s Asian session, the EUR/USD pair remained near 1.0710, holding steady after hitting a three-month low. The US Dollar (USD) gained support from robust US inflation data released for January, diminishing expectations of a near-term rate cut by the Federal Reserve (Fed) in March.</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>In the Asian session on Wednesday, the GBP/USD pair saw some buying interest, pausing the sharp retreat from the 1.2700 level, which marked a one-week high the previous day. However, the upward movement lacked strong conviction, with prices struggling to extend beyond the 1.2600 mark ahead of the UK CPI report.</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>Following Tuesday&#39;s surge, the USD/CAD pair retreated slightly, hovering near 1.3550 during the early European session on Wednesday. The decline in the US Dollar (USD) was attributed to a drop in US Treasury yields, consequently weakening the USD/CAD pair.</p>\r\n\r\n<p><strong>EUR/JPY</strong></p>\r\n\r\n<p>At the start of the European session on Wednesday, the EUR/JPY cross lost momentum as verbal intervention from Japanese authorities strengthened the Japanese Yen (JPY), weighing on the EUR/JPY cross. Investors awaited the Eurozone Gross Domestic Product (GDP) data for the fourth quarter.</p>\r\n\r\n<p><strong>USD/India</strong></p>\r\n\r\n<p>On Wednesday, the Indian Rupee (INR) weakened against the firmer US Dollar (USD). The pair&#39;s uptick was supported by stronger-than-expected US inflation data, leading investors to delay expectations of a Federal Reserve (Fed) interest rate cut.</p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The AUD/USD pair attracted buyers on Wednesday, recovering some of the losses from the previous day to trade around the 0.6445-0.6440 region. This marked its lowest level since November 14, following the release of stronger US consumer inflation figures.</p>\r\n\r\n<p><strong>USD/CHF</strong></p>\r\n\r\n<p>After reaching an 11-week high of 0.8880 in the late Asian session on Wednesday, the USD/CHF pair saw a moderate corrective move. This adjustment appeared to be profit-taking after a strong rally fueled by January&#39;s persistent US inflation data, with further upside expected for the Swiss Franc asset.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(26, 'Currency Market Update: February 15, 2024', '81ee25cf979f396aaa017236b5573f66.jpg', '2024-02-15', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>The EUR/USD pair maintains a defensive stance above the 1.0700 level in early European trading on Thursday. Eurozone Gross Domestic Product (GDP) for Q4 2023 remains unchanged from the initial estimate, indicating stability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>In early Asian trading on Thursday, the GBP/USD pair remains defensively positioned above the mid-1.2500s. While rebounding from 1.2535, upside potential is constrained by softer UK inflation figures. Attention shifts to Q4 UK GDP data set for release on Thursday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>USD/CAD seeks to recover from recent declines noted in the previous session, influenced by a subdued US Dollar (USD) possibly due to diminished US bond yields.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/JPY</strong></p>\r\n\r\n<p>On Wednesday, GBP/JPY retreated further from the 190.00 level following below-expectation UK inflation figures. The pair enters a tentative consolidation phase as investors brace for additional UK data releases later in the trading week.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD</strong></p>\r\n\r\n<p>During the early Asian session on Thursday, the NZD/USD pair registers modest gains. The USD Index (DXY) retreats from three-month highs near the 105.00 mark, buoyed by improvements in the risk environment, providing some support to the pair.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR</strong></p>\r\n\r\n<p>The Indian Rupee (INR) garners interest from buyers on Thursday amid a decline in the US Dollar (USD) and reduced US Treasury bond yields. The Reserve Bank of India (RBI) maintained interest rates at its bi-monthly monetary policy meeting earlier this month, aiming to bring headline retail inflation down to 4%, while retail inflation continues to exceed 5%.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(27, 'Currency Markets Update: February 21, 2024', 'a5896745173efb217db460137c81e2ee.png', '2024-02-21', '<p><strong>EUR/GBP</strong></p>\r\n\r\n<p>After a five-day rally, EUR/GBP retraces slightly, hovering around the 0.8560 level in the Asian trading session on Wednesday. The Pound Sterling (GBP) gained ground against the Euro (EUR) following positive remarks made by Bank of England (BoE) Governor Andrew Bailey.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>In early Asian trading on Wednesday, the GBP/USD pair advances above 1.2600. Optimistic statements from Bank of England (BoE) Governor Andrew Bailey contribute to the Pound Sterling\'s (GBP) strength. The pair remains steady near 1.2625, showing no change for the day.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The Australian Dollar may continue its upward momentum against the US Dollar, as the US currency remains subdued. Australia\'s ASX 200 experiences a decline following Wall Street\'s overnight losses. Market sentiment shifts towards the possibility of no imminent rate cuts, influenced by the RBA Meeting Minutes. Challenges for the Greenback persist as US Treasury yields decrease ahead of the release of the FOMC Minutes.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>NZD/USD</strong></p>\r\n\r\n<p>NZD/USD extends its winning streak that began on February 14, supported by the weaker US Dollar and lower US Treasury yields. During Wednesday\'s Asian trading hours, the pair reaches near 0.6190.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>During the early Asian trading session on Wednesday, the USD/CAD pair climbs above the 1.3500 level. Weaker-than-expected Canadian inflation data exerts downward pressure on the Canadian Dollar, providing upward momentum for USD/CAD.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>USD/JPY</strong></p>\r\n\r\n<p>On Wednesday, the Japanese Yen struggles to gain significant traction. Concerns about intervention support the JPY, while uncertainty surrounding the Bank of Japan\'s monetary policy limits its gains. Traders await cues from the FOMC Minutes regarding the Federal Reserve\'s stance on interest rate cuts for fresh direction.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Gold (XAU/USD)</strong></p>\r\n\r\n<p>Gold price hovers near multi-day highs around $2,030 ahead of the release of the Fed Minutes. Despite a subdued risk sentiment, the US Dollar remains weak alongside US Treasury bond yields. Gold buyers demonstrate strength after reclaiming the 21-day Simple Moving Average (SMA) near $2,025, with the Relative Strength Index (RSI) turning bullish.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(28, 'Currency Update: February 22, 2024', '6cc4a8c7144f4d1f9d05bc15bf56edea.jpg', '2024-02-22', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>Continuing its upward trajectory since February 14, the EUR/USD pair advances as the US Dollar (USD) experiences downward pressure following concerns raised over potential interest rate cuts in the Federal Reserve Meeting Minutes released on Wednesday. Consequently, the pair climbs to approximately 1.0820 during Thursday&#39;s Asian session.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>The GBP/USD pair exhibits strength, trading below the mid-1.2600s in the early Asian session on Thursday. Investor focus shifts towards the UK and UK S&amp;P Global Purchasing Managers Index (PMI) for February. Currently, the major pair hovers around 1.2638, marking a daily gain of 0.04%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>During Thursday&#39;s Asian session, USD/CAD extended its decline to near 1.3490 as the US Dollar (USD) demonstrated weakness, potentially influenced by subdued US Treasury yields.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>Trading below the 0.6200 threshold in the early Asian session on Thursday, the NZD/USD pair shows weakness. The January FOMC Minutes reveal policymakers&#39; cautious stance, emphasizing the need for greater confidence in inflation returning to target sustainably before considering rate cuts. Currently, NZD/USD trades near 0.6177, down 0.05% for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>Following the release of the Federal Reserve&#39;s January meeting minutes, which underscore policymakers&#39; reluctance to initiate policy easing, the Australian Dollar registers marginal gains against the US Dollar. Consequently, the AUD/USD pair is valued at 0.6550, reflecting a 0.02% decline as the Asian session commences.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Price (XAU/USD):</strong></p>\r\n\r\n<p>During Thursday&#39;s Asian session, the price of gold (XAU/USD) experienced a modest uptick, though it remains below the pivotal resistance of the 50-day Simple Moving Average (SMA), situated around the $2,032 level. This level represents over a one-week high attained in the preceding session.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(29, 'Global Currency Update:  February 23, 2024', 'ac825e8d0e7898280f21e362b3ff8bae.jpg', '2024-02-23', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>After a volatile session triggered by the release of European and US Purchasing Managers Index (PMI) data on Thursday, EUR/USD stabilized as investors processed mixed figures regarding private business activity in the European Union (EU).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>During early Asian trading hours on Friday, the GBP/USD pair modestly gained above the mid-1.2600s. The decline in the US Dollar (USD) offered some support to the major pair, with GBP/USD trading at 1.2663, reflecting a 0.02% increase for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>In Friday&rsquo;s European session, the USD/CAD pair corrected near 1.3480 after failing to sustain levels above the psychological resistance of 1.3500. The Loonie&#39;s performance was influenced by the subdued US Dollar. Despite a strong recovery, the US Dollar Index (DXY) moved sideways as investors awaited fresh guidance on the Federal Reserve&rsquo;s (Fed) interest rates.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/MXN:</strong></p>\r\n\r\n<p>For the second consecutive day, USD/MXN continued its upward trajectory, reaching levels near 17.10 during early European hours on Friday. The pair received upward support following softer data from Mexico and mixed data from the United States (US) released on Thursday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>During early Asian trading hours on Friday, the NZD/USD pair ended a seven-day winning streak, falling below the 0.6200 mark. The decline was supported by a drop in New Zealand Retail Sales for the fourth quarter (Q4), despite a correction in the Greenback. Currently, the pair trades around 0.6194, down 0.09% for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/JPY:</strong></p>\r\n\r\n<p>During the early European session on Friday, the EUR/JPY cross extended its upside near the 163.00 psychological barrier. The pair edged higher as German GDP for Q4 matched market estimates, with the cross currently trading around 163.07, up 0.12% for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/JPY:</strong></p>\r\n\r\n<p>During the European session on Friday, AUD/JPY rose to an all-time high near 99.00, extending its winning streak that began on February 14th. The Bank of Japan (BoJ) could delay its plan to exit negative rates as Japan entered a technical recession.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '2', ''),
(30, 'Global Currency Update', 'c506043c326f4394cc20fa5ff3ea6132.jpg', '2024-02-27', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>The EUR/USD pair is extending its rebound from the 1.0815-1.0810 area observed yesterday, gaining positive momentum for the second consecutive day on Tuesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>In early Tuesday&#39;s European session, GBP/USD shows minor gains near 1.2683. The pair maintains a bullish stance above the crucial EMA, with the RSI indicator positioned above the 50 midline. The first resistance level lies at 1.2700, while initial support is identified at 1.2640.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/JPY</strong></p>\r\n\r\n<p>Japanese CPI data for January confirms that inflation remains above the Bank of Japan&#39;s 2.0% target. Despite this, the yen maintains a weak position, hovering around intervention levels in the foreign exchange market, according to economists at ING.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/JPY</strong></p>\r\n\r\n<p>EUR/JPY encounters selling pressure near 163.28 following stronger-than-expected Japanese inflation data. Speculation grows that the Bank of Japan will abandon its negative interest rate policy by spring, contributing to Japan&#39;s two-year bond yield reaching its highest level since 2011.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>USD/CAD continues its downward trajectory amid a subdued US Dollar, possibly influenced by lower US Treasury yields. The pair approaches the 1.3500 mark during the Asian session on Tuesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Price (XAU/USD)</strong></p>\r\n\r\n<p>Gold price (XAU/USD) sees renewed buying interest after a modest decline the previous day, maintaining a position well within striking distance of a two-week high reached last Thursday. The US Dollar (USD) remains under pressure due to declining US Treasury bond yields.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', '24', 'Rohit Tikoo', '3', '1', ''),
(31, 'Global Currency Update: February 28, 2024', 'dc971e6e814f787637ce4b68c22642ac.jpg', '2024-02-28', '<p><strong>USD/CHF:</strong></p>\r\n\r\n<p>After two consecutive days of declines, the USD/CHF pair shows signs of recovery, advancing towards the significant psychological level of 0.8800 during Wednesday&#39;s Asian trading session. The Swiss Franc (CHF) faces downward pressure ahead of the release of the Swiss ZEW Survey &ndash; Expectations later in the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>During Wednesday&#39;s Asian session, the EUR/USD pair continues its decline, approaching the vicinity of 1.0840 as traders exercise caution in anticipation of key data releases. Market participants await the Euro Zone Economic Sentiment Indicator for February and the preliminary Gross Domestic Product Annualized (Q4) figures from the United States.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>Under the weight of substantial selling pressure following indecisive price movements the previous day, the GBP/USD pair dips towards the 1.2665 level during Wednesday&#39;s Asian trading hours. The mixed technical indicators advise caution among sellers before considering further downside positions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>On Wednesday, the Indian Rupee (INR) depreciates slightly against the US Dollar (USD) amidst a moderate recovery in the latter. The USD/INR pair is anticipated to maintain a narrow trading range due to USD inflows from importers and potential intervention by the Reserve Bank of India (RBI).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/JPY:</strong></p>\r\n\r\n<p>Currently hovering around the 190.86 mark during Tuesday&#39;s session, the GBP/JPY pair experiences a modest downtrend. Nevertheless, this downward movement does not seem to jeopardize the evident bullish trend observed in longer timeframes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>Continuing its ascent for the fourth consecutive day, the USD/CAD pair reaches nearly a two-week high around the 1.3545 region during Wednesday&#39;s Asian trading session. The upward momentum is primarily fuelled by a modest increase in demand for the US Dollar (USD), although bullish trends in Crude Oil prices may constrain further advances.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(32, 'Global Currency Flash: February 29, 2024', '904f784815f1bce780a02d878a4adb2d.jpg', '2024-02-29', '<p><strong>EUR/JPY</strong></p>\r\n\r\n<p>EUR/JPY drops to near 162.30 during the Asian session following hawkish signals from Bank of Japan (BoJ) board member Hajime Takata on Thursday. Takata emphasised the necessity for the BoJ to contemplate flexible responses, including the possibility of exiting from monetary stimulus measures.</p>\r\n\r\n<p><strong>EUR/USD</strong></p>\r\n\r\n<p>EUR/USD continues its losing streak for the third successive session as traders exercise caution ahead of the release of key US Personal Consumption Expenditures - Price Index data, which could potentially influence the Federal Reserve&#39;s monetary policy stance. The pair edges lower to near 1.0830 during the Asian trading hours on Thursday.</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>The GBP/USD pair bounces off the multi-day lows near 1.2620 and recovers to 1.2660 during the early Asian session on Thursday. The renewed US Dollar (USD) demand ahead of the key US event weighs on the major pair</p>\r\n\r\n<p><strong>NZD/USD</strong></p>\r\n\r\n<p>NZD/USD stages a modest recovery from over a one-week low amid some USD selling. The technical setup warrants some caution before positioning for any meaningful gains.<strong> </strong>Acceptance below the 100-day SMA is needed to confirm the near-term negative outlook.</p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) retraces its recent losses following the release of Australia&rsquo;s Retail Sales and Private Capital Expenditure data on Thursday. Australian (MoM) grew by 1.1% in January, against the expected 1.5% and the previous decline of 2.7%</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>USD/CAD continues its winning streak, marking the fifth consecutive session with gains, as it edges higher around 1.3580 during the Asian session on Thursday. US GDP Annualized (Q4) rose by 3.2% against the expected 3.3%.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(33, 'Global Currency Update: March 1, 2024', 'a2fe971acc2f587a969399eb266459ec.jpg', '2024-03-01', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>The EUR/USD pair breaks a three-day downtrend in the early European session on Friday, despite renewed demand for the US Dollar (USD). Market participants await Eurozone inflation data later in the day for further direction. As of now, EUR/USD trades at 1.0811, showing a 0.03% daily gain.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>During the Asian session on Friday, the GBP/USD pair witnessed buying interest, managing to halt a two-day slide to touch a one-week low around the 1.2615-1.2610 zone seen the day before. Presently, spot prices hover around the 1.2630-1.2635 area, remaining susceptible to movements in the US Dollar (USD).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>The Australian Dollar strengthened following the rise in the S&amp;P/ASX 200 Index. Positive outcomes from Australia&#39;s Retail Sales and Private Capital Expenditure data released on Thursday, along with a slight uptick in the Judo Bank Manufacturing PMI, contributed to the Aussie&#39;s boost. These factors led to AUD/USD edging higher.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/JPY:</strong></p>\r\n\r\n<p>During the Asian session on Friday, EUR/JPY retraced recent losses and traded higher around 162.70, surpassing the psychological barrier of the 163.00 level. A potential breakthrough above this level could prompt the pair to test further resistance around 163.50, followed by February&rsquo;s peak at 163.72.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>USD/CAD weakened as the WTI oil price approached $78.10 during the Asian trading hours. The upbeat Canadian GDP Annualized likely provided support for the Canadian Dollar. Consequently, the pair edged lower towards the 1.3560 mark on Friday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Price (XAU/USD):</strong></p>\r\n\r\n<p>Gold price (XAU/USD) struggled to extend gains beyond the $2,040-2,042 level during the Asian session on Friday, after a modest rise the previous day. The precious metal remained near a one-month high reached on Thursday, supported by a slight decline in the US Dollar (USD).</p>\r\n', '1', '24', 'Rohit Tikoo', '3', '1', '');
INSERT INTO `news` (`id`, `title`, `news_image`, `publish_date`, `news_desc`, `category`, `sub_category`, `author`, `news_type`, `news_package`, `created_by`) VALUES
(34, 'Global Currency Update: Marh 4, 2024', '163ebdf8a81568ec9873827d2fe9e55e.jpg', '2024-03-04', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p><br />\r\nThe EUR/USD pair traded in positive territory below the mid-1.0800s during the early European session on Monday. The decline of the US Dollar (USD) after the downbeat US ISM Manufacturing PMI and the University of Michigan Consumer Sentiment Index provides some support to the pair.</p>\r\n\r\n<p><strong>GBP/USD</strong><br />\r\n<br />\r\nThe GBP/USD pair builds on Friday&#39;s goodish rebound from the 1.2600 round figure, or a one-and-half-week trough and gains some positive traction for the second successive day on Monday. The momentum lifts spot prices to a multi-day peak, around the 1.2660-1.2665 area during the Asian session and is sponsored by a combination of factors.</p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>The Australian Dollar (AUD) trimmed its intraday gains and moved negatively on Monday, influenced by a stable US Dollar amid improved US Treasury yields. Additionally, the decline of the ASX 200 index provided further downward pressure on the Aussie Dollar, thereby undermining the AUD/USD pair.</p>\r\n\r\n<p><strong>USD/JPY</strong></p>\r\n\r\n<p><br />\r\nThe USD/JPY stages a recovery after diving to a two-week low of 149.21, climbing above the 150.00 figure on Friday amidst dovish comments by the Bank of Japan (BoJ) Governor Kazuo Ueda during the Asian session.</p>\r\n\r\n<p><br />\r\n<strong>USD/INR</strong></p>\r\n\r\n<p><br />\r\nIndian Rupee trades softer on Monday despite the modest rebound of the USD. India&rsquo;s upbeat GDP growth in the October-December quarter boosts the INR and caps the pair&rsquo;s upside.</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>USD/CAD retraces recent losses, reaching higher to near 1.3560 during the Asian session on Monday. This retracement occurred despite higher Crude oil prices, which typically support the Canadian Dollar (CAD) due to Canada&#39;s status as a major oil exporter. This, in turn, could limit the advances of the USD/CAD pair.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(35, 'Global Currency News: March 5, 2024', '76640653951a6748f81327fe594bd5ae.jpg', '2024-03-05', '<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>The EUR/USD pair is struggling to maintain momentum following strong gains achieved over the last two days, trading within a narrow range during Tuesday&#39;s Asian session. Currently hovering around the mid-1.0800s, the spot prices remain relatively unchanged for the day, slightly below Monday&#39;s one-week high.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>The GBP/USD pair has halted its two-day winning streak as the early European session unfolds on Tuesday. With the US Dollar (USD) seeing a modest recovery, the major pair is edging lower. All eyes are on February&#39;s labour market report this week. At present, GBP/USD is trading at 1.2685, marking a marginal 0.03% decline for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>Experiencing losses in the previous session, the Australian Dollar (AUD) consolidates with a negative bias on Tuesday, potentially influenced by prevailing risk-off sentiment amidst a stagnant ASX 200 Index. Moreover, China aims for approximately 5% GDP growth in 2024, emphasizing job creation and risk mitigation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/USD:</strong></p>\r\n\r\n<p>Trimming some of its intraday losses, NZD/USD sees a modest recovery as the NZX 50 Index rebounds from its daily losses on Monday. Trading around 0.6090 during Tuesday&#39;s Asian session, the pair faces downward pressure due to risk-off sentiment ahead of key US economic data releases this week, including the ISM Services PMI data, ADP Employment Change, and Nonfarm Payrolls for February.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CHF:</strong></p>\r\n\r\n<p>Consolidating within a narrow trading range around the mid-0.8800s during Tuesday&#39;s early Asian session, the USD/CHF pair awaits the Institute for Supply Management (ISM) US Services PMI report later in the day. The report is anticipated to show a slight ease from 53.4 in January to 53.0 in February.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>Remaining below the 1.3600 barrier in the early Asian trading hours on Tuesday, the USD/CAD pair awaits the Bank of Canada&#39;s (BoC) interest rate decision scheduled for Wednesday, with no change in rate expected. Meanwhile, declining oil prices weigh on the Loonie, offering some support to the USD/CAD pair.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>IND/USD:</strong></p>\r\n\r\n<p>The Indian Rupee (INR) experiences a slight decline on Tuesday amidst the modest rebound of the US Dollar (USD). India&#39;s GDP expanded at its fastest pace in 18 months, growing 8.4% over a year earlier in the October-December quarter. Additionally, most high-frequency indicators continue to show growth, indicating resilient economic activity.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(36, 'Global Currency Update: March 6, 2023', '7af97635a5764ba92a41d272ad57c40e.jpg', '2024-03-06', '<p><strong>AUD/USD:</strong></p>\r\n\r\n<p>Despite a softer GDP report on Wednesday, the Australian Dollar (AUD) managed to recover intraday losses. However, early Asian trading saw downward pressure on the AUD due to a weaker equity market, with the S&amp;P/ASX 200 Index declining for three consecutive sessions. This decline mirrored sell-offs in technology stocks on Wall Street and lower mining stocks.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>EUR/USD:</strong></p>\r\n\r\n<p>The EUR/USD pair continued its consolidative price movement for a second consecutive day on Wednesday, remaining within a narrow range around the mid-1.0800s during the Asian session.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/INR:</strong></p>\r\n\r\n<p>The Indian Rupee depreciated slightly amidst a modest rebound in the US Dollar (USD). The Reserve Bank of India&#39;s cautious monetary policy approach is expected to support the Indian rupee. Investors are awaiting Fed Chair Powell&rsquo;s testimony on Wednesday for potential market-moving cues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD:</strong></p>\r\n\r\n<p>During the early Asian session on Wednesday, the GBP/USD pair remained below the 1.2700 mark, driven by renewed strength in the US Dollar (USD). Market focus later in the day will be on the UK S&amp;P Global Construction PMI and Federal Reserve Chair Jerome Powell&rsquo;s testimony. Currently, GBP/USD trades near 1.2695, down 0.08% for the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD:</strong></p>\r\n\r\n<p>In early Asian trading hours on Wednesday, the USD/CAD pair edged higher towards the 1.3600 level. The Bank of Canada (BoC) is expected to announce its interest rate decision later, with no change anticipated. Presently, the pair trades near 1.3598, up 0.03% on the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NZD/JPY:</strong></p>\r\n\r\n<p>On Tuesday, the NZD/JPY pair traded at 91.26, marking a 0.45% decrease with sellers showing a strong stance. Despite the bearish momentum, the pair remains above key Simple Moving Averages (SMAs), suggesting an overall bullish bias, although sentiment remains somewhat mixed.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(37, 'Global Currency News Update: March 11, 2024', '411fbf73d733301bf10d61f8bba79b21.jpg', '2024-03-11', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>Starting the week positively around 1.0942, the EUR/USD pair benefits from a weaker US Dollar. February saw the US economy add 275K jobs, surpassing January&#39;s 229K and beating the consensus of 200K. Eurozone GDP growth in Q4 2023 remained largely unchanged, helping it narrowly avoid recession.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>During Monday&#39;s Asian session, GBP/USD maintains a positive tone near 1.2850, potentially extending its winning streak since March 1. However, the US Dollar has gained strength, rebounding from intraday losses on Friday after the release of upbeat US Nonfarm Payrolls data.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/CAD</strong></p>\r\n\r\n<p>Struggling to capitalise on Friday&#39;s rebound from around 1.3420, the USD/CAD pair trades in a range on the first day of the week. Near the 1.3480 mark during the Asian session, it remains largely unchanged for the day, influenced by various factors.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/JPY</strong></p>\r\n\r\n<p>GBP/JPY experiences its fourth consecutive day of decline late in the North American session, set to close the week with losses of 0.44%, falling below the 190.00 threshold. Currently trading at 188.98, down 0.31%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Prices (XAU/USD)</strong></p>\r\n\r\n<p>Gold prices (XAU/USD) surged to a new record high on Friday following the US jobs report, which showed a spike in the unemployment rate and raised expectations of rate cuts by the Federal Reserve starting in June.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>IND/USD</strong></p>\r\n\r\n<p>The Indian Rupee (INR) strengthens on Monday amid a weakening US Dollar. Mixed US February labour market data on Friday has put some selling pressure on the Greenback, fuelling speculation of a rate cut in June.</p>\r\n', '1', '24', 'Rohit Tikoo', '3', '1', ''),
(38, 'Global Currency News Flash- March 12, 2024', '027812a2fa6a1cc50635183db4dd5d69.jpg', '2024-03-12', '<p><strong>EUR/USD</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The EUR/USD pair rebounded after two consecutive days of losses, making gains and nearing the 1.0930 level during Tuesday&#39;s Asian session. However, it faced resistance in a risk-averse environment ahead of the release of Consumer Price Index (CPI) data from the United States (US).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>GBP/USD</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The GBP/USD pair remains defensively positioned above the 1.2800 support during the early Asian trading hours on Tuesday. Reduced expectations of a rate cut from the Bank of England (BoE) weigh on the Pound Sterling (GBP).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USD/JPY</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>USD/JPY hovers just below 147.00 after experiencing declines last week. Japan&rsquo;s Q4 GDP release on Monday fell short of expectations. The upcoming US CPI inflation data is anticipated to show a mixed outcome.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/USD</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The AUD/USD pair begins Tuesday&rsquo;s Asian session with slight losses, following a -0.19% performance on Monday driven by risk aversion as traders anticipate the release of US inflation data. Currently, the pair is trading at 0.6612, down 0.02%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>AUD/JPY</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>On Monday, the AUD/JPY pair started the week with a 0.50% decline, trading around the 96.97 level. Short-term market sentiment favors bears, although their momentum appears to be waning. On a broader scale, the outlook remains bullish.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gold Prices (XAU/USD)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gold prices (XAU/USD) dip slightly during Tuesday&#39;s Asian session but remain within reach of the record peak touched last week.</p>\r\n', '1', '24', 'Rohit Tikoo', '1', '1', ''),
(39, 'abc', '6b6d9d28d5d0aa1e93e1e5333cd19348.jpeg', '2024-03-12', '<p>ajsnkj</p>\r\n', '1', '1', 'Abhinav', '1', '1', '170');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`) VALUES
(1, 'Forex'),
(2, 'Cryptocurrency'),
(3, 'Indices'),
(4, 'Commodities');

-- --------------------------------------------------------

--
-- Table structure for table `news_sub_category`
--

CREATE TABLE `news_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_sub_category`
--

INSERT INTO `news_sub_category` (`id`, `name`) VALUES
(1, 'Forex'),
(2, 'USD/EUR');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int(11) NOT NULL,
  `news_type_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `news_type_name`) VALUES
(1, 'Market'),
(2, 'Hot'),
(3, 'Trading');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buyer_name` varchar(50) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `paid_amount` varchar(10) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`) VALUES
(1, 'Premium'),
(2, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `pricing_id` varchar(250) NOT NULL,
  `author_pricing_id` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transaction_id`, `user_id`, `author_id`, `pricing_id`, `author_pricing_id`, `email`, `phone_number`, `name`, `date`, `created_at`) VALUES
(9, '1234567cfg567', '', '2', '', '123', 'aa@gmail.com', '1234567890', 'aa', '2024-02-28', '2024-02-14 10:13:07'),
(14, 'pay_Nb77jp92VdaRta', '104', '', 'Standard Plan', '', 'rohitpaysdddmenttest@gmail.com', '8144256428', 'rrrefd', '2024-02-28', '2024-02-15 09:57:54'),
(15, '1234567cfg567', '5', '', '3', '', 'aa@gmail.com', '1234567890', 'aa', '2024-02-28', '2024-02-16 09:59:04'),
(16, 'pay_Ncbznmmgy24v5k', '105', '', 'Standard Plan', '', 'authtestuser@gmail.com', '8144256428', 'rohit test', '2024-02-28', '2024-02-19 04:48:53'),
(25, 'pay_NjQz2UGy7RTI9h', '152', '', 'Standard Plan', '', 'sumitmohanty@gmail.com', '8144256428', 'rrrefd', '2024-02-28', '2024-03-07 10:35:33'),
(26, 'pay_NjXMClGBq3I23L', '155', '', 'Standard Plan', '', 'rohit0101rmaxa@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-07 16:49:38'),
(27, 'pay_NjXQGV7CJE3YSv', '156', '', 'Standard Plan', '', 'rohit0101rmASASASAS@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-07 16:53:29'),
(28, 'pay_NjXTZTygBQGMYO', '158', '', 'Standard Plan', '', 'rohit0101rmz@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-07 16:56:37'),
(29, 'pay_NjXWjuAYongX5e', '159', '', 'Standard Plan', '', 'rohit0101rmazxa@gmail.com', '08144256428', 'asasasasas', '2024-02-28', '2024-03-07 16:59:37'),
(30, 'pay_NjXZMva3SIfRvO', '160', '', 'Standard Plan', '', 'asasarohit0101rmazxa@gmail.com', '8144256428', 'rohit rai', '2024-02-28', '2024-03-07 17:02:06'),
(31, 'pay_NjXd1zZE72peCd', '161', '', 'Standard Plan', '', 'rohit01asdasd01rm@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-07 17:05:34'),
(32, 'pay_NjXeI8tzgJ1frs', '162', '', 'Standard Plan', '', 'aaarohit0101rm@gmail.com', '08588998099', 'aaaaa', '2024-02-28', '2024-03-07 17:06:45'),
(33, 'pay_NjhgP1fuV3eoov', '165', '', 'Standard Plan', '', 'rohit0101rmaxaxx@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-08 02:55:43'),
(34, 'pay_NjhhngEwlK3qoI', '165', '', 'Standard Plan', '', 'rohit0101rmaxaxx@gmail.com', '08588998099', 'rohit rai', '2024-02-28', '2024-03-08 02:57:03'),
(35, 'pay_NjhkpYhEHcIZk3', '166', '', 'Standard Plan', '', 'rohit0101rZxaxxsxsxsm@gmail.com', '08144256428', 'Rohit Rai', '2024-02-28', '2024-03-08 02:59:53'),
(37, 'pay_NkfaHWNgGOxTmS', '173', '', 'Standard Plan', '', 'rohitas0101rm@gmail.com', '08144256428', 'Rohit Rai', '0000-00-00', '2024-03-10 13:31:31'),
(38, 'pay_NkurngxEJUbbX9', '174', '', 'Standard Plan', '', 'rohittest11march@gmail.com', '8144256428', 'rohit test', '0000-00-00', '2024-03-11 04:28:30'),
(39, 'pay_Nkvqj0ivxLocjQ', '176', '', 'Standard Plan', '', 'rohitraisignalstest11march@gmail.com', '8144256428', 'dd', '0000-00-00', '2024-03-11 05:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `name`, `description`, `price`) VALUES
(1, 'Basic Plan', 'Lorem ipsum dolor sit amet consectetur. Feugiat id adipiscing diam viverra interdum.', '9.99'),
(2, 'Standard Plan', 'Lorem ipsum dolor sit amet consectetur. Feugiat id adipiscing diam viverra interdum.', '19.99'),
(3, 'Premium Plan', 'Lorem ipsum dolor sit amet consectetur. Feugiat id adipiscing diam viverra interdum.', '29.99');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_features`
--

CREATE TABLE `pricing_features` (
  `id` int(11) NOT NULL,
  `pricing_id` varchar(20) NOT NULL,
  `features` varchar(250) NOT NULL,
  `features_available` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_features`
--

INSERT INTO `pricing_features` (`id`, `pricing_id`, `features`, `features_available`) VALUES
(1, '1', 'Real-time signals', 'No'),
(2, '1', 'Basic analysis', 'No'),
(3, '1', 'Limited articles', 'Yes'),
(4, '2', 'Real-time signals', 'Yes'),
(5, '2', 'Expert analysis', 'No'),
(6, '2', 'Full access to articles', 'Yes'),
(7, '3', 'Real-time signals', 'Yes'),
(8, '3', 'Expert analysis', 'Yes'),
(9, '3', 'Exclusive content', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `currency` char(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Editor'),
(4, 'Author'),
(5, 'Author Manager'),
(6, 'Signal Manager');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `page_name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `meta_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_name`, `url`, `keywords`, `title`, `meta_description`) VALUES
(1, 'about-us', 'https://fxsignals.ae/about-us', '', 'Maximize Profits with FXSignals: Your Trusted Forex Signals Provider', 'Maximize Profits with FXSignals: Your Trusted Forex Signals Provider\" Discover how FXSignals leverages decades of experience and advanced analysis to help traders maximize profits. Transparency, integrity, and a data-driven approach are the core paradigms guiding FXSignals.'),
(2, 'home', 'https://fxsignals.ae', 'Confident Forex trading signals,Leading forex signals Provider', 'FXSignals empowers traders with expert analysis and data-driven signals to maximize forex profits', 'Maximize your forex trading profits with FXsignals, the leading provider of accurate and transparent trading signals. Our expert team combines advanced analysis with years of experience to deliver actionable signals for traders at all levels.'),
(3, 'blogs', 'https://fxsignals.ae/blogs', ' financial market analysis', 'Insights and Analysis: Explore Forex Trading Blogs', 'Stay informed with our comprehensive collection of forex trading blogs. Explore expert analysis, trading strategies, and market updates to enhance your trading skills and stay ahead in the financial markets.'),
(4, 'news', 'https://fxsignals.ae/news/forex', 'financial market updates, currency market analysis, forex market trends, and economic indicators.', 'Stay Updated with Latest Forex News', 'Get the latest forex news and stay ahead in the financial markets. Explore comprehensive market updates, currency analysis, and economic indicators to make informed trading decisions.');

-- --------------------------------------------------------

--
-- Table structure for table `signals`
--

CREATE TABLE `signals` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `page_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signals`
--

INSERT INTO `signals` (`id`, `type`, `sub_type`, `title`, `description`, `page_name`) VALUES
(1, '1', '1', 'm', '<p>m</p>\r\n', 'what-are-forex-signals'),
(2, '1', '1', 'm', '<p>jop</p>\r\n', '0');

-- --------------------------------------------------------

--
-- Table structure for table `signal_manager`
--

CREATE TABLE `signal_manager` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `sample_chart` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `status` varchar(20) DEFAULT 'on_hold',
  `role_name` varchar(12) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signal_manager`
--

INSERT INTO `signal_manager` (`id`, `username`, `firstname`, `lastname`, `profile_image`, `sample_chart`, `password`, `confirm_password`, `email`, `mobile_no`, `status`, `role_name`, `linkedin`) VALUES
(1, 'aakanksha mogha', 'aakanksha', 'mogha', '001ae28e226b239b46d0f7e7ca0c8154.png', '1d75599e70824d5f21f60521a70c1564.png', '$2y$10$CK34Z/QRm9pTnSrieT80Gu3zLXuF1qcGgd34qmibU1u1l0sf4J6WW', '', 'aakanskhamogha@gmail.com', '1234567890', 'approved', '', ''),
(2, 'aakanksha mogha', 'aakanksha', 'mogha', '62d822108a3776e86cee516d61eafc99.png', '12cf2bede2fe1b3cfe6d6efdd9ed4911.png', '$2y$10$b3csFjY03adF9ze/vlfbIeOA1KrtRoxhaIDS2Kyc9dJxeibDRM7fu', '', 'aakanskhamogha@gmail.comm', '1234567890', 'rejected', '', ''),
(3, 'aakanksha mogha', 'aakanksha', 'mogha', 'c50b33ae49889e53e421d9a29a1dfdd2.png', '13b130b2313aa17ab6a405b492e493bc.png', '$2y$10$9Fv0mOqCEpAv4o6AtsjQPOYBvPJeQqw0jlY/30NGU.s6Np4Bmvcrq', '$2y$10$wqk06ZtCax5vdKprlF2CdOp1.GdbAxILOh0L43Wc5DcLmpoxpCOpS', 'mogha@gmail.com', '1580765467', 'approved', '', ''),
(4, 'sumit mohanty', 'sumit', 'mohanty', 'fcbebee979138d668fcc9694902e4c64.png', '8e6165ae24b43f900a1c8a728096d334.png', '$2y$10$p9tXplm68y7mtld1dyIPCeTcwqqVRsuUFVaGGksTJNJdG2DSow796', '$2y$10$PY9wII4uTtmnM7r4dIRN..yEvJ4M1nuc9LYIer0NUPoPUKEidM5YK', 'sumitmohanty@gmail.com', '+91 81442-56', 'on_hold', '', ''),
(5, 'sumit Rai', 'sumit', 'Rai', 'a121a679d1f4ca84763262509150695b.png', 'fd0eb8ed275cf6e0d61d689371ffb7fa.png', '$2y$10$aglQ9RZphqG8f7MqBFr0N.1/d1s208kujK3a715ZgKiCIE1ma1bEG', '$2y$10$/GDIl9NPvjC5LnQSILvgauCm01N.K9ZwePjpvakQXBtuRg73zrabq', 'raisumitsignalstest@gmail.com', '1643173062', 'on_hold', '', ''),
(6, 'sumit mohanty', 'sumit', 'mohanty', '0150055ccb4242e7fb1033d8cfc2c27c.png', '57bc6310579ce93db3669deb78e112fa.png', '$2y$10$gf2gVKNzOQUsAGHU4n5kgea/sQBe8pZan1obFJvG35E3kBsj3GAMe', '$2y$10$TCxcQHIXJkVilJBXdnMBRuEjyQD4AW60dFa/tmrnkZKGB5ukAgUSe', 'sumitshahsm@gmail.com', '81242-56428', 'on_hold', '', ''),
(7, 'sumit shah', 'sumit', 'shah', '36fe1d937d928fa019b09a4e99f3bc0a.png', '34bb3c421728f4cf4fae07e8433734e0.png', '$2y$10$0iTuTy8.Jtq76EMa6DWWw.E3e3NAN.zFgaBWWbvFz94GBhmcrLs.C', '$2y$10$MCJ6sGWpWpGsxZq2U96MEOtgGF070jfqnkXP0nhJeRblEtgXRjRU.', 'sumitshah123sm@gmail.com', '81442-56428', 'on_hold', '', ''),
(8, 'sumit as', 'sumit', 'as', '0aa38edae5f138a5289643ff0cf3e020.png', '4bf23d887635144505c163cb96650016.png', '$2y$10$tMMSkeyywGHJUficnt3uhOnFhIqflxwAKGr9OB8Z8EsycYYGncakC', '$2y$10$lO7tHeFV1ZIu62o7tRI3tuzUzFNXKzq9P2KJAKkapuSx0yWpyCUyy', 'sumitas@gmail.com', '82442-56428', 'on_hold', '', ''),
(9, 'sumit shah', 'sumit', 'shah', '96e03896a184dc7ca71464b6ca896742.png', 'c3707f022dfc8398070ee6cbde7413e8.png', '$2y$10$xagBFyv7aT0MdRB6HRnap.y0U8rUtIHGU/f/VHJ3RlqjmNwmEewn6', '$2y$10$Qh6a3ZRkC6BFmy42rdSyNeiQxthDBNU8cWa8.Bmb2ktTfXSV0eYcS', 'sumitshahsm12@gmail.com', '1643179062', 'on_hold', '', ''),
(10, 'sumit shah', 'sumit', 'shah', 'fd6b019c6edcf9cab87b7291226ce1e8.png', 'fd43632d96eede263094a59ed27be8f2.png', '$2y$10$kIpCeFQh1rvMcKGp6yc1P.gtLesWueq6gW8QjTSjpWgipxcX4GWIO', '$2y$10$.SeUsh8/.tTvSoKGj6BTtupPZPIvUl9XxPLEUCF509hNpyyRRykHK', 'shahsumitsm@gmail.com', '8144156428', 'on_hold', '', ''),
(11, 'sumit shah', 'sumit', 'shah', '2d90ee7e4cfa3789a0c17cebc3590ad0.png', 'e54f5310ad67db536db80f464e8a47a2.png', '$2y$10$o6V6pSD1hCGfx18zVwvGE.D1wayzDlIGJExsuAOszknRfqoJPNCoG', '$2y$10$vAxWM2ZNf1g6TDC9jok3x.cfZSGIwkG6wCeSxuVvTGPcrYlq0VCxq', 'sumitshahsm23@gmail.com', '8144356428', 'on_hold', '', ''),
(12, 'sumit test', 'sumit', 'test', 'eeb00ed69ac911ae4b5a3634da2cac24.png', 'e222817c81be31b776e7fd8090107d53.png', '$2y$10$V8sYck5J96INhIe2u75rlehqNbBTapnY5ICrWEoHwk3Ulq4zRU/La', '$2y$10$2rv7eUiWuUpgoogKewK/xOaX2TSkrx95M7X81hoo1Vqycggin6dK.', 'testsumtsm@gmail.com', '8144756428', 'approved', '', ''),
(13, 'sumit shah', 'sumit', 'shah', 'd4df6d82a2a3462b3eff56a51309596a.png', 'cb9c257b0d14a9985b69b59047fe12d9.png', '$2y$10$HC/1gBBlb27NLKwU4YK9o.tA0e/O6Ii/tJ6H/lyoxlbVUF2Yaf9uK', '$2y$10$5d.NzvV0H0FOEtivfNBx4ObwkbiYqE38HxX84xzGGJkvKfzyAWvKG', 'sumitshahsm1234@gmail.com', '8144056428', 'on_hold', '', ''),
(14, 'sumit prasad', 'sumit', 'prasad', '073904f7877fe199dc15dd2b12ab06e1.png', 'ff04a6428ae23da620228b94bcf2877c.png', '$2y$10$pESeIjtPDnX173SoA1GHpeo.X4FI5Q489Av9V4xEqWz9CLoywfyQK', '$2y$10$Qo8T0.9jZitwFvzPamYu2.u4ti8UFMVY80nh/161iReR/rlQzeYHm', 'prasadsumit@gmail.com', '8144166428', 'rejected', '', ''),
(15, 'Pradeep Kandula', 'Pradeep', 'Kandula', '6550ca15d1c343a50a9810c36213ca1a.png', '58a036e7dc54186aae7df9203303c757.png', '$2y$10$r220Vj6ty3Ai5b5aRI8vc.s7Yh6ZVsZvNfqWWDzWJl8ejV6GWoy9K', '$2y$10$IS6SZXBCWPxzfzi1vLwPIe7m44aFdxC1ZGvGzpS/QQbo3hm7euDXi', 'pradeepkandula@gmail.com', '8144956428', 'on_hold', '', ''),
(16, 'Rohit Rai', 'Rohit', 'Rai', '77faba270bed274c6839d101afda9ce8.png', '7d403c5a22656166115e54959ea15293.png', '$2y$10$XiyKFj/RQYWoMhN28Az6auIALYhJiusLJSa8NkqgKxIsdN70HHuu2', '$2y$10$p/zJY.Y4q.yB4ENmBNNGiu3c2oeRU2nw3Vzp9Zx0bPPFo5r46kX5i', 'rohitrai11marchsignal@gmail.com', '8144256824', 'on_hold', '', ''),
(17, 'Rohit Rai', 'Rohit', 'Rai', 'bb1278bcec5036f9c0b44adfde3ca26a.png', 'bb6c742c5c87a25501fac07e1998a904.png', '$2y$10$OidoQNPb3JGYu0dijNHsieZuaJMWbtueubIBQKKq3U.oUf5V4PIi.', '$2y$10$U92c3JEwgkoTsjut4I5swu2ZgipNNnDMSZQ1Eq2vWXcUvn56LHHuC', 'rohitraisignalstesrt11march@gmail.com', '8144056423', 'on_hold', '', ''),
(18, 'admin', 'Lalit', 'Rai', '47ee37ce92bf94fe5e8ad510a2bc7195.jpeg', '6e8a96ab50753d7d414e537338488eef.jpeg', '09', '', 'aakanksha@gmail.com', '1234567890', 'on_hold', 'a', 'signal_manager_chart'),
(19, 'admin', 'Lalit', 'Mogha', 'da25d6ff309ac4e06039db124d722a52.jpeg', '7b324b72048dcc9ee4177c88a61355b7.jpeg', 'l', '', 'aakanksha@gmail.com', '7786786767', 'approved', 'a', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `signal_manager_profile`
--

CREATE TABLE `signal_manager_profile` (
  `id` int(11) NOT NULL,
  `signal_manager_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `signal_manager_profile_image` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `linkedin` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `twitter` longtext NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signal_manager_profile`
--

INSERT INTO `signal_manager_profile` (`id`, `signal_manager_id`, `username`, `signal_manager_profile_image`, `email`, `mobile_no`, `linkedin`, `facebook`, `instagram`, `twitter`, `about`) VALUES
(1, 1, 'Aakanksha Mogha', '5ed13e00586afa5b6c6c74bf13ee36bb.jpeg', 'aakanksha@gmail.com', '1234567890', 'http://localhost/fxsignals', 'http://localhost/fxsignals', 'http://localhost/fxsignals', 'http://localhost/fxsignals', 'http://localhost/fxsignals');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(50) NOT NULL,
  `sub_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `sub_menu`) VALUES
(1, '1', 'Forex'),
(2, '1', 'Bitcoin'),
(3, '1', 'Gold'),
(4, '1', 'EUR/USD'),
(5, '1', 'Trade Ideas'),
(6, '1', 'Trading Breifs'),
(7, '2', 'Forex Rates'),
(8, '2', 'Crypto Rates'),
(9, '2', 'Stock Rates'),
(10, '2', 'Indices Rates'),
(11, '2', 'Commodities Rates'),
(12, '3', 'Forex'),
(13, '3', 'Crypto'),
(14, '3', 'Stock');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_menu`
--

CREATE TABLE `sub_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(50) NOT NULL,
  `sub_menu_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_menu`
--

INSERT INTO `sub_sub_menu` (`id`, `menu_id`, `sub_menu_id`, `name`) VALUES
(1, '2', '7', 'EUR/USD'),
(2, '2', '7', 'USD/JPY'),
(3, '2', '7', 'GBP/USD'),
(4, '2', '7', 'USD/CHF'),
(5, '2', '7', 'USD/CAD'),
(6, '2', '7', 'AUD/USD'),
(7, '2', '7', 'NZD/USD'),
(8, '2', '8', 'BTC'),
(9, '2', '8', 'ETH'),
(10, '2', '8', 'SHIBA'),
(11, '2', '8', 'Ripple'),
(12, '2', '8', 'DEFI'),
(13, '2', '8', 'SOLNA'),
(14, '2', '8', 'SOLNA'),
(15, '2', '9', 'TESLA'),
(16, '2', '9', 'APPLE'),
(17, '2', '9', 'COIN'),
(18, '2', '9', 'GOOGLE'),
(19, '2', '9', 'FACEBOOK'),
(20, '2', '9', 'AMAZON'),
(21, '2', '9', 'NETFLIX'),
(22, '2', '10', 'DOW'),
(23, '2', '10', 'S&P100'),
(24, '2', '10', 'DAX'),
(25, '2', '10', 'FTSE'),
(26, '2', '10', 'NIKKIE1225'),
(27, '2', '11', 'SILVER'),
(28, '2', '11', 'PLATINUM'),
(29, '2', '11', 'USOIL'),
(30, '2', '11', 'UKOIL'),
(31, '2', '11', 'PALLADIUM'),
(33, '3', '12', 'What are Forex Signals?'),
(34, '3', '12', 'How to use our Forex Signals?'),
(35, '3', '12', 'Auto vs Manual Forex Signals?'),
(36, '3', '12', 'Forex Signals for Technical Traders'),
(37, '3', '12', 'Forex Signals for Scalping'),
(38, '3', '12', 'Forex Signals Testimonials'),
(39, '3', '12', 'More Forex Signals Articles'),
(40, '3', '13', 'What are Crypto Trading Signals?'),
(41, '3', '13', 'How to use Crypto Trading Signals?'),
(42, '3', '13', 'Crypto Signals for Technical Traders'),
(43, '3', '13', 'Make the most of our Crypto Trading Signals'),
(44, '3', '13', 'Crypto Scalping Signals'),
(45, '3', '13', 'Automated vs Manual Crypto Signals'),
(46, '3', '13', 'Trading Binance with Crypto Signals'),
(47, '3', '14', 'What are Stock Trading Signals?'),
(48, '3', '14', 'How to use Stock Trading Signals?'),
(49, '3', '14', 'Stock Trading Indicators for beginners'),
(50, '3', '14', 'Automated vs Manual Stock Trading Signals'),
(51, '3', '14', 'How to use Stock volume as a Trading Signal?'),
(52, '3', '14', 'Best Technical Indicators for the Stock Market');

-- --------------------------------------------------------

--
-- Table structure for table `sub_type`
--

CREATE TABLE `sub_type` (
  `id` int(11) NOT NULL,
  `sub_type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_type`
--

INSERT INTO `sub_type` (`id`, `sub_type_name`) VALUES
(1, 'commodities'),
(2, 'CFD');

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(11) NOT NULL,
  `trade_type` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `page_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `trade_type`, `title`, `description`, `page_name`) VALUES
(1, '1', 'aa', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'trade'),
(2, '1', 'mk', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'cryptocurrency-brokers');

-- --------------------------------------------------------

--
-- Table structure for table `trading_signals`
--

CREATE TABLE `trading_signals` (
  `id` int(11) NOT NULL,
  `entry_point` varchar(250) NOT NULL,
  `package` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `action` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'active',
  `stop_loss` varchar(250) NOT NULL,
  `take_profit` varchar(250) NOT NULL,
  `time_close` varchar(255) NOT NULL,
  `sl_tp` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trading_signals`
--

INSERT INTO `trading_signals` (`id`, `entry_point`, `package`, `date`, `category`, `sub_category`, `action`, `status`, `stop_loss`, `take_profit`, `time_close`, `sl_tp`, `created_at`, `created_by`) VALUES
(1, '146.98', '2', '2024-03-11', '1', '3', 'sell', 'active', '147.38', '146.68', '', '', '2024-03-11 14:18:37', ''),
(2, '2179.29', '1', '2024-03-11', '4', '18', 'sell', 'active', '2193.29', '2171.29', '', '', '2024-03-11 14:18:42', ''),
(3, '62438.6', '1', '2024-03-11', '2', '7', 'buy', 'active', '49000', '75000', '', '', '2024-03-11 08:55:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type_name`) VALUES
(2, 'forex');

-- --------------------------------------------------------

--
-- Table structure for table `upload_image`
--

CREATE TABLE `upload_image` (
  `id` int(11) NOT NULL,
  `images` varchar(250) NOT NULL,
  `folder_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_image`
--

INSERT INTO `upload_image` (`id`, `images`, `folder_name`) VALUES
(16, '87625451c70765c26f8efa0e3b7a8658.jpeg', NULL),
(17, '781f6760b3a6ccae4f20940a47a2041d.jpeg', NULL),
(18, '0ef4a1724a717dc177f95e1004b30d6a.jpeg', NULL),
(19, 'fc20719545d6f95e078edbd75f0650e2.jpeg', NULL),
(20, '13b3898de3a4c01c0ae229c5a65f426a.jpeg', 'news'),
(21, '53ca199a04a1c1cd3762dd61a48399db.jpeg', 'news'),
(22, 'e6cb321c01209756e5400d0ff6d6c8de.png', 'news'),
(23, 'd007b9af3cc30cd76f548c65424e6761.jpeg', 'news'),
(24, '9d3d4dbd7ecb6a08e60a98076e611114.jpeg', 'news'),
(25, 'c6e05145ab3e8854f75aebb6d3885729.png', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  `is_premium` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `is_admin`, `is_premium`, `created_at`, `updated_at`) VALUES
(1, 'Aakanksha Mogha', 'Aakanksha', 'Mogha', 'aakanksha@gmail.com', '1234567890', '$2y$10$aYichykz2srGpzb3BmgxpuhCsbDbBsgsIMMYOukXvks1nIRfg03SG', 1, 0, '2024-01-08 05:33:23', '2024-01-08 05:33:23'),
(2, 'Rohit Rai', 'Rohit', 'Rai', 'rohitrai275101@gmail.com', '18888888888', '$2y$10$ebX3yV0kqVMcUEczrKJ2WeK5GUaPBrbxAYcynLWGu/n28qUggaMmO', 0, 0, '2024-01-08 05:36:08', '2024-01-08 05:36:08'),
(3, 'test test', 'test', 'test', 'test123@gmail.com', '8888888888', '$2y$10$aYichykz2srGpzb3BmgxpuhCsbDbBsgsIMMYOukXvks1nIRfg03SG', 0, 0, '2024-01-08 05:49:32', '2024-01-08 05:49:32'),
(5, 'Aakankshass Mogha', 'Aakankshass', 'Mogha', 'aakanksha@gmail.comss', '9876543210', '$2y$10$RrkCnfbQ.6nl6jAunTsijeE6BkC3hmfRLsDUET0/BQL.xpWJVDF2O', 0, 1, '2024-01-08 08:18:56', '2024-01-08 08:18:56'),
(6, 'Rohit Rai', 'Rohit', 'Rai', 'mahipgupta@gmail.com', '18888888888', '$2y$10$7gl7/PhqbT4juLbr9GklteN4v/1K8hIXMMCLUVUkxU2szgA.tHtsa', 0, 0, '2024-01-09 04:44:25', '2024-01-09 04:44:25'),
(7, 'Sumit pathak', 'Sumit', 'pathak', 'sumit@gmail.com', '918144256428', '$2y$10$n5/nn0GJ4URku/zv1NJ83O2vKOTUPqZNkA4pJZe8nzADpoZmSbOjm', 0, 0, '2024-01-09 05:05:21', '2024-01-09 05:05:21'),
(8, 'Rohit Rai', 'Rohit', 'Rai', 'mahipgupta123@gmail.com', '918144256428', '$2y$10$VYLzQb5vlJXPTsn1a9aSyesbncbd8IgDEgCWTXZ/Vr0k54aRakBDe', 0, 0, '2024-01-09 05:20:44', '2024-01-09 05:20:44'),
(9, 'Nitesh gupta', 'Nitesh', 'gupta', 'nitesh@gmail.com', '18888888888', '$2y$10$j228g2UiL.BXnHgh3TNeQu4kEDwGZmHG3kZ1ivEwIqdbU8uV/Ocq.', 0, 0, '2024-01-09 05:27:56', '2024-01-09 05:27:56'),
(10, 'Rohit Rai', 'Rohit', 'Rai', 'mahipguptatest@gmail.com', '18888888888', '$2y$10$.thYsQ0YMZQmJit2xSCKuOW.GOuYizagmO.9XRtP7nQpPqElfyZW.', 0, 0, '2024-01-09 06:46:26', '2024-01-09 06:46:26'),
(11, 'Rohit Rai', 'Rohit', 'Rai', 'mahip.gupta@gmail.com', '18888888888', '$2y$10$btDSDF/6TCU5jK.xMYT38eIARwbYeJASTllNXMgLXxyfHC8HdkgY.', 0, 0, '2024-01-10 11:16:10', '2024-01-10 11:16:10'),
(12, 'test test', 'test', 'test', 'test1234@gmail.com', '8888888888', '$2y$10$TZOGQ0NqD2YwBvFwfsLfmO5kyyk5o2zebXVsTVyplGXmaqyp5US2e', 0, 0, '2024-01-10 11:37:20', '2024-01-10 11:37:20'),
(13, 'Rohit Rai', 'Rohit', 'Rai', 'dinesh@gmail.com', '18888888888', '$2y$10$AMgWpZm.5pt.wZbxtthWjOw0mgUbX03lpp8K24cQAVuWwWNsFWK6W', 0, 0, '2024-01-10 18:16:09', '2024-01-10 18:16:09'),
(14, 'abcde fgh', 'abcde', 'fgh', 'text@gmail.com', '2345678901', '$2y$10$BfEEhYe2CQ92huqXZwcPDOGBj30MHFgiYeZC4fRu09lB7AgHST6SG', 0, 0, '2024-01-11 05:02:13', '2024-01-11 05:02:13'),
(15, 'abcde fgh', 'abcde', 'fgh', 'tett@gmail.com', '0987654321', '$2y$10$YDRnOPqOLuXDVGDdzTSM8.2UgiOPQsxzEUiPjJUqBNJtzPp3xjfty', 0, 0, '2024-01-11 05:30:13', '2024-01-11 05:30:13'),
(16, 'abcde fgh', 'abcde', 'fgh', 'text@gmail.cos', '8989999999', '$2y$10$abF3T2a9rESHJ2vjl02WmexIU5zJE3DnK4gPfRJ4WQQRS4hrCqMBa', 0, 0, '2024-01-11 05:31:55', '2024-01-11 05:31:55'),
(17, 'rohit rai', 'rohit', 'rai', 'abhinav@gmail.com', '918144256428', '$2y$10$Jam6YMJfpe00omfm/QFfFOIqAxnDqAyGJJx/EsV8UPKzpphoaVpg6', 0, 0, '2024-01-16 06:32:34', '2024-01-16 06:32:34'),
(18, 'rohit rai', 'rohit', 'rai', 'abhinav123@gmail.com', '918144256428', '$2y$10$XWBgWT38I4VZoGIUgdxideKwmN9EJ5QulTlf4ncTM5O0raNyghkPC', 0, 0, '2024-01-16 06:39:37', '2024-01-16 06:39:37'),
(19, 'rohit rai', 'rohit', 'rai', 'abhinav@raigmail.com', '918144256428', '$2y$10$A8nHrDT3xlhwTju6MrGqKOeCtCEM/NHnzVwDz92.tUiK38TPU4ggq', 0, 0, '2024-01-16 06:42:31', '2024-01-16 06:42:31'),
(20, 'sumit pandey', 'sumit', 'pandey', 'sumitpandey@gmail.com', '918144256428', '$2y$10$2le9TpNUec79A8mn7d0p3.xS.IA7zCMbqYylnE.swQJ6Q8PaTMyry', 0, 0, '2024-01-16 06:48:06', '2024-01-16 06:48:06'),
(21, 'prateek gupta', 'prateek', 'gupta', 'prateekgupta@gmail.com', '918144256428', '$2y$10$MUTGlGJEGNG.klxgl9vQdO8fSOAWcjXQyZSe82Yw90UWckqmRCEGq', 0, 0, '2024-01-16 06:51:07', '2024-01-16 06:51:07'),
(22, 'prateek pandey', 'prateek', 'pandey', 'prateekpandey@gmail.com', '918144256428', '$2y$10$yulwXsb9B/AjB/AtJy1uy.Fsnx7bKJW2Qa9eZprxgLUdz8PAC0YYO', 0, 0, '2024-01-16 06:52:02', '2024-01-16 06:52:02'),
(23, 'sudeep singh', 'sudeep', 'singh', 'sudeepsingh@gmail.com', '918144256428', '$2y$10$QlbvHxyudDsugln1hh7BmuBSy9wdq/.f8WZBTHWvNNOkcWIe82uo2', 0, 0, '2024-01-16 06:56:48', '2024-01-16 06:56:48'),
(24, 'anil singh', 'anil', 'singh', 'anilsingh@gmail.com', '918144256428', '$2y$10$IkKS0aJr7vQZKAm30EykDeflEjGlW1bHxwCR2s4h1z/8KSIIEGMb2', 0, 0, '2024-01-16 07:00:17', '2024-01-16 07:00:17'),
(25, 'shashank pathak', 'shashank', 'pathak', 'shashank@gmail.com', '918144256428', '$2y$10$t6GAV9SOSSyVevXPBaSzqO9O5E4s8xfvKBHgbxJ2PPg7N4OrR5AEm', 0, 0, '2024-01-16 07:04:02', '2024-01-16 07:04:02'),
(26, 'mahip gupta', 'mahip', 'gupta', 'gupta@gmail.com', '918707599076', '$2y$10$/VQsKXBeX2oCweaXMoCj9eMZq1RTgeiIPLNcpFRb4QKjU0UI7.4ba', 0, 0, '2024-01-16 12:25:52', '2024-01-16 12:25:52'),
(27, 'pavan singh singh', 'pavan singh', 'singh', 'pavansingh@gmail.com', '918144256428', '$2y$10$9JQhzvYCvp6av8n/YHbVvuXxrtHDRelA9IM4D04hQfYRFH/baDBXO', 0, 0, '2024-01-16 13:37:41', '2024-01-16 13:37:41'),
(28, 'harsh singh', 'harsh', 'singh', 'harshsingh@gmail.com', '918144256428', '$2y$10$ovhpAE06xZoUS5iA5kVWWuDb1tEDayMLTiYvjIT.gzcReRYI7usc2', 0, 0, '2024-01-16 13:40:10', '2024-01-16 13:40:10'),
(29, 'shivam sinha', 'shivam', 'sinha', 'shivamsinha@gmail.com', '918144256428', '$2y$10$h95GPqdJUiuNHpwOUV9g.OZzZM7Rrur0.MPOjymD8BNLCU2Ukjupe', 0, 0, '2024-01-16 13:41:53', '2024-01-16 13:41:53'),
(30, 'sumit gupta', 'sumit', 'gupta', 'sumitgupta@gmail.com', '918144256428', '$2y$10$.8jI7Kfkt0L2bcHGcI9Kre/TEkEHnKFXXmNefkOe0Xemoy5Gt.V9C', 0, 0, '2024-01-16 14:00:57', '2024-01-16 14:00:57'),
(31, 'aditya pandey', 'aditya', 'pandey', 'adityapandey@gmail.com', '918144256428', '$2y$10$ftWAdhaUUSf5ZLZIL/pXKOP.pco8XXrucMvzAQv7gqQKNL56qWZrK', 0, 0, '2024-01-16 23:00:57', '2024-01-16 23:00:57'),
(32, 'kushagra chauhan', 'kushagra', 'chauhan', 'kush123@gmail.com', '918144256428', '$2y$10$7brPc5N0cjzi1tkP5ivrP.y73pjozg..mGZNlZcUX76kSfgwEYgnq', 0, 1, '2024-01-16 23:04:42', '2024-01-16 23:04:42'),
(33, 'prateek rai', 'prateek', 'rai', 'prateek@gmail.com', '918144256428', '$2y$10$PBb4.x4qmsy1PsW7OFI9F.xJaxs8Xdrd9dzv5TczVpRBGuCKC4wL6', 0, 0, '2024-01-16 23:07:06', '2024-01-16 23:07:06'),
(34, 'prateek singh', 'prateek', 'singh', 'prateeksingh@gmail.com', '918144256428', '$2y$10$T2Ks4NumUosUqHkr1BqXyeelcOOgqNJTAJ0MEuKFuym9dZOrPVzPC', 0, 0, '2024-01-16 23:10:08', '2024-01-16 23:10:08'),
(35, 'anil kumar kumar', 'anil kumar', 'kumar', 'anilkumar@gmail.com', '918144256428', '$2y$10$vFYKIYw/rhElZVFcyPJOIu/Y08jU4wIw0v/Wi2L6pr1lLANA95o3W', 0, 0, '2024-01-16 23:12:04', '2024-01-16 23:12:04'),
(36, 'sudeep pandey', 'sudeep', 'pandey', 'sudeeppandey@gmail.com', '918144256428', '$2y$10$0jCA6c/I3X43EgAFyf.FDuYX.m4Z31F5r68Gsrr.i.KxrYpQVW9G2', 0, 0, '2024-01-16 23:15:08', '2024-01-16 23:15:08'),
(37, 'shubham kumar', 'shubham', 'kumar', 'shubhamkumar@gmail.com', '918144256428', '$2y$10$r0Az7YaP82mB.zluCrc1hOWygkZm9QRNC75P9h/Xzzj0NViVR8Kp6', 0, 0, '2024-01-16 23:16:11', '2024-01-16 23:16:11'),
(38, 'sumit mahto', 'sumit', 'mahto', 'sumitmahto@gmail.com', '918144256428', '$2y$10$yo/Yd56ZWToD61E7/PIuBunQkt/2yO13.i6zGBRIxz6DkkDO9rNzG', 0, 0, '2024-01-16 23:20:00', '2024-01-16 23:20:00'),
(39, 'sudeep pathak', 'sudeep', 'pathak', 'sudeeppathak@gmail.com', '918144256428', '$2y$10$OKamzHrxqERzZ/v7naxDSOZfXBPL5nc/dcWtbZwPS4HhPvfVYYZ4C', 0, 0, '2024-01-16 23:27:36', '2024-01-16 23:27:36'),
(40, 'prateek pandey', 'prateek', 'pandey', 'prateekpandey123@gmail.com', '918144256428', '$2y$10$AHzXqIjOhXigOdZF/8Lx0.m9VWl/7zOe5zKeyGcbQ05uOKOlSEAmS', 0, 0, '2024-01-16 23:30:08', '2024-01-16 23:30:08'),
(41, 'sudeep singhel', 'sudeep', 'singhel', 'sudeepsinghel@gmail.com', '918144256428', '$2y$10$ZnQW/QrhfPnhoeQf2RZV2.3XoIO5N7hdn7IgOE6YGSoXS4ylGrtV6', 0, 0, '2024-01-16 23:31:23', '2024-01-16 23:31:23'),
(42, 'shashank singh', 'shashank', 'singh', 'shashanksingh@gmail.com', '918144256428', '$2y$10$oY4TRLlGyf3siikQjhiJUO48VJoBga8AFlxTffk5UdDknk94oXL/2', 0, 0, '2024-01-16 23:32:53', '2024-01-16 23:32:53'),
(43, 'prateek chauhan', 'prateek', 'chauhan', 'prateekchahuhan@gmail.com', '918144256428', '$2y$10$lFzLR8hgdCCqtXmfVKWoxe.3eqtqJ6lVw3J6iDmclgoVwomKj752e', 0, 0, '2024-01-16 23:35:21', '2024-01-16 23:35:21'),
(44, 'prateek chaubey', 'prateek', 'chaubey', 'prateekchaubey@gmail.com', '918144256428', '$2y$10$J8rRfuJgGp5kSGY6i6aqRu7ReHzbZWIAV3fgx1jX3UAJdS3Yv34qy', 0, 0, '2024-01-16 23:37:12', '2024-01-16 23:37:12'),
(45, 'rohit rai', 'rohit', 'rai', 'rohitkumartest@gmail.com', '918144256428', '$2y$10$7G2R8rVeTmDHvA2y1bcLherdWgxNnxyH6doorniS0L9MLjCqaNoVO', 0, 0, '2024-01-16 23:41:02', '2024-01-16 23:41:02'),
(46, 'vikas goyal', 'vikas', 'goyal', 'vikasgoyal@gmail.com', '918144256428', '$2y$10$wSgo0NgAO4yZvksvvyDkmecruee2yymp3N7DA2KFYiafRa7vNy4Ly', 0, 0, '2024-01-16 23:44:50', '2024-01-16 23:44:50'),
(47, 'vikas pathak', 'vikas', 'pathak', 'vikaspathak@gmail.com', '918144256428', '$2y$10$zxJK2cW0OYXgsymu5FXk9OhAMwoHFJZvA1Th.JNk8AUNjt98SpcAO', 0, 0, '2024-01-16 23:46:13', '2024-01-16 23:46:13'),
(48, 'sudeep roy', 'sudeep', 'roy', 'sudeeproy@gmail.com', '918144256428', '$2y$10$fdtX7lUMqHK39fR90BDtL.DhLS8TyHV8pIU7Mm9R9dNRShQJxBXV.', 0, 0, '2024-01-16 23:49:24', '2024-01-16 23:49:24'),
(49, 'sudeep roy', 'sudeep', 'roy', 'sudeeproy@gmail.com', '918144256428', '$2y$10$yNL4objHDGhvetOpMnCaOuviscIem5GfPUNueE42ACYolnMpKa2pC', 0, 0, '2024-01-16 23:49:24', '2024-01-16 23:49:24'),
(50, 'sudeep roy', 'sudeep', 'roy', 'sudeeproy@gmail.com', '918144256428', '$2y$10$wL0bBXnu3CnewSrf32hns.pCZfzZy2hNBehC5DfFikaXFrqcxse8i', 0, 0, '2024-01-16 23:49:24', '2024-01-16 23:49:24'),
(51, 'rohit17jantest rai', 'rohit17jantest', 'rai', 'rohitsingh@gmail.com', '918144256428', '$2y$10$MmLAcTJeoHW19.lLZnQoJOG33iytZAQHzDnAtVYw/Q9Gi9tB4zYBa', 0, 0, '2024-01-17 13:32:49', '2024-01-17 13:32:49'),
(52, 'prateek chauhan', 'prateek', 'chauhan', 'pc@gmail.com', '91', '$2y$10$BfDc1b9MPkB7654JWRHxh.xGqPY4cqzCix30giG8sxB3/SamEhyBC', 0, 0, '2024-01-17 13:48:11', '2024-01-17 13:48:11'),
(53, 'sudeep rai', 'sudeep', 'rai', 'sudepprai@gmail.com', '918144256428', '$2y$10$uacl/ITJRpDARZ/F3MPtl.8psSJfdefgNv9s0IRLi.1X5FR4zU9qm', 0, 0, '2024-01-17 13:49:13', '2024-01-17 13:49:13'),
(54, 'sudeep sudeep', 'sudeep', 'sudeep', 'sudeep123@gmail.com', '918144256428', '$2y$10$kDBbGOYjZ/Znfoa3jpnoUejsWLazsFZ3LFrvmnCtMmaTHLUx7GmjC', 0, 0, '2024-01-17 13:55:06', '2024-01-17 13:55:06'),
(55, 'test18jan test', 'test18jan', 'test', 'testting123@gmail.com', '918144256428', '$2y$10$kzIeVkvV1qeRvMBK8gd2w.d5iTU5kjOjDf8JXIFb6ILC60irFU60S', 0, 0, '2024-01-18 04:11:34', '2024-01-18 04:11:34'),
(56, 'test18jan test', 'test18jan', 'test', 'pramod@gmail.com', '918144256428', '$2y$10$zjSAyE5Pr.1Uig.FeodvdO/v8KpkFteKgxDvEH0Q2gYCvdFzEzrKS', 0, 0, '2024-01-18 04:46:55', '2024-01-18 04:46:55'),
(57, 'test18jan2 test', 'test18jan2', 'test', 'pramodsingh@gmail.com', '918144256428', '$2y$10$6TDvk9sMbDxiPEMUQWJ5f.Lldn4kKhF9KHYcklq1PS.wjbj8YwGhq', 0, 0, '2024-01-18 05:29:52', '2024-01-18 05:29:52'),
(58, 'test18jan test', 'test18jan', 'test', 'rohitrai0101rm@gmail.com', '918144256428', '$2y$10$AeWDQCSU23IDEjPjJDnZ..S3EwVKcEa9QNBsjUnV4738adZByNVmi', 0, 0, '2024-01-18 05:41:27', '2024-01-18 05:41:27'),
(59, 'rohit tikoo', 'rohit', 'tikoo', 'tikoo@gmail.com', '91', '$2y$10$IqH.AKisfcg0kkCvHPKkb.8I87ePVLSEVrZw1.NKfQQmLjdfluzYK', 0, 0, '2024-01-18 08:54:30', '2024-01-18 08:54:30'),
(60, 'arun mishra', 'arun', 'mishra', 'arun@gmail.com', '918144256428', '$2y$10$0y7tmOvRomGzx7vLXN8CCuwnQT3X44kxuhw/cZrpqz78Nz.UdOjqG', 0, 0, '2024-01-18 09:02:09', '2024-01-18 09:02:09'),
(61, 'test18jan test', 'test18jan', 'test', 'aruntest@gmail.com', '18', '$2y$10$jMWJ0gcHOwKI.jjnjWFJQOSjGAbbbC7Ow116p5j48Xt0FwdsqtGXC', 0, 0, '2024-01-18 13:44:03', '2024-01-18 13:44:03'),
(62, 'test18jan test', 'test18jan', 'test', 'arunrai@gmail.com', '918144256428', '$2y$10$b0NhD17Vs3.p52pB8CVrJO8gxRbCPah4VMki1G3OER3kiJ6liVfqG', 0, 0, '2024-01-18 13:46:23', '2024-01-18 13:46:23'),
(63, 'test18jan test', 'test18jan', 'test', 'arunsingh@gmail.com', '18144256428', '$2y$10$NAAPbAlbFpMCNTLxaVr9H.hUBL/Cm2RXxznWhGZNYYfp6IFyX0rYa', 0, 0, '2024-01-18 13:53:17', '2024-01-18 13:53:17'),
(64, 'test18jan test', 'test18jan', 'test', 'testingtesting@gmail.com', '918144256428', '$2y$10$79wW3kmoQA6XXiB/EZnLfesONoTXuHpS2r3R2Ya64wCJWUPCNqRnm', 0, 0, '2024-01-19 04:21:01', '2024-01-19 04:21:01'),
(65, 'test18jan test', 'test18jan', 'test', 'testinegtesting@gmail.com', '918144256428', '$2y$10$atCZVuRxN8M3/yBlMkHFL.L70nZx/WqvSo81iiKa1mZhgGPfG9DQi', 0, 0, '2024-01-19 04:23:25', '2024-01-19 04:23:25'),
(66, 'test18jan test', 'test18jan', 'test', 'testineeegtesting@gmail.com', '918144256428', '$2y$10$vG8zQEQ0E2UNQ2W/5PO/9Oy3TNhD43UDyAiMrczT3vGmJsIYQYWUy', 0, 0, '2024-01-19 04:23:33', '2024-01-19 04:23:33'),
(67, 'test18jan2 test', 'test18jan2', 'test', 'aruntesting123@gmail.com', '918144256428', '$2y$10$UmJnGhh.S1GxXRJtss1z3O5tn0MuYe4OgXR/ia.YruZnaoHGW.vzC', 0, 0, '2024-01-19 04:29:08', '2024-01-19 04:29:08'),
(68, 'test18jan tikoo', 'test18jan', 'tikoo', 'aruntikoo123@gmail.com', '18144256428', '$2y$10$yduBxJ8MF7k8tXQcSCGXG.DziS9xW7rzJuHe7Ceu3oJ43zJyeeFzy', 0, 0, '2024-01-19 04:33:12', '2024-01-19 04:33:12'),
(69, 'test18jan tikoo', 'test18jan', 'tikoo', 'aruntikoo12345@gmail.com', '18144256428', '$2y$10$gMsmzeh6puz0myugc7/4E.KWwntwShwxP50YcszI8sHga7WIFixTe', 0, 0, '2024-01-19 04:34:45', '2024-01-19 04:34:45'),
(70, 'test18jan tikoo', 'test18jan', 'tikoo', 'aruntikoo12345678@gmail.com', '18144256428', '$2y$10$OREIMmlOT/7fWz7sFzngiunMdGZmHt7yjLf0xyEm/tQ4H4jvlNGlq', 0, 0, '2024-01-19 04:37:26', '2024-01-19 04:37:26'),
(71, 'test18jan test', 'test18jan', 'test', 'aruntushar@gmail.com', '18144256428', '$2y$10$0eAJHK423M8oGSAbIpUgieS2KO5KYnpDFHUMWZ1gJURzOeuCQf3Xa', 0, 0, '2024-01-19 04:40:21', '2024-01-19 04:40:21'),
(72, 'test18jan tikoo', 'test18jan', 'tikoo', 'arunpandey@gmail.com', '18144256428', '$2y$10$bbgwWuyg.ZEa/vFfY8Exd.ElWs03cG.kBSiA4rT4qh7cZFI1VECNG', 0, 0, '2024-01-19 04:42:56', '2024-01-19 04:42:56'),
(73, 'test18jan tikoo', 'test18jan', 'tikoo', 'arunpandey123456@gmail.com', '18144256428', '$2y$10$7gEoYWlma6HpSqh5bw6dT.6IDSO9VC1ztANIJvvAFnJ8fkXXG75..', 0, 0, '2024-01-19 04:45:19', '2024-01-19 04:45:19'),
(74, 'test18jan2 test', 'test18jan2', 'test', 'arungovil@gmail.com', '18144256428', '$2y$10$hvRBb/pXAx.7MojUcADwcuDq3W9gIBAwopDW3JiBYCOm.LutJgyYq', 0, 0, '2024-01-19 04:46:24', '2024-01-19 04:46:24'),
(75, 'test18jan test', 'test18jan', 'test', 'arunsumit@gmail.com', '18144256428', '$2y$10$thC4Jc2i0YTqA50KRFg5fuQQjSnOhthTfHync7OKA8fb5nUDzUT8y', 0, 0, '2024-01-19 04:51:12', '2024-01-19 04:51:12'),
(76, 'rohit singh test', 'rohit singh', 'test', 'sumitpramod@gmail.com', '918144256428', '$2y$10$vvDMr5724SPYoAk1br.fVeLdpIVeu13bJUxvA/cIz7ql8HK6tiuOe', 0, 0, '2024-01-19 04:53:07', '2024-01-19 04:53:07'),
(77, 'test18jan test', 'test18jan', 'test', 'arunsumit12345678@gmail.com', '918144256428', '$2y$10$ub2.SV4NRwH.FQZb0fpPs.8IMzrnXQ8G.VJqQd6IxbT9bmY5.F0me', 0, 0, '2024-01-19 07:27:18', '2024-01-19 07:27:18'),
(78, 'Jay Jay', 'Jay', 'Jay', 'jay@gmail.com', '918144256428', '$2y$10$yv/fVcPJaVLZhOqCFXvwk.nAZnM80HkRY.wTa8P6LuEKm9sqfYNUe', 0, 0, '2024-01-19 08:48:56', '2024-01-19 08:48:56'),
(79, 'd d', 'd', 'd', 'arunddd@gmail.com', '18144256428', '$2y$10$R50GCLXr8/hDcsoDfAoRUOlzQPkoukDIfrddipKAIG41cCOmrWRIK', 0, 0, '2024-01-19 09:28:09', '2024-01-19 09:28:09'),
(80, 'new19jan test', 'new19jan', 'test', '19jan@gmail.com', '918144256428', '$2y$10$ycXvkPHr308oyzNfn63FJegWNMFeYQF.7EXXemscNVzahBJExxjn2', 0, 0, '2024-01-19 09:45:30', '2024-01-19 09:45:30'),
(81, 'Vikas vikram', 'Vikas', 'vikram', 'vikasvikram@gmail.com', '918144256428', '$2y$10$cfZet1hFbDn1a.o88ggOdOYH/1AaQp.D5rj1ev952ra9YN9LTmBnK', 0, 1, '2024-01-19 09:48:17', '2024-01-19 09:48:17'),
(82, 'rohit rai', 'rohit', 'rai', 'vikasvikram123456789@gmail.com', '918144256428', '$2y$10$93eZqmu7P8jvurzum7TODegC6U9sLTqdVg1LfHTF5WB5aSr3yczc2', 0, 0, '2024-01-19 11:22:50', '2024-01-19 11:22:50'),
(83, 'rohit rai', 'rohit', 'rai', 'vikasvikramrr@gmail.com', '918144256428', '$2y$10$gj3I1cm1YZcs7y7I00rCq.ScuFTzW1JDR6RIaYfo8Fs2avigXEMdC', 0, 0, '2024-01-19 11:23:15', '2024-01-19 11:23:15'),
(84, 'test18jan tikoo', 'test18jan', 'tikoo', 'vikasvikrameee@gmail.com', '918144256428', '$2y$10$MpO9DTApkgDdLOF2VKMxUOLt3n4yrquiceBG4LjeQcDZJWhPE1s46', 0, 0, '2024-01-19 11:24:19', '2024-01-19 11:24:19'),
(85, 'rohit rai', 'rohit', 'rai', 'rairohit@gmail.com', '918144256428', '$2y$10$tn4EAW.bT4IFMsAPWrI1V.N9iWkKjtqFgPjxovxHkBY16wWTtnWce', 0, 0, '2024-01-19 11:32:52', '2024-01-19 11:32:52'),
(86, 'test18jan tikoo', 'test18jan', 'tikoo', 'vikasvikramrai@gmail.com', '18144256428', '$2y$10$oYzB1ElSJH106sGjQg8.becaMW.X.LT752wGwW7x4lJqRbt2nMC7W', 0, 0, '2024-01-19 11:34:53', '2024-01-19 11:34:53'),
(87, 'rrr rrrr', 'rrr', 'rrrr', 'vikasvikrarrrrm@gmail.com', '918144256428', '$2y$10$FxpUuWXSkN7MnMPlQD1daujWSCiVjH7ciEVOCRaxBavwJ3RSt6dLO', 0, 0, '2024-01-19 11:37:34', '2024-01-19 11:37:34'),
(88, 'ee eee', 'ee', 'eee', 'vikaseeeevikram@gmail.com', '918144256428', '$2y$10$RLCH4OGLwDSOB1Y4PNgCHOYa8aPeTHWhHUIbkPZ06Qf8FbCvl0vAu', 0, 0, '2024-01-19 11:38:36', '2024-01-19 11:38:36'),
(89, 'Vikas Vikram', 'Vikas', 'Vikram', 'vikasvirkram@gmail.com', '918144256428', '$2y$10$rj4WCV.RnXN.dtdI/wesqeF2L28Setd8VkLr8uVqfZh/LOj96yp4O', 0, 0, '2024-01-22 07:07:13', '2024-01-22 07:07:13'),
(90, 'Vikas Vikram', 'Vikas', 'Vikram', 'vikasvirkram123@gmail.com', '918144256428', '$2y$10$MKxKxD6iRUF7C9zRWfEROegoFVcI8O./dI6650W9CjE0l7cjTj6dS', 0, 0, '2024-01-22 07:10:18', '2024-01-22 07:10:18'),
(91, 'Vikas Vikram', 'Vikas', 'Vikram', 'vikasvirkram1234@gmail.com', '918144256428', '$2y$10$atUG7M3x9zlknxbX31Ysq.B7qkhqDu/HVeVmBATuTI8NR4/QRTMPm', 0, 0, '2024-01-22 07:11:50', '2024-01-22 07:11:50'),
(92, 'Vikas Vikram', 'Vikas', 'Vikram', 'vikasvirkram123456@gmail.com', '918144256428', '$2y$10$4EDvy.hyyEgArCdwt9x3yeJP3OuqE6foWZFamZawYu.5dSRon2x4C', 0, 0, '2024-01-22 07:21:05', '2024-01-22 07:21:05'),
(93, 'rohit tikoo test', 'rohit tikoo', 'test', 'tikoorohit123@gmail.com', '918144256428', '$2y$10$835NeR.47x3xyT1s/UhqUOjTkUPsn8S.N48UlPtJiczbvPQ9nRpOS', 0, 0, '2024-01-23 06:01:32', '2024-01-23 06:01:32'),
(94, 'Rohit Tiku', 'Rohit', 'Tiku', 'rohit@gmail.com', '9656575757', '$2y$10$r6CdtO0uoCdTpwwLSevvE.1JhmqHqP/WwO27D1Xpy5Oea5r8LgN8G', 3, 0, '2024-01-23 00:00:00', '2024-01-23 00:00:00'),
(95, 'rohit test  12345678 test', 'rohit test  12345678', 'test', 'vikasvikram987@gmail.com', '918144256428', '$2y$10$daYqh92y2RtSMHhCo8izXe9b..kVNx3tEyz.FxxWoRtlFi3endvxW', 0, 0, '2024-01-24 06:05:26', '2024-01-24 06:05:26'),
(96, 'rohit test  12345678 test', 'rohit test  12345678', 'test', 'vikasvikram5566@gmail.com', '918144256428', '$2y$10$cNf.3/9CqD3u3oZ2SH3nPuoafIGXXRJeTBAAGx9ZE/cdV9ayULVe6', 0, 0, '2024-01-24 06:06:23', '2024-01-24 06:06:23'),
(97, 'lalit matta', 'lalit', 'matta', 'lalit@yamarkets.com', '91502462816', '$2y$10$jsJXaRBXEge8wO6Z.qsgGOOxpSx1PJgRo799GZLAzESBb2yJJvide', 0, 0, '2024-01-24 19:48:29', '2024-01-24 19:48:29'),
(98, 'rohit rai', 'rohit', 'rai', 'msdhoni@gmsil.com', '918144256428', '$2y$10$2L2w8mp6LF44fsATac1lqua3oLMNI4zXozDyS9NocDl3ToNntf0Nm', 0, 0, '2024-02-08 23:28:50', '2024-02-08 23:28:50'),
(99, 'Rohit Rai', 'Rohit', 'Rai', 'rohitrai275101122@gmail.com', '918144256428', '$2y$10$ygL1dVqri8Mr1Smai0.QtOrj0Qh.xahBSQmD/n7AjhYb6Nr3eBDIa', 0, 0, '2024-02-08 23:30:10', '2024-02-08 23:30:10'),
(100, 'rohit rai', 'rohit', 'rai', 'rohit@fxcarrers.com', '918144256428', '$2y$10$v8G4ELdX86FTmHsAl8oMK.Sd4UQQFb4h/Mio5NqruRYrvxJTK.faW', 0, 0, '2024-02-08 23:40:41', '2024-02-08 23:40:41'),
(101, 'sumit shah', 'sumit', 'shah', 'sumitshah@gmail.com', '918144256428', '$2y$10$Up26aiHa8UO3Qvsp06a9au5.dqjJhsGWY3rsebDJJamvHXt0b5fvu', 0, 0, '2024-02-09 11:49:51', '2024-02-09 11:49:51'),
(102, 'Aakanksha Mogha', 'Aakanksha', 'Mogha', 'aakanksha@fxcareers.com', '0987654321', '$2y$10$BCDr96W3l.74kxe1snhOqup7d30NckePem9gUacUZhdbhzxTYdNpq', 1, 0, '2024-02-13 00:00:00', '2024-02-13 00:00:00'),
(103, 'Rohit Rai', 'Rohit', 'Rai', 'rohitrai@gmail.com', '987654312', '$2y$10$b4nIe1bcvcuUFzBppMjEeOLpd4R4bK9KyHKRN4/XKbG4YwbKWs8G.', 1, 1, '2024-02-15 00:00:00', '2024-02-15 00:00:00'),
(104, 'Rohit Rai', 'Rohit', 'Rai', 'rohitpaymenttest@gmail.com', '918144256428', '$2y$10$/miLo6sM5I0ptiS0S6tXWez3CWCaNdxfGfWwD.4ySBGH9UqPQV9kC', 0, 0, '2024-02-15 09:39:36', '2024-02-15 09:39:36'),
(105, 'auth test 002 test', 'auth test 002', 'test', 'authtestuser@gmail.com', '918144256428', '$2y$10$.B/Scf31Q.eLIvBf/aCGpeczgKOBV5adNZSBJMXZ5z6SFSVPNCa3u', 0, 1, '2024-02-19 04:48:03', '2024-02-19 04:48:03'),
(106, 'Test Test', 'Test', 'Test', 'varunraj.b@googlemail.com', '918412091333', '$2y$10$vW6hP3rTeeu5V9eQaFw8nuQFuYS95hUb6h3fH4xnFhi0qhzMQjf7S', 0, 0, '2024-02-27 15:47:15', '2024-02-27 15:47:15'),
(107, 'sdsd sdsdsd', 'sdsd', 'sdsdsd', '28febdd@gmail.com', '8144256428', '$2y$10$Ki/KRutUvc2vd1ccSsXd2Ov5m93fFy.Cpw9ondrdvRRrHTCXDwJfK', 0, 0, '2024-02-28 06:13:04', '2024-02-28 06:13:04'),
(108, 'sdsd sdsdsd', 'sdsd', 'sdsdsd', '28f4444ebdd@gmail.com', '8144256428', '$2y$10$Nbr5/b4MsXR07Lp4VjGY2ekUcxFkJe3yUot/vOLY6cTKVS.66AMZy', 0, 0, '2024-02-28 06:13:52', '2024-02-28 06:13:52'),
(109, 'rohit rohit', 'rohit', 'rohit', 'rohitrohit@gmail.com', '8144256427', '$2y$10$.UtHBgf6WVXYM3WZZiJQA.kKC0esxc8t3noTYe0eM.iuAADaGCNlS', 0, 0, '2024-02-28 06:28:06', '2024-02-28 06:28:06'),
(110, 'adfdfsdfsdf asdfdsafdsdfddf', 'adfdfsdfsdf', 'asdfdsafdsdfddf', 'rohit28feb2024@gmail.com', '8144256428', '$2y$10$H2y5lyT582bJA7cAtW9w/eHUGMhRMWyCPN2O/HkhsTlxPqUT4iv12', 0, 0, '2024-02-28 06:32:52', '2024-02-28 06:32:52'),
(111, 'nitesh nitesh', 'nitesh', 'nitesh', 'niteshnitesh@gmail.com', '8144256428', '$2y$10$mf5YiespgDsV7HKwpJtkAOsrAFWJlGIbFtaPUyIAA2ZyIGMqJuyZC', 0, 0, '2024-02-28 06:34:25', '2024-02-28 06:34:25'),
(112, 'don don1', 'don', 'don1', 'abhi@gmail.com', '9853259845', '$2y$10$8VuEpdjuGeqMKhIAm.7S6.qRcHjlZseHg2sbx/WUWa1IX0ekjagN6', 0, 0, '2024-02-28 15:59:23', '2024-02-28 15:59:23'),
(113, 'don don1', 'don', 'don1', 'abhi@gmail.com', '9853259845', '$2y$10$lmYn.SJXOp0pLxKu9K5kiuPDjwQboyL9GVBYJgtWyjCA9D8Y.ffQq', 0, 0, '2024-02-28 15:59:23', '2024-02-28 15:59:23'),
(114, 'don1 don2', 'don1', 'don2', 'abhi1@gmail.com', '9853259842', '$2y$10$8KKUDSzvYhdwpcZ4lBx.MOwxvtNqfFFxOnWvZeVCZY18OfIqPWjGC', 0, 0, '2024-02-28 16:00:12', '2024-02-28 16:00:12'),
(115, 'don2 don3', 'don2', 'don3', 'abhi31@gmail.com', '9853259844', '$2y$10$EBlTkpjcS/z5HFpPfhif.uygzgb3CHrNITOc/LHmRRumAaNfqJs36', 0, 0, '2024-02-28 16:13:27', '2024-02-28 16:13:27'),
(116, 'namee lnamee', 'namee', 'lnamee', 'abhiaa@gmail.com', '9876543210', '$2y$10$OwBfIr0QzlLremKHYbk.2.84xggqS5aW6KnQYj0V4UPkWkcmu0r5y', 0, 0, '2024-02-28 16:25:18', '2024-02-28 16:25:18'),
(117, 'a aj', 'a', 'aj', 'asha@gmail.vom', '12345678908', '$2y$10$1thxpNrRosMkQN3SriaukeVfv/KPUpd3ytvTb2GAFY.foM.KIs.Jq', 0, 0, '2024-02-28 16:27:24', '2024-02-28 16:27:24'),
(118, 'nhh jjjj', 'nhh', 'jjjj', 'uu@gmail.com', '7756789888', '$2y$10$LeE0w44aK0JJerglBPtUnu51W8B6SavtPCLEMXTnRxYQhmU1LqyGu', 0, 0, '2024-02-28 16:30:09', '2024-02-28 16:30:09'),
(119, 'nhhh jjjjn', 'nhhh', 'jjjjn', 'uug@gmail.com', '7756789868', '$2y$10$CAS3DkXbTMKEnK/FXTMPQ.70cDw0BEMt3mQ8dwuG7eDR/DrmJ2XOq', 0, 0, '2024-02-28 16:36:01', '2024-02-28 16:36:01'),
(120, 'nhhhv jjjjng', 'nhhhv', 'jjjjng', 'uufg@gmail.com', '7756789868', '$2y$10$z1AUeeysRSGkAofskKjAtuvbSRdDrSvm.JqBQWMJl5S.2TVHL6AkG', 0, 0, '2024-02-28 16:37:22', '2024-02-28 16:37:22'),
(121, 'hshshsh hshshshshsh', 'hshshsh', 'hshshshshsh', 'hshshs@gmail.com', '6363636363', '$2y$10$yevLDTB3UvbkUguQ/kYkHedNkQJ9QUgfRMj5rkp8YnHef25BAJEMO', 0, 0, '2024-02-28 16:41:10', '2024-02-28 16:41:10'),
(122, 'hshshshhh hshshshshshbb', 'hshshshhh', 'hshshshshshbb', 'hshhshs@gmail.com', '6364636363', '$2y$10$96MGUWtm9pDIHLoLqG.qZOx4yIkR/.qVtvMYe1vw5oVX7Z.6vA3rO', 0, 0, '2024-02-28 16:43:24', '2024-02-28 16:43:24'),
(123, 'gzh hxh', 'gzh', 'hxh', 'lily@gmail.com', '1245677888', '$2y$10$1OwWtnA1daVg20.g9Jd1TuRv.pP7f1kNoeA0UbKk.sSdeyBLCFGCy', 0, 0, '2024-02-29 05:15:45', '2024-02-29 05:15:45'),
(124, 'gzhhh hxhujj', 'gzhhh', 'hxhujj', 'lilyg@gmail.com', '1245677884', '$2y$10$3WIPbZlHDQC8suhsUVvgVuRqYWDjao0jZWIEvpm3jU6Z/nQ8gCSAO', 0, 0, '2024-02-29 05:22:59', '2024-02-29 05:22:59'),
(125, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$SSkRg8M6uzcFHXa9rRgN.eRQsdjpEdl6zlE9e1ZwQ9./Lgaq/qhr.', 0, 0, '2024-02-29 05:24:13', '2024-02-29 05:24:13'),
(126, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$w6dewXyuuJP8kJUCYerycuP7/VnUCrsppDW0BK8relP9O7R/Wx..2', 0, 0, '2024-02-29 05:25:58', '2024-02-29 05:25:58'),
(127, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$odAiK3EHl9iYkRGgkLZmzusc/N8M94xQ4UPDKL4kw7HCeiVEh.yee', 0, 0, '2024-02-29 05:26:11', '2024-02-29 05:26:11'),
(128, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$XA3Tks3vG.VSi1broI.jNeVqMZM5uyKXMWHdmd.Wr.rPcsZfvQoZi', 0, 0, '2024-02-29 05:26:21', '2024-02-29 05:26:21'),
(129, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$TTHM4P22UhxygQLWecBQMuKaa4ZyyV0AVkKiaVn80rGF65GvzecJ2', 0, 0, '2024-02-29 05:26:54', '2024-02-29 05:26:54'),
(130, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$Q.SyJMrxPowkacAriHKnJe0xZV3yUf8qm8i7riFpzFEu4w5zzyPK.', 0, 0, '2024-02-29 05:27:09', '2024-02-29 05:27:09'),
(131, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$yeeVl5KJxspRv5zBnCPPy.kxueYGqAdSsYa0HD4qNt6NBCKqivuFW', 0, 0, '2024-02-29 05:27:31', '2024-02-29 05:27:31'),
(132, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$3pD2MXDAZ7.JvZrRwn3vw.iqsgo463Cyx7vImanQDsDWtS9zTOp9u', 0, 0, '2024-02-29 05:27:46', '2024-02-29 05:27:46'),
(133, 'gzhhhf hxhujjc', 'gzhhhf', 'hxhujjc', 'lilxyg@gmail.com', '1245677883', '$2y$10$eSleekNlXygXDRVRRLaf7OFd2mXlQ9PkcMZnpNhHCkdGFwvp.HbUS', 0, 0, '2024-02-29 05:27:59', '2024-02-29 05:27:59'),
(134, 'bnmmmm bbbnn', 'bnmmmm', 'bbbnn', 'vj@gmail.com', '7754353636', '$2y$10$OpvG/V0Ds4GW1G1c35kM4.DQVg1r2Lu8Cde3iqv5i/7MzLg7tx/4a', 0, 0, '2024-02-29 07:32:24', '2024-02-29 07:32:24'),
(135, 'dsfgdsfgsdf sdfgsdfgsdg', 'dsfgdsfgsdf', 'sdfgsdfgsdg', 'sfgsd@gmail.com', '7666666666', '$2y$10$1fGrWYJChzQdB1ni0Z0J/OWp8K04J2mvL0A5EbwS0Db3nlgl51SAC', 0, 0, '2024-02-29 08:00:28', '2024-02-29 08:00:28'),
(136, 'h hghg', 'h', 'hghg', 'fgf@gmail.com', '1234567890', '$2y$10$fzlGh3qOuVdeDqy5BFWEC.w0cYPvXT/E8L3LYW.v2HRe1xzYzW9vm', 0, 0, '2024-02-29 08:01:33', '2024-02-29 08:01:33'),
(137, 'sumit shah', 'sumit', 'shah', 'sumisumit@gmail.com', '918144256428', '$2y$10$VwKhTTcOqsF33L1N8juyWefY5Wff4puyr427/2UUI0MYxvtQVkk1K', 0, 0, '2024-03-06 08:37:45', '2024-03-06 08:37:45'),
(138, 'mandeep singh', 'mandeep', 'singh', 'mandeepsingh@gmail.com', '918144256428', '$2y$10$xMqLSUuOUPRQCLwHzBHvCeKr85ujUyimy72ZfhnVebH8wxAqo67xO', 0, 1, '2024-03-06 16:49:29', '2024-03-06 16:49:29'),
(139, 'manoj kumar', 'manoj', 'kumar', 'manojkumar@gmail.com', '918144256428', '$2y$10$asCXYfgkwj9WGXnJK5x6d.8AZGfSXdVz70L.mrLEafiF1AWXdWgA.', 0, 1, '2024-03-06 16:53:17', '2024-03-06 16:53:17'),
(140, 'mandeep singh', 'mandeep', 'singh', 'vikasvikrams@gmail.com', '918144256428', '$2y$10$01NAImRHui/0gwNJFUg59OBE91QYvFMar4HjEYc58eihKhwWjJqpe', 0, 0, '2024-03-06 17:24:17', '2024-03-06 17:24:17'),
(141, 'mrigank goswami', 'mrigank', 'goswami', 'mriganx@gmail.com', '918144256428', '$2y$10$DSD.0iTaoVm.jek1vIw2GuM9Bq/mxoI5sFD1jbDkOyPnKEDMJznQy', 0, 0, '2024-03-06 17:25:57', '2024-03-06 17:25:57'),
(142, 'rohit rai', 'rohit', 'rai', 'rohit0101rm@gmail.com', '918144256428', '$2y$10$RRiKKHXEaqQZbdHEZhoOnuv3V5/NSbhzR7SCfAOxuT2lSDWJm8NqK', 0, 0, '2024-03-07 03:11:24', '2024-03-07 03:11:24'),
(143, 'mahip gupta', 'mahip', 'gupta', 'mahip@gmail.com', '918707599076', '$2y$10$ObqYS6/gUzHd.pEsjTcpeOiE1/I0PQQTC9Hg5Hv7RP9BbK/PJdHPy', 0, 1, '2024-03-07 05:26:44', '2024-03-07 05:26:44'),
(144, 'lily sharma', 'lily', 'sharma', 'lily.sharma@gmail.com', '911234567890', '$2y$10$Fk6DGD2g1bKE4viOak7GpOr194SIjjvtXePgzAh3WHZCknFbo.VVW', 0, 0, '2024-03-07 05:32:34', '2024-03-07 05:32:34'),
(145, 'aa', '', '', 'aakanksha@gmail.com', '', '$2y$10$Y1.Li4Bdk6dQGoLER.fJiei3cpADTGKFFTNCFloLm6MMZcXIH8A0i', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'aakanksha', '', '', 'aakumogha@gmail.com', '', '$2y$10$aYichykz2srGpzb3BmgxpuhCsbDbBsgsIMMYOukXvks1nIRfg03SG', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'aakanksha', '', '', 'aakumogha@gmail.com', '', '$2y$10$DVgSuAUnfWeZrLvXOLOG7eSh50mlsRso3YrXkgfNb4kPx.jJPvJPy', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'abhinav', '', '', 'abhinav@gmail.com', '', '$2y$10$eiC5jBW3e/JkEoGdB3PteurLwDdVf8oEqETIZSC4EfdDUz3oUFrWK', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'aa', '', '', 'mahip@gmail.comss', '', '$2y$10$RFuxbZb4uVDMdsRrazfsSewKJvzlxYeIymP4mRXXwS76yC9N4kmt6', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'lili', '', '', 'lili@gmail.com', '', '$2y$10$lG.aWjbqBDGHBxb38/Mg0OVTyIgp/zE7Ce/gM89sQWHHJHeTryMTa', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'sumit mohanty', 'sumit', 'mohanty', 'sumitmohanty@gmail.com', '918144256428', '$2y$10$OvX4R9o9NKGt.tLEfZB71OYGiKwf5Sb5QHTRTzNxwYTu0FDJPblXS', 0, 1, '2024-03-07 10:28:41', '2024-03-07 10:28:41'),
(153, 'rohit rai premium user test zxsx', 'rohit rai premium user test', 'zxsx', 'rrprem@gmail.com', '08144256428', '$2y$10$gZVP1XwxMv4NCraKp2.x1eliqGLaobkBac1ffaUqJ/ph6l75aOHQq', 0, 0, '2024-03-07 16:36:57', '2024-03-07 16:36:57'),
(154, 'rohit rai', 'rohit', 'rai', 'rohit010rtt@gmail.com', '08588998099', '$2y$10$kzgeDgVZ1gB56gGF.3F4.eoODhTli86v4ORbAOM.KuwxydwRXs/yW', 0, 0, '2024-03-07 16:48:26', '2024-03-07 16:48:26'),
(155, 'rohit rai', 'rohit', 'rai', 'rohit0101rmaxa@gmail.com', '08588998099', '$2y$10$nwz9JvwZ2lSyYmebd1/Mg.KtGtLHOp.Im/X39ov4Qz6s19bPok3s6', 0, 1, '2024-03-07 16:49:02', '2024-03-07 16:49:02'),
(156, 'rohit rai', 'rohit', 'rai', 'rohit0101rmASASASAS@gmail.com', '08588998099', '$2y$10$7Ax3GS3lZRqvr5xjFQ0OQuipe/G5AypDP7Ch2FPbKcoDkNcWd8.5.', 0, 1, '2024-03-07 16:52:50', '2024-03-07 16:52:50'),
(157, 'rohit rai', 'rohit', 'rai', 'rohittest@gmail.com', '08588998099', '$2y$10$Iglteo9jaOVXZpJW9c4QjOO7AEY4zo5PsJIjg7QHVGe8wbN86fPp6', 0, 0, '2024-03-07 16:55:14', '2024-03-07 16:55:14'),
(158, 'Rohit Rai', 'Rohit', 'Rai', 'rohit0101rmz@gmail.com', '08144256428', '$2y$10$NtEdCd0JM3rE6Ihkng8e5uLAHAByt.IAmaJIvmVbSyy..mF9WjfJq', 0, 1, '2024-03-07 16:55:59', '2024-03-07 16:55:59'),
(159, 'rohit rai', 'rohit', 'rai', 'rohit0101rmazxa@gmail.com', '918144256428', '$2y$10$jMTkG2RSuHK1c9btAy0HzOQW88dq4xpQHeoM1aY0zGfAQeOTbrnry', 0, 1, '2024-03-07 16:59:04', '2024-03-07 16:59:04'),
(160, 'rohit rai', 'rohit', 'rai', 'asasarohit0101rmazxa@gmail.com', '08588998099', '$2y$10$JmRq.4kr6FZ9RPTuw1PHcu/2vjnNJhonkXSzLj56sHV/vIrTcGqdO', 0, 1, '2024-03-07 17:01:12', '2024-03-07 17:01:12'),
(161, 'Rohit Rai', 'Rohit', 'Rai', 'rohit01asdasd01rm@gmail.com', '918144256428', '$2y$10$m0dJSaPwaP6xmVHUk9sQDeuAQl2VedGfKjxH/PB0y.23cpruezZZO', 0, 1, '2024-03-07 17:04:58', '2024-03-07 17:04:58'),
(162, 'Rohit Rai', 'Rohit', 'Rai', 'aaarohit0101rm@gmail.com', '918144256428', '$2y$10$1leE7cKllSl9DV.H0w420.l8U4bnr4fo3ADxlfLFs5c/7c5XweV.q', 0, 1, '2024-03-07 17:06:02', '2024-03-07 17:06:02'),
(163, 'aa', '', '', 'mahip@gmail.comss', '', '$2y$10$aYichykz2srGpzb3BmgxpuhCsbDbBsgsIMMYOukXvks1nIRfg03SG', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Rohit Rai', 'Rohit', 'Rai', 'rohitrairohitrai@gmail.com', '088144256428', '$2y$10$PQLjVcVq99ucv4zv0QHDUupcUJ7PECX0hokNsDk45eX8arNUTLE4G', 0, 0, '2024-03-08 02:48:56', '2024-03-08 02:48:56'),
(165, 'Rohit Rai', 'Rohit', 'Rai', 'rohit0101rmaxaxx@gmail.com', '08144256428', '$2y$10$SVlg6zhUuK67P3MXqpRuJeAc2O2fXvIWl5w2PkWMg3amU6zgJiNVK', 0, 1, '2024-03-08 02:54:33', '2024-03-08 02:54:33'),
(166, 'Rohit Rai', 'Rohit', 'Rai', 'rohit0101rZxaxxsxsxsm@gmail.com', '08144256428', '$2y$10$SGPs0XTmx02Z7L.iQgHrxut0Zg/spY4JmZbY0IUjWpYr/sJPJVQmS', 0, 1, '2024-03-08 02:59:14', '2024-03-08 02:59:14'),
(167, 'zcxzcxc xcxcxc', 'zcxzcxc', 'xcxcxc', 'xcxcxcxxxxsdsfgv@gmail.com', '918144256428', '$2y$10$XHN7GM05g3WMB4/LKIHOWOxdQcn12.nh5AXCcP.e6t3CFimJKPMBW', 0, 0, '2024-03-08 04:22:45', '2024-03-08 04:22:45'),
(168, 'aaas asasasss', 'aaas', 'asasasss', 'aasdaaddddaa@gmail.com', '918144256428', '$2y$10$5MkwJL09CZdLJL.O9iSd.OxGID2FpwxtOzpodWYLp3CGvg.Wvxmum', 0, 0, '2024-03-08 04:34:24', '2024-03-08 04:34:24'),
(169, 'Nitesh Mahto', '', '', 'niteshautssdhor@gmail.com', '', '$2y$10$27j/ToQnC.rtJQ9EswcbnewsQ31jahFd19GLyrpw/zujlj66ah.5C', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'abhinav rajput', 'abhinav', 'rajput', 'abhinavrajput@gmail.com', '1643179062', '$2y$10$aYichykz2srGpzb3BmgxpuhCsbDbBsgsIMMYOukXvks1nIRfg03SG', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'aakanksha mogha', 'aakanksha', 'mogha', 'aakanskhamogha@gmail.com', '1234567890', '$2y$10$CK34Z/QRm9pTnSrieT80Gu3zLXuF1qcGgd34qmibU1u1l0sf4J6WW', 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Rohit Rai', 'Rohit', 'Rai', '8marchsdsd@gmail.com', '08144256428', '$2y$10$EHp.GKz4gCbXem4yhkbxCO/GuwIaq5kE9RAPDOcwBbG8dc1QtcPV.', 0, 0, '2024-03-08 15:09:39', '2024-03-08 15:09:39'),
(173, 'Rohit Rai', 'Rohit', 'Rai', 'rohit0a101rm@gmail.com', '08144256428', '$2y$10$c9UhlBB8.xakFomxDPe5Z.9XlAKj9aeVyxekTKNBIIWU9Q2lkUOdm', 0, 1, '2024-03-10 13:30:44', '2024-03-10 13:30:44'),
(174, 'rohit11march Rai', 'rohit11march', 'Rai', 'rohittest11march@gmail.com', '918144256428', '$2y$10$c2hfIecndUNQbzgjheJ.k.mTn0cb128UtZaYdVq0i5VGAavQuIPe.', 0, 1, '2024-03-11 04:27:44', '2024-03-11 04:27:44'),
(175, 'Rohit Rai', 'Rohit', 'Rai', 'rohitrai11marchtest@gmail.com', '918144256428', '$2y$10$FSyjTq0hHB74Go5IKNdmt.rWDSfGmOApX85UD9ZNrqy4XaAAPfZd2', 0, 0, '2024-03-11 05:12:28', '2024-03-11 05:12:28'),
(176, 'sumit Rai', 'sumit', 'Rai', 'rohitraisignalstest11march@gmail.com', '918144256428', '$2y$10$V1vHT4P7HK6olDXyhvrgw.lNK7eI7h44t5wCINAdSjOpbDd7Frh02', 0, 1, '2024-03-11 05:23:57', '2024-03-11 05:23:57'),
(177, 'aakanksha mogha', 'aakanksha', 'mogha', 'mogha@gmail.com', '1580765467', '$2y$10$9Fv0mOqCEpAv4o6AtsjQPOYBvPJeQqw0jlY/30NGU.s6Np4Bmvcrq', 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'sumit test', 'sumit', 'test', 'testsumtsm@gmail.com', '8144756428', '$2y$10$V8sYck5J96INhIe2u75rlehqNbBTapnY5ICrWEoHwk3Ulq4zRU/La', 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Rohit Rai', 'Rohit', 'Rai', 'rohit0101rm@gmail.com', '08144256428', '$2y$10$LWni5EVohaItQBT527WHUuAgjl4.C58w3sV3M33AepSBqleu1W7Iy', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Rekha Sharma', 'Rekha', 'Sharma', 'rekha@fxcareers.com', '9990158498', '$2y$10$0K88lmW/3kXi/X7TJwdyK.7nUJrsIAbokBsVo2QtChgM1ybV5Mizy', 6, 0, '2024-03-11 00:00:00', '2024-03-11 00:00:00'),
(181, 'Lalit Matta', 'Lalit', 'Matta', 'lalit@fxcareers.com', '1234567890', '$2y$10$pBluku2Qu0r2BYB0ZmZgQuJmQZ3pErFjOA4fBRVnEaKVExReiC.5W', 1, 0, '2024-03-11 00:00:00', '2024-03-11 00:00:00'),
(182, '', 'Rekha', 'Mogha', 'aakanksha@fxcareers.com', '1234567890', '12', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'admin', 'Lalit', 'Mogha', 'aakanksha@gmail.com', '7786786767', 'l', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `news_id`, `user_id`) VALUES
(56, 3, 75),
(57, 2, 75),
(58, 2, 77),
(59, 5, 77),
(60, 3, 77),
(63, 2, 78),
(64, 3, 78),
(65, 5, 78),
(66, 4, 78),
(68, 3, 79),
(70, 2, 79),
(71, 2, 80),
(91, 2, 81),
(92, 5, 96),
(96, 34, 94),
(97, 36, 81),
(98, 36, 103),
(99, 37, 143);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_pricing`
--
ALTER TABLE `author_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_pricing_features`
--
ALTER TABLE `author_pricing_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_profile`
--
ALTER TABLE `author_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_role`
--
ALTER TABLE `author_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broker`
--
ALTER TABLE `broker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broker_detail`
--
ALTER TABLE `broker_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `closed_signals`
--
ALTER TABLE `closed_signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_pair`
--
ALTER TABLE `currency_pair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economic_calender`
--
ALTER TABLE `economic_calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forecast`
--
ALTER TABLE `forecast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagebank`
--
ALTER TABLE `imagebank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_rate`
--
ALTER TABLE `live_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_primer`
--
ALTER TABLE `market_primer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_sub_category`
--
ALTER TABLE `news_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_features`
--
ALTER TABLE `pricing_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signals`
--
ALTER TABLE `signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signal_manager`
--
ALTER TABLE `signal_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signal_manager_profile`
--
ALTER TABLE `signal_manager_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_type`
--
ALTER TABLE `sub_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading_signals`
--
ALTER TABLE `trading_signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_image`
--
ALTER TABLE `upload_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `author_pricing`
--
ALTER TABLE `author_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `author_pricing_features`
--
ALTER TABLE `author_pricing_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `author_profile`
--
ALTER TABLE `author_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `author_role`
--
ALTER TABLE `author_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `broker`
--
ALTER TABLE `broker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `broker_detail`
--
ALTER TABLE `broker_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `charts`
--
ALTER TABLE `charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `closed_signals`
--
ALTER TABLE `closed_signals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `currency_pair`
--
ALTER TABLE `currency_pair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `economic_calender`
--
ALTER TABLE `economic_calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forecast`
--
ALTER TABLE `forecast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagebank`
--
ALTER TABLE `imagebank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learn`
--
ALTER TABLE `learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `live_rate`
--
ALTER TABLE `live_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market_primer`
--
ALTER TABLE `market_primer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_sub_category`
--
ALTER TABLE `news_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricing_features`
--
ALTER TABLE `pricing_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signals`
--
ALTER TABLE `signals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signal_manager`
--
ALTER TABLE `signal_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signal_manager_profile`
--
ALTER TABLE `signal_manager_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sub_type`
--
ALTER TABLE `sub_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trading_signals`
--
ALTER TABLE `trading_signals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_image`
--
ALTER TABLE `upload_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
