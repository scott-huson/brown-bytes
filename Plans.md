<b>Brown Record for Exchange of Non-Fungible Goods<br/>
Catchy Name: Brown Bytes<br/>
Author: Scott B Huson (2021.5) <br/>
Updated: May 15th, 2018 <br/>
Plans for V0.1 Completed by September 2018 for community release<br/>
<br/>
<u>Table of Contents:</u><br/>
Abstract:	1<br/>
Problem Statement:	1<br/>
The System:	2<br/>
Legal:	2<br/>
Outline of the platform:	3<br/>
Long Term Plan:	4<br/>
Expected Growth (Updated):	5<br/>
System Design:	7<br/></b>

<u>Abstract:</u>
<p>The goal of this project is to enable the transmission and liquidity of non-liquid storage of value, in the closed community of a college campus. Through the construction of a platform of exchange and fully unregulated unit of value, it will be studied how a virtual currency can artificially effect traditionally non-transferrable goods. Additionally, the optimal methods of platform introduction, community adoption, and rate of growth will be studied to aid in the development of more robust, flexible, and accessible solutions. Since the end goal of the project is only the implementation of ideas only studied theoretically in a classroom setting, any monetary gains made by the platform will be distributed to its users proportionally based on their current share of the currency.</p>
<br/>
<u>Problem Statement:</u><br/>
<p>College campuses are highly competitive markets with active peer to peer marketplaces. College campuses also traditionally have a low supply of fiat due to the fact that many college students are cheap or on financial aid. As a result of these factors and others, such as student dorm movement and an excess of student time, in many college campuses there is a high potential market activity. While student populations can seem diverse in thought and activity, as a population their purchasing habits are very similar. It is common for student led organizations or firms to take advantage of these semi-homogeneous student populations to target them with promotions and other sales tactics.</p>  <br/>

<p>At Brown University, there are several dining policies that are inconvenient for its students. The most prominent of these policies is the unequal cost and value of meal plans. Brown students can choose one of several meal plans to be able eat in university dining halls. Each of the plans has its downsides. With the most popular plan, a student gets 20 passes (swipes) to an all you can eat style dining area and can use those passes in a different form (points) to buy at other dining halls that don’t take swipes as a form of payment. Every week the old swipes expire and new ones are given. Under the second most popular plan, a student receives half their semester worth of food in swipes and half in points, and their balance is held for the entire semester. While these are the two most prominent plans, every smaller plan gives less value for the amount of money paid. There are several clear problems with this system. Firstly, students on the first meal plan cannot save up swipes, and also when using those swipes as points they only get 75% of the original value. Secondly, students on the other meal plans do not get as much value overall as the students on the first plan. Neither of the plans allows students to hold meal value in long term situations.</p> <br/><br/>
<u>System:</u><br/>
<p>This system was designed initially to sidestep the problems with the meal system almost entirely, but has been extended to other campus ‘assigned’ assets like paw prints and bear bucks. The system is designed to allow students to post and place offers on the sale of meal swipes, points, and guest passes. It will allow students to buy things in the place of other students (the student buying for another student will have to be present, to abide by dining policy), and in return, get virtual credit for that transaction. This virtual credit can be saved indefinitely, potentially until a student is off meal plan or would like to make a transaction for another good. The goal of the system is to eliminate the loss of value at the end of the semester for students that have an excess of points, and to help students that have no credit to eat without having to spend any real money.</p><br/><br/>
<u>Legal:</u><br/>
The creators and anyone involved in the construction and implementation of this project are not liable for anything done through the use of the platform nor can be held accountable for activities done explicitly through the use of the platform.<br/>
The creators and managers of the project are not liable for any loss of funds, or any other unit of value, due to errors in the construction of the platform. <br/>
The use of the platform is not restricted to any population or group except those within the Brown community.<br/>
The use of the platform is meant to be purely beneficial to its user base and the creators and managers do not and never will directly benefit from the use of the platform by other users besides through the personal use of the platform.<br/><br/>

<u>Outline of the platform:</u><br/>
Enables the unregulated private transfer of units from person to person (represented as accounts).<br/>
Encourages the creation of new users and incentivizes both parties involved with a new user purchase.<br/>
Enables the facilitation of transactions between unknown and unrelated parties.<br/>
Enables access to the platform with simple user verification and security in order to maximize community outreach and access. <br/>
Stores an anonymous ledger of transactions and their parties. <br/>
Facilitates the use of outside applications’ access to that database.<br/><br/>

<i>Warning: Everything below this line has not been styled. Proceed at your own risk!</i>

<u>Default platform specifics:</u><br/>
Semi-locally hosted web server with database (Move to Google Cloud Platform with www.brownbytes.org domain)<br/>
Web platform with required user authentication<br/>
Secure network protocols (HTTPS)<br/><br/>
Easy to use UI:<br/>
User information:<br/>
Current Balance<br/>
Sign up date<br/>
Past transactions<br/>
New transaction:<br/>
Easy user search and identity transferral (QR code?)<br/><br/>
Database specifics:<br/>
User has hashed address<br/>
Hashed addresses are used to find information in database from list of historical transactions <br/>
Pretty much anonymous for all external users<br/>
Karma system (still working on this) need a system to remove the risk for unreputable users:<br/>
Goal: avoid new users from being defrauded, reward users that help other new users get started<br/>
Avoid all users from being defrauded<br/>
Give both users power in the transaction<br/>
Maybe to increase platform use specifically in this market, a page will be created for marketplace posts.<br/>
Idea, posts will include location of the post, expiration date and other types of characteristics<br/>
Main page will include sorting for that page<br/><br/>
Currency minting: <br/>
Everytime a new user joins, they are given the ability to mint a certain amount of new tokens (see point 3)
Their account balance is negative, and they can make purchase orders and new units of currency will be deposited in the other party’s balance.<br/>
Unlike with other digital currencies, the supply of money in this case will naturally be inflationary, in order to encourage spending<br/>
Promotes user reputations and platform use
Long Term Plan:<br/>
Build system with basic secure web interface and offer interface for users(Finish by August 2018)<br/>
Build transaction system with balances and interfaces for interpersonal transactions. <br/>
Build compatibility with other applications (Winter 2018)<br/>
Release at Brown (Late August start of semester 2018)<br/>
Scale up for other college campuses<br/>
Implement decentralization maybe<br/>
IDK?<br/><br/>

<br/>
<br/>
Please excuse the bad styling, this was initially built on a word document.
<br/>
<br/>

<u>Expected Growth (Updated):</u><br/>
	<p>Metcalfe’s law states that the effect of a network is proportional to the square of the number of users connected by that network (n^2). This law was initially meant for telecommunication networks, whos user base was connected through the use of mobile devices (telephones). By associating this law to internet communities based on an exchange of value, it is possible to approximate the value of a system as a whole to being the effect of that system on the community. Empirical data (facebook) has indicated that this n^2 increase in value per user is actually only true for smaller values of n, whereas n*log(n) is more accurate for larger values of n. While is it clear that this research is logical, it is unclear whether the cutoff or transition between these two models is small enough to be included in a population of a small college campus. Data collected in the implementation of this platform will be used to make this determination. 
	If the value of a community increases with the growth of that community, it is logical that that growth will accelerate as the incentive to join increases. In the earlier stages of growth, the natural incentive (from the use of the platform) will logically be low due to the few amount of users, and therefore it may be beneficial to include extra incentive to join the platform. As the community progresses this incentive should be lowered because it is no longer necessary. In this experiment however, the only form of currency creation is from new users, and therefore the initial incentive will not be lowered. 
	Green is new user benefit to sign up.
	Blue is the estimated initial minting to incentivize new users.
	As shown in the graphic, initially the incentive for signing up will be low because there will be very few users using the service. This low benefit will hopefully be mitigated by the fact that there will be minting for new user. As the community of users gets larger, there will be a larger incentive to sign up, because it is more likely to be easy to find other students wanting to make a transaction, so the minting should be lower. As community adoption approaches zero, there should be very little minting. This means that the total amount of currency in the system should be fixed after the entire community has adopted the platform.
	Karma values will stay constant.
System Design:
Update (May 15, 2018):
	From a User perspective, for most web-based systems the visual appeal of a system mentioned above is probably the most important factor. Other important factors include user interface speed and ease of user involvement. For systems involving the transfer of value, the range of use cases for that system is also of great importance. In the case of the popular but relatively primitive payment service PayPal, it has use cases in thousands of websites and from this derives its value. Its establishment as the main online fiat transfer method in the western world has grown mainly due to its convenient and user friendly API, but its API is largely what has prevented it from expanding even further. More advanced electronic payment methods, largely unavailable in the western world, such as weChat and AliPay, have vastly larger reliant user bases, and this is due to their convenient integration. The use of QR code scanning for instant payment is an example of an improvement over paypal’s primitive payment services.
The result of this is that the first thing built on this platform is simple integration with any other service (an API in other words). Only after this is complete, will basic example platforms be built with this API.<br/> 
Update (May 19, 2018):
	Check frontend and backend files for more detailed info. Decided to split web development into stages. First build web server and browser support (php, jquery ajax, and mysql). Second, build API connection into web server (php extensions, api key verification). Third, build IOS and Android apps that reference the API (plan is to use react.js just for ease of construction). 
Goals: 
Build web server and browser support: 
Setup
Build basic CMS with session and cookies
Decide sitemap navigation
Automatic styling
Login and user functionality
Register User
Email verification
Forgot password
Reset password
Contact Page
Homepage
Module dynamicness
Template Styling
Market Page
Transaction Page
User Actions
API
No authentication
Get recent transactions
Get user details
Get user authentication
Authenticated
Get transactions
Get User information
Transaction Actions
Mobile:

June 13, 2018:
	Decided to use Phalcon PHP framework to make web version design easier and more scalable. Still going to write the API in native PHP. Added frontend and backend documentation if you are interested in that kind of thing and can handle a bit of shitty code writing and PHP. I can always just release the github version.

July 18, 2018:
	Finished the main interface and page have moved drastically closer to actual working prototypes. Decided that will implent basic scaffolds for the entire protocol first to allow early launch dates. 
	Initially will begin with a platform to publish food donation offers, and incuding calendar updates provided by Brown Bites(facebook). Later the full transaction protocol will be released with user balances and leveled statuses. Phalcon php framework drastically reduced the amount of grunt work, and the INVO sample application really helped get a working model to build on the database integration. Fuck PHQL honestly tho, SQL rules!
August 24, 2018:
	Finished the main portion of the website, including user profiles and offer creation. The system works in every way, and has been tested to a certain extent. The transaction protocol is scaffolded but has not been implemented on the website in a way that will alloy users to create transactions from offers. In this way I plan to develop the transaction protocol while the offer section of the website is live. The phalcon is super helpful and its really made things alot faster, making what I like to do (backend database stuff) easy while the styling is pretty much done for me.<br/>
	I have bought the domain brownbytes.org, and I plan to move the server over in the coming weeks? Today I am planning on integrating the Brown bites calendar into the application, may have to change the database offer date protocol. 
	As soon as I can put the site live, I can post on facebook groups for visibility and hopefully get some exposure before I release V1. Peace!
May 19, 2019:
	Many features have been implemented since last update. Noticed that the whole offer system just isn't usable without a critical mass of highly motivated people. I decided to build a free food calendar into the website as a way of attracting people to post offers. Then I realized that there was really no motivation to post offers, so I tranformed the website into primarily a free food calendar, which it is very good at :). After implementing scraping for events.brown.edu, automatic email scraping for today@brown initially using a Naive Bayes classifier to detect free food in descriptions, but then just automatic because the classifier was terrible, I added in user creation of events on the calendar, admin management and pretty much just brought it into production.
	Right now it is being hosted a Google Cloud Platform VM, costing about 25 cents per day. 
	Visit at brownbytes.org.
	Also I have discussed partnering with BSA, a brown group that does storage and a bunch of other stuff on campus. 














